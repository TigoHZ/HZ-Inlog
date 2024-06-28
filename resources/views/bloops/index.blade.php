@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row clearfix mb-3">
            <div class="col-lg-12">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <a class="btn btn-info mr-2" href="{{ route('login') }}">Login</a>
                        <a class="btn btn-info" href="{{ route('register') }}">Register</a>
                    </div>
                    <h2 class="mb-0">Bloops</h2>
                    @auth
                        <div>
                            <a class="btn btn-success" href="{{ route('bloops.create') }}">Create New Bloop</a>
                        </div>
                    @endauth
                </div>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Description</th>
                <th width="280px">Action</th>
            </tr>
            </thead>
            <tbody>
            @php $i = 0; @endphp
            @foreach ($bloops as $bloop)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $bloop->name }}</td>
                    <td>{{ $bloop->description }}</td>
                    <td>
                        <form action="{{ route('bloops.destroy', $bloop->id) }}" method="POST" class="d-inline">
                            <a class="btn btn-info" href="{{ route('bloops.show', $bloop->id) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('bloops.edit', $bloop->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <br>
        <div class="d-flex justify-content-start">
            <button class="btn btn-secondary mr-2" onclick="window.location.href='{{ route('simulate-404') }}'">Simulate 404 Error</button>
            {{-- <button class="btn btn-secondary mr-2" onclick="window.location.href='{{ route('simulate-419') }}'">Simulate 419 Error</button> --}}
            <button class="btn btn-secondary" onclick="window.location.href='{{ route('simulate-500') }}'">Simulate 500 Error</button>
        </div>
    </div>
@endsection

<script>
    function goBack() {
        var previousUrl = '{{ Session::get("previous_url") }}';
        var currentUrl = '{{ url()->current() }}';

        if (previousUrl && previousUrl !== currentUrl) {
            window.location.href = previousUrl;
        } else {
            window.history.back();
        }
    }
</script>
