<footer class="footer">
  <div class="container">
    <div class="footer__col-info">
      <a class="footer__brand" href="{{ home_url('/') }}">
        {{ $siteName }}
      </a>
      <p class="footer__description">{{ __('Lorem ipsum dolor sit amet consectetur apiliscit est', 'bold') }}</p>
      <div class="footer__social-media">
        <a href="#" class="footer__social-media__icon">
          <img alt="facebook" src="@asset('images/icon-facebook.svg')" />
        </a>
         <a href="#" class="footer__social-media__icon">
        <img alt="twitter" src="@asset('images/icon-twitter.svg')" />
        </a>
        <a href="#" class="footer__social-media__icon">
          <img alt="instagram" src="@asset('images/icon-instagram.svg')" />
        </a>
      </div>
      <p class="footer__copyright">©2020 {{ $siteName }}</p>
    </div>
    <div class="footer__col-links">
      <h4>{{ __('Product', 'bold') }}</h4>
      <ul class="footer__links">
        <li>
          <a href="#">
          {{ __('Download', 'bold') }}
          </a>
        </li>
        <li>
          <a href="#">
          {{ __('Pricing', 'bold') }}
          </a>
        </li>
        <li>
          <a href="#">
          {{ __('Locations', 'bold') }}
          </a>
        </li>
        <li>
          <a href="#">
          {{ __('Server', 'bold') }}
          </a>
        </li>
        <li>
          <a href="#">
          {{ __('Countries', 'bold') }}
          </a>
        </li>
        <li>
          <a href="#">
          {{ __('Blog', 'bold') }}
          </a>
        </li>
      </ul>
    </div>
    <div class="footer__col-links">
      <h4>{{ __('Engage', 'bold') }}</h4>
      <ul class="footer__links">
        <li>
          <a href="#">
          {{ __('Why', 'bold') }}
          </a>
        </li>
        <li>
          <a href="#">
          {{ __('FAQ', 'bold') }}
          </a>
        </li>
        <li>
          <a href="#">
          {{ __('Tutorials', 'bold') }}
          </a>
        </li>
        <li>
          <a href="#">
          {{ __('About Us', 'bold') }}
          </a>
        </li>
        <li>
          <a href="#">
          {{ __('Privacy Policy', 'bold') }}
          </a>
        </li>
        <li>
          <a href="#">
          {{ __('Terms of Service', 'bold') }}
          </a>
        </li>
      </ul>
    </div>
    <div class="footer__col-links">
      <h4>{{ __('Earn Money', 'bold') }}</h4>
      <ul class="footer__links">
        <li>
          <a href="#">
          {{ __('Affiliate', 'bold') }}
          </a>
        </li>
        <li>
          <a href="#">
          {{ __('Become Partner', 'bold') }}
          </a>
        </li>
      </ul>
    </div>
  </div>
</footer>
