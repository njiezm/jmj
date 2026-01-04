@extends('layouts.app')

@section('title', 'Contact | La JMJ')

@section('content')
<div class="page-content page-active">
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        
        <span class="tape-label">LET'S CONNECT</span>
        <div class="row g-5">
            <div class="col-md-6">
                <h2 class="display-3">T'AS UN <span style="color:var(--jmj-gold)">PROJET ?</span></h2>
                <p class="typewriter lead mt-4">N'hésite pas à nous envoyer tes idées, même les plus folles. On adore les challenges graphiques.</p>
                <div class="mt-5">
                    <p class="m-0"><strong>EMAIL:</strong> lajmjcreation97270@gmail.com</p>
                    <p class="m-0"><strong>INSTA:</strong> @la_jmj_creation</p>
                    <p class="m-0"><strong>WORKSHOP:</strong> Quelque part dans le futur.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="paper-patch" style="transform: rotate(1deg);">
                    <form action="/contact" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label class="handwritten">C'est qui ?</label>
                            <input type="text" class="form-control border-0 border-bottom border-dark rounded-0 px-0" placeholder="Ton petit nom" name="name" required>
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="handwritten">On t'écrit où ?</label>
                            <input type="email" class="form-control border-0 border-bottom border-dark rounded-0 px-0" placeholder="Ton email" name="email" required>
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="handwritten">Dis-nous tout...</label>
                            <textarea class="form-control border-0 border-bottom border-dark rounded-0 px-0" rows="5" placeholder="Ton projet, tes questions, ta vibe..." name="message" required></textarea>
                            @error('message')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn-ink w-100">ENVOYER LA VIBE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Bulle de contact WhatsApp Flottante -->
<a href="https://wa.me/596696109674?text=Bonjour ! Je viens de votre site et j'aimerais discuter d'un projet." 
   target="_blank" 
   rel="noopener noreferrer"
   class="whatsapp-bubble"
   aria-label="Contactez-nous sur WhatsApp">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="currentColor">
        <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.3 0-65.8-8.9-94.3-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5c.1 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/>
    </svg>
</a>
<!-- Fin de la bulle WhatsApp -->
<style>
    /* --- Bulle WhatsApp Flottante --- */
.whatsapp-bubble {
    position: fixed;
    bottom: 25px;
    right: 25px;
    width: 60px;
    height: 60px;
    background-color: #25D366; /* Vert officiel WhatsApp */
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    z-index: 1000; /* S'assure que la bulle est au-dessus des autres éléments */
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.whatsapp-bubble:hover {
    transform: scale(1.1);
    box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
    color: white; /* Empêche le changement de couleur de l'icône au survol */
}

.whatsapp-bubble svg {
    width: 32px; /* Taille de l'icône */
    height: 32px;
}

/* Pour les écrans plus petits, on peut la décaler un peu si nécessaire */
@media (max-width: 768px) {
    .whatsapp-bubble {
        bottom: 20px;
        right: 20px;
        width: 55px;
        height: 55px;
    }
    .whatsapp-bubble svg {
        width: 28px;
        height: 28px;
    }
}
</style>
@endsection