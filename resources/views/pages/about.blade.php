@extends('layouts.default', ['title' => 'about'])


@section('content')
    <div class="container">
        <h1>What is Laracarte ?</h1>
        <p>Laracarte is a clone app of <a href="">Laramap.com</a></p>

        <div class="row">
            <div class="col-md-6">
                <p class="alert alert-warning">
                    <strong><img alt="image" width="15" src="{{ asset('/img/exclamation-triangle.svg') }}"> This app has been built by@etsmo for learning purposes.</strong>
                </p>
            <div>
        </div>

        <p>Feel free to help to improve the <a href="#">source code</a>.</p>

        <hr>

        <h2>what is Laramap ?</h2>
        <p>Laramap is the website by which Laracarte was inspired :).</p>
        <p>More info <a href="#">here</a>.</p>

        <hr>

        <h2>Which tools and services are used in Laracarte ?</h2>
        <p>Basically it's built on Laravel &amp; Bootstrap. But there's a bunch of services used for email and other sections.</p>

        <ul>
            <li>Laravel</li>
            <li>Bootstrap</li>
            <li>Amazon S3</li>
            <li>Manorill</li>
            <li>Google Map</li>
            <li>Gravatar</li>
            <li>Antony Martin's Geolocalisation Package</li>
            <li>Michel Fortin's Markdown Parser Package</li>
            <li>Heroku</li>
        </ul>
    </div>
@endsection