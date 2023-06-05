@extends('layouts.app')

@section('content')
    <div class="m-5 pb-5">
        <div class="text-center">
            <div class="d-inline-flex">
                <div class="card" style="width: 18rem;">
                    <img src="/assets/outfit_trends/beach/pantai_1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">PANTAI</h5>
                        <p class="card-text">Outfit yang praktis, ringan, dan longgar. Terbuat dari bahan yang mudah
                            menyerap keringat.</p>
                        <a href="/trends/beach" class="btn btn-primary">LIHAT</a>
                    </div>
                </div>
                <div class="card ms-5" style="width: 18rem;">
                    <img src="/assets/outfit_trends/college/college_1.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">KULIAH</h5>
                        <p class="card-text">Kombinasi outfit yang kece namun tetap sopan dan nyaman untuk kegiatan
                            perkuliahan.</p>
                        <a href="/trends/college" class="btn btn-primary">LIHAT</a>
                    </div>
                </div>
                <div class="card ms-5" style="width: 18rem;">
                    <img src="/assets/outfit_trends/summer/summer_1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">MUSIM PANAS</h5>
                        <p class="card-text">Outfit yang memiliki sirkulasi udara lancar dengan pilihan warna cerah untuk
                            mengurangi rasa panas.</p>
                        <a href="/trends/summer" class="btn btn-primary">LIHAT</a>
                    </div>
                </div>
                <div class="card ms-5" style="width: 18rem;">
                    <img src="/assets/outfit_trends/winter/winter_1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">MUSIM DINGIN</h5>
                        <p class="card-text">Pilihan outfit yang tebal untuk menjaga agar tubuh tetap hangat dan nyaman.</p>
                        <a href="/trends/winter" class="btn btn-primary">LIHAT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
