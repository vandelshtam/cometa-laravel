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
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <a href="{{ route('users.create') }}"  class="btn btn-success mt-3 mb-3">Add new users</a> 
            @foreach ($users as $user)
                <h5 class="card-header">{{ $user->name }}</h5>
                    <div class="card-body p-6 bg-white mb-4">
                        <h5 class="card-title">name user</h5>
                            <p class="card-text">Role: 
                                @foreach ($user->roles as $role)
                                     {{ $role['name'] }}</p>
                                @endforeach  
                            <p class="card-text">{{ $user->name }}</p>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            
                    </div>
            @endforeach   
                
        </div>
    </div>
</x-app-layout>