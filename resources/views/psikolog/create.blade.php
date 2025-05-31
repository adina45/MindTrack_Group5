@extends('layouts.user_type.admin')

@section('content')
<div class="container">
    <h1>Tambah Psikolog</h1>
    <form action="{{ route('psikolog.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <button class="btn btn-success">Simpan</button>
        <a href="{{ route('psikolog.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection

