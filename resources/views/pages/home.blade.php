<x-layout page="home" subTitle="ホーム">
   <x-slot name="title">
      月夜のケダモノ
   </x-slot>

   <div class="container">

      <section class="HomeAbout margin-top" id="about">
         <div class="section__title">
            <h2 class="section__title--main">ABOUT US</h2>
            <p class="setion__title--sub">ツキヨノケダモノ</p>
         </div>

         <p class="about__desc">
            赤羽東口、クリエイター御用達のミュージックバー『月夜のケダモノ』。<br />
            酒・音・創―全てを楽しめる空間となっております。<br />
            会社帰りに一杯、ご友人と貸切でパーティー、クリエイター仲間を求めてー…<br />
            さまざまな用途でご利用いただけます。<br />
            新たな出会いと共に、ゆっくりとお過ごしください。
         </p>
         <div class="about__photo">
            <img class="about__photo--image" src="{{ Vite::asset('resources/img/rackamp.png') }}">
            <img class="about__photo--image" src="{{ Vite::asset('resources/img/liquar_lack.png') }}">
            <img class="about__photo--image" src="{{ Vite::asset('resources/img/screen.png') }}">
         </div>

         <ul class="about_icon_list">
            <li class="about_icon">
               <div class="about_icon_image"><img src="{{ Vite::asset('resources/img/about_icon1.png') }}"
                     alt="コンセントicon"></div>
               <p class="about_icon_text">コンセント貸出可</p>
            </li>
            <li class="about_icon">
               <div class="about_icon_image"><img src="{{ Vite::asset('resources/img/about_icon2.png') }}"
                     alt="wi-fiicon"></div>
               <p class="about_icon_text">Wi-Fi完備</p>
            </li>
            <li class="about_icon">
               <div class="about_icon_image"><img src="{{ Vite::asset('resources/img/about_icon3.png') }}"
                     alt="カラオケicon"></div>
               <p class="about_icon_text">カラオケ有</p>
            </li>
            <li class="about_icon">
               <div class="about_icon_image"><img src="{{ Vite::asset('resources/img/about_icon4.png') }}"
                     alt="ギターicon"></div>
               <p class="about_icon_text">ギター使用可<br>
                  持ち込み可</p>
            </li>
            <li class="about_icon">
               <div class="about_icon_image"><img src="{{ Vite::asset('resources/img/about_icon5.png') }}"
                     alt="キーボードicon"></div>
               <p class="about_icon_text">キーボード使用可<br>
                  持ち込み可</p>
            </li>
            <li class="about_icon">
               <div class="about_icon_image"><img src="{{ Vite::asset('resources/img/about_icon6.png') }}"
                     alt="飲食物icon"></div>
               <p class="about_icon_text">飲食物持ち込み可</p>
            </li>
            <li class="about_icon">
               <div class="about_icon_image"><img src="{{ Vite::asset('resources/img/about_icon7.png') }}"
                     alt="飲み放題icon"></div>
               <p class="about_icon_text">飲み放題1500円</p>
            </li>
            <li class="about_icon">
               <div class="about_icon_image"><img src="{{ Vite::asset('resources/img/about_icon8.png') }}"
                     alt="プロジェクターicon"></div>
               <p class="about_icon_text">120インチ<br>
                  プロジェクター完備!</p>
            </li>
         </ul>
      </section>

      <section class="HomeEvent">
         <div class="HomeEvent__Content">
            <div class="HomeEvent__ContentImages">
               <div class="HomeEvent__ContentImages--img"
                  style="background-image: url({{ Vite::asset('resources/img/itmokumoku.png') }});"></div>
               <div
                  class="HomeEvent__ContentImages--img"style="background-image: url({{ Vite::asset('resources/img/radiopublic.png') }});">
               </div>
               <div
                  class="HomeEvent__ContentImages--img"style="background-image: url({{ Vite::asset('resources/img/itmokumoku.png') }});">
               </div>
            </div>
         </div>
         <div class="section__title right">
            <h2 class="section__title--main">EVENT</h2>
            <p class="section__title--sub">イベント</p>
         </div>
         <p class="viewmore"><a href="/event.html">VIEW MORE</a></p>
      </section>


      <section class="HomeMenu">
         <div class="section__title">
            <h2 class="section__title--main">MENU</h2>
            <p class="section__title--sub">メニュー</p>
         </div>

         <ul class="HomeMenu__List">
            @foreach ($menus as $menu)
               <li class="HomeMenu__Item">
                  <img class="HomeMenu__Item--img" src="{{ $menu->path }}" alt="asahiimg">
                  <div class="HomeMenu__Item--hover">
                     <p class="HomeMenu_Item--text">{{ $menu->name }}<br>
                        ¥{{ $menu->price }}</p>
                  </div>
               </li>
            @endforeach
         </ul>
         <p class="viewmore"><a href="{{ route('menu.index') }}">VIEW MORE</a></p>
      </section>



      <section class="HomeAccess">
         <div class="HomeAccess__Map">
            {{-- !MEMO: !4fxxx のxxx部分がzoomlevel (1-180) --}}
            <iframe class="HomeAccess__Map--iframe"
               src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12947.282765558748!2d139.7229942!3d35.7797807!3m2!1i1024!2i768!4f11.5!3m3!1m2!1s0x0%3A0x3979be21a24b577d!2z5pyI5aSc44Gu44Kx44OA44Oi44OO!5e0!3m2!1sja!2sjp!4v1672668111411!5m2!1sja!2sjp"
               style="border:0;" allowfullscreen="false" loading="lazy"
               referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>
         <div class="section__title right">
            <h2 class="section__title--main">ACCESS</h2>
            <p class="section__title--sub">アクセス</p>
         </div>
         <div class="HomeAccess__Desc">
            <h3 class="HomeAccess__Desc--name">月夜のケダモノ</h3>
            <p class="HomeAccess__Desc--address">〒115-0045<br>東京都北区赤羽２丁目１６−１０ パームビル赤羽 3F</p>
            <p class="HomeAccess__Desc--tel">TEL : 07064098466</p>
            <p class="HomeAccess__Desc--time">営業時間 : 18:00~24:00</p>
         </div>
      </section>


      <section class="HomeContact margin-top">
         <div class="section__title">
            <h2 class="section__title--main">CONTACT</h2>
            <p class="section__title--sub">オトイアワセ</p>
         </div>
         <div class="HomeContact__Desc">
            <p class="HomeContact__Desc--text">月夜のケダモノでイベントを開催したい方！！！！！！！！！！！！！</p>
            <a class="HomeContact__Desc__btn" href="{{ route('contact.index') }}">お問い合わせ</a>
         </div>
      </section>

   </div>

   <x-followus />


</x-layout>
