@extends('layouts.master')

@section('title')
    Home
@endsection

@section('header_title')
    Redelijk Reisbureau
@endsection

@section('header_subtitle')
    Gewoon, redelijke reizen voor redelijke prijzen
@endsection

@section('content')
    <section class="flights standard">
        <div class="title">
            <h2>Populaire bestemmingen</h2>
        </div>
        <div class="block-holder">

            <div class="block">
                <div class="img-holder">
                    <img src="{{ asset('/img/amsterdam.jpg') }}" alt="">
                </div>
                <div class="title">
                    <h3>Titel</h3>
                </div>
                <div class="content">
                    <p>Pak deze deal!</p>
                    <div class="btn">
                        <a href="#">Boeken</a>
                    </div>
                </div>
            </div>

            <div class="block">
                <div class="img-holder">
                    <img src="{{ asset('/img/amsterdam.jpg') }}" alt="">
                </div>
                <div class="title">
                    <h3>Titel</h3>
                </div>
                <div class="content">
                    <p>Pak deze deal!</p>
                    <div class="btn">
                        <a href="#">Boeken</a>
                    </div>
                </div>
            </div>

            <div class="block">
                <div class="img-holder">
                    <img src="{{ asset('/img/amsterdam.jpg') }}" alt="">
                </div>
                <div class="title">
                    <h3>Titel</h3>
                </div>
                <div class="content">
                    <p>Pak deze deal!</p>
                    <div class="btn">
                        <a href="#">Boeken</a>
                    </div>
                </div>
            </div>

            <div class="block">
                <div class="img-holder">
                    <img src="{{ asset('/img/amsterdam.jpg') }}" alt="">
                </div>
                <div class="title">
                    <h3>Titel</h3>
                </div>
                <div class="content">
                    <p>Pak deze deal!</p>
                    <div class="btn">
                        <a href="#">Boeken</a>
                    </div>
                </div>
            </div>

            <div class="block">
                <div class="img-holder">
                    <img src="{{ asset('/img/amsterdam.jpg') }}" alt="">
                </div>
                <div class="title">
                    <h3>Titel</h3>
                </div>
                <div class="content">
                    <p>Pak deze deal!</p>
                    <div class="btn">
                        <a href="#">Boeken</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
