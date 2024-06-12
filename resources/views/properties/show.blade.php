<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Property')}} {{ $property->id }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="p-6">
                    <div class="flex  items-center">
                        <div class="w 1/2">
                            <h2 class="text-2xl font-semibold text-gray-800 leading-tight"> Property Address: {{ $property->address }}</h2>
                            <p class="text-gray-600 text-sm">Type: {{ $property->type }}</p>

                            <p class="text-gray-600 text-sm">Price: {{ $property->price }}</p>
                            <p class="text-gray-600 text-sm">Size: {{ $property->size }}</p>
                            <p class="text-gray-600 text-sm">No. of Bedrooms: {{ $property->bedrooms }}</p>
                            <p class="text-gray-600 text-sm">No. of Bathrooms: {{ $property->bathrooms }}</p>
                            <p class="text-gray-600 text-sm">Features: {{ $property->description }}</p>
                            <p class="text-gray-600 text-sm">Created At: {{ $property->created_at }}</p>
                            <p class="text-gray-600 text-sm">Updated At: {{ $property->updated_at }}</p>



                    </div>
                    <div class="w-1/2 text  right-0">
                        <a href="{{ route('properties.edit', $property->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                        <form action="{{ route('properties.destroy', $property->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    onclick="return confirm('Are you sure?')"
                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                        </form>


            </div>
        </div>
    </div>
</x-app-layout>
