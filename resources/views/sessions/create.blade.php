@extends('layouts.master')

@section('content')
    <div class="col-md-8">
        <h1>Sign In</h1>

        <form method="post" action="/login">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="email">Email:</label>
                <input class="form-control" type="email" name="email" id="email" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input class="form-control" type="password" name="password" id="password" required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

            @include('layouts.errors')
        </form>
    </div>
@endsection
