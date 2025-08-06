<x-layout>
  <x-slot:heading>Cursos</x-slot:heading>

  <div class="grid-wrapper">
    @foreach ($courses as $course)
      <div>
        <a class="hover:underline" href="/courses/{{ $course['id'] }}">{{ $course['title'] }}</a>
        <p>Duração: {{ $course['duration'] }}</p>
      </div>
    @endforeach
  </div>
</x-layout>

<style>
  .grid-wrapper {
    display: flex;
    flex-direction: column;
    gap: 1rem;
  }
</style>
