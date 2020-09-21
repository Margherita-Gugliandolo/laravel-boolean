@extends('layouts.main-layout')

@section('content')
  <h1>
  Per vedere le paste
  <a href=" {{ URL::to('paste') }}"> Clicca qui! </a>
  </h1>


@endsection
