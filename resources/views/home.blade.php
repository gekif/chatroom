@extends('layouts.app')

@section('content')

    <div class="container">
        <table class="table">
              @foreach ($messages as $message)
                  <tr>
                      <td>{{ $username }}</td>
                      <td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
                      <td>{{ $message->text }}</td>
                      <td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
                      <td>{{ $message->time }}</td>
                  </tr>
              @endforeach
        </table>
    </div>


    <form id="chat_form" action="{{ url('insert') }}" method="POST">
        @csrf
        <input type="text" id="chat_dialogue" name="text">
        <input type="submit" class=" btn btn-primary" value="submit">
    </form>

@endsection
