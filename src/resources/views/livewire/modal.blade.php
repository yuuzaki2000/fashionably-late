<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
<style>
.overlay{
  position:fixed;
  top:0;
  left:0;
  width:100%;
  height:100%;
  background-color:rgba(204,204,204,0.5);
  display: flex;
  align-items: center;
  justify-content: center;
}

.content{
  z-index:2;
  width:50%;
  padding: 1em;
  background:#fff;
}

.close-btn {
  margin-left: 80%;
}
</style>
</head>
<body>
    {{-- The best athlete wants his opponent at his best. --}}
  <div>
    <div x-data="{ open: false }">
        <button @click="open = true">モーダル画面を開く</button>
        <div class="overlay" x-show="open" @click.outside="open = false">
        <div class="content" >
        <div>
          <p><button class="close-btn" @click="open = false">x</button></p>
          <p>モーダル画面</p>
          <ul>
            @foreach ($contacts as $contact)
            <li>
              {{$contact->last_name}}
              {{$contact->first_name}}
              <button wire:click="delUser({{$contact->id}})">削除</button>
            </li>
            @endforeach
          </ul>
        </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
