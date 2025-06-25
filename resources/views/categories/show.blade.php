@extends('layouts.app')

@section('title', __('categories.title_show'))
@section('header', __('categories.title_show'))

@section('content')
    <div class="mb-4">
        <strong class="font-bold">@lang('common.name'):</strong>
        <p>{{ $category->name }}</p>
    </div>
    <div class="mb-4">
        <strong class="font-bold">@lang('common.description'):</strong>
        <p>{{ $category->description }}</p>
    </div>
    <div class="flex items-center justify-start mt-4">
        <a href="{{ route('categories.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">@lang('common.back')</a>
    </div>
@endsection