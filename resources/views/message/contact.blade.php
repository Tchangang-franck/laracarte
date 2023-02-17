@extends('layouts/default',['title'=>'Contact'])
    @section('content')
        <div class="container" style="margin-right:2px;margin-top:20px;">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                            <h2>Get in Touch</h2>
                            <p class="text-muted">If you trouble with this service ,please <a href="mailto:clautialidris@gmail.com">ask  for help</a></p>
                            <form action="#" method="POST">
                                <div class="form-group">
                                    <label for="name" class="control-label">Name</label>
                                    <input type="text" name="name" id="name" class="form-control" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="control-label">Email</label>
                                    <input type="text" name="email" id="email" class="form-control" required="required"><br>
                                </div>
                                <div class="form-group">
                                    <label for="message" class="control-label sr-only">mesage</label>
                                    <textarea name="message" id="message" cols="30" rows="10" class="form-control" required="required"></textarea><br>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary">Submit Enquiry &raquo;</button>
                                </div>
                            </form> 
                </div>
            </div>  
        </div>  
    @stop