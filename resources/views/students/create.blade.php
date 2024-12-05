@extends('students.master')
@section('contant')
    <div class="main-content side-content pt-0">

        <div class="main-container container-fluid">
            <div class="inner-body">

                <!-- Page Header -->
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">Student Add</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Student</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Student Add</li>
                        </ol>
                    </div>

                </div>
                <!-- End Page Header -->

                @if (session()->has('success'))
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success">{{ session()->get('success') }}</div>
                        </div>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Row -->
                <div class="row row-sm">
                    <div class="col-lg-6 col-md-12">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="">
                                    <form action="{{ route('students.store') }}" method="POST">
                                        @csrf
                                        <div class="row row-xs align-items-center mg-b-20">
                                            <div class="col-md-4">
                                                <label class="mg-b-0">Student ID</label>
                                            </div>
                                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                                <input class="form-control" placeholder="Enter your id" type="text"
                                                    name="Student_ID" id="Student_ID">
                                            </div>
                                        </div>
                                        <div class="row row-xs align-items-center mg-b-20">
                                            <div class="col-md-4">
                                                <label class="mg-b-0">Student Name</label>
                                            </div>
                                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                                <input class="form-control" placeholder="Enter your Name" type="text"
                                                    name="Student_Name" id="Student_Name">
                                            </div>
                                        </div>
                                        <div class="row row-xs align-items-center mg-b-20">
                                            <div class="col-md-4">
                                                <label class="mg-b-0">Email</label>
                                            </div>
                                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                                <input class="form-control" placeholder="Enter your email" type="email"
                                                    name="Email" id="Email">
                                            </div>
                                        </div>
                                        <div class="row row-xs align-items-center mg-b-20">
                                            <div class="col-md-4">
                                                <label class="mg-b-0">Session</label>
                                            </div>
                                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                                <input class="form-control" placeholder="Enter your Session" type="text"
                                                    name="Session" id="Session">
                                            </div>
                                        </div>
                                        <div class="form-group row justify-content-end mb-0">
                                            <div class="col-md-8 ps-md-2">
                                                <button class="btn ripple btn-primary pd-x-30 mg-r-5">Register</button>
                                                {{-- <button class="btn ripple btn-secondary pd-x-30">Cancel</button> --}}
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
