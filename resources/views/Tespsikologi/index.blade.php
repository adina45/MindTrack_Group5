@extends('layouts.user_type.pasien')

@section('content')
<div class="container">
    <div class="row">
        {{-- KIRI: FORM PERTANYAAN --}}
        <div class="col-lg-7">
            <h2>Ayo ukur tingkat stress kamu! 😄</h2>

            @if(session('success'))
                <div class="alert alert-success mt-2">
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('tespsikologi.store') }}">
                @csrf

                {{-- Pertanyaan 1 --}}
                <div class="mb-3">
                    <div class="card">
                        <div class="card-body p-3">
                            <p>1. Menjadi marah karena hal-hal kecil/sepele</p>
                            <div class="d-flex justify-content-between mb-3">
                                @for ($i = 1; $i <= 7; $i++)
                                <div class="form-check form-check-inline text-center">
                                    <input class="form-check-input" type="radio" name="q1" id="q1_{{ $i }}" value="{{ $i }}">
                                    <label class="form-check-label" for="q1_{{ $i }}">{{ $i }}</label>
                                </div>
                                @endfor
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between mb-3 px-2">
                                <small>Tidak Sesuai</small>
                                <small>Sangat Sesuai</small>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Pertanyaan 2 --}}
                <div class="mb-3">
                    <div class="card">
                        <div class="card-body p-3">
                            <p>2. Mulut terasa kering</p>
                            <div class="d-flex justify-content-between mb-3">
                                @for ($i = 1; $i <= 7; $i++)
                                <div class="form-check form-check-inline text-center">
                                    <input class="form-check-input" type="radio" name="q2" id="q2_{{ $i }}" value="{{ $i }}">
                                    <label class="form-check-label" for="q2_{{ $i }}">{{ $i }}</label>
                                </div>
                                @endfor
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between mb-3 px-2">
                                <small>Tidak Sesuai</small>
                                <small>Sangat Sesuai</small>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Pertanyaan 3 --}}
                <div class="mb-3">
                    <div class="card">
                        <div class="card-body p-3">
                            <p>3. Tidak dapat melihat hal yang positif dari suatu kejadian</p>
                            <div class="d-flex justify-content-between mb-3">
                                @for ($i = 1; $i <= 7; $i++)
                                <div class="form-check form-check-inline text-center">
                                    <input class="form-check-input" type="radio" name="q3" id="q3_{{ $i }}" value="{{ $i }}">
                                    <label class="form-check-label" for="q3_{{ $i }}">{{ $i }}</label>
                                </div>
                                @endfor
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between mb-3 px-2">
                                <small>Tidak Sesuai</small>
                                <small>Sangat Sesuai</small>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Pertanyaan 4 --}}
                <div class="mb-3">
                    <div class="card">
                        <div class="card-body p-3">
                            <p>4. Merasakan gangguan dalam bernafas (nafas cepat, sulit bernafas)</p>
                            <div class="d-flex justify-content-between mb-3">
                                @for ($i = 1; $i <= 7; $i++)
                                <div class="form-check form-check-inline text-center">
                                    <input class="form-check-input" type="radio" name="q4" id="q4_{{ $i }}" value="{{ $i }}">
                                    <label class="form-check-label" for="q4_{{ $i }}">{{ $i }}</label>
                                </div>
                                @endfor
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between mb-3 px-2">
                                <small>Tidak Sesuai</small>
                                <small>Sangat Sesuai</small>
                            </div>
                        </div>
                    </div>
                </div>

        {{-- Pertanyaan 5 --}}
        <div class="mb-3">
            <div class="card">
                <div class="card-body p-3">
                    <p>5. Merasa sepertinya tidak kuat lagi untuk melakukan sesuatu kegiatan</p>
                    <div class="d-flex justify-content-between mb-3">
                        @for ($i = 1; $i <= 7; $i++)
                        <div class="form-check form-check-inline text-center">
                            <input class="form-check-input" type="radio" name="q5" id="q5_{{ $i }}" value="{{ $i }}">
                            <label class="form-check-label" for="q5_{{ $i }}">{{ $i }}</label>
                        </div>
                        @endfor
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between mb-3 px-2">
                        <small>Tidak Sesuai</small>
                        <small>Sangat Sesuai</small>
                    </div>
                </div>
            </div>
        </div>

        {{-- Pertanyaan 6 --}}
        <div class="mb-3">
            <div class="card">
                <div class="card-body p-3">
                    <p>6. Cenderung bereaksi berlebihan pada situasi</p>
                    <div class="d-flex justify-content-between mb-3">
                        @for ($i = 1; $i <= 7; $i++)
                        <div class="form-check form-check-inline text-center">
                            <input class="form-check-input" type="radio" name="q6" id="q6_{{ $i }}" value="{{ $i }}">
                            <label class="form-check-label" for="q6_{{ $i }}">{{ $i }}</label>
                        </div>
                        @endfor
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between mb-3 px-2">
                        <small>Tidak Sesuai</small>
                        <small>Sangat Sesuai</small>
                    </div>
                </div>
            </div>
        </div>

            {{-- Pertanyaan 7 --}}
        <div class="mb-3">
            <div class="card">
                <div class="card-body p-3">
                    <p>7. Kelemahan pada anggota tubuh</p>
                    <div class="d-flex justify-content-between mb-3">
                        @for ($i = 1; $i <= 7; $i++)
                        <div class="form-check form-check-inline text-center">
                            <input class="form-check-input" type="radio" name="q7" id="q7_{{ $i }}" value="{{ $i }}">
                            <label class="form-check-label" for="q7_{{ $i }}">{{ $i }}</label>
                        </div>
                        @endfor
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between mb-3 px-2">
                        <small>Tidak Sesuai</small>
                        <small>Sangat Sesuai</small>
                    </div>
                </div>
            </div>
        </div>

        {{-- Pertanyaan 8 --}}
        <div class="mb-3">
            <div class="card">
                <div class="card-body p-3">
                    <p>8. Kesulitan untuk relaksasi/bersantai</p>
                    <div class="d-flex justify-content-between mb-3">
                        @for ($i = 1; $i <= 7; $i++)
                        <div class="form-check form-check-inline text-center">
                            <input class="form-check-input" type="radio" name="q8" id="q8_{{ $i }}" value="{{ $i }}">
                            <label class="form-check-label" for="q8_{{ $i }}">{{ $i }}</label>
                        </div>
                        @endfor
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between mb-3 px-2">
                        <small>Tidak Sesuai</small>
                        <small>Sangat Sesuai</small>
                    </div>
                </div>
            </div>
        </div>

        {{-- Pertanyaan 9--}}
        <div class="mb-3">
            <div class="card">
                <div class="card-body p-3">
                    <p>9. Cemas yang berlebihan dalam suatu situasi namun bisa lega jika hal/situasi itu berakhir</p>
                    <div class="d-flex justify-content-between mb-3">
                        @for ($i = 1; $i <= 7; $i++)
                        <div class="form-check form-check-inline text-center">
                            <input class="form-check-input" type="radio" name="q9" id="q9_{{ $i }}" value="{{ $i }}">
                            <label class="form-check-label" for="q9_{{ $i }}">{{ $i }}</label>
                        </div>
                        @endfor
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between mb-3 px-2">
                        <small>Tidak Sesuai</small>
                        <small>Sangat Sesuai</small>
                    </div>
                </div>
            </div>
        </div>

        {{-- Pertanyaan 10 --}}
        <div class="mb-3">
            <div class="card">
                <div class="card-body p-3">
                    <p>10. Pesimis</p>
                    <div class="d-flex justify-content-between mb-3">
                        @for ($i = 1; $i <= 7; $i++)
                        <div class="form-check form-check-inline text-center">
                            <input class="form-check-input" type="radio" name="q10" id="q10_{{ $i }}" value="{{ $i }}">
                            <label class="form-check-label" for="q10_{{ $i }}">{{ $i }}</label>
                        </div>
                        @endfor
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between mb-3 px-2">
                        <small>Tidak Sesuai</small>
                        <small>Sangat Sesuai</small>
                    </div>
                </div>
            </div>
        </div>
                <button type="submit" class="btn btn-primary">Cek hasil tes</button>
            </form>
        </div>

        {{-- KANAN: CARD HASIL TES --}}
        <div class="col-lg-5">
            <div class="card sticky-top" style="top: 80px;"> <!-- Biar tetap muncul saat scroll -->
                <div class="card-body">
                    <h5 class="card-title">Hasil Tes Psikologi</h5>

                    @if(session('hasil_tes'))
                        <p><strong>Depresi:</strong> {{ session('hasil_tes')['depresi']['kategori'] }} (Skor: {{ session('hasil_tes')['depresi']['skor'] }})</p>
                        <p><strong>Kecemasan:</strong> {{ session('hasil_tes')['kecemasan']['kategori'] }} (Skor: {{ session('hasil_tes')['kecemasan']['skor'] }})</p>
                        <p><strong>Stres:</strong> {{ session('hasil_tes')['stres']['kategori'] }} (Skor: {{ session('hasil_tes')['stres']['skor'] }})</p>
                    @else
                        <p class="text-muted">Tes ini merupakan tes DASS yang terdiri dari 10 pertanyaan, dibagi dalam tiga kategori DASS-D (mengukur depresi), DASS-A (mengukur kesemasan), dan DASS-S (mengukur stress). Isi pertanyaan-pertanyaan tersebut untuk mengetahui kondisimu saat ini</p>
                    @endif

                </div>
            </div>
        </div>

    </div>
</div>
@endsection