:root {
    --bg: #0a0d12;
    --surface: #111620;
    --surface2: #1a2030;
    --border: #232c3d;
    --accent: #f0a500;
    --accent2: #e05c2a;
    --text: #e8eaf0;
    --muted: #6b7a99;
    --success: #2ecc71;
    --danger: #e74c3c;
    --info: #3498db;
    --sidebar-w: 260px;
  }

  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  body {
    font-family: 'DM Sans', sans-serif;
    background: var(--bg);
    color: var(--text);
    min-height: 100vh;
    overflow-x: hidden;
  }

  /* ── LANDING / LOGIN SCREEN ── */
  #landing {
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background:
      radial-gradient(ellipse 80% 60% at 50% 0%, rgba(240,165,0,.12) 0%, transparent 70%),
      radial-gradient(ellipse 50% 40% at 80% 80%, rgba(224,92,42,.08) 0%, transparent 60%),
      var(--bg);
    position: relative;
    overflow: hidden;
  }

  #landing::before {
    content: '';
    position: absolute;
    inset: 0;
    background-image:
      linear-gradient(var(--border) 1px, transparent 1px),
      linear-gradient(90deg, var(--border) 1px, transparent 1px);
    background-size: 60px 60px;
    opacity: .25;
  }

  .landing-inner {
    position: relative;
    z-index: 1;
    width: min(420px, 90vw);
  }

  .brand-mark {
    text-align: center;
    margin-bottom: 2rem;
  }

  .brand-icon {
    width: 68px; height: 68px;
    background: linear-gradient(135deg, var(--accent), var(--accent2));
    border-radius: 16px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1rem;
    box-shadow: 0 0 40px rgba(240,165,0,.3);
  }

  .brand-icon svg { width: 36px; height: 36px; fill: #0a0d12; }

  .brand-name {
    font-family: 'Bebas Neue', sans-serif;
    font-size: 2.8rem;
    letter-spacing: .1em;
    background: linear-gradient(90deg, var(--accent), var(--accent2));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    line-height: 1;
  }

  .brand-sub {
    color: var(--muted);
    font-size: .85rem;
    letter-spacing: .15em;
    text-transform: uppercase;
    margin-top: .3rem;
  }

  .login-card {
    background: var(--surface);
    border: 1px solid var(--border);
    border-radius: 20px;
    padding: 2.2rem 2.4rem;
    backdrop-filter: blur(10px);
  }

  .role-tabs {
    display: flex;
    background: var(--bg);
    border-radius: 10px;
    padding: 4px;
    margin-bottom: 1.8rem;
    border: 1px solid var(--border);
  }

  .role-tab {
    flex: 1;
    padding: .55rem;
    border: none;
    background: transparent;
    color: var(--muted);
    font-family: 'DM Sans', sans-serif;
    font-size: .85rem;
    font-weight: 500;
    border-radius: 8px;
    cursor: pointer;
    transition: all .2s;
  }

  .role-tab.active {
    background: linear-gradient(135deg, var(--accent), var(--accent2));
    color: #0a0d12;
    font-weight: 600;
  }

  .form-group { margin-bottom: 1.2rem; }

  .form-group label {
    display: block;
    font-size: .8rem;
    font-weight: 600;
    color: var(--muted);
    text-transform: uppercase;
    letter-spacing: .08em;
    margin-bottom: .5rem;
  }

  .form-group input, .form-group select {
    width: 100%;
    background: var(--bg);
    border: 1px solid var(--border);
    border-radius: 10px;
    padding: .75rem 1rem;
    color: var(--text);
    font-family: 'DM Sans', sans-serif;
    font-size: .95rem;
    transition: border-color .2s;
    outline: none;
  }

  .form-group input:focus, .form-group select:focus {
    border-color: var(--accent);
    box-shadow: 0 0 0 3px rgba(240,165,0,.1);
  }

  .btn-login {
    width: 100%;
    padding: .85rem;
    background: linear-gradient(135deg, var(--accent), var(--accent2));
    border: none;
    border-radius: 10px;
    color: #0a0d12;
    font-family: 'DM Sans', sans-serif;
    font-size: 1rem;
    font-weight: 700;
    cursor: pointer;
    letter-spacing: .05em;
    margin-top: .5rem;
    transition: opacity .2s, transform .15s;
  }

  .btn-login:hover { opacity: .9; transform: translateY(-1px); }
  .btn-login:active { transform: translateY(0); }

  .demo-hint {
    text-align: center;
    color: var(--muted);
    font-size: .78rem;
    margin-top: 1.2rem;
  }

  /* ── MAIN APP LAYOUT ── */
  #app { display: none; min-height: 100vh; }

  .app-shell {
    display: flex;
    min-height: 100vh;
  }

  /* ── SIDEBAR ── */
  .sidebar {
    width: var(--sidebar-w);
    background: var(--surface);
    border-right: 1px solid var(--border);
    display: flex;
    flex-direction: column;
    position: fixed;
    top: 0; left: 0; bottom: 0;
    z-index: 100;
    transition: transform .3s;
  }

  .sidebar-logo {
    padding: 1.5rem 1.4rem 1rem;
    border-bottom: 1px solid var(--border);
  }

  .sidebar-logo .brand-name {
    font-size: 1.6rem;
  }

  .sidebar-logo .brand-sub {
    font-size: .65rem;
  }

  .sidebar-user {
    padding: 1rem 1.4rem;
    display: flex;
    align-items: center;
    gap: .8rem;
    border-bottom: 1px solid var(--border);
  }

  .user-avatar {
    width: 38px; height: 38px;
    background: linear-gradient(135deg, var(--accent), var(--accent2));
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: 'Bebas Neue', sans-serif;
    font-size: 1.1rem;
    color: #0a0d12;
    flex-shrink: 0;
  }

  .user-info .name {
    font-size: .9rem;
    font-weight: 600;
    color: var(--text);
  }

  .user-info .role-badge {
    display: inline-block;
    font-size: .65rem;
    font-weight: 600;
    letter-spacing: .08em;
    text-transform: uppercase;
    padding: .15rem .5rem;
    border-radius: 4px;
    background: rgba(240,165,0,.15);
    color: var(--accent);
    margin-top: .15rem;
  }

  .nav-section {
    padding: .8rem .8rem 0;
  }

  .nav-section-label {
    font-size: .65rem;
    font-weight: 600;
    letter-spacing: .12em;
    text-transform: uppercase;
    color: var(--muted);
    padding: .3rem .6rem;
    margin-bottom: .3rem;
  }

  .nav-item {
    display: flex;
    align-items: center;
    gap: .8rem;
    padding: .65rem .8rem;
    border-radius: 10px;
    cursor: pointer;
    color: var(--muted);
    font-size: .9rem;
    font-weight: 500;
    margin-bottom: .15rem;
    transition: all .2s;
    text-decoration: none;
  }

  .nav-item:hover { background: var(--surface2); color: var(--text); }

  .nav-item.active {
    background: rgba(240,165,0,.12);
    color: var(--accent);
  }

  .nav-item svg { width: 18px; height: 18px; flex-shrink: 0; }

  .sidebar-footer {
    margin-top: auto;
    padding: 1rem .8rem;
    border-top: 1px solid var(--border);
  }

  .btn-logout {
    width: 100%;
    display: flex;
    align-items: center;
    gap: .8rem;
    padding: .65rem .8rem;
    background: transparent;
    border: 1px solid var(--border);
    border-radius: 10px;
    color: var(--danger);
    font-family: 'DM Sans', sans-serif;
    font-size: .9rem;
    font-weight: 500;
    cursor: pointer;
    transition: all .2s;
  }

  .btn-logout:hover { background: rgba(231,76,60,.08); border-color: var(--danger); }
  .btn-logout svg { width: 18px; height: 18px; }

  /* ── MAIN CONTENT ── */
  .main-content {
    margin-left: var(--sidebar-w);
    flex: 1;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
  }

  .topbar {
    height: 64px;
    background: var(--surface);
    border-bottom: 1px solid var(--border);
    display: flex;
    align-items: center;
    padding: 0 2rem;
    position: sticky;
    top: 0;
    z-index: 50;
    gap: 1rem;
  }

  .page-title {
    font-family: 'Bebas Neue', sans-serif;
    font-size: 1.6rem;
    letter-spacing: .08em;
    flex: 1;
  }

  .topbar-actions { display: flex; align-items: center; gap: .8rem; }

  .hamburger {
    display: none;
    background: none;
    border: none;
    color: var(--text);
    cursor: pointer;
    padding: .3rem;
  }

  .page { display: none; padding: 2rem; }
  .page.active { display: block; animation: fadeIn .3s ease; }

  @keyframes fadeIn { from { opacity:0; transform:translateY(8px); } to { opacity:1; transform:translateY(0); } }

  /* ── DASHBOARD CARDS ── */
  .stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1.2rem;
    margin-bottom: 2rem;
  }

  .stat-card {
    background: var(--surface);
    border: 1px solid var(--border);
    border-radius: 16px;
    padding: 1.4rem;
    position: relative;
    overflow: hidden;
    transition: transform .2s, box-shadow .2s;
  }

  .stat-card:hover { transform: translateY(-2px); box-shadow: 0 8px 24px rgba(0,0,0,.3); }

  .stat-card::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 3px;
  }

  .stat-card.orange::before { background: linear-gradient(90deg, var(--accent), var(--accent2)); }
  .stat-card.green::before { background: var(--success); }
  .stat-card.blue::before { background: var(--info); }
  .stat-card.red::before { background: var(--danger); }

  .stat-icon {
    width: 44px; height: 44px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1rem;
  }

  .stat-icon.orange { background: rgba(240,165,0,.15); color: var(--accent); }
  .stat-icon.green { background: rgba(46,204,113,.15); color: var(--success); }
  .stat-icon.blue { background: rgba(52,152,219,.15); color: var(--info); }
  .stat-icon.red { background: rgba(231,76,60,.15); color: var(--danger); }
  .stat-icon svg { width: 22px; height: 22px; }

  .stat-value {
    font-family: 'Bebas Neue', sans-serif;
    font-size: 2.2rem;
    letter-spacing: .05em;
    line-height: 1;
  }

  .stat-label {
    color: var(--muted);
    font-size: .8rem;
    font-weight: 500;
    margin-top: .3rem;
    text-transform: uppercase;
    letter-spacing: .06em;
  }

  .stat-change {
    font-size: .78rem;
    font-weight: 600;
    margin-top: .5rem;
  }

  .stat-change.up { color: var(--success); }
  .stat-change.down { color: var(--danger); }

  /* ── CONTENT GRID ── */
  .content-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1.5rem;
  }

  @media (max-width: 900px) { .content-grid { grid-template-columns: 1fr; } }

  .card {
    background: var(--surface);
    border: 1px solid var(--border);
    border-radius: 16px;
    overflow: hidden;
  }

  .card-header {
    padding: 1.2rem 1.4rem;
    border-bottom: 1px solid var(--border);
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .card-title {
    font-size: .95rem;
    font-weight: 600;
    letter-spacing: .02em;
  }

  .card-body { padding: 1.4rem; }

  /* ── TABLE ── */
  .data-table {
    width: 100%;
    border-collapse: collapse;
    font-size: .875rem;
  }

  .data-table th {
    text-align: left;
    padding: .7rem 1rem;
    font-size: .7rem;
    font-weight: 600;
    letter-spacing: .1em;
    text-transform: uppercase;
    color: var(--muted);
    border-bottom: 1px solid var(--border);
  }

  .data-table td {
    padding: .85rem 1rem;
    border-bottom: 1px solid rgba(35,44,61,.5);
    color: var(--text);
  }

  .data-table tr:last-child td { border-bottom: none; }
  .data-table tr:hover td { background: rgba(255,255,255,.02); }

  /* ── BADGES ── */
  .badge {
    display: inline-flex;
    align-items: center;
    padding: .25rem .65rem;
    border-radius: 6px;
    font-size: .72rem;
    font-weight: 600;
    letter-spacing: .04em;
    text-transform: uppercase;
  }

  .badge-success { background: rgba(46,204,113,.15); color: var(--success); }
  .badge-warning { background: rgba(240,165,0,.15); color: var(--accent); }
  .badge-danger  { background: rgba(231,76,60,.15);  color: var(--danger);  }
  .badge-info    { background: rgba(52,152,219,.15);  color: var(--info);    }

  /* ── CHART BAR (pure CSS) ── */
  .bar-chart { display: flex; flex-direction: column; gap: .8rem; }

  .bar-row { display: flex; align-items: center; gap: .8rem; }
  .bar-label { width: 60px; font-size: .78rem; color: var(--muted); text-align: right; flex-shrink: 0; }
  .bar-track { flex: 1; height: 10px; background: var(--surface2); border-radius: 5px; overflow: hidden; }
  .bar-fill { height: 100%; border-radius: 5px; transition: width 1s ease; }
  .bar-val { font-size: .78rem; font-family: 'JetBrains Mono', monospace; color: var(--muted); width: 42px; }

  /* ── FORM STYLES (panels) ── */
  .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-bottom: 1rem; }
  @media (max-width:600px) { .form-row { grid-template-columns: 1fr; } }

  .field label {
    display: block;
    font-size: .75rem;
    font-weight: 600;
    color: var(--muted);
    text-transform: uppercase;
    letter-spacing: .07em;
    margin-bottom: .4rem;
  }

  .field input, .field select, .field textarea {
    width: 100%;
    background: var(--bg);
    border: 1px solid var(--border);
    border-radius: 10px;
    padding: .7rem 1rem;
    color: var(--text);
    font-family: 'DM Sans', sans-serif;
    font-size: .9rem;
    outline: none;
    transition: border-color .2s;
  }

  .field input:focus, .field select:focus, .field textarea:focus {
    border-color: var(--accent);
    box-shadow: 0 0 0 3px rgba(240,165,0,.1);
  }

  .field textarea { resize: vertical; min-height: 90px; }

  .btn {
    display: inline-flex;
    align-items: center;
    gap: .5rem;
    padding: .65rem 1.4rem;
    border-radius: 10px;
    font-family: 'DM Sans', sans-serif;
    font-size: .88rem;
    font-weight: 600;
    cursor: pointer;
    border: none;
    transition: all .2s;
  }

  .btn-primary { background: linear-gradient(135deg, var(--accent), var(--accent2)); color: #0a0d12; }
  .btn-primary:hover { opacity: .9; transform: translateY(-1px); }
  .btn-outline { background: transparent; border: 1px solid var(--border); color: var(--text); }
  .btn-outline:hover { border-color: var(--accent); color: var(--accent); }
  .btn-danger-o { background: transparent; border: 1px solid var(--danger); color: var(--danger); }
  .btn-sm { padding: .4rem .9rem; font-size: .8rem; }
  .btn svg { width: 16px; height: 16px; }

  /* ── PROFILE PAGE ── */
  .profile-hero {
    background: linear-gradient(135deg, var(--surface), var(--surface2));
    border: 1px solid var(--border);
    border-radius: 20px;
    padding: 2rem;
    display: flex;
    align-items: center;
    gap: 1.5rem;
    margin-bottom: 1.5rem;
  }

  .profile-avatar {
    width: 80px; height: 80px;
    background: linear-gradient(135deg, var(--accent), var(--accent2));
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: 'Bebas Neue', sans-serif;
    font-size: 2rem;
    color: #0a0d12;
    flex-shrink: 0;
  }

  .profile-name { font-family: 'Bebas Neue', sans-serif; font-size: 2rem; letter-spacing: .05em; }
  .profile-role { color: var(--accent); font-size: .85rem; font-weight: 600; margin-top: .2rem; }
  .profile-meta { color: var(--muted); font-size: .85rem; margin-top: .5rem; }

  /* ── ATTENDANCE TABLE ── */
  .att-day {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 30px; height: 30px;
    border-radius: 8px;
    font-size: .75rem;
    font-weight: 600;
    font-family: 'JetBrains Mono', monospace;
    margin: 2px;
  }
  .att-p { background: rgba(46,204,113,.15); color: var(--success); }
  .att-a { background: rgba(231,76,60,.15);  color: var(--danger);  }
  .att-h { background: rgba(52,152,219,.15);  color: var(--info);    }

  /* ── NOTIFICATION DOT ── */
  .notif-btn {
    position: relative;
    background: var(--surface2);
    border: 1px solid var(--border);
    border-radius: 10px;
    width: 38px; height: 38px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    color: var(--muted);
    transition: color .2s;
  }
  .notif-btn:hover { color: var(--accent); }
  .notif-dot {
    position: absolute;
    top: 7px; right: 7px;
    width: 7px; height: 7px;
    background: var(--accent);
    border-radius: 50%;
    border: 1.5px solid var(--surface);
  }

  /* ── PRODUCTION MINI CHART ── */
  .sparkline {
    display: flex;
    align-items: flex-end;
    gap: 4px;
    height: 50px;
  }
  .spark-bar {
    flex: 1;
    background: linear-gradient(to top, var(--accent), var(--accent2));
    border-radius: 4px 4px 0 0;
    min-height: 4px;
    opacity: .7;
    transition: opacity .2s;
  }
  .spark-bar:hover { opacity: 1; }

  /* ── MOBILE ── */
  @media (max-width: 768px) {
    :root { --sidebar-w: 0px; }
    .sidebar { transform: translateX(-260px); width: 260px; }
    .sidebar.open { transform: translateX(0); }
    .main-content { margin-left: 0; }
    .hamburger { display: flex; }
    .stats-grid { grid-template-columns: 1fr 1fr; }
    .page { padding: 1.2rem; }
    .topbar { padding: 0 1.2rem; }
  }

  @media (max-width: 480px) {
    .stats-grid { grid-template-columns: 1fr; }
    .profile-hero { flex-direction: column; text-align: center; }
  }

  /* ── OVERLAY ── */
  .overlay {
    display: none;
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,.5);
    z-index: 99;
  }
  .overlay.active { display: block; }

  /* ── MODAL ── */
  .modal-bg {
    display: none;
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,.6);
    z-index: 200;
    align-items: center;
    justify-content: center;
  }
  .modal-bg.active { display: flex; }
  .modal {
    background: var(--surface);
    border: 1px solid var(--border);
    border-radius: 20px;
    padding: 2rem;
    width: min(500px, 92vw);
    max-height: 90vh;
    overflow-y: auto;
    animation: fadeIn .2s ease;
  }
  .modal-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 1.5rem;
  }
  .modal-title { font-family: 'Bebas Neue', sans-serif; font-size: 1.5rem; letter-spacing: .06em; }
  .modal-close { background: none; border: none; color: var(--muted); cursor: pointer; font-size: 1.4rem; }
  .modal-close:hover { color: var(--text); }

  .section-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 1.5rem;
  }
  .section-title {
    font-family: 'Bebas Neue', sans-serif;
    font-size: 1.8rem;
    letter-spacing: .06em;
  }
  .section-sub { color: var(--muted); font-size: .85rem; margin-top: .15rem; }

  .toast {
    position: fixed;
    bottom: 2rem;
    right: 2rem;
    background: var(--surface);
    border: 1px solid var(--accent);
    border-radius: 12px;
    padding: 1rem 1.4rem;
    color: var(--text);
    font-size: .9rem;
    z-index: 999;
    display: none;
    animation: slideUp .3s ease;
  }
  @keyframes slideUp { from { opacity:0; transform:translateY(20px); } to { opacity:1; transform:translateY(0); } }

/* API/payment additions */

