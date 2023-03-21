@extends('layouts.default')
    @section('content')
        <div class="container" style="margin-right:2px;margin-top:20px;">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">
                    <form method="POST"  action="{{ route('password-confirm') }}">

                        {{-- password --}}
                        <div class="form-group">
                            <label for="password" class="label-control">Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="form-group py-3">
                            <button type="submit" class="btn btn-primary btn-block">Confirm</button>
                        </div>                            
                 </form>
                </div>
            </div>
        </div>
 @endsection