@extends('layouts.user_type.auth')

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

        {{-- Pertanyaan 11 --}}
        <div class="mb-3">
            <div class="card">
                <div class="card-body p-3">
                    <p>11. Mudah merasa kesal</p>
                    <div class="d-flex justify-content-between mb-3">
                        @for ($i = 1; $i <= 7; $i++)
                        <div class="form-check form-check-inline text-center">
                            <input class="form-check-input" type="radio" name="q11" id="q11_{{ $i }}" value="{{ $i }}">
                            <label class="form-check-label" for="q11_{{ $i }}">{{ $i }}</label>
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

        {{-- Pertanyaan 12 --}}
        <div class="mb-3">
            <div class="card">
                <div class="card-body p-3">
                    <p>12. Merasa banyak menghabiskan energi karena cemas</p>
                    <div class="d-flex justify-content-between mb-3">
                        @for ($i = 1; $i <= 7; $i++)
                        <div class="form-check form-check-inline text-center">
                            <input class="form-check-input" type="radio" name="q12" id="q12_{{ $i }}" value="{{ $i }}">
                            <label class="form-check-label" for="q12_{{ $i }}">{{ $i }}</label>
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

        {{-- Pertanyaan 13 --}}
        <div class="mb-3">
            <div class="card">
                <div class="card-body p-3">
                    <p>13. Merasa sedih dan depresi</p>
                    <div class="d-flex justify-content-between mb-3">
                        @for ($i = 1; $i <= 7; $i++)
                        <div class="form-check form-check-inline text-center">
                            <input class="form-check-input" type="radio" name="q13" id="q13_{{ $i }}" value="{{ $i }}">
                            <label class="form-check-label" for="q13_{{ $i }}">{{ $i }}</label>
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

        {{-- Pertanyaan 14 --}}
        <div class="mb-3">
            <div class="card">
                <div class="card-body p-3">
                    <p>14. Tidak sabaran</p>
                    <div class="d-flex justify-content-between mb-3">
                        @for ($i = 1; $i <= 7; $i++)
                        <div class="form-check form-check-inline text-center">
                            <input class="form-check-input" type="radio" name="q14" id="q14_{{ $i }}" value="{{ $i }}">
                            <label class="form-check-label" for="q14_{{ $i }}">{{ $i }}</label>
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

        {{-- Pertanyaan 15 --}}
        <div class="mb-3">
            <div class="card">
                <div class="card-body p-3">
                    <p>15. Kelelahan</p>
                    <div class="d-flex justify-content-between mb-3">
                        @for ($i = 1; $i <= 7; $i++)
                        <div class="form-check form-check-inline text-center">
                            <input class="form-check-input" type="radio" name="q15" id="q15_{{ $i }}" value="{{ $i }}">
                            <label class="form-check-label" for="q15_{{ $i }}">{{ $i }}</label>
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

        {{-- Pertanyaan 16 --}}
        <div class="mb-3">
            <div class="card">
                <div class="card-body p-3">
                    <p>16. Kehilangan minat pada banyak hal (misal: makan, ambulasi, sosialisasi)</p>
                    <div class="d-flex justify-content-between mb-3">
                        @for ($i = 1; $i <= 7; $i++)
                        <div class="form-check form-check-inline text-center">
                            <input class="form-check-input" type="radio" name="q16" id="q16_{{ $i }}" value="{{ $i }}">
                            <label class="form-check-label" for="q16_{{ $i }}">{{ $i }}</label>
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

        {{-- Pertanyaan 17 --}}
        <div class="mb-3">
            <div class="card">
                <div class="card-body p-3">
                    <p>17. Merasa diri tida layak</p>
                    <div class="d-flex justify-content-between mb-3">
                        @for ($i = 1; $i <= 7; $i++)
                        <div class="form-check form-check-inline text-center">
                            <input class="form-check-input" type="radio" name="q17" id="q17_{{ $i }}" value="{{ $i }}">
                            <label class="form-check-label" for="q17_{{ $i }}">{{ $i }}</label>
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

        {{-- Pertanyaan 18 --}}
        <div class="mb-3">
            <div class="card">
                <div class="card-body p-3">
                    <p>18. Mudah tersinggung</p>
                    <div class="d-flex justify-content-between mb-3">
                        @for ($i = 1; $i <= 7; $i++)
                        <div class="form-check form-check-inline text-center">
                            <input class="form-check-input" type="radio" name="q18" id="q18_{{ $i }}" value="{{ $i }}">
                            <label class="form-check-label" for="q18_{{ $i }}">{{ $i }}</label>
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

        {{-- Pertanyaan 19 --}}
        <div class="mb-3">
            <div class="card">
                <div class="card-body p-3">
                    <p>19. Berkeringan (misal: tangan berkeringan) tanpa stimulasi oleh cuaca maupun latihan fisik</p>
                    <div class="d-flex justify-content-between mb-3">
                        @for ($i = 1; $i <= 7; $i++)
                        <div class="form-check form-check-inline text-center">
                            <input class="form-check-input" type="radio" name="q19" id="q19_{{ $i }}" value="{{ $i }}">
                            <label class="form-check-label" for="q19_{{ $i }}">{{ $i }}</label>
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

        {{-- Pertanyaan 20 --}}
        <div class="mb-3">
            <div class="card">
                <div class="card-body p-3">
                    <p>20. Ketakutan tanpa alasan</p>
                    <div class="d-flex justify-content-between mb-3">
                        @for ($i = 1; $i <= 7; $i++)
                        <div class="form-check form-check-inline text-center">
                            <input class="form-check-input" type="radio" name="q20" id="q20_{{ $i }}" value="{{ $i }}">
                            <label class="form-check-label" for="q20_{{ $i }}">{{ $i }}</label>
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

        {{-- Pertanyaan 21 --}}
        <div class="mb-3">
            <div class="card">
                <div class="card-body p-3">
                    <p>21. Merasa hidup tidak berharga</p>
                    <div class="d-flex justify-content-between mb-3">
                        @for ($i = 1; $i <= 7; $i++)
                        <div class="form-check form-check-inline text-center">
                            <input class="form-check-input" type="radio" name="q21" id="q21_{{ $i }}" value="{{ $i }}">
                            <label class="form-check-label" for="q21_{{ $i }}">{{ $i }}</label>
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

        {{-- Pertanyaan 22 --}}
        <div class="mb-3">
            <div class="card">
                <div class="card-body p-3">
                    <p>22. Sulit untuk beristirahat</p>
                    <div class="d-flex justify-content-between mb-3">
                        @for ($i = 1; $i <= 7; $i++)
                        <div class="form-check form-check-inline text-center">
                            <input class="form-check-input" type="radio" name="q22" id="q22_{{ $i }}" value="{{ $i }}">
                            <label class="form-check-label" for="q22_{{ $i }}">{{ $i }}</label>
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

        {{-- Pertanyaan 23 --}}
        <div class="mb-3">
            <div class="card">
                <div class="card-body p-3">
                    <p>23. Kesulitan dalam menelan</p>
                    <div class="d-flex justify-content-between mb-3">
                        @for ($i = 1; $i <= 7; $i++)
                        <div class="form-check form-check-inline text-center">
                            <input class="form-check-input" type="radio" name="q23" id="q23_{{ $i }}" value="{{ $i }}">
                            <label class="form-check-label" for="q23_{{ $i }}">{{ $i }}</label>
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

        {{-- Pertanyaan 24 --}}
        <div class="mb-3">
            <div class="card">
                <div class="card-body p-3">
                    <p>24. Tidak dapat menikmati hal-hal yang dilakukan</p>
                    <div class="d-flex justify-content-between mb-3">
                        @for ($i = 1; $i <= 7; $i++)
                        <div class="form-check form-check-inline text-center">
                            <input class="form-check-input" type="radio" name="q24" id="q24_{{ $i }}" value="{{ $i }}">
                            <label class="form-check-label" for="q24_{{ $i }}">{{ $i }}</label>
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

        {{-- Pertanyaan 25 --}}
        <div class="mb-3">
            <div class="card">
                <div class="card-body p-3">
                    <p>25. Perubahan kegiatan jantung dan denyut nadi tanpa stimulasi oleh latihan fisik</p>
                    <div class="d-flex justify-content-between mb-3">
                        @for ($i = 1; $i <= 7; $i++)
                        <div class="form-check form-check-inline text-center">
                            <input class="form-check-input" type="radio" name="q25" id="q25_{{ $i }}" value="{{ $i }}">
                            <label class="form-check-label" for="q25_{{ $i }}">{{ $i }}</label>
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

        {{-- Pertanyaan 26 --}}
        <div class="mb-3">
            <div class="card">
                <div class="card-body p-3">
                    <p>26. Merasa hilang harapan dan putus asa</p>
                    <div class="d-flex justify-content-between mb-3">
                        @for ($i = 1; $i <= 7; $i++)
                        <div class="form-check form-check-inline text-center">
                            <input class="form-check-input" type="radio" name="q26" id="q26_{{ $i }}" value="{{ $i }}">
                            <label class="form-check-label" for="q26_{{ $i }}">{{ $i }}</label>
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

        {{-- Pertanyaan 27 --}}
        <div class="mb-3">
            <div class="card">
                <div class="card-body p-3">
                    <p>27. Mudah marah</p>
                    <div class="d-flex justify-content-between mb-3">
                        @for ($i = 1; $i <= 7; $i++)
                        <div class="form-check form-check-inline text-center">
                            <input class="form-check-input" type="radio" name="q27" id="q27_{{ $i }}" value="{{ $i }}">
                            <label class="form-check-label" for="q27_{{ $i }}">{{ $i }}</label>
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

        {{-- Pertanyaan 28 --}}
        <div class="mb-3">
            <div class="card">
                <div class="card-body p-3">
                    <p>28. Mudah panik</p>
                    <div class="d-flex justify-content-between mb-3">
                        @for ($i = 1; $i <= 7; $i++)
                        <div class="form-check form-check-inline text-center">
                            <input class="form-check-input" type="radio" name="q28" id="q28_{{ $i }}" value="{{ $i }}">
                            <label class="form-check-label" for="q28_{{ $i }}">{{ $i }}</label>
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

        {{-- Pertanyaan 29 --}}
        <div class="mb-3">
            <div class="card">
                <div class="card-body p-3">
                    <p>29. Kesulitan untuk tenang setelah sesuatu yang mengganggu</p>
                    <div class="d-flex justify-content-between mb-3">
                        @for ($i = 1; $i <= 7; $i++)
                        <div class="form-check form-check-inline text-center">
                            <input class="form-check-input" type="radio" name="q29" id="q29_{{ $i }}" value="{{ $i }}">
                            <label class="form-check-label" for="q29_{{ $i }}">{{ $i }}</label>
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

        {{-- Pertanyaan 30 --}}
        <div class="mb-3">
            <div class="card">
                <div class="card-body p-3">
                    <p>30. Takut diri terlambat oleh tugas-tugas yang tidak bisa dilakukan</p>
                    <div class="d-flex justify-content-between mb-3">
                        @for ($i = 1; $i <= 7; $i++)
                        <div class="form-check form-check-inline text-center">
                            <input class="form-check-input" type="radio" name="q30" id="q30_{{ $i }}" value="{{ $i }}">
                            <label class="form-check-label" for="q30_{{ $i }}">{{ $i }}</label>
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

        {{-- Pertanyaan 31 --}}
        <div class="mb-3">
            <div class="card">
                <div class="card-body p-3">
                    <p>31. Sulit untuk antusias pada banyak hal</p>
                    <div class="d-flex justify-content-between mb-3">
                        @for ($i = 1; $i <= 7; $i++)
                        <div class="form-check form-check-inline text-center">
                            <input class="form-check-input" type="radio" name="q31" id="q31_{{ $i }}" value="{{ $i }}">
                            <label class="form-check-label" for="q31_{{ $i }}">{{ $i }}</label>
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

        {{-- Pertanyaan 32 --}}
        <div class="mb-3">
            <div class="card">
                <div class="card-body p-3">
                    <p>32. Sulit mentoleransi ggangguan-gangguan terhadap hal yang sedang dilakukan</p>
                    <div class="d-flex justify-content-between mb-3">
                        @for ($i = 1; $i <= 7; $i++)
                        <div class="form-check form-check-inline text-center">
                            <input class="form-check-input" type="radio" name="q32" id="q32_{{ $i }}" value="{{ $i }}">
                            <label class="form-check-label" for="q32_{{ $i }}">{{ $i }}</label>
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

        {{-- Pertanyaan 33 --}}
        <div class="mb-3">
            <div class="card">
                <div class="card-body p-3">
                    <p>33. Berada pada keadaan tegang</p>
                    <div class="d-flex justify-content-between mb-3">
                        @for ($i = 1; $i <= 7; $i++)
                        <div class="form-check form-check-inline text-center">
                            <input class="form-check-input" type="radio" name="q33" id="q33_{{ $i }}" value="{{ $i }}">
                            <label class="form-check-label" for="q33_{{ $i }}">{{ $i }}</label>
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

        {{-- Pertanyaan 34 --}}
        <div class="mb-3">
            <div class="card">
                <div class="card-body p-3">
                    <p>34. Merasa tidak berharga</p>
                    <div class="d-flex justify-content-between mb-3">
                        @for ($i = 1; $i <= 7; $i++)
                        <div class="form-check form-check-inline text-center">
                            <input class="form-check-input" type="radio" name="q34" id="q34_{{ $i }}" value="{{ $i }}">
                            <label class="form-check-label" for="q34_{{ $i }}">{{ $i }}</label>
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

        {{-- Pertanyaan 35 --}}
        <div class="mb-3">
            <div class="card">
                <div class="card-body p-3">
                    <p>35. Tidak dapat memaklumi hal apapun yang menghalangi anda untuk menyelesaikan hal yang sedang anda lakukan</p>
                    <div class="d-flex justify-content-between mb-3">
                        @for ($i = 1; $i <= 7; $i++)
                        <div class="form-check form-check-inline text-center">
                            <input class="form-check-input" type="radio" name="q35" id="q35_{{ $i }}" value="{{ $i }}">
                            <label class="form-check-label" for="q35_{{ $i }}">{{ $i }}</label>
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

        {{-- Pertanyaan 36 --}}
        <div class="mb-3">
            <div class="card">
                <div class="card-body p-3">
                    <p>36. Ketakutan</p>
                    <div class="d-flex justify-content-between mb-3">
                        @for ($i = 1; $i <= 7; $i++)
                        <div class="form-check form-check-inline text-center">
                            <input class="form-check-input" type="radio" name="q36" id="q36_{{ $i }}" value="{{ $i }}">
                            <label class="form-check-label" for="q36_{{ $i }}">{{ $i }}</label>
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

        {{-- Pertanyaan 37 --}}
        <div class="mb-3">
            <div class="card">
                <div class="card-body p-3">
                    <p>37. Merasa Tidak ada harapn untuk masa depan</p>
                    <div class="d-flex justify-content-between mb-3">
                        @for ($i = 1; $i <= 7; $i++)
                        <div class="form-check form-check-inline text-center">
                            <input class="form-check-input" type="radio" name="q37" id="q37_{{ $i }}" value="{{ $i }}">
                            <label class="form-check-label" for="q37_{{ $i }}">{{ $i }}</label>
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

        {{-- Pertanyaan 38 --}}
        <div class="mb-3">
            <div class="card">
                <div class="card-body p-3">
                    <p>38. Merasa hidup tidak berarti</p>
                    <div class="d-flex justify-content-between mb-3">
                        @for ($i = 1; $i <= 7; $i++)
                        <div class="form-check form-check-inline text-center">
                            <input class="form-check-input" type="radio" name="q38" id="q38_{{ $i }}" value="{{ $i }}">
                            <label class="form-check-label" for="q38_{{ $i }}">{{ $i }}</label>
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

        {{-- Pertanyaan 39 --}}
        <div class="mb-3">
            <div class="card">
                <div class="card-body p-3">
                    <p>39. Mudah gelisah</p>
                    <div class="d-flex justify-content-between mb-3">
                        @for ($i = 1; $i <= 7; $i++)
                        <div class="form-check form-check-inline text-center">
                            <input class="form-check-input" type="radio" name="q39" id="q39_{{ $i }}" value="{{ $i }}">
                            <label class="form-check-label" for="q39_{{ $i }}">{{ $i }}</label>
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

        {{-- Pertanyaan 40 --}}
        <div class="mb-3">
            <div class="card">
                <div class="card-body p-3">
                    <p>40. Khawatir dengan situasi saat diri anda mungkin menjadi panik dan mempermalukan diri sendiri</p>
                    <div class="d-flex justify-content-between mb-3">
                        @for ($i = 1; $i <= 7; $i++)
                        <div class="form-check form-check-inline text-center">
                            <input class="form-check-input" type="radio" name="q40" id="q40_{{ $i }}" value="{{ $i }}">
                            <label class="form-check-label" for="q40_{{ $i }}">{{ $i }}</label>
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

        {{-- Pertanyaan 41 --}}
        <div class="mb-3">
            <div class="card">
                <div class="card-body p-3">
                    <p>41. Gemetar</p>
                    <div class="d-flex justify-content-between mb-3">
                        @for ($i = 1; $i <= 7; $i++)
                        <div class="form-check form-check-inline text-center">
                            <input class="form-check-input" type="radio" name="q41" id="q41_{{ $i }}" value="{{ $i }}">
                            <label class="form-check-label" for="q41_{{ $i }}">{{ $i }}</label>
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

        {{-- Pertanyaan 42 --}}
        <div class="mb-3">
            <div class="card">
                <div class="card-body p-3">
                    <p>42. Sulit untuk meningkatkan inisiatif dalam melakukan sesuatu</p>
                    <div class="d-flex justify-content-between mb-3">
                        @for ($i = 1; $i <= 7; $i++)
                        <div class="form-check form-check-inline text-center">
                            <input class="form-check-input" type="radio" name="q42" id="q42_{{ $i }}" value="{{ $i }}">
                            <label class="form-check-label" for="q42_{{ $i }}">{{ $i }}</label>
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
                        <p class="text-muted">Tes ini merupakan tes DASS yang terdiri dari 42 pertanyaan, dibagi dalam tiga kategori DASS-D (mengukur depresi), DASS-A (mengukur kesemasan), dan DASS-S (mengukur stress). Isi pertanyaan-pertanyaan tersebut untuk mengetahui kondisimu saat ini</p>
                    @endif
        
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection
