@extends('layouts.master')
@section('title')
 Halaman Tampil Category
@endsection
@section('content')

<a href="/category/create" class="btn btn-primary btn-sm my-3">Create</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($categories as $item)
      <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$item->name}}</td>
        <td>
          
          <form action="/category/{{ $item->id }}" method="POST">
            <a href="/category/{{$item->id}}" class="btn btn-info btn-sm">Detail</a>
          <a href="/category/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
          @csrf
          @method('DELETE')

          <input type="submit" value="Delete" class="btn btn-danger btn-sm">
          </form>
        </td>
      </tr>
    @empty
      <tr>
        <td><h1>Tidak Ada Category</h1></td>
      </tr>
    @endforelse
   
  </tbody>
</table>

@endsection