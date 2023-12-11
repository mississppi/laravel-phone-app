<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Customers') }}
        </h2>
    </x-slot>

    <!--  -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex mb-4">
                <a href="/customers/create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">新規登録</a>
            </div>


            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("顧客") }}
                </div>
                <div class="p-6 text-gray-900">
                    {{ __("顧客") }}
                </div>
                <div class="p-6 text-gray-900">
                    {{ __("顧客") }}
                </div>
                <div class="p-6 text-gray-900">
                    {{ __("顧客") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>