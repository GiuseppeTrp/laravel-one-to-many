@extends('layouts.app')

@section('content')
    <div class="container">

        <a href="{{ route('admin.types.create') }}" class="btn btn-sm btn-outline-success">create a new type</a>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Project Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                </tr>
            </thead>

            @foreach ($types as $type)
                <tbody>
                    <tr>
                        <th scope="row">{{ $type->id }}</th>
                        <td>{{ $type->title }}</td>
                        <td> {{ $type->description }}</td>

                        <td scope="col">
                            <a href="{{ route('admin.types.show', $type->id) }}">
                                <button class="btn btn-outline-success">Details</button>
                            </a>
                        </td>


                    </tr>
                </tbody>
            @endforeach

        </table>

    </div>
@endsection