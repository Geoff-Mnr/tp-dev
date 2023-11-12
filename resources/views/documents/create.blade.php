@extends('layouts.default')

@section('content')
    <section class="py-3 sm:p-5 antialiased ">
        <h1 class="text-xl font-semibold  text-gray-900 sm:text-6xl md:text-2xl">{{ $title }}
        </h1>
        <form action="{{ route('documents.store') }}" method="POST"
            class="bg-white  dark:bg-gray-800 p-5 mt-4 mb-4 relative shadow-md sm:rounded-lg overflow-hidden"
            enctype="multipart/form-data">
            @csrf

            <div class="mb-6 mt-1">
                <label for="customer_id" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Client</label>
                <select name='customer_id' id='customer_id'
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @foreach ($customers as $customer)
                        <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-6 mt-1">
                <label for="documenttype_id" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Type de
                    document</label>
                <select name='documenttype_id' id='documenttype_id'
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @foreach ($documenttypes as $documenttype)
                        <option value="{{ $documenttype->id }}">{{ $documenttype->name }}</option>
                    @endforeach

                </select>
            </div>

            <div class="mb-6 mt-1">
                <label for="product_id" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Produit</label>
                <select name="product_id[]" id="product_id" multiple
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }}, {{ $product->brand }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-6 mt-1">
                <label for="reference"
                    class="block mb-2 text-md font-medium text-gray-900 dark:text-white">reference</label>
                <input name="reference" id="reference"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                {{ old('reference') }}
                </input>
                @error('reference')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-6 mt-1">
                <label for="totalhvat" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Montant Tva
                    inclus</label>
                <input name="totalhvat" id="totalhvat" cols="30" rows="10"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                {{ old('totalhvat') }}
                </input>
                @error('totalhvat')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-6 mt-1">
                <label for="vat" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Tva</label>
                <input name="vat" id="vat" cols="30" rows="10"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                {{ old('vat') }}
                </input>
                @error('vat')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-6 mt-1">
                <label for="totalttc" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Montant Tva
                    inclus</label>
                <input name="totalttc" id="totalttc" cols="30" rows="10"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                {{ old('totalttc') }}
                </input>
                @error('totalttc')
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
            <div class="flex items-center space-x-4">
                <button type="submit"
                    class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 dark:text-gray-400 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800  dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Créer</button>
        </form>
        <a href="{{ route('documents.index') }}"
            class=" w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 dark:text-gray-400 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800  dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Retour</a>
        </div>
    </section>
@endsection
