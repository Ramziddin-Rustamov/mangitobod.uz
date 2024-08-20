@extends('layouts.app')

@section('title', 'Dukonlaringiz Ruyxati  ')
@section('content')
<!-- Team 1 - Bootstrap Brain Component -->
<section class="bg-light py-1  py-md-5 py-xl-8" style="margin-top:90px">
    <div class="container">
      <div class="row  justify-content-around">
        <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
          <h5 class="mb-4  text-center text-info pt-5">Sizning  Do'koninlaringiz Ruyxati </h5><hr>
        </div>
      </div>
    </div>

    <div class="container overflow-hidden">
  
        <div class="row gy-4 gy-lg-0 gx-xxl-5">
            <div class="text-center">
                @if (session('errors'))
                    <div class="alert alert-danger">
                        {{ session('errors') }}
                    </div>
                @endif
            </div>
            <div class="text-center">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
            <div class="text-end mb-4 ">
              <a href="{{ route('shops.create') }}" class="btn btn-primary"> <i class="fas fa-plus"></i> <i class="fas fa-shop"></i> </a>
            </div>
          @if (!$shops->isEmpty())
         
            @foreach ($shops as $shop)
           
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card border-0 border-bottom border-primary shadow-sm overflow-hidden">
                      <div class="card-body p-md-3">
                        <figure class="m-0 p-0">
                          <img class="img-fluid" loading="lazy" src="{{asset($shop->image)}}" alt="Rasmi">
                          <figcaption class="m-0 p-4">
                            <div class="row">
                                <div class="col">
                                    <h4 class="mb-1"> <span class="text-info">Do'kon nomi: <br></span> {{$shop->name}}</h4>
                                </div>
                                <div class="col text-end">
                                  <span class="text-info">Birinchi ish boshlagan vaqti: <br></span>  {{$shop->created_at->format('m-d-y')}}
                                </div>
                            </div>
                            <p class="text-secondary mb-0"><span class="text-info h4">Manzili: <br></span>{{$shop->address}}</p>
                            <div class="row py-2 my-2">
                              <div class="col">
                                <span class="text-info">Do'kon egasi: <br></span>
                                 {{$shop->user->first_name .' '. $shop->user->last_name}}ga
                              </div>
                            </div>
                            <div class="row">
                                  
                            
                            <div class="col text-start">
                                <form action="{{ route('shops.delete',['id'=>$shop->id]) }}"
                                    method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button  onclick="return confirm('Haqiqatdan ham o`chirmoqchimisiz ? Shu dukonga tegishli hamma mahsulot o`chiriladi .')" type="submit"
                                        class="btn btn-danger my-md-2 mx-sm-2 my-xs-2"><i
                                            class="fas fa-trash"></i></button>
                                </form>
                            </div>
                            <div class="col text-end">
                              <a href="{{ route('products.index') }}" class="btn btn-primary">
                                <i class="fas fa-cart-arrow-down"></i> Maxsulot qo`shish
                            </a>
                            
                            </div>
                            </div>
                          </figcaption>
                        </figure>
                      </div>
                    </div>
                  </div>
            @endforeach
          @else
          <div class="vh-100">
              <h4 class="text-center ">Siz hali do'kon qo'shmagansiz !</h4>
          </div>
          @endif
       </div>
    </div>
  </section>
@endsection
