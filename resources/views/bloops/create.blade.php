@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h2>Create New Bloop</h2>
                    </div>
                    <div class="card-body">
                        <a class="btn btn-primary mb-3" href="{{ route('bloops.index') }}"> Back</a>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('bloops.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name"><strong>Name:</strong></label>
                                <input type="text" name="name" class="form-control" placeholder="Name" required>
                                <small class="form-text text-muted">Name is required and should be a maximum of 255 characters.</small>
                            </div>
                            <div class="form-group">
                                <label for="description"><strong>Description:</strong></label>
                                <textarea class="form-control" name="description" placeholder="Description" required></textarea>
                                <small class="form-text text-muted">Description is required.</small>
                            </div>
                            <div class="form-group">
                                <label for="colour"><strong>Colour:</strong></label>
                                <select name="colour" class="form-control" required>
                                    <option value="">Select a Colour</option>
                                    <option value="Red">Red</option>
                                    <option value="Green">Green</option>
                                    <option value="Blue">Blue</option>
                                    <option value="Yellow">Yellow</option>
                                    <option value="Black">Black</option>
                                    <option value="White">White</option>
                                </select>
                                <small class="form-text text-muted">Colour is required.</small>
                            </div>
                            <div class="form-group">
                                <label for="shape"><strong>Shape:</strong></label>
                                <select name="shape" class="form-control" required>
                                    <option value="">Select a Shape</option>
                                    <option value="Circle">Circle</option>
                                    <option value="Square">Square</option>
                                    <option value="Triangle">Triangle</option>
                                    <option value="Rectangle">Rectangle</option>
                                    <option value="Hexagon">Hexagon</option>
                                </select>
                                <small class="form-text text-muted">Shape is required.</small>
                            </div>
                            <div class="form-group">
                                <label for="age"><strong>Age:</strong></label>
                                <input type="number" name="age" class="form-control" placeholder="Age" required min="0">
                                <small class="form-text text-muted">Age is required and should be a non-negative integer.</small>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
