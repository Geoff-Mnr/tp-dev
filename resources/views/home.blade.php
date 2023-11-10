@extends('layouts.default')

@section('content')
    <section class="mx-auto py-3 sm:p-5 antialiased flex justify-center items-center custom-height">
        <div
            class="bg-gray-800 h-96 shadow-md sm:rounded-lg overflow-hidden p-10 flex flex-col justify-center text-center text-white">
            <h1 class="text-3xl font-bold mb-4">
                Bienvenue sur Facturize
            </h1>
            <p class="text-base text-gray-300">
                Facturize est une plateforme de gestion de factures conviviale, conçue pour faciliter le suivi de vos
                transactions financières. Gérez vos clients, produits et factures en toute simplicité, que vous soyez
                indépendant ou une petite entreprise. Simplifiez votre facturation avec Facturize dès aujourd'hui !
            </p>
        </div>
    </section>

    <style>
        .custom-height {
            height: 70vh;
        }
    </style>
@endsection
