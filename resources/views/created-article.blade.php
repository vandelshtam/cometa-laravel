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
            <a href="{{ route('created-new-article') }}"  class="btn btn-success mt-3 mb-3">Created article</a>    
                <h5 class="card-header">Рекомендуемые посты</h5>
                    <div class="card-body p-6 bg-white">
                        <h5 class="card-title">Особое обращение с заголовком</h5>
                            <p class="card-text">С вспомогательным текстом ниже в качестве естественного перехода к дополнительному контенту.</p>
                            <a href="#" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                    </div>
        </div>
    </div>
</x-app-layout>
