@extends('layouts.app')

@section('content')
        <ul>
            {{$messages->first()}}

            @foreach($messages as $message)
           <li>
              aaaaa
            </li>
@endforeach
        </ul>

@endsection