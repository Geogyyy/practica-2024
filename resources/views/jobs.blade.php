<x-layout>
    <x-slot:heading>
        Job Listing
    </x-slot:heading>

    <ul>
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id']}}" class="text-blue-900 hover: underline">
            <li><b>{{$job['title']}}:</b> Pays {{$job['salary']}} per year</li>
            </a>
        @endforeach
    </ul>
    
</x-layout>