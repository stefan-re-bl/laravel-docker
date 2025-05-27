<x-layout>
  <x-slot:heading>Job Listings</x-slot:heading>
  Available Jobs:

    <ul>
  @foreach($jobs as $job)

    <li><a href="/jobs/{{$job['id']}}" class="text-blue-500 hover:underline">
      <strong>{{ $job['title']}}</strong>: {{$job['salary']}} yearly, onsite.
    </a></li>

  @endforeach
    </ul>
</x-layout>