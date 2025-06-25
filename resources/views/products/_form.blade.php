<div class="mb-4">
    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">@lang('common.name'):</label>
    <input type="text" name="name" id="name" value="{{ old('name', $product->name ?? '') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
</div>

<div class="mb-4">
    <label for="price" class="block text-gray-700 text-sm font-bold mb-2">@lang('products.price'):</label>
    <input type="number" name="price" id="price" value="{{ old('price', $product->price ?? '') }}" step="0.01" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
</div>

<div class="mb-4">
    <label for="category_id" class="block text-gray-700 text-sm font-bold mb-2">@lang('products.category'):</label>
    <select name="category_id" id="category_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        <option value="">@lang('products.select_category')</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}" @selected(old('category_id', $product->category_id ?? '') == $category->id)>
                {{ $category->name }}
            </option>
        @endforeach
    </select>
</div>

<div class="mb-4">
    <label for="description" class="block text-gray-700 text-sm font-bold mb-2">@lang('common.description'):</label>
    <textarea name="description" id="description" rows="3" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('description', $product->description ?? '') }}</textarea>
</div>

<div class="flex items-center justify-between">
    <a href="{{ route('products.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">@lang('common.back')</a>
    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">@lang('common.save')</button>
</div>