@extends('layouts.app')

@section('title')
Доставка шаурмы бесплатно
@endsection

@section('content')
<form action="menu" method="post">
<div class="form-group">
	<label for="name">Слыш свое имя быстро сказал!</label>
	<input type="text" name="name"/>
</div>
</form>
@endsection