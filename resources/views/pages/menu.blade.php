<x-layout page="menu" subTitle="メニュー">

   <x-slot name="title">
      月夜のケダモノ | メニュー
   </x-slot>


   <div class="container">

      <section class="MenuList margin-top">
         <div class="section__title">
            <div class="section__title--main">DRINK MENU</div>
            <p class="section__title--sub">オシナガキ</p>
         </div>
         <div class="MenuList__Content">
            @foreach($menus as $menu)
               <div class="MenuItem">
                  <img class="MenuItem--img" src="{{ asset($menu->path) }}" alt="{{ asset($menu->name) }}">
                  <div class="MenuItem__Hover">
                     <div class="MenuItem__Hover--text">{{ $menu->name }}<br>￥{{ $menu->price }}</div>
                  </div>
               </div>
            @endforeach
         </div>
      </section>

      <section class="margin-top">
         <div class="section__title right">
            <div class="section__title--main">NEARBY SHOPS</div>
            <div class="section__title--sub">チカクノオミセ</div>
         </div>
         <p class="Nearby__Notes">
            フードメニューの販売はしておりません。飲食店の持ち込みは可能ですので<br>
            スーパー、コンビニエンスストアなどでお買い物をしてお越しください
         </p>
         <div class="Nearby__Map">
            <div class="Nearby__Map--bg"></div>
         </div>
      </section>
   </div>
</x-layout>
