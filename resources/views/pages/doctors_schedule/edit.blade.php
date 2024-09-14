@extends('layouts.app')

@section('title', 'Edit Doctor')

@push('style')
<!-- CSS Libraries -->
<link rel="stylesheet" href="{{ asset('library/bootstrap-daterangepicker/daterangepicker.css') }}">
<link rel="stylesheet" href="{{ asset('library/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
<link rel="stylesheet" href="{{ asset('library/select2/dist/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
<link rel="stylesheet" href="{{ asset('library/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
<link rel="stylesheet" href="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Doctors</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Forms</a></div>
                <div class="breadcrumb-item">Doctors</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Doctors</h2>
            <div class="card">
                <form action="{{ route('doctors.update', $doctor->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="doctor_name" class="form-control @error('doctor_name') is-invalid @enderror" value="{{$doctor->doctor_name}}">
                            @error('doctor_name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <!-- <div class="form-group">
                            <label>NIK</label>
                            <input type="number" name="nik" class="form-control @error('nik') is-invalid @enderror" value="{{$doctor->nik}}">
                            @error('nik')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div> -->
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="doctor_email" class="form-control @error('doctor_email') is-invalid @enderror" value="{{$doctor->doctor_email}}">
                            @error('doctor_email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="number" name="doctor_phone" class="form-control @error('doctor_phone') is-invalid @enderror" value="{{$doctor->doctor_phone}}">
                            @error('doctor_phone')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Spesialist</label>
                            <input type="text" name="doctor_specialist" class="form-control @error('doctor_specialist') is-invalid @enderror" value="{{$doctor->doctor_specialist}}">
                            @error('doctor_specialist')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <!-- <div class="form-group">
                            <label class="form-label">Photo</label>
                            <input type="file" class="form-control" name="photo" @error('photo') is-invalid @enderror>
                            @error('photo')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div> -->
                        <!-- <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{$doctor->address}}">
                            @error('address')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div> -->
                        <div class="form-group">
                            <label>SIP</label>
                            <input type="number" name="sip" class="form-control @error('sip') is-invalid @enderror" value="{{$doctor->sip}}">
                            @error('sip')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <!-- <div class="form-group">
                            <label>ID IHS</label>
                            <input type="number" name="id_ihs" class="form-control @error('id_ihs') is-invalid @enderror" value="{{$doctor->id_ihs}}">
                            @error('id_ihs')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div> -->
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection

@push('scripts')
@endpush