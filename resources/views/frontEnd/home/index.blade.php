@extends('frontEnd.mastering.index')
@section('frontEndTitle')
{{ "Home" }}
@endsection
@section('frontEndBody')
@include('frontEnd.home.includes.latestProducts')
@include('frontEnd.home.includes.bestSelling')
@include('frontEnd.home.includes.recentlyViewed')
@endsection
@section('frontEndExtraJs')
<script src="{{ asset('frontEnd') }}/assets/js/slick.min.js"></script>
<script>
    $(document).ready(function(){
        $(".latestProducts").slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 5000,
            infinite: true,
            arrows: true,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ],
        });
        $(".bestSelling").slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 5000,
            infinite: true,
            arrows: true,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ],
        });
        $(".recentlyViewed").slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 5000,
            infinite: true,
            arrows: true,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ],
        });
    });
</script>
@endsection
