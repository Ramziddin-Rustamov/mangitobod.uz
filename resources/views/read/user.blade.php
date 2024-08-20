@extends('layouts.app')

@section('title', 'Ko`proq  ma`lumot ')

@section('content')
  <section style="background-color: #abd5e894;">
      <div class="container py-5">
          <div class="text-center my-2">
          </div>
          <div class="row">
                  <div class="col-12 col-md-6 col-lg-4">
                      <div class="card mb-3" style="border-radius: 15px;">
                          <div class="card-body p-4">
                              <div class="d-flex text-black">
                                  <div class="ms-3">
                                      <div class="row">
                                          <div class="col-12">
                                              <div class="flex-shrink-0">
                                                  <a href="{{asset($user->image)}}">
                                                      <img src="{{asset($user->image)}}" alt="Generic placeholder image" class="img-fluid" style="width: 100%; border-radius: 10px;">
                                                  </a>
                                              </div>
                                          </div>
                                          <div class="col-12 py-2">
                                              <h5 class="mb-1">{{ $user->first_name .''. $user->last_name }}</h5>
                                              <p class="mb-2 pb-1" style="color: #2b2a2a;">{{$user->profiles->job ?? 'Kasbi yo`q'}}</p>
                                          </div>
                                          <div class="col-12">
                                              @if($user->instagram)
                                              <a href="https://instagram.com/{{$user->profiles->instagram}}" class="btn btn-info me-1 mb-2 flex-grow-1"><i class="fab fa-instagram"></i> Instagram</a>
                                              @else
                                              <a href="https://t.me/{{$user->profiles->telegram}}" class="btn btn-info me-1 mb-2 flex-grow-1"><i class="fab fa-telegram"></i> Telegram</a>
                                              @endif
                                          </div>
                                          <div class="col-12">
                                              @php
                                              $birthday = new DateTime($user->profiles->birthday);
                                              $today = new DateTime();
                                              $age = $today->diff($birthday)->y;
                                              @endphp
                                              <p class="small text-muted mb-1">Yoshi: {{$age}}</p>
                                              <p class="small text-muted mb-1">Azoligi: {{ $user->created_at->diffForHumans() }}</p>
                                              <p class="small text-muted mb-1">Foaligi: 4.5</p>
                                          </div>
                                          <div class="col-12">
                                              <div class="d-flex">
                                                  <a href="tel:{{$user->profiles->phone}}" class="btn btn-primary me-1 flex-grow-1">Telefon qilish</a>
                                                  <a href="https://t.me/{{$user->profiles->telegram}}" class="btn btn-info me-1 flex-grow-1">Telegram</a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
          </div>
      </div>
  </section>
  @endsection

