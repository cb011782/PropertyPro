<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Property') }} {{ $property->id }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-xl rounded-lg overflow-hidden">
                @if ($errors->any())
                    <div class="bg-red-200 text-red-800 p-4 rounded mb-4">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('properties.update', $property->id) }}" method="POST" class="p-6" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="mb-4">
                            <label for="address" class="block text-gray-700 font-bold mb-2">Address</label>
                            <input type="text" name="address" id="address" value="{{ old('address', $property->address) }}" class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-blue-300">
                        </div>

                        <div class="mb-4">
                            <label for="type" class="block text-gray-700 font-bold mb-2">Type</label>
                            <input type="text" name="type" id="type" value="{{ old('type', $property->type) }}" class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-blue-300">
                        </div>

                        <div class="mb-4">
                            <label for="price" class="block text-gray-700 font-bold mb-2">Price</label>
                            <input type="text" name="price" id="price" value="{{ old('price', $property->price) }}" class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-blue-300">
                        </div>

                        <div class="mb-4">
                            <label for="size" class="block text-gray-700 font-bold mb-2">Size (sq ft)</label>
                            <input type="text" name="size" id="size" value="{{ old('size', $property->size) }}" class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-blue-300">
                        </div>

                        <div class="mb-4">
                            <label for="bedrooms" class="block text-gray-700 font-bold mb-2">Bedrooms</label>
                            <input type="number" name="bedrooms" id="bedrooms" value="{{ old('bedrooms', $property->bedrooms) }}" min="0" class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-blue-300">
                        </div>

                        <div class="mb-4">
                            <label for="bathrooms" class="block text-gray-700 font-bold mb-2">Bathrooms</label>
                            <input type="number" name="bathrooms" id="bathrooms" value="{{ old('bathrooms', $property->bathrooms) }}" min="0" class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-blue-300">
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="description" class="block text-gray-700 font-bold mb-2">Description</label>
                        <textarea name="description" id="description" rows="4" class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-blue-300">{{ old('description', $property->description) }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label for="image" class="block text-gray-700 font-bold mb-2">Image</label>
                        @if($property->image)
                            <img src="{{ asset('storage/' . $property->image) }}" alt="Current Image" class="mb-2" style="max-width: 200px;">
                            <p>Current Image: <strong>{{ $property->image }}</strong></p>
                        @endif
                        <input type="file" name="image" id="image" class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-blue-300">
                        <small class="text-gray-500">Leave blank to keep the current image.</small>
                    </div>

                    <div class="mb-4">
                        <label for="status" class="block text-gray-700 font-bold mb-2">Status</label>
                        <select name="status" id="status" required class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:ring focus:ring-blue-300">
                            <option value="available" {{ $property->status == 'available' ? 'selected' : '' }}>Available</option>
                            <option value="sold" {{ $property->status == 'sold' ? 'selected' : '' }}>Sold</option>
                            <option value="new" {{ $property->status == 'new' ? 'selected' : '' }}>New</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update Property</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
