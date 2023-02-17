@extends('layouts/default',['title'=>'Abort'])
    @section('content')
        <div class="container">
            <h2> What is {{ config('app.name') }}?</h2>
            <p>{{ config('app.name') }} is a clone of <a href="http://laramap.com" target="_blank">Laramap.com</a></p>
            <div class="row">
                <div class="col-md-l">
                    <p class="alert alert-warning"><strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>this app has been buil by<a href="http://twitter.com/franck"> @franck</a> for learning pupose</strong></p>
                </div> 
                <p>feel free to help to improve the<a href="https://github.com/Tchangang-franck/{{ config('app.name') }}"> source code</a></p>
            </div>
            <hr class="divider">
            <h2>What is laramap</h2>
            <p>Laramap is the  wesbsite by which {{ config('app.name') }} was inspire :).</p>
            More infore <a href="http://laramap.com/p.about">here.</a>
            <hr class="divider">
            <h2>Which tool ans services  are use in {{ config('app.name') }}?</h2>
            <p>Basically it's build on laravel  & Bootstrap . But there's a bunch of services used for email and other action.</p>
            <ul>
                <li>Laravel</li>
                <li>Bootstrap</li>
                <li>Amazone S3</li>
                <li>Mandrill</li>
                <li>Google Maps</li>
                <li>Gravatar</li>
                <li>Antony martin's Geolocalisation package</li>
                <li>Michel fontin's Markdown Parse Package</li>
                <li>Herohu</li>
            </ul>
        </div>
    @stop