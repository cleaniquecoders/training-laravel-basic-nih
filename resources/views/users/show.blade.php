<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                <div class="p-4">
                    <p>{{ $user->name }} ({{ $user->email }})</p>
                </div> 

                <a href="{{ route('users.index') }}"
                class="px-4 border border-gray-300 py-2">
                    Back to User List
                </a>
                <a class="px-4 border border-gray-300 py-2 ml-2" href="{{ route('users.edit', $user) }}">
                    Edit
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
