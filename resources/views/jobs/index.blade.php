@extends('layout')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body>


    @section('content')
        <x-flashMessage />

        <section>
            <div class="bg-[red] w-[70%] mx-auto p-[20px]">
                <form action="/" class="mx-auto w-[70%]">
                    <label for="search">Search</label>
                    <input type="search" name="search">

                    <button class="bg-white p-[5px]" type="submit">Search</button>
                    <a href="/" class="bg-white p-[5px]">ALL</a>
                </form>
            </div>
            <section class="w-[70%] mx-auto">
                <div>
                    @if (count($jobs) == 0)
                        <p>No Jobs available</p>
                    @endif

                    <div class="grid grid-cols-2">

                        @foreach ($jobs as $key => $job)
                            <x-jobCard :job="$job" />
                        @endforeach
                    </div>
                </div>
            </section>
            <form action="/jobs/create"><button type="submit">CREATE</button>
            </form>

            <div class="mt-[30px]">
                {{ $jobs->links() }}
            </div>

        </section>
    @endsection

</body>
