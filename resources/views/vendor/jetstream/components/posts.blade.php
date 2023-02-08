<div class="p-6">
    <div class="flex items-center">
        {{-- <img class="h-8 w-8 rounded-full object-cover" src="{{ Storage::url($posts->user->image->url) }}" alt="{{ Auth::user()->name }}" /> --}}
        <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="https://laravel.com/docs">Documentation</a></div>
    </div>

    <div class="ml-12">
        <div class="mt-2 text-sm text-gray-500">
            Laravel has wonderful documentation covering every aspect of the framework. Whether you're new to the framework or have previous experience, we recommend reading all of the documentation from beginning to end.
        </div>

        <a href="https://laravel.com/docs">
            <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                <div>Explore the documentation</div>

                <div class="ml-1 text-indigo-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg>
                </div>
            </div>
        </a>
    </div>