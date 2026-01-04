@extends('layouts.app')

@section('title', 'Notre Vibe | La JMJ')

@section('content')
<div class="page-content page-active">
    <div class="container">
        <span class="tape-label">MANIFESTO</span>
        <div class="row">
            <div class="col-lg-10">
                <h2 class="manifesto-text mb-5">
                    ON PREND TES <span style="color:var(--jmj-gold)">IDÉES</span>, ON LES COUPE, ON LES COLLE, ON LES <span class="serif-italic">BRÛLE</span> DANS LA MATIÈRE.
                </h2>
            </div>
        </div>
        
        <div class="row g-4 mt-4">
            <div class="col-md-6">
                <div class="paper-patch">
                   <h3>01. FAIT AVEC PASSION</h3>
                        <p class="typewriter">Ici, on ne fait pas juste de la personnalisation… on la vit 😌
Chaque création est faite à la main, avec passion, imagination et un petit grain de folie.

Je prends un objet, j’y ajoute ton idée, ton souvenir, ton délire… et boum 💥 ça devient unique.
Que ce soit pour offrir, marquer un moment ou te faire plaisir, chaque pièce a son caractère.</p>

                </div>
            </div>
            <div class="col-md-6">
                <div class="paper-patch" style="transform: rotate(-1deg);">
                    <h3>02. L'ART DU DÉTAIL</h3>
                    <p class="typewriter">Chaque création passe par mes mains… Je vérifie les contrastes, les couleurs, la brillance.

J’adore quand ça plaît à nos clients 😍
Alors si ce n’est pas beau, pas éclatant, pas “wow”, pas digne d’un sourire ou d’un « j’adore ! »…
ça ne sort pas de l’atelier. 
Ici, je crée pour faire plaisir. Et ça, j’y tient 🎨✨</p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="img-cutout">
                    <img src="https://images.unsplash.com/photo-1621600411666-474472657d0d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1500&q=80" class="img-fluid" alt="Processus" style="height: 400px; width:100%; object-fit:cover;">
                </div>
                <p class="handwritten text-center mt-3">Moodboard : Texture / Chaleur / Précision</p>
            </div>
        </div>
    </div>
</div>
@endsection