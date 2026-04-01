<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitBoat | Professional Gym Management</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root { --main-blue: #0d6efd; --text-dark: #2d3748; }
        body { background-color: #f8fafc; font-family: 'Inter', sans-serif; }
        
        .hero-section { padding: 80px 0 60px; text-align: center; }
        .hero-title { font-size: 2.5rem; font-weight: 800; color: var(--text-dark); }
        .hero-subtitle { color: #ef4444; font-weight: 700; font-size: 2.5rem; }
        
        .feature-card {
            background: white;
            border: none;
            border-radius: 20px;
            padding: 30px;
            height: 100%;
            box-shadow: 0 10px 25px rgba(0,0,0,0.03);
            transition: transform 0.3s ease;
        }
        .feature-card:hover { transform: translateY(-10px); }
        
        .icon-wrapper {
            width: 60px;
            height: 60px;
            background: #f1f5f9;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 20px;
        }
        
        .nav-auth { position: absolute; top: 20px; right: 40px; }
        .btn-primary-pro { background: var(--main-blue); color: white; border-radius: 12px; padding: 12px 25px; font-weight: 600; border: none; }
    </style>
</head>
<body>

    <div class="nav-auth">
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/members') }}" class="btn btn-outline-primary rounded-pill px-4">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-decoration-none text-dark fw-bold me-4">Log in</a>
                <a href="{{ route('register') }}" class="btn btn-primary rounded-pill px-4">Register</a>
            @endauth
        @endif
    </div>

    <div class="container">
        <div class="hero-section">
            <h1 class="hero-title">Running a Gym Shouldn't Be</h1>
            <h1 class="hero-subtitle">This Complicated</h1>
            <p class="text-muted mt-3">Most gym owners waste hours on tasks that should be automated.</p>
        </div>

        <div class="row g-4">
            <div class="col-md-6">
                <div class="feature-card d-flex align-items-start">
                    <div class="icon-wrapper text-primary me-4">
                        <i class="fas fa-users-cog"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold">Manual Membership Tracking</h5>
                        <p class="text-muted small mb-0">Managing members using spreadsheets or notebooks wastes time and leads to errors.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="feature-card d-flex align-items-start">
                    <div class="icon-wrapper text-warning me-4">
                        <i class="fas fa-credit-card"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold">Payment & Billing Confusion</h5>
                        <p class="text-muted small mb-0">Tracking renewals, invoices, and payments manually creates costly mistakes.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="feature-card d-flex align-items-start">
                    <div class="icon-wrapper text-danger me-4">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold">Trainer & Staff Scheduling</h5>
                        <p class="text-muted small mb-0">Managing trainers, classes, and staff operations becomes chaotic without proper tools.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="feature-card d-flex align-items-start">
                    <div class="icon-wrapper text-info me-4">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold">Low Member Engagement</h5>
                        <p class="text-muted small mb-0">Members miss renewals and updates without proper communication channels.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <p class="text-muted small">© 2026 FitBoat Gym System by Christian</p>
        </div>
    </div>

</body>
</html>