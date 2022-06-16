<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Submission') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                <form action="{{ route('submissions.update', $submission) }}" method="POST">
                    @csrf @method('PUT')

                    <div class="py-4">
                        <x-jet-label for="title" value="{{ __('Title') }}" />
                        <x-jet-input id="title" class="block mt-1 w-full" type="text" name="title"
                            :value="old('title', $submission->title)" required autofocus />

                        @error('title')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex items-center justify-end mt-4">

                        <a href="{{ route('submissions.show', $submission) }}" class="p-4">Cancel</a>

                        <x-jet-button class="ml-4">
                            {{ __('Save') }}
                        </x-jet-button>
                    </div>

                </form>


            </div>
        </div>
    </div>
</x-app-layout>
