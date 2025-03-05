@extends('layout.default')
<link rel="stylesheet" href="{{asset('css/admin.css')}}">

@section('content')
<main class="item__container">
    <section>
        <h2 class="item__form--header"><p>Admin</p></h2>
        <form action="/logout" method="post">
        @csrf
            <button type="submit" class="logout-btn">ログアウト</button>
        </form>
    </section>
    <section class="btn__group">
        <div>
            <input type="text" name="keyword">
        </div>
        <div>
            <select name="gender">
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
            </select>
        </div>
        <div>
            <select name="content">
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
    <section>
        <button>エクスポート</button>
    </section>
    <section>
        <table class="admin_table" border="1">
            <tr>
                <th >苗字</th>
                <th>名前</th>
                <th>性別</th>
                <th>メールアドレス</th>
                <th>お問い合わせの種類</th>
            </tr>
            @foreach ($items as $item)
            <tr class="table__data">
                <td>{{$item['first_name']}}</td>
                <td>{{$item['last_name']}}</td>
                <td>{{$item['gender']}}</td>
                <td>{{$item['email']}}</td>
                <td>{{$item->category->getCategory()}}</td>
            </tr>
            @endforeach
        </table>
    </section>
</main>
@endsection