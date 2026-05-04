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
.dashboard{
    width:100%;
    max-width:1100px;
}

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

/* Grid */
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

.card i{
    color:var(--primary);
    margin-bottom:10px;
}

.card h3{
    font-size:13px;
    color:var(--muted);
    margin-bottom:6px;
}

.card .value{
    font-size:22px;
    font-weight:700;
}

/* Security */
.security{
    background:linear-gradient(145deg,rgba(124,58,237,0.1),transparent);
    border:1px solid rgba(124,58,237,0.2);
    padding:20px;
    border-radius:16px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:25px;
}

.progress{
    width:100%;
    height:8px;
    background:#1f2937;
    border-radius:10px;
    margin-top:10px;
    overflow:hidden;
}

.fill{
    width:92%;
    height:100%;
    background:linear-gradient(90deg,var(--primary),var(--success));
}

/* Terminal */
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

/* Button */
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

.btn:hover{
    transform:scale(1.05);
}

.footer{
    text-align:center;
}
</style>
</head>

<body>

<div class="dashboard">

    <!-- Header -->
    <div class="header">
        <div class="title">
            <h1><i class="fas fa-shield-halved"></i> DevSecOps Dashboard</h1>
            <p>CI/CD • SonarQube • Docker • Security Pipeline</p>
        </div>

        <div class="badge">LIVE SYSTEM</div>
    </div>

    <!-- Metrics -->
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
            <div class="value">0</div>
        </div>

        <div class="card">
            <i class="fas fa-box"></i>
            <h3>Image Version</h3>
            <div class="value">v2.1</div>
        </div>
    </div>

    <!-- Security -->
    <div class="security">
        <div>
            <h3>Security Score</h3>
            <div class="progress"><div class="fill"></div></div>
        </div>
        <div style="font-size:22px;font-weight:700;color:var(--success)">92%</div>
    </div>

    <!-- Terminal -->
    <div class="terminal">
        <div class="line"><span class="purple">$</span> git push origin main</div>
        <div class="line cyan">Running SonarQube scan...</div>
        <div class="line green">✔ Quality Gate Passed</div>
        <div class="line green">✔ Trivy Scan Clean</div>
        <div class="line green">✔ Deployment Successful</div>
    </div>

    <!-- Button -->
    <div class="footer">
        <a class="btn" href="#">
            <i class="fab fa-github"></i>
            View Repo
        </a>
    </div>

</div>

</body>
</html>
