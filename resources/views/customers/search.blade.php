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
                    <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-green-500" id="search_term" name="search_term" value="" required>
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
    </div>

    @if(isset($customers))
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <h2 class="md:flex md:items-center">Results</h2>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                            <th scope="col" class="px-6 py-3">name</th>
                            <th scope="col" class="px-6 py-3">phone</th>
                            <th scope="col" class="px-6 py-3">email</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        @foreach($customers as $customer)
                                <tr>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                    {{$customer->name}}
                                </th>
                                <td class="px-6 py-4">{{$customer->phone}}</td>
                                <td class="px-6 py-4">{{$customer->email}}</td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endif()

    
</x-app-layout>