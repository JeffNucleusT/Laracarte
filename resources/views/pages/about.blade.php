@extends('layouts.default', ['title' => 'About'])

@section('content')
    <div class="container pt-4">
        <h2>What is {{ config('app.name') }}?</h2>
        <p>{{ config('app.name') }} is a clone app of <a href="https://laramap.com">Laramap.com</a>.</p>

        <div class="alert alert-warning w-75" role="alert">
            <strong>
                <i class="fa fa-exclamation-triangle"></i>
                This app has been build by <a href="https://twitter.com/jeffzercreative" class="alert-link" target="_blank">@jeffzercreative</a> for learning purposes.
            </strong>
        </div>

        <p>Feel free to help to improve the <a href="https://github.com/JeffNucleusT/{{ config('app.name') }}" target="_blank">source code</a>.</p>

        <hr>

        <h2>What is Laramap?</h2>
        <p>Laramap is the website by which {{ config('app.name') }} was inspired :)</p>
        <p>More info <a href="https://laramap.com">here</a></p>

        <hr>

        <h2>Which tools and services are used in {{ config('app.name') }}?</h2>
        <p>
            Basically it's built on Laravel &amp; Bootstrap. But there's a branch of services used for email and other sections.
        </p>
        <ul>
            <li>Laravel</li>
            <li>Bootstrap</li>
            <li>Amazon S3</li>
            <li>Mandrill</li>
            <li>Google Maps</li>
            <li>Gravatar</li>
            <li>Antony Martin's Geolocalisation Package</li>
            <li>Michel Fortin's Markdown Parser Package</li>
            <li>Heroku</li>
        </ul>
    </div>
@endsection
