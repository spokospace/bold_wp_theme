@extends('layouts.app')
@section('content')
<section id="choose-your-plan" class="section">
  <h2 class="section__heading">Choose Your Plan</h2>
  <p class="section__description">Let's choose the package that is best for you and explore it happily and cheerfully.
  </p>
  <div class="pricing-table">
    <div class="pricing-card">
      <img alt="pricing-card" class="pricing-card__icon" src="@asset('images/icon-free.svg')" />
      <h3 class="pricing-card__name">Free Plan</h3>
      <ul>
        <li>Unlimited Bandwitch</li>
        <li>Encrypted Connection</li>
        <li>No Traffic Logs</li>
        <li>Works on All Devices</li>
      </ul>

      <div class="pricing-card__price">Free</div>
      <a href="#" class="pricing-card__button">Select</a>
    </div>
    <div class="pricing-card">
      <img alt="pricing-card" class="pricing-card__icon" src="@asset('images/icon-standard.svg')" />
      <h3 class="pricing-card__name">Free Plan</h3>
      <ul>
        <li>Unlimited Bandwitch</li>
        <li>Encrypted Connection</li>
        <li>No Traffic Logs</li>
        <li>Works on All Devices</li>
      </ul>

      <div class="pricing-card__price">Standard</div>
      <a href="#" class="pricing-card__button">Select</a>
    </div>
    <div class="pricing-card">
      <img alt="pricing-card" class="pricing-card__icon" src="@asset('images/icon-premium.svg')" />
      <h3 class="pricing-card__name">Premium Plan</h3>
      <ul>
        <li>Unlimited Bandwitch</li>
        <li>Encrypted Connection</li>
        <li>No Traffic Logs</li>
        <li>Works on All Devices</li>
      </ul>

      <div class="pricing-card__price">Premium</div>
      <a href="#" class="pricing-card__button">Select</a>
    </div>

  </div>
</section>
@endsection
