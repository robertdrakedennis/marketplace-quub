<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta name="title" content="Marketplace - Your Building Blocks Towards Success">
    <meta name="description" content="Your Building Blocks Towards Success.">
    <meta name="keywords" content="Game Hosting, Company Game Hosting, Hosting, Game Panel, Game Community, Community, Forums, Marketplace, Addons, Open Source, Odin, Pterodactyl Panel, Quub, Quub LTD">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <meta name="revisit-after" content="3 days">
    <meta name="author" content="Quub LTD">

    <meta property="og:site_name" content="Quub LTD - Marktplace">
    <meta property="og:title" content="Quub - Marketplace">
    <meta property="og:description" content="Your Building Blocks Towards Success.">
    <meta property="og:url" content="https://marketplace.quub.io">
    <meta property="og:image" content="https://marketplace.quub.io/assets/images/marketplace_embed.png">
    <meta property="og:type" content="product">

    <meta content="https://marketplace.quub.io/assets/images/marketplace_embed.png" name="twitter:image">
    <meta content="summary_large_image" name="twitter:card">
    <meta content="@quub_io" name="twitter:site">

    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon-16x16.png">
    <link rel="manifest" href="assets/images/site.webmanifest">
    <link rel="mask-icon" href="assets/images/safari-pinned-tab.svg" color="#F0B429">
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <meta name="msapplication-TileColor" content="#F0B429">
    <meta name="msapplication-config" content="assets/images/browserconfig.xml">
    <meta name="theme-color" content="#F0B429">

    <title>Marketplace - Your Building Blocks Towards Success</title>

    <!-- Scripts -->
    <script src="{{ mix('js/main.js', 'assets/build') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,500,700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

</head>
<body class="font-sans relative w-full m-0 p-0 font-normal antialiased text-neutral-900 bg-neutral-050">
<div id="app__marketplace" class="min-h-screen">
    <header class="container mx-auto p-4 mt-10 flex items-center justify-between mb-6">
        <a href="#" class="mr-auto flex items-center">
            <!-- Marketplace Logo Someday -->
            <img src="assets/images/marketplace_logo_solid.svg" class="h-12 w-12 mr-0 md:mr-6" alt="logo">
            <img src="assets/images/marketplace_logo_text.svg" class="hidden md:block align-middle h-12 w-auto max-w-full" alt="logo">
        </a>

        <div class="flex items-center">
            <a href="https://dashboard.quub.io/register" class="hidden md:inline-flex items-center text-neutral-600 ml-5">Register</a>
            <a href="https://dashboard.quub.io/login" class="inline-flex items-center text-primary-900 text-lg font-medium bg-primary-200 font-medium px-5 py-2 rounded-lg mr-5 md:ml-8 md:mr-0">Login</a>
        </div>
    </header>
    @yield('body')

    <footer class="text-center text-neutral-900 bg-primary-500">

        <div class="flex items-center justify-center mb-6 px-4 py-12">
            <a href="https://odin.quub.io" class="mx-5">Odin</a>
            <a href="https://strix.quub.io" class="mx-5">Strix</a>
            <a href="https://marketplace.quub.io" class="mx-5">Marketplace</a>
        </div>

        <div class="flex items-center justify-between text-sm text-left p-4 max-w-5xl mx-auto">
            <ul>
                <li>
                    Quub LTD
                </li>
                <li>
                    International House, 24 Holborn Viaduct, London,
                </li>
                <li>
                    United Kingdom, EC1A 2BN
                </li>
                <li>
                    <a href="https://beta.companieshouse.gov.uk/company/12182740">
                        Company Number - 12182740
                    </a>
                </li>
            </ul>

            <div>
                <img src="assets/images/quub_box_dark.svg" class="h-10 w-10" alt="logo">
            </div>
        </div>
    </footer>
</div>
<script src="{{ mix('js/main.js', 'assets/build') }}"></script>
</body>
</html>
