<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Interaction 新規登録') }}
        </h2>
    </x-slot>

    <!--  -->
    <div class="py-12">
        <form action="{{ route('interactions.store') }}" class="w-full max-w-sm" method="post">
            @csrf

            <!-- customer -->
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="name">
                    Customer
                </label>
                </div>
                <div class="md:w-2/3">
                <select name="customer_id" id="customer_id">
                    @foreach($customers as $customer)
                        <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                    @endforeach
                </select>
                </div>
            </div>

            <!-- notes -->
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="phone">
                    Notes
                </label>
                </div>
                <div class="md:w-2/3">
                <textarea class="bg-white-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-green-500" id="notes" name="notes" placeholder=""></textarea>
                </div>
            </div>

            <!-- button -->
            <div class="md:flex md:items-center">
                <div class="md:w-1/3"></div>
                <div class="md:w-2/3">
                <button class="shadow bg-green-500 hover:bg-green-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                    create
                </button>
            </div>
            </div>
        </form> 
    </div>

    
</x-app-layout>