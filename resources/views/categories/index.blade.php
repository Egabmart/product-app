@extends('layouts.app')

@section('title', __('categories.title_list'))
@section('header', __('categories.title_list'))

@section('content')
<div class="flex justify-end mb-4">
    <a href="{{ route('categories.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        @lang('categories.create_new')
    </a>
</div>
<table class="min-w-full bg-white">
    <thead>
        <tr>
            <th class="py-2 px-4 border-b">@lang('categories.table_name')</th>
            <th class="py-2 px-4 border-b">@lang('categories.table_description')</th>
            <th class="py-2 px-4 border-b">@lang('common.actions')</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($categories as $category)
            <tr>
                <td class="py-2 px-4 border-b">{{ $category->name }}</td>
                <td class="py-2 px-4 border-b">{{ $category->description }}</td>
                <td class="py-2 px-4 border-b">
                    <form action="{{ route('categories.destroy', $category) }}" method="POST">
                        <a href="{{ route('categories.show', $category) }}" class="text-green-500 hover:text-green-700 mr-2">@lang('common.show')</a>
                        <a href="{{ route('categories.edit', $category) }}" class="text-yellow-500 hover:text-yellow-700 mr-2">@lang('common.edit')</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:text-red-700" onclick="return confirm('@lang('common.are_you_sure')')">@lang('common.delete')</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3" class="text-center py-4">@lang('categories.no_categories_found')</td>
            </tr>
        @endforelse
    </tbody>
</table>
<div class="mt-4">
    {{ $categories->links() }}
</div>
@endsection