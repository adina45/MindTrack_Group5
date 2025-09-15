@extends('layouts.user_type.auth')

@section('content')
<main class="main-content">
  <div class="container py-4">
    <h3>Form Konsultasi dengan {{ $nama }}</h3>
    <p>Silakan isi form berikut untuk memulai konsultasi dengan psikolog.</p>

    <!-- Contoh Form -->
    <form action="#" method="POST">
      @csrf
      <div class="mb-3">
        <label for="topik" class="form-label">Topik Konsultasi</label>
        <input type="text" class="form-control" id="topik" name="topik" required>
      </div>
      <div class="mb-3">
        <label for="deskripsi" class="form-label">Deskripsi</label>
        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" required></textarea>
      </div>
      <button type="submit" class="btn btn-success">Kirim</button>
    </form>
  </div>
</main>
@endsection
