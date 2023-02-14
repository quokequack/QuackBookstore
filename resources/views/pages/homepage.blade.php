
<title>Quack Bookstore | Homepage</title>
@extends("layouts.master")

@section('title')

HOMEPAGE

@endsection
@section("content")
@include("partials.banner")
@endsection

@section("list")
@include('partials.list')
@endsection