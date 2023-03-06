@extends('layouts/default',['title'=>'Contact'])
    @section('content')
        <div class="container" style="margin-right:2px;margin-top:20px;">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                            <h2>Get in Touch</h2>
                            <p class="text-muted">If you trouble with this service, please <a href="mailto:{{ config('laracarte.admin_support_email') }}">ask  for help</a></p>
                            <form action="{{ route('contact-path') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group {{ $errors->has('name' ? 'has-error' :'' ) }}">
                                    <label for="name" class="control-label">Name</label>
                                    <input type="text" name="name" id="name" class="form-control" required="required" value="{{ old('name') }}">
                                    {!! $errors->first('name','<span class="help-block">:message</span>') !!}
                                </div>
                                <div class="form-group {{ $errors->has('email' ? 'has-error' :'' ) }}" >
                                    <label for="email" class="control-label">Email</label>
                                    <input type="text" name="email" id="email" class="form-control" required="required" value="{{ old('name') }}"><br>
                                    {!! $errors->first('email','<span class="help-block">:message</span>') !!}
                                </div>
                                <div class="form-group {{ $errors->has('message' ? 'has-error' :'' ) }} " >
                                    <label for="message" class="control-label sr-only">message</label>
                                    <textarea name="message" id="message" cols="30" rows="10" class="form-control" required="required">{{ old('name') }}</textarea><br>
                                    {!! $errors->first('message','<span class="help-block">:message</span>') !!}
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block">Submit Enquiry &raquo;</button>
                                </div>
                            </form> 
                </div>
            </div>  
        </div>  
    @stop