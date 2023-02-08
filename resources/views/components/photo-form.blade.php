<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <div>

        {!! Form::open(['route' => ['updatePhoto', $user], 'files' => 'true']) !!}

            <div class="">
                <div class="">
                    <div class="flex justify-center">
                        <img  class="max-h-72 rounded-md" id="picture" src="{{ Storage::url(Auth::user()->image->url) }}">
                    </div>
                </div>
            </div>

            <div class="flex justify-center">
                <label for="file" class="cursor-pointer mt-2 mr-2 inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition">
                    Seleccione la nueva Imágen de tú Perfil
                    {!! Form::file('file', ['id'=> 'file', 'class' => 'hidden', 'accept' => 'image/*']) !!}
                </label>
            </div>

            <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                {!! Form::submit('Cambiar Imágen', ['wire:target' => 'photo', 'wire:loading.attr' => 'disabled', 'class' => 'cursor-pointer inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition']) !!}
            </div>
        {!! Form::close() !!}
    </div>
</div>