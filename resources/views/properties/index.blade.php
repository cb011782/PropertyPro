<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Properties') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="px-20">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="mt-4">
                    <a href="{{ route('properties.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Property</a>
                </div>
               <table class="table-auto">
                   <thead>
                   <tr>
                   <th class="px-4 py-2">ID</th>
                       <th class="px-4 py-2">Address</th>


                          <th class="px-4 py-2">Type</th>
                            <th class="px-4 py-2">Price</th>
                   <th class="px-4 py-2">Size</th>
                     <th class="px-4 py-2">Bedrooms</th>
                          <th class="px-4 py-2">Bathrooms</th>
                   <th class="px-4 py-2">Description</th>
                       <th class="px-4 py-2">Created At</th>
                       <th class="px-4 py-2">Updated At</th>
                       <th class="px-4 py-2">Actions</th>
                   </tr>

                     </thead>
                     <tbody>
    @foreach($properties as $property)
        <tr>
            <td class="border px-4 py-2">{{ $property->id }}</td>
            <td class="border px-4 py-2">{{ $property->address }}</td>
            <td class="border px-4 py-2">{{ $property->type }}</td>
            <td class="border px-4 py-2">{{ $property->price }}</td>
            <td class="border px-4 py-2">{{ $property->size }}</td>
            <td class="border px-4 py-2">{{ $property->bedrooms }}</td>
            <td class="border px-4 py-2">{{ $property->bathrooms }}</td>
            <td class="border px-4 py-2">{{ $property->description }}</td>
            <td class="border px-4 py-2">{{ $property->created_at }}</td>
            <td class="border px-4 py-2">{{ $property->updated_at }}</td>
            <td class="border px-4 py-2">
                <a href="{{ route('properties.show', $property->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">View</a>
                <a href="{{ route('properties.edit', $property->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                <form action="{{ route('properties.destroy', $property->id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                            onclick="return confirm('Are you sure?')"
                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                </form>
        </tr>
    @endforeach
</tbody>
               </table>
                {{ $properties->links()}}







            </div>
        </div>
    </div>
</x-app-layout>
