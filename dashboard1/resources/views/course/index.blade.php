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
                        <h4>Courses Management
                            <a href="{{ url('course/create') }}" class='add btn float-end'>+ Add Course</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-stiped table-bordered">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Duration</th>
                                    <th>Dificulty level</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($courses as $course)
                                    <tr>
                                        <td>{{ $course->id }}</td>
                                        <td>{{ $course->title }}</td>
                                        <td>{{ $course->description }}</td>
                                        <td>{{ $course->duration }}</td>
                                        <td>{{ $course->difficulty }}</td>
                                        <td>
                                            <a href="{{ route('course.edit', $course->id) }}" class="edit btn m-1">Edit</a>

                                            <a href="{{ route('course.show', $course->id) }}" class="shown btn m-1">Show</a>


                                            <form action="{{ route('course.destroy', $course->id) }}" method="POST"
                                                class='d-inline'>
                                                @csrf
                                                @method('Delete')
                                                <button type="submit" class="btn btn-danger m-1">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $courses->links() }}
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
