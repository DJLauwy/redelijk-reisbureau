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
                <div class="heading">
                    <img src="{{ asset('/img/amsterdam.jpg') }}" alt="">
                    <div class="title">
                        <h3>Amsterdam</h3>
                    </div>
                    <div class="text">
                        <p>Amsterdam is een prachtige stad. Vrij in de buurt voor iedereen hier, dus waar wacht je nog op?!</p>
                    </div>
                </div>
                <div class="book">
                    <h5>&euro;230,-</h5>
                    <div class="btn">
                        <a href="#">Boeken</a>
                    </div>
                </div>
            </div>

            <div class="block">
                <div class="heading">
                    <img src="{{ asset('/img/dubai.webp') }}" alt="">
                    <div class="title">
                        <h3>Dubai</h3>
                    </div>
                    <div class="text">
                        <p>Dit is waarschijnlijk veel te duur voor jou. Je bekijkt deze reis puur om ervan te dromen ooit zoveel geld te hebben, jij jankerd. Jammer joh! Alleen voor rijke zakenmannen, voor zowel privé al zakelijke reizen.</p>
                    </div>
                </div>
                <div class="book">
                    <h5>&euro;3499,95</h5>
                    <div class="btn">
                        <a href="#">Boeken</a>
                    </div>
                </div>
            </div>

            <div class="block">
                <div class="heading">
                    <img src="{{ asset('/img/newyork.jpg') }}" alt="">
                    <div class="title">
                        <h3>New York</h3>
                    </div>
                    <div class="text">
                        <p>Aah, de plek voor alle hipsters en influencers. De plek waarbij je alleen zulke zoete koffie kan kopen, waardoor je gelijk al je tanden kan laten vervangen met kronen. Deze plek is zo overrated, het is gewoon weggegooid geld. En ga alsjeblieft niet net zoals iedereen een foto maken op die brug, mocht je je geld hieraan weggooien!</p>
                    </div>
                </div>
                <div class="book">
                    <h5>&euro;3499,95</h5>
                    <div class="btn">
                        <a href="#">Boeken</a>
                    </div>
                </div>
            </div>

            <div class="block">
                <div class="heading">
                    <img src="{{ asset('/img/barcelona.jpg') }}" alt="">
                    <div class="title">
                        <h3>Barcelona</h3>
                    </div>
                    <div class="text">
                        <p>Jij houdt wel van een riscootje, is het niet? Neem vooral geen dure spullen hiermee naar toe, want die ben je gegarandeerd kwijt! En nee, wij zijn niet aansprakelijk. We waarschuwen je nu toch?<br><br>P.S. Nee, De Sagrada Familia is nog steeds niet af.</p>
                    </div>
                </div>
                <div class="book">
                    <h5>&euro;420,69</h5>
                    <div class="btn">
                        <a href="#">Boeken</a>
                    </div>
                </div>
            </div>

            <div class="block">
                <div class="heading">
                    <img src="{{ asset('/img/innsbruck.jpg') }}" alt="">
                    <div class="title">
                        <h3>Innsbruck</h3>
                    </div>
                    <div class="text">
                        <p>We weten allemaal dat jij geen zin hebt om 10 uur lang in de auto of bus te zitten naar Oostenrijk. Maar je wilt persé met je pappie's zuurverdiende centjes skieën met de gang. Prima, maar jank dan alsjeblieft nooit meer over hoe slecht het gaat met het milieu.</p>
                    </div>
                </div>
                <div class="book">
                    <h5>&euro;420,69</h5>
                    <div class="btn">
                        <a href="#">Boeken</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
