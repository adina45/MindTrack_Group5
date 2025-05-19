@extends('layouts.user_type.auth')

@section('content')
    <h2>Cek Mood Hari Ini</h2>

    @if(session('success'))
        <div class="alert alert-success mt-2">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('mood.store') }}">
        @csrf

        <div class="col-lg-7 mb-lg-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-lg-6">
              <div class="d-flex flex-column h-100">
                <div class="d-flex flex-wrap gap-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="mood" value="Senang" id="senang">
                        <label class="form-check-label" for="senang"><h2>&#128516;</h2></label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="mood" value="Sedih" id="sedih">
                        <label class="form-check-label" for="sedih"><h2>&#128557;</h2></label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="mood" value="Marah" id="marah">
                        <label class="form-check-label" for="marah"><h2>&#128545;</h2></label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="mood" value="Lelah" id="lelah">
                        <label class="form-check-label" for="lelah"><h2>&#128542;</h2></label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="radio" name="mood" value="Semangat" id="semangat">
                        <label class="form-check-label" for="semangat"><h2>&#128513;</h2></label>
                    </div>
                </div>


        <!-- input catatan -->
        <div class="mb-3">
            <label for="note" class="form-label">Catatan singkat(opsional)</label>
            <textarea name="note" id="note" class="form-control" rows="3" placeholder="Kenapa kondisi mood kamu seperti ini?"></textarea>
        </div>
        <form action="{{ route('mood.store') }}" method="POST">
            @csrf
            <!-- radio buttons -->
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
        <!-- <button type="submit" class="btn btn-primary">Kirim</button> -->
              </div>
            </div>
            <div class="col-lg-5 ms-auto text-center mt-5 mt-lg-0">
              
                <img src="../assets/img/shapes/waves-white.svg" class="position-absolute h-100 w-50 top-0 d-lg-block d-none" alt="waves">
                <div class="position-relative d-flex align-items-center justify-content-center h-100">
                  <img class="w-100 position-relative z-index-2 pt-4" src="../assets/img/bgteo.jpg" alt="mood">
                </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- <img class="w-50 position-relative z-index-2 pt-4" src="../assets/img/pikir.jpg" alt="mood">     --}}

    </form>
@endsection
