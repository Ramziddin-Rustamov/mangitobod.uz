@extends('layouts.app')
@section('title', 'Biz haqimizda')

@section('content')
<div class="container py-5" style="margin-top: 90px;">

    <h2 class="text-center mb-4 fw-bold">Mang‘itobod Qishlog‘iga Bir Nazar</h2>
    <hr class="mb-5">

    <div class="row g-4">

        <div class="col-md-6">
            <a href="{{ asset('assets/images/about/7.jpg') }}">
                <img src="{{ asset('assets/images/about/7.jpg') }}" alt="Mangitobod" class="img-fluid rounded-4 shadow-sm">
            </a>
        </div>
        <div class="col-md-6 d-flex align-items-center">
            <p class="fs-5 text-justify">
                Mang‘itobod mahallasi Urgut tumanining shimoliy-g‘arbida joylashgan bo‘lib, atrofida Birlik, Sovg‘on, Oqmachit va Bekravot mahallalari mavjud. Tarixiy maʼlumotlarga ko‘ra, bu qishloq 300 yillik tarixga ega.
            </p>
        </div>

        <div class="col-md-6 d-flex align-items-center">
            <p class="fs-5 text-justify">
                Dastlab bu yerda Mang‘it elining ming sulolasidan kelgan to‘rt oiladan boshlangan. Asta-sekin boshqa xalqlar ko‘chib kelib, qishloqqa asos solgan. Dehqonchilik va chorvachilik asosiy faoliyat bo‘lgan.
            </p>
        </div>
        <div class="col-md-6">
            <a href="{{ asset('assets/images/about/2.jpg') }}">
                <img src="{{ asset('assets/images/about/2.jpg') }}" alt="" class="img-fluid rounded-4 shadow-sm">
            </a>
        </div>

        <div class="col-12">
            <p class="fs-5 text-justify">
                Mahallada dastlab yagona masjid bo‘lgan bo‘lib, u yerda namoz o‘qilib, kun davomida oqsoqollar yig‘ilib, qishloqni rivojlantirish yo‘llarini muhokama qilishgan.
            </p>
        </div>

        <div class="col-md-6">
            <img src="{{ asset('assets/images/about/3.jpg') }}" alt="" class="img-fluid rounded-4 shadow-sm">
        </div>
        <div class="col-md-6">
            <img src="{{ asset('assets/images/about/14.jpg') }}" alt="" class="img-fluid rounded-4 shadow-sm">
        </div>

        <div class="col-md-6">
            <a href="{{ asset('assets/images/about/15.jpeg') }}">
                <img src="{{ asset('assets/images/about/15.jpeg') }}" alt="" class="img-fluid rounded-4 shadow-sm">
            </a>
        </div>
        <div class="col-md-6 d-flex align-items-center">
            <p class="fs-5 text-justify">
                Eng katta muammo - oq suv bo‘lib, aholining birlashgan mehnati natijasida "Qozon ariq" nomli ariqqa asos solingan va suv olib kelingan. Bu esa qishloq xo‘jaligini rivojlantirishga olib kelgan. Shukurov Rashid, Xakimov Xofiz, Oblokulov Melikular buning uchun katta hissa qo‘shgan.
            </p>
        </div>

        <div class="col-md-6 d-flex align-items-center">
            <p class="fs-5 text-justify">
                Hozirgi kunda qishloqda 1 ta o‘rta maktab (1126 nafar o‘quvchi, 86 nafar o‘qituvchi), 1 ta KVP, 1 ta kasb-hunar kolleji, jami 266 nafar mutaxassis faoliyat olib boradi. Shuningdek, 19 ta do‘kon, 3 ta qassobxona, ustaxona, apteka, kompyuter va dizayn xonalari mavjud.
            </p>
        </div>
        <div class="col-md-6">
            <a href="{{ asset('assets/images/about/maktab.jpg') }}">
                <img src="{{ asset('assets/images/about/maktab.jpg') }}" alt="Maktab" class="img-fluid rounded-4 shadow-sm">
            </a>
        </div>

        <div class="col-12">
            <p class="fs-5 text-justify">
                Mahallada hozirda 6390 nafar aholi istiqomat qiladi. 3093 nafar ayol, 376 nafar nuroniy bor. 5 nafar hoji ota va hoji onalar yashaydi. Aholi uzumchilik va bog‘dorchilik bilan shug‘ullanadi. 46 ta fermer xo‘jaliklari faoliyat yuritadi. Xalqimiz davlat qaror va farmonlarini anglab, ularni amalda tatbiq etib, zamonaviy hayot tarzini olib borayotgan yurt fuqarolaridir.
            </p>
        </div>

    </div>

    <hr class="my-5">
    <h2 class="text-center fw-bold mb-4">📸 Galereya</h2>

    <div class="row g-3">

        @php
            $galleryImages = [
                '1.jpg', '8.jpg', '9.jpg', '4.jpg',
                'teacher.jpg', '13.jpg', '5.jpg',
                '12.jpg', '4.jpg', '10.jpg'
            ];
        @endphp

        @foreach ($galleryImages as $image)
            <div class="col-md-4 col-sm-6">
                <img src="{{ asset('assets/images/about/' . $image) }}" alt="Gallery Image" class="img-fluid rounded-4 shadow-sm">
            </div>
        @endforeach

    </div>

</div>
@endsection
