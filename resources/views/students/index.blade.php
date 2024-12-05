
@extends('students.master')
@section('contant')
    <div class="main-content side-content pt-0">

        <div class="main-container container-fluid">
            <div class="inner-body">

                <!-- Page Header -->
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">Student List</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Student</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Student List</li>
                        </ol>
                    </div>

                </div>
                <!-- End Page Header -->



                <!-- Row -->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card custom-card">
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table id="example3" class="table table-striped table-bordered text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>Student ID</th>
                                                <th>Student Name</th>
                                                <th>Email</th>
                                                <th>Session</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($students as $student)
                                                <tr>
                                                    <td>{{ $student->Student_ID }}</td>
                                                    <td>{{ $student->Student_Name }}</td>
                                                    <td>{{ $student->Email }}</td>
                                                    <td>{{ $student->Session }}</td>
                                                    <td>
                                                        <a href="{{ route('students.edit', ['student' => $student->id]) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                                                    </td>
                                                    <td>
                                                        <form action="{{ route('students.destroy', ['student' => $student->id]) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                           <button type="submit"><i class="fa-solid fa-trash"></i></button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->


            </div>
        </div>
    </div>
@endsection

