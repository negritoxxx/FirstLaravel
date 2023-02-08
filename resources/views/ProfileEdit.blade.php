<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @if (session('info'))
                    <div class="alert alert-danger">
                        <div class="p-4 mb-4 text-base text-green-800 font-bold rounded-lg bg-green-100 dark:text-green-400" role="alert">
                            <span class="font-medium">{{session('info')}}</span>
                        </div>
                    </div>
                @endif
                <div class="p-6 rounded-md">
                    {!! Form::model($profile, ['route' => ['profiles.update', $profile], 'autocomplete' => 'off', 'files' => 'true', 'method' => 'put']) !!}

                        <div class="grid gap-4 grid-cols-2 grid-rows-1">
                            <div class="">
                                <div class="flex justify-center">
                                    @isset ($profile->image)
                                        <img  class="rounded-md mt-2  max-h-72 " id="picture" src="{{Storage::url($profile->image->url)}}">
                                    @else
                                        <img  class="rounded-md mt-2  max-h-72 " id="picture" src="https://cdn.pixabay.com/photo/2022/11/14/20/14/compass-7592447_960_720.jpg">    
                                    @endif
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

                        <div class="flex justify-center">
                            <label for="file" class="cursor-pointer ml-4 mt-2 mr-2 inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition">
                                Seleccione una nueva Imágen
                                {!! Form::file('file', ['id'=> 'file', 'class' => 'hidden', 'type' => 'file', 'accept' => 'image/*']) !!}
                            </label>
                        </div>
            
                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                            <p class="text-sm text-gray-500 font-bold">Publicado el: &nbsp</p><p class="text-sm text-gray-500 mr-4" >{{$profile->created_at}}</p>
                            {!! Form::submit('Editar', ['class' => 'cursor-pointer inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition']) !!}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

    <script>
        function cambiarImagen(event) {
            var file = event.target.files[0];
            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src', event.target.result);
            };
            reader.readAsDataURL(file);
        }
    </script>
</x-app-layout>