<section class="py-5" style="background: linear-gradient(to right, #cde9f3, #e0f7fa); margin-top: 80px">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12">
                <div class="card shadow-sm p-4 border-0 rounded-4 bg-white">
                    <input type="text" wire:model="name" class="form-control form-control-lg rounded-3" placeholder="🔍 Ism orqali toping...">
                </div>
            </div>
        </div>

        @if(!$youth->isEmpty())
            @foreach($youth as $user)
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="card border-0 shadow-lg h-100 rounded-4 bg-white hover-shadow">
                        <div class="card-body p-3">
                            <a href="{{asset($user->image)}}">
                                <img src="{{asset($user->image)}}" alt="User image" class="img-fluid rounded-3 mb-3" style="height: 320px; object-fit: cover; width: 100%;">
                            </a>
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h5 class="text-primary fw-bold mb-0">{{ $user->first_name }} {{ $user->last_name }}</h5>
                                <small class="text-muted">{{ $user->father_name }}</small>
                            </div>
                            <p class="text-muted mb-2">🧑‍💼 Kasbi: {{ $user->profiles->job ?? 'Kasbi yo‘q' }}</p>

                            @php
                                $birthday = new DateTime($user->profiles->birthday ?? '1999-11-22');
                                $today = new DateTime();
                                $age = $today->diff($birthday)->y;
                            @endphp

                            <ul class="list-unstyled small text-muted">
                                <li>🎂 Yoshi: {{ $age }}</li>
                                <li>📅 Tug‘ilgan sana: {{ $user->profiles->birthday ?? 'yo‘q' }}</li>
                                <li>⏱ A’zolik: {{ $user->created_at->diffForHumans() }}</li>
                            </ul>

                            <div class="row g-2 mt-3">
                                @if($user->profiles->instagram)
                                    <div class="col-6">
                                        <a href="https://instagram.com/{{$user->profiles->instagram}}" target="_blank" class="btn btn-outline-danger w-100">
                                            <i class="fab fa-instagram me-1"></i> Instagram
                                        </a>
                                    </div>
                                @endif
                                @if($user->profiles->telegram)
                                    <div class="col-6">
                                        <a href="https://t.me/{{$user->profiles->telegram}}" target="_blank" class="btn btn-outline-info w-100">
                                            <i class="fab fa-telegram me-1"></i> Telegram
                                        </a>
                                    </div>
                                @endif
                                @if($user->profiles->whatsup)
                                    <div class="col-6">
                                        <a href="https://wa.me/{{$user->profiles->whatsup}}" target="_blank" class="btn btn-outline-success w-100">
                                            <i class="fab fa-whatsapp me-1"></i> WhatsApp
                                        </a>
                                    </div>
                                @endif
                                @if($user->profiles->phone)
                                    <div class="col-6">
                                        <a href="tel:{{$user->profiles->phone}}" class="btn btn-outline-primary w-100">
                                            <i class="fas fa-phone me-1"></i> Telefon
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="col-12 py-5">
                <div class="bg-white rounded-4 shadow-sm p-5 text-center">
                    <h2 class="text-muted">😕 Foydalanuvchi topilmadi!</h2>
                </div>
            </div>
        @endif
    </div>
</section>
