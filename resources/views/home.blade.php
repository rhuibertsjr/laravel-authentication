@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-sm-around">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card" style="width: 30rem;">
                    <div class="card-header">Change Password</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('password.update_password') }}"> @csrf @method('PUT')

                            @if($errors->count())
                                <div class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                    {{ $error }}<br />
                                @endforeach
                                </div>
                            @endif

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-top">New Password</label>
                                <input class="form-control" type="password" name="new_password" placeholder="Enter your new password" style="width: 50%">
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-top">Password Again</label>
                                <input class="form-control" type="password" name="new_password_confirmation" placeholder="Confirm your new password" style="width: 50%">
                            </div>
                            <button class="btn btn-primary" type="submit">Create new Password</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
