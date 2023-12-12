<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Customer 詳細') }}
        </h2>
    </x-slot>

    <!--  -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <h2 class="md:flex md:items-center">{{$customer_data->name}}: 対応履歴</h2>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                            <th scope="col" class="px-6 py-3">date</th>
                            <th scope="col" class="px-6 py-3">note</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        @foreach($customer_data->interactions as $interaction)
                            <tr>
                                <th class="px-6 py-4">{{$interaction->interaction_date}}</th>
                                <td class="px-6 py-4">{{$interaction->notes}}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>