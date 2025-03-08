@extends('layout.default')
<link rel="stylesheet" href="{{asset('css/admin.css')}}">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.js" defer></script>
@livewireStyles

@section('content')
<main class="item__container">
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
        <div>
            <input class="search_input" type="text" name="search_keyword" placeholder="名前やメールアドレスを入力してください">
        </div>
        <div>
            <select name="gender">
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
            </select>
        </div>
        <div>
            <select class="select__content" name="content">
                <option value=""></option>
                <option value=""></option>
            </select>
        </div>
        <div>
            <input type="date">
        </div>
        <div>
            <button type="submit">検索</button>
        </div>
        <div>
            <button type="submit">リセット</button>
        </div>
    </section>
    <section class="css-pagination">
        <div><button>エクスポート</button></div>
        <div>{{$items->links()}}</div>
    </section>
    <section class="admin__table--container">
        <table class="admin__table">
            <tr class="admin__table--header">
                <th class="admin__table--header-text">苗字</th>
                <th class="admin__table--header-text">名前</th>
                <th class="admin__table--header-text">性別</th>
                <th class="admin__table--header-text">メールアドレス</th>
                <th class="admin__table--header-text">お問い合わせの種類</th>
                <th></th>
            </tr>
            @foreach ($items as $item)
            <tr class="admin__table--data">
                <td>{{$item['last_name']}}</td>
                <td>{{$item['first_name']}}</td>
                <td>{{$item['gender']}}</td>
                <td>{{$item['email']}}</td>
                <td>{{$item->category->getCategory()}}</td>
                <td><livewire:modal id="{{$item['id']}}"></td>
            </tr>
            @endforeach
        </table>
    </section>
</main>
@livewireScripts
@endsection