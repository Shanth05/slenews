@extends('layouts.app')

@section('content')
    <h1>News Articles</h1>
    <a href="{{ route('articles.create') }}" class="btn btn-primary">Create New Article</a>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Category</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                <tr>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->author->name }}</td>
                    <td>{{ $article->category->name }}</td>
                    <td>
                        <a href="{{ route('articles.show', $article) }}" class="btn btn-info">View</a>
                        <a href="{{ route('articles.edit', $article) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('articles.destroy', $article) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
