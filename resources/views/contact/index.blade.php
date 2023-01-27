<x-layout page="contact" subTitle="オトイアワセ">

   <x-slot name="title">
      月夜のケダモノ | お問い合わせ
   </x-slot>

      <section class="about margin-top" id="about">
         <div class="section__title">
            <div class="section__title--main">CONTACT FORM</div>
            <p class="section__title--sub">オトイアワセ</p>
         </div>

         <p class="about__desc">
            こちらのフォームは月夜のケダモノでイベントを開催したい方向けのお問い合わせフォームになっております。<br>
            その他のご質問はお電話または各種SNSのDMまでお問い合わせください。
         </p>

         <form class="contact_form" method="post" action="{{ route('contact.confirm') }}">
            @csrf
            <p>下記のフォームにてお問い合わせください。<br>
               お急ぎの方は電話にてお問い合わせください。</p>


            <div class="form_item">
               <p>お名前</p>
               <input type="text" class="form_box" name="name" placeholder="田中けだもの" value="{{ old('name') }}">
               @if ($errors->has('name'))
                  <p class="error-message">{{ $errors->first('name') }}</p>
               @endif
            </div>

            <div class="form_item">
               <p>フリガナ</p>
               <input type="text" class="form_box" name="name_kana" placeholder="タナカケダモノ"
                  value="{{ old('title') }}">
               @if ($errors->has('name_kana'))
                  <p class="error-message">{{ $errors->first('name_kana') }}</p>
               @endif
            </div>

            <div class="form_item">
               <p>会社名</p>
               <input type="text" class="form_box" name="company" placeholder="株式会社月夜のケダモノ"
                  value="{{ old('company') }}">
               @if ($errors->has('company'))
                  <p class="error-message">{{ $errors->first('company') }}</p>
               @endif
            </div>

            <div class="form_item">
               <p>メールアドレス</p>
               <input type="email" class="form_box" name="email" placeholder="kedamono@mail.com"
                  value="{{ old('email') }}">
               @if ($errors->has('email'))
                  <p class="error-message">{{ $errors->first('email') }}</p>
               @endif
            </div>

            <div class="form_item">
               <p>電話番号</p>
               <input type="tel" class="form_box" name="tel" placeholder="080-1234-5678"
                  value="{{ old('tel') }}">
               @if ($errors->has('tel'))
                  <p class="error-message">{{ $errors->first('tel') }}</p>
               @endif
            </div>

            {{-- <div class="form_item">
               <p>お問い合わせの種類</p>
               <select class="form_box">
                  <option value="0">選択してください</option>
                  <option value="1">イベント開催費用についてのお問い合わせ</option>
                  <option value="2">イベント開催に向けた日程についてのお問い合わせ</option>
                  <option value="3">イベント開催に関するその他のお問い合わせ</option>
               </select>
             </div> --}}
            <div class="form_item">
               <p>お問い合わせの件名</p>
               <input type="text" class="form_box" name="title" id="title" placeholder="イベント開催に関するお問い合わせ"
                  value="{{ old('title') }}">
               @if ($errors->has('title'))
                  <p class="error-message">{{ $errors->first('title') }}</p>
               @endif
            </div>

            <div class="form_item">
               <p>お問い合わせの内容</p>
               <textarea name="body" class="form_box" placeholder="こちらにお問い合わせ内容をご記入ください。">{{ old('body') }}</textarea>
               @if ($errors->has('body'))
                  <p class="error-message">{{ $errors->first('body') }}</p>
               @endif
            </div>

            <div class="form_checkbox">
               <input type="checkbox" id="agreeCheck">
               <p>個人情報の取り扱いについて同意しますか？</p>
            </div>
            <div><a href='#'>個人情報の取り扱いについて</a></div>

            <div class="btn"><button id="submitButton" type="submit" disabled>送信</button></div>

         </form>
      </section>

      <x-followus />

   {{-- <form method="POST" action="{{ route('contact.confirm') }}">
      @csrf

      <label for="email">メールアドレス</label>
      <input type="email" name="email" id="email" value="{{ old('email') }}">
      @if ($errors->has('email'))
         <p class="error-message">{{ $errors->first('email') }}</p>
      @endif

      <label for="title">タイトル</label>
      <input type="text" name="title" id="title" value="{{ old('title') }}">
      @if ($errors->has('title'))
         <p class="error-message">{{ $errors->first('title') }}</p>
      @endif

      <label for="body">お問い合わせ内容</label>
      <textarea name="body" id="body">{{ old('body') }}</textarea>
      @if ($errors->has('body'))
         <p class="error-message">{{ $errors->first('body') }}</p>
      @endif

      <button type="submit">
         入力内容確認
      </button>
   </form> --}}


</x-layout>
