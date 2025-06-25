@extends('layouts.app')

@section('title', __('categories.title_edit'))
@section('header', __('categories.title_edit'))

@section('content')
    <form action="{{ route('categories.update', $category) }}" method="POST">
        @csrf
        @method('PUT')
        @include('categories._form')
    </form>
@endsection