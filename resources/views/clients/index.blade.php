@extends('layouts.app')

@section('title', 'Bizga Bildirilgan Fikrlar')

@section('content')
<section class="py-5" style="background-color: #f9f9f9; margin-top: 70px; margin-bottom: 170px">
    <div class="container">
        <div class="row justify-content-center g-4">

            <!-- Fikrlar ro'yxati -->
            <div class="col-lg-8">
                <div class="card shadow-sm rounded-4 mb-4">
                    <div class="card-header bg-primary text-white rounded-top-4">
                        <h5 class="mb-0 py-2 text-center">💬 Bizga Bildirilgan Fikrlar</h5>
                    </div>
                    <div class="card-body">

                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif

                        @if($clientviews->count())
                            @foreach ($clientviews as $view)
                                <div class="mb-4 border-bottom pb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="{{ route('people.show', ['id' => $view->user->id]) }}" class="text-decoration-none">
                                            <h6 class="fw-bold text-primary mb-1">
                                                {{ $view->user->first_name }} {{ $view->user->last_name }} {{ $view->user->father_name }}
                                            </h6>
                                        </a>
                                        <small class="text-muted">{{ $view->created_at->format('d.m.Y') }}</small>
                                    </div>
                                    <p class="mb-0 text-dark">
                                        {{ $view->clientView }}
                                    </p>
                                </div>
                            @endforeach

                            <!-- Sahifalash -->
                            <div class="d-flex justify-content-end">
                                {{ $clientviews->links() }}
                            </div>
                        @else
                            <div class="text-center py-5">
                                <p class="text-muted fs-5">😔 Hali fikrlar bildirilmagan</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Fikr qoldirish formasi -->
            <div class="col-lg-4">
                <div class="card shadow-sm rounded-4">
                    <div class="card-body">
                        <form action="{{ route('client.view.store') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="textAreaExample" class="form-label fw-bold">✍️ Fikringizni yozing</label>
                                <textarea
                                    class="form-control rounded-3"
                                    id="textAreaExample"
                                    name="clientView"
                                    rows="4"
                                    style="background-color: #fff;"
                                    placeholder="Fikringizni shu yerga yozing..."></textarea>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-success rounded-3 px-4">
                                    ✉️ Fikr Qoldirish
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
