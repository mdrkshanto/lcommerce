@extends('frontEnd.mastering.index')
@section('frontEndTitle')
{{ "Home" }}
@endsection
@section('frontEndBody')
@include('frontEnd.home.includes.latestProducts')
@include('frontEnd.home.includes.bestSelling')
@include('frontEnd.home.includes.recentlyViewed')
@endsection
