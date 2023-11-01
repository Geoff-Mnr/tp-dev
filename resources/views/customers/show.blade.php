@extends('layouts.default')

@section('content')
    <section class="py-3  sm:p-5 antialiased">
        <h1 class="text-xl font-semibold  text-gray-900 sm:text-6xl md:text-2xl">{{ $title }}
        </h1>
        <div class="bg-white  dark:bg-gray-800 p-3 mt-4 mb-4 relative shadow-md sm:rounded-lg overflow-hidden">
            <label for="reference" class="dark:text-gray-400 font-semibold">Référence</label>
            <span class="dark:text-white">{{ $customer->reference }}</span>
            </br>
            <label for="name" class="dark:text-gray-400 font-semibold">Nom</label>
            <span class="dark:text-white">{{ $customer->name }}</span>
            </br>
            <label for="email" class="dark:text-gray-400 font-semibold">Email</label>
            <span class="dark:text-white">{{ $customer->email }}</span>
            </br>
            <label for="phone" class="dark:text-gray-400 font-semibold">Téléphone</label>
            <span class="dark:text-white">{{ $customer->phone }}</span>
            </br>
            <label for="website" class="dark:text-gray-400 font-semibold">Site internet</label>
            <span class="dark:text-white">{{ $customer->website }}</span>
            </br>
            <label for="website" class="dark:text-gray-400 font-semibold">Numéro d'entreprise</label>
            <span class="dark:text-white">{{ $customer->vat_number }}</span>
            </br>
            <label for="website" class="dark:text-gray-400 font-semibold">Description</label>
            <span class="dark:text-white">{{ $customer->description }}</span>
            </br>
            <label for="website" class="dark:text-gray-400 font-semibold">Commentaire</label>
            <span class="dark:text-white">{{ $customer->comment }}</span>
            </br>


        </div>

        <button type="button" data-drawer-target="drawer-read-product-advanced"
            data-drawer-show="drawer-read-product-advanced" aria-controls="drawer-read-product-advanced"
            class="py-2 px-3 flex items-center text-sm font-medium text-center text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
            </svg>

            <a href="{{ route('customers.index') }}" class="px-3">Retour</a>
        </button>
    </section>
@endsection
