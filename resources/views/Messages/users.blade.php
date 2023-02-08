<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="flex justify-center mb-5">
                        <h1 class="ml-4 text-lg text-gray-600 leading-7 font-bold uppercase">Chatea con la gente FACEBOBO!</h1>
                    </div>
                </div>
        
                <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                    @foreach ($users as $user)
                        <div class="p-6 rounded-md">
                            <div class="flex items-center opacity-100">
                                <a href="{{route('usersMessageShow', $user)}}" class="flex items-center opacity-100">
                                    <img class="h-8 w-8 rounded-full object-cover" src="{{ Storage::url($user->image->url) }}" alt="{{ Auth::user()->name }}" />
                                    <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">{{$user->name}}</div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>    
    </div>
</x-app-layout>