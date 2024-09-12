@extends('layout.app')

@section('content')
   

    {{-- Testimonial Section --}}
    @include('includes.testimonial')
    {{-- Testimonial Section --}}

   
@endsection

@section('script')
    {{-- Swiper Js --}}
    <script>
        const swiper = new Swiper('.swiper', {
            direction: 'horizontal',
            loop: true,
            spaceBetween: 30,
            slidesPerView: 1,
            navigation: {
                nextEl: '.swiper-button-next-mod',
                prevEl: '.swiper-button-prev-mod',
            },
            breakpoints: {
                300: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 3
                }
            }
        });
    </script>
    {{-- Swiper js --}}
@endsection
