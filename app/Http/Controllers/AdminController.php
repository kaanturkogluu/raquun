<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\TargetClient;
use App\Models\InstagramLead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    // ==========================================
    // AUTHENTICATION
    // ==========================================
    public function loginForm()
    {
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $throttleKey = Str::transliterate(Str::lower($request->input('email')) . '|' . $request->ip());

        // Check if user has exceeded 5 failed attempts
        if (RateLimiter::tooManyAttempts($throttleKey, 5)) {
            $seconds = RateLimiter::availableIn($throttleKey);
            return back()->withErrors([
                'email' => "Güvenlik uyarısı: Çok fazla başarısız giriş denemesi yapıldı. Lütfen {$seconds} saniye sonra tekrar deneyin.",
            ])->onlyInput('email');
        }

        if (Auth::attempt($credentials, $request->filled('remember'))) {
            RateLimiter::clear($throttleKey);
            $request->session()->regenerate();
            return redirect()->intended(route('admin.dashboard'))->with('success', 'Hoş geldiniz!');
        }

        // Increment failed attempt counter with 60-second decay
        RateLimiter::hit($throttleKey, 60);

        return back()->withErrors([
            'email' => 'Girdiğiniz bilgiler eşleşmedi. Lütfen tekrar deneyin.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login')->with('info', 'Oturum kapatıldı.');
    }

    // ==========================================
    // DASHBOARD & TABS
    // ==========================================
    public function dashboard(Request $request)
    {
        $activeTab = $request->query('tab', 'projects'); // projects, clients, instagram

        $stats = [
            'projects_count' => Project::count(),
            'clients_count' => TargetClient::count(),
            'instagram_count' => InstagramLead::count(),
            'instagram_pending' => InstagramLead::where('outreach_status', 'incelenecek')->count(),
        ];

        $projects = Project::orderBy('order_num')->orderByDesc('created_at')->get();
        $clients = TargetClient::orderByDesc('created_at')->get();
        $instagramLeads = InstagramLead::orderByRaw("CASE priority WHEN 'yuksek' THEN 1 WHEN 'orta' THEN 2 ELSE 3 END")
                                       ->orderByDesc('created_at')
                                       ->get();

        return view('admin.dashboard', compact('stats', 'activeTab', 'projects', 'clients', 'instagramLeads'));
    }

    // ==========================================
    // PROJECTS (ÖNCEKİ İŞLER) CRUD
    // ==========================================
    public function storeProject(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string',
            'price_text' => 'nullable|string|max:100',
            'client_name' => 'nullable|string|max:255',
            'description' => 'required|string',
            'tags' => 'nullable|string',
            'project_url' => 'nullable|string',
            'is_featured' => 'nullable|boolean',
            'order_num' => 'nullable|integer',
        ]);

        $validated['is_featured'] = $request->has('is_featured');
        $validated['order_num'] = $validated['order_num'] ?? 0;

        Project::create($validated);

        return redirect()->route('admin.dashboard', ['tab' => 'projects'])
                         ->with('success', 'İş / Referans başarıyla eklendi.');
    }

    public function updateProject(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string',
            'price_text' => 'nullable|string|max:100',
            'client_name' => 'nullable|string|max:255',
            'description' => 'required|string',
            'tags' => 'nullable|string',
            'project_url' => 'nullable|string',
            'is_featured' => 'nullable|boolean',
            'order_num' => 'nullable|integer',
        ]);

        $validated['is_featured'] = $request->has('is_featured');

        $project->update($validated);

        return redirect()->route('admin.dashboard', ['tab' => 'projects'])
                         ->with('success', 'Proje güncellendi.');
    }

    public function deleteProject(Project $project)
    {
        $project->delete();
        return redirect()->route('admin.dashboard', ['tab' => 'projects'])
                         ->with('success', 'Proje silindi.');
    }

    // ==========================================
    // TARGET CLIENTS (HEDEF MÜŞTERİ LİSTESİ) CRUD
    // ==========================================
    public function storeClient(Request $request)
    {
        $validated = $request->validate([
            'company_name' => 'required|string|max:255',
            'contact_person' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:100',
            'email' => 'nullable|string|max:255',
            'sector' => 'nullable|string|max:255',
            'need_type' => 'nullable|string|max:255',
            'estimated_budget' => 'nullable|string|max:100',
            'status' => 'required|string',
            'notes' => 'nullable|string',
        ]);

        TargetClient::create($validated);

        return redirect()->route('admin.dashboard', ['tab' => 'clients'])
                         ->with('success', 'Hedef müşteri listeye eklendi.');
    }

    public function updateClient(Request $request, TargetClient $client)
    {
        $validated = $request->validate([
            'company_name' => 'required|string|max:255',
            'contact_person' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:100',
            'email' => 'nullable|string|max:255',
            'sector' => 'nullable|string|max:255',
            'need_type' => 'nullable|string|max:255',
            'estimated_budget' => 'nullable|string|max:100',
            'status' => 'required|string',
            'notes' => 'nullable|string',
        ]);

        $client->update($validated);

        return redirect()->route('admin.dashboard', ['tab' => 'clients'])
                         ->with('success', 'Müşteri bilgisi güncellendi.');
    }

    public function deleteClient(TargetClient $client)
    {
        $client->delete();
        return redirect()->route('admin.dashboard', ['tab' => 'clients'])
                         ->with('success', 'Hedef müşteri kaydı silindi.');
    }

    // ==========================================
    // INSTAGRAM LEADS (İNCELENECEK HESAPLAR) CRUD
    // ==========================================
    public function storeInstagram(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string|max:255',
            'profile_url' => 'nullable|string|max:500',
            'follower_count' => 'nullable|string|max:100',
            'sector' => 'nullable|string|max:255',
            'current_website' => 'nullable|string|max:255',
            'problem_opportunity' => 'nullable|string',
            'outreach_status' => 'required|string',
            'priority' => 'required|string',
            'detailed_notes' => 'nullable|string',
        ]);

        // Clean username
        $validated['username'] = ltrim($validated['username'], '@');
        if (empty($validated['profile_url'])) {
            $validated['profile_url'] = 'https://instagram.com/' . $validated['username'];
        }

        InstagramLead::create($validated);

        return redirect()->route('admin.dashboard', ['tab' => 'instagram'])
                         ->with('success', '@' . $validated['username'] . ' inceleme listesine eklendi.');
    }

    public function updateInstagram(Request $request, InstagramLead $lead)
    {
        $validated = $request->validate([
            'username' => 'required|string|max:255',
            'profile_url' => 'nullable|string|max:500',
            'follower_count' => 'nullable|string|max:100',
            'sector' => 'nullable|string|max:255',
            'current_website' => 'nullable|string|max:255',
            'problem_opportunity' => 'nullable|string',
            'outreach_status' => 'required|string',
            'priority' => 'required|string',
            'detailed_notes' => 'nullable|string',
        ]);

        $validated['username'] = ltrim($validated['username'], '@');

        $lead->update($validated);

        return redirect()->route('admin.dashboard', ['tab' => 'instagram'])
                         ->with('success', '@' . $lead->username . ' bilgileri güncellendi.');
    }

    public function deleteInstagram(InstagramLead $lead)
    {
        $lead->delete();
        return redirect()->route('admin.dashboard', ['tab' => 'instagram'])
                         ->with('success', 'Instagram hesabı listeden silindi.');
    }
}
