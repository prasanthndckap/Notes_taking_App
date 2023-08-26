<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('notes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100"> 
                    {{ __("ALL notes") }}   
                </div> --}}
 
                <div class="flex">
                    <p class="opcity-70"> <strong>Created :</strong> {{ $note->created_at->diffForHumans() }}</p>
                    <p class="opcity-70 ml-8"> <strong>updated_at :</strong> {{ $note->updated_at->diffForHumans() }}</p>
                </div>
                </div>
<a href="{{ route('notes.create') }}"  class="btn-link btn-lg mb-2" >+ New note</a>
          
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg mt-4">
                <h2 class="font-bold text-2xl" >
                   {{ $note->title }}
                </h2>
                <p class="mt-6 whitespace-pre-wrap">{{ ($note->text) }}</p>
              
            </div>

         
         
        </div>
        </div>
    </div>
</x-app-layout>
