<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevSecOps Ultimate Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=JetBrains+Mono:wght@400;700&family=Outfit:wght@400;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #00f2fe;
            --secondary: #4facfe;
            --accent: #7000ff;
            --success: #00ff88;
            --warning: #ffb800;
            --danger: #ff4b2b;
            --bg: #05070a;
            --card-bg: rgba(13, 17, 23, 0.8);
            --border: rgba(255, 255, 255, 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg);
            color: #fff;
            min-height: 100vh;
            overflow-x: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* 🌌 Animated Background Elements */
        .background-wrap {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
            background: radial-gradient(circle at 50% 50%, #1a1a2e 0%, #05070a 100%);
        }

        .orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(80px);
            opacity: 0.15;
            animation: move 20s infinite alternate;
        }

        .orb-1 { width: 400px; height: 400px; background: var(--primary); top: -100px; left: -100px; }
        .orb-2 { width: 500px; height: 500px; background: var(--accent); bottom: -150px; right: -100px; animation-duration: 25s; }

        @keyframes move {
            from { transform: translate(0, 0); }
            to { transform: translate(100px, 100px); }
        }

        /* 🛡️ Dashboard Container */
        .dashboard {
            width: 95%;
            max-width: 1100px;
            background: var(--card-bg);
            backdrop-filter: blur(20px);
            border: 1px solid var(--border);
            border-radius: 32px;
            padding: 3rem;
            box-shadow: 0 40px 100px rgba(0, 0, 0, 0.8);
            position: relative;
            z-index: 10;
            animation: slideUp 0.8s cubic-bezier(0.2, 0.8, 0.2, 1);
        }

        @keyframes slideUp {
            from { opacity: 0; transform: translateY(40px) scale(0.98); }
            to { opacity: 1; transform: translateY(0) scale(1); }
        }

        /* 📋 Header Section */
        header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 3rem;
            border-bottom: 1px solid var(--border);
            padding-bottom: 2rem;
        }

        .brand h1 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.5rem;
            font-weight: 800;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .brand p {
            color: #8b949e;
            font-size: 1rem;
            margin-top: 0.5rem;
        }

        .status-panel {
            text-align: right;
        }

        .live-tag {
            background: rgba(0, 255, 136, 0.1);
            color: var(--success);
            padding: 0.5rem 1.25rem;
            border-radius: 100px;
            font-weight: 700;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            border: 1px solid rgba(0, 255, 136, 0.2);
        }

        .pulse-dot {
            width: 8px;
            height: 8px;
            background: var(--success);
            border-radius: 50%;
            box-shadow: 0 0 10px var(--success);
            animation: pulse 1.5s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(0, 255, 136, 0.7); }
            70% { transform: scale(1); box-shadow: 0 0 0 6px rgba(0, 255, 136, 0); }
            100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(0, 255, 136, 0); }
        }

        /* 📊 Metrics Grid */
        .metrics-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 1.5rem;
            margin-bottom: 3rem;
        }

        .metric-card {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid var(--border);
            border-radius: 20px;
            padding: 1.5rem;
            transition: all 0.3s ease;
        }

        .metric-card:hover {
            background: rgba(255, 255, 255, 0.05);
            transform: translateY(-5px);
            border-color: var(--primary);
        }

        .metric-card i {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--primary);
        }

        .metric-card h3 {
            font-size: 0.875rem;
            color: #8b949e;
            margin-bottom: 0.5rem;
        }

        .metric-card .value {
            font-family: 'Outfit', sans-serif;
            font-size: 1.75rem;
            font-weight: 700;
        }

        /* 🛡️ Security Section */
        .sec-box {
            background: rgba(112, 0, 255, 0.05);
            border: 1px solid rgba(112, 0, 255, 0.2);
            border-radius: 24px;
            padding: 2rem;
            display: flex;
            align-items: center;
            gap: 2rem;
        }

        .shield-icon {
            font-size: 4rem;
            color: var(--accent);
            filter: drop-shadow(0 0 15px rgba(112, 0, 255, 0.5));
        }

        .sec-content { flex: 1; }
        .sec-content h2 { margin-bottom: 1rem; font-family: 'Outfit', sans-serif; }

        .progress-bar {
            height: 10px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 5px;
            overflow: hidden;
            margin-bottom: 0.5rem;
        }

        .progress-fill {
            height: 100%;
            background: linear-gradient(to right, var(--primary), var(--success));
            width: 94%;
            border-radius: 5px;
            box-shadow: 0 0 10px var(--primary);
        }

        .sec-stats {
            display: flex;
            gap: 2rem;
            font-size: 0.875rem;
            color: #8b949e;
        }

        /* 💻 Code Section */
        .code-display {
            margin-top: 3rem;
            background: #010409;
            border-radius: 16px;
            padding: 1.5rem;
            border: 1px solid var(--border);
            font-family: 'JetBrains Mono', monospace;
            font-size: 0.9rem;
            position: relative;
        }

        .code-display::before {
            content: 'TERMINAL';
            position: absolute;
            top: -12px;
            left: 20px;
            background: var(--bg);
            padding: 0 10px;
            font-size: 0.7rem;
            color: #484f58;
            letter-spacing: 1px;
        }

        .text-cyan { color: var(--primary); }
        .text-green { color: var(--success); }
        .text-purple { color: var(--accent); }

        /* 🚀 Footer Action */
        .footer {
            margin-top: 3rem;
            display: flex;
            justify-content: center;
        }

        .deploy-btn {
            background: linear-gradient(45deg, var(--accent), var(--secondary));
            color: white;
            padding: 1rem 3rem;
            border-radius: 100px;
            text-decoration: none;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 1rem;
            transition: all 0.3s ease;
            box-shadow: 0 15px 30px rgba(112, 0, 255, 0.3);
        }

        .deploy-btn:hover {
            transform: scale(1.05);
            box-shadow: 0 20px 40px rgba(112, 0, 255, 0.5);
        }

        @media (max-width: 768px) {
            .dashboard { padding: 1.5rem; }
            header { flex-direction: column; gap: 1.5rem; text-align: center; align-items: center; }
            .status-panel { text-align: center; }
            .sec-box { flex-direction: column; text-align: center; }
        }
    </style>
