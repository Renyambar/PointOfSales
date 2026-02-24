@extends('layouts.app')

@section('content')
<div class="row mb-4">
    <div class="col-12">
        <div class="bg-primary text-white rounded-3 p-5 text-center">
            <h1 class="display-4 fw-bold">Selamat Datang di POS System</h1>
            <p class="lead">Sistem Point of Sale modern untuk bisnis Anda</p>
            <a href="/sales" class="btn btn-light btn-lg mt-3">
                <i class="bi bi-cart-plus"></i> Mulai Transaksi
            </a>
        </div>
    </div>
</div>

<!-- Stats Cards -->
<div class="row mb-4">
    <div class="col-md-3">
        <div class="card border-0 shadow-sm">
            <div class="card-body text-center">
                <div class="display-6 text-primary fw-bold">150</div>
                <p class="text-muted mb-0">Total Produk</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card border-0 shadow-sm">
            <div class="card-body text-center">
                <div class="display-6 text-success fw-bold">Rp 5.2M</div>
                <p class="text-muted mb-0">Penjualan Hari Ini</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card border-0 shadow-sm">
            <div class="card-body text-center">
                <div class="display-6 text-warning fw-bold">48</div>
                <p class="text-muted mb-0">Transaksi Hari Ini</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card border-0 shadow-sm">
            <div class="card-body text-center">
                <div class="display-6 text-info fw-bold">4</div>
                <p class="text-muted mb-0">Kategori Produk</p>
            </div>
        </div>
    </div>
</div>

<!-- Categories -->
<h3 class="mb-4">Kategori Produk</h3>
<div class="row">
    <div class="col-md-3 mb-4">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body text-center p-4">
                <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                    <span style="font-size: 2.5rem;">🍔</span>
                </div>
                <h5 class="card-title">Food & Beverage</h5>
                <p class="card-text text-muted">Makanan dan minuman segar</p>
                <a href="/category/food-beverage" class="btn btn-outline-primary">Lihat Produk</a>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-4">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body text-center p-4">
                <div class="bg-danger bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                    <span style="font-size: 2.5rem;">💄</span>
                </div>
                <h5 class="card-title">Beauty & Health</h5>
                <p class="card-text text-muted">Produk kecantikan dan kesehatan</p>
                <a href="/category/beauty-health" class="btn btn-outline-danger">Lihat Produk</a>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-4">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body text-center p-4">
                <div class="bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                    <span style="font-size: 2.5rem;">🏠</span>
                </div>
                <h5 class="card-title">Home Care</h5>
                <p class="card-text text-muted">Perawatan rumah tangga</p>
                <a href="/category/home-care" class="btn btn-outline-success">Lihat Produk</a>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-4">
        <div class="card border-0 shadow-sm h-100">
            <div class="card-body text-center p-4">
                <div class="bg-warning bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                    <span style="font-size: 2.5rem;">🧸</span>
                </div>
                <h5 class="card-title">Baby & Kid</h5>
                <p class="card-text text-muted">Kebutuhan bayi dan anak</p>
                <a href="/category/baby-kid" class="btn btn-outline-warning">Lihat Produk</a>
            </div>
        </div>
    </div>
</div>

<!-- Recent Transactions -->
<h3 class="mb-4 mt-4">Transaksi Terbaru</h3>
<div class="card border-0 shadow-sm">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="table-light">
                    <tr>
                        <th>No. Invoice</th>
                        <th>Tanggal</th>
                        <th>Items</th>
                        <th>Total</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>INV-2026001</strong></td>
                        <td>24 Feb 2026, 10:30</td>
                        <td>5 items</td>
                        <td>Rp 125.000</td>
                        <td><span class="badge bg-success">Selesai</span></td>
                    </tr>
                    <tr>
                        <td><strong>INV-2026002</strong></td>
                        <td>24 Feb 2026, 11:15</td>
                        <td>3 items</td>
                        <td>Rp 87.500</td>
                        <td><span class="badge bg-success">Selesai</span></td>
                    </tr>
                    <tr>
                        <td><strong>INV-2026003</strong></td>
                        <td>24 Feb 2026, 12:00</td>
                        <td>8 items</td>
                        <td>Rp 250.000</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
