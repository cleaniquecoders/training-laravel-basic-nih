<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Management') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-4">
                    {{ $users->links() }}
                </div>
                <table class="min-w-full divide-y divide-gray-300">
                    <tr class="py-4">
                        <th class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Name</th>
                        <th class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">E-mail</th>
                        <th class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Actions</th>
                    </tr>
                    @foreach ($users as $user)
                        <tr>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $user->name }}</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $user->email }}</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                <div class="inline-flex">
                                    <a class="px-4 border border-gray-300 py-2"
                                        href="{{ route('users.show', $user) }}">Details</a>
                                    <a class="px-4 border border-gray-300 py-2"
                                        href="{{ route('users.edit', $user) }}">Edit</a>

                                    <form method="POST" class="m-0 p-0" action="{{ route('users.destroy', $user) }}">
                                        @csrf @method('DELETE')

                                        <a class="px-4 border border-gray-300 py-2 text-red-500" href="#"
                                            onclick="if(confirm('Are you sure want to delete this user?')){this.closest('form').submit();}">
                                            Delete
                                        </a>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </table>
                <div class="p-4">
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
