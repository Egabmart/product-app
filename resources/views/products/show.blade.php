@extends('layouts.app')

@section('title', __('products.title_show'))
@section('header', __('products.title_show'))

@section('content')
    <div class="mb-4">
        <strong class="font-bold">@lang('common.name'):</strong>
        <p>{{ $product->name }}</p>
    </div>
     <div class="mb-4">
        <strong class="font-bold">@lang('products.price'):</strong>
        <p>${{ number_format($product->price, 2) }}</p>
    </div>
     <div class="mb-4">
        <strong class="font-bold">@lang('products.category'):</strong>
        <p>{{ $product->category->name }}</p>
    </div>
    <div class="mb-4">
        <strong class="font-bold">@lang('common.description'):</strong>
        <p>{{ $product->description }}</p>
    </div>
    <div class="flex items-center justify-start mt-4">
        <a href="{{ route('products.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">@lang('common.back')</a>
    </div>
@endsection