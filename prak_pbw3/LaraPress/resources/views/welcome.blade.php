<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang di LaraPress</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;600;700&family=Plus+Jakarta+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-color: #0b0f19;
            --card-bg: rgba(18, 26, 43, 0.7);
            --border-color: #1e293b;
            --accent-cyan: #38bdf8;
            --accent-glow: rgba(56, 189, 248, 0.15);
            --text-main: #f1f5f9;
            --text-muted: #94a3b8;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-main);
            font-family: 'Plus Jakarta Sans', sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: 
                radial-gradient(circle at 50% 0%, rgba(56, 189, 248, 0.08) 0%, transparent 50%),
                linear-gradient(to right, rgba(255, 255, 255, 0.02) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(255, 255, 255, 0.02) 1px, transparent 1px);
            background-size: 100% 100%, 40px 40px, 40px 40px;
        }

        .container {
            width: 90%;
            max-width: 650px;
            background: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: 16px;
            padding: 40px;
            backdrop-filter: blur(12px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5), 0 0 20px var(--accent-glow);
            position: relative;
            overflow: hidden;
        }

        .container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--accent-cyan), transparent);
        }

        .badge {
            display: inline-block;
            font-family: 'JetBrains Mono', monospace;
            font-size: 0.75rem;
            color: var(--accent-cyan);
            background: rgba(56, 189, 248, 0.1);
            border: 1px solid rgba(56, 189, 248, 0.2);
            padding: 4px 12px;
            border-radius: 20px;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        h1 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 12px;
            letter-spacing: -0.5px;
            background: linear-gradient(135deg, #ffffff 0%, #cbd5e1 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        p {
            color: var(--text-muted);
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 32px;
        }

        nav {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-family: 'JetBrains Mono', monospace;
            font-size: 0.875rem;
            padding: 12px 20px;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.2s ease;
            font-weight: 600;
        }

        .btn-primary {
            background-color: var(--accent-cyan);
            color: #090d16;
            box-shadow: 0 4px 14px rgba(56, 189, 248, 0.3);
        }

        .btn-primary:hover {
            background-color: #7dd3fc;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(56, 189, 248, 0.4);
        }

        .btn-secondary {
            background-color: rgba(30, 41, 59, 0.6);
            color: var(--text-main);
            border: 1px solid var(--border-color);
        }

        .btn-secondary:hover {
            background-color: rgba(51, 65, 85, 0.8);
            border-color: #475569;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
    <div class="container">
        <span class="badge">// LARAPRESS CORE V1.0</span>
        <h1>Selamat Datang di LaraPress</h1>
        <p>Ini adalah halaman utama dari aplikasi blog berbasis Laravel. Dikembangkan dengan arsitektur modern dan antarmuka yang siap pakai.</p>
        
        <nav>
            <a href="/tentang-kami" class="btn btn-primary">Tentang Kami &rarr;</a>
            <a href="/kontak" class="btn btn-secondary">Hubungi Kami</a>
        </nav>
    </div>
</body>
</html>