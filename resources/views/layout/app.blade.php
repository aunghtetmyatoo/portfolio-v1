<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Aung Htet Myat Oo</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    <script src="https://apis.google.com/js/platform.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body class="text-gray-800 dark:text-gray-200 ">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900 pt-24">
        <x-layout.navbar></x-layout.navbar>
        {{ $slot }}
        <x-layout.footer></x-layout.footer>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>

<script>
    $(document).ready(function() {
        $(".nav-item").on("click", function(e) {
            e.preventDefault();
            var target = $(this).data("target");
            $("html, body").animate({
                scrollTop: $(target).offset().top
            }, "slow");
        });
    });
</script>
