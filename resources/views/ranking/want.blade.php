@extends('layouts.app')

@section('content')
    <h1>Wantランキング</h1>
    @include('items.items_want', ['items' => $items])
@endsection