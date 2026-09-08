<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Project;
use App\Models\TargetClient;
use App\Models\InstagramLead;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Authorized Founders / Admins
        User::firstOrCreate(
            ['email' => 'kaantrrkoglu@gmail.com'],
            [
                'name' => 'Kaan Türkoğlu',
                'password' => Hash::make('raquun2026!'),
            ]
        );

        User::firstOrCreate(
            ['email' => 'mustafadirlikli@gmail.com'],
            [
                'name' => 'Mustafa Dirlikli',
                'password' => Hash::make('raquun2026!'),
            ]
        );

        // 2. Initial Projects (Daha Önce Yapılan İşler & Fiyatlar)
        if (Project::count() === 0) {
            Project::create([
                'title' => 'amandiyim.com Çok Satıcılı Pazaryeri',
                'category' => 'Pazaryeri & E-Ticaret',
                'price_text' => 'Kurucu Projemiz',
                'client_name' => 'amandiyim.com',
                'description' => 'Binlerce satıcı, anlık komisyon ve hakediş motoru, doğrudan sanal POS ve bölünmüş ödeme (split payment), kargo barkod entegrasyonu barındıran sıfırdan geliştirilen bağımsız multi-vendor pazaryeri.',
                'tags' => 'Multi-Vendor, Laravel, Sanal POS, Kargo API, Hakediş',
                'project_url' => 'https://amandiyim.com',
                'is_featured' => true,
                'order_num' => 1,
            ]);

            Project::create([
                'title' => 'Özel B2B Bayi Sipariş & Cari Yönetim Portalı',
                'category' => 'B2B Sistemleri',
                'price_text' => '50.000 TL (1 Yıl Destek Dahil)',
                'client_name' => 'Toptan Dağıtım & Tedarik',
                'description' => 'Bayiler için kapalı devre sipariş ağı. Kademeli iskonto tanımlama, anlık stok sorgulama, cari hesap ekstresi ve Excel ile toplu sipariş altyapısı.',
                'tags' => 'B2B, Bayi İskonto, Cari Hesap, 1 Yıl Ücretsiz Destek',
                'project_url' => null,
                'is_featured' => true,
                'order_num' => 2,
            ]);

            Project::create([
                'title' => 'Bağımsız & Özel E-Ticaret Altyapısı',
                'category' => 'E-Ticaret',
                'price_text' => '60.000 TL (1 Yıl Destek Dahil)',
                'client_name' => 'Butik Üretici & Marka',
                'description' => 'Hazır kalıpların kısıtlamalarından ve aylık komisyonlardan kurtulan, doğrudan banka sanal POS ve kargo entegrasyonlu, ultra hafif ve yüksek dönüşümlü bağımsız e-ticaret sitesi.',
                'tags' => 'Özel Sepet, Sanal POS, Kargo API, 1 Yıl Ücretsiz Destek',
                'project_url' => null,
                'is_featured' => true,
                'order_num' => 3,
            ]);

            Project::create([
                'title' => 'Hızlı Kurumsal CMS & Dijital Ürün Kataloğu',
                'category' => 'CMS & Web',
                'price_text' => '20.000 TL (1 Yıl Destek Dahil)',
                'client_name' => 'Endüstriyel Üretici',
                'description' => 'WordPress eklenti kirliliği olmadan, 0.8 saniyede açılan, arama motorlarında (SEO) en üst skoru alan ve kolay yönetilen kurumsal vitrin ve dinamik katalog sistemi.',
                'tags' => 'Ultra Hızlı, SEO 99+, Kolay Panel, 1 Yıl Ücretsiz Destek',
                'project_url' => null,
                'is_featured' => true,
                'order_num' => 4,
            ]);
        }

        // 3. Sample Instagram Lead for Demonstration
        if (InstagramLead::count() === 0) {
            InstagramLead::create([
                'username' => 'ornek_butik_tekstil',
                'profile_url' => 'https://instagram.com/ornek_butik_tekstil',
                'follower_count' => '32.4K',
                'sector' => 'Butik Tekstil & Giyim',
                'current_website' => 'Sadece WhatsApp / Shopier Linki',
                'problem_opportunity' => 'Bio linkinde sadece Shopier var, yüksek komisyon ödüyorlar. Siparişler DM ve WhatsApp üzerinden manuel alınıyor, stok karışıklığı yaşanıyor. Bağımsız özel bir e-ticaret sitesiyle cirolarını artırıp komisyondan tasarruf edebilirler.',
                'outreach_status' => 'incelenecek',
                'priority' => 'yuksek',
                'detailed_notes' => 'Haftalık ortalama 5 Reels atıyorlar, etkileşim yüksek. DM şablonu: "Merhaba, sayfanızdaki harika ürünleri inceledik. Siparişleri manuel WhatsApp ve Shopier komisyonuyla yönetmek yerine size özel bağımsız bir e-ticaret altyapısıyla nasıl tasarruf edeceğinizi konuşmak isteriz..."',
            ]);
        }

        // 4. Sample Target Client for Demonstration
        if (TargetClient::count() === 0) {
            TargetClient::create([
                'company_name' => 'Örnek Endüstriyel Yedek Parça Ltd.',
                'contact_person' => 'Mehmet Bey',
                'phone' => '0532 000 00 00',
                'email' => 'bilgi@ornekparca.com',
                'sector' => 'Otomotiv & Sanayi',
                'need_type' => 'B2B Bayi Sipariş Portalı',
                'estimated_budget' => '60.000 - 80.000 TL',
                'status' => 'yeni',
                'notes' => 'Türkiye genelinde 40 bayileri var. Şu an siparişleri telefonla ve faksla alıyorlar. Bayilerin cari hesaplarını görebileceği kapalı devre bir sipariş portalına acil ihtiyaçları var.',
            ]);
        }
    }
}
