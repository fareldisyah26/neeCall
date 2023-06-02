@extends('layouts.app')

@section('content')
    <div class="m-5 pb-5">
        <div class="text-center">
            <div class="d-inline-flex">
                <div class="card" style="width: 18rem;">
                    <img src="/assets/outfit_trends/IMG_7041.JPG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">PANTAI</h5>
                        <p class="card-text">Outfit yang praktis, ringan, dan longgar. Terbuat dari bahan yang mudah
                            menyerap keringat. </p>
                        <a href="/man/beach" class="btn btn-primary">LIHAT</a>
                    </div>
                </div>
                <div class="card ms-5" style="width: 18rem;">
                    <img src="/assets/outfit_trends/IMG_7042.JPG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">KULIAH</h5>
                        <p class="card-text">Kombinasi outfit yang kece namun tetap sopan dan nyaman untuk kegiatan
                            perkuliahan.</p>
                        <a href="/man/college" class="btn btn-primary">LIHAT</a>
                    </div>
                </div>
                <div class="card ms-5" style="width: 18rem;">
                    <img src="/assets/outfit_trends/IMG_7043.JPG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">MUSIM PANAS</h5>
                        <p class="card-text">Outfit yang memiliki sirkulasi udara lancar dengan pilihan warna cerah untuk
                            mengurangi rasa panas.</p>
                        <a href="/man/summer" class="btn btn-primary">LIHAT</a>
                    </div>
                </div>
                <div class="card ms-5" style="width: 18rem;">
                    <img src="/assets/outfit_trends/IMG_7044.JPG" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">MUSIM DINGIN</h5>
                        <p class="card-text">Pilihan outfit yang tebal untuk menjaga agar tubuh tetap hangat dan nyaman.</p>
                        <a href="/man/winter" class="btn btn-primary">LIHAT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
