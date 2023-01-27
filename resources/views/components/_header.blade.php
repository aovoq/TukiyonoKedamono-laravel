<header class="Header {{ $page }}">
   <nav class="Header__Nav">
      <a href="/"><img class="Header__Nav--logo" src="{{ Vite::asset('resources/img/header_logo.png') }}"></a>
      <ul class="Header__NavList">
         <li><a href="{{ route('event.index') }}">event</a></li>
         <li><a href="{{ route('menu.index') }}">menu</a></li>
         <li><a href="{{ route('contact.index') }}">contact</a></li>
         <li><a href="https://www.facebook.com/TsukiyoKedamono/"><img class="Header__NavList--icon"
                  src="{{ Vite::asset('resources/img/facebook_grey.png') }}"></a></li>
      </ul>
   </nav>

   <div class="Header__HomeLogo">
      <img class="Header__HomeLogo--img" src="{{ Vite::asset('resources/img/top_logo.png') }}" alt="月夜のケダモノ" />
   </div>

   <div class="swiper">
      <div class="swiper-wrapper">
         <div class="swiper-slide"><img src="{{ Vite::asset('resources/img/corridor_2.jpg') }}"></div>
         <div class="swiper-slide"><img src="{{ Vite::asset('resources/img/stage_2.jpg') }}"></div>
         <div class="swiper-slide"><img src="{{ Vite::asset('resources/img/eqp_amp_hk.jpg') }}"></div>
         <div class="swiper-slide"><img src="{{ Vite::asset('resources/img/hall_overall.jpg') }}"></div>
      </div>
      <div class="swiper-pagination"></div>
   </div>

   <div class="Header__PageTitle">
      <h1 class="Header__PageTitle--main">{{ $page }}</h1>
      <p class="Header__PageTitle--sub">{{ $subTitle }}</p>
   </div>
</header>
