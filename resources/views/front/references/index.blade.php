@extends('layout.layout')

@section('title')
    Referanslar
@endsection
@section('content')
    <div class="row m-0 p-0">
        <div class="col-xxxl-10 col-lg-10 col-12 mx-auto px-0">
            <div
                class="row row-cols-xxl-5 row-cols-md-4 row-cols-2 referans pt-lg-2 g-md-5 g-sm-3 g-2 pt-4 px-3 px-lg-0 pb-5 pb-lg-0">
                @include('include.references-card')
            </div>
        </div>
    </div>
@endsection
