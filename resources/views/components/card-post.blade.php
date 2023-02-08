@foreach ($posts as $post)
    <div class="p-6 rounded-md">
        <div class="relative flex items-center opacity-100">
            <img class="h-8 w-8 rounded-full object-cover" src="{{ Storage::url($post->user->image->url) }}" alt="{{ Auth::user()->name }}" />
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">
                <a href="https://laravel.com/docs">{{$post->user->name}}</a>
            </div>
            <div class="absolute top-1.5 ml-4 h-fit leading-7 font-semibold object-right" style="right: 0">
                <p class="text-sm text-gray-500 font-bold">Publicado el: </p><a class="text-sm text-gray-500" href="https://laravel.com/docs">{{$post->created_at}}</a>
            </div>
        </div>

        <div class="ml-12">
            <div class="mt-6 text-sm text-gray-500">
                {{$post->content}}
            </div>
        </div>
        <div class="flex justify-center">
            @if ($post->image)
                <img src="{{Storage::url($post->image->url)}}" class="rounded-md mt-2  max-h-72 ">
            @endif
        </div>
    </div>
    <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
        <a href="{{route('profiles.edit', $post)}}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
            Editar
        </a>
        <form action="{{route('profiles.destroy', $post)}}" method="post">
                                        
            @method('delete')
            @csrf

            <button class="ml-3 inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring focus:ring-red-200 active:bg-red-600 disabled:opacity-25 transition" type="submit">Eliminar</button>
        </form>
    </div>
@endforeach
