@extends('layouts.app')

@section('title', 'La JMJ | Studio de Création & Zine Culture')

@section('content')
<div class="page-content page-active">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <span class="tape-label">WELCOME TO THE LAB</span>
                <h1 class="hero-title">CRÉER.<br><span style="color:var(--jmj-gold)">SUBLIMER.</span><br><span class="serif-italic">personnalisé.</span></h1>
            </div>
            <div class="col-lg-4 text-center">
                <div class="paper-patch" style="transform: rotate(3deg);">
                    <p class="typewriter">"Ici, on ne fait pas juste des objets. On crée des souvenirs visuels qui ne s'effacent jamais."</p>
                    <span class="handwritten">— La JMJ Team</span>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-4">
                <div class="img-cutout mb-4">
                    <img src="{{ asset('images/vibe1.png') }}" class="img-fluid" alt="Vibe 1">
                </div>
            </div>
            <div class="col-md-8">
                <div class="paper-patch">
                    <h2 class="mb-4">Le Concept <span class="handwritten">(en bref)</span></h2>
                    <p class="lead">La JMJ est un studio créatif spécialisé dans la <strong>sublimation haute définition</strong>. On travaille avec le Bleu Nuit pour la profondeur, l'Or pour l'éclat, et le Blanc pour la pureté.</p>
                    <p class="typewriter mt-4">Pourquoi nous ? Parce qu'on déteste le banal. On veut du brut, du vrai, du stylé. Que ce soit un mug pour ton café du matin ou une série limitée pour ton shop, on y met la même rage créative.</p>
                    <a href="/objets" class="btn-ink mt-4 d-inline-block">Découvrir le catalogue</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection