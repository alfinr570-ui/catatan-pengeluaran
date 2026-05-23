@extends('layout.master')

@section('content')

<div class="card">

    <div class="card-header bg-warning">
        <h4>Edit Pengeluaran</h4>
    </div>

    <div class="card-body">

        <form action="/pengeluaran/{{ $pengeluaran->id }}"
              method="POST">

            @csrf
            @method('PUT')

            
            <div class="mb-3">

                <label class="form-label">
                    Nama Pengeluaran
                </label>

                <input type="text"
                       name="nama_pengeluaran"
                       class="form-control @error('nama_pengeluaran') is-invalid @enderror"
                       value="{{ old('nama_pengeluaran', $pengeluaran->nama_pengeluaran) }}">

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

        <option value="Makanan"
            {{ $pengeluaran->kategori == 'Makanan' ? 'selected' : '' }}>
            Makanan
        </option>

        <option value="Transportasi"
            {{ $pengeluaran->kategori == 'Transportasi' ? 'selected' : '' }}>
            Transportasi
        </option>

        <option value="Kuliah"
            {{ $pengeluaran->kategori == 'Kuliah' ? 'selected' : '' }}>
            Kuliah
        </option>

        <option value="Kos"
            {{ $pengeluaran->kategori == 'Kos' ? 'selected' : '' }}>
            Kos
        </option>

        <option value="Hiburan"
            {{ $pengeluaran->kategori == 'Hiburan' ? 'selected' : '' }}>
            Hiburan
        </option>

    </select>

</div>


<div class="mb-3">

    <label class="form-label">
        Tanggal Pengeluaran
    </label>

    <input type="date"
           name="tanggal_pengeluaran"
           class="form-control"
           value="{{ $pengeluaran->tanggal_pengeluaran }}">

</div>

            
            <div class="mb-3">

                <label class="form-label">
                    Nominal
                </label>

                <input type="number"
                       name="nominal"
                       class="form-control @error('nominal') is-invalid @enderror"
                       value="{{ old('nominal', $pengeluaran->nominal) }}">

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
                          class="form-control">{{ old('deskripsi', $pengeluaran->deskripsi) }}</textarea>

            </div>

            
            <button type="submit"
                    class="btn btn-warning">

                Update Data

            </button>

            <a href="/pengeluaran"
               class="btn btn-secondary">

               Kembali

            </a>

        </form>

    </div>

</div>

@endsection