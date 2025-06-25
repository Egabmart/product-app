<div class="mb-4">
    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">@lang('common.name'):</label>
    <input type="text" name="name" id="name" value="{{ old('name', $category->name ?? '') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
</div>
<div class="mb-4">
    <label for="description" class="block text-gray-700 text-sm font-bold mb-2">@lang('common.description'):</label>
    <textarea name="description" id="description" rows="3" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('description', $category->description ?? '') }}</textarea>
</div>
<div class="flex items-center justify-between">
    <a href="{{ route('categories.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">@lang('common.back')</a>
    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">@lang('common.save')</button>
</div>