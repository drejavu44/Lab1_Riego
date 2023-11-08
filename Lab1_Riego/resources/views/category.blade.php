<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Category') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="user-table">
                    <thead>
                        <tr>
                    
                            <th>Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach(\App\Models\Category::all() as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</x-app-layout>