<x-app-layout>
    <div class="pt-5 min-w-0" style="min-height: calc(100vh - 68px);">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 h-full">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="flex justify-left mb-5">
                        <h1 class="mt-3 text-lg text-gray-600 leading-7 font-bold overflow-hidden" style="white-space: nowrap; text-overflow: ellipsis;">{{$user->name}}</h1>
                    </div>
                </div>
                <div>
                    <div style="min-height: calc(100vh - 210px);">
        
                    </div>
                    <div class="flex items-center w-full h-12">
                        {!! Form::open(['autocomplete' => 'off', 'files' => 'true', 'class' => 'w-full h-full flex float-left']) !!}
                            
                            <div class="relative w-14 h-14 m-0 cursor-pointer">
                                <p class="p-0 m-0 w-full h-14 items-center cursor-pointer">
                                    <img src="{{ Storage::url('pngwing.adjunto.png') }}" alt="" class="cursor-pointer mt-0 ml-2 w-11 h-11 p-1 rounded-2xl">
                                    {!! Form::file('', ['class' => 'cursor-pointer absolute w-full h-14 opacity-0', 'style' => 'top: 0; left: 0; right: 0; bottom: 0;']) !!}
                                </p>
                            </div>

                            <div class="items-center text-center text-sm text-gray-600 leading-7" style="width: calc(100% - 100px);">
                                {!! Form::text('message', null, ['class' => 'mt-1 pl-5 pr-8 rounded-3xl border border-sky-500 resize-none w-11/12 h-9']) !!}
                            </div>
                        
                            <div class="relative w-12 h-10 mr-2">
                                <p class="p-0 mr-3 w-full h-14 items-center cursor-pointer">
                                    <img src="{{ Storage::url('send.png') }}" alt="" class="cursor-pointer mt-0 w-11 h-11 p-1 rounded-2xl">
                                    {!! Form::submit('', ['class' => 'absolute w-full h-10 opacity-0', 'style' => 'top: 0; left: 0; right: 0; bottom: 0;']) !!}
                                </p>
                            </div>        
                        {!! Form::close() !!} 
                    </div>
                </div>
            </div>
        </div>    
    </div>
</x-app-layout>