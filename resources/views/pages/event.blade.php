<x-layout page="event" subTitle="イベント">

   <x-slot name="title">
      月夜のケダモノ | イベント
   </x-slot>


   <div class="container">
      <section class="event__calendar margin-top">
         <div class="section__title">
            <h2 class="section__title--main">CALENDER</h2>
            <p class="section__title--sub">カレンダー</p>
         </div>
         <div id="calendar"></div>
      </section>

      <section class="EventEvents margin-top">
         <div class="section__title right">
            <h2 class="section__title--main">EVENT</h2>
            <p class="section__title--sub">イベント</p>
         </div>
         <div class="EventEvents__List">
            @foreach (array_fill(0, 9, null) as $item)
            <div class="EventItem">
               <figure class="EventItem__Thumbnail">
                  {{-- <img class="EventItem__Thumbnail--img" src="{{ Vite::asset('resources/img/event_1.jpg') }}" alt="イベント画像"> --}}
               </figure>
               <div class="EventItem__Content">
                  <p class="EventItem__Content--date">2022/12/26 19:00~23:30</p>
                  <p class="EventItem__Content--title">ITエンジニアもくもくBAR！</p>
                  <p class="EventItem__Content--desc">エンジニア・IT関係の方向けのもくもく作業会＋BERを開催します！各自PCなどで作業をしながら、お酒を飲んだり、お互いに交流などできる会です。年末最後の開催です！<br>1ドリンクオーダー(１杯700~1000程度)</p>
               </div>
            </div>
            @endforeach
         </div>
      </section>
   </div>
</x-layout>
