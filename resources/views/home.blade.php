@extends('layouts.app')

@section('content')

    <form id="chat_form" action="{{ url('insert') }}" method="POST">
        @csrf
        <input type="text" id="chat_dialogue" name="text">
        <input type="submit" class=" btn btn-primary" value="submit">
    </form>

@endsection
