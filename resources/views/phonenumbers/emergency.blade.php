@extends('layouts.app')

@section('title', 'Telefon raqamlar')

@section('content')
<section style="background-color: #193c1a10; padding-top: 90px;">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">Bog‘lanish Uchun Telefon Raqamlar</h2>
            <p class="text-muted">Mahalla yetakchilari va favqulodda xizmatlar roʻyxati</p>
        </div>

        <div class="table-responsive shadow-sm rounded mb-4">
            <table class="table table-hover table-bordered bg-white">
                <thead class="table-success text-center">
                    <tr>
                        <th scope="col">T/R</th>
                        <th scope="col">F.I.O</th>
                        <th scope="col">Lavozimi</th>
                        <th scope="col">Telefon raqami</th>
                    </tr>
                </thead>
                <tbody class="align-middle text-center">
                    <tr>
                        <td>1</td>
                        <td>Қурбонов Фахриддин</td>
                        <td>Раис</td>
                        <td><a class="text-decoration-none text-dark fw-semibold" href="tel:+998995953306">+998 99 595 33 06</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Исломов Ҳусниддин</td>
                        <td>Имом хатиб</td>
                        <td><a class="text-decoration-none text-dark fw-semibold" href="tel:+998993114528">+998 99 311 45 28</a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Отабеков Ғолиб</td>
                        <td>Котиб</td>
                        <td><a class="text-decoration-none text-dark fw-semibold" href="tel:+998999625450">+998 99 962 54 50</a></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Олимов Саттор</td>
                        <td>Шифокор</td>
                        <td><a class="text-decoration-none text-dark fw-semibold" href="tel:+998930527102">+998 93 052 71 02</a></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="card shadow-sm border-0">
            <div class="card-header bg-success text-white fw-bold">
                Favqulodda xizmatlar
            </div>
            <ul class="list-group list-group-flush">
                @php
                    $services = [
                        ['101', "Yong'in xavfsizligi xizmati"],
                        ['102', "Ichki ishlar organlari"],
                        ['103', "Birinchi tibbiy yordam"],
                        ['104', "Favqulodda gaz xizmati"],
                        ['1050', "Qutqaruv xizmati (FVT)"],
                        ['1007', "Toshkent shahar prokuraturasi ishonch liniyasi"],
                        ['1008', "Adliya vazirligi ishonch liniyasi"]
                    ];
                @endphp
                @foreach($services as [$number, $name])
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <span><i class="fas fa-phone text-success me-2"></i>{{ $number }} - {{ $name }}</span>
                    <a href="tel:{{ $number }}" class="btn btn-outline-success btn-sm">Qoʻngʻiroq qilish</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
@endsection
