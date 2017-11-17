@extends('layouts.app')

@section('content')

  @loop
  {{ get_post_meta('custom-field-text') }}
  <h1>{{ Loop::title() }}</h1>
  @php(the_content())
  {{ get_post_meta('custom-field-text') }}
  @endloop

@endsection
