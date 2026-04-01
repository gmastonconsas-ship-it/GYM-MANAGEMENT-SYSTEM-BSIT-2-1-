<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Members | GYM-PRO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root { --primary-blue: #4e73df; --bg-gray: #f8f9fc; }
        body { font-family: 'Plus Jakarta Sans', sans-serif; background-color: var(--bg-gray); color: #2d3436; }
        
        .sidebar { min-height: 100vh; background: white; border-right: 1px solid #e3e6f0; position: fixed; width: 260px; }
        .nav-link { color: #858796; font-weight: 600; padding: 12px 20px; border-radius: 12px; margin: 4px 15px; transition: 0.3s; }
        .nav-link:hover, .nav-link.active { background: #f0f3ff; color: var(--primary-blue) !important; }
        
        .card { border: none; border-radius: 20px; box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.05); }
        .table thead th { background-color: #f8f9fc; border-bottom: none; color: #4e73df; text-transform: uppercase; font-size: 11px; letter-spacing: 1px; padding: 15px; }
        .table tbody td { padding: 15px; vertical-align: middle; border-bottom: 1px solid #f1f1f1; }
        .status-badge { padding: 5px 12px; border-radius: 8px; font-size: 12px; font-weight: 600; }
        
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
                <li class="nav-item"><a href="{{ route('dashboard') }}" class="nav-link"><i class="bi bi-grid-1x2-fill me-2"></i> Dashboard</a></li>
                <li class="nav-item"><a href="{{ route('members') }}" class="nav-link active"><i class="bi bi-people-fill me-2"></i> Members</a></li>
                <li class="nav-item"><a href="{{ route('payments') }}" class="nav-link"><i class="bi bi-wallet2 me-2"></i> Revenue</a></li>
                <li class="nav-item"><a href="{{ route('reports') }}" class="nav-link"><i class="bi bi-pie-chart-fill me-2"></i> Analytics</a></li>
                <li class="nav-item"><a href="{{ route('settings') }}" class="nav-link"><i class="bi bi-gear-fill me-2"></i> Settings</a></li>
            </ul>
        </nav>

        <main>
            <div class="d-flex justify-content-between align-items-center mb-5">
                <div>
                    <h2 class="fw-bold mb-0">Member Directory</h2>
                    <p class="text-muted small">Manage and view all registered gym members</p>
                </div>
                <button class="btn btn-primary shadow-sm rounded-pill px-4 py-2">
                    <i class="bi bi-person-plus-fill me-2"></i> Add New Member
                </button>
            </div>

            <div class="card shadow-sm p-4">
                <div class="d-flex justify-content-between mb-4">
                    <div class="input-group w-25 shadow-sm rounded-pill overflow-hidden">
                        <span class="input-group-text border-0 bg-white"><i class="bi bi-search text-muted"></i></span>
                        <input type="text" class="form-control border-0" placeholder="Search members...">
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-outline-secondary dropdown-toggle rounded-pill px-4" type="button" data-bs-toggle="dropdown">
                            Filter by Status
                        </button>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Member ID</th>
                                <th>Full Name</th>
                                <th>Membership Plan</th>
                                <th>Status</th>
                                <th class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fw-bold text-muted">G-2026-001</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="https://ui-avatars.com/api/?name=Juan+Dela+Cruz&background=random" class="rounded-circle me-3" width="35">
                                        <span class="fw-bold">Juan Dela Cruz</span>
                                    </div>
                                </td>
                                <td>Monthly Premium</td>
                                <td><span class="status-badge bg-success-subtle text-success">Active</span></td>
                                <td class="text-end">
                                    <button class="btn btn-sm btn-light text-primary"><i class="bi bi-eye-fill"></i></button>
                                    <button class="btn btn-sm btn-light text-warning"><i class="bi bi-pencil-square"></i></button>
                                    <button class="btn btn-sm btn-light text-danger"><i class="bi bi-trash3-fill"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-muted">G-2026-002</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="https://ui-avatars.com/api/?name=Maria+Santos&background=random" class="rounded-circle me-3" width="35">
                                        <span class="fw-bold">Maria Santos</span>
                                    </div>
                                </td>
                                <td>Basic Plan</td>
                                <td><span class="status-badge bg-warning-subtle text-warning">Pending</span></td>
                                <td class="text-end">
                                    <button class="btn btn-sm btn-light text-primary"><i class="bi bi-eye-fill"></i></button>
                                    <button class="btn btn-sm btn-light text-warning"><i class="bi bi-pencil-square"></i></button>
                                    <button class="btn btn-sm btn-light text-danger"><i class="bi bi-trash3-fill"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-muted">G-2026-003</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="https://ui-avatars.com/api/?name=Pedro+Penduko&background=random" class="rounded-circle me-3" width="35">
                                        <span class="fw-bold">Pedro Penduko</span>
                                    </div>
                                </td>
                                <td>Yearly VIP</td>
                                <td><span class="status-badge bg-success-subtle text-success">Active</span></td>
                                <td class="text-end">
                                    <button class="btn btn-sm btn-light text-primary"><i class="bi bi-eye-fill"></i></button>
                                    <button class="btn btn-sm btn-light text-warning"><i class="bi bi-pencil-square"></i></button>
                                    <button class="btn btn-sm btn-light text-danger"><i class="bi bi-trash3-fill"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>