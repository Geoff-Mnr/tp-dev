@extends('layouts.default')

@section('content')
    <section class="py-3 sm:p-8 antialiased ">
        <h1 class="text-xl font-semibold  text-gray-900 sm:text-6xl md:text-2xl">{{ $title }}
        </h1>
        <form action="{{ route('documents.update', $document->id) }}" method="POST"
            class="bg-white  dark:bg-gray-800 p-5 mt-4 mb-4 relative shadow-md sm:rounded-lg overflow-hidden">
            @csrf
            @method('PUT')
            <div class="mb-6 mt-1">
                <label for="customer_id" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Client</label>
                <select name='customer_id' id='customer_id'
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @foreach ($customers as $customer)
                        <option value="{{ $customer->id }}" @if ($customer->id == $document->customer_id) selected @endif>
                            {{ $customer->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-6 mt-1">
                <label for="documenttype_id" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Type de
                    document</label>
                <select name='documenttype_id' id='documenttype_id'
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @foreach ($documenttypes as $documenttype)
                        <option value="{{ $documenttype->id }}" @if ($documenttype->id == $document->documenttype_id) selected @endif>
                            {{ $documenttype->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-6 mt-1">
                <label for="product_id" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Produit</label>
                <select name="product_id[]" id="product_id" multiple
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}" @if (in_array($product->id, $document->products->pluck('id')->toArray())) selected @endif>
                            {{ $product->name }}
                        </option>
                    @endforeach
                </select>
            </div>


            <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
                <div class="sm:col-span-2">
                    <label for="reference"
                        class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Référence</label>
                    <input type="text" name="reference" id="reference"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{ $document->reference }}" placeholder="" required="">
                </div>
                <div class="sm:col-span-2">
                    <label for="totalhvat" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Total HTVA
                    </label>
                    <input type="text" name="totalhvat" id="totalhvat"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{ $document->totalhvat }}" placeholder="" required="">
                </div>

                <div class="sm:col-span-2">
                    <label for="vat" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Taxe
                        Minimum</label>
                    <input type="text" name="vat" id="vat"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{ $document->vat }}" placeholder="" required="">
                </div>

                <div class="sm:col-span-2">
                    <label for="totalttc" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Total
                        TTC</label>
                    <input type="text" name="totalttc" id="totalttc"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{ $document->totalttc }}" placeholder="" required="">
                </div>

                <div class="sm:col-span-2">
                    <label for="comment" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Prix de
                        vente</label>
                    <input type="text" name="comment" id="comment"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{ $document->comment }}" placeholder="" required="">
                </div>
            </div>
            <div class="flex items-center space-x-4">
                <button type="submit"
                    class="mt-4 w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 dark:text-gray-400 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800  dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                    Modifier
                </button>
        </form>

        <a href="{{ route('documents.index') }}"
            class="mt-4 w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 dark:text-gray-400 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800  dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Retour</a>
        </div>
    </section>
@endsection
