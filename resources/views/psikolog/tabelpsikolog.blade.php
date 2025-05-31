@extends('layouts.user_type.admin')

@section('content')
<div class="container">
    <h1>Daftar Psikolog</h1>
    <a href="{{ route('psikolog.create') }}" class="btn btn-primary mb-3">Tambah Psikolog</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Foto</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($psikologs as $psikolog)
                <tr>
                    <td>
                        @if($psikolog->foto)
                            <img src="{{ asset('storage/' . $psikolog->foto) }}" alt="Foto Psikolog" width="60" height="60" style="object-fit: cover; border-radius: 50%;">
                        @else
                            <span class="text-muted">Tidak ada foto</span>
                        @endif
                    </td>
                    <td>{{ $psikolog->nama }}</td>
                    <td>{{ $psikolog->email }}</td>
                    <td>
                        <a href="{{ route('psikolog.edit', $psikolog->psikolog_id) }}" class="btn btn-sm btn-warning">Edit</a>

                        <form action="{{ route('psikolog.destroy', $psikolog->psikolog_id) }}" method="POST" style="display:inline-block" onsubmit="return confirm('Yakin ingin menghapus?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
