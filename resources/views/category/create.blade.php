@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('category.create')}}">Create Category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('category.index')}}">Category Lists</a>
                </li>
            </ul>
            <div class="col-md-8 mt-3">
                <form action="{{route('category.store')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Category</label>
                        <input type="text" name="category" value="{{old('category')}}"  class="form-control  @error('category') is-invalid @enderror">
                        @error('category')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <input type="submit" class="btn btn-primary" value="Create Category">
                </form>
            </div>
        </div>
    </div>
@endsection
