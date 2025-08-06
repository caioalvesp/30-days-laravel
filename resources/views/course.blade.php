<x-layout>

  <x-slot:heading>{{ $course['title'] }}</x-slot:heading>

  <h2 class="font-bold text-lg">{{ $course['title'] }}</h2>

  <p>
    A duração do curso é de {{ $course['duration'] }}.
  </p>
</x-layout>
