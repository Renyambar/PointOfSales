@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Profile</li>
            </ol>
        </nav>

        <div class="card border-0 shadow-sm">
            <div class="card-body p-0">
                <!-- Profile Header -->
                <div class="bg-primary text-white p-4 rounded-top">
                    <div class="d-flex align-items-center">
                        <div class="bg-white rounded-circle d-flex align-items-center justify-content-center me-4" style="width: 100px; height: 100px;">
                            <span style="font-size: 3rem;">👤</span>
                        </div>
                        <div>
                            <h2 class="mb-1">{{ ucfirst($name) }}</h2>
                            <p class="mb-0 opacity-75">User ID: {{ $id }}</p>
                            <span class="badge bg-success mt-2">Active</span>
                        </div>
                    </div>
                </div>

                <!-- Profile Info -->
                <div class="p-4">
                    <h5 class="mb-4">Informasi Pengguna</h5>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label class="text-muted small">Nama Lengkap</label>
                            <p class="fw-semibold">{{ ucfirst($name) }}</p>
                        </div>
                        <div class="col-md-4">
                            <label class="text-muted small">ID Pengguna</label>
                            <p class="fw-semibold">{{ $id }}</p>
                        </div>
                        <div class="col-md-4">
                            <label class="text-muted small">Role</label>
                            <p class="fw-semibold">Kasir</p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label class="text-muted small">Email</label>
                            <p class="fw-semibold">{{ $name }}@pos-system.com</p>
                        </div>
                        <div class="col-md-4">
                            <label class="text-muted small">No. Telepon</label>
                            <p class="fw-semibold">+62 812-3456-7890</p>
                        </div>
                        <div class="col-md-4">
                            <label class="text-muted small">Tanggal Bergabung</label>
                            <p class="fw-semibold">1 Januari 2026</p>
                        </div>
                    </div>

                    <hr class="my-4">

                    <h5 class="mb-4">Statistik</h5>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card bg-primary bg-opacity-10 border-0">
                                <div class="card-body text-center">
                                    <div class="display-6 text-primary fw-bold">248</div>
                                    <p class="text-muted mb-0 small">Total Transaksi</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card bg-success bg-opacity-10 border-0">
                                <div class="card-body text-center">
                                    <div class="display-6 text-success fw-bold">Rp 12.5M</div>
                                    <p class="text-muted mb-0 small">Total Penjualan</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card bg-warning bg-opacity-10 border-0">
                                <div class="card-body text-center">
                                    <div class="display-6 text-warning fw-bold">98%</div>
                                    <p class="text-muted mb-0 small">Akurasi</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card bg-info bg-opacity-10 border-0">
                                <div class="card-body text-center">
                                    <div class="display-6 text-info fw-bold">4.8</div>
                                    <p class="text-muted mb-0 small">Rating</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="my-4">

                    <h5 class="mb-4">Transaksi Terakhir</h5>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th>Invoice</th>
                                    <th>Tanggal</th>
                                    <th>Items</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>INV-2026248</strong></td>
                                    <td>24 Feb 2026</td>
                                    <td>5 items</td>
                                    <td>Rp 125.000</td>
                                </tr>
                                <tr>
                                    <td><strong>INV-2026247</strong></td>
                                    <td>24 Feb 2026</td>
                                    <td>3 items</td>
                                    <td>Rp 87.500</td>
                                </tr>
                                <tr>
                                    <td><strong>INV-2026246</strong></td>
                                    <td>23 Feb 2026</td>
                                    <td>8 items</td>
                                    <td>Rp 250.000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="d-flex gap-2 mt-4">
                        <button class="btn btn-primary">Edit Profile</button>
                        <button class="btn btn-outline-secondary">Ganti Password</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
