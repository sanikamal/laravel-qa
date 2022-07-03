<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Questions') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @foreach ($questions as $q)
                
                <div class="p-6 bg-white border-b border-gray-200">
                
                
                   <h2 class="mt-0" style="font-size: 30px;">{{$q->title}}</h2>
                   {{$q->content}}
                </div>
                    
                @endforeach
            </div>
            {{$questions->links()}}
        </div>
    </div>
</x-app-layout>
