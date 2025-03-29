@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Show Course Detail
                            <a href="{{ url('course') }}" class='btn btn-danger float-end'>Back</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <div class="mb-3 d-flex">
                            <label for="">Course Title : </label>
                            <p>{{ $course->title }}</p>
                            @error('title')
                                <span class="text-danger ">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 d-flex">
                            <label for="">Description : </label>
                            <p>{{ $course->description }}</p>
                            @error('title')
                                <span class="text-danger ">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 d-flex">
                            <label for="category">Category : </label>
                            <p>{{ $course->category }} </p>
                            @error('category')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3 d-flex">
                            <label for="">Duration : </label>
                            <p>{{ $course->duration }}</p>
                            @error('title')
                                <span class="text-danger ">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3 d-flex">
                            <label for="">Difficulty Level : </label>
                            <p>{{ $course->difficulty }}</p>
                            @error('difficulty')
                                <span class="text-danger ">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 d-flex">
                            <label for="">Upload an image : </label>
                            <p>{{ $course->image }}</p>
                            @error('image')
                                <span class="text-danger ">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 d-flex">
                            <label for="">Upload Course Video : </label>
                            <p>{{ $course->video }}</p>
                            @error('video')
                                <span class="text-danger ">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <button type='submit' class='btn btn-primary'>Update</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
