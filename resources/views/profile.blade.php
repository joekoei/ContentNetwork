<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="md:text-center">Gegevens van {{Auth::user()->name}}</h1>
                    <form action="{{route('profile.update')}}" method="POST" class="md:m-4" enctype="multipart/form-data">
                        @csrf
                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3">
                                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                    Your email
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input
                                    class="bg-gray-100 appearance-none border-2 border-gray-100 rounded w-full
                                     py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                                    id="inline-full-name" type="email" name='email' value="{{Auth::user()->email}}">
                            </div>
                        </div>

                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3">
                                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                    Your name
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input
                                    class="bg-gray-100 appearance-none border-2 border-gray-100 rounded w-full
                                     py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                                    id="inline-full-name" type="text" name="name" value="{{Auth::user()->name}}">
                            </div>
                        </div>

                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3">
                                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                                    Your profile picture
                                </label>
                            </div>
                            <div class="md:w-2/3">
                                <input
                                       class="bg-gray-100 appearance-none border-2 border-gray-100 rounded w-full
                                     py-2 px-4 text-gray-700 leading-tight focus:outline-none"
                                       id="inline-full-name" type="file" name="file">
                            </div>
                        </div>

                        <div class="md:flex md:justify-end mb-6">
                            <input type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" value="Edit your Profile">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
