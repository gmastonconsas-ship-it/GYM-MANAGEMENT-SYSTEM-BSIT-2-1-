<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | GYM-PRO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root { --primary-blue: #4e73df; --bg-gray: #f8f9fc; }
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: var(--bg-gray); color: #2d3436; }
        
        /* Sidebar Upgrade */
        .sidebar { min-height: 100vh; background: white; border-right: 1px solid #e3e6f0; position: fixed; width: 260px; }
        .nav-link { color: #858796; font-weight: 600; padding: 12px 20px; border-radius: 12px; margin: 4px 15px; transition: 0.3s; }
        .nav-link:hover, .nav-link.active { background: #f0f3ff; color: var(--primary-blue) !important; }
        
        /* Modern Card Styling */
        .card { border: none; border-radius: 20px; box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.05); }
        .stat-card { border-left: 4px solid var(--primary-blue); }
        .icon-box { width: 48px; height: 48px; border-radius: 12px; display: flex; align-items: center; justify-content: center; }
        
        /* Activity List */
        .activity-item { display: flex; align-items: center; padding: 12px; margin-bottom: 10px; border-radius: 12px; background: #fff; border: 1px solid #f1f1f1; }
        .activity-icon { width: 35px; height: 35px; border-radius: 8px; margin-right: 12px; display: flex; align-items: center; justify-content: center; font-size: 14px; }
        
        main { margin-left: 260px; padding: 40px; }
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
                <li class="nav-item"><a href="{{ route('dashboard') }}" class="nav-link active"><i class="bi bi-grid-1x2-fill me-2"></i> Dashboard</a></li>
                <li class="nav-item"><a href="{{ route('members') }}" class="nav-link"><i class="bi bi-people-fill me-2"></i> Members</a></li>
                <li class="nav-item"><a href="{{ route('payments') }}" class="nav-link"><i class="bi bi-wallet2 me-2"></i> Revenue</a></li>
                <li class="nav-item"><a href="{{ route('reports') }}" class="nav-link"><i class="bi bi-pie-chart-fill me-2"></i> Analytics</a></li>
                <li class="nav-item"><a href="{{ route('settings') }}" class="nav-link"><i class="bi bi-gear-fill me-2"></i> Settings</a></li>
            </ul>
        </nav>

        <main>
            <div class="d-flex justify-content-between align-items-center mb-5">
                <div>
                    <h2 class="fw-bold mb-0">Good Morning, Admin</h2>
                    <p class="text-muted small">{{ date('F d, Y') }} | Binalbagan Campus</p>
                </div>
                <div class="d-flex align-items-center">
                    <div class="me-3 text-end">
                        <span class="d-block fw-bold small">Christian Campillanos</span>
                        <span class="badge bg-primary-subtle text-primary" style="font-size: 10px;">Gym Owner</span>
                    </div>
                    <img src="https://ui-avatars.com/api/?name=Christian+Campillanos&background=4e73df&color=fff" class="rounded-circle shadow-sm" width="45">
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8">
                    <div class="row g-4 mb-4">
                        <div class="col-md-6 col-xl-3">
                            <div class="card p-3 stat-card">
                                <span class="text-muted small fw-bold">MEMBERS</span>
                                <h4 class="fw-bold mb-0">250</h4>
                                <span class="text-success small"><i class="bi bi-arrow-up"></i> 12%</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="card p-3 border-left-success" style="border-left: 4px solid #1cc88a;">
                                <span class="text-muted small fw-bold">CLASSES</span>
                                <h4 class="fw-bold mb-0">12</h4>
                                <span class="text-muted small">Active Now</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="card p-3" style="border-left: 4px solid #36b9cc;">
                                <span class="text-muted small fw-bold">TRAINERS</span>
                                <h4 class="fw-bold mb-0">12</h4>
                                <span class="text-muted small">Staff On-site</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="card p-3" style="border-left: 4px solid #f6c23e;">
                                <span class="text-muted small fw-bold">REVENUE</span>
                                <h4 class="fw-bold mb-0">₱180k</h4>
                                <span class="text-success small"><i class="bi bi-arrow-up"></i> 120%</span>
                            </div>
                        </div>
                    </div>

                    <div class="card p-4">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h5 class="fw-bold mb-0">Revenue Overview</h5>
                            <select class="form-select form-select-sm w-25 shadow-none border-light"><option>Yearly</option></select>
                        </div>
                        <div class="d-flex align-items-end justify-content-between px-2" style="height: 250px;">
                            <div class="bg-primary opacity-25 rounded-top" style="width: 8%; height: 20%;"></div>
                            <div class="bg-primary opacity-25 rounded-top" style="width: 8%; height: 40%;"></div>
                            <div class="bg-primary opacity-25 rounded-top" style="width: 8%; height: 35%;"></div>
                            <div class="bg-primary opacity-50 rounded-top" style="width: 8%; height: 60%;"></div>
                            <div class="bg-primary opacity-25 rounded-top" style="width: 8%; height: 15%;"></div>
                            <div class="bg-primary opacity-75 rounded-top" style="width: 8%; height: 80%;"></div>
                            <div class="bg-primary rounded-top shadow" style="width: 8%; height: 100%;"></div>
                        </div>
                        <div class="d-flex justify-content-between mt-3 text-muted small">
                            <span>2020</span><span>2021</span><span>2022</span><span>2023</span><span>2024</span><span>2025</span><span>2026</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card p-4 h-100">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h5 class="fw-bold mb-0">Recent Activities</h5>
                            <a href="#" class="small text-decoration-none">View All</a>
                        </div>
                        
                        <div class="activity-item">
                            <div class="activity-icon bg-primary-subtle text-primary"><i class="bi bi-person-plus-fill"></i></div>
                            <div class="small">
                                <p class="mb-0 fw-bold">New Member Registered</p>
                                <span class="text-muted">ID#5423 | 12:00 PM</span>
                            </div>
                        </div>
                        <div class="activity-item border-start-warning">
                            <div class="activity-icon bg-success-subtle text-success"><i class="bi bi-wallet2"></i></div>
                            <div class="small">
                                <p class="mb-0 fw-bold">Payment Received</p>
                                <span class="text-muted">₱1,500.00 | 11:45 AM</span>
                            </div>
                        </div>
                        <div class="activity-item">
                            <div class="activity-icon bg-info-subtle text-info"><i class="bi bi-geo-alt-fill"></i></div>
                            <div class="small">
                                <p class="mb-0 fw-bold">Member Check-in</p>
                                <span class="text-muted">ID#7892 | 10:30 AM</span>
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