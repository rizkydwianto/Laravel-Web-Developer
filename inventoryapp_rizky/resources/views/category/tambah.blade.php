@extends('layouts.master')
@section('title')
 Halaman Tambah Category
@endsection
@section('content')
  <form action="/category" method="POST">
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
    <input type="text" class="form-control" name="name" value="{{old('name')}}" >
  </div>
  <div class="mb-3">
    <label class="form-label">Category Description</label>
    <textarea class="form-control" name="description">{{old('description')}}</textarea>
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
