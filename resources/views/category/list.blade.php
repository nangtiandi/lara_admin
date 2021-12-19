@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('category.create')}}">Create Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active"  aria-current="page" href="{{route('category.index')}}">Category Lists</a>
                </li>
            </ul>
            <div class="col-md-8 mt-3">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Category Name</th>
                            <th>Created Time</th>
                            <th colspan="2">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->category}}</td>
                                <td>{{$category->created_at}}</td>
                                <td>
                                    <a href="{{route('category.edit',$category->id)}}" class="btn btn-warning">Edit</a>
                                </td>
                                <td>
                                    <form action="{{route('category.destroy',$category->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="float-end">{{$categories->links()}}</div>
            </div>
        </div>
    </div>
@endsection
