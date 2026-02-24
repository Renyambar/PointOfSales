@extends('layouts.app')

@section('content')
<nav aria-label="breadcrumb" class="mb-4">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active">Food & Beverage</li>
    </ol>
</nav>

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="mb-1">🍔 Food & Beverage</h2>
        <p class="text-muted">Koleksi makanan dan minuman berkualitas</p>
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
                <span style="font-size: 4rem;">☕</span>
            </div>
            <div class="card-body">
                <h6 class="card-title">Kopi Arabica Premium</h6>
                <p class="text-muted small mb-2">250gr</p>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold text-primary">Rp 85.000</span>
                    <span class="badge bg-success">Stok: 50</span>
                </div>
            </div>
            <div class="card-footer bg-white border-0">
                <button class="btn btn-primary btn-sm w-100">+ Tambah ke Keranjang</button>
            </div>
        </div>
    </div>

    <!-- Product 2 -->
    <div class="col-md-3 mb-4">
        <div class="card border-0 shadow-sm h-100">
            <div class="bg-light text-center p-4">
                <span style="font-size: 4rem;">🥛</span>
            </div>
            <div class="card-body">
                <h6 class="card-title">Susu Full Cream</h6>
                <p class="text-muted small mb-2">1 Liter</p>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold text-primary">Rp 18.500</span>
                    <span class="badge bg-success">Stok: 120</span>
                </div>
            </div>
            <div class="card-footer bg-white border-0">
                <button class="btn btn-primary btn-sm w-100">+ Tambah ke Keranjang</button>
            </div>
        </div>
    </div>

    <!-- Product 3 -->
    <div class="col-md-3 mb-4">
        <div class="card border-0 shadow-sm h-100">
            <div class="bg-light text-center p-4">
                <span style="font-size: 4rem;">🍞</span>
            </div>
            <div class="card-body">
                <h6 class="card-title">Roti Tawar Gandum</h6>
                <p class="text-muted small mb-2">400gr</p>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold text-primary">Rp 15.000</span>
                    <span class="badge bg-success">Stok: 35</span>
                </div>
            </div>
            <div class="card-footer bg-white border-0">
                <button class="btn btn-primary btn-sm w-100">+ Tambah ke Keranjang</button>
            </div>
        </div>
    </div>

    <!-- Product 4 -->
    <div class="col-md-3 mb-4">
        <div class="card border-0 shadow-sm h-100">
            <div class="bg-light text-center p-4">
                <span style="font-size: 4rem;">🥤</span>
            </div>
            <div class="card-body">
                <h6 class="card-title">Jus Jeruk Segar</h6>
                <p class="text-muted small mb-2">500ml</p>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold text-primary">Rp 12.000</span>
                    <span class="badge bg-success">Stok: 80</span>
                </div>
            </div>
            <div class="card-footer bg-white border-0">
                <button class="btn btn-primary btn-sm w-100">+ Tambah ke Keranjang</button>
            </div>
        </div>
    </div>

    <!-- Product 5 -->
    <div class="col-md-3 mb-4">
        <div class="card border-0 shadow-sm h-100">
            <div class="bg-light text-center p-4">
                <span style="font-size: 4rem;">🍪</span>
            </div>
            <div class="card-body">
                <h6 class="card-title">Biskuit Coklat</h6>
                <p class="text-muted small mb-2">300gr</p>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold text-primary">Rp 22.000</span>
                    <span class="badge bg-warning">Stok: 15</span>
                </div>
            </div>
            <div class="card-footer bg-white border-0">
                <button class="btn btn-primary btn-sm w-100">+ Tambah ke Keranjang</button>
            </div>
        </div>
    </div>

    <!-- Product 6 -->
    <div class="col-md-3 mb-4">
        <div class="card border-0 shadow-sm h-100">
            <div class="bg-light text-center p-4">
                <span style="font-size: 4rem;">🧃</span>
            </div>
            <div class="card-body">
                <h6 class="card-title">Teh Kotak</h6>
                <p class="text-muted small mb-2">250ml x 6</p>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold text-primary">Rp 15.000</span>
                    <span class="badge bg-success">Stok: 200</span>
                </div>
            </div>
            <div class="card-footer bg-white border-0">
                <button class="btn btn-primary btn-sm w-100">+ Tambah ke Keranjang</button>
            </div>
        </div>
    </div>

    <!-- Product 7 -->
    <div class="col-md-3 mb-4">
        <div class="card border-0 shadow-sm h-100">
            <div class="bg-light text-center p-4">
                <span style="font-size: 4rem;">🍜</span>
            </div>
            <div class="card-body">
                <h6 class="card-title">Mie Instan Goreng</h6>
                <p class="text-muted small mb-2">5 pcs</p>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold text-primary">Rp 17.500</span>
                    <span class="badge bg-success">Stok: 300</span>
                </div>
            </div>
            <div class="card-footer bg-white border-0">
                <button class="btn btn-primary btn-sm w-100">+ Tambah ke Keranjang</button>
            </div>
        </div>
    </div>

    <!-- Product 8 -->
    <div class="col-md-3 mb-4">
        <div class="card border-0 shadow-sm h-100">
            <div class="bg-light text-center p-4">
                <span style="font-size: 4rem;">🍚</span>
            </div>
            <div class="card-body">
                <h6 class="card-title">Beras Premium</h6>
                <p class="text-muted small mb-2">5kg</p>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold text-primary">Rp 75.000</span>
                    <span class="badge bg-success">Stok: 45</span>
                </div>
            </div>
            <div class="card-footer bg-white border-0">
                <button class="btn btn-primary btn-sm w-100">+ Tambah ke Keranjang</button>
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
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
</nav>
@endsection
