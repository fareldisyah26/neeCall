@extends('layouts.app')

@section('content')
    <div class="m-5 pb-5">
        <div class="text-center">
            <div class="d-inline-flex">
                <div class="card" style="width: 18rem;">
                    <img src="/assets/outfit_woman/beach/IMG_20230519_222054.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">PANTAI</h5>
                        <p class="card-text">Outfit yang praktis, ringan, dan longgar. Terbuat dari bahan yang mudah
                            menyerap keringat. </p>
                        <a href="/woman/beach" class="btn btn-primary">LIHAT</a>
                    </div>
                </div>
                <div class="card ms-5" style="width: 18rem;">
                    <img src="/assets/outfit_woman/college/IMG_20230519_220418.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">KULIAH</h5>
                        <p class="card-text">Kombinasi outfit yang kece namun tetap sopan dan nyaman untuk kegiatan
                            perkuliahan.</p>
                        <a href="/woman/college" class="btn btn-primary">LIHAT</a>
                    </div>
                </div>
                <div class="card ms-5" style="width: 18rem;">
                    <img src="/assets/outfit_woman/summer/IMG_20230519_214258.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">MUSIM PANAS</h5>
                        <p class="card-text">Outfit yang memiliki sirkulasi udara lancar dengan pilihan warna cerah untuk
                            mengurangi rasa panas.</p>
                        <a href="/woman/summer" class="btn btn-primary">LIHAT</a>
                    </div>
                </div>
                <div class="card ms-5" style="width: 18rem;">
                    <img src="/assets/outfit_woman/winter/IMG_20230521_180007.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">MUSIM DINGIN</h5>
                        <p class="card-text">Pilihan outfit yang tebal untuk menjaga agar tubuh tetap hangat dan nyaman.</p>
                        <a href="/woman/winter" class="btn btn-primary">LIHAT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
