@extends('layouts.app')

@section('content')
    <div class="d-inline-flex w-screen m-5 ps-5 pt-2 pb-5 mb-5" style="font-family: Poppins background-color: #FAE3B6">
        <div class="w-50 ms-2 ">
            <div class="d-block" style="font-size: 55px;">
                <p class="fw-bold">Find The Best Fashion Style For You</p>
            </div>
            <div class="d-block mt-3 me-5 pe-5">
                <p class="me-5 pe-5 pb-2" style="font-size: 24px">Discover your personal style and stay on-trend with
                    D'OUTFIT, your ultimate destination for inspiration, tips, and a world of fashion possibilities!</p>
            </div>
            <div class="mt-3">

                @if (Route::has('login'))
                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                        @auth
                        @else
                            <a href="/login" class="btn btn-dark"
                                style="--bs-btn-padding-y: 1rem; --bs-btn-padding-x: 3rem; --bs-btn-font-size: 1.5rem;">
                                SEARCH NOW
                            </a>
                        @endauth
                    </div>
                @endif



            </div>
        </div>
        <div class="d-inline-flex w-40">
            <img src="landing_page.png" class="img-fluid">
        </div>
    </div>
@endsection
