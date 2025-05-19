@extends('layouts.user_type.auth')

@section('content')
    <h2>Ayo ukur tingkat stress kamu! &#128516;</h2>

    @if(session('success'))
        <div class="alert alert-success mt-2">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('mood.store') }}">

        <div class="col-lg-7 mb-lg-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <p>1. Menjadi marah karena hal-hal kecil/sepele?</p>
                    <div class="d-flex justify-content-between mb-3">
                        @for ($i = 1; $i <= 7; $i++)
                        <div class="form-check form-check-inline text-center">
                            <input class="form-check-input" type="radio" name="q1" id="q1_{{ $i }}" value="{{ $i }}">
                            <label class="form-check-label" for="q1_{{ $i }}">{{ $i }}</label>
                        </div>
                        @endfor
                    </div>

                    <div class="d-flex justify-content-between mb-3 px-2">
                        <small>Tidak Sesuai</small>
                        <small>Sangat Sesuai</small>
                    </div>                
                </div>
            </div>
        </div>

        <div class="col-lg-7 mb-lg-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <p>2. Mulut terasa kering?</p>
                    <div class="d-flex justify-content-between mb-3">
                        @for ($i = 1; $i <= 7; $i++)
                            <div class="form-check form-check-inline text-center">
                                <input class="form-check-input" type="radio" name="q2" id="q2_{{ $i }}" value="{{ $i }}">
                                <label class="form-check-label" for="q1_{{ $i }}">{{ $i }}</label>
                            </div>
                        @endfor
                    </div>

                    <div class="d-flex justify-content-between mb-3 px-2">
                        <small>Tidak Sesuai</small>
                        <small>Sangat Sesuai</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-7 mb-lg-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <p>3. Tidak dapat melihat hal yang positif dan suatu kejadian?</p>
                    <div class="d-flex justify-content-between mb-3">
                        @for ($i = 1; $i <= 7; $i++)
                            <div class="form-check form-check-inline text-center">
                                <input class="form-check-input" type="radio" name="q3" id="q3_{{ $i }}" value="{{ $i }}">
                                <label class="form-check-label" for="q1_{{ $i }}">{{ $i }}</label>
                            </div>
                        @endfor
                    </div>

                    <div class="d-flex justify-content-between mb-3 px-2">
                        <small>Tidak Sesuai</small>
                        <small>Sangat Sesuai</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-7 mb-lg-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <p>4. Merasakan gangguan dalam bernapas?</p>
                    <div class="d-flex justify-content-between mb-3">
                        @for ($i = 1; $i <= 7; $i++)
                        <div class="form-check form-check-inline text-center">
                            <input class="form-check-input" type="radio" name="q1" id="q1_{{ $i }}" value="{{ $i }}">
                            <label class="form-check-label" for="q1_{{ $i }}">{{ $i }}</label>
                        </div>
                        @endfor
                    </div>

                    <div class="d-flex justify-content-between mb-3 px-2">
                        <small>Tidak Sesuai</small>
                        <small>Sangat Sesuai</small>
                    </div>                
                </div>
            </div>
        </div>


        <button type="submit" class="btn btn-primary">Cek hasil tes</button>
    </form>
    </form>
@endsection


