<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // 1. Projects (Önceki Yapılan İşler)
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('category')->default('E-Ticaret'); // E-Ticaret, B2B Sistem, CMS, Özel Yazılım
            $table->string('price_text')->nullable(); // örn: 45.000 TL - 60.000 TL
            $table->string('client_name')->nullable();
            $table->text('description');
            $table->string('tags')->nullable(); // örn: "Laravel, Özel Sepet, Sanal POS"
            $table->string('project_url')->nullable();
            $table->boolean('is_featured')->default(true);
            $table->integer('order_num')->default(0);
            $table->timestamps();
        });

        // 2. Target Clients (Hedef Müşteri Kayıt Alanı)
        Schema::create('target_clients', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('contact_person')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('sector')->nullable(); // Tekstil, Gıda, Otomotiv, Anne-Bebek vb.
            $table->string('need_type')->nullable(); // Özel E-Ticaret, B2B Bayi, CMS, vb.
            $table->string('estimated_budget')->nullable(); // 30.000 - 50.000 TL
            $table->string('status')->default('yeni'); // yeni, iletisime_gecildi, gorusuldu, teklif_verildi, anlasildi, olumsuz
            $table->text('notes')->nullable();
            $table->timestamps();
        });

        // 3. Instagram Leads (İncelenecek Instagram Hesapları)
        Schema::create('instagram_leads', function (Blueprint $table) {
            $table->id();
            $table->string('username'); // @hesapadi
            $table->string('profile_url')->nullable();
            $table->string('follower_count')->nullable(); // örn: "24.5K"
            $table->string('sector')->nullable(); // Sektör / Niş
            $table->string('current_website')->nullable(); // Yok, Shopier, Linktree, Web Sitesi Var
            $table->text('problem_opportunity')->nullable(); // Tespit edilen eksiklik / fırsat
            $table->string('outreach_status')->default('incelenecek'); // incelenecek, dm_atildi, cevap_bekleniyor, gorusme, teklif_gonderildi, anlasildi, pasif
            $table->string('priority')->default('orta'); // yuksek, orta, dusuk
            $table->text('detailed_notes')->nullable(); // Detaylı inceleme ve görüşme notları
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instagram_leads');
        Schema::dropIfExists('target_clients');
        Schema::dropIfExists('projects');
    }
};
