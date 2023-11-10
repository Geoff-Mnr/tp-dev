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

        <a href="{{ route('customers.index') }}" class="px-3">
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
