@extends('layouts.helloapp')

@section('title','Person.Edit')

@section('menubar')
@parent
編集ページ
@endsection

@section('content')
@if(count($errors)>0)
<div>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="/person/edit" method="post">
    <table>
        @csrf
        <input type="hidden" name="id" value="{{$form->id}}">
        <tr><th>name: </th><td><input type="text" name="name" value="{{$form->name}}"></td></tr>
        <tr><th>mail: </th><td><input type="text" name="mail" value="{{$form->mail}}"></td></tr>
        <tr><th>age: </th><td><input type="text" name="age" value="{{$form->age}}"></td></tr>
        <tr><th></th><td><input type="submit" value="send"></td></tr>
    </table>
</form>

{{-- @include('components.message',['msg_title'=>'OK','msg_content'=>'サブメニューです。']) --}}

@endsection

{{-- @component('components.message')
@slot('msg_title')
COUTION!
@endslot

@slot('msg_content')
これはメッセージの表示です。
@endslot

@endcomponent
    

@endsection

@section('footer')
copyright 2020 tuyano.
@endsection --}}




{{-- <html>

<head>
    <title>Hello/index</title>
    <style>
        body {
            font-size: 16pt;
            color: #999;
        }

        h1 {
            font-size: 50pt;
            text-align: right;
            color: #f6f6f6;
            margin: -20px 0px -30px 0px;
            letter-spacing: -4pt;
        }
    </style>
</head>

<body>
    <h1>Blade/Index</h1>
    <p>&#064;forディレクティブの例</p>
    @foreach ($data as $item)
      @if ($loop->first)
      <p>※データ一覧</p><ul>
          @endif
          <li>No,{{$loop->iteration}}.{{$item}}</li>
          @if($loop->last)
          </ul><p>----ここまで</p>
          
      @endif  
    @endforeach
    <ol>
        @for ($i=1; $i<100; $i++)
        @if($i%2==1)
        @continue
        @elseif($i<=10)
        
        <li>No,{{$i}}</li>
                      
         @else
         @break    
         @endif
         @endfor
    </ol>
    
@csrf
<input type="text" name="msg">
<input type="submit">
</form>
</body>

</html> --}}

<style>
    th{background-color: #999;color: fff;padding: 5px 10px;}
    td{border: solid 1px #aaa;color: #999;padding: 5px 10px;}