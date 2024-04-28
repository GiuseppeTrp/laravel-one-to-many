@extends('layouts.app')

@section('content')

<div class="container py-5">

  <h1>{{$type->title}}</h1>
  

  <p>
      {{$type->description}}
  </p>

  <hr>

  <a href="{{route('admin.types.edit', $type->id)}}" class="btn btn-warning">Modify</a>

  <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
      Delete
  </button>

<!-- Button trigger modal -->
  
  <!-- Modal -->
  <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <div class="modal-header">
            <h1 class="modal-title fs-5" id="deleteModalLabel">Delete</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
            are you shure?
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancel</button>
            <form action="{{route('admin.types.destroy', $type->id)}}" method="POST">
                @csrf
                @method("DELETE")
                <button class="btn btn-danger">confirm</button>
            </form>
        </div>

      </div>
    </div>
  </div>


</div>

@endsection