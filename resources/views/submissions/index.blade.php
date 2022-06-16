<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Submission Management') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 flex flex-row-reverse">
                <a href="{{ route('submissions.create') }}"
                    class="border border-gray-300 py-2 px-4 bg-white text-gray-700">
                    Create New Submission
                </a>
            </div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-4">
                    {{ $submissions->links() }}
                </div>
                <table class="min-w-full divide-y divide-gray-300">
                    <tr class="py-4">
                        <th class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Title</th>
                        <th class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Actions</th>
                    </tr>
                    @foreach ($submissions as $submission)
                        <tr>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $submission->title }}
                            </td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                <div class="inline-flex">
                                    <a class="px-4 border border-gray-300 py-2"
                                        href="{{ route('submissions.show', $submission) }}">Details</a>
                                    <a class="px-4 border border-gray-300 py-2"
                                        href="{{ route('submissions.edit', $submission) }}">Edit</a>
                                    @if ($submission->user_id == auth()->user()->id)
                                        <form method="POST" class="m-0 p-0"
                                            action="{{ route('submissions.destroy', $submission) }}">
                                            @csrf @method('DELETE')

                                            <a class="px-4 border border-gray-300 py-2 text-red-500" href="#"
                                                onclick="if(confirm('Are you sure want to delete this user?')){this.closest('form').submit();}">
                                                Delete
                                            </a>
                                        </form>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </table>
                <div class="p-4">
                    {{ $submissions->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
