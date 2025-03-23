@extends('layout.default')
<link rel="stylesheet" href="{{asset('css/index.css')}}">

@section('content')
<main class="contact__container">
    <section>
        <h2 class="contact__form--header"><p>Contact</p></h2>
    </section>
    <section>
      <form class="contact__form--content" action="/confirm" method="post">
      @csrf
        <dl>
            <dt><p>お名前<span style="color:red;">※</span></p></dt>
            <dd class="contact__input">
                <input type="text" name="last_name" placeholder="山田">
                <input type="text" name="first_name" placeholder="太郎">
            </dd>
            @error('last_name')
            <dd>
                {{$errors->first('last_name')}}
            </dd>
            @enderror
            @error('first_name')
            <dd>
                {{$errors->first('first_name')}}
            </dd>
            @enderror
        </dl>
        <div>
            <dt><p>性別<span style="color:red;">※</span></p></dt>
            <dd class="contact__input">
                <input type="radio" name="gender" value="1" checked>男性
                <input type="radio" name="gender" value="2">女性
                <input type="radio" name="gender" value="3">その他
            </dd>
            @error('gender')
            <dd>
                {{$errors->first('gender')}}
            </dd>
            @enderror
        </div>
        <div>
            <dt><p>メールアドレス<span style="color:red;">※</span></p></dt>
            <dd class="contact__input">
                <input type="text" name="email" placeholder="test@example">
            </dd>
            @error('email')
            <dd>
                {{$errors->first('email')}}
            </dd>
            @enderror
        </div>
        <div>
            <dt>電話番号<span style="color:red;">※</span></dt>
            <dd class="contact__input">
                <input type="tel" name="tel-first" placeholder="080">-
                <input type="tel" name="tel-second" placeholder="1234">-
                <input type="tel" name="tel-third" placeholder="5678">
            </dd>
            @error('tel-first')
            <dd>
                {{$errors->first('tel-first')}}
            </dd>
            @enderror
            @error('tel-second')
            <dd>
                {{$errors->first('tel-second')}}
            </dd>
            @enderror
            @error('tel-third')
            <dd>
                {{$errors->first('tel-third')}}
            </dd>
            @enderror
        </div>
        <div>
            <dt>住所<span style="color:red;">※</span></dt>
            <dd class="contact__input">
                <input type="text" name="address" placeholder="東京都渋谷区千駄ヶ谷1-2-3">
            </dd>
            @error('address')
            <dd>
                {{$errors->first('address')}}
            </dd>
            @enderror
        </div>
        <div>
            <dt>建物名</dt>
            <dd class="contact__input">
                <input type="text" name="building" placeholder="千駄ヶ谷マンション101">
            </dd>
            @error('building')
            <dd>
                {{$errors->first('building')}}
            </dd>
            @enderror
        </div>
        <div>
            <dt>お問い合わせの種類<span style="color:red;">※</span></dt>
            <dd class="contact__input">
                <input type="text" name="category_id">
            </dd>
            @error('category_id')
            <dd>
                {{$errors->first('category_id')}}
            </dd>
            @enderror
        </div>
        <div>
            <dt>お問い合わせ内容<span style="color:red;">※</span></dt>
            <dd class="contact__input">
                <textarea name="detail" cols="30" rows="10"></textarea>
            </dd>
            @error('detail')
            <dd>
                {{$errors->first('detail')}}
            </dd>
            @enderror
        </div>
        <button type="submit">確認画面へ</button>
      </form>
    </section>
    <section>
        <a href="/login">ログイン画面へ</a>
    </section>
</main>
@endsection