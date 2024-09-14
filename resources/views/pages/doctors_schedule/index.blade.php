@extends('layouts.app')

@section('title', 'Doctors Schedule')

@push('style')
<!-- CSS Libraries -->
<link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Doctor Schedules</h1>
            <div class="section-header-button">
                <a href="{{ route('doctors.create') }}" class="btn btn-primary">Add New</a>
            </div>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Doctor Schedules</a></div>
                <div class="breadcrumb-item">All Doctors</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    @include('layouts.alert')
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="float-right">
                                <form method="GET" action="{{ route('doctors.index') }}">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search" name="name">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="clearfix mb-3"></div>
                            <div class="table-responsive">
                                <table class="table-striped table">
                                    <tr>
                                        <th>Name</th>
                                        <th>Photo </th>
                                        <th>Specialist</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>SIP</th>
                                        <th>
                                            <div class="d-flex justify-content-center">
                                                Action
                                            </div>
                                        </th>
                                    </tr>
                                    @foreach ($doctors as $doctor)
                                    <tr>
                                        <td>{{ $doctor->doctor_name }} </td>
                                        <td>
                                            <img src="{{ asset($doctor->photo) }}" alt="Doctor's Photo" style="max-width: 80px; max-height: 80px;">
                                        </td>
                                        <td>{{ $doctor->doctor_specialist }} </td>
                                        <td>{{ $doctor->doctor_email }} </td>
                                        <td>{{ $doctor->doctor_phone }} </td>
                                        <td>{{ $doctor->sip }} </td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <a href="{{ route('doctors.edit', $doctor->id) }}" class="btn btn-primary btn-action mr-1">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>
                                                <form action="{{ route('doctors.destroy', $doctor->id) }}" method="POST" class="ml-2">
                                                    <input type="hidden" name="_method" value="DELETE" />
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                    <button class="btn btn-danger btn-action">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                            <div class="float-right">
                                {{ $doctors->withQueryString()->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('scripts')
<!-- JS Libraies -->
<script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

<!-- Page Specific JS File -->
<script src="{{ asset('js/page/features-posts.js') }}"></script>
@endpush