@extends('layouts.app')

@section('content')
<div class="row">
    <!-- Products Section -->
    <div class="col-md-8">
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-header bg-white border-0 py-3">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Pilih Produk</h5>
                    <div class="d-flex gap-2">
                        <input type="text" class="form-control form-control-sm" placeholder="Cari produk..." style="width: 200px;">
                        <input type="text" class="form-control form-control-sm" placeholder="Scan barcode..." style="width: 150px;">
                    </div>
                </div>
            </div>
            <div class="card-body">
                <!-- Category Filter -->
                <div class="mb-3">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-primary btn-sm">Semua</button>
                        <button type="button" class="btn btn-outline-primary btn-sm">Food & Beverage</button>
                        <button type="button" class="btn btn-outline-primary btn-sm">Beauty & Health</button>
                        <button type="button" class="btn btn-outline-primary btn-sm">Home Care</button>
                        <button type="button" class="btn btn-outline-primary btn-sm">Baby & Kid</button>
                    </div>
                </div>

                <!-- Products Grid -->
                <div class="row g-2">
                    <div class="col-md-3">
                        <div class="card border h-100 product-item" style="cursor: pointer;">
                            <div class="card-body p-2 text-center">
                                <span style="font-size: 2rem;">☕</span>
                                <p class="small mb-1 text-truncate">Kopi Arabica</p>
                                <strong class="text-primary small">Rp 85.000</strong>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border h-100 product-item" style="cursor: pointer;">
                            <div class="card-body p-2 text-center">
                                <span style="font-size: 2rem;">🥛</span>
                                <p class="small mb-1 text-truncate">Susu Full Cream</p>
                                <strong class="text-primary small">Rp 18.500</strong>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border h-100 product-item" style="cursor: pointer;">
                            <div class="card-body p-2 text-center">
                                <span style="font-size: 2rem;">🍞</span>
                                <p class="small mb-1 text-truncate">Roti Tawar</p>
                                <strong class="text-primary small">Rp 15.000</strong>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border h-100 product-item" style="cursor: pointer;">
                            <div class="card-body p-2 text-center">
                                <span style="font-size: 2rem;">🧴</span>
                                <p class="small mb-1 text-truncate">Facial Wash</p>
                                <strong class="text-primary small">Rp 45.000</strong>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border h-100 product-item" style="cursor: pointer;">
                            <div class="card-body p-2 text-center">
                                <span style="font-size: 2rem;">💊</span>
                                <p class="small mb-1 text-truncate">Vitamin C</p>
                                <strong class="text-primary small">Rp 55.000</strong>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border h-100 product-item" style="cursor: pointer;">
                            <div class="card-body p-2 text-center">
                                <span style="font-size: 2rem;">🧹</span>
                                <p class="small mb-1 text-truncate">Sapu Ijuk</p>
                                <strong class="text-primary small">Rp 35.000</strong>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border h-100 product-item" style="cursor: pointer;">
                            <div class="card-body p-2 text-center">
                                <span style="font-size: 2rem;">🍼</span>
                                <p class="small mb-1 text-truncate">Susu Formula</p>
                                <strong class="text-primary small">Rp 125.000</strong>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border h-100 product-item" style="cursor: pointer;">
                            <div class="card-body p-2 text-center">
                                <span style="font-size: 2rem;">🧺</span>
                                <p class="small mb-1 text-truncate">Deterjen Cair</p>
                                <strong class="text-primary small">Rp 28.000</strong>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border h-100 product-item" style="cursor: pointer;">
                            <div class="card-body p-2 text-center">
                                <span style="font-size: 2rem;">🍜</span>
                                <p class="small mb-1 text-truncate">Mie Instan</p>
                                <strong class="text-primary small">Rp 17.500</strong>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border h-100 product-item" style="cursor: pointer;">
                            <div class="card-body p-2 text-center">
                                <span style="font-size: 2rem;">🧻</span>
                                <p class="small mb-1 text-truncate">Tissue Roll</p>
                                <strong class="text-primary small">Rp 32.000</strong>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border h-100 product-item" style="cursor: pointer;">
                            <div class="card-body p-2 text-center">
                                <span style="font-size: 2rem;">🧸</span>
                                <p class="small mb-1 text-truncate">Mainan Edukasi</p>
                                <strong class="text-primary small">Rp 85.000</strong>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card border h-100 product-item" style="cursor: pointer;">
                            <div class="card-body p-2 text-center">
                                <span style="font-size: 2rem;">🍚</span>
                                <p class="small mb-1 text-truncate">Beras 5kg</p>
                                <strong class="text-primary small">Rp 75.000</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cart Section -->
    <div class="col-md-4">
        <div class="card border-0 shadow-sm sticky-top" style="top: 20px;">
            <div class="card-header bg-primary text-white py-3">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">🛒 Keranjang</h5>
                    <span class="badge bg-white text-primary">3 items</span>
                </div>
            </div>
            <div class="card-body p-0">
                <!-- Cart Items -->
                <div class="p-3" style="max-height: 300px; overflow-y: auto;">
                    <div class="d-flex justify-content-between align-items-center mb-3 pb-3 border-bottom">
                        <div class="d-flex align-items-center">
                            <span style="font-size: 1.5rem;" class="me-2">☕</span>
                            <div>
                                <p class="mb-0 small fw-semibold">Kopi Arabica</p>
                                <small class="text-muted">Rp 85.000</small>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="btn-group btn-group-sm me-2">
                                <button class="btn btn-outline-secondary">-</button>
                                <span class="btn btn-outline-secondary disabled">2</span>
                                <button class="btn btn-outline-secondary">+</button>
                            </div>
                            <strong class="text-primary">Rp 170.000</strong>
                            <button class="btn btn-sm text-danger ms-2">×</button>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-3 pb-3 border-bottom">
                        <div class="d-flex align-items-center">
                            <span style="font-size: 1.5rem;" class="me-2">🥛</span>
                            <div>
                                <p class="mb-0 small fw-semibold">Susu Full Cream</p>
                                <small class="text-muted">Rp 18.500</small>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="btn-group btn-group-sm me-2">
                                <button class="btn btn-outline-secondary">-</button>
                                <span class="btn btn-outline-secondary disabled">1</span>
                                <button class="btn btn-outline-secondary">+</button>
                            </div>
                            <strong class="text-primary">Rp 18.500</strong>
                            <button class="btn btn-sm text-danger ms-2">×</button>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            <span style="font-size: 1.5rem;" class="me-2">🍞</span>
                            <div>
                                <p class="mb-0 small fw-semibold">Roti Tawar</p>
                                <small class="text-muted">Rp 15.000</small>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="btn-group btn-group-sm me-2">
                                <button class="btn btn-outline-secondary">-</button>
                                <span class="btn btn-outline-secondary disabled">1</span>
                                <button class="btn btn-outline-secondary">+</button>
                            </div>
                            <strong class="text-primary">Rp 15.000</strong>
                            <button class="btn btn-sm text-danger ms-2">×</button>
                        </div>
                    </div>
                </div>

                <!-- Summary -->
                <div class="bg-light p-3">
                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-muted">Subtotal</span>
                        <span>Rp 203.500</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-muted">Diskon</span>
                        <span class="text-success">- Rp 0</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span class="text-muted">PPN (11%)</span>
                        <span>Rp 22.385</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <strong>Total</strong>
                        <strong class="text-primary fs-5">Rp 225.885</strong>
                    </div>
                </div>

                <!-- Payment -->
                <div class="p-3">
                    <div class="mb-3">
                        <label class="form-label small">Metode Pembayaran</label>
                        <select class="form-select form-select-sm">
                            <option value="cash">Tunai</option>
                            <option value="debit">Kartu Debit</option>
                            <option value="credit">Kartu Kredit</option>
                            <option value="qris">QRIS</option>
                            <option value="ewallet">E-Wallet</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label small">Uang Diterima</label>
                        <input type="number" class="form-control form-control-sm" placeholder="Rp 0" value="250000">
                    </div>

                    <div class="d-flex justify-content-between mb-3 p-2 bg-success bg-opacity-10 rounded">
                        <span>Kembalian</span>
                        <strong class="text-success">Rp 24.115</strong>
                    </div>

                    <div class="d-grid gap-2">
                        <button class="btn btn-success btn-lg">
                            💳 Proses Pembayaran
                        </button>
                        <div class="btn-group">
                            <button class="btn btn-outline-secondary btn-sm">🔄 Reset</button>
                            <button class="btn btn-outline-secondary btn-sm">📋 Hold</button>
                            <button class="btn btn-outline-secondary btn-sm">🖨️ Print</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .product-item:hover {
        background-color: #f8f9fa;
        border-color: #0d6efd !important;
    }
</style>
@endsection
