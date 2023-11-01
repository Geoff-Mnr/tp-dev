@extends('layouts.default')

@section('content')
    <section class="py-3 sm:p-8 antialiased ">
        <h1 class="text-xl font-semibold  text-gray-900 sm:text-6xl md:text-2xl">{{ $title }}
        </h1>
        <form action="{{ route('products.update', $product->id) }}" method="POST"
            class="bg-white  dark:bg-gray-800 p-5 mt-4 mb-4 relative shadow-md sm:rounded-lg overflow-hidden">
            @csrf
            @method('PUT')
            <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
                <div class="w-full">
                    <label for="reference" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Référence
                        du client</label>
                    <input type="text" name="reference" id="reference"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{ $product->reference }}" placeholder="" required="">
                </div>

                <div class="sm:col-span-2">
                    <label for="name" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Nom du
                        client</label>
                    <input type="text" name="name" id="name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{ $product->name }}" placeholder="" required="">
                </div>

                <div class="sm:col-span-2">
                    <label for="brand"
                        class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Marque</label>
                    <input type="text" name="brand" id="brand"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{ $product->brand }}" placeholder="" required="">
                </div>

                <div class="sm:col-span-2">
                    <label for="ean_code"
                        class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Code Ean</label>
                    <input type="text" name="ean_code" id="ean_code"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{ $product->ean_code }}" placeholder="" required="">
                </div>

                <div class="sm:col-span-2">
                    <label for="stock" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Stock
                        </label>
                    <input type="text" name="stock" id="stock"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{ $product->stock }}" placeholder="" required="">
                </div>

                <div class="sm:col-span-2">
                    <label for="stock_min" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Stock
                        Minimum</label>
                    <input type="text" name="stock_min" id="stock_min"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{ $product->stock_min }}" placeholder="" required="">
                </div>

                <div class="sm:col-span-2">
                    <label for="buying_price" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Prix d'achat</label>
                    <input type="text" name="buying_price" id="buying_price"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{ $product->buying_price }}" placeholder="" required="">
                </div>

                <div class="sm:col-span-2">
                    <label for="selling_price" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Prix de vente</label>
                    <input type="text" name="selling_price" id="selling_price"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{ $product->selling_price}}" placeholder="" required="">
                </div>

                <div class="sm:col-span-2">
                    <label for="description"
                        class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Déscription</label>
                    <textarea name="description" id="description"
                        class="block p-2.5 w-1/2 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="" required="">{{ $product->description }}</textarea>
                </div>


                <div class="sm:col-span-2">
                    <label for="comment"
                        class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Commentaire</label>
                    <textarea name="comment" id="comment"
                        class="block p-2.5 w-1/2 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="" required="">{{ $product->comment }}</textarea>
                </div>

            </div>
            <div class="flex items-center space-x-4">
                <button type="submit"
                    class="mt-4 w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 dark:text-gray-400 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800  dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                    Modifier
                </button>
        </form>

        <a href="{{ route('products.index') }}" class="mt-4 w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 dark:text-gray-400 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800  dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Back</a>
        </div>
    </section>
@endsection
