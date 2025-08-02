<x-layout title="About Page">
    <x-slot:heading>
        About Page
    </x-slot:heading>

    <ul class="space-y-2 mt-4">
        @foreach ($jobs as $job)
            <li class="bg-white shadow-sm rounded-lg p-4 hover:bg-gray-100 transition">
                <a href="/jobs/{{ $job['id'] }}" class="text-blue-600 hover:underline">
                    <strong>{{ $job['title'] }}</strong> — Pays <span class="font-semibold">{{ $job['salary'] }}</span> per year.
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
