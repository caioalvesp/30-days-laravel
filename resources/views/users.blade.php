<x-layout>
  <x-slot:heading>Users</x-slot:heading>

  @foreach ($users as $user)
    <p>{{ $user['name'] }}</p>
  @endforeach
</x-layout>
