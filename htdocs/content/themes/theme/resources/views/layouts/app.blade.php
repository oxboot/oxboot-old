<!doctype html>
<html @php(language_attributes())>
  @include('partials.head')
  <body @php(body_class())>
    @php(do_action('get_header'))
    @include('partials.header')
    <div class="wrapper" role="document">
      <div class="container">
        <div class="content">
          <main class="main">
            @yield('content')
          </main>
        </div>
      </div>
    </div>
    @php(do_action('get_footer'))
    @include('partials.footer')
    @wp_footer
  </body>
</html>
