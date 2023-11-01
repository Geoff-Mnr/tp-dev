@extends('layouts.default')

@section('content')
    <section class="py-3 sm:p-5 antialiased ">
        <h1 class="text-xl font-semibold  text-gray-900 sm:text-6xl md:text-2xl">{{ $title }}
        </h1>
        <form action="{{ route('products.store') }}" method="POST"
            class="bg-white  dark:bg-gray-800 p-5 mt-4 mb-4 relative shadow-md sm:rounded-lg overflow-hidden"
            enctype="multipart/form-data">
            @csrf

            <div class="mb-6 mt-1">
                <label for="reference" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Référence</label>
                <input type="text" name="reference" id="reference"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    value="{{ old('reference') }}">
                @error('reference')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-6 mt-1">
                <label for="name" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Nom</label>
                <input type="text" name="name" id="name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    value="{{ old('name') }}">
                @error('name')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-6 mt-1">
                <label for="brand" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Marque</label>
                <input name="brand" id="brand"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                {{ old('brand') }}
                </input>
                @error('brand')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-6 mt-1">
                <label for="ean_code" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Code Ean</label>
                <input name="ean_code" id="ean_code"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                {{ old('ean_code') }}
                </input>
                @error('ean_code')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-6 mt-1">
                <label for="stock" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Stock</label>
                <input name="stock" id="stock" cols="30" rows="10"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                {{ old('stock') }}
                </input>
                @error('stock')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-6 mt-1">
                <label for="stock_min" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Stock minimum</label>
                <input name="stock_min" id="stock_min" cols="30" rows="10"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                {{ old('stock_min') }}
                </input>
                @error('stock_min')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-6 mt-1">
                <label for="buying_price" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Prix
                    d'achat</label>
                <input name="buying_price" id="buying_price" cols="30" rows="10"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                {{ old('buying_price') }}
                </input>
                @error('buying_price')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-6 mt-1">
                <label for="selling_price" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Prix de
                    vente</label>
                <input name="selling_price" id="selling_price" cols="30" rows="10"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                {{ old('selling_price') }}
                </input>
                @error('selling_price')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-6 mt-1">
                <label for="document_id" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Type de facturation</label>
                <select name="document_id[]" id="document_id" multiple class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @foreach ($documenttypes as $documenttype)
                        <option value="{{ $documenttype->id }}">{{ $documenttype->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-6 mt-1">
                <label for="description"
                    class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Déscription</label>
                <textarea name="description" id="description" cols="30" rows="10"
                    class="block p-2.5 w-1/2 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    {{ old('description') }}
                </textarea>
                @error('description')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-6 mt-1">
                <label for="comment"
                    class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Commentaire</label>
                <textarea name="comment" id="comment" cols="30" rows="10"
                    class="block p-2.5 w-1/2 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    {{ old('comment') }}
                </textarea>
                @error('comment')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit"
                class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 dark:text-gray-400 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800  dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Créer</button>
            </div>
        </form>
    </section>
@endsection
