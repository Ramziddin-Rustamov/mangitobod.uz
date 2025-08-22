@extends('layouts.app')

@section('title', 'Jamoa Aʼzolari')
@section('content')

<section class="py-5 bg-white" style="margin-top: 90px;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold display-6">Bizning Ishchi Jamoamiz</h2>
            <p class="text-muted fs-5">Mangitobod mahallasining fidokor jamoasi bilan tanishing</p>
            <hr class="mx-auto" style="width: 100px; height: 3px; background-color: #0d6efd; opacity: 0.9;">
        </div>

        @if($teams->count() > 0)
        <div class="row g-4">
            @foreach($teams as $team)
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100 team-card">
                    <div class="position-relative">
                        <img src="{{ asset($team->user->image) }}" alt="{{ $team->user->first_name }}" 
                             class="card-img-top rounded-top" style="height: 500px; object-fit: cover;">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title mb-1">{{ $team->user->first_name }} {{ $team->user->last_name }}</h5>
                        <p class="text-primary mb-2">{{ $team->position }}</p>
                        <div class="d-flex justify-content-center gap-3">
                            @if($team->user->phone)
                            <a href="tel:{{ $team->user->phone }}" class="text-secondary fs-5" title="Telefon">
                                <i class="fas fa-phone"></i>
                            </a>
                            @endif

                            @if($team->user->email)
                            <a href="mailto:{{ $team->user->email }}" class="text-secondary fs-5" title="Email">
                                <i class="fas fa-envelope"></i>
                            </a>
                            @endif

                            @if($team->user->telegram)
                            <a href="{{ $team->user->telegram }}" target="_blank" class="text-secondary fs-5" title="Telegram">
                                <i class="fab fa-telegram"></i>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="text-center mt-5">
            <p class="text-muted fs-5">Hozircha jamoa aʼzolari mavjud emas.</p>
        </div>
        @endif
    </div>
</section>

@endsection
