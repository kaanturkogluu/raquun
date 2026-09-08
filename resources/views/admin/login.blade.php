<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yönetim Paneli Girişi — Raquun</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: #f9fafb;
            color: #111827;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .login-card {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 14px;
            width: 100%;
            max-width: 420px;
            padding: 36px 32px;
            box-shadow: 0 4px 12px -2px rgba(0,0,0,0.05);
        }
        .brand {
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 800;
            font-size: 1.35rem;
            color: #111827;
            margin-bottom: 6px;
        }
        .subtitle {
            font-size: 0.88rem;
            color: #6b7280;
            margin-bottom: 24px;
        }
        .form-group {
            margin-bottom: 18px;
        }
        label {
            display: block;
            font-size: 0.86rem;
            font-weight: 600;
            margin-bottom: 6px;
            color: #374151;
        }
        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 11px 14px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            font-size: 0.93rem;
            font-family: inherit;
        }
        input:focus {
            outline: none;
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37,99,235,0.12);
        }
        .btn-submit {
            width: 100%;
            padding: 12px;
            background: #111827;
            color: #ffffff;
            border: none;
            border-radius: 8px;
            font-size: 0.95rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.15s;
        }
        .btn-submit:hover {
            background: #000000;
        }
        .alert {
            padding: 12px;
            border-radius: 8px;
            font-size: 0.86rem;
            margin-bottom: 18px;
        }
        .alert-error {
            background: #fee2e2;
            color: #991b1b;
            border: 1px solid #fca5a5;
        }
        .alert-info {
            background: #eff6ff;
            color: #1e40af;
            border: 1px solid #bfdbfe;
        }
        .user-hints {
            margin-top: 24px;
            padding-top: 18px;
            border-top: 1px solid #f3f4f6;
            font-size: 0.82rem;
            color: #6b7280;
            line-height: 1.5;
        }
        .back-link {
            display: block;
            text-align: center;
            margin-top: 18px;
            font-size: 0.86rem;
            color: #4b5563;
            text-decoration: none;
        }
        .back-link:hover {
            color: #111827;
        }
    </style>
</head>
<body>
    <div class="login-card">
        <div class="brand">
            <img src="{{ asset('images/raquun-logo.jpg') }}" alt="Raquun" style="width:36px; height:36px; border-radius:8px; border:1px solid #e5e7eb; object-fit:cover;">
            <span>Raquun Panel</span>
        </div>
        <div class="subtitle">İş Yönetimi, Hedef Müşteri & Instagram Takibi</div>

        @if (session('info'))
            <div class="alert alert-info">{{ session('info') }}</div>
        @endif

        @if ($errors->any())
            <div class="alert alert-error">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('admin.login.submit') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Yetkili E-Posta</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
            </div>

            <div class="form-group">
                <label for="password">Şifre</label>
                <input type="password" id="password" name="password" required autocomplete="current-password">
            </div>

            <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom: 20px; font-size: 0.85rem;">
                <label style="display:flex; align-items:center; gap:6px; cursor:pointer; font-weight: normal; margin-bottom:0;">
                    <input type="checkbox" name="remember" value="1" checked> Beni Hatırla
                </label>
            </div>

            <button type="submit" class="btn-submit">
                Panele Giriş Yap →
            </button>
        </form>

        <a href="{{ url('/') }}" class="back-link">← Anasayfaya Dön</a>
    </div>
</body>
</html>
