@extends('layouts.main-layout')

@section('content')
  <h1>LE LUNGHE</h1>

  <div class="immagini">
    @foreach ($data as $pasta)
      @if ($pasta['tipo']==='lunga')


          <img src="{{$pasta['src']}}" alt="">

      @endif
    @endforeach
  </div>


  <h1>LE CORTE</h1>
  <div class="immagini">
    @foreach ($data as $pasta)
      @if ($pasta['tipo']==='corta')


          <img src="{{$pasta['src']}}" alt="">

      @endif
    @endforeach
  </div>


  <h1>LE CORTISSIME</h1>
  <div class="immagini">
    @foreach ($data as $pasta)
      @if ($pasta['tipo']==='cortissima')


          <img src="{{$pasta['src']}}" alt="">

      @endif
    @endforeach

  </div>



@endsection
