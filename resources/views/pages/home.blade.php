<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>月夜のケダモノ</title>
   <link rel="stylesheet" href="style.css" />
   @vite(['resources/js/app.js', 'resources/css/app.scss'])
</head>

<body>
   <header class="header">
      <nav class="header__nav">
         <ul class="header__nav--wrapper">
            <li><a href="/event.html">event</a></li>
            <li><a href="/menu.html">menu</a></li>
            <li><a href="/contact.html">contact</a></li>
            <li><a href="https://www.facebook.com/TsukiyoKedamono/"><img
                     src="{{ Vite::asset('resources/img/facebook_grey.png') }}"></a></li>
         </ul>
      </nav>
      <!-- <h1 class="header__logo">月夜のケダモノ</h1> -->
      <div class="header__logo">
         <img class="header__logo--image" src="{{ Vite::asset('resources/img/top_logo.png') }}" alt="月夜ケダモノ" />
      </div>
   </header>
   <main class="main">
      <section class="top__about" id="about">
         <h2 class="about__head">ABOUT US</h2>
         <p class="about__head--sub">ツキヨノケダモノ</p>

         <p class="about__desc">
            赤羽東口、クリエイター御用達のミュージックバー『月夜のケダモノ』。<br />
            酒・音・創―全てを楽しめる空間となっております。<br />
            会社帰りに一杯、ご友人と貸切でパーティー、クリエイター仲間を求めてー…<br />
            さまざまな用途でご利用いただけます。<br />
            新たな出会いと共に、ゆっくりとお過ごしください。
         </p>
         <div class="about__photo">
            <img class="about__photo--image" src="{{ Vite::asset('resources/img/eqp_rackamp.png') }}">
            <img class="about__photo--image" src="{{ Vite::asset('resources/img/liquar_lack.png') }}">
            <img class="about__photo--image" src="{{ Vite::asset('resources/img/screen.png') }}">
         </div>
         <div class="about__using--box">
            <ul class="about__using--list">
               <li class="about__using--list--box">
                  <div class="about__using--list--image--box">
                     <img class="about__using--list--image--consent"
                        src="{{ Vite::asset('resources/img/icon_consent.png') }}" alt="consent-icon">
                     <img class="about__using--list--balloon"
                        src="{{ Vite::asset('resources/img/speech-balloon.png') }}" alt="speech-balloon">
                  </div>
                  <p class="about__using--list--desc">コンセント使用可</p>
               </li>
               <li class="about__using--list--box">
                  <div class="about__using--list--image--box">
                     <img class="about__using--list--image--WiFi" src="{{ Vite::asset('resources/img/icon_Wi-Fi.png') }}" alt="Wi-Fi-icon">
                     <img class="about__using--list--balloon" src="{{ Vite::asset('resources/img/speech-balloon.png') }}"
                        alt="speech-balloon">
                  </div>
                  <p class="about__using--list--desc">Wi-Fi完備</p>
               </li>
               <li class="about__using--list--box">
                  <div class="about__using--list--image--box">
                     <img class="about__using--list--image--karaoke" src="{{ Vite::asset('resources/img/icon_karaoke.png') }}"
                        alt="karaoke-icon">
                     <img class="about__using--list--balloon" src="{{ Vite::asset('resources/img/speech-balloon.png') }}"
                        alt="speech-balloon">
                  </div>
                  <p class="about__using--list--desc">カラオケ有</p>
               </li>
               <li class="about__using--list--box">
                  <div class="about__using--list--image--box">
                     <img class="about__using--list--image--guitar" src="{{ Vite::asset('resources/img/icon_guitar.png') }}"
                        alt="guitar-icon">
                     <img class="about__using--list--balloon" src="{{ Vite::asset('resources/img/speech-balloon.png') }}"
                        alt="speech-balloon">
                  </div>
                  <p class="about__using--list--desc">ギター使用可<br>（持ち込み可）</p>
               </li>
               <li class="about__using--list--box">
                  <div class="about__using--list--image--box">
                     <img class="about__using--list--image--keyboard" src="{{ Vite::asset('resources/img/icon_keyboard.png') }}"
                        alt="keyboad-icon">
                     <img class="about__using--list--balloon" src="{{ Vite::asset('resources/img/speech-balloon.png') }}"
                        alt="speech-balloon">
                  </div>
                  <p class="about__using--list--desc">キーボード使用可</p>
               </li>
               <li class="about__using--list--box">
                  <div class="about__using--list--image--box">
                     <img class="about__using--list--image--fooddrink" src="{{ Vite::asset('resources/img/icon_food-drink.png') }}"
                        alt="food-drink-icon">
                     <img class="about__using--list--balloon" src="{{ Vite::asset('resources/img/speech-balloon.png') }}"
                        alt="speech-balloon">
                  </div>
                  <p class="about__using--list--desc">飲食物持ち込み可</p>
               </li>
               <li class="about__using--list--box">
                  <div class="about__using--list--image--box">
                     <img class="about__using--list--image--freedrink" src="{{ Vite::asset('resources/img/icon_free-drink.png') }}"
                        alt="free-drink-icon">
                     <img class="about__using--list--balloon" src="{{ Vite::asset('resources/img/speech-balloon.png') }}"
                        alt="speech-balloon">
                  </div>
                  <p class="about__using--list--desc">飲み放題1500円</p>
               </li>
               <li class="about__using--list--box">
                  <div class="about__using--list--image--box">
                     <img class="about__using--list--image--projector" src="{{ Vite::asset('resources/img/icon_projector.png') }}"
                        alt="projektor-icon">
                     <img class="about__using--list--balloon" src="{{ Vite::asset('resources/img/speech-balloon.png') }}"
                        alt="speech-balloon">
                  </div>
                  <p class="about__using--list--desc">120インチ<br>プロジェクター完備<br>スポーツバーとしても！</p>
               </li>
         </div>
         </div>
      </section>

      <section class="top__event">
         <div class="event__box">

         </div>
         <div class="event__title">
            <h2 class="event__head">EVENT</h2>
            <p class="event__head--sub">イベント</p>
         </div>
         <p class="viewmore"><a href="/event.html">VIEW MORE</a></p>
      </section>
      <section class="menu">
         <div class="menu__title">
            <h2 class="menu__head">MENU</h2>
            <p class="menu__head--sub">メニュー</p>
         </div>
         <ul class="menu__list">
            <li><img src="{{ Vite::asset('resources/img/asahi_beer.png') }}"></li>
            <li><img src="{{ Vite::asset('resources/img/asahi_beer.png') }}"></li>
            <li><img src="{{ Vite::asset('resources/img/asahi_beer.png') }}"></li>
            <li><img src="{{ Vite::asset('resources/img/asahi_beer.png') }}"></li>
         </ul>
         <p class="viewmore"><a href="/menu.html">VIEW MORE</a></p>
      </section>
      <section class="top__access">
         <iframe class="access__map"
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12947.282765558748!2d139.7229942!3d35.7797807!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3979be21a24b577d!2z5pyI5aSc44Gu44Kx44OA44Oi44OO!5e0!3m2!1sja!2sjp!4v1672668111411!5m2!1sja!2sjp"
            width="100%" height="572px" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
         <div class="access__title">
            <h2 class="access__head">ACCESS</h2>
            <p class="access__head--sub">アクセス</p>
         </div>
         <div class="access__desc">
            <h3 class="access__desc--title">月夜のケダモノ</h3>
            <p class="access__desc--address">〒115-0045<br>東京都北区赤羽２丁目１６−１０ パームビル赤羽 3F</p>
            <p class="access__desc--tel">TEL : 07064098466</p>
            <p class="access__desc--time">営業時間 : 18:00~24:00</p>
         </div>
      </section>
      <section class="top__contact">
         <div class="contact__title">
            <h2 class="contact__head">CONTACT</h2>
            <p class="contact__title--sub">オトイアワセ</p>
         </div>
         <div class="contact__desc">
            <p class="contact__desc--sub">月夜のケダモノでイベントを開催したい方！！！！！！！！！！！！！</p>
            <button class="contact__desc--button" type="button"
               onclick="location.href='/access.html'">お問い合わせ</button>
         </div>
      </section>

      <div class="follow">
         <p>Follow US!</p>
         <div class="sns__box">
            <a href="#"><img class="sns__icon" src="{{ Vite::asset('resources/img/facebook_white.png') }}"></a>
            <a href="#"><img class="sns__icon--twitter" src="{{ Vite::asset('resources/img/twitter_white.png') }}"></a>
            <a href="#"><img class="sns__icon--instagram" src="{{ Vite::asset('resources/img/instagram_white.png') }}"></a>
         </div>
      </div>

   </main>
   <footer class="footer">
      <div class="footer_item">
         <div class="footer__logo"><img class="footer__logo--image" src="{{ Vite::asset('resources/img/footer_logo.png') }}"></div>
         <p class="footer__tel">TEL : 070-6409-8466</p>
         <p class="footer__time">営業時間 : 18:00 ~ 24:00</p>
         <p class="footer__copywrite">&copy;TUKIYOnoKEDAMONO</p>
      </div>
   </footer>
</body>

</html>
