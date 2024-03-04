<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="{{ asset('asset/image/semol.png') }}" type="image/x-icon">
    <title>{{ $title }}</title>
    <style type="text/tailwindcss">
        @layer utilities {
            .content-auto {
                content-visibility: auto;
            }
        }
    </style>
</head>

<body>
    @include('admin.include.navbar')

    <div class="content">
        @yield('content')
    </div>

    @include('admin.include.footer')
</body>

</html>
