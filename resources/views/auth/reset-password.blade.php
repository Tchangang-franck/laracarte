@extends('layouts.default')
    @section('content')
        <div class="container" style="margin-right:2px;margin-top:20px;">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">
                    <form method="POST"  action="{{ route('password-store') }}">
                        {{ csrf_field() }}

                        {{-- password reset toke --}}
                        <input type="hidden" name="token"value="{{ $request->route('token') }}">    
                       
                        {{-- Email adresse --}}
                        <div class="form-group {{ $errors->has('email' ? 'has-error':'') }}">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" required>
                            {!! $errors->first('email','<span class="help-block">:message</span>') !!}
                        </div> 
                                    
                        {{-- password --}}
                        <div class="form-group {{ $errors->has('password' ? 'has-error':'') }}">
                            <label for="password" class="form-label">Password</label>
                             <input type="password" name="password" class="form-control" required>
                            {!! $errors->first('password','<span class="help-block">:message</span>') !!}
                        </div>
                        
                        {{-- confirm password --}}
                        <div class="form-group  {{ $errors->has('confpassword' ? 'has-error':'') }}">
                            <label for="confpassword" class="form-label">Confirm password</label>
                            <input type="password" name="confpassword" class="form-control" required>
                            {!! $errors->first('confpassword','<span class="help-block">:message</span>') !!}
                        </div>
                        <br>   
                        <div class="form-group" style="float:right"> 
                            <button type="submit" class="btn btn-primary btn-block"> Reset Password </button>
                        </div>
                 </form>
                </div>
            </div>
            
        </div>
 @endsection