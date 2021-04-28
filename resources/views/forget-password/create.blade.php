@extends('layouts.master')

@section('content')

<div class="col-sm-8">
        
            <h1>Reset Password</h1>
        
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form action="/forgot-password" method="post">
                {{ csrf_field() }}
                
                <div class="form-group">
                    <label for="name">E-mail Address:</label>
                    <input type="email" name="email" id="email" class="form-control" autocomplete="email" autofocus>
                </div>

                <div class="form-group">
                    <button type="submit"  class="btn btn-primary" >Send Password Reset Link</button>
                </div>

                
            </form>
        </div>
            @include ('layouts.errors')
        </form>
    </div>

@endsection