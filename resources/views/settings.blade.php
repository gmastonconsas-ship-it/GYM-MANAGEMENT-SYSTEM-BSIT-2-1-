<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings | GYM-PRO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root { --primary-blue: #4e73df; --bg-gray: #f8f9fc; }
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: var(--bg-gray); color: #2d3436; }
        
        /* Sidebar Styling */
        .sidebar { min-height: 100vh; background: white; border-right: 1px solid #e3e6f0; position: fixed; width: 260px; display: flex; flex-direction: column; }
        .nav-link { color: #858796; font-weight: 600; padding: 12px 20px; border-radius: 12px; margin: 4px 15px; transition: 0.3s; }
        .nav-link:hover, .nav-link.active { background: #f0f3ff; color: var(--primary-blue) !important; }
        
        /* Logout Button at Bottom */
        .logout-section { margin-top: auto; padding-bottom: 30px; }
        .nav-link.logout { color: #e74a3b; }
        .nav-link.logout:hover { background: #fff5f5; color: #be2617 !important; }

        /* Card & Forms */
        .card { border: none; border-radius: 24px; box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.05); }
        .form-control, .form-select { border-radius: 12px; border: 1px solid #e3e6f0; padding: 12px; background: #f8f9fc; }
        .form-control:focus { box-shadow: 0 0 0 0.25rem rgba(78, 115, 223, 0.1); border-color: var(--primary-blue); }
        
        main { margin-left: 260px; padding: 40px; }
        .btn-save { border-radius: 12px; padding: 12px; font-weight: 600; background: var(--primary-blue); border: none; }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <nav class="sidebar d-none d-md-block">
            <div class="p-4 mb-3 text-center">
                <h4 class="fw-bold text-primary"><i class="bi bi-lightning-charge-fill"></i> GYM-PRO</h4>
            </div>
            <ul class="nav flex-column">
                <li class="nav-item"><a href="{{ route('dashboard') }}" class="nav-link"><i class="bi bi-grid-1x2-fill me-2"></i> Dashboard</a></li>
                <li class="nav-item"><a href="{{ route('members') }}" class="nav-link"><i class="bi bi-people-fill me-2"></i> Members</a></li>
                <li class="nav-item"><a href="{{ route('payments') }}" class="nav-link"><i class="bi bi-wallet2 me-2"></i> Payments</a></li>
                <li class="nav-item"><a href="{{ route('reports') }}" class="nav-link"><i class="bi bi-pie-chart-fill me-2"></i> Analytics</a></li>
                <li class="nav-item"><a href="{{ route('settings') }}" class="nav-link active"><i class="bi bi-gear-fill me-2"></i> Settings</a></li>
            </ul>

            <div class="logout-section">
                <hr class="mx-4 opacity-50">
                <a href="{{ route('login') }}" class="nav-link logout">
                    <i class="bi bi-box-arrow-right me-2"></i> Sign Out
                </a>
            </div>
        </nav>

        <main>
            <div class="mb-5">
                <h2 class="fw-bold mb-0">System Settings</h2>
                <p class="text-muted small">Configure your administrative profile and app preferences</p>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="card p-4">
                        <h5 class="fw-bold mb-4">Admin Profile</h5>
                        
                        <div class="text-center mb-4">
                            <img src="https://ui-avatars.com/api/?name=Christian+Campillanos&background=4e73df&color=fff&size=100" class="rounded-circle shadow-sm mb-3">
                            <p class="small text-primary fw-bold mb-0">Change Photo</p>
                        </div>

                        <div class="mb-3">
                            <label class="form-label small fw-bold text-muted">Admin Full Name</label>
                            <input type="text" class="form-control" value="Christian Campillanos">
                        </div>

                        <div class="mb-3">
                            <label class="form-label small fw-bold text-muted">Email Address</label>
                            <input type="email" class="form-control" value="christian@gympro.ph">
                        </div>

                        <div class="mb-4">
                            <label class="form-label small fw-bold text-muted">System Theme</label>
                            <select class="form-select">
                                <option>Light Mode (Recommended)</option>
                                <option>Dark Mode</option>
                            </select>
                        </div>

                        <div class="form-check form-switch mb-4">
                            <input class="form-check-input" type="checkbox" id="notifSwitch" checked>
                            <label class="form-check-label small fw-bold text-muted" for="notifSwitch">Enable Email Notifications</label>
                        </div>

                        <button class="btn btn-primary btn-save w-100 shadow-sm">Save Changes</button>
                    </div>
                </div>

                <div class="col-lg-5 ms-lg-4">
                    <div class="card p-4 bg-primary text-white mb-4">
                        <h6 class="fw-bold mb-3">Developer Information</h6>
                        <p class="small mb-0 opacity-75">Carlos Hilado Memorial State University</p>
                        <p class="small mb-2 opacity-75">Binalbagan Campus | BSIT-2</p>
                        <hr class="opacity-25">
                        <p class="small fw-bold mb-0">System Version: 2.0.0 (Midterm)</p>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

</body>
</html>