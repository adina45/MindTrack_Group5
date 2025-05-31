@extends('layouts.user_type.admin')

@section('content')
<div class="container">
    <h1>Edit Psikolog</h1>
    <form action="{{ route('psikolog.update', $psikolog->psikolog_id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $psikolog->nama }}" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ $psikolog->email }}" required>
        </div>
        <button class="btn btn-primary">Update</button>
        <a href="{{ route('psikolog.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
