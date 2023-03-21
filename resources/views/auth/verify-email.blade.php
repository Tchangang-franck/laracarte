@extends('layouts.default')
    @section('content')
            <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
            </div>
            
            @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>

            <div class="container" style="margin-right:2px;margin-top:20px;">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">
                        <form method="POST"  action="{{ route('verification.send') }}">
                            <div class="form-group py-3">
                             <button type="submit" class="btn btn-primary btn-block">Resend verification email</button>
                            </div>                            
                        </form>
               
                        <form  method=" POST" action="{{ route('logout') }}">
                            <div class="form-group py-3">
                            <button type="submit" class="btn btn-primary btn-block">Log Out</button>
                        </div>
                     </form>
                </div>
            </div>
        </div>
 @endsection