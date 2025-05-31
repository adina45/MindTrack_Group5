@extends('layouts.user_type.pasien')

@section('content')
    <h2>Booking Konsultasi</h2>

    @if(session('success'))
        <div class="alert alert-success mt-2">
            {{ session('success') }}
        </div>
    @endif

    <div class="row">
        <!-- Card Form Mood -->
        <div class="col-lg-6 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <form method="POST" action="{{ route('konsultasi.store') }}">
                        @csrf

                        <div class="mb-4">
                            <div class="mb-3">
                                <label for="nama_ps" class="form-label">Keluhan:</label>
                                <input type="text" name="nama_ps" id="nama_ps" class="form-control" value="{{ old('nama_ps') }}">
                            </div>
                        
                            <div class="mb-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
                            </div>
                        
                            <div class="mb-3">
                                <label for="nama_psikolog" class="form-label">Pilih Psikolog:</label>
                                <input type="text" name="nama_psikolog" id="nama_psikolog" class="form-control" value="{{ old('nama_psikolog') }}">
                            </div>
                        
                            <div class="mb-3">
                                <label for="tanggal" class="form-label">Tanggal:</label>
                                <input type="date" name="tanggal" id="tanggal" class="form-control" value="{{ old('tanggal') }}">
                            </div>
                        
                            <div class="mb-3">
                                <label for="jam" class="form-label">Jam:</label>
                                <input type="time" name="jam" id="jam" class="form-control" value="{{ old('jam') }}">
                            </div>
                        
                            <div class="mb-3">
                                <label for="keluhan" class="form-label">Keluhan:</label>
                                <textarea name="keluhan" id="keluhan" class="form-control" rows="3" placeholder="Apa keluhanmu?"></textarea>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Card Gambar -->
        <div class="col-lg-6 mb-4">
            <div class="card h-100">
                <div class="card-body p-3 d-flex align-items-center justify-content-center">
                    <div class="position-relative text-center w-100">
                        <a href="/psikolog"><button>Lihat Daftar Psikolog</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


