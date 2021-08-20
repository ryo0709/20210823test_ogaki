@extends('layouts.default')
<style>
  th {
    text-align: left;
  }
</style>
@section('title', 'トップページ')

@section('content')
@if (count($errors) > 0)
<ul>
  @foreach ($errors->all() as $error)
  <li>
    {{$error}}
  </li>
  @endforeach
</ul>
@endif
<form action="/add" method="post">
  <table>
    @csrf
    <tr>
      <th>
        氏名
      </th>
    </tr>
    <tr>
      <th>
        <input type="text" name="name">
      </th>
    <tr>
    <tr>
      <th>
        メールアドレス
      </th>
    </tr>
    <tr>
      <th>
        <input type="text" name="email">
      </th>
    <tr>
      <th>
        <button type="submit">送信する</button>
      </th>
    </tr>
  </table>
</form>
@endsection
</body>

</html>