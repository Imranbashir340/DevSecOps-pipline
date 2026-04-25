<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevSecOps Pipeline - Hero Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&family=Outfit:wght@400;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #6366f1;
            --secondary: #a855f7;
            --accent: #ec4899;
            --bg: #0f172a;
            --card-bg: rgba(30, 41, 59, 0.7);
            --text: #f8fafc;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg);
            color: var(--text);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            background: radial-gradient(circle at top left, #1e1b4b, transparent),
                        radial-gradient(circle at bottom right, #312e81, transparent);
        }

        .container {
            position: relative;
            z-index: 10;
            width: 100%;
            max-width: 800px;
            padding: 2rem;
            text-align: center;
        }

        .glass-card {
            background: var(--card-bg);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 24px;
            padding: 4rem 2rem;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
            animation: fadeInUp 1s ease-out;
        }

        .status-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: rgba(34, 197, 94, 0.1);
            color: #4ade80;
            padding: 0.5rem 1rem;
            border-radius: 9999px;
            font-size: 0.875rem;
            font-weight: 600;
            margin-bottom: 2rem;
            border: 1px solid rgba(74, 222, 128, 0.2);
        }

        .pulse {
            width: 8px;
            height: 8px;
            background: #4ade80;
            border-radius: 50%;
            display: inline-block;
            box-shadow: 0 0 0 rgba(74, 222, 128, 0.4);
            animation: pulse 2s infinite;
        }

        h1 {
            font-family: 'Outfit', sans-serif;
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            background: linear-gradient(to right, var(--primary), var(--secondary), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            letter-spacing: -0.02em;
        }

        p {
            font-size: 1.25rem;
            color: #94a3b8;
            line-height: 1.6;
            margin-bottom: 2.5rem;
        }

        .version-box {
            font-family: 'Inter', monospace;
            background: rgba(0, 0, 0, 0.3);
            padding: 1rem 2rem;
            border-radius: 12px;
            display: inline-block;
            border-left: 4px solid var(--primary);
            font-weight: 600;
            color: #e2e8f0;
        }

        .decorative-blob {
            position: absolute;
            width: 300px;
            height: 300px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            filter: blur(100px);
            opacity: 0.2;
            z-index: -1;
            border-radius: 50%;
        }

        .blob-1 { top: -10%; left: -10%; }
        .blob-2 { bottom: -10%; right: -10%; }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(74, 222, 128, 0.7); }
            70% { box-shadow: 0 0 0 10px rgba(74, 222, 128, 0); }
            100% { box-shadow: 0 0 0 0 rgba(74, 222, 128, 0); }
        }

        .btn {
            display: inline-block;
            margin-top: 3rem;
            padding: 1rem 2.5rem;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            color: white;
            text-decoration: none;
            border-radius: 12px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 10px 15px -3px rgba(99, 102, 241, 0.3);
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 20px 25px -5px rgba(99, 102, 241, 0.4);
        }

        @media (max-width: 640px) {
            h1 { font-size: 2.5rem; }
            .container { padding: 1rem; }
        }
    </style>
</head>
<body>
    <div class="decorative-blob blob-1"></div>
    <div class="decorative-blob blob-2"></div>

    <div class="container">
        <div class="glass-card">
            <div class="status-badge">
                <span class="pulse"></span>
                Deployment Live
            </div>
            <h1>DevSecOps Pipeline</h1>
            <p>A secure, automated CI/CD environment built with Docker, PHP, and GitHub Actions. Integrated with SonarQube and Trivy for ultimate security.</p>
            
            <div class="version-box">
                <?php echo "🚀 Hello from CI/CD Docker App v2.0"; ?>
            </div>

            <div>
                <a href="#" class="btn">Explore Pipeline</a>
            </div>
        </div>
    </div>
</body>
</html>
