@extends('layouts.app')

@section('content')
	<h1>{{ Request::query('q') ? 'Search Games' : 'Games' }}</h1>
@endsection
