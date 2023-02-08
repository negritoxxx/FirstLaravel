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
                <x-jet-welcome :posts="$posts"/>
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
