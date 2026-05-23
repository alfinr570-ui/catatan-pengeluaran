@extends('layout.master')

@section('content')

<div class="card">

    <div class="card-header bg-primary text-white">
        <h4>Tambah Pengeluaran</h4>
    </div>

    <div class="card-body">

        <form action="/pengeluaran/store"
              method="POST">

            @csrf

            
            <div class="mb-3">

                <label class="form-label">
                    Nama Pengeluaran
                </label>

                <input type="text"
                       name="nama_pengeluaran"
                       class="form-control @error('nama_pengeluaran') is-invalid @enderror"
                       value="{{ old('nama_pengeluaran') }}">

                @error('nama_pengeluaran')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            
<div class="mb-3">

    <label class="form-label">
        Kategori
    </label>

    <select name="kategori"
            class="form-select @error('kategori') is-invalid @enderror">

        <option value="">
            -- Pilih Kategori --
        </option>

        <option value="Makanan">Makanan</option>
        <option value="Transportasi">Transportasi</option>
        <option value="Kuliah">Kuliah</option>
        <option value="Kos">Kos</option>
        <option value="Hiburan">Hiburan</option>

    </select>

   
<div class="mb-3">

    <label class="form-label">
        Tanggal Pengeluaran
    </label>

    <input type="date"
           name="tanggal_pengeluaran"
           class="form-control @error('tanggal_pengeluaran') is-invalid @enderror"
           value="{{ date('Y-m-d') }}">

    @error('tanggal_pengeluaran')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror

</div>

    @error('kategori')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror

</div>

            
            <div class="mb-3">

                <label class="form-label">
                    Nominal
                </label>

                <input type="number"
                       name="nominal"
                       class="form-control @error('nominal') is-invalid @enderror"
                       value="{{ old('nominal') }}">

                @error('nominal')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            
            <div class="mb-3">

                <label class="form-label">
                    Deskripsi
                </label>

                <textarea name="deskripsi"
                          rows="5"
                          class="form-control">{{ old('deskripsi') }}</textarea>

            </div>

            
            <button type="submit"
                    class="btn btn-success">

                Simpan Data

            </button>

            <a href="/pengeluaran"
               class="btn btn-secondary">

               Kembali

            </a>

        </form>

    </div>

</div>

@endsection