@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold"><i class="fas fa-chart-line text-primary me-2"></i>Gym Performance</h2>
        <span class="badge bg-white text-dark shadow-sm p-2">{{ now()->format('F d, Y') }}</span>
    </div>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="stat-card p-4 border-0 shadow-sm rounded-4 bg-white">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted mb-1 text-uppercase small fw-bold">Total Members</h6>
                        <h2 class="fw-bold mb-0 text-dark">{{ $totalMembers }}</h2>
                    </div>
                    <div class="bg-primary bg-opacity-10 p-3 rounded-3 text-primary">
                        <i class="fas fa-users fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="stat-card p-4 border-0 shadow-sm rounded-4 bg-white">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted mb-1 text-uppercase small fw-bold">Active (Paid)</h6>
                        <h2 class="fw-bold mb-0 text-success">{{ $activePlans }}</h2>
                    </div>
                    <div class="bg-success bg-opacity-10 p-3 rounded-3 text-success">
                        <i class="fas fa-check-circle fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="stat-card p-4 border-0 shadow-sm rounded-4 bg-white">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted mb-1 text-uppercase small fw-bold">Pending Payments</h6>
                        <h2 class="fw-bold mb-0 text-warning">{{ $pendingPayments }}</h2>
                    </div>
                    <div class="bg-warning bg-opacity-10 p-3 rounded-3 text-warning">
                        <i class="fas fa-clock fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5">
        <div class="alert alert-info border-0 shadow-sm rounded-3">
            <i class="fas fa-info-circle me-2"></i> Hi <strong>Christian</strong>, ang data na ito ay real-time base sa iyong database!
        </div>
    </div>
</div>
@endsection