@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Books
                        <a href="{{ route('admin.books.create') }}" class="btn btn-link float-right">Add</a>
                    </div>
                    <div class="card-body">
                        @if (count($books) === 0)
                            <p>There are no books.</p>
                        @else
                            <table class="table table-hover" id="books-table">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th>Publisher</th>
                                        <th>Year</th>
                                        <th>ISBN</th>
                                        <th>Price</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($books as $book)
                                    <tr data-id="{{ $book->id }}">
                                        <td> {{ $book->title }}</td>
                                        <td> {{ $book->author }}</td>
                                        <td> {{ $book->publisher }}</td>
                                        <td> {{ $book->year }}</td>
                                        <td> {{ $book->isbn }}</td>
                                        <td> {{ $book->price }}</td>
                                        <td>
                                            <div class="btn-group-md" role="group" aria-label="Basic example">
                                                <a href="{{ route('admin.books.show', $book->id) }}" class="btn btn-outline-success">View</a>
                                                <a href="{{ route('admin.books.edit', $book->id) }}" class="btn btn-outline-primary">Edit</a>
                                                <form action="{{ route('admin.books.destroy', $book->id) }}" style="display: inline-block" method="POST">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <button type="submit" class="form-control btn btn-outline-danger" onclick="return confirm('Delete {{ $book->title }}?')">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
