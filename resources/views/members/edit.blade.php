<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Member | GymSoft</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-5">
    <div class="container">
        <div class="card shadow-sm border-0 p-4" style="max-width: 500px; margin: auto; border-radius: 20px;">
            <h3 class="fw-bold mb-4">Edit Member Info</h3>
            <form action="/members/{{ $member->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label text-muted small fw-bold">FULL NAME</label>
                    <input type="text" name="name" class="form-control" value="{{ $member->name }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label text-muted small fw-bold">EMAIL ADDRESS</label>
                    <input type="email" name="email" class="form-control" value="{{ $member->email }}" required>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary fw-bold" style="border-radius: 10px;">Update Member</button>
                    <a href="/members" class="btn btn-light text-muted">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>