<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('translation.navigation.users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-xl table-view-wrapper  bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-90">
                <livewire:users.users-table-view />
            </div>
        </div>
    </div>
</x-app-layout>