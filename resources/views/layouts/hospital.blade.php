@extends('layouts.app')

@section('content')
<div class="m-5 pb-5">
        <div class="text-center">
            <div class="d-inline-flex">
                <div class="card mr-3" style="width: 18rem;">
                    <img src="/img/bayu_asih.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">RSUD Bayu Asih Purwakarta</h5>
                        <a href="/hospital/bayu_asih" class="btn btn-primary">LIHAT</a>
                    </div>
                </div>
                <div class="card mr-3" style="width: 18rem;">
                    <img src="/img/amira.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Amira Purwakarta Hospital</h5>
                        <a href="/hospital/amira" class="btn btn-primary">LIHAT</a>
                    </div>
                </div>
                <div class="card mr-3" style="width: 18rem;">
                    <img src="/img/rama_hadi.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Hospital Rama Hadi Purwakarta</h5>
                        <a href="/hospital/rama_hadi" class="btn btn-primary">LIHAT</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="/img/radjak.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Radjak Hospital Purwakarta</h5>
                        <a href="/hospital/radjak" class="btn btn-primary">LIHAT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
