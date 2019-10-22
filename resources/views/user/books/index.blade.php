@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Books</div>
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
                                                <a href="{{ route('user.books.show', $book->id) }}" class="btn btn-outline-success">View</a>
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
