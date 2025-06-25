@extends('layouts.app')

@section('title', __('products.title_edit'))
@section('header', __('products.title_edit'))

@section('content')
    <form action="{{ route('products.update', $product) }}" method="POST">
        @csrf
        @method('PUT')
        @include('products._form')
    </form>
@endsection