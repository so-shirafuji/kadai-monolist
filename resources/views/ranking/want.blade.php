resources/views/ranking/want.blade.php

@extends('layouts.app')

@section('content')
    <h1>Wantランキング</h1>
    @include('items.items', ['items' => $items])
@endsection