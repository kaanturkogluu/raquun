<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">
    <url>
        <loc>{{ url('/') }}</loc>
        <lastmod>{{ date('Y-m-d') }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>1.0</priority>
        <image:image>
            <image:loc>{{ asset('images/raquun-mascot.jpg') }}</image:loc>
            <image:title>Raquun Mühendislik Karakteri Maskotu</image:title>
            <image:caption>amandiyim.com kurucu ekibi bağımsız yazılım mimarisi</image:caption>
        </image:image>
        <image:image>
            <image:loc>{{ asset('images/raquun-logo.jpg') }}</image:loc>
            <image:title>Raquun Logo</image:title>
            <image:caption>Raquun Bağımsız E-Ticaret, B2B ve Kurumsal Yazılım</image:caption>
        </image:image>
    </url>
</urlset>
