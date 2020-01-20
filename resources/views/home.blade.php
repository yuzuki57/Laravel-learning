@extends('layouts.default')

@section('page-title')
ホーム
@endsection

@section('content')
@if(count($errors) > 0)
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif
<div>
	ようこそ！
</div>
@endsection