@extends('layout.default')
<link rel="stylesheet" href="{{asset('css/index.css')}}">

@section('content')
<main class="contact__container">
    <section>
        <h2 class="contact__form--header"><p>Contact</p></h2>
    </section>
    <section>
      <form class="contact__form--content">
        <dl>
            <dt>お名前</dt>
            <dd class="contact__input">
                <input type="text" name="first_name" placeholder="山田">
                <input type="text" name="last_name" placeholder="太郎">
            </dd>
        </dl>
        <div>
            <dt>性別</dt>
            <dd class="contact__input">
                <input type="radio" name="gender" value="male">男性
                <input type="radio" name="gender" value="female">女性
                <input type="radio" name="gender" value="other">その他
            </dd>
        </div>
        <div>
            <dt>メールアドレス</dt>
            <dd class="contact__input">
                <input type="text" name="email" placeholder="test@example">
            </dd>
        </div>
        <div>
            <label>電話番号</label>
            <dd class="contact__input">
                <input type="tel" name="tel" placeholder="080-1234-5678">
            </dd>
        </div>
        <div>
            <label>住所</label>
            <dd class="contact__input">
                <input type="text" name="address" placeholder="東京都渋谷区千駄ヶ谷1-2-3">
            </dd>
        </div>
        <div>
            <label>建物名</label>
            <dd class="contact__input">
                <input type="text" name="building" placeholder="千駄ヶ谷マンション101">
            </dd>
        </div>
        <div>
            <label>お問い合わせの種類</label>
            <dd class="contact__input">
                <select name="detail">
                    <option value="question">質問</option>
                    <option value="request">要望</option>
                </select>
            </dd>
        </div>
        <div>
            <label>お問い合わせ内容</label>
            <dd class="contact__input">
                <textarea name="content" id="" cols="30" rows="10"></textarea>
            </dd>
        </div>
        <button type="submit">確認画面</button>
      </form>
    </section>
</main>
@endsection