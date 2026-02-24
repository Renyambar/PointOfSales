@extends('layouts.app')

@section('content')
<nav aria-label="breadcrumb" class="mb-4">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active">Baby & Kid</li>
    </ol>
</nav>

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="mb-1">🧸 Baby & Kid</h2>
        <p class="text-muted">Kebutuhan bayi dan anak berkualitas</p>
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
                <span style="font-size: 4rem;">🍼</span>
            </div>
            <div class="card-body">
                <h6 class="card-title">Susu Formula Bayi</h6>
                <p class="text-muted small mb-2">400gr</p>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold text-warning">Rp 125.000</span>
                    <span class="badge bg-success">Stok: 40</span>
                </div>
            </div>
            <div class="card-footer bg-white border-0">
                <button class="btn btn-warning btn-sm w-100">+ Tambah ke Keranjang</button>
            </div>
        </div>
    </div>

    <!-- Product 2 -->
    <div class="col-md-3 mb-4">
        <div class="card border-0 shadow-sm h-100">
            <div class="bg-light text-center p-4">
                <span style="font-size: 4rem;">🧒</span>
            </div>
            <div class="card-body">
                <h6 class="card-title">Popok Bayi</h6>
                <p class="text-muted small mb-2">M 50 pcs</p>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold text-warning">Rp 98.000</span>
                    <span class="badge bg-success">Stok: 60</span>
                </div>
            </div>
            <div class="card-footer bg-white border-0">
                <button class="btn btn-warning btn-sm w-100">+ Tambah ke Keranjang</button>
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
                <h6 class="card-title">Baby Lotion</h6>
                <p class="text-muted small mb-2">200ml</p>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold text-warning">Rp 35.000</span>
                    <span class="badge bg-success">Stok: 55</span>
                </div>
            </div>
            <div class="card-footer bg-white border-0">
                <button class="btn btn-warning btn-sm w-100">+ Tambah ke Keranjang</button>
            </div>
        </div>
    </div>

    <!-- Product 4 -->
    <div class="col-md-3 mb-4">
        <div class="card border-0 shadow-sm h-100">
            <div class="bg-light text-center p-4">
                <span style="font-size: 4rem;">🧸</span>
            </div>
            <div class="card-body">
                <h6 class="card-title">Mainan Edukasi</h6>
                <p class="text-muted small mb-2">1 set</p>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold text-warning">Rp 85.000</span>
                    <span class="badge bg-warning">Stok: 12</span>
                </div>
            </div>
            <div class="card-footer bg-white border-0">
                <button class="btn btn-warning btn-sm w-100">+ Tambah ke Keranjang</button>
            </div>
        </div>
    </div>

    <!-- Product 5 -->
    <div class="col-md-3 mb-4">
        <div class="card border-0 shadow-sm h-100">
            <div class="bg-light text-center p-4">
                <span style="font-size: 4rem;">👶</span>
            </div>
            <div class="card-body">
                <h6 class="card-title">Baby Wipes</h6>
                <p class="text-muted small mb-2">80 sheets</p>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold text-warning">Rp 28.000</span>
                    <span class="badge bg-success">Stok: 100</span>
                </div>
            </div>
            <div class="card-footer bg-white border-0">
                <button class="btn btn-warning btn-sm w-100">+ Tambah ke Keranjang</button>
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
                <h6 class="card-title">Baby Shampoo</h6>
                <p class="text-muted small mb-2">200ml</p>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold text-warning">Rp 32.000</span>
                    <span class="badge bg-success">Stok: 70</span>
                </div>
            </div>
            <div class="card-footer bg-white border-0">
                <button class="btn btn-warning btn-sm w-100">+ Tambah ke Keranjang</button>
            </div>
        </div>
    </div>

    <!-- Product 7 -->
    <div class="col-md-3 mb-4">
        <div class="card border-0 shadow-sm h-100">
            <div class="bg-light text-center p-4">
                <span style="font-size: 4rem;">🍪</span>
            </div>
            <div class="card-body">
                <h6 class="card-title">Biskuit Bayi</h6>
                <p class="text-muted small mb-2">150gr</p>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold text-warning">Rp 22.000</span>
                    <span class="badge bg-success">Stok: 80</span>
                </div>
            </div>
            <div class="card-footer bg-white border-0">
                <button class="btn btn-warning btn-sm w-100">+ Tambah ke Keranjang</button>
            </div>
        </div>
    </div>

    <!-- Product 8 -->
    <div class="col-md-3 mb-4">
        <div class="card border-0 shadow-sm h-100">
            <div class="bg-light text-center p-4">
                <span style="font-size: 4rem;">🧷</span>
            </div>
            <div class="card-body">
                <h6 class="card-title">Cotton Buds Bayi</h6>
                <p class="text-muted small mb-2">100 pcs</p>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold text-warning">Rp 15.000</span>
                    <span class="badge bg-success">Stok: 90</span>
                </div>
            </div>
            <div class="card-footer bg-white border-0">
                <button class="btn btn-warning btn-sm w-100">+ Tambah ke Keranjang</button>
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
