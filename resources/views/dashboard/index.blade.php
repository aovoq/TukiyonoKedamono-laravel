<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
   @vite(['resources/js/app.js','resources/css/app.scss'])
</head>

<body>


   <form method="POST" action="{{ route('dashboard.menu_create') }}" enctype="multipart/form-data">
      @csrf
      <label>
         menu_name:
         <input type="text" name="menu_name">
      </label>
      <label>
         menu_price:
         <input type="number" name="menu_price">
      </label>
      <input type="file" name="image">
      <button>アップロード</button>
   </form>

   <ul>
      @foreach ($menus as $menu)
         <li>
            <p>{{ $menu->name }}</p>
            <p>{{ $menu->price }}円</p>
            <img src="{{ asset($menu->path) }}">
            <form action="{{ route('dashboard.menu_delete') }}" method="post">
               @csrf
               @method('DELETE')
               <button type="submit" name="id" value="{{ $menu->id }}">delete</button>
            </form>
         </li>
      @endforeach
   </ul>
</body>

</html>
