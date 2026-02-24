@extends('layouts.app')

@section('content')
<nav aria-label="breadcrumb" class="mb-4">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active">Beauty & Health</li>
    </ol>
</nav>

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="mb-1">💄 Beauty & Health</h2>
        <p class="text-muted">Produk kecantikan dan kesehatan terbaik</p>
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
                <span style="font-size: 4rem;">🧴</span>
            </div>
            <div class="card-body">
                <h6 class="card-title">Facial Wash Gentle</h6>
                <p class="text-muted small mb-2">100ml</p>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold text-danger">Rp 45.000</span>
                    <span class="badge bg-success">Stok: 60</span>
                </div>
            </div>
            <div class="card-footer bg-white border-0">
                <button class="btn btn-danger btn-sm w-100">+ Tambah ke Keranjang</button>
            </div>
        </div>
    </div>

    <!-- Product 2 -->
    <div class="col-md-3 mb-4">
        <div class="card border-0 shadow-sm h-100">
            <div class="bg-light text-center p-4">
                <span style="font-size: 4rem;">💊</span>
            </div>
            <div class="card-body">
                <h6 class="card-title">Vitamin C 1000mg</h6>
                <p class="text-muted small mb-2">30 tablet</p>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold text-danger">Rp 55.000</span>
                    <span class="badge bg-success">Stok: 100</span>
                </div>
            </div>
            <div class="card-footer bg-white border-0">
                <button class="btn btn-danger btn-sm w-100">+ Tambah ke Keranjang</button>
            </div>
        </div>
    </div>

    <!-- Product 3 -->
    <div class="col-md-3 mb-4">
        <div class="card border-0 shadow-sm h-100">
            <div class="bg-light text-center p-4">
                <span style="font-size: 4rem;">🪥</span>
            </div>
            <div class="card-body">
                <h6 class="card-title">Sikat Gigi Soft</h6>
                <p class="text-muted small mb-2">3 pcs</p>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold text-danger">Rp 25.000</span>
                    <span class="badge bg-success">Stok: 80</span>
                </div>
            </div>
            <div class="card-footer bg-white border-0">
                <button class="btn btn-danger btn-sm w-100">+ Tambah ke Keranjang</button>
            </div>
        </div>
    </div>

    <!-- Product 4 -->
    <div class="col-md-3 mb-4">
        <div class="card border-0 shadow-sm h-100">
            <div class="bg-light text-center p-4">
                <span style="font-size: 4rem;">🧼</span>
            </div>
            <div class="card-body">
                <h6 class="card-title">Sabun Mandi Cair</h6>
                <p class="text-muted small mb-2">500ml</p>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold text-danger">Rp 32.000</span>
                    <span class="badge bg-success">Stok: 75</span>
                </div>
            </div>
            <div class="card-footer bg-white border-0">
                <button class="btn btn-danger btn-sm w-100">+ Tambah ke Keranjang</button>
            </div>
        </div>
    </div>

    <!-- Product 5 -->
    <div class="col-md-3 mb-4">
        <div class="card border-0 shadow-sm h-100">
            <div class="bg-light text-center p-4">
                <span style="font-size: 4rem;">💅</span>
            </div>
            <div class="card-body">
                <h6 class="card-title">Hand Cream</h6>
                <p class="text-muted small mb-2">50ml</p>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold text-danger">Rp 28.000</span>
                    <span class="badge bg-warning">Stok: 20</span>
                </div>
            </div>
            <div class="card-footer bg-white border-0">
                <button class="btn btn-danger btn-sm w-100">+ Tambah ke Keranjang</button>
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
                <h6 class="card-title">Sunscreen SPF 50</h6>
                <p class="text-muted small mb-2">30ml</p>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold text-danger">Rp 89.000</span>
                    <span class="badge bg-success">Stok: 40</span>
                </div>
            </div>
            <div class="card-footer bg-white border-0">
                <button class="btn btn-danger btn-sm w-100">+ Tambah ke Keranjang</button>
            </div>
        </div>
    </div>

    <!-- Product 7 -->
    <div class="col-md-3 mb-4">
        <div class="card border-0 shadow-sm h-100">
            <div class="bg-light text-center p-4">
                <span style="font-size: 4rem;">🩹</span>
            </div>
            <div class="card-body">
                <h6 class="card-title">Plester Luka</h6>
                <p class="text-muted small mb-2">20 pcs</p>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold text-danger">Rp 12.000</span>
                    <span class="badge bg-success">Stok: 150</span>
                </div>
            </div>
            <div class="card-footer bg-white border-0">
                <button class="btn btn-danger btn-sm w-100">+ Tambah ke Keranjang</button>
            </div>
        </div>
    </div>

    <!-- Product 8 -->
    <div class="col-md-3 mb-4">
        <div class="card border-0 shadow-sm h-100">
            <div class="bg-light text-center p-4">
                <span style="font-size: 4rem;">🧴</span>
            </div>
            <div class="card-body">
                <h6 class="card-title">Shampoo Anti Ketombe</h6>
                <p class="text-muted small mb-2">340ml</p>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold text-danger">Rp 48.000</span>
                    <span class="badge bg-success">Stok: 55</span>
                </div>
            </div>
            <div class="card-footer bg-white border-0">
                <button class="btn btn-danger btn-sm w-100">+ Tambah ke Keranjang</button>
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
