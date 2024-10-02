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
        .card {
            background: #ffffff;
            border-radius: 0.5rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 1.5rem;
            margin: 1rem 0;
        }
        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
        }
        .card-value {
            font-size: 2rem;
            color: #3d68ff;
        }
    </style>

    <div class="bg-gray-100 flex">
        <aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
            <div class="p-6">
                <a href="" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
            </div>
            <nav class="text-white text-base font-semibold pt-3">
                <a href="" class="flex items-center active-nav-link text-white py-4 pl-6 nav-item">
                    <i class="fas fa-tachometer-alt mr-3"></i>
                    Dashboard
                </a>
                <a href="{{ route('properties.index') }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                    <i class="fas fa-home mr-3"></i>
                    Properties
                </a>
                <a href="{{ route('brokers.index') }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                    <i class="fas fa-user mr-3"></i>
                    Brokers
                </a>
                <a href="{{ route('clients.index') }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                    <i class="fas fa-user mr-3"></i>
                    Clients
                </a>
                <a href="{{ route('appointments.index') }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
                    <i class="fas fa-user mr-3"></i>
                    Appointments
                </a>
            </nav>
        </aside>

        <div class="flex-1 py-12 px-6">
            <div class="max-w-7xl mx-auto">
                <h2 class="text-3xl font-semibold mb-6">Dashboard Analytics</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="card">
                        <p class="card-title">Total Properties</p>
                        <p class="card-value">{{ $totalProperties }}</p>
                    </div>
                    <div class="card">
                        <p class="card-title">Sold Properties</p>
                        <p class="card-value">{{ $soldProperties }}</p>
                    </div>
                    <div class="card">
                        <p class="card-title">Total Appointments</p>
                        <p class="card-value">{{ $totalAppointment }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
