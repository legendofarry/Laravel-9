@extends('layout')

@section('content')
    <form action="/jobs" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="company">Company Name</label>
            <input type="text" name="company" value="{{ old('company') }}">
            @error('company')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="title">Job Title</label>
            <input type="text" name="title" value="{{ old('title') }}">
            @error('title')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="location">Job Location</label>
            <input type="text" name="location" value="{{ old('location') }}">
            @error('location')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="email">Email</label>
            <input type="text" name="email" value="{{ old('email') }}">
            @error('email')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="website">Website /Application URL</label>
            <input type="url" name="website" value="{{ old('website') }}">
            @error('website')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="tags">Tags</label>
            <input type="text" name="tags" value="{{ old('tags') }}">
            @error('tags')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="logo">Logo</label>
            <input type="file" name="logo" value="{{ old('logo') }}">
            @error('logo')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="description">Job Description</label>
            <textarea name="description" id="description" cols="30" rows="10">{{ old('description') }}</textarea>
            @error('description')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <button>Create</button>
        <a href="/">Home</a>
    </form>
@endsection
