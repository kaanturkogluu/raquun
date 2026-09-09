<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yönetim Paneli — Raquun & amandiyim.com</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --sidebar-width: 270px;
            --bg-page: #f8fafc;
            --bg-card: #ffffff;
            --border: #e2e8f0;
            --border-subtle: #f1f5f9;
            --text-heading: #0f172a;
            --text-body: #334155;
            --text-muted: #64748b;
            --primary: #2563eb;
            --primary-hover: #1d4ed8;
            --primary-light: #eff6ff;
            --green: #059669;
            --green-bg: #ecfdf5;
            --amber: #d97706;
            --amber-bg: #fef3c7;
            --red: #dc2626;
            --red-bg: #fee2e2;
            --radius-sm: 6px;
            --radius: 10px;
            --radius-lg: 14px;
        }

        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            background: var(--bg-page);
            color: var(--text-body);
            min-height: 100vh;
            display: flex;
            font-size: 14px;
            line-height: 1.5;
            -webkit-font-smoothing: antialiased;
        }

        a { color: inherit; text-decoration: none; }

        /* ==========================================================================
           LEFT SIDEBAR LAYOUT
           ========================================================================== */
        .sidebar {
            width: var(--sidebar-width);
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background: #ffffff;
            border-right: 1px solid var(--border);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            z-index: 50;
            box-shadow: 2px 0 8px rgba(0,0,0,0.02);
        }

        .sidebar-top {
            display: flex;
            flex-direction: column;
            overflow-y: auto;
        }

        .sidebar-brand {
            padding: 24px 20px;
            display: flex;
            align-items: center;
            gap: 12px;
            border-bottom: 1px solid var(--border);
        }

        .sidebar-brand-img {
            width: 36px;
            height: 36px;
            border-radius: var(--radius-sm);
            border: 1px solid var(--border);
            object-fit: cover;
        }

        .sidebar-brand-title {
            font-size: 1.15rem;
            font-weight: 800;
            color: var(--text-heading);
            letter-spacing: -0.02em;
            line-height: 1.2;
        }

        .sidebar-brand-sub {
            font-size: 0.72rem;
            font-weight: 600;
            color: var(--primary);
            background: var(--primary-light);
            padding: 2px 6px;
            border-radius: 4px;
            display: inline-block;
            margin-top: 3px;
        }

        .nav-group-label {
            padding: 20px 20px 8px 20px;
            font-size: 0.72rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            color: var(--text-muted);
        }

        .sidebar-menu {
            list-style: none;
            padding: 0 12px;
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .sidebar-link {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 12px 14px;
            border-radius: var(--radius);
            font-weight: 600;
            font-size: 0.9rem;
            color: var(--text-body);
            transition: all 0.15s ease;
        }

        .sidebar-link:hover {
            background: var(--bg-page);
            color: var(--text-heading);
        }

        .sidebar-link.active {
            background: var(--primary-light);
            color: var(--primary);
            font-weight: 700;
        }

        .sidebar-link-content {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .sidebar-link-icon {
            font-size: 1.1rem;
            line-height: 1;
        }

        .sidebar-badge {
            font-size: 0.75rem;
            padding: 2px 8px;
            border-radius: 9999px;
            font-weight: 700;
            background: #e2e8f0;
            color: var(--text-heading);
        }

        .sidebar-link.active .sidebar-badge {
            background: #bfdbfe;
            color: var(--primary);
        }

        /* Sidebar Bottom Profile */
        .sidebar-bottom {
            padding: 16px;
            border-top: 1px solid var(--border);
            background: #fafbfc;
        }

        .user-card {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
            padding: 10px 12px;
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: var(--radius);
        }

        .user-info {
            overflow: hidden;
        }

        .user-name {
            font-weight: 700;
            font-size: 0.88rem;
            color: var(--text-heading);
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .user-role {
            font-size: 0.76rem;
            color: var(--text-muted);
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .btn-logout-icon {
            background: none;
            border: none;
            font-size: 1.1rem;
            cursor: pointer;
            padding: 6px;
            border-radius: var(--radius-sm);
            color: var(--text-muted);
            transition: all 0.15s;
        }

        .btn-logout-icon:hover {
            color: var(--red);
            background: var(--red-bg);
        }

        /* ==========================================================================
           MAIN CONTENT AREA (SPACIOUS & NOT CRAMPED)
           ========================================================================== */
        .main-wrapper {
            margin-left: var(--sidebar-width);
            flex: 1;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            width: calc(100% - var(--sidebar-width));
        }

        .top-navbar {
            height: 64px;
            background: #ffffff;
            border-bottom: 1px solid var(--border);
            padding: 0 36px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            top: 0;
            z-index: 40;
        }

        .breadcrumbs {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.88rem;
            color: var(--text-muted);
        }

        .breadcrumbs strong {
            color: var(--text-heading);
            font-weight: 700;
        }

        .top-actions {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .btn-site-view {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-size: 0.84rem;
            font-weight: 600;
            color: var(--primary);
            background: var(--primary-light);
            padding: 6px 14px;
            border-radius: var(--radius);
            border: 1px solid #bfdbfe;
            transition: all 0.15s;
        }

        .btn-site-view:hover {
            background: #dbeafe;
        }

        .content-body {
            padding: 36px 40px 60px 40px;
            max-width: 1560px;
            width: 100%;
            margin: 0 auto;
        }

        /* Stats Cards */
        .stats-row {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-bottom: 32px;
        }

        .stat-box {
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: var(--radius-lg);
            padding: 20px 24px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.02);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .stat-box-info .stat-label {
            font-size: 0.82rem;
            font-weight: 600;
            color: var(--text-muted);
            margin-bottom: 6px;
            text-transform: uppercase;
            letter-spacing: 0.04em;
        }

        .stat-box-info .stat-number {
            font-size: 2rem;
            font-weight: 800;
            color: var(--text-heading);
            line-height: 1;
        }

        .stat-icon-wrap {
            width: 48px;
            height: 48px;
            border-radius: var(--radius);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            background: var(--bg-page);
        }

        /* Alerts */
        .alert {
            padding: 14px 20px;
            border-radius: var(--radius);
            margin-bottom: 24px;
            font-size: 0.92rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .alert-success {
            background: var(--green-bg);
            color: var(--green);
            border: 1px solid #a7f3d0;
        }

        /* Page Section Header */
        .section-header-bar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 24px;
            flex-wrap: wrap;
            gap: 16px;
        }

        .section-header-title h1 {
            font-size: 1.5rem;
            font-weight: 800;
            color: var(--text-heading);
            letter-spacing: -0.02em;
            margin-bottom: 4px;
        }

        .section-header-title p {
            font-size: 0.9rem;
            color: var(--text-muted);
        }

        .btn-toggle-form {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 18px;
            background: var(--text-heading);
            color: #ffffff;
            border: none;
            border-radius: var(--radius);
            font-size: 0.9rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.15s;
        }

        .btn-toggle-form:hover {
            background: #000000;
        }

        /* ==========================================================================
           SPACIOUS ADD FORM (FULL WIDTH 2/3 COLUMN GRID)
           ========================================================================== */
        .spacious-form-card {
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: var(--radius-lg);
            padding: 28px 32px;
            margin-bottom: 32px;
            box-shadow: 0 2px 8px -2px rgba(0,0,0,0.03);
        }

        .form-card-title {
            font-size: 1.15rem;
            font-weight: 800;
            color: var(--text-heading);
            margin-bottom: 20px;
            padding-bottom: 12px;
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .form-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
            margin-bottom: 18px;
        }

        .form-grid-2 {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 18px;
            margin-bottom: 18px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        .form-label {
            font-size: 0.85rem;
            font-weight: 700;
            color: var(--text-heading);
        }

        .form-control {
            width: 100%;
            padding: 10px 14px;
            border: 1px solid var(--border);
            border-radius: var(--radius);
            font-family: inherit;
            font-size: 0.92rem;
            color: var(--text-heading);
            background: #ffffff;
            transition: border-color 0.15s, box-shadow 0.15s;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(37,99,235,0.12);
        }

        textarea.form-control {
            resize: vertical;
            min-height: 85px;
            line-height: 1.6;
        }

        .form-submit-row {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 14px;
            margin-top: 20px;
            padding-top: 18px;
            border-top: 1px solid var(--border);
        }

        .btn-submit-primary {
            padding: 11px 24px;
            background: var(--primary);
            color: #ffffff;
            border: none;
            border-radius: var(--radius);
            font-size: 0.92rem;
            font-weight: 700;
            cursor: pointer;
            transition: background 0.15s;
        }

        .btn-submit-primary:hover {
            background: var(--primary-hover);
        }

        /* ==========================================================================
           DATA TABLE CARD (FULL WIDTH & SPACIOUS)
           ========================================================================== */
        .table-card {
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: var(--radius-lg);
            box-shadow: 0 2px 8px -2px rgba(0,0,0,0.03);
            overflow: hidden;
        }

        .table-top-bar {
            padding: 18px 24px;
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            background: #ffffff;
        }

        .table-count-badge {
            font-size: 0.95rem;
            font-weight: 800;
            color: var(--text-heading);
        }

        .table-search-box {
            position: relative;
            max-width: 320px;
            width: 100%;
        }

        .table-search-input {
            width: 100%;
            padding: 8px 14px 8px 34px;
            border: 1px solid var(--border);
            border-radius: var(--radius);
            font-size: 0.88rem;
            font-family: inherit;
        }

        .table-search-input:focus {
            outline: none;
            border-color: var(--primary);
        }

        .table-search-icon {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 0.9rem;
            color: var(--text-muted);
            pointer-events: none;
        }

        .table-responsive {
            width: 100%;
            overflow-x: auto;
        }

        table.data-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        table.data-table th {
            background: #f8fafc;
            color: var(--text-muted);
            font-size: 0.78rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.06em;
            padding: 14px 20px;
            border-bottom: 1px solid var(--border);
            white-space: nowrap;
        }

        table.data-table td {
            padding: 16px 20px;
            border-bottom: 1px solid var(--border);
            font-size: 0.9rem;
            vertical-align: middle;
        }

        table.data-table tr:last-child td {
            border-bottom: none;
        }

        table.data-table tr:hover td {
            background: #fafcfe;
        }

        /* Badges */
        .badge {
            display: inline-flex;
            align-items: center;
            gap: 4px;
            font-size: 0.78rem;
            font-weight: 700;
            padding: 4px 10px;
            border-radius: 9999px;
            white-space: nowrap;
        }

        .badge-green { background: var(--green-bg); color: var(--green); border: 1px solid #a7f3d0; }
        .badge-amber { background: var(--amber-bg); color: var(--amber); border: 1px solid #fde68a; }
        .badge-red { background: var(--red-bg); color: var(--red); border: 1px solid #fecaca; }
        .badge-blue { background: var(--primary-light); color: var(--primary); border: 1px solid #bfdbfe; }
        .badge-gray { background: #f1f5f9; color: var(--text-body); border: 1px solid #e2e8f0; }

        /* Delete Button */
        .btn-delete {
            background: #ffffff;
            color: var(--red);
            border: 1px solid #fca5a5;
            padding: 6px 12px;
            border-radius: var(--radius-sm);
            font-size: 0.8rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.15s;
        }

        .btn-delete:hover {
            background: var(--red-bg);
            border-color: var(--red);
        }

        /* Edit Button */
        .btn-edit {
            background: #ffffff;
            color: var(--primary);
            border: 1px solid #bfdbfe;
            padding: 6px 12px;
            border-radius: var(--radius-sm);
            font-size: 0.8rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.15s;
            display: inline-flex;
            align-items: center;
            gap: 4px;
        }

        .btn-edit:hover {
            background: var(--primary-light);
            border-color: var(--primary);
        }

        /* Quick Category Button */
        .btn-quick-cat {
            background: #f1f5f9;
            border: 1px solid #cbd5e1;
            color: var(--text-heading);
            font-size: 0.76rem;
            font-weight: 700;
            padding: 3px 8px;
            border-radius: var(--radius-sm);
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 4px;
            transition: all 0.15s;
        }

        .btn-quick-cat:hover {
            background: var(--primary-light);
            color: var(--primary);
            border-color: #bfdbfe;
        }

        /* Category Filter Pills */
        .cat-pill-container {
            display: flex;
            align-items: center;
            gap: 8px;
            flex-wrap: wrap;
            margin-bottom: 16px;
            padding: 12px 18px;
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: var(--radius-lg);
            box-shadow: 0 1px 3px rgba(0,0,0,0.02);
        }

        .cat-pill {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            font-size: 0.82rem;
            font-weight: 600;
            padding: 6px 12px;
            border-radius: 9999px;
            border: 1px solid var(--border);
            background: #f8fafc;
            color: var(--text-body);
            cursor: pointer;
            transition: all 0.15s;
        }

        .cat-pill:hover {
            background: var(--primary-light);
            border-color: #bfdbfe;
            color: var(--primary);
        }

        .cat-pill.active {
            background: var(--text-heading);
            color: #ffffff;
            border-color: var(--text-heading);
        }

        .cat-pill-count {
            font-size: 0.72rem;
            padding: 1px 6px;
            border-radius: 9999px;
            background: rgba(0,0,0,0.06);
        }

        .cat-pill.active .cat-pill-count {
            background: rgba(255,255,255,0.25);
            color: #ffffff;
        }

        /* Modals */
        .modal-backdrop {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(15, 23, 42, 0.6);
            backdrop-filter: blur(4px);
            z-index: 1000;
            display: none;
            align-items: center;
            justify-content: center;
            padding: 20px;
            animation: modalFadeIn 0.2s ease-out;
        }

        @keyframes modalFadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .modal-dialog {
            background: #ffffff;
            border-radius: var(--radius-lg);
            width: 100%;
            max-height: 90vh;
            overflow-y: auto;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            border: 1px solid var(--border);
            animation: modalScaleUp 0.2s ease-out;
        }

        @keyframes modalScaleUp {
            from { transform: scale(0.96); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }

        .modal-header {
            padding: 20px 24px;
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            top: 0;
            background: #ffffff;
            z-index: 10;
        }

        .modal-body {
            padding: 24px;
        }

        .modal-footer {
            padding: 16px 24px;
            border-top: 1px solid var(--border);
            display: flex;
            justify-content: flex-end;
            gap: 12px;
            background: #f8fafc;
            position: sticky;
            bottom: 0;
            z-index: 10;
        }

        /* Color Swatches for Category Creation */
        .color-swatch-label {
            display: inline-flex;
            align-items: center;
            cursor: pointer;
        }

        .color-swatch-label input[type="radio"] {
            display: none;
        }

        .color-swatch-label span {
            width: 26px;
            height: 26px;
            border-radius: 50%;
            display: inline-block;
            border: 2px solid transparent;
            transition: transform 0.15s, border-color 0.15s, box-shadow 0.15s;
        }

        .color-swatch-label input[type="radio"]:checked + span {
            transform: scale(1.15);
            border-color: #0f172a;
            box-shadow: 0 0 0 2px #ffffff inset;
        }

        /* Toast */
        .admin-toast {
            position: fixed;
            bottom: 24px;
            right: 24px;
            background: #0f172a;
            color: #ffffff;
            padding: 14px 22px;
            border-radius: var(--radius);
            font-size: 0.9rem;
            font-weight: 600;
            box-shadow: 0 10px 25px -3px rgba(0, 0, 0, 0.3);
            z-index: 9999;
            display: none;
            align-items: center;
            gap: 10px;
            animation: toastSlideUp 0.2s ease-out;
        }

        @keyframes toastSlideUp {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        /* Note bubble inside table */
        .note-bubble {
            background: #f8fafc;
            border: 1px solid var(--border);
            border-radius: var(--radius-sm);
            padding: 8px 12px;
            font-size: 0.84rem;
            color: var(--text-body);
            line-height: 1.5;
            max-width: 320px;
        }

        @media (max-width: 1200px) {
            .stats-row { grid-template-columns: repeat(2, 1fr); }
            .form-grid-3 { grid-template-columns: 1fr 1fr; }
        }

        @media (max-width: 860px) {
            :root { --sidebar-width: 70px; }
            .sidebar-brand-title, .sidebar-brand-sub, .sidebar-link span:not(.sidebar-link-icon), .sidebar-badge, .nav-group-label, .user-info {
                display: none !important;
            }
            .sidebar-brand { justify-content: center; padding: 18px 0; }
            .sidebar-link { justify-content: center; padding: 12px; }
            .stats-row { grid-template-columns: 1fr; }
            .form-grid-3, .form-grid-2 { grid-template-columns: 1fr; }
            .content-body { padding: 20px; }
        }
    </style>
</head>
<body>

    <!-- ====================================================================
         LEFT SIDEBAR
         ==================================================================== -->
    <aside class="sidebar">
        <div class="sidebar-top">
            <!-- Brand -->
            <div class="sidebar-brand">
                <img src="{{ asset('images/raquun-logo.jpg') }}" alt="Raquun" class="sidebar-brand-img">
                <div>
                    <div class="sidebar-brand-title">Raquun</div>
                    <span class="sidebar-brand-sub">amandiyim.com Ekibi</span>
                </div>
            </div>

            <!-- Navigation Links -->
            <div class="nav-group-label">Yönetim Menüsü</div>
            <ul class="sidebar-menu">
                <li>
                    <a href="{{ route('admin.dashboard', ['tab' => 'projects']) }}" class="sidebar-link {{ $activeTab === 'projects' ? 'active' : '' }}">
                        <div class="sidebar-link-content">
                            <span class="sidebar-link-icon">💼</span>
                            <span>Önceki İşler & Fiyatlar</span>
                        </div>
                        <span class="sidebar-badge">{{ $stats['projects_count'] }}</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.dashboard', ['tab' => 'clients']) }}" class="sidebar-link {{ $activeTab === 'clients' ? 'active' : '' }}">
                        <div class="sidebar-link-content">
                            <span class="sidebar-link-icon">🎯</span>
                            <span>Hedef Müşteri CRM</span>
                        </div>
                        <span class="sidebar-badge">{{ $stats['clients_count'] }}</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.dashboard', ['tab' => 'instagram']) }}" class="sidebar-link {{ $activeTab === 'instagram' ? 'active' : '' }}">
                        <div class="sidebar-link-content">
                            <span class="sidebar-link-icon">📸</span>
                            <span>Instagram İnceleme</span>
                        </div>
                        <span class="sidebar-badge">{{ $stats['instagram_count'] }}</span>
                    </a>
                </li>
            </ul>

            <div class="nav-group-label">Hızlı Bağlantılar</div>
            <ul class="sidebar-menu">
                <li>
                    <a href="{{ url('/') }}" target="_blank" class="sidebar-link">
                        <div class="sidebar-link-content">
                            <span class="sidebar-link-icon">🌐</span>
                            <span>Siteyi Önizle</span>
                        </div>
                        <span style="font-size:0.8rem; color:var(--text-muted);">↗</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Founder Profile Card & Logout -->
        <div class="sidebar-bottom">
            <div class="user-card">
                <div class="user-info">
                    <div class="user-name">👤 {{ Auth::user()?->name ?? 'Kurucu Yönetici' }}</div>
                    <div class="user-role">{{ Auth::user()?->email }}</div>
                </div>
                <form action="{{ route('admin.logout') }}" method="POST" style="margin:0;">
                    @csrf
                    <button type="submit" class="btn-logout-icon" title="Güvenli Çıkış Yap">
                        🚪
                    </button>
                </form>
            </div>
        </div>
    </aside>

    <!-- ====================================================================
         MAIN CONTENT WRAPPER
         ==================================================================== -->
    <div class="main-wrapper">
        <!-- Top Navbar -->
        <header class="top-navbar">
            <div class="breadcrumbs">
                <span>Panel</span>
                <span>/</span>
                @if ($activeTab === 'projects')
                    <strong>Önceki İşler & Fiyat Yönetimi</strong>
                @elseif ($activeTab === 'clients')
                    <strong>Hedef Müşteri CRM Portföyü</strong>
                @elseif ($activeTab === 'instagram')
                    <strong>İncelenecek Instagram Hesapları</strong>
                @endif
            </div>

            <div class="top-actions">
                <a href="{{ url('/') }}" target="_blank" class="btn-site-view">
                    <span>🌐 Canlı Siteyi Görüntüle</span>
                    <span>↗</span>
                </a>
            </div>
        </header>

        <!-- Main Body -->
        <main class="content-body">
            <!-- Flash Message -->
            @if (session('success'))
                <div class="alert alert-success">
                    <span>✓</span>
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            <!-- 4 Column Stats Row -->
            <div class="stats-row">
                <div class="stat-box">
                    <div class="stat-box-info">
                        <div class="stat-label">Referans Projeler</div>
                        <div class="stat-number">{{ $stats['projects_count'] }}</div>
                    </div>
                    <div class="stat-icon-wrap" style="color:var(--primary); background:var(--primary-light);">💼</div>
                </div>

                <div class="stat-box">
                    <div class="stat-box-info">
                        <div class="stat-label">Hedef Müşteri CRM</div>
                        <div class="stat-number">{{ $stats['clients_count'] }}</div>
                    </div>
                    <div class="stat-icon-wrap" style="color:var(--green); background:var(--green-bg);">🎯</div>
                </div>

                <div class="stat-box">
                    <div class="stat-box-info">
                        <div class="stat-label">Instagram Hesapları</div>
                        <div class="stat-number">{{ $stats['instagram_count'] }}</div>
                    </div>
                    <div class="stat-icon-wrap" style="color:#8b5cf6; background:#f5f3ff;">📸</div>
                </div>

                <div class="stat-box">
                    <div class="stat-box-info">
                        <div class="stat-label">İnceleme Bekleyen</div>
                        <div class="stat-number" style="color:var(--amber);">{{ $stats['instagram_pending'] }}</div>
                    </div>
                    <div class="stat-icon-wrap" style="color:var(--amber); background:var(--amber-bg);">⏳</div>
                </div>
            </div>

            <!-- ====================================================================
                 TAB 1: PROJECTS (ÖNCEKİ İŞLER & FİYATLAR)
                 ==================================================================== -->
            @if ($activeTab === 'projects')
                <div class="section-header-bar">
                    <div class="section-header-title">
                        <h1>Önceki İşler ve Şeffaf Fiyat Listesi</h1>
                        <p>Anasayfada sergilenen referans projeleri, paket fiyatlarını ve detayları buradan yönetin.</p>
                    </div>
                    <button type="button" class="btn-toggle-form" onclick="toggleForm('projectFormCard')">
                        <span id="projectFormBtnIcon">➕</span>
                        <span id="projectFormBtnText">Yeni İş / Referans Ekle</span>
                    </button>
                </div>

                <!-- Spacious Project Add Form -->
                <div id="projectFormCard" class="spacious-form-card" style="display: none;">
                    <div class="form-card-title">
                        <span>➕ Yeni Referans Proje ve Fiyat Kaydı</span>
                        <button type="button" onclick="toggleForm('projectFormCard')" style="background:none; border:none; font-size:1.2rem; cursor:pointer; color:var(--text-muted);">✕</button>
                    </div>
                    <form action="{{ route('admin.projects.store') }}" method="POST">
                        @csrf
                        <div class="form-grid-3">
                            <div class="form-group">
                                <label class="form-label">Proje Başlığı *</label>
                                <input type="text" name="title" class="form-control" placeholder="Örn: Butik Gurme E-Ticaret" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Kategori *</label>
                                <select name="category" class="form-control" required>
                                    <option value="E-Ticaret">Özel E-Ticaret Sitesi (60.000 TL)</option>
                                    <option value="B2B Sistemleri">B2B & Bayi Portalı (50.000 TL)</option>
                                    <option value="CMS & Web">Hızlı Kurumsal CMS (20.000 TL)</option>
                                    <option value="Pazaryeri & E-Ticaret">Pazaryeri Platformu</option>
                                    <option value="Özel Yazılım">Özel Yazılım / Operasyon Paneli</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Fiyat Bilgisi *</label>
                                <input type="text" name="price_text" class="form-control" placeholder="Örn: 60.000 TL (1 Yıl Destek Dahil)" required>
                            </div>
                        </div>

                        <div class="form-grid-3">
                            <div class="form-group">
                                <label class="form-label">Müşteri / Marka Adı</label>
                                <input type="text" name="client_name" class="form-control" placeholder="Örn: Ege Doğal Ürünleri Ltd.">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Öne Çıkan Özellikler / Etiketler</label>
                                <input type="text" name="tags" class="form-control" placeholder="Örn: Özel Sepet, Sanal POS, 1 Yıl Destek">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Canlı Site Linki (Varsa)</label>
                                <input type="url" name="project_url" class="form-control" placeholder="https://...">
                            </div>
                        </div>

                        <div class="form-group" style="margin-bottom: 18px;">
                            <label class="form-label">Yapılan İş ve Çözülen Problem Açıklaması *</label>
                            <textarea name="description" class="form-control" placeholder="İşletmenin hazır paket komisyonundan nasıl kurtarıldığı, hangi sanal POS ve operasyon altyapısının kurulduğu..." required></textarea>
                        </div>

                        <div style="display:flex; align-items:center; gap:8px;">
                            <input type="checkbox" name="is_featured" value="1" id="isFeatured" checked style="width:18px; height:18px; cursor:pointer;">
                            <label for="isFeatured" style="font-size:0.9rem; font-weight:700; color:var(--text-heading); cursor:pointer;">
                                Anasayfa Vitrininde Hemen Yayınla
                            </label>
                        </div>

                        <div class="form-submit-row">
                            <button type="button" onclick="toggleForm('projectFormCard')" style="background:none; border:1px solid var(--border); padding:10px 18px; border-radius:var(--radius); font-weight:600; cursor:pointer;">
                                Vazgeç
                            </button>
                            <button type="submit" class="btn-submit-primary">
                                ✓ Projeyi ve Fiyatı Kaydet
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Projects Data Table -->
                <div class="table-card">
                    <div class="table-top-bar">
                        <div class="table-count-badge">
                            Kayıtlı Projeler & Fiyatlar ({{ $projects->count() }})
                        </div>
                        <div class="table-search-box">
                            <span class="table-search-icon">🔍</span>
                            <input type="text" id="projectSearch" class="table-search-input" placeholder="Projelerde ara..." onkeyup="filterTable('projectSearch', 'projectsTable')">
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="data-table" id="projectsTable">
                            <thead>
                                <tr>
                                    <th>Proje & Müşteri</th>
                                    <th>Kategori</th>
                                    <th>Fiyat / Bedel</th>
                                    <th>Etiketler & Özellikler</th>
                                    <th>Durum</th>
                                    <th>Canlı Link</th>
                                    <th style="text-align:right;">İşlem</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($projects as $proj)
                                    <tr>
                                        <td>
                                            <strong style="color:var(--text-heading); font-size:0.95rem;">{{ $proj->title }}</strong>
                                            @if($proj->client_name)
                                                <div style="font-size:0.8rem; color:var(--text-muted); margin-top:2px;">Firma: {{ $proj->client_name }}</div>
                                            @endif
                                            <div style="font-size:0.84rem; color:var(--text-body); margin-top:4px; max-width:380px; line-height:1.45;">
                                                {{ $proj->description }}
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge badge-blue">{{ $proj->category }}</span>
                                        </td>
                                        <td>
                                            <strong style="color:var(--text-heading); font-size:0.95rem;">
                                                {{ $proj->price_text ?: 'Belirtilmedi' }}
                                            </strong>
                                        </td>
                                        <td>
                                            <div style="font-size:0.82rem; color:var(--text-muted); max-width:220px;">
                                                {{ $proj->tags ?: '-' }}
                                            </div>
                                        </td>
                                        <td>
                                            @if($proj->is_featured)
                                                <span class="badge badge-green">● Yayında</span>
                                            @else
                                                <span class="badge badge-gray">Gizli</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($proj->project_url)
                                                <a href="{{ $proj->project_url }}" target="_blank" rel="noopener" style="color:var(--primary); font-weight:700; font-size:0.84rem;">
                                                    Görüntüle ↗
                                                </a>
                                            @else
                                                <span style="color:var(--text-muted); font-size:0.82rem;">-</span>
                                            @endif
                                        </td>
                                        <td style="text-align:right;">
                                            <form action="{{ route('admin.projects.delete', $proj) }}" method="POST" onsubmit="return confirm('Bu projeyi silmek istediğinize emin misiniz?');" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn-delete">Sil</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" style="text-align:center; padding:48px; color:var(--text-muted);">
                                            Henüz kayıtlı proje bulunmuyor. Yukarıdaki "Yeni Referans Ekle" butonuna basarak ilk işinizi ekleyebilirsiniz.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif

            <!-- ====================================================================
                 TAB 2: TARGET CLIENTS (HEDEF MÜŞTERİ CRM)
                 ==================================================================== -->
            @if ($activeTab === 'clients')
                <div class="section-header-bar">
                    <div class="section-header-title">
                        <h1>Hedef Müşteri Portföyü (CRM)</h1>
                        <p>Teklif aşamasındaki firmaları, ihtiyaçlarını, bütçelerini ve görüşme notlarını takip edin.</p>
                    </div>
                    <button type="button" class="btn-toggle-form" onclick="toggleForm('clientFormCard')">
                        <span id="clientFormBtnIcon">➕</span>
                        <span id="clientFormBtnText">Yeni Hedef Müşteri Ekle</span>
                    </button>
                </div>

                <!-- Spacious Client Add Form -->
                <div id="clientFormCard" class="spacious-form-card" style="display: none;">
                    <div class="form-card-title">
                        <span>➕ Yeni Hedef Müşteri Kaydı</span>
                        <button type="button" onclick="toggleForm('clientFormCard')" style="background:none; border:none; font-size:1.2rem; cursor:pointer; color:var(--text-muted);">✕</button>
                    </div>
                    <form action="{{ route('admin.clients.store') }}" method="POST">
                        @csrf
                        <div class="form-grid-3">
                            <div class="form-group">
                                <label class="form-label">Firma / Marka Adı *</label>
                                <input type="text" name="company_name" class="form-control" placeholder="Örn: Güneş Tekstil Ltd." required>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Yetkili Kişi</label>
                                <input type="text" name="contact_person" class="form-control" placeholder="Örn: Ahmet Bey (Pazarlama Müdürü)">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Telefon</label>
                                <input type="text" name="phone" class="form-control" placeholder="0532 ...">
                            </div>
                        </div>

                        <div class="form-grid-3">
                            <div class="form-group">
                                <label class="form-label">E-Posta</label>
                                <input type="email" name="email" class="form-control" placeholder="ahmet@gunestekstil.com">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Sektör</label>
                                <input type="text" name="sector" class="form-control" placeholder="Örn: Ev Tekstili, Toptan Gıda, Mobilya">
                            </div>

                            <div class="form-group">
                                <label class="form-label">İhtiyaç Türü</label>
                                <select name="need_type" class="form-control">
                                    <option value="Özel E-Ticaret">Özel E-Ticaret Sitesi (60.000 TL)</option>
                                    <option value="B2B Bayi Portalı">B2B Bayi Sipariş Portalı (50.000 TL)</option>
                                    <option value="Hızlı CMS / Web">Hızlı CMS & Katalog (20.000 TL)</option>
                                    <option value="Özel Panel / Yazılım">Özel Panel & Yazılım Mimarisi</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-grid-2">
                            <div class="form-group">
                                <label class="form-label">Tahmini Bütçe</label>
                                <input type="text" name="estimated_budget" class="form-control" placeholder="Örn: 50.000 - 60.000 TL">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Görüşme Durumu *</label>
                                <select name="status" class="form-control" required>
                                    <option value="yeni">Yeni Aday</option>
                                    <option value="iletisime_gecildi">İletişime Geçildi</option>
                                    <option value="gorusuldu">Görüşme Yapıldı</option>
                                    <option value="teklif_verildi">Teklif Verildi</option>
                                    <option value="anlasildi">✓ Anlaşıldı (Kazanıldı)</option>
                                    <option value="olumsuz">✕ Olumsuz</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Görüşme Notları & Takip Detayları</label>
                            <textarea name="notes" class="form-control" placeholder="Firma yetkilisiyle ne konuşuldu, sistem talepleri neler, ne zaman aranacak?"></textarea>
                        </div>

                        <div class="form-submit-row">
                            <button type="button" onclick="toggleForm('clientFormCard')" style="background:none; border:1px solid var(--border); padding:10px 18px; border-radius:var(--radius); font-weight:600; cursor:pointer;">
                                Vazgeç
                            </button>
                            <button type="submit" class="btn-submit-primary">
                                ✓ Müşteriyi Portföye Ekle
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Clients Data Table -->
                <div class="table-card">
                    <div class="table-top-bar">
                        <div class="table-count-badge">
                            Kayıtlı Hedef Müşteriler ({{ $clients->count() }})
                        </div>
                        <div class="table-search-box">
                            <span class="table-search-icon">🔍</span>
                            <input type="text" id="clientSearch" class="table-search-input" placeholder="Müşterilerde ara..." onkeyup="filterTable('clientSearch', 'clientsTable')">
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="data-table" id="clientsTable">
                            <thead>
                                <tr>
                                    <th>Firma & Yetkili</th>
                                    <th>İletişim</th>
                                    <th>Sektör & İhtiyaç</th>
                                    <th>Bütçe</th>
                                    <th>Durum</th>
                                    <th>Notlar</th>
                                    <th style="text-align:right;">İşlem</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($clients as $client)
                                    <tr>
                                        <td>
                                            <strong style="color:var(--text-heading); font-size:0.95rem;">{{ $client->company_name }}</strong>
                                            @if($client->contact_person)
                                                <div style="font-size:0.82rem; color:var(--text-muted); margin-top:2px;">👤 {{ $client->contact_person }}</div>
                                            @endif
                                        </td>
                                        <td>
                                            @if($client->phone)
                                                <div style="font-weight:600;"><a href="tel:{{ $client->phone }}" style="color:var(--primary);">📞 {{ $client->phone }}</a></div>
                                            @endif
                                            @if($client->email)
                                                <div style="font-size:0.82rem; color:var(--text-muted); margin-top:2px;">✉ {{ $client->email }}</div>
                                            @endif
                                        </td>
                                        <td>
                                            <div style="font-weight:700; color:var(--text-heading);">{{ $client->need_type }}</div>
                                            <div style="font-size:0.82rem; color:var(--text-muted);">{{ $client->sector ?: 'Genel' }}</div>
                                        </td>
                                        <td>
                                            <strong style="color:var(--text-heading);">{{ $client->estimated_budget ?: '-' }}</strong>
                                        </td>
                                        <td>
                                            @php
                                                $statusBadges = [
                                                    'yeni' => ['badge-blue', 'Yeni Aday'],
                                                    'iletisime_gecildi' => ['badge-amber', 'İletişime Geçildi'],
                                                    'gorusuldu' => ['badge-amber', 'Görüşüldü'],
                                                    'teklif_verildi' => ['badge-blue', 'Teklif Verildi'],
                                                    'anlasildi' => ['badge-green', '✓ Anlaşıldı'],
                                                    'olumsuz' => ['badge-red', 'Olumsuz'],
                                                ];
                                                $curStatus = $statusBadges[$client->status] ?? ['badge-gray', $client->status];
                                            @endphp
                                            <span class="badge {{ $curStatus[0] }}">{{ $curStatus[1] }}</span>
                                        </td>
                                        <td>
                                            <div class="note-bubble">
                                                {{ $client->notes ?: 'Not girilmedi.' }}
                                            </div>
                                        </td>
                                        <td style="text-align:right;">
                                            <form action="{{ route('admin.clients.delete', $client) }}" method="POST" onsubmit="return confirm('Bu müşteriyi silmek istediğinize emin misiniz?');" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn-delete">Sil</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" style="text-align:center; padding:48px; color:var(--text-muted);">
                                            Henüz hedef müşteri kaydı eklenmedi. Yukarıdaki butona basarak ilk adayı ekleyebilirsiniz.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif

            <!-- ====================================================================
                 TAB 3: INSTAGRAM LEADS (İNCELENECEK INSTAGRAM HESAPLARI)
                 ==================================================================== -->
            @if ($activeTab === 'instagram')
                <div class="section-header-bar">
                    <div class="section-header-title">
                        <h1>İncelenecek Instagram Hesapları & Satış Fırsatları</h1>
                        <p>Instagram'da yüksek etkileşimi olan fakat web sitesi/sepeti eksik işletmeleri kaydedip kategorilerine göre analiz edin.</p>
                    </div>
                    <button type="button" class="btn-toggle-form" onclick="toggleForm('instagramFormCard')">
                        <span id="instagramFormBtnIcon">➕</span>
                        <span id="instagramFormBtnText">Yeni Hesap Ekle</span>
                    </button>
                </div>

                <!-- Spacious Instagram Add Form -->
                <div id="instagramFormCard" class="spacious-form-card" style="display: none;">
                    <div class="form-card-title">
                        <span>➕ İncelenecek Instagram Hesabı Kaydı</span>
                        <button type="button" onclick="toggleForm('instagramFormCard')" style="background:none; border:none; font-size:1.2rem; cursor:pointer; color:var(--text-muted);">✕</button>
                    </div>
                    <form action="{{ route('admin.instagram.store') }}" method="POST">
                        @csrf
                        <div class="form-grid-3">
                            <div class="form-group">
                                <label class="form-label">Instagram Kullanıcı Adı (@) *</label>
                                <input type="text" name="username" class="form-control" placeholder="ornek_butik_tekstil" required>
                            </div>

                            <div class="form-group">
                                <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:2px;">
                                    <label class="form-label" style="margin-bottom:0;">Kategori (Default: Null)</label>
                                    <button type="button" class="btn-quick-cat" onclick="openQuickCategoryModal('instagramAddCategorySelect')">
                                        ➕ Yeni Kategori
                                    </button>
                                </div>
                                <select name="category_id" id="instagramAddCategorySelect" class="form-control">
                                    <option value="">(Kategorisiz - Null)</option>
                                    @foreach ($instagramCategories as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Takipçi Sayısı</label>
                                <input type="text" name="follower_count" class="form-control" placeholder="Örn: 24.5K veya 50.000">
                            </div>
                        </div>

                        <div class="form-grid-3">
                            <div class="form-group">
                                <label class="form-label">Sektör / Niş</label>
                                <input type="text" name="sector" class="form-control" placeholder="Örn: Butik Giyim, Doğal Kozmetik, Gurme Gıda">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Mevcut Web / Sepet Durumu</label>
                                <input type="text" name="current_website" class="form-control" placeholder="Örn: Sadece Shopier / Bio'da WhatsApp / Sitesi Yok">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Öncelik Seviyesi *</label>
                                <select name="priority" class="form-control" required>
                                    <option value="yuksek">🔥 Yüksek Öncelik</option>
                                    <option value="orta" selected>⚡ Orta Öncelik</option>
                                    <option value="dusuk">Düşük Öncelik</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-grid-3">
                            <div class="form-group">
                                <label class="form-label">İletişim / Outreach Durumu *</label>
                                <select name="outreach_status" class="form-control" required>
                                    <option value="incelenecek">🔍 İncelenecek</option>
                                    <option value="dm_atildi">✉ DM Atıldı</option>
                                    <option value="cevap_bekleniyor">⏳ Cevap Bekleniyor</option>
                                    <option value="gorusme">📞 Görüşme Yapılıyor</option>
                                    <option value="teklif_gonderildi">📑 Teklif Gönderildi</option>
                                    <option value="anlasildi">✓ Anlaşıldı</option>
                                    <option value="pasif">✕ Pasif / İlgilenmedi</option>
                                </select>
                            </div>

                            <div class="form-group" style="grid-column: span 2;">
                                <label class="form-label">Özel Profil URL'si (Opsiyonel)</label>
                                <input type="text" name="profile_url" class="form-control" placeholder="Boş bırakılırsa otomatik https://instagram.com/kullaniciadi oluşturulur">
                            </div>
                        </div>

                        <div class="form-grid-2">
                            <div class="form-group">
                                <label class="form-label">Tespit Edilen Eksiklik / Satış Fırsatı *</label>
                                <textarea name="problem_opportunity" class="form-control" rows="3" placeholder="Örn: Bio'da sadece WhatsApp var, siparişler karışıyor. Shopier'e yüksek komisyon ödüyorlar; bağımsız 60.000 TL'lik e-ticaret paketi tam ihtiyaçları." required></textarea>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Detaylı İnceleme & DM Notları</label>
                                <textarea name="detailed_notes" class="form-control" rows="3" placeholder="Atılacak DM taslağı, işletmenin en çok satan ürünü, Reels etkileşimi vb."></textarea>
                            </div>
                        </div>

                        <div class="form-submit-row">
                            <button type="button" onclick="toggleForm('instagramFormCard')" style="background:none; border:1px solid var(--border); padding:10px 18px; border-radius:var(--radius); font-weight:600; cursor:pointer;">
                                Vazgeç
                            </button>
                            <button type="submit" class="btn-submit-primary">
                                ✓ Hesabı İnceleme Havuzuna Ekle
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Category Filter Pills Bar (Kategoriler üzerinden filtreleme & arama) -->
                <div class="cat-pill-container" id="categoryPillsContainer">
                    <span style="font-size:0.8rem; font-weight:700; color:var(--text-muted); margin-right:4px;">🏷️ Kategoriye Göre:</span>
                    <button type="button" class="cat-pill active" onclick="setCategoryFilter('', this)">
                        Tümü <span class="cat-pill-count">{{ $instagramLeads->count() }}</span>
                    </button>
                    <button type="button" class="cat-pill" onclick="setCategoryFilter('__null__', this)">
                        Kategorisiz <span class="cat-pill-count">{{ $instagramLeads->whereNull('category_id')->count() }}</span>
                    </button>
                    @foreach ($instagramCategories as $cat)
                        <button type="button" class="cat-pill" data-cat-id="{{ $cat->id }}" onclick="setCategoryFilter('{{ $cat->id }}', this)">
                            <span style="width:8px; height:8px; border-radius:50%; background:{{ $cat->color }}; display:inline-block;"></span>
                            {{ $cat->name }} <span class="cat-pill-count">{{ $cat->leads_count }}</span>
                        </button>
                    @endforeach
                </div>

                <!-- Instagram Data Table -->
                <div class="table-card">
                    <div class="table-top-bar">
                        <div class="table-count-badge">
                            İncelenen Instagram Hesapları (<span id="instagramFilteredCount">{{ $instagramLeads->count() }}</span>)
                        </div>
                        <div style="display:flex; align-items:center; gap:12px; flex:1; justify-content:flex-end; max-width:640px;">
                            <select id="instagramCategorySelectFilter" class="table-search-input" style="max-width:200px;" onchange="syncCategoryDropdown(this.value)">
                                <option value="">Tüm Kategoriler</option>
                                <option value="__null__">Kategorisiz (Null)</option>
                                @foreach ($instagramCategories as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                @endforeach
                            </select>
                            <div class="table-search-box">
                                <span class="table-search-icon">🔍</span>
                                <input type="text" id="instagramSearch" class="table-search-input" placeholder="Hesap, kategori veya sektörde ara..." onkeyup="filterInstagramTable()">
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="data-table" id="instagramTable">
                            <thead>
                                <tr>
                                    <th>Instagram Hesabı</th>
                                    <th>Kategori</th>
                                    <th>Takipçi & Sektör</th>
                                    <th>Mevcut Web Durumu</th>
                                    <th>Tespit Edilen Fırsat</th>
                                    <th>Öncelik & Durum</th>
                                    <th>Detaylı DM / İnceleme Notu</th>
                                    <th style="text-align:right;">İşlem</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($instagramLeads as $lead)
                                    <tr data-instagram-row="true"
                                        data-category-id="{{ $lead->category_id ?? '' }}"
                                        data-category-name="{{ $lead->category ? $lead->category->name : 'kategorisiz' }}">
                                        <td>
                                            <a href="{{ $lead->profile_url ?: 'https://instagram.com/' . $lead->username }}" target="_blank" rel="noopener" style="color:var(--primary); font-weight:800; font-size:0.95rem;">
                                                @ {{ $lead->username }} ↗
                                            </a>
                                        </td>
                                        <td>
                                            @if ($lead->category)
                                                <span class="badge" style="background: {{ $lead->category->color }}18; color: {{ $lead->category->color }}; border: 1px solid {{ $lead->category->color }}40; font-weight:700;">
                                                    <span style="width:7px; height:7px; border-radius:50%; background:{{ $lead->category->color }}; display:inline-block; margin-right:4px;"></span>
                                                    {{ $lead->category->name }}
                                                </span>
                                            @else
                                                <span class="badge badge-gray" style="color:var(--text-muted); font-weight:500; font-style:italic;">
                                                    Kategorisiz
                                                </span>
                                            @endif
                                        </td>
                                        <td>
                                            <strong style="color:var(--text-heading);">{{ $lead->follower_count ?: '-' }}</strong>
                                            <div style="font-size:0.8rem; color:var(--text-muted); margin-top:2px;">{{ $lead->sector ?: 'Genel' }}</div>
                                        </td>
                                        <td>
                                            <span class="badge badge-gray">{{ $lead->current_website ?: 'Bilinmiyor' }}</span>
                                        </td>
                                        <td>
                                            <div style="font-size:0.85rem; color:var(--text-heading); max-width:260px; line-height:1.45;">
                                                {{ $lead->problem_opportunity ?: '-' }}
                                            </div>
                                        </td>
                                        <td>
                                            @php
                                                $priorityBadges = [
                                                    'yuksek' => ['badge-red', '🔥 Yüksek'],
                                                    'orta' => ['badge-amber', '⚡ Orta'],
                                                    'dusuk' => ['badge-gray', 'Düşük'],
                                                ];
                                                $outreachBadges = [
                                                    'incelenecek' => ['badge-blue', '🔍 İncelenecek'],
                                                    'dm_atildi' => ['badge-amber', '✉ DM Atıldı'],
                                                    'cevap_bekleniyor' => ['badge-amber', '⏳ Cevap Bekleniyor'],
                                                    'gorusme' => ['badge-blue', '📞 Görüşme'],
                                                    'teklif_gonderildi' => ['badge-blue', '📑 Teklif Verildi'],
                                                    'anlasildi' => ['badge-green', '✓ Anlaşıldı'],
                                                    'pasif' => ['badge-gray', '✕ Pasif'],
                                                ];
                                                $curP = $priorityBadges[$lead->priority] ?? ['badge-gray', $lead->priority];
                                                $curO = $outreachBadges[$lead->outreach_status] ?? ['badge-gray', $lead->outreach_status];
                                            @endphp
                                            <div style="display:flex; flex-direction:column; gap:6px; align-items:flex-start;">
                                                <span class="badge {{ $curP[0] }}">{{ $curP[1] }}</span>
                                                <span class="badge {{ $curO[0] }}">{{ $curO[1] }}</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="note-bubble">
                                                {{ $lead->detailed_notes ?: 'Detaylı analiz notu girilmedi.' }}
                                            </div>
                                        </td>
                                        <td style="text-align:right; white-space:nowrap;">
                                            <div style="display:inline-flex; align-items:center; gap:6px;">
                                                <button type="button" class="btn-edit" onclick='openEditInstagramModal(@json($lead))'>
                                                    ✏ Düzenle
                                                </button>
                                                <form action="{{ route('admin.instagram.delete', $lead) }}" method="POST" onsubmit="return confirm('@ {{ $lead->username }} hesabını silmek istediğinize emin misiniz?');" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn-delete">Sil</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" style="text-align:center; padding:48px; color:var(--text-muted);">
                                            Henüz incelenecek Instagram hesabı eklenmedi. Yukarıdaki butona basarak ilk hesabı ekleyebilirsiniz.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </main>
    </div>

    <!-- ====================================================================
         MODAL 1: EDIT INSTAGRAM LEAD (DÜZENLEME MODALI)
         ==================================================================== -->
    <div id="editInstagramModal" class="modal-backdrop">
        <div class="modal-dialog" style="max-width: 780px;">
            <div class="modal-header">
                <h3 style="font-size:1.15rem; font-weight:800; color:var(--text-heading); display:flex; align-items:center; gap:8px;">
                    ✏️ Instagram Hesabı Düzenle — @<span id="editLeadUsernameTitle"></span>
                </h3>
                <button type="button" onclick="closeEditInstagramModal()" style="background:none; border:none; font-size:1.3rem; cursor:pointer; color:var(--text-muted);">&times;</button>
            </div>
            <form id="editInstagramForm" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-grid-3">
                        <div class="form-group">
                            <label class="form-label">Instagram Kullanıcı Adı (@) *</label>
                            <input type="text" name="username" id="edit_username" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:2px;">
                                <label class="form-label" style="margin-bottom:0;">Kategori (Default: Null)</label>
                                <button type="button" class="btn-quick-cat" onclick="openQuickCategoryModal('edit_category_id')">
                                    ➕ Yeni Kategori
                                </button>
                            </div>
                            <select name="category_id" id="edit_category_id" class="form-control">
                                <option value="">(Kategorisiz - Null)</option>
                                @foreach ($instagramCategories as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Takipçi Sayısı</label>
                            <input type="text" name="follower_count" id="edit_follower_count" class="form-control">
                        </div>
                    </div>

                    <div class="form-grid-3">
                        <div class="form-group">
                            <label class="form-label">Sektör / Niş</label>
                            <input type="text" name="sector" id="edit_sector" class="form-control">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Mevcut Web Durumu</label>
                            <input type="text" name="current_website" id="edit_current_website" class="form-control">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Öncelik Seviyesi *</label>
                            <select name="priority" id="edit_priority" class="form-control" required>
                                <option value="yuksek">🔥 Yüksek Öncelik</option>
                                <option value="orta">⚡ Orta Öncelik</option>
                                <option value="dusuk">Düşük Öncelik</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-grid-3">
                        <div class="form-group">
                            <label class="form-label">İletişim / Outreach Durumu *</label>
                            <select name="outreach_status" id="edit_outreach_status" class="form-control" required>
                                <option value="incelenecek">🔍 İncelenecek</option>
                                <option value="dm_atildi">✉ DM Atıldı</option>
                                <option value="cevap_bekleniyor">⏳ Cevap Bekleniyor</option>
                                <option value="gorusme">📞 Görüşme Yapılıyor</option>
                                <option value="teklif_gonderildi">📑 Teklif Gönderildi</option>
                                <option value="anlasildi">✓ Anlaşıldı</option>
                                <option value="pasif">✕ Pasif / İlgilenmedi</option>
                            </select>
                        </div>

                        <div class="form-group" style="grid-column: span 2;">
                            <label class="form-label">Profil URL'si</label>
                            <input type="text" name="profile_url" id="edit_profile_url" class="form-control" placeholder="https://instagram.com/...">
                        </div>
                    </div>

                    <div class="form-grid-2">
                        <div class="form-group">
                            <label class="form-label">Tespit Edilen Eksiklik / Satış Fırsatı *</label>
                            <textarea name="problem_opportunity" id="edit_problem_opportunity" class="form-control" rows="3" required></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Detaylı İnceleme & DM Notları</label>
                            <textarea name="detailed_notes" id="edit_detailed_notes" class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" onclick="closeEditInstagramModal()" style="background:none; border:1px solid var(--border); padding:10px 18px; border-radius:var(--radius); font-weight:600; cursor:pointer;">
                        Vazgeç
                    </button>
                    <button type="submit" class="btn-submit-primary">
                        ✓ Değişiklikleri Kaydet
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- ====================================================================
         MODAL 2: QUICK CATEGORY CREATE (SAYFAYI YENİLEMEDEN AJAX KATEGORİ EKLE)
         ==================================================================== -->
    <div id="quickCategoryModal" class="modal-backdrop">
        <div class="modal-dialog" style="max-width: 440px;">
            <div class="modal-header">
                <h3 style="font-size:1.05rem; font-weight:800; color:var(--text-heading); display:flex; align-items:center; gap:8px;">
                    🏷️ Hızlı Kategori Ekle
                </h3>
                <button type="button" onclick="closeQuickCategoryModal()" style="background:none; border:none; font-size:1.3rem; cursor:pointer; color:var(--text-muted);">&times;</button>
            </div>
            <form id="quickCategoryForm" onsubmit="submitQuickCategory(event)">
                <div class="modal-body">
                    <div style="margin-bottom:18px;">
                        <label class="form-label">Kategori Adı *</label>
                        <input type="text" id="quickCatName" class="form-control" placeholder="Örn: Spor & Outdoor" required autocomplete="off">
                        <div id="quickCatError" style="color:var(--red); font-size:0.8rem; margin-top:5px; display:none;"></div>
                    </div>
                    <div>
                        <label class="form-label">Etiket Renk Teması</label>
                        <div style="display:flex; align-items:center; gap:10px; flex-wrap:wrap; margin-top:8px;">
                            <label class="color-swatch-label"><input type="radio" name="quickCatColor" value="#ec4899" checked><span style="background:#ec4899;"></span></label>
                            <label class="color-swatch-label"><input type="radio" name="quickCatColor" value="#8b5cf6"><span style="background:#8b5cf6;"></span></label>
                            <label class="color-swatch-label"><input type="radio" name="quickCatColor" value="#f59e0b"><span style="background:#f59e0b;"></span></label>
                            <label class="color-swatch-label"><input type="radio" name="quickCatColor" value="#10b981"><span style="background:#10b981;"></span></label>
                            <label class="color-swatch-label"><input type="radio" name="quickCatColor" value="#06b6d4"><span style="background:#06b6d4;"></span></label>
                            <label class="color-swatch-label"><input type="radio" name="quickCatColor" value="#3b82f6"><span style="background:#3b82f6;"></span></label>
                            <label class="color-swatch-label"><input type="radio" name="quickCatColor" value="#ef4444"><span style="background:#ef4444;"></span></label>
                            <label class="color-swatch-label"><input type="radio" name="quickCatColor" value="#64748b"><span style="background:#64748b;"></span></label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" onclick="closeQuickCategoryModal()" style="background:none; border:1px solid var(--border); padding:8px 16px; border-radius:var(--radius); font-weight:600; cursor:pointer;">
                        Vazgeç
                    </button>
                    <button type="submit" id="btnSubmitQuickCat" class="btn-submit-primary" style="padding:8px 18px;">
                        ✓ Kaydet & Seç
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Scripts for Interactive Experience -->
    <script>
        function toggleForm(formId) {
            const el = document.getElementById(formId);
            if (!el) return;
            if (el.style.display === 'none' || el.style.display === '') {
                el.style.display = 'block';
                el.scrollIntoView({ behavior: 'smooth', block: 'start' });
            } else {
                el.style.display = 'none';
            }
        }

        function filterTable(inputId, tableId) {
            const input = document.getElementById(inputId);
            const filter = input.value.toLowerCase();
            const table = document.getElementById(tableId);
            if (!table) return;
            const rows = table.getElementsByTagName('tr');

            for (let i = 1; i < rows.length; i++) {
                const row = rows[i];
                const text = row.textContent.toLowerCase();
                if (text.indexOf(filter) > -1) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            }
        }

        // ==========================================
        // INSTAGRAM CATEGORY & LIVE FILTER LOGIC
        // ==========================================
        let currentCategoryFilter = '';

        function setCategoryFilter(catId, btn) {
            currentCategoryFilter = catId;
            
            // Update pills active state
            document.querySelectorAll('.cat-pill').forEach(el => el.classList.remove('active'));
            if (btn) btn.classList.add('active');
            
            // Sync dropdown
            const select = document.getElementById('instagramCategorySelectFilter');
            if (select) select.value = catId;
            
            filterInstagramTable();
        }

        function syncCategoryDropdown(val) {
            currentCategoryFilter = val;
            
            // Update pills active state
            document.querySelectorAll('.cat-pill').forEach(el => {
                const cat = el.getAttribute('data-cat-id');
                if ((!val && !cat && el.textContent.includes('Tümü')) ||
                    (val === '__null__' && el.textContent.includes('Kategorisiz')) ||
                    (val && cat === val)) {
                    el.classList.add('active');
                } else {
                    el.classList.remove('active');
                }
            });
            
            filterInstagramTable();
        }

        function filterInstagramTable() {
            const searchInput = document.getElementById('instagramSearch');
            const searchTerm = searchInput ? searchInput.value.toLowerCase().trim() : '';
            const table = document.getElementById('instagramTable');
            if (!table) return;
            
            const rows = table.querySelectorAll('tbody tr[data-instagram-row="true"]');
            let visibleCount = 0;
            
            rows.forEach(row => {
                const catId = row.getAttribute('data-category-id') || '';
                const isNullCat = (catId === '' || catId === 'null');
                
                // Category filter check
                let matchesCategory = true;
                if (currentCategoryFilter === '__null__') {
                    matchesCategory = isNullCat;
                } else if (currentCategoryFilter !== '') {
                    matchesCategory = (catId === currentCategoryFilter);
                }
                
                // Text search check (includes category name, username, notes, sector, etc.)
                const rowText = row.textContent.toLowerCase();
                const matchesSearch = !searchTerm || rowText.includes(searchTerm);
                
                if (matchesCategory && matchesSearch) {
                    row.style.display = '';
                    visibleCount++;
                } else {
                    row.style.display = 'none';
                }
            });
            
            const counterEl = document.getElementById('instagramFilteredCount');
            if (counterEl) counterEl.textContent = visibleCount;
        }

        // ==========================================
        // EDIT INSTAGRAM MODAL
        // ==========================================
        function openEditInstagramModal(lead) {
            const modal = document.getElementById('editInstagramModal');
            const form = document.getElementById('editInstagramForm');
            if (!modal || !form) return;
            
            form.action = '/admin/instagram/' + lead.id;
            
            document.getElementById('editLeadUsernameTitle').textContent = lead.username;
            document.getElementById('edit_username').value = lead.username || '';
            document.getElementById('edit_category_id').value = lead.category_id || '';
            document.getElementById('edit_follower_count').value = lead.follower_count || '';
            document.getElementById('edit_sector').value = lead.sector || '';
            document.getElementById('edit_current_website').value = lead.current_website || '';
            document.getElementById('edit_priority').value = lead.priority || 'orta';
            document.getElementById('edit_outreach_status').value = lead.outreach_status || 'incelenecek';
            document.getElementById('edit_profile_url').value = lead.profile_url || '';
            document.getElementById('edit_problem_opportunity').value = lead.problem_opportunity || '';
            document.getElementById('edit_detailed_notes').value = lead.detailed_notes || '';
            
            modal.style.display = 'flex';
        }

        function closeEditInstagramModal() {
            const modal = document.getElementById('editInstagramModal');
            if (modal) modal.style.display = 'none';
        }

        // ==========================================
        // QUICK CATEGORY MODAL (AJAX NO-REFRESH)
        // ==========================================
        let targetCategorySelectId = 'instagramAddCategorySelect';

        function openQuickCategoryModal(targetSelectId) {
            targetCategorySelectId = targetSelectId || 'instagramAddCategorySelect';
            const modal = document.getElementById('quickCategoryModal');
            const input = document.getElementById('quickCatName');
            const err = document.getElementById('quickCatError');
            if (err) err.style.display = 'none';
            if (input) input.value = '';
            if (modal) {
                modal.style.display = 'flex';
                setTimeout(() => input && input.focus(), 60);
            }
        }

        function closeQuickCategoryModal() {
            const modal = document.getElementById('quickCategoryModal');
            if (modal) modal.style.display = 'none';
        }

        async function submitQuickCategory(e) {
            e.preventDefault();
            const nameInput = document.getElementById('quickCatName');
            const name = nameInput.value.trim();
            const colorInput = document.querySelector('input[name="quickCatColor"]:checked');
            const color = colorInput ? colorInput.value : '#ec4899';
            const errEl = document.getElementById('quickCatError');
            const submitBtn = document.getElementById('btnSubmitQuickCat');
            
            if (!name) return;
            
            submitBtn.disabled = true;
            submitBtn.textContent = 'Kaydediliyor...';
            if (errEl) errEl.style.display = 'none';
            
            try {
                const response = await fetch("{{ route('admin.instagram.categories.store') }}", {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ name: name, color: color })
                });
                
                const data = await response.json();
                
                if (!response.ok) {
                    const errorMsg = data.errors?.name ? data.errors.name[0] : (data.message || 'Kategori eklenemedi.');
                    if (errEl) {
                        errEl.textContent = errorMsg;
                        errEl.style.display = 'block';
                    }
                    return;
                }
                
                const newCat = data.category;
                
                // Add to all selects
                const selectIds = ['instagramAddCategorySelect', 'edit_category_id', 'instagramCategorySelectFilter'];
                selectIds.forEach(id => {
                    const sel = document.getElementById(id);
                    if (sel) {
                        const opt = document.createElement('option');
                        opt.value = newCat.id;
                        opt.textContent = newCat.name;
                        sel.appendChild(opt);
                    }
                });
                
                // Select in current target dropdown
                const targetSel = document.getElementById(targetCategorySelectId);
                if (targetSel) {
                    targetSel.value = newCat.id;
                }
                
                // Append to category pills container
                const pillsContainer = document.getElementById('categoryPillsContainer');
                if (pillsContainer) {
                    const btn = document.createElement('button');
                    btn.type = 'button';
                    btn.className = 'cat-pill';
                    btn.setAttribute('data-cat-id', newCat.id);
                    btn.onclick = function() { setCategoryFilter(newCat.id, this); };
                    btn.innerHTML = `<span style="width:8px; height:8px; border-radius:50%; background:${newCat.color}; display:inline-block;"></span> ${newCat.name} <span class="cat-pill-count">0</span>`;
                    pillsContainer.appendChild(btn);
                }
                
                showToast('✓ "' + newCat.name + '" kategorisi oluşturuldu ve seçildi!');
                closeQuickCategoryModal();
            } catch (error) {
                if (errEl) {
                    errEl.textContent = 'Bir bağlantı hatası oluştu.';
                    errEl.style.display = 'block';
                }
            } finally {
                submitBtn.disabled = false;
                submitBtn.textContent = '✓ Kaydet & Seç';
            }
        }

        // ==========================================
        // TOAST NOTIFICATIONS
        // ==========================================
        function showToast(message) {
            let toast = document.getElementById('adminLiveToast');
            if (!toast) {
                toast = document.createElement('div');
                toast.id = 'adminLiveToast';
                toast.className = 'admin-toast';
                document.body.appendChild(toast);
            }
            toast.textContent = message;
            toast.style.display = 'flex';
            clearTimeout(window._toastTimeout);
            window._toastTimeout = setTimeout(() => {
                toast.style.display = 'none';
            }, 3500);
        }

        // Close modals on Escape key or clicking outside dialog
        window.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeEditInstagramModal();
                closeQuickCategoryModal();
            }
        });

        window.addEventListener('click', function(e) {
            if (e.target.classList.contains('modal-backdrop')) {
                closeEditInstagramModal();
                closeQuickCategoryModal();
            }
        });
    </script>
</body>
</html>
