@extends('layouts.default')
    @section('content')
        <div class="container py-5">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">
                    <form method="POST"  action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="card shadow">
                        <div class="card-header">
                            <h1 class="card-title">Sign Up</h1>
                        </div>
                        <div class="card-body px-4">
                                <div class="form-group {{ $errors->has('name') ? 'has-error' :'' }} py-2" >
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                                    {!! $errors->first('name','<span class="help-block">:message</span>') !!}
                                    </div>
                                    <div class="form-group {{ $errors->has('email' ? 'has-error':'') }} py-2">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" value="{{ old('email') }}" required> 
                                            {!! $errors->first('email','<span class="help-block">:message</span>') !!}
                                        </div>  
                                        <div class="form-group {{ $errors->has('password' ? 'has-error':'') }} py-2">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" required>
                                            {!! $errors->first('password','<span class="help-block">:message</span>') !!}
                                            </div>
                                            <div class="form-group  {{ $errors->has('password_confirmation' ? 'has-error':'') }} py-2">
                                                <label for="password_confirmation" class="form-label">Confirm password</label>
                                                <input type="password" name="password_confirmation" class="form-control" required>
                                                {!! $errors->first('password_confirmation','<span class="help-block">:message</span>') !!}
                                            </div>
                        </div>
                            <div class="form-group text-end py-2" >
                                <a href="{{ route('login') }}">Alredy registered ?</a>     
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-block">Register</button>
                            </div>
                    </div>
                 </form>
                </div>
            </div>
            
        </div>
 @endsection