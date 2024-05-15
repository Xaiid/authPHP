<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        Estadisticas de miembros
        </h2>
    </x-slot>
    
    <div class="back-link">
                    <a href="{{ route('dashboard') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>

    <div class="py-12 members-module">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div>
                        <p>
                    Male: {{ $num_of_male }}
                    Female: {{ $num_of_female }}
                    Non-binary: {{ $num_of_non_binary }}
                    Polygender: {{ $num_of_polygender }}
                    Agender: {{ $num_of_agender }}
                    Genderqueer: {{ $num_of_genderqueer }}
                    Genderfluid: {{ $num_of_genderfluid }}
                        </p>
                    </div>
                 </div>
            </div>
        </div>
    </div>

</x-app-layout>