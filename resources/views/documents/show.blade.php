@extends('layouts.default')

@section('content')
    <section class="py-3  sm:p-5 antialiased w-auto">
        <div class="bg-white  dark:bg-gray-800 relative rounded-lg overflow-hidden p-10 border-t">

            <div class="h-36 flex justify-between mb-10">
                <h1 class="text-3xl text-white font-semibold">{{ $title }}
                    {{ $document->reference }}
                </h1>

                <div class="flex flex-col items-center">
                    <img class="h-12 w-12 mb-1" src="{{ asset('img/facture-dachat.webp') }}" alt="logo">
                    <h2 class="text-2xl text-white font-semibold">Facturize</h2>
                    <span class="text-gray-400">Le {{ \Carbon\Carbon::parse($document->created_at)->format('d F Y') }}</span>
                </div>
            </div>

            <div class="flex flex-col mb-11">
                <h3 class="text-white text-lg font-semibold mb-4">{{ $document->documenttype->name }} à l'attention de :
                </h3>
                <span class="text-gray-400  italic">{{ $document->customer->name }}</span>
                <span class="text-gray-400  italic">{{ $document->customer->adress }}</span>
                <span class="text-gray-400  italic">{{ $document->customer->email }}</span>
                <span class="text-gray-400  italic">{{ $document->customer->vat_number }}</span>
            </div>


            <table class="w-full">
                <thead>
                    <tr class="text-base uppercase bg-gray-700 text-gray-400">
                        <th scope="col" class="p-4 rounded-tl-xl">Produit</th>
                        <th scope="col" class="p-4">Prix</th>
                        <th scope="col" class="p-4">Référence</th>
                        <th scope="col" class="p-4">Tva</th>
                        <th scope="col" class="p-4 rounded-tr-xl">Total</th>
                    </tr>
                </thead>


                <tbody>
                    @foreach ($document->products as $product)
                        <tr>
                            <td class="p-4 text-center flex flex-col">
                                <span class="text-white font-bold">{{ $product->name }}</span>
                                <span class="text-gray-400">{{ $product->brand }}</span>
                            </td>
                            <td class="p-4 text-center">
                                <span class="text-gray-400">{{ $product->buying_price }} €</span>
                            </td>
                            <td class="p-4 text-center">
                                <span class="text-gray-400">{{ $product->reference }}</span>
                            </td>
                            <td class="p-4 text-center">
                                <span class="text-gray-400">{{ $document->vat }} %</span>
                            </td>
                            <td class="p-4 text-center">
                                <span class="text-gray-400">{{ $product->selling_price }} €</span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="flex flex-col items-end w-full mt-7 bg-gray-700 p-4 rounded-b-lg">
                <span class="w-1/6 text-white font-semibold">TVA : <span class="font-normal text-gray-400">{{$document->vat}}% </span></span>
                <span class="w-1/6 text-white font-semibold">TOTAL : <span class="font-normal text-gray-400">{{$document->totalttc}}€ </span></span>
            </div>
            
        </div>

        

        <a href="{{ route('documents.index') }}" class="px-3">
            <button type="button" data-drawer-target="drawer-read-product-advanced"
                data-drawer-show="drawer-read-product-advanced" aria-controls="drawer-read-product-advanced"
                class="py-2 px-3 flex items-center text-sm font-medium text-center text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="h-3.5 w-3.5 mr-1.5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 9.75L14.25 12m0 0l2.25 2.25M14.25 12l2.25-2.25M14.25 12L12 14.25m-2.58 4.92l-6.375-6.375a1.125 1.125 0 010-1.59L9.42 4.83c.211-.211.498-.33.796-.33H19.5a2.25 2.25 0 012.25 2.25v10.5a2.25 2.25 0 01-2.25 2.25h-9.284c-.298 0-.585-.119-.796-.33z" />
                </svg>
                <span class="ml-1">Retour</span>
            </button>
        </a>

    </section>
@endsection
