@extends('layout.master')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <h2>Daftar Pengeluaran</h2>

    <a href="/pengeluaran/create"
       class="btn btn-primary">
       + Tambah Data
    </a>

</div>

<table class="table table-bordered table-striped">

    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Nama Pengeluaran</th>
            <th>Nominal</th>
            <th>Deskripsi</th>
            <th width="200">Aksi</th>
        </tr>
    </thead>

    <tbody>

        @forelse($data_pengeluaran as $item)

        <tr>
            <td>{{ $loop->iteration }}</td>

            <td>{{ $item->nama_pengeluaran }}</td>

            <td>
                Rp {{ number_format($item->nominal, 0, ',', '.') }}
            </td>

            <td>{{ $item->deskripsi }}</td>

            <td>

                
                <a href="/pengeluaran/{{ $item->id }}/edit"
                   class="btn btn-warning btn-sm">
                   Edit
                </a>

                
                <form action="/pengeluaran/{{ $item->id }}"
                      method="POST"
                      class="d-inline">

                    @csrf
                    @method('DELETE')

                    <button type="submit"
                            class="btn btn-danger btn-sm"
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