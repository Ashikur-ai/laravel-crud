@extends('admin.master')
@section('body')


    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @if(Session::has('message'))
                        <h4 class="text-center text-success">{{ Session::get('message') }}</h4>
                    @endif
                    <table class="table table-responsive table-bordered">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>District</th>
                            <th>Gender</th>
                            <th>D.O.B</th>
                            <th>Image</th>
                            <th>Address</th>
                            <th>Subjects</th>
                            <th>Action</th>
                        </tr>
                        @foreach($students as $student)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->eamil }}</td>
                                <td>{{ $student->phone }}</td>
                                <td>{{ $student->district }}</td>
                                <td>{{ $student->gender }}</td>
                                <td>{{ $student->dob }}</td>
                                <td>
                                    <img src="{{ asset($student->image) }}" alt="" height="180px" width="200px">
                                </td>
                                <td>{{ $student->address }}</td>
                                <td>{{ $student->subjects }}</td>
                                <td>
                                    <a href="{{ route('student.edit',['id'=>$student->id]) }}" class="btn btn-sm btn-primary">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{ route('student.delete',['id'=>$student->id]) }}" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete this student?')">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
