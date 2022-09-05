<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('created-post') }}"  class="btn btn-success mt-3 mb-3">Created article</a> 
            @foreach ($posts as $post)
                <h5 class="card-header">{{ $post->name }}</h5>
                    <div class="card-body p-6 bg-white mb-4">
                        <h5 class="card-title">post content</h5>
                            <p class="card-text">{{ $post->text }}</p>
                            <a href="#" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                    </div>
            @endforeach   
                
        </div>
    </div>
</x-app-layout>

