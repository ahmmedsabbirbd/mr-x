<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>{{$seo->title}}</title>
    <meta name="keywords" content="{{$seo->keywords}}" />
    <meta name="description" content="{{$seo->description}}" />
    <meta name="og:site_name" content="{{$seo->ogSiteName}}" />
    <meta name="og:url" content="{{$seo->ogUrl}}" />
    <meta name="og:title" content="{{$seo->ogTitle}}" />
    <meta name="og:description" content="{{$seo->ogDescription}}" />
    <meta name="og:image" content="{{$seo->ogImage}}" />
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css') }}"
        rel="stylesheet" />
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/js/axios.js') }}"></script>
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- navbar-->
        @include('components.navbar')
        @include('components.loader')
        <div class="" id="content-div">
            @yield('content')
        </div>
    </main>
    <!-- Footer-->
    @include('components.footer')

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
