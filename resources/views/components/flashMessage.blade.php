@if (session()->has('message'))
    <div x-show="show" x-data="{ show: true }" x-init ="setTimeout(()=> show=false,3000)"
        class="bg-white text-red font-bold text-[13px]">
        <p>{{ session('message') }}</p>
    </div>
@endif
