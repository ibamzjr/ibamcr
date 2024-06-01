@extends('admin.admin')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Categories</h1>

    <a href="{{ route('admin.categories.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Add New Category</a>

    @if ($categories->count() > 0)
    <table class="min-w-full">
        <thead>
            <tr>
                <th class="text-left">Name</th>
                <th class="text-left">Image</th>
                <th class="text-left">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{ $category->name }}</td>
                <td><img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}" class="w-24 h-24"></td>
                <td>
                @if($category)
    <a href="{{ route('admin.categories.edit', ['category' => $category->id]) }}">Edit</a>
@endif

                    <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>No categories found.</p>
    @endif
</div>
@endsection
