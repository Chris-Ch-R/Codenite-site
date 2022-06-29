<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Question') }}
        </h2>
    </x-slot>

    <div class="py-12" >
        <a href="{{route('question-collection' , ['collection' => 'ARRAY'])}}" class="w-full">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white  overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white  border-b border-gray-200">
                        Array

                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="py-12">
        <a href="{{route('question-collection' , ['collection' => 'LOOP'])}}" class="w-full">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        LOOP
                    </div>
                </div>
            </div>
        </a>
    </div>
</x-app-layout>
