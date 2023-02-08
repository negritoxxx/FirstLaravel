<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <div>
        {!! Form::open(['route' => 'home.store', 'autocomplete' => 'off', 'files' => 'true']) !!}

            <div class="grid gap-4 grid-cols-2 grid-rows-1">
                <div class="">
                    <div class="">
                        <img  id="picture" src="https://cdn.pixabay.com/photo/2022/11/14/20/14/compass-7592447_960_720.jpg">
                    </div>
                </div>
                <div class="h-full">
                    <div class="relative h-full">
                        {!! Form::textarea('content', null, ['class' => 'w-full h-full absolute resize-none',
                            'placeholder' => 'Pública lo que gustes Acá!!']) !!}
                    </div>
                </div>
            </div>

            <x-jet-validation-errors class="mb-4" />

            <label for="file" class="cursor-pointer mt-2 mr-2 inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition">
                Seleccione la Imágen de la Publicación
                {!! Form::file('file', ['id'=> 'file', 'class' => 'hidden', 'type' => 'file', 'accept' => 'image/*']) !!}
            </label>

            <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                {!! Form::submit('Publicar', ['class' => 'inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition']) !!}
            </div>
        {!! Form::close() !!}
    </div>
</div>

<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">

    @foreach ($posts as $post)
        <div class="p-6 rounded-md">
            <div class="flex items-center opacity-100">
                <img class="h-8 w-8 rounded-full object-cover" src="{{ Storage::url($post->user->image->url) }}" alt="{{ Auth::user()->name }}" />
                <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="https://laravel.com/docs">{{$post->user->name}}</a></div>
            </div>

            <div class="ml-12">
                <div class="mt-2 text-sm text-gray-500">
                    {{$post->content}}
                </div>
            </div>
            <div class="flex justify-center">
                @if ($post->image)
                    <img src="{{Storage::url($post->image->url)}}" class="rounded-md mt-2  max-h-72 ">                    
                @endif    
            </div>
        </div>
    @endforeach
</div>
