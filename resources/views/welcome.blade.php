<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Raquun — amandiyim.com Kurucusu | Bağımsız Özel E-Ticaret, B2B ve Yazılım</title>
    <meta name="description" content="amandiyim.com çok satıcılı pazar yerini sıfırdan inşa eden yazılım ekibiyiz. İşletmelere hazır paketlere bağımlı olmayan özel e-ticaret (60.000 TL), B2B bayi portalları (50.000 TL) ve kurumsal CMS sistemleri (20.000 TL) kodluyoruz. 1 yıl ücretsiz teknik destek dahil.">
    <meta name="keywords" content="özel e-ticaret, b2b bayi portali, amandiyim.com, kurumsal cms, hızlı web sitesi, laravel e-ticaret, sanal pos entegrasyonu, mustafa dirlikli, kaan türkoğlu, raquun">
    <meta name="author" content="Raquun (Kaan Türkoğlu & Mustafa Dirlikli)">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="theme-color" content="#ffffff">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url('/') }}">

    <!-- Open Graph / Facebook / WhatsApp Preview -->
    <meta property="og:type" content="website">
    <meta property="og:locale" content="tr_TR">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:site_name" content="Raquun">
    <meta property="og:title" content="Raquun — amandiyim.com Kurucusu | Bağımsız Özel E-Ticaret, B2B ve Yazılım">
    <meta property="og:description" content="Kendi pazar yerimizi kuruyoruz. İşletmeniz için de hazır paketlere bağımlı olmayan özel e-ticaret (60.000 TL), B2B bayi portalları (50.000 TL) ve kurumsal CMS sistemleri (20.000 TL) kodluyoruz. 1 yıl ücretsiz teknik destek dahil.">
    <meta property="og:image" content="{{ asset('images/raquun-mascot.jpg') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Raquun Yazılım Karakteri ve Maskotu">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Raquun — amandiyim.com Kurucusu | Bağımsız Özel E-Ticaret, B2B ve Yazılım">
    <meta name="twitter:description" content="Kendi pazar yerimizi kuruyoruz. İşletmeniz için hazır kalıplara bağımlı olmayan özel e-ticaret, B2B bayi portalları ve kurumsal CMS altyapıları geliştiriyoruz. 1 yıl ücretsiz teknik destek dahil.">
    <meta name="twitter:image" content="{{ asset('images/raquun-mascot.jpg') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/jpeg" href="{{ asset('images/raquun-logo.jpg') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/raquun-logo.jpg') }}">

    <!-- Schema.org JSON-LD Structured Data for Google -->
    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@graph' => [
            [
                '@type' => 'Organization',
                '@id' => url('/') . '#organization',
                'name' => 'Raquun',
                'url' => url('/'),
                'logo' => asset('images/raquun-logo.jpg'),
                'image' => asset('images/raquun-mascot.jpg'),
                'description' => 'amandiyim.com kurucu yazılım ekibi. İşletmelere bağımsız özel e-ticaret, B2B bayi sistemleri ve kurumsal web yazılımları geliştiriyoruz.',
                'founders' => [
                    [
                        '@type' => 'Person',
                        'name' => 'Kaan Türkoğlu',
                        'jobTitle' => 'Kurucu & Yazılım Mühendisi',
                        'telephone' => '+905459039584',
                        'email' => 'kaantrrkoglu@gmail.com'
                    ],
                    [
                        '@type' => 'Person',
                        'name' => 'Mustafa Dirlikli',
                        'jobTitle' => 'Kurucu & Yazılım Mühendisi',
                        'telephone' => '+905303678045',
                        'email' => 'mustafadirlikli@gmail.com'
                    ]
                ],
                'contactPoint' => [
                    [
                        '@type' => 'ContactPoint',
                        'telephone' => '+90-545-903-9584',
                        'contactType' => 'technical support',
                        'areaServed' => 'TR',
                        'availableLanguage' => 'Turkish'
                    ],
                    [
                        '@type' => 'ContactPoint',
                        'telephone' => '+90-530-367-8045',
                        'contactType' => 'sales',
                        'areaServed' => 'TR',
                        'availableLanguage' => 'Turkish'
                    ]
                ]
            ],
            [
                '@type' => 'WebSite',
                '@id' => url('/') . '#website',
                'url' => url('/'),
                'name' => 'Raquun',
                'publisher' => [
                    '@id' => url('/') . '#organization'
                ],
                'inLanguage' => 'tr-TR'
            ],
            [
                '@type' => 'ProfessionalService',
                '@id' => url('/') . '#service',
                'name' => 'Raquun Özel Yazılım ve E-Ticaret Çözümleri',
                'parentOrganization' => [
                    '@id' => url('/') . '#organization'
                ],
                'url' => url('/'),
                'priceRange' => '₺₺',
                'hasOfferCatalog' => [
                    '@type' => 'OfferCatalog',
                    'name' => 'Yazılım Paketleri ve Hizmetler',
                    'itemListElement' => [
                        [
                            '@type' => 'Offer',
                            'itemOffered' => [
                                '@type' => 'Service',
                                'name' => 'Özel E-Ticaret Sitesi',
                                'description' => 'Sıfır dış komisyon, doğrudan sanal POS, kargo entegrasyonu, bağımsız ödeme akışı ve 1 yıl ücretsiz teknik destek.'
                            ],
                            'price' => '60000',
                            'priceCurrency' => 'TRY'
                        ],
                        [
                            '@type' => 'Offer',
                            'itemOffered' => [
                                '@type' => 'Service',
                                'name' => 'B2B & Bayi Portalı',
                                'description' => 'Kapalı devre sipariş ağı, bayiye özel iskonto listeleri, cari hesap ekstresi, Excel sipariş ve 1 yıl ücretsiz teknik destek.'
                            ],
                            'price' => '50000',
                            'priceCurrency' => 'TRY'
                        ],
                        [
                            '@type' => 'Offer',
                            'itemOffered' => [
                                '@type' => 'Service',
                                'name' => 'Hızlı Kurumsal CMS',
                                'description' => '0.8 saniye altı açılış hızı, Google SEO 95+, kolay yönetim paneli, kurumsal vitrin ve 1 yıl ücretsiz teknik destek.'
                            ],
                            'price' => '20000',
                            'priceCurrency' => 'TRY'
                        ]
                    ]
                ]
            ]
        ]
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg-page: #ffffff;
            --bg-muted: #f9fafb;
            --border: #e5e7eb;
            --border-hover: #d1d5db;
            --text-heading: #111827;
            --text-body: #4b5563;
            --text-light: #6b7280;
            --accent: #1d4ed8;
            --accent-hover: #1e40af;
            --accent-bg: #eff6ff;
            --green: #047857;
            --green-bg: #ecfdf5;
            --radius: 10px;
            --radius-lg: 16px;
            --container: 1080px;
        }

        *, *::before, *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 80px;
            background-color: var(--bg-page);
            color: var(--text-body);
            font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            font-size: 16px;
            line-height: 1.65;
            -webkit-font-smoothing: antialiased;
            overflow-x: hidden;
            width: 100%;
        }

        body {
            background-color: var(--bg-page);
            color: var(--text-body);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            overflow-x: hidden;
            width: 100%;
        }

        a {
            color: inherit;
            text-decoration: none;
            transition: color 0.15s ease;
        }

        .container {
            width: 100%;
            max-width: var(--container);
            margin: 0 auto;
            padding: 0 24px;
        }

        /* --------------------------------------------------------------------------
           Header & Navigation
           -------------------------------------------------------------------------- */
        .header {
            border-bottom: 1px solid var(--border);
            background: rgba(255, 255, 255, 0.97);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            position: sticky;
            top: 0;
            z-index: 50;
            transition: box-shadow 0.2s ease;
        }

        .header-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 70px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 800;
            font-size: 1.25rem;
            color: var(--text-heading);
            letter-spacing: -0.02em;
        }

        .brand-logo-img {
            width: 38px;
            height: 38px;
            border-radius: 8px;
            object-fit: cover;
            border: 1px solid var(--border);
            display: block;
        }

        .brand-badge {
            display: inline-block;
            font-size: 0.72rem;
            font-weight: 600;
            color: var(--text-light);
            background: var(--bg-muted);
            border: 1px solid var(--border);
            padding: 2px 8px;
            border-radius: 9999px;
            white-space: nowrap;
        }

        .nav {
            display: flex;
            align-items: center;
            gap: 24px;
            list-style: none;
        }

        .nav a {
            font-size: 0.92rem;
            font-weight: 500;
            color: var(--text-body);
        }

        .nav a:hover {
            color: var(--text-heading);
        }

        .nav a.highlight-nav {
            color: var(--accent);
            font-weight: 600;
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        /* Mobile Hamburger Button */
        .mobile-nav-toggle {
            display: none;
            width: 42px;
            height: 42px;
            align-items: center;
            justify-content: center;
            background: var(--bg-muted);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            cursor: pointer;
            padding: 0;
            color: var(--text-heading);
            transition: all 0.2s ease;
            position: relative;
        }

        .mobile-nav-toggle:hover {
            background: #f1f5f9;
            border-color: var(--border-hover);
        }

        .hamburger-box {
            width: 20px;
            height: 14px;
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .hamburger-box span {
            display: block;
            width: 100%;
            height: 2px;
            background-color: var(--text-heading);
            border-radius: 2px;
            transition: transform 0.25s ease, opacity 0.2s ease;
        }

        .mobile-nav-toggle.is-active .hamburger-box span:nth-child(1) {
            transform: translateY(6px) rotate(45deg);
        }

        .mobile-nav-toggle.is-active .hamburger-box span:nth-child(2) {
            opacity: 0;
        }

        .mobile-nav-toggle.is-active .hamburger-box span:nth-child(3) {
            transform: translateY(-6px) rotate(-45deg);
        }

        /* Mobile Menu Drawer / Dropdown */
        .mobile-menu-drawer {
            display: none;
            position: fixed;
            top: 71px;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(15, 23, 42, 0.45);
            backdrop-filter: blur(4px);
            -webkit-backdrop-filter: blur(4px);
            z-index: 49;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.25s ease, visibility 0.25s ease;
        }

        .mobile-menu-content {
            background: #ffffff;
            border-bottom: 1px solid var(--border);
            padding: 20px 20px 24px 20px;
            transform: translateY(-16px);
            transition: transform 0.25s ease;
            box-shadow: 0 16px 32px -8px rgba(0, 0, 0, 0.12);
            max-height: calc(100vh - 71px);
            overflow-y: auto;
        }

        .mobile-menu-drawer.is-open {
            display: block;
            opacity: 1;
            visibility: visible;
        }

        .mobile-menu-drawer.is-open .mobile-menu-content {
            transform: translateY(0);
        }

        .mobile-menu-links {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 6px;
            margin-bottom: 18px;
        }

        .mobile-menu-links li a {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 12px 14px;
            font-size: 0.95rem;
            font-weight: 600;
            color: var(--text-heading);
            background: var(--bg-muted);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            transition: all 0.15s ease;
        }

        .mobile-menu-links li a:active,
        .mobile-menu-links li a:hover {
            background: var(--accent-bg);
            border-color: #bfdbfe;
            color: var(--accent);
        }

        .mobile-menu-actions {
            display: flex;
            flex-direction: column;
            gap: 10px;
            padding-top: 14px;
            border-top: 1px solid var(--border);
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            font-size: 0.92rem;
            font-weight: 600;
            padding: 10px 18px;
            border-radius: var(--radius);
            cursor: pointer;
            transition: all 0.15s ease;
            text-align: center;
            border: 1px solid transparent;
        }

        .btn-primary {
            background-color: var(--text-heading);
            color: #ffffff;
        }

        .btn-primary:hover {
            background-color: #000000;
            color: #ffffff;
        }

        .btn-secondary {
            background-color: #ffffff;
            color: var(--text-heading);
            border-color: var(--border);
        }

        .btn-secondary:hover {
            background-color: var(--bg-muted);
            border-color: var(--border-hover);
        }

        /* --------------------------------------------------------------------------
           Hero Section & Mascot Showcase
           -------------------------------------------------------------------------- */
        .hero {
            padding: 72px 0 56px 0;
            border-bottom: 1px solid var(--border);
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1.25fr 0.75fr;
            gap: 44px;
            align-items: center;
        }

        .hero-intro {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--green);
            background: var(--green-bg);
            border: 1px solid #a7f3d0;
            padding: 4px 12px;
            border-radius: 9999px;
            margin-bottom: 20px;
        }

        .hero h1 {
            font-size: clamp(2rem, 3.4vw, 2.75rem);
            font-weight: 800;
            line-height: 1.22;
            color: var(--text-heading);
            letter-spacing: -0.035em;
            margin-bottom: 18px;
        }

        .hero p.lead {
            font-size: 1.05rem;
            color: var(--text-body);
            line-height: 1.7;
            margin-bottom: 28px;
        }

        .hero-buttons {
            display: flex;
            align-items: center;
            gap: 14px;
            flex-wrap: wrap;
            margin-bottom: 32px;
        }

        .founders-direct-strip {
            display: flex;
            align-items: center;
            gap: 14px;
            flex-wrap: wrap;
            padding: 14px 18px;
            background: var(--bg-muted);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            font-size: 0.86rem;
        }

        .founders-direct-title {
            display: flex;
            align-items: center;
            gap: 6px;
            font-weight: 700;
            color: var(--text-heading);
            white-space: nowrap;
        }

        .founders-pills-wrap {
            display: flex;
            align-items: center;
            gap: 12px;
            flex-wrap: wrap;
        }

        .founder-pill {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            color: var(--text-heading);
            font-weight: 600;
        }

        .founder-pill a {
            color: var(--accent);
            text-decoration: underline;
        }

        .founder-pill-divider {
            color: #cbd5e1;
        }

        /* Mascot Card */
        .hero-mascot-card {
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: var(--radius-lg);
            padding: 24px;
            text-align: center;
            box-shadow: 0 4px 16px -2px rgba(0,0,0,0.04);
            position: relative;
        }

        .hero-mascot-card img {
            max-width: 250px;
            width: 100%;
            height: auto;
            margin: 0 auto 16px auto;
            border-radius: 12px;
            display: block;
        }

        .mascot-badge {
            display: inline-block;
            font-size: 0.74rem;
            font-weight: 700;
            color: var(--accent);
            background: var(--accent-bg);
            padding: 3px 10px;
            border-radius: 9999px;
            margin-bottom: 8px;
            letter-spacing: 0.04em;
        }

        .mascot-caption {
            font-size: 0.84rem;
            color: var(--text-body);
            line-height: 1.5;
        }

        /* --------------------------------------------------------------------------
           Portfolio & Projects Section (Daha Önce Yapılan İşler & Fiyatlar)
           -------------------------------------------------------------------------- */
        .portfolio-section {
            padding: 68px 0;
            background: #ffffff;
            border-bottom: 1px solid var(--border);
        }

        .section-intro {
            margin-bottom: 40px;
        }

        .section-intro span.tag {
            font-size: 0.8rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            color: var(--accent);
            display: block;
            margin-bottom: 8px;
        }

        .section-intro h2 {
            font-size: clamp(1.6rem, 2.5vw, 2.1rem);
            font-weight: 800;
            color: var(--text-heading);
            letter-spacing: -0.025em;
            margin-bottom: 10px;
        }

        .section-intro p {
            font-size: 1rem;
            color: var(--text-body);
            max-width: 680px;
        }

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 24px;
            margin-bottom: 48px;
        }

        .project-card {
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 28px;
            background: #ffffff;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: border-color 0.15s ease;
        }

        .project-card:hover {
            border-color: var(--border-hover);
        }

        .project-header {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 12px;
            margin-bottom: 12px;
        }

        .project-cat {
            font-size: 0.76rem;
            font-weight: 700;
            text-transform: uppercase;
            color: var(--text-light);
            letter-spacing: 0.05em;
        }

        .project-price {
            font-size: 0.95rem;
            font-weight: 800;
            color: var(--accent);
            background: var(--accent-bg);
            padding: 4px 10px;
            border-radius: 9999px;
            white-space: nowrap;
        }

        .project-title {
            font-size: 1.25rem;
            font-weight: 800;
            color: var(--text-heading);
            letter-spacing: -0.015em;
            margin-bottom: 10px;
        }

        .project-desc {
            font-size: 0.93rem;
            color: var(--text-body);
            line-height: 1.65;
            margin-bottom: 16px;
            flex-grow: 1;
        }

        .project-tags {
            font-size: 0.82rem;
            color: var(--text-light);
            border-top: 1px solid var(--border);
            padding-top: 12px;
        }

        /* Pricing Table Summary */
        .pricing-overview {
            background: var(--bg-muted);
            border: 1px solid var(--border);
            border-radius: var(--radius-lg);
            padding: 36px;
        }

        .pricing-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-top: 24px;
        }

        .price-box {
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 20px;
        }

        .price-box h4 {
            font-size: 1rem;
            font-weight: 700;
            color: var(--text-heading);
            margin-bottom: 6px;
        }

        .price-box .price-num {
            font-size: 1.3rem;
            font-weight: 800;
            color: var(--text-heading);
            margin-bottom: 10px;
        }

        .price-box p {
            font-size: 0.84rem;
            color: var(--text-body);
            line-height: 1.5;
        }

        /* --------------------------------------------------------------------------
           Amandiyim.com Story Section
           -------------------------------------------------------------------------- */
        .story-section {
            padding: 68px 0;
            background: #ffffff;
            border-bottom: 1px solid var(--border);
        }

        .story-card {
            border: 1px solid var(--border);
            border-radius: var(--radius-lg);
            padding: 40px;
            background: #ffffff;
        }

        .story-header {
            margin-bottom: 24px;
        }

        .story-subtitle {
            font-size: 0.8rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            color: var(--accent);
            margin-bottom: 8px;
            display: block;
        }

        .story-title {
            font-size: clamp(1.6rem, 2.5vw, 2.1rem);
            font-weight: 800;
            color: var(--text-heading);
            letter-spacing: -0.025em;
            line-height: 1.3;
        }

        .story-content {
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            gap: 40px;
            align-items: start;
        }

        .story-text {
            font-size: 1rem;
            line-height: 1.75;
            color: var(--text-body);
        }

        .story-text p {
            margin-bottom: 16px;
        }

        .story-sidebar {
            background: var(--bg-muted);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 24px;
        }

        .sidebar-title {
            font-size: 0.95rem;
            font-weight: 700;
            color: var(--text-heading);
            margin-bottom: 14px;
            padding-bottom: 10px;
            border-bottom: 1px solid var(--border);
        }

        .sidebar-list {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 12px;
            font-size: 0.9rem;
        }

        .sidebar-list li {
            display: flex;
            align-items: flex-start;
            gap: 8px;
            color: var(--text-body);
        }

        .sidebar-list li span.check {
            color: var(--green);
            font-weight: 700;
        }

        /* --------------------------------------------------------------------------
           What We DO / DO NOT DO
           -------------------------------------------------------------------------- */
        .contrast-section {
            padding: 68px 0;
            background: var(--bg-muted);
            border-bottom: 1px solid var(--border);
        }

        .contrast-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 28px;
        }

        .contrast-box {
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 28px;
            background: #ffffff;
        }

        .contrast-box.negative {
            border-style: dashed;
        }

        .contrast-box h3 {
            font-size: 1.15rem;
            font-weight: 700;
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .contrast-box.positive h3 { color: var(--green); }
        .contrast-box.negative h3 { color: #b91c1c; }

        .contrast-list {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 12px;
            font-size: 0.92rem;
        }

        .contrast-list li {
            display: flex;
            align-items: flex-start;
            gap: 8px;
            line-height: 1.55;
        }

        /* --------------------------------------------------------------------------
           Contact Section & Founder Cards
           -------------------------------------------------------------------------- */
        .contact-section {
            padding: 72px 0;
            background: #ffffff;
        }

        .contact-container {
            display: grid;
            grid-template-columns: 1fr 1.1fr;
            gap: 48px;
            align-items: start;
        }

        .contact-left h2 {
            font-size: 1.9rem;
            font-weight: 800;
            color: var(--text-heading);
            letter-spacing: -0.025em;
            margin-bottom: 14px;
            line-height: 1.3;
        }

        .contact-left p {
            font-size: 0.98rem;
            color: var(--text-body);
            line-height: 1.7;
            margin-bottom: 24px;
        }

        /* Founder Cards Grid */
        .founders-card-grid {
            display: flex;
            flex-direction: column;
            gap: 14px;
            margin-bottom: 24px;
        }

        .founder-box {
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 16px 20px;
            background: var(--bg-muted);
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 14px;
        }

        .founder-name {
            font-weight: 700;
            font-size: 1rem;
            color: var(--text-heading);
        }

        .founder-role {
            font-size: 0.8rem;
            color: var(--text-light);
        }

        .founder-contact-links {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .founder-btn {
            font-size: 0.8rem;
            font-weight: 600;
            padding: 6px 12px;
            border-radius: 6px;
            border: 1px solid var(--border);
            background: #ffffff;
            color: var(--text-heading);
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }

        .founder-btn:hover {
            border-color: var(--text-heading);
        }

        .founder-btn-whatsapp {
            background: #ecfdf5;
            color: #047857;
            border-color: #a7f3d0;
        }

        .form-card {
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 32px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.03);
        }

        .form-card h3 {
            font-size: 1.18rem;
            font-weight: 700;
            color: var(--text-heading);
            margin-bottom: 8px;
        }

        .form-card p.form-note {
            font-size: 0.86rem;
            color: var(--text-light);
            margin-bottom: 20px;
        }

        .form-field { margin-bottom: 16px; }
        .form-field label {
            display: block;
            font-size: 0.86rem;
            font-weight: 600;
            color: var(--text-heading);
            margin-bottom: 6px;
        }

        .input-text, .select-box, .textarea-box {
            width: 100%;
            padding: 10px 14px;
            border: 1px solid var(--border);
            border-radius: var(--radius);
            font-family: inherit;
            font-size: 0.92rem;
            color: var(--text-heading);
            background: #ffffff;
        }

        .input-text:focus, .select-box:focus, .textarea-box:focus {
            outline: none;
            border-color: var(--accent);
        }

        .textarea-box { resize: vertical; min-height: 90px; }

        .form-sent-alert {
            display: none;
            padding: 12px;
            background: var(--green-bg);
            color: var(--green);
            border-radius: var(--radius);
            font-size: 0.88rem;
            font-weight: 600;
            margin-top: 14px;
            text-align: center;
        }

        /* --------------------------------------------------------------------------
           Founder Action Cards (Contact Section)
           -------------------------------------------------------------------------- */
        .founders-action-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 24px;
            max-width: 920px;
            margin: 0 auto 36px auto;
        }

        .founder-action-card {
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: var(--radius-lg);
            padding: 32px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            box-shadow: 0 2px 8px -2px rgba(0,0,0,0.04);
            transition: border-color 0.15s ease, box-shadow 0.15s ease;
        }

        .founder-action-card:hover {
            border-color: var(--border-hover);
            box-shadow: 0 6px 20px -4px rgba(0,0,0,0.08);
        }

        .founder-card-actions {
            display: flex;
            gap: 10px;
        }

        /* --------------------------------------------------------------------------
           Footer
           -------------------------------------------------------------------------- */
        .footer {
            margin-top: auto;
            border-top: 1px solid var(--border);
            padding: 32px 0;
            font-size: 0.86rem;
            color: var(--text-light);
            background: var(--bg-muted);
        }

        .footer-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 16px;
        }

        /* --------------------------------------------------------------------------
           Mobile Floating Bottom Action Bar
           -------------------------------------------------------------------------- */
        .mobile-bottom-bar {
            display: none;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 45;
            background: rgba(255, 255, 255, 0.94);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-top: 1px solid rgba(229, 231, 235, 0.9);
            padding: 10px 16px;
            padding-bottom: calc(10px + env(safe-area-inset-bottom, 0px));
            box-shadow: 0 -4px 16px rgba(0, 0, 0, 0.06);
            gap: 10px;
        }

        .mobile-bar-btn {
            flex: 1;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 7px;
            padding: 11px 12px;
            border-radius: var(--radius);
            font-size: 0.88rem;
            font-weight: 700;
            text-align: center;
            text-decoration: none;
            transition: transform 0.1s ease, filter 0.15s ease;
            min-height: 44px;
        }

        .mobile-bar-btn:active {
            transform: scale(0.98);
        }

        .mobile-bar-whatsapp {
            background-color: #047857;
            color: #ffffff;
            border: 1px solid #047857;
        }

        .mobile-bar-whatsapp:hover {
            background-color: #065f46;
            color: #ffffff;
        }

        .mobile-bar-call {
            background-color: #111827;
            color: #ffffff;
            border: 1px solid #111827;
        }

        .mobile-bar-call:hover {
            background-color: #000000;
            color: #ffffff;
        }

        /* --------------------------------------------------------------------------
           Responsive Breakpoints
           -------------------------------------------------------------------------- */
        @media (max-width: 900px) {
            .hero-grid { grid-template-columns: 1fr; gap: 32px; }
            .projects-grid { grid-template-columns: 1fr; }
            .pricing-grid { grid-template-columns: repeat(2, 1fr); }
            .story-content { grid-template-columns: 1fr; gap: 28px; }
            .contrast-grid { grid-template-columns: 1fr; }
            .contact-container { grid-template-columns: 1fr; }
            .nav { display: none; }
            .mobile-nav-toggle { display: flex; }
            .mobile-menu-drawer { display: block; }
        }

        @media (max-width: 768px) {
            body {
                padding-bottom: 74px; /* Space for sticky bottom bar */
            }

            .header-inner {
                height: 62px;
            }

            .mobile-menu-drawer {
                top: 63px;
            }

            .hero {
                padding: 40px 0 36px 0;
            }

            .hero h1 {
                font-size: clamp(1.6rem, 5vw, 2.25rem);
                margin-bottom: 14px;
            }

            .hero p.lead {
                font-size: 0.98rem;
                margin-bottom: 22px;
            }

            .portfolio-section,
            .story-section,
            .contrast-section,
            .contact-section {
                padding: 48px 0;
            }

            .founders-direct-strip {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
                padding: 14px 16px;
            }

            .founder-pill-divider {
                display: none;
            }

            .founders-pills-wrap {
                flex-direction: column;
                align-items: flex-start;
                gap: 8px;
                width: 100%;
            }

            .founder-pill {
                font-size: 0.85rem;
                line-height: 1.5;
            }

            .hero-mascot-card {
                padding: 20px 16px;
                margin-top: 8px;
            }

            .hero-mascot-card img {
                max-width: 190px;
                margin-bottom: 12px;
            }

            .pricing-overview {
                padding: 22px 18px;
                border-radius: 14px;
            }

            .story-card {
                padding: 24px 18px;
                border-radius: 14px;
            }

            .story-title {
                font-size: 1.45rem;
            }

            .story-sidebar {
                padding: 18px 16px;
            }

            .contrast-box {
                padding: 22px 18px;
            }

            .founders-action-grid {
                grid-template-columns: 1fr;
                gap: 18px;
                margin-bottom: 24px;
            }

            .founder-action-card {
                padding: 24px 20px;
                border-radius: 14px;
            }

            .mobile-bottom-bar {
                display: flex;
            }

            .footer {
                padding: 24px 0;
            }

            .footer-inner {
                flex-direction: column;
                text-align: center;
                gap: 14px;
                align-items: center;
            }
        }

        @media (max-width: 640px) {
            .hero-buttons {
                flex-direction: column;
                width: 100%;
                gap: 10px;
                margin-bottom: 24px;
            }

            .hero-buttons .btn {
                width: 100%;
                min-height: 48px;
                justify-content: center;
                font-size: 0.94rem;
            }

            .pricing-grid {
                grid-template-columns: 1fr;
                gap: 16px;
            }

            .founder-card-actions {
                flex-direction: column;
                gap: 8px;
            }

            .founder-card-actions .btn {
                width: 100%;
                min-height: 44px;
                justify-content: center;
            }

            .project-card {
                padding: 20px 18px;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 0 16px;
            }

            .brand {
                font-size: 1.15rem;
                gap: 8px;
            }

            .brand-logo-img {
                width: 34px;
                height: 34px;
            }

            .brand-badge {
                display: none;
            }

            .header-cta-btn {
                display: none;
            }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="header-inner">
                <a href="{{ url('/') }}" class="brand">
                    <img src="{{ asset('images/raquun-logo.jpg') }}" alt="Raquun Logo" class="brand-logo-img">
                    <span>Raquun</span>
                    <span class="brand-badge">amandiyim.com Ekibi</span>
                </a>

                <ul class="nav">
                    <li><a href="#isler">Daha Önce Yapılan İşler</a></li>
                    <li><a href="#fiyatlar">Fiyatlandırma</a></li>
                    <li><a href="#hikaye" class="highlight-nav">amandiyim.com</a></li>
                    <li><a href="#iletisim">İletişim</a></li>
                </ul>

                <div class="header-right">
                    <a href="#iletisim" class="btn btn-primary header-cta-btn" style="padding: 8px 18px; font-size: 0.88rem;">
                        Konuşalım
                    </a>
                    <button type="button" class="mobile-nav-toggle" id="mobileNavToggle" aria-label="Menüyü Aç / Kapat" aria-expanded="false">
                        <span class="hamburger-box">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation Drawer -->
        <div class="mobile-menu-drawer" id="mobileMenuDrawer" aria-hidden="true">
            <div class="mobile-menu-content">
                <ul class="mobile-menu-links">
                    <li><a href="#isler" class="mobile-menu-item"><span>💼 Daha Önce Yapılan İşler</span> <span style="color:var(--text-light);">→</span></a></li>
                    <li><a href="#fiyatlar" class="mobile-menu-item"><span>💳 Şeffaf Fiyatlandırma</span> <span style="color:var(--text-light);">→</span></a></li>
                    <li><a href="#hikaye" class="mobile-menu-item"><span>🚀 amandiyim.com Hikayesi</span> <span style="color:var(--text-light);">→</span></a></li>
                    <li><a href="#iletisim" class="mobile-menu-item"><span>📞 Doğrudan İletişim</span> <span style="color:var(--text-light);">→</span></a></li>
                </ul>

                <div class="mobile-menu-actions">
                    <a href="https://wa.me/905459039584?text=Merhaba,%20yaz%C4%B1l%C4%B1m%20ve%20e-ticaret%20projemiz%20hakk%C4%B1nda%20g%C3%B6r%C3%BC%C5%9Fmek%20istiyoruz." target="_blank" rel="noopener" class="btn btn-primary" style="background:#047857; border-color:#047857; width:100%; justify-content:center; min-height:46px;">
                        💬 WhatsApp'tan Yazın
                    </a>
                    <a href="#iletisim" class="btn btn-secondary mobile-menu-item" style="width:100%; justify-content:center; min-height:46px;">
                        📞 Mühendisleri Arayın
                    </a>
                </div>
            </div>
        </div>
    </header>

    <main>
        <!-- Hero Section with Mascot Card -->
        <section class="hero">
            <div class="container">
                <div class="hero-grid">
                    <div>
                        <div class="hero-intro">
                            <span>✦ amandiyim.com'un Kurucu Yazılım Ekibiyiz</span>
                        </div>

                        <h1>
                            Kendi pazar yerimizi kuruyoruz. İşletmeniz için de dışa bağımlı olmayan özel sistemler yazıyoruz.
                        </h1>

                        <p class="lead">
                            Hazır şablonlar, kiralık paketler ve aracı komisyonlar yerine; işletmenizin kurallarına göre sıfırdan kodlanan <strong>özel e-ticaret siteleri</strong>, <strong>B2B bayi portalları</strong> ve <strong>kurumsal web altyapıları</strong> inşa ediyoruz. Kod da veri de tamamen sizin mülkiyetinizde kalır.
                        </p>

                        <div class="hero-buttons">
                            <a href="#isler" class="btn btn-primary">
                                Daha Önce Yapılan İşleri Gör ↓
                            </a>
                            <a href="#fiyatlar" class="btn btn-secondary">
                                Fiyatlandırma & Paketler
                            </a>
                        </div>

                        <!-- Founders Direct Line -->
                        <div class="founders-direct-strip">
                            <div class="founders-direct-title">
                                <span style="font-size: 1.1rem;">👨‍💻</span>
                                <strong>Doğrudan Yazılımcılarla Görüşün:</strong>
                            </div>
                            <div class="founders-pills-wrap">
                                <div class="founder-pill">
                                    <span>Kaan Türkoğlu:</span> 
                                    <a href="tel:05459039584">0545 903 95 84</a> 
                                    (<a href="mailto:kaantrrkoglu@gmail.com">kaantrrkoglu@gmail.com</a>)
                                </div>
                                <span class="founder-pill-divider">|</span>
                                <div class="founder-pill">
                                    <span>Mustafa Dirlikli:</span> 
                                    <a href="tel:05303678045">0530 367 80 45</a> 
                                    (<a href="mailto:mustafadirlikli@gmail.com">mustafadirlikli@gmail.com</a>)
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column: Official Mascot Showcase -->
                    <div>
                        <div class="hero-mascot-card">
                            <img src="{{ asset('images/raquun-mascot.jpg') }}" alt="Raquun Maskot İllüstrasyonu">
                            <span class="mascot-badge">Raquun Mühendislik Karakteri</span>
                            <p class="mascot-caption">
                                Hızlı, çevik ve ikili (binary) kodlarla yaşayan bağımsız yazılım ruhumuz.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ====================================================================
             DAHA ÖNCE YAPILAN İŞLER & REFERANSLAR
             ==================================================================== -->
        <section id="isler" class="portfolio-section">
            <div class="container">
                <div class="section-intro">
                    <span class="tag">Portfolyo & Referanslar</span>
                    <h2>Daha Önce Neler Yaptık?</h2>
                    <p>
                        Her birini ihtiyaca göre sıfırdan kodladığımız, hazır şablon kullanmadığımız gerçek projelerimizden bazıları.
                    </p>
                </div>

                <div class="projects-grid">
                    @forelse ($projects as $proj)
                        <div class="project-card">
                            <div>
                                <div class="project-header">
                                    <span class="project-cat">{{ $proj->category }}</span>
                                    @if($proj->price_text)
                                        <span class="project-price">{{ $proj->price_text }}</span>
                                    @endif
                                </div>
                                <h3 class="project-title">{{ $proj->title }}</h3>
                                <p class="project-desc">{{ $proj->description }}</p>
                            </div>
                            <div>
                                @if($proj->tags)
                                    <div class="project-tags">
                                        🛠 <strong>Öne Çıkanlar:</strong> {{ $proj->tags }}
                                    </div>
                                @endif
                                @if($proj->project_url)
                                    <div style="margin-top:10px;">
                                        <a href="{{ $proj->project_url }}" target="_blank" rel="noopener" style="font-size:0.85rem; color:var(--accent); font-weight:700;">
                                            Canlı Projeyi İncele ↗
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @empty
                        <div style="grid-column: 1 / -1; padding: 32px; background:var(--bg-muted); border-radius:var(--radius); text-align:center;">
                            Referans projeler panelden eklendikçe burada listelenecektir.
                        </div>
                    @endforelse
                </div>

                <!-- ================================================================
                     ŞEFFAF FİYATLANDIRMA
                     ================================================================ -->
                <div id="fiyatlar" class="pricing-overview">
                    <div class="section-intro" style="margin-bottom:20px;">
                        <span class="tag" style="color:var(--text-heading);">Şeffaf Fiyatlandırma</span>
                        <h3 style="font-size:1.45rem; font-weight:800; color:var(--text-heading); margin-bottom:8px;">
                            Net Bütçeler, Sürprizsiz Fiyatlar
                        </h3>
                        <p style="font-size:0.92rem;">
                            Gizli maliyet veya sonradan çıkan ücretler yok. Tüm paketlerimizde <strong>1 Yıl Ücretsiz Teknik Destek</strong> fiyata dahildir.
                        </p>
                    </div>

                    <div style="background:#ecfdf5; border:1px solid #a7f3d0; border-radius:var(--radius); padding:12px 16px; margin-bottom:24px; display:flex; align-items:center; gap:10px; font-size:0.9rem; color:#065f46; font-weight:600;">
                        <span>🛡️</span>
                        <span>Tüm paketlerimizde 1 Yıl Boyunca Ücretsiz Teknik Destek, Sunucu Güvenliği ve Altyapı Bakımı dahildir.</span>
                    </div>

                    <div class="pricing-grid">
                        <!-- CMS: 20.000 TL -->
                        <div class="price-box">
                            <span style="font-size:0.72rem; font-weight:700; color:var(--text-light); text-transform:uppercase;">Kurumsal & Vitrin</span>
                            <h4>Hızlı Kurumsal CMS</h4>
                            <div class="price-num">20.000 TL</div>
                            <div style="font-size:0.75rem; font-weight:700; color:var(--green); background:var(--green-bg); display:inline-block; padding:2px 8px; border-radius:4px; margin-bottom:8px;">
                                ✓ 1 Yıl Ücretsiz Destek
                            </div>
                            <p>0.8 saniye altı açılış hızı, Google SEO 95+, kolay yönetim paneli, kurumsal vitrin ve dinamik katalog.</p>
                        </div>

                        <!-- B2B: 50.000 TL -->
                        <div class="price-box">
                            <span style="font-size:0.72rem; font-weight:700; color:var(--text-light); text-transform:uppercase;">Toptan & Bayi</span>
                            <h4>B2B & Bayi Portalı</h4>
                            <div class="price-num">50.000 TL</div>
                            <div style="font-size:0.75rem; font-weight:700; color:var(--green); background:var(--green-bg); display:inline-block; padding:2px 8px; border-radius:4px; margin-bottom:8px;">
                                ✓ 1 Yıl Ücretsiz Destek
                            </div>
                            <p>Kapalı devre sipariş ağı, bayiye özel iskonto listeleri, cari hesap ekstresi ve Excel toplu sipariş sistemi.</p>
                        </div>

                        <!-- E-Ticaret: 60.000 TL -->
                        <div class="price-box" style="border-color:var(--accent); background:#fdfefe;">
                            <span style="font-size:0.72rem; font-weight:700; color:var(--accent); text-transform:uppercase;">En Çok Tercih Edilen</span>
                            <h4>Özel E-Ticaret Sitesi</h4>
                            <div class="price-num" style="color:var(--accent);">60.000 TL</div>
                            <div style="font-size:0.75rem; font-weight:700; color:var(--green); background:var(--green-bg); display:inline-block; padding:2px 8px; border-radius:4px; margin-bottom:8px;">
                                ✓ 1 Yıl Ücretsiz Destek
                            </div>
                            <p>Sıfır dış komisyon, doğrudan sanal POS, kargo entegrasyonu, özel sepet ve bağımsız ödeme akışı.</p>
                        </div>

                        <!-- Özel Operasyon -->
                        <div class="price-box">
                            <span style="font-size:0.72rem; font-weight:700; color:var(--text-light); text-transform:uppercase;">Özel Mimari</span>
                            <h4>Özel Operasyon Paneli</h4>
                            <div class="price-num">İhtiyaca Göre</div>
                            <div style="font-size:0.75rem; font-weight:700; color:var(--green); background:var(--green-bg); display:inline-block; padding:2px 8px; border-radius:4px; margin-bottom:8px;">
                                ✓ 1 Yıl Ücretsiz Destek
                            </div>
                            <p>İşletmenizin kendine has iş akışlarına, onay süreçlerine ve iç operasyonlarına özel web yazılımları.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- amandiyim.com Story Section -->
        <section id="hikaye" class="story-section">
            <div class="container">
                <div class="story-card">
                    <div class="story-header">
                        <span class="story-subtitle">Amiral Projemiz</span>
                        <h2 class="story-title">amandiyim.com’da Neler Yapıyoruz?</h2>
                    </div>

                    <div class="story-content">
                        <div class="story-text">
                            <p>
                                Pazaryeri kurmak dışarıdan sadece bir web sitesi gibi görünebilir; fakat mutfağa girdiğinizde binlerce satıcının hakediş hesabı, anlık stok hareketleri, bölünmüş (split) ödemeler, kargo barkodları ve yüksek trafik yönetimi gibi devasa bir mühendislik operasyonu vardır.
                            </p>
                            <p>
                                <strong>amandiyim.com</strong> projesinin kurucu ortağı ve yazılım ekibiyiz. Satıcı panelinden ödeme güvenliğine kadar tüm sistemi hazır paket kullanmadan, sıfırdan kendi ellerimizle kodladık.
                            </p>
                            <p>
                                Bir e-ticaret operasyonunun nerede tıkandığını, müşterinin nerede vazgeçtiğini bizzat bu platformu kurarken tecrübe ettik. Sizin projenizi yaparken de arkamızda bu sağlam saha birikimi duruyor.
                            </p>
                        </div>

                        <div class="story-sidebar">
                            <div class="sidebar-title">amandiyim.com Mimarisinden Notlar</div>
                            <ul class="sidebar-list">
                                <li>
                                    <span class="check">✓</span>
                                    <span><strong>Multi-Vendor Yapı:</strong> Her satıcıya özel bağımsız yönetim paneli.</span>
                                </li>
                                <li>
                                    <span class="check">✓</span>
                                    <span><strong>Hakediş & Komisyon:</strong> Sipariş tamamlandığında otomatik hesaplanan bakiyeler.</span>
                                </li>
                                <li>
                                    <span class="check">✓</span>
                                    <span><strong>Doğrudan Sanal POS:</strong> Banka ve ödeme kuruluşlarıyla doğrudan bağlantı.</span>
                                </li>
                                <li>
                                    <span class="check">✓</span>
                                    <span><strong>Hızlı & Temiz Kod:</strong> Sayfaların anında açılması için şişirilmemiş altyapı.</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- How We Work Contrast -->
        <section class="contrast-section">
            <div class="container">
                <div class="section-intro">
                    <span class="tag">Çalışma Şeklimiz</span>
                    <h2>Net ve Şeffaf Bir İş Birlikteliği</h2>
                    <p>Müşterilerimizle çalışırken sınırları baştan net çiziyoruz.</p>
                </div>

                <div class="contrast-grid">
                    <div class="contrast-box positive">
                        <h3>✓ Neler Yapıyoruz?</h3>
                        <ul class="contrast-list">
                            <li>
                                <strong>İşletmenize özel kodlama:</strong> Her projeyi ihtiyacınıza göre sıfırdan, temiz ve hafif kodla yazarız.
                            </li>
                            <li>
                                <strong>Tam mülkiyet teslimi:</strong> Kodlar, veritabanı ve müşteri bilgileri tamamen sizin sunucunuzda durur. Rehin alma yoktur.
                            </li>
                            <li>
                                <strong>1 Yıl ücretsiz teknik destek:</strong> Teslim sonrasında sisteminizi yalnız bırakmaz, 1 yıl boyunca altyapı ve güvenliği ücretsiz takip ederiz.
                            </li>
                            <li>
                                <strong>Doğrudan yazılımcıyla iletişim:</strong> Arada satış temsilcisi veya danışman olmaz; doğrudan Kaan ve Mustafa ile görüşürsünüz.
                            </li>
                        </ul>
                    </div>

                    <div class="contrast-box negative">
                        <h3>✕ Neler Yapmıyoruz?</h3>
                        <ul class="contrast-list">
                            <li>
                                <strong>Çapraz pazaryeri entegrasyonu yapmıyoruz:</strong> Trendyol/Hepsiburada'ya ürün kopyalayan sistemlerle uğraşmıyoruz; doğrudan kendi bağımsız markanızı büyütmeye odaklanıyoruz.
                            </li>
                            <li>
                                <strong>Hazır tema giydirmiyoruz:</strong> Başkaları için yapılmış şablonları alıp logo değiştirerek satmıyoruz.
                            </li>
                            <li>
                                <strong>Aylık ciro komisyonu kesmiyoruz:</strong> Kazandığınız paraya ortak olmayız, sadece mühendislik hizmetinin bedelini alırız.
                            </li>
                            <li>
                                <strong>Gereksiz eklentilerle sistemi şişirmiyoruz:</strong> Siteniz ışık hızında açılsın diye en yalın çözümü üretiriz.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section — DIRECT CHANNELS ONLY (NO WEB FORM) -->
        <section id="iletisim" class="contact-section">
            <div class="container">
                <div class="section-intro" style="text-align:center; max-width:700px; margin:0 auto 40px auto;">
                    <span class="tag">Doğrudan İletişim</span>
                    <h2>Projenizi Mühendislerine Doğrudan Anlatın</h2>
                    <p>
                        Web sitesi üzerinden form doldurup beklemenize gerek yok. Aklınızdaki projeyi doğrudan yazacak olan Kaan ve Mustafa'ya WhatsApp'tan yazabilir ya da hemen arayabilirsiniz.
                    </p>
                </div>

                <!-- Two Dedicated Founder Action Cards -->
                <div class="founders-action-grid">
                    <!-- Kaan Türkoğlu Card -->
                    <div class="founder-action-card">
                        <div>
                            <div style="display:inline-block; font-size:0.74rem; font-weight:700; color:var(--accent); background:var(--accent-bg); padding:3px 10px; border-radius:9999px; margin-bottom:12px;">
                                Kurucu & Yazılım Mühendisi
                            </div>
                            <h3 style="font-size:1.4rem; font-weight:800; color:var(--text-heading); margin-bottom:6px;">
                                Kaan Türkoğlu
                            </h3>
                            <p style="font-size:0.9rem; color:var(--text-body); margin-bottom:20px; line-height:1.6;">
                                E-ticaret, B2B bayi mimarisi ve altyapı süreçleri için doğrudan görüşebilirsiniz.
                            </p>
                            <div style="font-size:0.88rem; color:var(--text-heading); margin-bottom:24px; display:flex; flex-direction:column; gap:6px;">
                                <div>📞 <strong>0545 903 95 84</strong></div>
                                <div>✉ <a href="mailto:kaantrrkoglu@gmail.com" style="color:var(--text-light); text-decoration:underline;">kaantrrkoglu@gmail.com</a></div>
                            </div>
                        </div>

                        <div class="founder-card-actions">
                            <a href="https://wa.me/905459039584?text=Merhaba%20Kaan%20Bey,%20yaz%C4%B1l%C4%B1m%20ve%20e-ticaret%20projemiz%20hakk%C4%B1nda%20g%C3%B6r%C3%BC%C5%9Fmek%20istiyoruz." target="_blank" rel="noopener" class="btn btn-primary" style="flex:1; background:#047857; border-color:#047857;">
                                💬 WhatsApp'tan Yazın
                            </a>
                            <a href="tel:05459039584" class="btn btn-secondary" style="padding:10px 14px;">
                                📞 Ara
                            </a>
                        </div>
                    </div>

                    <!-- Mustafa Dirlikli Card -->
                    <div class="founder-action-card">
                        <div>
                            <div style="display:inline-block; font-size:0.74rem; font-weight:700; color:var(--accent); background:var(--accent-bg); padding:3px 10px; border-radius:9999px; margin-bottom:12px;">
                                Kurucu & Yazılım Mühendisi
                            </div>
                            <h3 style="font-size:1.4rem; font-weight:800; color:var(--text-heading); margin-bottom:6px;">
                                Mustafa Dirlikli
                            </h3>
                            <p style="font-size:0.9rem; color:var(--text-body); margin-bottom:20px; line-height:1.6;">
                                Özel web yazılımları, operasyon panelleri ve CMS sistemleri için doğrudan görüşebilirsiniz.
                            </p>
                            <div style="font-size:0.88rem; color:var(--text-heading); margin-bottom:24px; display:flex; flex-direction:column; gap:6px;">
                                <div>📞 <strong>0530 367 80 45</strong></div>
                                <div>✉ <a href="mailto:mustafadirlikli@gmail.com" style="color:var(--text-light); text-decoration:underline;">mustafadirlikli@gmail.com</a></div>
                            </div>
                        </div>

                        <div class="founder-card-actions">
                            <a href="https://wa.me/905303678045?text=Merhaba%20Mustafa%20Bey,%20yaz%C4%B1l%C4%B1m%20ve%20e-ticaret%20projemiz%20hakk%C4%B1nda%20g%C3%B6r%C3%BC%C5%9Fmek%20istiyoruz." target="_blank" rel="noopener" class="btn btn-primary" style="flex:1; background:#047857; border-color:#047857;">
                                💬 WhatsApp'tan Yazın
                            </a>
                            <a href="tel:05303678045" class="btn btn-secondary" style="padding:10px 14px;">
                                📞 Ara
                            </a>
                        </div>
                    </div>
                </div>

                <div style="text-align:center; font-size:0.88rem; color:var(--text-light); max-width:600px; margin:0 auto;">
                    💡 <em>Haftanın 7 günü WhatsApp üzerinden doğrudan sorularınızı iletebilirsiniz. Satış danışmanı veya temsilci beklemez, ilk andan itibaren mühendisle görüşürsünüz.</em>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-inner">
                <div style="display:flex; align-items:center; gap:10px;">
                    <img src="{{ asset('images/raquun-logo.jpg') }}" alt="Raquun" style="width:28px; height:28px; border-radius:6px; border:1px solid var(--border);">
                    <span><strong>Raquun</strong> — amandiyim.com Kurucu Ekibi (Kaan Türkoğlu & Mustafa Dirlikli)</span>
                </div>
                <div>
                    <span>© {{ date('Y') }} Raquun. Tüm hakları saklıdır.</span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Mobile Floating Bottom Action Bar -->
    <div class="mobile-bottom-bar" id="mobileBottomBar">
        <a href="https://wa.me/905459039584?text=Merhaba,%20yaz%C4%B1l%C4%B1m%20ve%20e-ticaret%20projemiz%20hakk%C4%B1nda%20g%C3%B6r%C3%BC%C5%9Fmek%20istiyoruz." target="_blank" rel="noopener" class="mobile-bar-btn mobile-bar-whatsapp">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" style="flex-shrink:0;"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
            <span>WhatsApp'tan Yazın</span>
        </a>
        <a href="#iletisim" class="mobile-bar-btn mobile-bar-call">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" style="flex-shrink:0;"><path d="M6.62 10.79c1.44 2.83 3.76 5.15 6.59 6.59l2.2-2.2c.28-.28.67-.36 1.02-.25 1.12.37 2.32.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
            <span>Mühendisleri Arayın</span>
        </a>
    </div>

    <!-- Mobile Menu Interaction Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var toggleBtn = document.getElementById('mobileNavToggle');
            var drawer = document.getElementById('mobileMenuDrawer');
            var menuItems = document.querySelectorAll('.mobile-menu-item');

            if (toggleBtn && drawer) {
                function toggleMenu(show) {
                    var isOpen = typeof show === 'boolean' ? show : !drawer.classList.contains('is-open');
                    if (isOpen) {
                        drawer.classList.add('is-open');
                        toggleBtn.classList.add('is-active');
                        toggleBtn.setAttribute('aria-expanded', 'true');
                        drawer.setAttribute('aria-hidden', 'false');
                        document.body.style.overflow = 'hidden';
                    } else {
                        drawer.classList.remove('is-open');
                        toggleBtn.classList.remove('is-active');
                        toggleBtn.setAttribute('aria-expanded', 'false');
                        drawer.setAttribute('aria-hidden', 'true');
                        document.body.style.overflow = '';
                    }
                }

                toggleBtn.addEventListener('click', function (e) {
                    e.stopPropagation();
                    toggleMenu();
                });

                drawer.addEventListener('click', function (e) {
                    if (e.target === drawer) {
                        toggleMenu(false);
                    }
                });

                menuItems.forEach(function (item) {
                    item.addEventListener('click', function () {
                        toggleMenu(false);
                    });
                });

                document.addEventListener('keydown', function (e) {
                    if (e.key === 'Escape' && drawer.classList.contains('is-open')) {
                        toggleMenu(false);
                    }
                });
            }
        });
    </script>
</body>
</html>
