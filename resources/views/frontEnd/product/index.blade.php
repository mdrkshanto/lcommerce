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
