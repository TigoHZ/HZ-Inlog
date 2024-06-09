@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Bloops</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('bloops.create') }}"> Create New Bloop</a>
                </div>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Description</th>
                <th width="280px">Action</th>
            </tr>
            @php
                $i = 0;
            @endphp
            @foreach ($bloops as $bloop)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $bloop->name }}</td>
                    <td>{{ $bloop->description }}</td>
                    <td>
                        <form action="{{ route('bloops.destroy',$bloop->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('bloops.show',$bloop->id) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('bloops.edit',$bloop->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
