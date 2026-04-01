<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analytics | GYM-PRO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root { --primary-blue: #4e73df; --bg-gray: #f8f9fc; }
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: var(--bg-gray); color: #2d3436; }
        
        .sidebar { min-height: 100vh; background: white; border-right: 1px solid #e3e6f0; position: fixed; width: 260px; }
        .nav-link { color: #858796; font-weight: 600; padding: 12px 20px; border-radius: 12px; margin: 4px 15px; transition: 0.3s; }
        .nav-link:hover, .nav-link.active { background: #f0f3ff; color: var(--primary-blue) !important; }
        
        .card { border: none; border-radius: 24px; box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.05); transition: 0.3s; }
        .card:hover { transform: translateY(-5px); }
        
        .chart-placeholder {
            background: linear-gradient(180deg, rgba(78, 115, 223, 0.05) 0%, rgba(255, 255, 255, 0) 100%);
            border-radius: 16px;
            height: 250px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px dashed #e3e6f0;
        }

        main { margin-left: 260px; padding: 40px; }
        .btn-export { border-radius: 12px; font-weight: 600; padding: 10px 20px; }
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
                <li class="nav-item"><a href="{{ route('reports') }}" class="nav-link active"><i class="bi bi-pie-chart-fill me-2"></i> Analytics</a></li>
                <li class="nav-item"><a href="{{ route('settings') }}" class="nav-link"><i class="bi bi-gear-fill me-2"></i> Settings</a></li>
            </ul>
        </nav>

        <main>
            <div class="d-flex justify-content-between align-items-center mb-5">
                <div>
                    <h2 class="fw-bold mb-0">Reports & Analytics</h2>
                    <p class="text-muted small">Visualizing your gym's performance and growth</p>
                </div>
                <div class="d-flex gap-2">
                    <button class="btn btn-outline-primary btn-export shadow-sm"><i class="bi bi-download me-2"></i> Export PDF</button>
                    <button class="btn btn-primary btn-export shadow-sm"><i class="bi bi-calendar3 me-2"></i> This Month</button>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-7">
                    <div class="card p-4 h-100">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h5 class="fw-bold mb-0 text-dark">Monthly Member Growth</h5>
                            <i class="bi bi-three-dots-vertical text-muted"></i>
                        </div>
                        <div class="chart-placeholder">
                            <div class="text-center">
                                <i class="bi bi-graph-up text-primary fs-1 mb-2"></i>
                                <p class="text-muted small fw-bold mb-0">Real-time Graph Engine Offline</p>
                                <span class="badge bg-primary-subtle text-primary">Static Preview Mode</span>
                            </div>
                        </div>
                        <div class="mt-4 d-flex justify-content-around">
                            <div class="text-center">
                                <p class="text-muted small mb-0">New Members</p>
                                <h4 class="fw-bold text-success">+45</h4>
                            </div>
                            <div class="text-center">
                                <p class="text-muted small mb-0">Churn Rate</p>
                                <h4 class="fw-bold text-danger">2.1%</h4>
                            </div>
                            <div class="text-center">
                                <p class="text-muted small mb-0">Target</p>
                                <h4 class="fw-bold text-primary">85%</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="card p-4 h-100">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h5 class="fw-bold mb-0 text-dark">Revenue Distribution</h5>
                            <i class="bi bi-pie-chart-fill text-muted"></i>
                        </div>
                        <div class="chart-placeholder" style="height: 200px;">
                             <p class="text-muted small fw-bold mb-0">Revenue Breakdown Preview</p>
                        </div>
                        <div class="mt-4">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="small text-muted">Memberships</span>
                                <span class="small fw-bold">₱35,000</span>
                            </div>
                            <div class="progress mb-3" style="height: 6px;">
                                <div class="progress-bar bg-primary" style="width: 75%"></div>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span class="small text-muted">Personal Training</span>
                                <span class="small fw-bold">₱10,200</span>
                            </div>
                            <div class="progress" style="height: 6px;">
                                <div class="progress-bar bg-success" style="width: 25%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

</body>
</html>