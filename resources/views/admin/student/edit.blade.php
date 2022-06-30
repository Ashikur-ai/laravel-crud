@extends('admin.master')
@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card card-body">
                        @if(Session::has('message'))
                            <h4 class="text-center text-success">{{ Session::get('message') }}</h4>
                        @endif
                            <form action="{{ route('student.update',['id'=>$student->id]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mt-3">
                                    <label for="name" class="col-md-4">Name</label>
                                    <div class="col-md-8">
                                        <input type="text" id="name" name="name" value="{{ $student->name }}" class="form-control">
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="name" class="col-md-4">Email</label>
                                    <div class="col-md-8">
                                        <input type="text" id="email" name="email" value="{{ $student->email }}" class="form-control">
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Phone</label>
                                    <div class="col-md-8">
                                        <input type="text" id="phone" name="phone" value="{{ $student->phone }}" class="form-control">
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Address</label>
                                    <div class="col-md-8">
                                        <textarea name="address" id="address" type="text" class="form-control" cols="30" rows="10">{{ $student->address }}</textarea>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="" class="col-md-4">District</label>
                                    <div class="col-md-8">
                                        <select name="district" id="" class="form-control">
                                            <option value="" disabled><--select a district--></option>
                                            <option value="dhaka" {{ $student->district == 'dhaka' ? 'selected':'' }}>Dhaka</option>
                                            <option value="cumilla" {{ $student->district == 'cumilla' ? 'selected':'' }}>Cumilla</option>
                                            <option value="chandpur"{{ $student->district == 'chandpur' ? 'selected':'' }}>Chandpur</option>
                                            <option value="savar"{{ $student->district == 'savar' ? 'selected':'' }}>Savar</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Gender</label>
                                    <div class="col-md-8">
                                        <label for=""><input type="radio" name="gender" value="male" {{ $student->gender == 'male' ? 'checked':'' }}>Male</label>
                                        <label for=""><input type="radio" name="gender" value="female" {{ $student->gender == 'female' ? 'checked':'' }}>Female</label>
                                        <label for=""><input type="radio" name="gender" value="other" {{ $student->gender == 'other' ? 'checked':'' }}>Other</label>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Date of Birth</label>
                                    <div class="col-md-8">
                                        <input type="date" name="dob" class="form-control" value="{{ $student->dob }}">
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image" class="form-control">
                                        <img src="{{ asset($student->image) }}" alt="" height="180px" width="180px">
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Subjects</label>
                                    <div class="col-md-8">
                                        <label for=""><input type="checkbox" name="subjects[]" value="bangla" {{ in_array('bangla', $subjects)?'checked':'' }}>Bangla</label>
                                        <label for=""><input type="checkbox" name="subjects[]" value="english" {{in_array('english', $subjects)?'checked':''}}>English</label>
                                        <label for=""><input type="checkbox" name="subjects[]" value="math" {{ in_array('math', $subjects)?'checked':'' }}>Math</label>
                                        <label for=""><input type="checkbox" name="subjects[]" value="chemistry" {{ in_array('chemistry', $subjects)?'checked':'' }}>Chemistry</label>
                                        <label for=""><input type="checkbox" name="subjects[]" value="physics" {{ in_array('physics', $subjects)?'checked':'' }}>Physics</label>
                                        <label for=""><input type="checkbox" name="subjects[]" value="biology" {{ in_array('biology', $subjects)?'checked':'' }}>Biology</label>
                                        <label for=""><input type="checkbox" name="subjects[]" value="history" {{ in_array('history', $subjects)?'checked':'' }}>History</label>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="name" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-success">
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
