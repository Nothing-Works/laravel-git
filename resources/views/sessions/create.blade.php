@extends('layouts.masterblog')
@section('contentblog')

    <div class="col-sm-8 blog-main">
      <h1>
          Log in
      </h1>
        <form method="post" action="/login">
            {{csrf_field()}}
            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" class="form-control" id="email" name="email" >
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" >
            </div>
            <div class="form-group">
                <a href="/register">Do not have an account?</a>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Log in</button>
            </div>
            @include('layouts.errors')
        </form>
    </div>
@endsection