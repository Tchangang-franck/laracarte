@extends('layouts.default')
    @section('content')
        <div class="container py-5">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">
                    <form method="POST"  action="">
                        {{ csrf_field() }}
                        <div class="card shadow">
                            <div class="card-header">
                                <h1 class=" card-title">Reset Password</h1>
                            </div>
                            <div class="card-body py-3">
                                    <div class="form-group py-2">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control">
                                    </div>  
                                    <div class="form-group text-end py-2">
                                        <a href="{{ route('login') }}">Back to Login</a>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-block">Email Password Reset Link </button>
                                    </div>
                            </div>
                        </div>       
                 </form>
                </div>
            </div>
        </div>
 @endsection