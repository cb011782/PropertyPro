<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Property') }} {{ $property->id }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-xl rounded-lg overflow-hidden">
                <div class="p-6 flex flex-col items-center">
                    @if($property->image)
                        <img src="{{ asset('storage/' . $property->image) }}" alt="Property Image" class="mb-4 w-full h-auto rounded-lg shadow-md max-w-sm">
                    @endif

                    <h2 class="text-2xl font-semibold text-gray-800 leading-tight mb-2">Property Address: {{ $property->address }}</h2>
                    <p class="text-gray-600 text-sm">Type: <strong>{{ $property->type }}</strong></p>
                    <p class="text-gray-600 text-sm">Price: <strong>${{ number_format($property->price, 2) }}</strong></p>
                    <p class="text-gray-600 text-sm">Size: <strong>{{ $property->size }} sq ft</strong></p>
                    <p class="text-gray-600 text-sm">No. of Bedrooms: <strong>{{ $property->bedrooms }}</strong></p>
                    <p class="text-gray-600 text-sm">No. of Bathrooms: <strong>{{ $property->bathrooms }}</strong></p>
                    <p class="text-gray-600 text-sm">Features: <strong>{{ $property->description }}</strong></p>
                    <p class="text-gray-600 text-sm">Created At: <strong>{{ $property->created_at->format('F j, Y') }}</strong></p>
                    <p class="text-gray-600 text-sm">Updated At: <strong>{{ $property->updated_at->format('F j, Y') }}</strong></p>

                    <div class="flex space-x-4 mt-6">
                        <a href="{{ route('properties.edit', $property->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded w-full max-w-xs text-center">Edit</a>

                        <form action="{{ route('properties.destroy', $property->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure?')" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded w-full max-w-xs">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
