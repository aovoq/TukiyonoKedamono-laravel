<html>
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>

        <div id="calendar"></div>
    </body>
</html>
