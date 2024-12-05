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
            <h2>Edit Registration Form</h2>
            @if (session('success'))
            <div style="color: green; background-color: #e0f7e0; padding: 10px; margin-bottom: 20px;">
                {{ session('success') }}
            </div>
        @endif
    
        @if ($errors->any())
            <div style="color: red; background-color: #f8d7da; padding: 10px; margin-bottom: 20px;">
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
                                <form action="{{ route('students.update', ['student' => $student->id]) }}" method="POST">
                                    @csrf
                                    @method('PUT') 
                                
                                <div class="row row-xs align-items-center mg-b-20">
                                    <div class="col-md-4">
                                        <label class="mg-b-0">Student ID</label>
                                    </div>
                                    <div class="col-md-8 mg-t-5 mg-md-t-0">
                                        <input class="form-control" placeholder="Enter your id" type="text" name="Student_ID" id="Student_ID" value="{{ old('Student_ID', $student->Student_ID) }}">
                                    </div>
                                </div>
                                <div class="row row-xs align-items-center mg-b-20">
                                    <div class="col-md-4">
                                        <label class="mg-b-0">Student Name</label>
                                    </div>
                                    <div class="col-md-8 mg-t-5 mg-md-t-0">
                                        <input class="form-control" placeholder="Enter your Name" type="text" name="Student_Name" id="Student_Name" value="{{ old('Student_Name', $student->Student_Name) }}">
                                    </div>
                                </div>
                                <div class="row row-xs align-items-center mg-b-20">
                                    <div class="col-md-4">
                                        <label class="mg-b-0">Email</label>
                                    </div>
                                    <div class="col-md-8 mg-t-5 mg-md-t-0">
                                        <input class="form-control" placeholder="Enter your email" type="email" name="Email" id="Email" value="{{ old('Email', $student->Email) }}" >
                                    </div>
                                </div>
                                <div class="row row-xs align-items-center mg-b-20">
                                    <div class="col-md-4">
                                        <label class="mg-b-0">Session</label>
                                    </div>
                                    <div class="col-md-8 mg-t-5 mg-md-t-0">
                                        <input class="form-control" placeholder="Enter your Session" type="text" name="Session" id="Session" value="{{ old('Session', $student->Session) }}" >
                                    </div>
                                </div>
                                <div class="form-group row justify-content-end mb-0">
                                    <div class="col-md-8 ps-md-2">
                                        <button class="btn ripple btn-primary pd-x-30 mg-r-5">Update</button>
                                        <button class="btn ripple btn-secondary pd-x-30">Cancel</button>
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