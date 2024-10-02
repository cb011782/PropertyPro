<x-app-layout>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .bg-sidebar { background: #3d68ff; }
        .cta-btn { color: #3d68ff; }
        .upgrade-btn { background: #1947ee; }
        .upgrade-btn:hover { background: #0038fd; }
        .active-nav-link { background: #1947ee; }
        .nav-item:hover { background: #1947ee; }
        .account-link:hover { background: #3d68ff; }

        /* Custom scroll and table style */
        .table-container {
            max-height: 500px;
            overflow-y: auto;
            overflow-x: auto; /* Allow horizontal scroll if necessary */
        }

        .table-container table {
            width: 100%;
            border-collapse: collapse;
            max-width: 100%; /* Prevent table from exceeding container */
        }

        .table-container th, .table-container td {
            padding: 12px 15px;
            text-align: left;
            white-space: nowrap;
        }

        .table-container th {
            background-color: #f3f4f6;
            font-weight: 600;
        }

        .table-container td {
            border-bottom: 1px solid #e5e7eb;
        }

        /* Styling for action buttons */
        .action-buttons {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .action-buttons a, .action-buttons button {
            padding: 0.5rem 1rem;
            font-size: 0.875rem;
            text-align: center;
            width: 100%;
        }

        .truncate {
            max-width: 150px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        /* Specific column widths */
        .column-id { width: 5%; }
        .column-address { width: 25%; }
        .column-type { width: 10%; }
        .column-price { width: 10%; }
        .column-size { width: 10%; }
        .column-bedrooms { width: 10%; }
        .column-bathrooms { width: 10%; }
        .column-description { width: 20%; }
        .column-status { width: 10%; }
        .column-date { width: 10%; }
    </style>



        <!-- Main Content -->
        <div class="flex flex-col w-full">
            <!-- Header -->
            <header class="w-full bg-white shadow-sm py-4 px-6 flex items-center justify-between">
                <h2 class="text-xl font-semibold text-gray-800">Properties</h2>
            </header>



                <!-- Content -->
            <div class="py-5 px-5">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="p-6">
                        <!-- Add Property Button -->
                        <div class="mb-4">
                            <a href="{{ route('properties.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                                Add Property
                            </a>
                        </div>

                        <!-- Properties Table -->
                        <div class="table-container overflow-x-auto">
                            <table class="min-w-full">
                                <thead class="bg-gray-100 text-gray-600">
                                <tr>
                                    <th class="column-id">ID</th>
                                    <th class="column-address">Address</th>
                                    <th class="column-type">Type</th>
                                    <th class="column-price">Price</th>
                                    <th class="column-size">Size</th>
                                    <th class="column-bedrooms">Bedrooms</th>
                                    <th class="column-bathrooms">Bathrooms</th>
                                    <th class="column-description">Description</th>
                                    <th class="column-status">Status</th>
                                    <th class="column-date">Created At</th>
                                    <th class="column-date">Updated At</th>
                                    <th class="column-actions">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($properties as $property)
                                    <tr class="bg-white border-b">
                                        <td class="column-id">{{ $property->id }}</td>
                                        <td class="column-address">{{ $property->address }}</td>
                                        <td class="column-type">{{ $property->type }}</td>
                                        <td class="column-price">{{ $property->price }}</td>
                                        <td class="column-size">{{ $property->size }}</td>
                                        <td class="column-bedrooms">{{ $property->bedrooms }}</td>
                                        <td class="column-bathrooms">{{ $property->bathrooms }}</td>
                                        <td class="column-description truncate">{{ $property->description }}</td>
                                        <td class="column-status">
                                            <span class="px-2 py-1 rounded-full text-white {{ $property->status == 'sold' ? 'bg-red-500' : ($property->status == 'available' ? 'bg-green-500' : 'bg-yellow-500') }}">
                                                {{ ucfirst($property->status) }}
                                            </span>
                                        </td>
                                        <td class="column-date">{{ $property->created_at->format('Y-m-d') }}</td>
                                        <td class="column-date">{{ $property->updated_at->format('Y-m-d') }}</td>
                                        <td class="column-actions">
                                            <div class="action-buttons">
                                                <a href="{{ route('properties.show', $property->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold rounded">View</a>
                                                <a href="{{ route('properties.edit', $property->id) }}" class="bg-green-500 hover:bg-green-600 text-white font-bold rounded">Edit</a>
                                                <form action="{{ route('properties.destroy', $property->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" onclick="return confirm('Are you sure?')" class="bg-red-500 hover:bg-red-600 text-white font-bold rounded">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                        <!-- Pagination -->
                        <div class="mt-4">
                            {{ $properties->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
