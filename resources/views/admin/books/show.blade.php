@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{ $book->title }}
                    </div>
                    <div class="card-body">
                        <table class="table table-hover" id="books-table">
                            <tbody>
                                <tr>
                                    <td>Title</td>
                                    <td>{{ $book->title }}</td>
                                </tr>
                                <tr>
                                    <td>Author</td>
                                    <td>{{ $book->author }}</td>
                                </tr>
                                <tr>
                                    <td>Publisher</td>
                                    <td>{{ $book->publisher }}</td>
                                </tr>
                                <tr>
                                    <td>Year</td>
                                    <td>{{ $book->year }}</td>
                                </tr>
                                <tr>
                                    <td>ISBN</td>
                                    <td>{{ $book->isbn }}</td>
                                </tr>
                                <tr>
                                    <td>Price</td>
                                    <td>{{ $book->price }}</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="btn-group-md" role="group" aria-label="Basic example">
                            <a href="{{ route('admin.books.index') }}" class="btn btn-outline">Back</a>
                            <a href="{{ route('admin.books.edit', $book->id) }}" class="btn btn-outline-primary">Edit</a>
                            <form action="{{ route('admin.books.destroy', $book->id) }}" style="display: inline-block" method="POST">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="form-control btn btn-outline-danger" onclick="return confirm('Delete {{ $book->title }}?')">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
