@extends('frontEnd.mastering.index')
@section('frontEndTitle')
Product Name
@endsection
@section('frontEndDescription')
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet illum iste odio quod rem suscipit vero? Cumque et ex illo iure. Architecto assumenda beatae doloribus ex magni tempore voluptates. Ab aspernatur aut cum, deleniti dolor, explicabo fugit illum iste laborum nesciunt provident quod sapiente sunt? Accusamus amet aut beatae corporis cumque ea eos et explicabo id, impedit iste laboriosam nostrum pariatur placeat qui recusandae saepe suscipit tenetur totam ut veritatis vitae voluptas. Ab accusantium amet animi architecto aspernatur atque corporis culpa doloremque doloribus eius et fuga impedit inventore itaque labore laboriosam maxime, nam nihil quaerat quisquam ratione repellat sint vel. Aliquam dolore quae tempore ut! Earum, fugit, magnam! Aliquam amet expedita quasi quisquam saepe ut voluptas. Ab, delectus dolorem impedit iure laborum molestias nostrum numquam obcaecati odit porro provident quaerat quam quia quis quisquam sint totam vitae, voluptatem. Accusantium assumenda ex facilis, illum iure nisi officia porro quo totam ullam!
@endsection
@section('frontEndBody')
    <div class="container-fluid bg-dark productPage">
        <div class="row">
        @include('frontEnd.product.includes.image')
        @include('frontEnd.product.includes.details')
    </div>
    @include('frontEnd.product.includes.review')
@endsection
@section('frontEndExtraJs')
<script src="{{ asset('frontEnd') }}/assets/js/slick.min.js"></script>
<script src="{{ asset('frontEnd') }}/assets/js/xzoom.min.js"></script>
<script>
    $(document).ready(function(){
        $(".productPage .productThumbnail").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: false,
        arrows: true,
        draggable: false
    });

    $('.xzoomLens, .xzoomgalleryLens').xzoom({position: 'lens', lensShape: 'circle', sourceClass: 'xzoom-hidden'});
        var isTouchSupported = 'ontouchstart' in window;

        if (isTouchSupported) {
            //If touch device
            $('.xzoomLens').each(function(){
                var xzoom = $(this).data('xzoom');
                xzoom.eventunbind();
            });

            $('.xzoomLens').each(function() {
                var xzoom = $(this).data('xzoom');
                $(this).hammer().on("tap", function(event) {
                    event.pageX = event.gesture.center.pageX;
                    event.pageY = event.gesture.center.pageY;
                    var s = 1, ls;

                    xzoom.eventmove = function(element) {
                        element.hammer().on('drag', function(event) {
                            event.pageX = event.gesture.center.pageX;
                            event.pageY = event.gesture.center.pageY;
                            xzoom.movezoom(event);
                            event.gesture.preventDefault();
                        });
                    }

                    xzoom.eventleave = function(element) {
                        element.hammer().on('tap', function(event) {
                            xzoom.closezoom();
                        });
                    }
                    xzoom.openzoom(event);
                });
            });

        }
    });
</script>
@endsection
