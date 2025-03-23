@extends('layout.default')
<link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />

@section('content')

<!DOCTYPE html>
  <main>
    <section>
      <div class="confirm__content">
        <div class="confirm__heading">
          <h2>Confirm</h2>
        </div>
        <form class="form" action="/thanks" method="post">
        @csrf
          <div class="confirm-table">
            <table class="confirm-table__inner">
              <tr class="confirm-table__row">
                <th class="confirm-table__header">苗字</th>
                <td class="confirm-table__text">
                  <input type="text" name="last_name" value="{{$form['last_name']}}" readonly/>
                </td>
              </tr>
              <tr class="confirm-table__row">
                <th class="confirm-table__header">ファーストネーム</th>
                <td class="confirm-table__text">
                  <input type="text" name="first_name" value="{{$form['first_name']}}" readonly/>
                </td>
              </tr>
              <tr class="confirm-table__row">
                <th class="confirm-table__header">性別</th>
                <td class="confirm-table__text">
                  <input type="text" name="gender" 
                   value="{{$form['gender']}}" readonly/>
                </td>
              </tr>
              <tr class="confirm-table__row">
                <th class="confirm-table__header">メールアドレス</th>
                <td class="confirm-table__text">
                  <input type="email" name="email" value="{{$form['email']}}" readonly/>
                </td>
              </tr>
              <tr class="confirm-table__row">
                <th class="confirm-table__header">電話番号</th>
                <td class="confirm-table__text">
                  <input type="tel" name="tel" value="{{$form['tel-first'] . "-" . $form['tel-second'] . "-" . $form['tel-third']}}" readonly/>
                </td>
              </tr>
              <tr class="confirm-table__row">
                <th class="confirm-table__header">住所</th>
                <td class="confirm-table__text">
                  <input type="text" name="address" value="{{$form['address']}}" readonly/>
                </td>
              </tr>
              <tr class="confirm-table__row">
                <th class="confirm-table__header">建物名</th>
                <td class="confirm-table__text">
                  <input type="text" name="building" value="{{$form['building']}}" readonly/>
                </td>
              </tr>
              <tr class="confirm-table__row">
                <th class="confirm-table__header">お問い合わせの種類</th>
                <td class="confirm-table__text">
                  <input type="text" name="category_id" value="{{$form['category_id']}}" readonly/>
                </td>
              </tr>
              <tr class="confirm-table__row">
                <th class="confirm-table__header">お問い合わせ内容</th>
                <td class="confirm-table__text">
                  <input type="text" name="detail" value="{{$form['detail']}}" readonly/>
                </td>
              </tr>
            </table>
          </div>
          <div class="form__button">
            <button class="form__button-submit" type="submit">送信</button>
          </div>
        </form>
      </div>
    </section>
  </main>
@endsection