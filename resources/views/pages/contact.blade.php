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
@endsection