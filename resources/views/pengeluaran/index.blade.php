@extends('layout.master')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <h2>Daftar Pengeluaran</h2>

    <a href="/pengeluaran/create"
       class="btn btn-primary text-white rounded-3 shadow-sm px-4 py-2">

       + Tambah Data
    </a>

</div>


<div class="card shadow-sm mb-4 rounded-4">

    <div class="card-body p-4">

        <h5 class="text-secondary mb-2">
            Total Seluruh Pengeluaran
        </h5>

        <h1 class="fw-bold text-danger">

            Rp {{ number_format($total_pengeluaran, 0, ',', '.') }}

        </h1>

    </div>

</div>
<div class="table-responsive">
<table class="table table-hover align-middle">
</div>
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Nama Pengeluaran</th>
            <th>Kategori</th>
            <th>Tanggal</th>
            <th>Nominal</th>
            <th>Deskripsi</th>           
            <th width="200">Aksi</th>
        </tr>
    </thead>

    <tbody>

        @forelse($data_pengeluaran as $item)

        <tr class="{{ $item->nominal > 500000 ? 'table-danger' : '' }}">
            <td>{{ $loop->iteration }}</td>

            <td>{{ $item->nama_pengeluaran }}</td>
            <td>
    <span class="badge bg-primary">
        {{ $item->kategori }}
    </span>
</td>

<td>

    {{ \Carbon\Carbon::parse($item->tanggal_pengeluaran)
        ->translatedFormat('l, d F Y') }}

</td>

            <td>
                Rp {{ number_format($item->nominal, 0, ',', '.') }}
            </td>

            <td>{{ $item->deskripsi }}</td>

            <td>

                
                <a href="/pengeluaran/{{ $item->id }}/edit"
                   class="btn btn-warning btn-sm rounded-3">
                   Edit
                </a>

                
                <form action="/pengeluaran/{{ $item->id }}"
                      method="POST"
                      class="d-inline">

                    @csrf
                    @method('DELETE')

                    <button type="submit"
                            class="btn btn-danger btn-sm rounded-3"
                            onclick="return confirm('Yakin ingin menghapus data ini?')">

                        Hapus

                    </button>

                </form>

            </td>
        </tr>

        @empty

        <tr>
            <td colspan="5" class="text-center">
                Data pengeluaran masih kosong
            </td>
        </tr>

        @endforelse

    </tbody>

</table>

@endsection