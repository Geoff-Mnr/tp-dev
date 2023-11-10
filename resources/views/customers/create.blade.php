@extends('layouts.default')

@section('content')
    <section class="py-3 sm:p-5 antialiased ">
        <h1 class="text-xl font-semibold  text-gray-900 sm:text-6xl md:text-2xl">{{ $title }}
        </h1>
        <form action="{{ route('customers.store') }}" method="POST"
            class="bg-gray-800 p-5 mt-4 mb-4  shadow-md sm:rounded-lg overflow-hidden w-full" enctype="multipart/form-data">
            @csrf

            <div class="mb-6 mt-1">
                <label for="reference" class="block mb-2 text-md font-medium text-white">Référence</label>
                <input type="text" name="reference" id="reference"
                    class="bg-gray-50 border border-gray-300  text-sm rounded-lg focus:ring-blue-500  block w-1/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-gray-400 text-white  focus:border-blue-500"
                    value="{{ old('reference') }}">
                @error('reference')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-6 mt-1">
                <label for="name" class="block mb-2 text-md font-medium text-white">Nom</label>
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
                <label for="email" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Email</label>
                <input name="email" id="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                {{ old('email') }}
                </input>
                @error('email')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-6 mt-1">
                <label for="phone" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Téléphone</label>
                <input name="phone" id="phone"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                {{ old('phone') }}
                </input>
                @error('phone')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-6 mt-1">
                <label for="website" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Site
                    internet</label>
                <input name="website" id="website" cols="30" rows="10"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                {{ old('website') }}
                </input>
                @error('website')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-6 mt-1">
                <label for="vat_number" class="block mb-2 text-md font-medium text-gray-900 dark:text-white">Numéro
                    d'entreprise</label>
                <input name="vat_number" id="vat_number" cols="30" rows="10"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/4 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                {{ old('vat_number') }}
                </input>
                @error('vat_number')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
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
            <div class="flex items-center space-x-4">
                <button type="submit"
                    class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 dark:text-gray-400 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800  dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Créer</button>
        </form>
        <a href="{{ route('customers.index') }}"
            class=" w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 dark:text-gray-400 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800  dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Retour</a>
        </div>
    </section>
@endsection
