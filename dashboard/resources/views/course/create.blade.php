@extends ('layouts.frontend')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Create Courses
                            <a href="{{ url('course') }}" class='btn btn-danger float-end'>Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('course.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="">Course Title</label>
                                <input name="title" type="text" class="form-control" />
                                @error('title')
                                    <span class="text-danger ">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Description</label>
                                <textarea name="description" type="text" rows="3" class="form-control"></textarea>
                                @error('title')
                                    <span class="text-danger ">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="category">Category</label>
                                <input name="category" type="text" class="form-control" />
                                @error('category')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="">Duration</label>
                                <input name="duration" type="number" class="form-control" />
                                @error('title')
                                    <span class="text-danger ">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Difficulty Level</label>
                                <input name="difficulty" type="text" class="form-control" />
                                @error('difficulty')
                                    <span class="text-danger ">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Upload an image course</label>
                                <input name="image" type="text" class="form-control" />
                                @error('image')
                                    <span class="text-danger ">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Upload Course Video</label>
                                <input name="video" type="text" class="form-control" />
                                @error('video')
                                    <span class="text-danger ">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <button type='submit' class='btn btn-primary'>Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