</head>
<body>
    <div class="background-wrap">
        <div class="orb orb-1"></div>
        <div class="orb orb-2"></div>
    </div>

    <div class="dashboard">
        <header>
            <div class="brand">
                <h1><i class="fas fa-microchip"></i> DevSecOps  Shield -imran</h1>
                <p>Enterprise Pipeline Monitoring & Intelligence</p>
            </div>
            <div class="status-panel">
                <div class="live-tag">
                    <span class="pulse-dot"></span>
                    System Production
                </div>
                <p style="font-size: 0.75rem; color: #484f58; margin-top: 0.5rem;">Uptime: 99.98%</p>
            </div>
        </header>

        <div class="metrics-grid">
            <div class="metric-card">
                <i class="fas fa-bolt"></i>
                <h3>Build Speed</h3>
                <div class="value">42s</div>
            </div>
            <div class="metric-card">
                <i class="fas fa-shield-halved"></i>
                <h3>Trivy Scans</h3>
                <div class="value text-green">Passed</div>
            </div>
            <div class="metric-card">
                <i class="fas fa-bug"></i>
                <h3>Sonar Issues</h3>
                <div class="value">0</div>
            </div>
            <div class="metric-card">
                <i class="fas fa-box-open"></i>
                <h3>Container</h3>
                <div class="value">v2.0</div>
            </div>
        </div>

        <div class="sec-box">
            <div class="shield-icon">
                <i class="fas fa-shield-heart"></i>
            </div>
            <div class="sec-content">
                <h2>Security Health Score</h2>
                <div class="progress-bar">
                    <div class="progress-fill"></div>
                </div>
                <div class="sec-stats">
                    <span><i class="fas fa-check-circle text-green"></i> 0 Vulnerabilities</span>
                    <span><i class="fas fa-lock text-cyan"></i> AES-256 Encryption</span>
                </div>
            </div>
        </div>

        <div class="code-display">
            <div><span class="text-purple">$</span> git push origin main</div>
            <div><span class="text-cyan">Scanning project:</span> sonar-scanner -Dsonar.projectKey=my-php-app</div>
            <div><span class="text-green">✔</span> SonarQube Quality Gate Passed</div>
            <div><span class="text-green">✔</span> Trivy Security Scan: 0 Vulnerabilities</div>
            <div><span class="text-green">✔</span> Deployment Successful</div>
            <div style="margin-top: 10px; color: #8b949e;">
                <?php echo ">>> " . "Hello from CI/CD Docker App High-Performance Unit 🚀"; ?>
            </div>
        </div>

        <div class="footer">
            <a href="https://github.com/Imranbashir340/DevSecOps-pipline" class="deploy-btn" target="_blank">
                <i class="fab fa-github"></i> View Repository
            </a>
        </div>
    </div>

    <script>
        // Optional: Add simple mouse movement effect for card tilt
        const card = document.querySelector('.dashboard');
        document.addEventListener('mousemove', (e) => {
            const xAxis = (window.innerWidth / 2 - e.pageX) / 45;
            const yAxis = (window.innerHeight / 2 - e.pageY) / 45;
            card.style.transform = `rotateY(${xAxis}deg) rotateX(${yAxis}deg)`;
        });
        
        document.addEventListener('mouseleave', () => {
            card.style.transform = `rotateY(0deg) rotateX(0deg)`;
            card.style.transition = "all 0.5s ease";
        });

        document.addEventListener('mouseenter', () => {
            card.style.transition = "none";
        });
    </script>
</body>
</html>
