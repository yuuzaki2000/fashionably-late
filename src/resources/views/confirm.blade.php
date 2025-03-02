@extends('layout.default')
<link rel="stylesheet" href="css/confirm.css">

@section('content')
<main class="contact__container">
    <section>
        <h2 class="contact__form--header"><p>Confirm</p></h2>
    </section>
    <section>
        <table>
            <tr>
                <th>お名前</th>
                <td>山田 太郎</td>
            </tr>
            <tr>
                <th>性別</th>
                <td>男性</td>
            </tr>
            <tr>
                <th>メールアドレス</th>
                <td>test@example.com</td>
            </tr>
            <tr>
                <th>電話番号</th>
                <td>08012345678</td>
            </tr>
            <tr>
                <th>住所</th>
                <td>東京都渋谷区千駄ヶ谷1-2-3</td>
            </tr>
            <tr>
                <th>建物名</th>
                <td>千駄ヶ谷マンション101</td>
            </tr>
            <tr>
                <th>お問い合わせの種類</th>
                <td>商品の交換について</td>
            </tr>
            <tr>
                <th>お問い合わせ内容</th>
                <td>届いた商品が注文した商品ではありませんでした。商品の取替をお願いします。</td>
            </tr>
        </table>
        <div>
            <button type="submit">送信</button>
            <a href="">修正</a>
        </div>
    </section>
</main>

@endsection