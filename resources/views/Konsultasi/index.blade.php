@extends('layouts.user_type.pasien')

@section('content')
    <h2>Booking Konsultasi</h2>

    @if (session('success'))
        <div class="alert alert-success mt-2">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('konsultasi.store') }}">
        @csrf

        <div class="mb-3">
            <label for="nama_ps" class="form-label">Nama Pemesan:</label>
            <input type="text" name="nama_ps" id="nama_ps" class="form-control" value="{{ old('nama_ps') }}">
            @error('nama_ps')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
            @error('email')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="psikolog_id" class="form-label">Pilih Psikolog:</label>
            <select name="psikolog_id" id="psikolog_id" class="form-control">
                <option value="">-- Pilih Psikolog --</option>
                @foreach ($psikologs as $id => $nama)
                    <option value="{{ $id }}" {{ old('psikolog_id') == $id ? 'selected' : '' }}>
                        {{ $nama }}
                    </option>
                @endforeach
            </select>
            @error('psikolog_id')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="jadwal" class="form-label">Tanggal Konsultasi:</label>
            <input type="date" name="jadwal" id="jadwal" class="form-control" value="{{ old('jadwal') }}">
            @error('jadwal')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="jam" class="form-label">Jam Konsultasi:</label>
            <input type="time" name="jam" id="jam" class="form-control" value="{{ old('jam') }}">
            @error('jam')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="keluhan" class="form-label">Keluhan:</label>
            <textarea name="keluhan" id="keluhan" rows="3" class="form-control" placeholder="Tuliskan keluhan Anda">{{ old('keluhan') }}</textarea>
            @error('keluhan')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Buat Jadwal</button>
    </form>
@endsection