<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div id="notification" class="alert mx-3 invisible"></div>
                @yield('content')
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            @if(auth()->user()->can('add posts'))
                <a href="{{ route('created-post') }}"  class="btn btn-success mt-3 mb-3">Created article</a> 
            @endif
            @if(auth()->user()->can('show posts'))
            @foreach ($posts as $post)
                <h5 class="card-header">{{ $post->name }}</h5>
                    <div class="card-body p-6 bg-white mb-4">
                        <h5 class="card-title">post content</h5>
                            <p class="card-text">{{ $post->text }}</p>
                            <p class="card-text">{{ $post->created_at }}</p>
                            @if(auth()->user()->can('edit posts'))
                            <a href="{{ route('edit-post', $post->id) }}" class="btn btn-primary">Edit</a>
                            @endif
                            @if(auth()->user()->can('delete posts'))
                            <form action="{{ route('delete-post', $post->id) }}" method="POST" style="display: inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            @endif
                    </div>
            @endforeach   
            @endif    
        </div>
    </div>
</x-app-layout>

