@extends('layouts.user_type.auth')

@section('content')

<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>Daftar Psikolog</h6>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Psikolog</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Spesialisasi</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- Psikolog 1 -->
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1 align-items-center">
                        <img src="{{ asset('assets/img/team-2.jpg') }}" class="avatar avatar-sm me-3" alt="Psikolog 1">
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">Dr. Sarah Wijaya</h6>
                          <p class="text-xs text-secondary mb-0">sarah@psikolog.com</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0">Konseling Remaja</p>
                      <p class="text-xs text-secondary mb-0">Psikolog Klinis</p>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm bg-gradient-success">Available</span>
                    </td>
                    <td class="align-middle text-center">
                      <button class="btn btn-sm btn-info mb-1" onclick="showDetail('Dr. Sarah Wijaya', 'sarah@psikolog.com', 'Konseling Remaja', 'Psikolog Klinis', '8 tahun')">Detail</button>
                      <a href="{{ route('psikolog_konsultasi', ['nama' => 'Dr. Sarah Wijaya']) }}" class="btn btn-sm btn-success">Konsultasi</a>

                    </td>
                  </tr>

                  <!-- Psikolog 2 -->
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1 align-items-center">
                        <img src="{{ asset('assets/img/team-3.jpg') }}" class="avatar avatar-sm me-3" alt="Psikolog 2">
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">Dr. Budi Santoso</h6>
                          <p class="text-xs text-secondary mb-0">budi@psikolog.com</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0">Psikologi Anak</p>
                      <p class="text-xs text-secondary mb-0">Psikolog Pendidikan</p>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm bg-gradient-secondary">Busy</span>
                    </td>
                    <td class="align-middle text-center">
                      <button class="btn btn-sm btn-info mb-1" onclick="showDetail('Dr. Budi Santoso', 'budi@psikolog.com', 'Psikologi Anak', 'Psikolog Pendidikan', '12 tahun')">Detail</button>
                      <a href="{{ route('psikolog_konsultasi', ['nama' => 'Dr. Budi Santoso']) }}" class="btn btn-sm btn-success">Konsultasi</a>
                    </td>
                  </tr>

                  <!-- Psikolog 3 -->
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1 align-items-center">
                        <img src="{{ asset('assets/img/team-4.jpg') }}" class="avatar avatar-sm me-3" alt="Psikolog 3">
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">Dr. Angga saputra</h6>
                          <p class="text-xs text-secondary mb-0">dina@psikolog.com</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0">Psikologi Dewasa</p>
                      <p class="text-xs text-secondary mb-0">Psikoterapi</p>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm bg-gradient-success">Available</span>
                    </td>
                    <td class="align-middle text-center">
                      <button class="btn btn-sm btn-info mb-1" onclick="showDetail('Dr. Dina Anggraini', 'dina@psikolog.com', 'Psikologi Dewasa', 'Psikoterapi', '5 tahun', )">Detail</button>
                      <a href="{{ route('psikolog_konsultasi', ['nama' => 'Dr. Angga Saputra']) }}" class="btn btn-sm btn-success">Konsultasi</a>
                    </td>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<!-- Modal -->
<div class="modal fade" id="psikologDetailModal" tabindex="-1" aria-labelledby="psikologDetailModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="psikologDetailModalLabel">Detail Psikolog</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><strong>Nama:</strong> <span id="detailNama"></span></p>
        <p><strong>Email:</strong> <span id="detailEmail"></span></p>
        <p><strong>Spesialisasi:</strong> <span id="detailSpesialisasi"></span></p>
        <p><strong>Jenis:</strong> <span id="detailJenis"></span></p>
        <p><strong>Pengalaman:</strong> <span id="detailPengalaman"></span></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<script>
  function showDetail(nama, email, spesialisasi, jenis, pengalaman) {
    document.getElementById('detailNama').textContent = nama;
    document.getElementById('detailEmail').textContent = email;
    document.getElementById('detailSpesialisasi').textContent = spesialisasi;
    document.getElementById('detailJenis').textContent = jenis;
    document.getElementById('detailPengalaman').textContent = pengalaman;
    var detailModal = new bootstrap.Modal(document.getElementById('psikologDetailModal'));
    detailModal.show();
  }
</script>

@endsection
