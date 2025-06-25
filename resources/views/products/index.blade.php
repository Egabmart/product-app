@extends('layouts.app')

@section('title', __('products.title_list'))
@section('header', __('products.title_list'))

@section('content')
<div class="flex justify-end mb-4">
    <a href="{{ route('products.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        @lang('products.create_new')
    </a>
</div>
<table class="min-w-full bg-white">
    <thead>
        <tr>
            <th class="py-2 px-4 border-b">@lang('products.table_name')</th>
            <th class="py-2 px-4 border-b">@lang('products.table_category')</th>
            <th class="py-2 px-4 border-b">@lang('products.table_price')</th>
            <th class="py-2 px-4 border-b">@lang('common.actions')</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($products as $product)
            <tr>
                <td class="py-2 px-4 border-b">{{ $product->name }}</td>
                <td class="py-2 px-4 border-b">{{ $product->category->name }}</td>
                <td class="py-2 px-4 border-b">${{ number_format($product->price, 2) }}</td>
                <td class="py-2 px-4 border-b">
                     <form action="{{ route('products.destroy', $product) }}" method="POST">
                        <a href="{{ route('products.show', $product) }}" class="text-green-500 hover:text-green-700 mr-2">@lang('common.show')</a>
                        <a href="{{ route('products.edit', $product) }}" class="text-yellow-500 hover:text-yellow-700 mr-2">@lang('common.edit')</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:text-red-700" onclick="return confirm('@lang('common.are_you_sure')')">@lang('common.delete')</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4" class="text-center py-4">@lang('products.no_products_found')</td>
            </tr>
        @endforelse
    </tbody>
</table>
<div class="mt-4">
    {{ $products->links() }}
</div>
@endsection