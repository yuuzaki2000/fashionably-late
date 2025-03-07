@extends('layout.default')
<style>
.contact__form--header {
    text-align: center;
    color: #8a7869;
}

.btn__group {
    display: flex;
    justify-content: space-between;
}

.admin th {
    background-color: #b7efb7;
}

.css-pagination {
    display: flex;
    justify-content: space-between;
}

svg.w-5.h-5 {
    width: 30px;
    height: 30px;
}
</style>

@section('content')
<main class="item__container">
    <section>
        <div class="confirm__heading">
            <h2>Admin</h2>
          </div>
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
    <section>
        <table class="admin_table" border="1">
            <tr>
                <th >苗字</th>
                <th>名前</th>
                <th>性別</th>
                <th>メールアドレス</th>
                <th>お問い合わせの種類</th>
                <th></th>
            </tr>
            @foreach ($items as $item)
            <tr class="table__data">
                <td>{{$item['first_name']}}</td>
                <td>{{$item['last_name']}}</td>
                <td>{{$item['gender']}}</td>
                <td>{{$item['email']}}</td>
                <td>{{$item->category->getCategory()}}</td>
                <td><button>詳細</button></td>
            </tr>
            @endforeach
        </table>
    </section>
</main>
@endsection