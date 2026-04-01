<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | GYM-PRO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root { --primary-blue: #4e73df; }
        body { font-family: 'Plus Jakarta Sans', sans-serif; height: 100vh; overflow: hidden; }
        
        .login-container { height: 100vh; }
        
        /* Left Side: Image Branding */
        .login-image {
            background: linear-gradient(rgba(78, 115, 223, 0.8), rgba(34, 74, 190, 0.9)), 
                        url('https://images.unsplash.com/photo-1534438327276-14e5300c3a48?q=80&w=2070&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 60px;
            color: white;
        }

        /* Right Side: Form */
        .login-form-section {
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f8f9fc;
        }

        .form-card {
            width: 100%;
            max-width: 400px;
            padding: 40px;
            background: white;
            border-radius: 24px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }

        .btn-primary {
            background-color: var(--primary-blue);
            border: none;
            padding: 12px;
            border-radius: 12px;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn-primary:hover {
            background-color: #3e5fbb;
            transform: translateY(-2px);
        }

        .form-control {
            padding: 12px 15px;
            border-radius: 12px;
            border: 1px solid #e3e6f0;
            background: #f8f9fc;
        }

        .form-control:focus {
            box-shadow: 0 0 0 0.25rem rgba(78, 115, 223, 0.1);
            border-color: var(--primary-blue);
        }
    </style>
</head>
<body>

<div class="container-fluid p-0">
    <div class="row g-0 login-container">
        
        <div class="col-lg-7 d-none d-lg-flex login-image">
            <h1 class="display-3 fw-bold mb-3">GYM-PRO</h1>
            <p class="fs-4 opacity-75">The ultimate management solution for modern fitness centers.</p>
            <div class="mt-5">
                <div class="d-flex align-items-center mb-3">
                    <i class="bi bi-check-circle-fill me-3 text-info"></i>
                    <span>Real-time Member Tracking</span>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <i class="bi bi-check-circle-fill me-3 text-info"></i>
                    <span>Automated Billing & Revenue Analytics</span>
                </div>
                <div class="d-flex align-items-center">
                    <i class="bi bi-check-circle-fill me-3 text-info"></i>
                    <span>Staff & Inventory Management</span>
                </div>
            </div>
        </div>

        <div class="col-lg-5 login-form-section">
            <div class="form-card">
                <div class="text-center mb-4">
                    <div class="bg-primary-subtle text-primary d-inline-block p-3 rounded-circle mb-3">
                        <i class="bi bi-shield-lock-fill fs-3"></i>
                    </div>
                    <h3 class="fw-bold">Admin Portal</h3>
                    <p class="text-muted small">Please enter your credentials to continue</p>
                </div>

                <form action="{{ route('dashboard') }}" method="GET">
                    <div class="mb-3">
                        <label class="form-label small fw-bold text-muted">Username</label>
                        <div class="input-group">
                            <span class="input-group-text border-0 bg-light"><i class="bi bi-person text-muted"></i></span>
                            <input type="text" class="form-control" placeholder="admin_christian" required>
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <div class="d-flex justify-content-between">
                            <label class="form-label small fw-bold text-muted">Password</label>
                            <a href="#" class="small text-decoration-none text-primary">Forgot?</a>
                        </div>
                        <div class="input-group">
                            <span class="input-group-text border-0 bg-light"><i class="bi bi-lock text-muted"></i></span>
                            <input type="password" class="form-control" placeholder="••••••••" required>
                        </div>
                    </div>

                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" id="remember">
                        <label class="form-check-label small text-muted" for="remember">Keep me logged in</label>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 shadow-sm mb-3">
                        Sign In to Dashboard
                    </button>
                    
                    <p class="text-center small text-muted mb-0">
                        Need technical support? <a href="#" class="text-decoration-none">Contact IT</a>
                    </p>
                </form>
            </div>
        </div>

    </div>
</div>

</body>
</html>