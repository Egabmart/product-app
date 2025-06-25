@extends('layouts.app')

@section('title', __('categories.title_create'))
@section('header', __('categories.title_create'))

@section('content')
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        @include('categories._form')
    </form>
@endsection