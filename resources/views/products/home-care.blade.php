@extends('layouts.app')

@section('content')
<nav aria-label="breadcrumb" class="mb-4">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active">Home Care</li>
    </ol>
</nav>

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="mb-1">🏠 Home Care</h2>
        <p class="text-muted">Produk perawatan rumah tangga berkualitas</p>
    </div>
    <div>
        <input type="text" class="form-control" placeholder="Cari produk..." style="width: 250px;">
    </div>
</div>

<div class="row">
    <!-- Product 1 -->
    <div class="col-md-3 mb-4">
        <div class="card border-0 shadow-sm h-100">
            <div class="bg-light text-center p-4">
                <span style="font-size: 4rem;">🧹</span>
            </div>
            <div class="card-body">
                <h6 class="card-title">Sapu Ijuk Premium</h6>
                <p class="text-muted small mb-2">1 pcs</p>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold text-success">Rp 35.000</span>
                    <span class="badge bg-success">Stok: 30</span>
                </div>
            </div>
            <div class="card-footer bg-white border-0">
                <button class="btn btn-success btn-sm w-100">+ Tambah ke Keranjang</button>
            </div>
        </div>
    </div>

    <!-- Product 2 -->
    <div class="col-md-3 mb-4">
        <div class="card border-0 shadow-sm h-100">
            <div class="bg-light text-center p-4">
                <span style="font-size: 4rem;">🧽</span>
            </div>
            <div class="card-body">
                <h6 class="card-title">Spons Cuci Piring</h6>
                <p class="text-muted small mb-2">5 pcs</p>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold text-success">Rp 15.000</span>
                    <span class="badge bg-success">Stok: 100</span>
                </div>
            </div>
            <div class="card-footer bg-white border-0">
                <button class="btn btn-success btn-sm w-100">+ Tambah ke Keranjang</button>
            </div>
        </div>
    </div>

    <!-- Product 3 -->
    <div class="col-md-3 mb-4">
        <div class="card border-0 shadow-sm h-100">
            <div class="bg-light text-center p-4">
                <span style="font-size: 4rem;">🧴</span>
            </div>
            <div class="card-body">
                <h6 class="card-title">Sabun Cuci Piring</h6>
                <p class="text-muted small mb-2">800ml</p>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold text-success">Rp 18.000</span>
                    <span class="badge bg-success">Stok: 90</span>
                </div>
            </div>
            <div class="card-footer bg-white border-0">
                <button class="btn btn-success btn-sm w-100">+ Tambah ke Keranjang</button>
            </div>
        </div>
    </div>

    <!-- Product 4 -->
    <div class="col-md-3 mb-4">
        <div class="card border-0 shadow-sm h-100">
            <div class="bg-light text-center p-4">
                <span style="font-size: 4rem;">🧺</span>
            </div>
            <div class="card-body">
                <h6 class="card-title">Deterjen Cair</h6>
                <p class="text-muted small mb-2">1 Liter</p>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold text-success">Rp 28.000</span>
                    <span class="badge bg-success">Stok: 65</span>
                </div>
            </div>
            <div class="card-footer bg-white border-0">
                <button class="btn btn-success btn-sm w-100">+ Tambah ke Keranjang</button>
            </div>
        </div>
    </div>

    <!-- Product 5 -->
    <div class="col-md-3 mb-4">
        <div class="card border-0 shadow-sm h-100">
            <div class="bg-light text-center p-4">
                <span style="font-size: 4rem;">🪣</span>
            </div>
            <div class="card-body">
                <h6 class="card-title">Ember Plastik</h6>
                <p class="text-muted small mb-2">20 Liter</p>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold text-success">Rp 45.000</span>
                    <span class="badge bg-warning">Stok: 15</span>
                </div>
            </div>
            <div class="card-footer bg-white border-0">
                <button class="btn btn-success btn-sm w-100">+ Tambah ke Keranjang</button>
            </div>
        </div>
    </div>

    <!-- Product 6 -->
    <div class="col-md-3 mb-4">
        <div class="card border-0 shadow-sm h-100">
            <div class="bg-light text-center p-4">
                <span style="font-size: 4rem;">🧴</span>
            </div>
            <div class="card-body">
                <h6 class="card-title">Pembersih Lantai</h6>
                <p class="text-muted small mb-2">800ml</p>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold text-success">Rp 22.000</span>
                    <span class="badge bg-success">Stok: 70</span>
                </div>
            </div>
            <div class="card-footer bg-white border-0">
                <button class="btn btn-success btn-sm w-100">+ Tambah ke Keranjang</button>
            </div>
        </div>
    </div>

    <!-- Product 7 -->
    <div class="col-md-3 mb-4">
        <div class="card border-0 shadow-sm h-100">
            <div class="bg-light text-center p-4">
                <span style="font-size: 4rem;">🧻</span>
            </div>
            <div class="card-body">
                <h6 class="card-title">Tissue Roll</h6>
                <p class="text-muted small mb-2">6 rolls</p>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold text-success">Rp 32.000</span>
                    <span class="badge bg-success">Stok: 85</span>
                </div>
            </div>
            <div class="card-footer bg-white border-0">
                <button class="btn btn-success btn-sm w-100">+ Tambah ke Keranjang</button>
            </div>
        </div>
    </div>

    <!-- Product 8 -->
    <div class="col-md-3 mb-4">
        <div class="card border-0 shadow-sm h-100">
            <div class="bg-light text-center p-4">
                <span style="font-size: 4rem;">🗑️</span>
            </div>
            <div class="card-body">
                <h6 class="card-title">Kantong Sampah</h6>
                <p class="text-muted small mb-2">50 pcs</p>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold text-success">Rp 18.000</span>
                    <span class="badge bg-success">Stok: 120</span>
                </div>
            </div>
            <div class="card-footer bg-white border-0">
                <button class="btn btn-success btn-sm w-100">+ Tambah ke Keranjang</button>
            </div>
        </div>
    </div>
</div>

<!-- Pagination -->
<nav class="mt-4">
    <ul class="pagination justify-content-center">
        <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
</nav>
@endsection
