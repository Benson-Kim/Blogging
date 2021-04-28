@extends('layouts.master')

@section('content')
<div class="col-sm-8">
        
            <h1>Reset Password</h1>
        
        <div class="card-body">
            <form action="/reset-password" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="token" value = "{{ $token }}">

                <div class="form-group">
                    <label for="name">E-mail Address:</label>
                    <input type="email" name="email" id="email" class="form-control" autocomplete="email" autofocus>
                </div>

                <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirm Password:</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
            </div>

                <div class="form-group">
                    <button type="submit"  class="btn btn-primary" >Reset Password</button>
                </div>

                
            </form>
        </div>
            @include ('layouts.errors')
        </form>
    </div>
@endsection