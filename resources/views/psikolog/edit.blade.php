@extends('layouts.user_type.admin')

@section('content')
<div class="container">
    <h1>Edit Psikolog</h1>
    <form action="{{ route('psikolog.update', $psikolog->psikolog_id) }}" method="POST">
        @csrf
        @method('PUT')
        {{-- Tampilkan foto lama jika ada --}}
        <div class="mb-3">
            <label>Foto Saat Ini</label><br>
            @if($psikolog->foto)
                <img src="{{ asset('storage/' . $psikolog->foto) }}" alt="Foto Psikolog" width="100" height="100" style="object-fit: cover; border-radius: 8px;">
            @else
                <p class="text-muted">Tidak ada foto.</p>
            @endif
        </div>
        {{-- Upload foto baru --}}
        <div class="mb-3">
            <label>Ganti Foto</label>
            <input type="file" name="foto" class="form-control">
        </div>
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $psikolog->nama }}" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ $psikolog->email }}" required>
        </div>
        <button class="btn btn-primary">Update</button>
        <a href="{{ route('psikolog.tabelpsikolog') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
