@extends('frontEnd.mastering.index')
@section('frontEndTitle')
{{ 'Shopping Bag' }}
@endsection
@section('frontEndBody')

    <div class="container bg-dark py-4">
        @include('frontEnd.cart.includes.heading')
        @include('frontEnd.cart.includes.topTotal')
        @include('frontEnd.cart.includes.listTable')
        @include('frontEnd.cart.includes.grandTotal.index')
    </div>

@endsection
