@extends('layout.default')
<link rel="stylesheet" href="{{asset('css/admin.css')}}">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.js" defer></script>
@livewireStyles

@section('content')
<main class="contact__container">
    <section>
        <div class="admin__heading">
            <h2>Admin</h2>
          </div>
        @if (Auth::check())
          <form action="/logout" method="post">
          @csrf
                <button type="submit" class="logout-btn">ログアウト</button>
          </form>
        @endif
    </section>
    <section class="btn__group">
      <form class="search-form" action="" method="post">
        @csrf
        <div>
            <input class="keyword_input" type="text" name="keyword" placeholder="名前やメールアドレスを入力してください">
        </div>
        <div>
            <select name="gender">
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
            </select>
        </div>
        <div>
            <select class="select__contact--id" name="contact_id">
                <option value="">お問い合わせの種類</option>
                @foreach ($contacts as $contact)
                    <option value="{{$contact['contact_id']}}">{{$contact->category->getCategory()}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <input type="date">
        </div>
        <div>
            <button type="submit">検索</button>
        </div>
      </form>
      <div>
        <button type="submit">リセット</button>
      </div>
    </section>
    <section class="css-pagination">
        <div><button>エクスポート</button></div>
        <div>{{$contacts->links()}}</div>
    </section>
    <section class="admin__table--container">
        <table class="admin__table">
            <tr class="admin__table--header">
                <th class="admin__table--header-text">お名前</th>
                <th class="admin__table--header-text">性別</th>
                <th class="admin__table--header-text">メールアドレス</th>
                <th class="admin__table--header-text">お問い合わせの種類</th>
                <th></th>
            </tr>
            @foreach ($contacts as $contact)
            <tr class="admin__table--data">
                <td>{{$contact['last_name'] . " " . $contact['first_name']}}</td>
                <td>{{$contact['gender']}}</td>
                <td>{{$contact['email']}}</td>
                <td>{{$contact->category->getCategory()}}</td>
                <td><livewire:modal id="{{$contact['id']}}"></td>
            </tr>
            @endforeach
        </table>
    </section>
</main>
@livewireScripts
@endsection