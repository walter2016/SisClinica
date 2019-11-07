{{--
  title
  head
  content
  foot
  --}}

<!DOCTYPE html>
<html lang="en">
  <head> 
      <title>@yield('title')</title>
      @include('theme.backoffice.layouts.include.head')
  </head>
  <body>
      @include('theme.backoffice.layouts.include.loader')
      @include('theme.backoffice.layouts.include.header')
      <div id="main">
          <div class="wrapper">
            @include('theme.backoffice.layouts.include.left-sidebar')
              <section id="content">
                 @include('theme.backoffice.layouts.include.breadcrumbs') 
                <div class="container">
                  @yield('content')
                </div>
              </section>
          </div>
      </div>
      @include('theme.backoffice.layouts.include.footer')
      @include('theme.backoffice.layouts.include.foot')
  </body>
</html>