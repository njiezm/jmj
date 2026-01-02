@extends('layouts.app')

@section('title', 'Le Tarif | La JMJ')

@section('content')
<div class="page-content page-active">
    <div class="container">
        <span class="tape-label">INVESTMENT</span>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="paper-patch p-5">
                    <h2 class="text-center mb-5 display-4">COMBIEN ÇA COÛTE ?</h2>
                    
                    <div class="d-flex justify-content-between align-items-end mb-4 border-bottom border-dark pb-2">
                        <div>
                            <h3 class="m-0">L'OBJET UNIQUE</h3>
                            <p class="typewriter m-0">Mugs, gourdes, coques...</p>
                        </div>
                        <div class="h2 m-0" style="color:var(--jmj-gold)">18€+</div>
                    </div>

                    <div class="d-flex justify-content-between align-items-end mb-4 border-bottom border-dark pb-2">
                        <div>
                            <h3 class="m-0">WEARABLE ART</h3>
                            <p class="typewriter m-0">T-shirts, tote bags, hoodies...</p>
                        </div>
                        <div class="h2 m-0" style="color:var(--jmj-gold)">25€+</div>
                    </div>

                    <div class="d-flex justify-content-between align-items-end mb-4 border-bottom border-dark pb-2">
                        <div>
                            <h3 class="m-0">DROP LIMITÉ</h3>
                            <p class="typewriter m-0">Série de 10 à 50 pièces</p>
                        </div>
                        <div class="h2 m-0" style="color:var(--jmj-gold)">DEVIS</div>
                    </div>

                    <div class="mt-5 p-4 bg-light">
                        <p class="small typewriter m-0">** Tous nos prix incluent la création du design de base et la sublimation. Livraison offerte dès 50€.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection