<!DOCTYPE html>
<html lang="ja">

<head>
   <!-- Google tag (gtag.js) -->
   <script async src="https://www.googletagmanager.com/gtag/js?id=G-7T6REP07VV"></script>
   <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
         dataLayer.push(arguments);
      }
      gtag('js', new Date());

      gtag('config', 'G-7T6REP07VV');
   </script>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   @if ($page === 'event')
      <meta name="csrf-token" content="{{ csrf_token() }}" />
   @endif
   <title>{{ $title }}</title>

   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">

   @vite(['resources/js/app.js', 'resources/css/app.scss'])
</head>

<body>
   @include('components/_header', ['page' => $page, 'subTitle' => $subTitle])
   <main>{{ $slot }}</main>
   @include('components/_footer')
</body>

</html>
