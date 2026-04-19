@extends('layouts.master')
@section('title')
 Halaman Edit Category
@endsection
@section('content')
  <form action="/category/{{$category->id}}" method="POST">
    @method("PUT")
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>  
    @endif
    @csrf
  <div class="mb-3">
    <label class="form-label">Category Name</label>
    <input type="text" class="form-control" name="name" value="{{old('name', $category->name)}}" >
  </div>
  <div class="mb-3">
    <label class="form-label">Category Description</label>
    <textarea class="form-control" name="description">{{old('description', $category->description)}}</textarea>
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
