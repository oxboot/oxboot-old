@extends('layouts.app')

@section('content')

  @loop
  <h1>{{ Loop::title() }}</h1>
  @php(the_content())
  <p>{{ Meta::get(Loop::id(), 'custom-field-text') }}</p>
  <p>{{ Meta::get(Loop::id(), 'custom-field-textarea') }}</p>
  @endloop

@endsection
