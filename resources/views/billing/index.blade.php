<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payments | GYM-PRO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root { --primary-blue: #4e73df; --bg-gray: #f8f9fc; }
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: var(--bg-gray); color: #2d3436; }
        
        /* Sidebar Consistency */
        .sidebar { min-height: 100vh; background: white; border-right: 1px solid #e3e6f0; position: fixed; width: 260px; z-index: 100; }
        .nav-link { color: #858796; font-weight: 600; padding: 12px 20px; border-radius: 12px; margin: 4px 15px; transition: 0.3s; }
        .nav-link:hover, .nav-link.active { background: #f0f3ff; color: var(--primary-blue) !important; }
        
        /* Premium Card & Table Styling */
        .card { border: none; border-radius: 24px; box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.05); }
        .table thead th { background-color: #f8f9fc; border: none; color: #4e73df; text-transform: uppercase; font-size: 11px; letter-spacing: 1px; padding: 20px; }
        .table tbody td { padding: 20px; vertical-align: middle; border-bottom: 1px solid #f8f9fc; }
        
        .status-paid { background: #e3fcef; color: #00a854; padding: 6px 12px; border-radius: 10px; font-size: 12px; font-weight: 700; }
        .status-pending { background: #fff7e6; color: #fa8c16; padding: 6px 12px; border-radius: 10px; font-size: 12px; font-weight: 700; }
        
        main { margin-left: 260px; padding: 40px; }
        .btn-primary { background: var(--primary-blue); border: none; border-radius: 12px; padding: 10px 24px; font-weight: 600; }
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
                <li class="nav-item"><a href="{{ route('payments') }}" class="nav-link active"><i class="bi bi-wallet2 me-2"></i> Payments</a></li>
                <li class="nav-item"><a href="{{ route('reports') }}" class="nav-link"><i class="bi bi-pie-chart-fill me-2"></i> Analytics</a></li>
                <li class="nav-item"><a href="{{ route('settings') }}" class="nav-link"><i class="bi bi-gear-fill me-2"></i> Settings</a></li>
            </ul>
        </nav>

        <main>
            <div class="d-flex justify-content-between align-items-center mb-5">
                <div>
                    <h2 class="fw-bold mb-0">Financial Transactions</h2>
                    <p class="text-muted small">Monitor gym revenue and membership billings</p>
                </div>
                <button class="btn btn-primary shadow-sm">
                    <i class="bi bi-plus-lg me-2"></i> Record New Payment
                </button>
            </div>

            <div class="row g-4 mb-4">
                <div class="col-md-4">
                    <div class="card p-4">
                        <span class="text-muted small fw-bold">TOTAL REVENUE (MTD)</span>
                        <h3 class="fw-bold mt-2">₱45,200.00</h3>
                        <span class="text-success small fw-bold"><i class="bi bi-graph-up-arrow"></i> +15.4% from last month</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4">
                        <span class="text-muted small fw-bold">PENDING PAYMENTS</span>
                        <h3 class="fw-bold mt-2">₱8,500.00</h3>
                        <span class="text-muted small">5 Overdue Invoices</span>
                    </div>
                </div>
            </div>

            <div class="card shadow-sm overflow-hidden">
                <div class="card-header bg-white border-0 p-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="fw-bold mb-0">Recent Billing History</h5>
                        <div class="input-group w-25">
                            <span class="input-group-text bg-light border-0"><i class="bi bi-search"></i></span>
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search Ref ID...">
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>Ref ID</th>
                                <th>Member Name</th>
                                <th>Amount</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th class="text-end">Receipt</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-muted fw-bold">#PAY-9901</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="https://ui-avatars.com/api/?name=Christian+Campillanos&background=4e73df&color=fff" class="rounded-circle me-3" width="30">
                                        <span class="fw-bold">Christian Campillanos</span>
                                    </div>
                                </td>
                                <td class="fw-bold">₱1,500.00</td>
                                <td>April 01, 2026</td>
                                <td><span class="status-paid">SUCCESS</span></td>
                                <td class="text-end">
                                    <button class="btn btn-sm btn-light text-primary border-0"><i class="bi bi-download"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-muted fw-bold">#PAY-9902</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="https://ui-avatars.com/api/?name=Juan+Dela+Cruz&background=random" class="rounded-circle me-3" width="30">
                                        <span class="fw-bold">Juan Dela Cruz</span>
                                    </div>
                                </td>
                                <td class="fw-bold">₱500.00</td>
                                <td>April 02, 2026</td>
                                <td><span class="status-pending">PENDING</span></td>
                                <td class="text-end">
                                    <button class="btn btn-sm btn-light text-primary border-0"><i class="bi bi-download"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer bg-white border-0 p-4 text-center">
                    <a href="#" class="text-decoration-none small fw-bold">View All Transactions <i class="bi bi-chevron-right"></i></a>
                </div>
            </div>
        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>