<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="min-h-full">
        <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img class="h-8 w-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500"
                                alt="Your Company">
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                                <a href="{{ route('home') }}" :active="request() - > routeIs('home')"
                                    class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium"
                                    aria-current="page">Home</a>
                                <a href="{{ route('customers.index') }}"
                                    :active="request() - > routeIs('customers.index')"
                                    class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">
                                    {{ __('Clients') }}
                                </a>


                                <a href="{{ route('products.index') }}"
                                    :active="request() - > routeIs('products.index')""
                                    class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">{{ __('Produits') }}</a>

                                <a href="{{ route('documents.index') }}"
                                    :active="request() - > routeIs('documents.index')"
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
        <main class="p-0">
            <div class="mx-auto max-w-7xl py-3 sm:px-6 lg:px-0 p-0">
                @yield('content')
            </div>
        </main>
    </div>
</body>

</html>
