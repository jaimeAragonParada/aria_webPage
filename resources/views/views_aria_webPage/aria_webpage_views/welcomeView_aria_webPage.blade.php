@extends('mainLayout_aria_webPage')

@section('title','Bienvenido')

@section('mainHeader')
    @include('views_aria_webPage.aria_webPage_partials.header_aria_webPage')
@endsection

@section('mainContent')		     
    @include('views_aria_webPage.aria_webPage_partials.welcomeContent_aria_webPage')   
@endsection

@section('mainFooter')
    @include('views_aria_webPage.aria_webPage_partials.footer_aria_webPage')
@endsection
