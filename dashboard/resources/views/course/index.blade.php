@extends ('layouts.frontend')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                
                @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4>Courses Management
                            <a href="{{ url('course/create')}}" class='btn btn-success float-end'>+ Add Course</a>
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
                                            <a href="{{ route('course.edit', $course->id) }}"
                                                class="btn btn-success">Edit</a>
                                            <a href="{{ route('course.show', $course->id) }}"
                                                class="text-white btn btn-info">Show</a>
                                            <form action="{{ route('course.destroy', $course->id) }}" method="POST"
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
                        {{ $courses->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
