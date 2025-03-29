@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4>Students Management
                            <a href="{{ url('student/create') }}" class='add btn  float-end'>+ Add Students</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-stiped table-bordered">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                    <tr>
                                        <td>{{ $student->id }}</td>
                                        <td>{{ $student->full_name }}</td>
                                        <td>{{ $student->email }}</td>
                                        <td>{{ $student->password }}</td>
                                        <td>
                                            <a href="{{ route('student.edit', $student->id) }}" class="edit btn">Edit</a>
                                            <a href="{{ route('student.show', $student->id) }}" class="shown btn ">Show</a>
                                            <form action="{{ route('student.destroy', $student->id) }}" method="POST"
                                                class='d-inline'>
                                                @csrf
                                                @method('Delete')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $students->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .shown {
            background-color: #D22F72;
            border: 1px solid #D22F72;
            color: white;
        }

        .dark-mode .shown {
            background-color: #303b46;
            border: 1px solid #303b46;
            color: white;
        }

        .edit {
            background-color: #913880;
            border: 1px solid #913880;
            color: white;
        }

        .dark-mode .edit {
            background-color: #818d97;
            border: 1px solid #818d97;
        }

        .add {
            background-color: #913880;
            border: 1px solid #913880;
            color: white;
        }

        .dark-mode .add {
            background-color: black;
            border: 1px solid black;
        }
    </style>
@endsection
