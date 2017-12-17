@extends('layouts.app')

@section('content')
  <h1>Custom Template</h1>
  @while(have_posts()) @php(the_post())
    @include('partials.content-page')
  @endwhile
@endsection
