<x-layout>
    <x-slot:heading>
        User Lists
    </x-slot:heading>

    <ul>
        @foreach ($users as $user)
        <li>{{ $user->first_name }} {{ $user->last_name }} - admin: {{ $user->admin  ? 'true' : 'false'}} </li>
        @endforeach
    </ul>
    
</x-layout>