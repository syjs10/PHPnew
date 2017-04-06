@extends('layouts.app')

@section('content')
	<form action="{{ route('articles.store') }}" method="post">
		{{ csrf_field() }}
		<label>Title</label>
        <input type="text" name="title" style="width:100%;" value="{{ old('title') }}">
        <label>Content</label>
        <textarea name="content" rows="10" style="width:100%;">{{ old('content') }}</textarea>

        <button type="submit">OK</button>
	</form>
@endsection