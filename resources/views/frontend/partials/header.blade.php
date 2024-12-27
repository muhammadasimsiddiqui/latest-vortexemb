

     @if (Route::currentRouteName() === 'home')
           @include('frontend.partials.hero')
      @else
          @include('frontend.partials.navbar')
@endif

      
