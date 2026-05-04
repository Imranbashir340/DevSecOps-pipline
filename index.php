<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>DevSecOps Dashboard</title>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
:root{
    --bg:#05070a;
    --card:#0d1117;
    --border:rgba(255,255,255,0.08);
    --text:#e6edf3;
    --muted:#8b949e;
    --primary:#00f2fe;
    --accent:#7c3aed;
    --success:#00ff88;
    --danger:#ff4b2b;
    --warning:#ffb800;
}

*{margin:0;padding:0;box-sizing:border-box}

body{
    font-family:Inter,sans-serif;
    background:var(--bg);
    color:var(--text);
    display:flex;
    justify-content:center;
    padding:40px;
}

/* Container */
.dashboard{width:100%;max-width:1100px}

/* Header */
.header{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:30px;
}

.title h1{
    font-size:28px;
    font-weight:700;
    background:linear-gradient(90deg,var(--primary),var(--accent));
    -webkit-background-clip:text;
    -webkit-text-fill-color:transparent;
}

.title p{color:var(--muted);font-size:13px;margin-top:4px}

.badge{
    background:rgba(0,255,136,0.08);
    border:1px solid rgba(0,255,136,0.2);
    color:var(--success);
    padding:6px 14px;
    border-radius:20px;
    font-size:12px;
}

/* GRID */
.grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
    gap:16px;
    margin-bottom:25px;
}

.card{
    background:var(--card);
    border:1px solid var(--border);
    border-radius:16px;
    padding:18px;
    transition:0.2s;
}

.card:hover{
    transform:translateY(-4px);
    border-color:var(--primary);
}

.card i{color:var(--primary);margin-bottom:10px}

.card h3{
    font-size:13px;
    color:var(--muted);
    margin-bottom:6px;
}

.card .value{
    font-size:22px;
    font-weight:700;
}

.green{color:var(--success)}

/* SECURITY */
.security{
    background:linear-gradient(145deg,rgba(124,58,237,0.1),transparent);
    border:1px solid rgba(124,58,237,0.2);
    padding:20px;
    border-radius:16px;
    margin-bottom:25px;
}

.progress{
    width:100%;
    height:8px;
    background:#1f2937;
    border-radius:10px;
    overflow:hidden;
    margin-top:10px;
}

.fill{
    height:100%;
    width:78%;
    background:linear-gradient(90deg,var(--primary),var(--success));
}

/* TERMINAL */
.terminal{
    background:#0a0d12;
    border:1px solid var(--border);
    border-radius:14px;
    padding:16px;
    font-family:monospace;
    font-size:13px;
    margin-bottom:25px;
}

.line{margin:6px 0}
.green{color:var(--success)}
.cyan{color:var(--primary)}
.purple{color:var(--accent)}
.red{color:var(--danger)}
.yellow{color:var(--warning)}

/* BUTTON */
.btn{
    display:inline-flex;
    gap:10px;
    align-items:center;
    background:linear-gradient(90deg,var(--accent),var(--primary));
    color:white;
    padding:12px 24px;
    border-radius:30px;
    text-decoration:none;
    font-weight:600;
    transition:0.2s;
}

.btn:hover{transform:scale(1.05)}

.footer{text-align:center}
</style>
</head>

<body>

<div class="dashboard">

    <!-- HEADER -->
    <div class="header">
        <div class="title">
            <h1><i class="fas fa-shield-halved"></i> DevSecOps Dashboard</h1>
            <p>CI/CD • SonarQube • Trivy • Docker Security Pipeline</p>
        </div>

        <div class="badge">LIVE SYSTEM</div>
    </div>

    <!-- METRICS -->
    <div class="grid">

        <div class="card">
            <i class="fas fa-bolt"></i>
            <h3>Build Time</h3>
            <div class="value">42s</div>
        </div>

        <div class="card">
            <i class="fas fa-shield"></i>
            <h3>Security Scan</h3>
            <div class="value green">Clean</div>
        </div>

        <div class="card">
            <i class="fas fa-bug"></i>
            <h3>Vulnerabilities</h3>
            <div class="value" style="color:var(--danger)">3</div>
            <p style="font-size:11px;color:var(--muted);margin-top:6px">
                1 High • 1 Medium • 1 Low
            </p>
        </div>

        <div class="card">
            <i class="fas fa-box"></i>
            <h3>Image Version</h3>
            <div class="value">v2.1</div>
        </div>

    </div>

    <!-- SECURITY -->
    <div class="security">

        <h3>Security Score Overview</h3>

        <div class="progress"></div>

        <div style="display:flex;justify-content:space-between;margin-top:10px;font-size:12px;color:var(--muted)">
            <span>Score: 78/100</span>
            <span>
                <span style="color:var(--danger)">1 High</span> •
                <span style="color:var(--warning)">2 Medium</span> •
                <span style="color:var(--success)">5 Low</span>
            </span>
        </div>

    </div>

    <!-- TERMINAL -->
    <div class="terminal">

        <div class="line"><span class="purple">$</span> git push origin main</div>

        <div class="line cyan">[SONARQUBE] Analysis started...</div>

        <div class="line red">✖ SQL Injection found in auth.php (HIGH)</div>
        <div class="line yellow">⚠ XSS vulnerability in dashboard.js (MEDIUM)</div>
        <div class="line yellow">⚠ Outdated dependency lodash@4.17 (MEDIUM)</div>

        <div class="line green">✔ Trivy container scan passed</div>
        <div class="line green">✔ Docker image has no critical CVEs</div>

        <div class="line green">✔ Deployment successful</div>

    </div>
    <div class="security">

    <h3>SonarQube Issues Report</h3>

    <div style="margin-top:12px;font-family:monospace;font-size:13px">

        <div class="line red">
            ❌ [CRITICAL] SQL Injection detected → auth.php:45
        </div>

        <div class="line red">
            ❌ [CRITICAL] Hardcoded credentials found → config.php:12
        </div>

        <div class="line yellow">
            ⚠ [MAJOR] XSS vulnerability → dashboard.js:88
        </div>

        <div class="line yellow">
            ⚠ [MAJOR] Unvalidated input → api/user.php:34
        </div>

        <div class="line yellow">
            ⚠ [MINOR] Unused variable detected → utils.php:21
        </div>

        <div class="line green">
            ✔ Code Smells: 2 fixed
        </div>

        <div class="line cyan">
            ℹ Maintainability Rating: B
        </div>

    </div>

</div>

    <!-- BUTTON -->
    <div class="footer">
        <a class="btn" href="#">
            <i class="fab fa-github"></i>
            View Repository
        </a>
    </div>

</div>

</body>
</html>
