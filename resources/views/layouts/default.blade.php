<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body class="w-full h-screen flex flex-col ">
    <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <img class="h-12 w-12" src="{{ asset('img/facture-dachat.webp') }}" alt="logo">
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <a href="{{ route('home') }}" :active="request() - > routeIs('home')"
                                class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium"
                                aria-current="page">Accueil</a>
                            <a href="{{ route('customers.index') }}" :active="request() - > routeIs('customers.index')"
                                class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">
                                {{ __('Clients') }}
                            </a>
                            <a href="{{ route('products.index') }}" :active="request() - > routeIs('products.index')"
                                class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">{{ __('Produits') }}</a>

                            <a href="{{ route('documents.index') }}" :active="request() - > routeIs('documents.index')"
                                class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">
                                {{ __('Documents') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </nav>
    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">Gestion de facturation</h1>
        </div>
    </header>
    <main class="flex-1">
        <div class="mx-auto max-w-7xl py-3 sm:px-6 lg:px-0 p-0">
            @yield('content')
        </div>
    </main>

    <footer class="bg-gray-800 text-white p-4">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0">
                    <img src="{{ asset('img/facture-dachat.webp') }}" class="h-8 mr-3" alt="Gestion facture Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Facturize</span>
                </a>
                <ul class="ml-10 flex items-baseline space-x-4">
                    <li>
                        <a href="{{ route('home') }}" :active="request() - > routeIs('home')"
                            class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium">Accueil</a>
                    </li>
                    <li>
                        <a href="{{ route('customers.index') }}" :active="request() - > routeIs('customers.index')"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Clients</a>
                    </li>
                    <li>
                        <a href="{{ route('products.index') }}" :active="request() - > routeIs('products.index')"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium ">Produits</a>
                    </li>
                    <li>
                        <a href="{{ route('documents.index') }}" :active="request() - > routeIs('documents.index')"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Documents</a>
                    </li>
                </ul>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-aut lg:my-8" />
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 Geoff- Mnr</a></span>
        </div>
    </footer>


</body>

</html>
