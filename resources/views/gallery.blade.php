@extends('layouts.app')
@section('title', 'Gallery')

@section('content')
<div class="container gallery">
    <h2>Gallery</h2>
    <div class="grid">
        <img src="{{ asset('images/img1.jpg') }}" alt="">
        <img src="{{ asset('images/img2.jpg') }}" alt="">
        <img src="{{ asset('images/img3.jpg') }}" alt="">
        <img src="{{ asset('images/img4.jpg') }}" alt="">
    </div>
</div>
@endsection
