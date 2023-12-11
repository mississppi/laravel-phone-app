<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Customer 検索') }}
        </h2>
    </x-slot>

    <!--  -->
    <div class="py-12">
        <form action="{{ route('performSearch') }}" class="w-full max-w-sm" method="post">
            @csrf

            <!-- 検索 -->
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="name">
                        Search
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-green-500" id="search_term" name="search_term" value="{{}}" required>
                </div>
            </div>

            <!-- button -->
            <div class="md:flex md:items-center">
                <div class="md:w-1/3"></div>
                <div class="md:w-2/3">
                <button class="shadow bg-green-500 hover:bg-green-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                    search
                </button>
            </div>


        </form>

        @if(isset($customers))
            <h2>Results</h2>
            <ul>
                @forelse($customers as $customer)
                    <li>hoge</li>
                @empty
                    <li>No results found</li>
                @endforelse
            </ul>
        @endif()
    </div>

    
</x-app-layout>