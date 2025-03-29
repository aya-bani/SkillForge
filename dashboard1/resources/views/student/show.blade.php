@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Show Student Detail
                            <a href="{{ url('student') }}" class='btn btn-danger float-end'>Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3 d-flex">
                            <label for="">Full Name : </label>
                            <p>{{ $student->full_name }}</p>
                            @error('full_name')
                                <span class="text-danger ">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3 d-flex">
                            <label for="">Email : </label>
                            <p>{{ $student->email }}</p>
                            @error('email')
                                <span class="text-danger ">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3 d-flex">
                            <label for="">Password : </label>
                            <p>{{ $student->password }}</p>
                            @error('password')
                                <span class="text-danger ">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <a href="{{ route('student.edit', $student->id) }}" class='btn btn-primary'>Update</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
