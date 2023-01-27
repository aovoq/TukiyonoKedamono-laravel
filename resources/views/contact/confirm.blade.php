<x-layout page="contact" subTitle="オトイアワセ">

   <x-slot name="title">
      月夜のケダモノ | お問い合わせ | 確認画面
   </x-slot>

   <section class="about" id="about">
      <h2 class="about__head">CONFIRM FORM</h2>
      <p class="about__head--sub">コチラデタダシイデスカ？</p>

      <form class="contact_form" method="post" action="{{ route('contact.send') }}">
         @csrf

         <div class="form_item">
            <p>お名前</p>
            <input type="text" class="form_box" name="name" placeholder="田中けだもの" value="{{ $inputs['email'] }}"
               readonly>
         </div>

         <div class="form_item">
            <p>フリガナ</p>
            <input type="text" class="form_box" name="name_kana" placeholder="タナカケダモノ"
               value="{{ $inputs['title'] }}" readonly>
         </div>

         <div class="form_item">
            <p>会社名</p>
            <input type="text" class="form_box" name="company" placeholder="株式会社月夜のケダモノ"
               value="{{ $inputs['company'] }}" readonly>
         </div>

         <div class="form_item">
            <p>メールアドレス</p>
            <input type="email" class="form_box" name="email" placeholder="kedamono@mail.com"
               value="{{ $inputs['email'] }}" readonly>
         </div>

         <div class="form_item">
            <p>電話番号</p>
            <input type="tel" class="form_box" name="tel" placeholder="080-1234-5678"
               value="{{ $inputs['tel'] }}" readonly>
         </div>

         <div class="form_item">
            <p>お問い合わせの件名</p>
            <input type="text" class="form_box" name="title" id="title" placeholder="イベント開催に関するお問い合わせ"
               value="{{ $inputs['title'] }}" readonly>
         </div>

         <div class="form_item">
            <p>お問い合わせの内容</p>
            <textarea name="body" class="form_box" placeholder="こちらにお問い合わせ内容をご記入ください。" readonly>{!! nl2br(e($inputs['body'])) !!}</textarea>
         </div>

         <div class="form_item form_btns">
            <button type="submit" name="action" value="back">入力内容修正</button>
            <button type="submit" name="action" value="submit">送信する</button>
         </div>

      </form>
   </section>


</x-layout>
