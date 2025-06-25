@extends('layouts.app')

@section('title', __('products.title_create'))
@section('header', __('products.title_create'))

@section('content')
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        @include('products._form')
    </form>
@endsection