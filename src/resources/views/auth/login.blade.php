<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
</head>
<body>
    <header>
        <div class="contact__header"><span>FashionablyLate</span></div>
    </header>
    <main class="contact__container">
        <section>
          <h2 class="contact__form--header">Login</h2>
        </section>
        <section class="contact__form--container">
          <form class="contact__form--content">
              <div class="contact__form--email">
                  <div><p style="color:#8A7869;">メールアドレス</p></div>
                  <div>
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="test@example.com" size="40"/>
                  </div>
              </div>
              <div class="contact__form--password">
                  <div><p style="color:#8A7869;">パスワード</p></div>
                  <div>
                      <input type="password" name="password" placeholder="coachtech1106" size="40"/>
                  </div>
              </div>
              <button class="contact__form--button" type="submit">ログイン</button>
            </form>
        </section>
      </main>
</body>
</html>
