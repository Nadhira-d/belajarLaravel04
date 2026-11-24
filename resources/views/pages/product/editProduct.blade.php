@extends('layouts.master')

@section('content')
<div class="card">
    <div class="card-header">Edit Data Produk</div>
    <div class="card-body">
        <form action="/product/{{ $data_produk->id_product }}" method="POST">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label class="form-label">Nama Produk</label>
                        <input type="text" name="name_product" class="form-control"
                            value="{{ old('name_product', $data_produk->name_product) }}">
                        @error('name_product')
                        <div id="nameHelp" class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="mb-3">
                        <label class="form-label">Stock Produk</label>
                        <input type="number" name="stock_product" class="form-control"
                            value="{{ old('stock_product', $data_produk->stock_product) }}">
                        @error('stock_product')
                        <div id="stockHelp" class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="mb-3">
                        <label class="form-label">Harga Produk</label>
                        <input type="number" name="price_product" class="form-control"
                            value="{{ old('price_product', $data_produk->price_product) }}">
                        @error('price_product')
                        <div id="priceHelp" class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Deskripsi Produk</label>
                <textarea name="desc_product" class="form-control" rows="3">{{ old('desc_product', $data_produk->desc_product) }}</textarea>
                @error('desc_product')
                <div id="descHelp" class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="/product" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection