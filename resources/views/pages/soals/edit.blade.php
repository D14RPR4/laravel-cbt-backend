@extends('layouts.app')

@section('title', 'Advanced Forms')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/selectric/public/selectric.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Advanced Forms</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="{{route('home')}}">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="{{route('soal.index')}}">Bank Soal</a></div>
                    <div class="breadcrumb-item">Create Soal</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Soal Edit</h2>

                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <form action="{{route('soal.update',$soals)}}" method="POST">
                                @csrf
                                @method('PUT')
                            <div class="card-header">
                                <h4>Input Text</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Pertanyaan</label>
                                    <input type="text"
                                    name="pertanyaan"
                                    value="{{$soals->pertanyaan}}"
                                        class="form-control @error('pertanyaan')
                                        is-invalid
                                        @enderror">
                                        @error('pertanyaan')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Kategori</label>
                                    <div class="selectgroup w-100">
                                        <label class="selectgroup-item">
                                            <input type="radio" name="kategori" value="Logika" class="selectgroup-input" @if ($soals->kategori == 'Logika') checked
                                            @endif>
                                            <span class="selectgroup-button">Logika</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="kategori" value="Verbal" class="selectgroup-input" @if ($soals->kategori == 'Verbal') checked
                                            @endif>
                                            <span class="selectgroup-button">Verbal</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="kategori" value="Numeric" class="selectgroup-input" @if ($soals->kategori == 'Numeric') checked
                                            @endif>
                                            <span class="selectgroup-button">Numeric</span>
                                        </label>
                                    </div>
                                </div>
                               <div class="form-group">
                                    <label>Jawaban A</label>
                                    <input type="text"
                                    name="jawaban_a"
                                    value="{{$soals->jawaban_a}}"
                                        class="form-control @error('jawaban_a')
                                        is-invalid
                                        @enderror">
                                        @error('jawaban_a')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                </div>
                                <div class="form-group">
                                    <label>Jawaban B</label>
                                    <input type="text"
                                    name="jawaban_b"
                                    value="{{$soals->jawaban_b}}"
                                        class="form-control @error('jawaban_b')
                                        is-invalid
                                        @enderror">
                                        @error('jawaban_b')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                </div><div class="form-group">
                                    <label>Jawaban C</label>
                                    <input type="text"
                                    name="jawaban_c"
                                    value="{{$soals->jawaban_c}}"
                                        class="form-control @error('jawaban_c')
                                        is-invalid
                                        @enderror">
                                        @error('jawaban_c')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                </div><div class="form-group">
                                    <label>Jawaban D</label>
                                    <input type="text"
                                    name="jawaban_d"
                                    value="{{$soals->jawaban_d}}"
                                        class="form-control @error('jawaban_d')
                                        is-invalid
                                        @enderror">
                                        @error('jawaban_d')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Kunci</label>
                                    <div class="selectgroup w-100">
                                        <label class="selectgroup-item">
                                            <input type="radio" name="kunci" value="a" class="selectgroup-input" @if ($soals->kunci == 'a') checked
                                            @endif>
                                            <span class="selectgroup-button">A</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="kunci" value="b" class="selectgroup-input" @if ($soals->kunci == 'b') checked
                                            @endif>
                                            <span class="selectgroup-button">B</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="kunci" value="c" class="selectgroup-input" @if ($soals->kunci == 'c') checked
                                            @endif>
                                            <span class="selectgroup-button">C</span>
                                        </label>
                                        <label class="selectgroup-item">
                                            <input type="radio" name="kunci" value="d" class="selectgroup-input" @if ($soals->kunci == 'd') checked
                                            @endif>
                                            <span class="selectgroup-button">D</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                            </div>
                        </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/cleave.js/dist/cleave.min.js') }}"></script>
    <script src="{{ asset('library/cleave.js/dist/addons/cleave-phone.us.js') }}"></script>
    <script src="{{ asset('library/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('library/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ asset('library/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('library/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/forms-advanced-forms.js') }}"></script>
@endpush
