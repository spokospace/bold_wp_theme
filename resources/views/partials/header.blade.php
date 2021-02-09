<header class="header">
  <div class="container">
    <nav>
      <a class="brand" href="{{ home_url('/') }}">
        {{ $siteName }}
      </a>
    </nav>
    <div class="jumbatron">
      <div class="jumbatron__left">
        <h1 class="jumbatron__heading">{{ __('Lorem ipsum dolor sit amet consectetur', 'bold') }}</h1>
        <p class="jumbatron__description">
          {{ __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sodales, leo at tempor varius, mauris neque fringilla elit, in tristique augue', 'bold')}}
        </p>
        <a href="#" class="jumbatron__button">{{ __('Get Started', 'bold') }}</a>
      </div>
      <div class="jumbatron__right">
        <img alt="jumbatron" class="jumbatron__right__image" src="@asset('images/jumbatron.svg')" />
      </div>
    </div>
    <div class="statistics">
      <div class="statistics__col">
        <img alt="user" class="statistics__col__icon" src="@asset('images/icon-user.svg')" />
        <p class="statistics__col__text">
          90+
          <span>Users</span>
        </p>
      </div>
      <div class="statistics__col">
        <img alt="location" class="statistics__col__icon" src="@asset('images/icon-location.svg')" />
        <p class="statistics__col__text">
          30+
          <span>Locations</span>
        </p>
      </div>
      <div class="statistics__col">
        <img alt="server" class="statistics__col__icon" src="@asset('images/icon-server.svg')" />
        <p class="statistics__col__text">
          50+
          <span>Servers</span>
        </p>
      </div>
    </div>
  </div>
</header>
