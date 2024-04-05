@props(['job'])

<x-card>
    <a href="/jobs/{{ $job['id'] }}">
        <p class="text-center">{{ $job['title'] }}</p>
    </a>
    <p> {{ $job['description'] }}</p>
    <br>

    <x-jobsTag :tag="$job->tags" />
</x-card>
