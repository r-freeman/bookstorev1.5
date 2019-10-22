@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Welcome
                        <a href="{{route('admin.books.index')}}" class="btn btn-link float-right">Books</a>
                    </div>

                    <div class="card-body">
                        Welcome to My Bookstore!
                        <br>
                        Learn more <a href="{{route('about')}}">about us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
