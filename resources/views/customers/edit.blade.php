@extends('layouts.default')

@section('content')
    <section class="py-3 sm:p-8 antialiased ">
        <h1 class="text-xl font-semibold  text-gray-900 sm:text-6xl md:text-2xl">{{ $title }}
        </h1>
        <form action="{{ route('customers.update', $customer->id) }}" method="POST"
            class="bg-white  dark:bg-gray-800 p-5 mt-4 mb-4 relative shadow-md sm:rounded-lg overflow-hidden">
            @csrf
            @method('PUT')
            <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
                <div class="w-full">
                    <label for="reference" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Référence
                        du client</label>
                    <input type="text" name="reference" id="reference"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{ $customer->reference }}" placeholder="" required="">
                </div>

                <div class="sm:col-span-2">
                    <label for="name" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Nom du
                        client</label>
                    <input type="text" name="name" id="name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{ $customer->name }}" placeholder="" required="">
                </div>

                <div class="sm:col-span-2">
                    <label for="email"
                        class="block mb-2 text-md font-medium text-gray-900 dark:text-white">E-mail</label>
                    <input type="text" name="email" id="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{ $customer->email }}" placeholder="" required="">
                </div>

                <div class="sm:col-span-2">
                    <label for="phone"
                        class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Téléphone</label>
                    <input type="text" name="phone" id="phone"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{ $customer->phone }}" placeholder="" required="">
                </div>

                <div class="sm:col-span-2">
                    <label for="website" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Site
                        internet</label>
                    <input type="text" name="website" id="website"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{ $customer->website }}" placeholder="" required="">
                </div>

                <div class="sm:col-span-2">
                    <label for="vat_number" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Numéro
                        d'entreprise</label>
                    <input type="text" name="vat_number" id="vat_number"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        value="{{ $customer->vat_number }}" placeholder="" required="">
                </div>

                <div class="sm:col-span-2">
                    <label for="description"
                        class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Déscription</label>
                    <textarea name="description" id="description"
                        class="block p-2.5 w-1/2 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="" required="">{{ $customer->description }}</textarea>
                </div>


                <div class="sm:col-span-2">
                    <label for="comment"
                        class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Commentaire</label>
                    <textarea name="comment" id="comment"
                        class="block p-2.5 w-1/2 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="" required="">{{ $customer->comment }}</textarea>
                </div>

            </div>
            <div class="flex items-center space-x-4">
                <button type="submit"
                    class="mt-4 w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 dark:text-gray-400 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800  dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                    Modifier
                </button>
        </form>

        <a href="{{ route('customers.index') }}" class="mt-4 w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 dark:text-gray-400 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800  dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Back</a>
        </div>
    </section>
@endsection
