<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('notes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
         
<a href="{{ route('notes.create') }}"  class="btn-link btn-lg mb-2" >+ New note</a>

            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg mt-4">
               {{-- to show the  all errors  --}}
                {{-- @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
                    
                @endforeach --}}
            <form action="{{ route('notes.store') }}" method="POST">
                @csrf
                <x-text-input type="text" field="title" name="title"  placeholder="Title" class="w-full" autocomplete="off" :value="@old('title')"></x-text-input>
               
                <x-text-textarea name="text" id="" rows="10" field="text"  placeholder="Typing here..." class="w-full mt-4" :value="@old('text')"></x-text-textarea>
             
            <br>
  <x-primary-button  class="mt-4">Save notes</x-primary-button>
            </form>
            </div>
 
        </div>
        </div>
    </div>
</x-app-layout>
