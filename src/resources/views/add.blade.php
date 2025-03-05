@extends('layout.default')

@section('content')
<main class="contact__container">
    <section>
        <table class="admin_table" border="1">
            <tr>
                <th>苗字</th>
                <th>名前</th>
                <th>性別</th>
                <th>メールアドレス</th>
                <th>電話番号</th>
                <th>住所</th>
                <th>建物名</th>
                <th>お問い合わせ内容</th>
            </tr>
            @foreach ($contacts as $contact)
            <tr class="table__data">
                <td>{{$contact['first_name']}}</td>
                <td>{{$contact['last_name']}}</td>
                <td>{{$contact['gender']}}</td>
                <td>{{$contact['email']}}</td>
                <td>{{$contact['tel']}}</td>
                <td>{{$contact['address']}}</td>
                <td>{{$contact['building']}}</td>
                <td>{{$contact['detail']}}</td>
            </tr>
            @endforeach
        </table>
    </section>
</main>
@endsection