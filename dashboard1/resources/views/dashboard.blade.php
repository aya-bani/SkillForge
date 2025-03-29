@extends('layouts.app')
@section('content')
    <div class="d-flex flex-column">
        <div class="content" style="position: relative; margin-bottom: 4rem">
            <input type="search"
                style="width: 18%; height:2.5rem;border-radius: 20px; border: 1px solid #913880; position: absolute; right: 2rem; padding:12px ; margin:1rem"
                placeholder="search...">
        </div>

        <div class="d-flex align-items-center justify-content-center gap-3 mt-4">
            <x-small-card number="150" title="Courses" path="{{ url('/course') }}" icon="fas fa-book" />
            <x-small-card number="200" title="Payments" path="{{ url('/payment') }}" icon="fas fa-money-bill-wave" />
            <x-small-card number="300" title="Students" path="{{ url('/student') }}" icon="fas fa-graduation-cap" />



        </div>
        <div class="m-5">
            <h3>Statistics</h3>
        </div>
    </div>
@endsection
