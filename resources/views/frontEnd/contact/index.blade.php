@extends('frontEnd.mastering.index')
@section('frontEndTitle')
Contact Us
@endsection
@section('frontEndDescription')
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam autem, cupiditate debitis deserunt expedita explicabo facere fugit in labore magnam natus, nemo neque non odio officia provident quam quo repellendus.
@endsection
@section('frontEndBody')
<div class="bg-dark contactPage">
    @include('frontend.contact.includes.pageTitle')
    @include('frontEnd.contact.includes.map')
    @include('frontEnd.contact.includes.userSubmit.index')
</div>
@endsection
