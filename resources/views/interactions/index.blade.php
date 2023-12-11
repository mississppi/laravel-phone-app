<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Interactions') }}
        </h2>
    </x-slot>

    <!--  -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex mb-4">
                <a href="/interactions/create" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">新規登録</a>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                            <th scope="col" class="px-6 py-3">customer</th>
                            <th scope="col" class="px-6 py-3">notes</th>
                            <th scope="col" class="px-6 py-3">date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($interactions as $interaction)
                                <tr>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                    {{$interaction->customer->name}}
                                </th>
                                <td class="px-6 py-4">{{$interaction->notes}}</td>
                                <td class="px-6 py-4">{{$interaction->interaction_date}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    
</x-app-layout>