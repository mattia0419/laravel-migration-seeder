@extends('layouts.app')

@section('main-content')
  <section class="container mt-5">
    <h1>{{ $title }}</h1>
  </section>
  @foreach($trains as $train)
  <h1>{{ $train->azienda }}</h1>
  <span> STAZIONE DI PARTENZA: {{$train->stazione_di_partenza}}</span>
  <span> STAZIONE DI ARRIVO: {{$train->stazione_di_arrivo}}</span>
  <span> ORARIO DI PARTENZA: {{$train->orario_di_partenza}}</span>
  <span> ORARIO DI ARRIVO: {{$train->orario_di_arrivo}}</span>
  @endforeach
@endsection
