<x-app-layout>
    <x-slot name="header">
        {{-- KEEPING EMPTY BECAUSE NICE STYLING --}}
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border border-gray-300">
                    <div class="max-w-md mx-auto rounded-lg overflow-hidden md:max-w-lg">
                        <div class="md:flex">
                            <div class="w-full">
                                <div class="p-4 border-b-2">
                                    <span class="text-lg font-bold text-gray-600">Upload your File</span>
                                </div>
                                <form action="{{route('file.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="p-3">
                                        <div class="mb-2">
                                            <div class="relative h-40 rounded-lg border-dashed border-2 border-gray-200 bg-white flex justify-center items-center hover:cursor-pointer">
                                                <div class="absolute">
                                                    <div class="flex flex-col items-center ">
                                                        <i class="fa fa-cloud-upload fa-3x text-gray-200"></i>
                                                        <span class="block text-gray-400 font-normal">Move your file to here</span>
                                                        <span class="block text-gray-400 font-normal">or</span>
                                                        <span class="block text-blue-400 font-normal">Browse files on your pc</span>
                                                    </div>
                                                </div>
                                                <input type="file" class="h-full w-full opacity-0" name="file">
                                            </div>
                                        </div>
                                        <div class="mt-3 text-center pb-3">
                                            <input type="submit" class="w-full h-12 text-lg w-32 bg-blue-600 rounded text-white hover:bg-blue-700" value="Store your file">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
