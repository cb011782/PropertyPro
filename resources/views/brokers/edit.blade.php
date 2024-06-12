<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Broker') }} {{__('ID ')}}{{$broker->id}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-20 py-20">
                <form method="POST" action="{{ route('brokers.update', $broker->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="grid grid-cols-1 gap-6">
                        <div class="mt-4">
                            <x-label for="first_name" :value="__('First Name')" />
                            <x-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" value="{{ $broker->first_name }}" required autofocus />
                        </div>
                        <div class="mt-4">
                            <x-label for="last_name" :value="__('Last Name')" />
                            <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" value="{{ $broker->last_name }}" required autofocus />
                        </div>
                        <div class="mt-4">
                            <x-label for="email" :value="__('Email')" />
                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ $broker->email }}" required />
                        </div>
                        <div class="mt-4">
                            <x-label for="phone" :value="__('Phone')" />
                            <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" value="{{ $broker->phone }}" required />
                        </div>
                        <div class="mt-4">
                            <x-button class="ml-4">
                                {{ __('Update Broker') }}
                            </x-button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
