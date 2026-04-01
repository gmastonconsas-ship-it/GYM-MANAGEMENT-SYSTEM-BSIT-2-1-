<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GymSoft | FitBoat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <style>
        :root { --main-blue: #0d6efd; --soft-bg: #f8f9fa; }
        body { background-color: var(--soft-bg); font-family: 'Segoe UI', sans-serif; margin: 0; }
        .sidebar { width: 260px; height: 100vh; background: white; position: fixed; padding: 30px 20px; box-shadow: 2px 0 10px rgba(0,0,0,0.05); z-index: 1000; }
        .main-content { margin-left: 260px; padding: 40px; min-height: 100vh; }
        .nav-link { color: #6c757d; padding: 12px 15px; border-radius: 10px; margin-bottom: 8px; font-weight: 500; text-decoration: none; display: flex; align-items: center; transition: 0.3s; }
        .nav-link:hover, .nav-link.active { background: rgba(13, 110, 253, 0.1); color: var(--main-blue); }
        .nav-link i { margin-right: 12px; width: 20px; text-align: center; }
        .stat-card { background: white; border-radius: 20px; padding: 25px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); height: 100%; }
        .icon-box { width: 45px; height: 45px; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-bottom: 15px; }
        .table-container { background: white; border-radius: 20px; padding: 25px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="mb-5 px-3">
            <h3 class="fw-bold text-dark"><i class="fas fa-dumbbell text-primary me-2"></i>GymSoft</h3>
        </div>
        <nav class="nav flex-column">
            <a class="nav-link {{ Request::is('analytics*') ? 'active' : '' }}" href="/analytics">
                <i class="fas fa-chart-line"></i> Analytics
            </a>
            <a class="nav-link {{ Request::is('members*') ? 'active' : '' }}" href="/members">
                <i class="fas fa-user-friends"></i> Members
            </a>
            <a class="nav-link {{ Request::is('billing*') ? 'active' : '' }}" href="/billing">
                <i class="fas fa-wallet"></i> Billing
            </a>
            <a class="nav-link {{ Request::is('settings*') ? 'active' : '' }}" href="/settings">
                <i class="fas fa-cog"></i> Settings
            </a>
            <hr>
            <a class="nav-link text-danger" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
        </nav>
    </div>

    <div class="main-content">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>