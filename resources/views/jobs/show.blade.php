@extends('layout')

@section('content')
    <x-card>
        <h1> {{ $job['title'] }}</h1>
        <p> {{ $job['description'] }}</p>
        <br>
        <x-jobsTag :tag="$job->tags" />

        <a href="javascript:history.back()">BACK</a>
    </x-card>
@endsection
