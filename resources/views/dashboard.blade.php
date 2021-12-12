<x-app-layout>
    <x-slot name="header">
     {{-- KEEPING EMPTY BECAUSE NICE STYLING --}}
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1>Jij hebt <span class="text-gray-500">{{\App\Models\Media::all()->where('user_id', '=', \Illuminate\Support\Facades\Auth::user()->id)->count()}}</span> bestanden geupload!</h1>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
