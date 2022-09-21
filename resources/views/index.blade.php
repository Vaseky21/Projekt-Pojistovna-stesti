@extends('layouts.app')

@section('content')

        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src={{ asset ('assets/img/avataaars.svg')}} alt="..." />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">Pojištění štěstí</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">Automat na pojištění štěstí</p>
                <p class="masthead-subheading font-weight-light mb-0">Vyberte si typ pojištění vlož libovolnou částku která vám přinese stěstí, nezapomen čím více dáš tím více dostaneš.</p>
            </div>
            <br>
            <br>
            <div>
                <h1>Šěstí na  bvcLasku</h1>
                <p>Pojisti si svoje štěstí v lásce, máte málo štěstí v lásce nebo zatím stále hledáte...... </p>
            </div>
            <br>
            <div>
                <h1>Štestí na kamarády</h1>
                <p>Nemáte štěstí na kamarády nebo si své štěstí chcete pojistit.... </p>
            </div>
            <br>
            <div>
                <h1>Štestí ve hře</h1>
                <p>Jakákoli hra je předem vyhraná když máte naše pojištění.... </p>
            </div>
       </header>    
@endsection

