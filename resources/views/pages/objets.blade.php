@extends('layouts.app')

@section('title', 'Les Objets | La JMJ')

@section('content')
<div class="page-content page-active">
    <div class="container">
        <span class="tape-label">GALLERY / VOL. 1</span>
        <h2 class="display-2 mb-5">LES PIÈCES <span class="handwritten">sublimées</span></h2>
        
        <div class="zine-grid">
            <!-- Mug -->
            <div class="zine-item">
                <div class="img-cutout mb-3">
                    <img src="https://images.unsplash.com/photo-1514228742587-6b1558fcca3d?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="img-fluid" alt="Mug">
                </div>
                <div class="paper-patch p-3">
                    <h4 class="m-0">LE MUG "NIGHT BLUE"</h4>
                    <span class="typewriter small">Céramique Grade A+ / Or 24k vibe</span>
                </div>
            </div>
            <!-- Textile -->
            <div class="zine-item large">
                <div class="img-cutout mb-3">
                    <img src="https://images.unsplash.com/photo-1521572267360-ee0c2909d518?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" class="img-fluid" alt="Textile" style="height:350px; object-fit:cover;">
                </div>
                <div class="paper-patch p-3">
                    <h4 class="m-0">COLLECTION TEXTILE "SCRAPBOOK"</h4>
                    <span class="typewriter small">Coton Bio / Impression fibre à fibre</span>
                </div>
            </div>
            <!-- Gourde -->
            <div class="zine-item large">
                <div class="img-cutout mb-3">
                    <img src="https://images.unsplash.com/photo-1614850523296-d8c1af93d400?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" class="img-fluid" alt="Gourde" style="height:350px; object-fit:cover;">
                </div>
                <div class="paper-patch p-3">
                    <h4 class="m-0">GOURDE ALU "GOLDEN LINE"</h4>
                    <span class="typewriter small">Finition mate / Anti-rayures</span>
                </div>
            </div>
            <!-- Random -->
            <div class="zine-item">
                <div class="img-cutout mb-3">
                    <img src="https://images.unsplash.com/photo-1603302576837-37561b2e2302?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="img-fluid" alt="Accessoire">
                </div>
                <div class="paper-patch p-3">
                    <h4 class="m-0">CUSTOM TECH CASE</h4>
                    <span class="typewriter small">Protection & Style</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection