<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GymSoft | New Member</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { background-color: #f8f9fa; font-family: 'Segoe UI', sans-serif; }
        .form-card { background: white; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); padding: 40px; margin-top: 50px; }
        .btn-primary { border-radius: 10px; padding: 12px; font-weight: 600; background-color: #0d6efd; border: none; }
        .form-label { font-weight: 500; color: #495057; }
    </style>
</head>
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-card">
                    <div class="text-center mb-4">
                        <h2 class="fw-bold"><i class="fas fa-user-plus text-primary me-2"></i>Register Member</h2>
                        <p class="text-muted">Fill out the information to join Everybody Fitness</p>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="/members" method="POST">
                        @csrf
                        
                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" name="name" class="form-control" placeholder="e.g. Christian Campillanos" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="email" name="email" class="form-control" placeholder="example@gmail.com" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Phone Number</label>
                            <input type="text" name="phone" class="form-control" placeholder="09xxxxxxxxx" required>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Membership Plan</label>
                                <select name="plan_type" class="form-select" required>
                                    <option value="Basic">Basic (₱900)</option>
                                    <option value="Gold" selected>Gold (₱1,200)</option>
                                    <option value="VIP">VIP (₱2,000)</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Payment Status</label>
                                <select name="payment_status" class="form-select" required>
                                    <option value="Pending">Pending</option>
                                    <option value="Paid">Paid</option>
                                </select>
                            </div>
                        </div>

                        <input type="hidden" name="status" value="Active">

                        <div class="d-grid gap-2 mt-4">
                            <button type="submit" class="btn btn-primary">Register Member</button>
                            <a href="/members" class="btn btn-light text-muted">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>