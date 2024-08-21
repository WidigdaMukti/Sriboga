<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sriboga | Home</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="font.css">
</head>

<body>
    <!-- Logo Container -->
    <div class="sticky top-0 flex justify-center items-center w-full py-6 bg-white z-50">
        <img src="assets/img/logo.png" alt="Sriboga Logo" class="h-8" />
    </div>

    @include('partials.header')

    <main>
        @include('partials.carousel')

        <<div class="flex flex-col lg:flex-row items-center h-full p-16 bg-white">
            <!-- Text content -->
            <div class="w-full lg:w-1/2 flex justify-center mb-8 lg:mb-0">
                <div class="w-7/12 md:w-full sm:w-full">
                    <h2 class="text-4xl font-bold mb-6 pt-serif-regular">Pioneer in Flour Innovation</h2>
                    <p class="text-lg mb-6">
                        PT. Sriboga Raturaya berdiri pada tahun 1995. Pada tahun 2011 berubah menjadi PT. Sriboga Flour
                        Mill sebagai pelopor Produsen Tepung Terigu yang memiliki gizi tinggi di Indonesia.
                    </p>
                    <a href="#"
                        class="inline-block px-6 py-2 text-blue-600 border border-blue-600 rounded hover:bg-blue-600 hover:text-white">
                        Learn more
                    </a>
                </div>
            </div>
            <!-- Image -->
            <div class="w-full lg:w-5/12 h-full flex justify-center">
                <img src="/assets/img/pabrik.jpeg" alt="Pabrik Image" class="object-cover w-full h-auto rounded-lg">
            </div>
            </div>

            @include('partials.looping')

            @include('partials.suproduct')

            @include('partials.discover')

            @include('partials.class')

            @include('partials.story')

    </main>

    @include('partials.footer')
</body>

</html>
