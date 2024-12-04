@extends('master')

@section('contect')

<br>
<br>

<h1>Contact 1</h1>
<p>{{ $posts[0]  }}</p>


<br>
<br>

@foreach ([1,2,3,4,5] as $item)
    <li>{{ $item }}</li>
@endforeach

@endsection