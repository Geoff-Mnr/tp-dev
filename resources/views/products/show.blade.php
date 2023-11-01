@extends('layouts.default')

@section('content')
    <section class="py-3  sm:p-5 antialiased">
        <h1 class="text-xl font-semibold  text-gray-900 sm:text-6xl md:text-2xl">{{ $title }}
        </h1>
        <div class="bg-white  dark:bg-gray-800 p-3 mt-4 mb-4 relative shadow-md sm:rounded-lg overflow-hidden">
            <label for="reference" class="dark:text-gray-400 font-semibold">Référence</label>
            <span class="dark:text-white">{{ $product->reference }}</span>
            </br>
            <label for="name" class="dark:text-gray-400 font-semibold">Nom</label>
            <span class="dark:text-white">{{ $product->name }}</span>
            </br>
            <label for="brand" class="dark:text-gray-400 font-semibold">Marque</label>
            <span class="dark:text-white">{{ $product->brand }}</span>
            </br>
            <label for="phone" class="dark:text-gray-400 font-semibold">Code Ean</label>
            <span class="dark:text-white">{{ $product->ean_code }}</span>
            </br>
            <label for="stock" class="dark:text-gray-400 font-semibold">Stock</label>
            <span class="dark:text-white">{{ $product->stock}}</span>
            </br>
            <label for="stock_min" class="dark:text-gray-400 font-semibold">Stock Minimum</label>
            <span class="dark:text-white">{{ $product->stock_min}}</span>
            </br>
            <label for="buying_price" class="dark:text-gray-400 font-semibold">Prix d'achat</label>
            <span class="dark:text-white">{{ $product->buying_price }}</span>
            </br>
            <label for="buying_selling" class="dark:text-gray-400 font-semibold">Prix de vente</label>
            <span class="dark:text-white">{{ $product->buying_selling }}</span>
            </br>
            <label for="website" class="dark:text-gray-400 font-semibold">Description</label>
            <span class="dark:text-white">{{ $product->description }}</span>
            </br>
            <label for="website" class="dark:text-gray-400 font-semibold">Commentaire</label>
            <span class="dark:text-white">{{ $product->comment }}</span>
            </br>
        </div>

        <button type="button" data-drawer-target="drawer-read-product-advanced"
            data-drawer-show="drawer-read-product-advanced" aria-controls="drawer-read-product-advanced"
            class="py-2 px-3 flex items-center text-sm font-medium text-center text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
            </svg>

            <a href="{{ route('products.index') }}" class="px-3">Retour</a>
        </button>
    </section>
@endsection
