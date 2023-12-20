@extends('layouts.app')

@section('content')
    <div class="d-inline-flex w-screen m-5 ps-5 pt-2 pb-5 mb-5" style="font-family: Poppins">
        <div class="w-50 ms-2">
            <div class="d-block" style="font-size: 55px;">
                <p class="fw-bold">Need to Call</p>
            </div>
            <div class="d-block mt-3 me-5 pe-5">
                <p class="me-5 pe-5 pb-2" style="font-size: 24px;">Here you can find out the emergency numbers that you need in Purwakarta.</p>
            </div>
        </div>
        <div class="containerfoto">
            <img src="/img/pngwing.com.png" class="img-fluid" alt="Responsive Image">
        </div>
    </div>
@endsection

<style>
    .containerfoto {
        width: 20%;
        margin-left: 20%;
    }

    .img-fluid {
        max-width: 100%;
        height: auto;
        display: block; /* Menjamin bahwa gambar tetap dalam alur dokumen. */
        margin-left: 30px; /* Memusatkan gambar di dalam kontainer. */
    }

    @media screen and (max-width: 768px) {
        .containerfoto {
            width: 100%;
            margin-left: 0;
        }
    }
</style>
