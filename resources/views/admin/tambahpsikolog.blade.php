@extends('layouts.user_type.admin')

@section('content')
<div class="container mt-4">
    <h4>Tambah Psikolog</h4>
    <form method="POST" action="{{ route('psikolog.store') }}">
        @csrf
        <div class="form-group mb-3">
            <label>Nama</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label>No. Telepon</label>
            <input type="text" name="phone" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label>Lokasi</label>
            <input type="text" name="location" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label>Tentang Psikolog</label>
            <textarea name="about_me" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('psikolog.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
