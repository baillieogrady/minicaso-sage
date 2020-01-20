@extends('layouts.app')

@section('content')
  @if(is_shop() || is_checkout() || is_cart() || is_product() || is_product_category() || is_account_page())
    <div class="container">
      @while (have_posts()) @php the_post() @endphp
        <h1>{{ the_title() }}</h1>
        {{ the_content() }}
      @endwhile
    </div>
    @if(is_shop() || is_product_category())
    <div class="page-load-status">
      <svg width="200px"  height="200px"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="lds-rolling" style="background: none;"><circle cx="50" cy="50" fill="none" ng-attr-stroke="{{config.color}}" ng-attr-stroke-width="{{config.width}}" ng-attr-r="{{config.radius}}" ng-attr-stroke-dasharray="{{config.dasharray}}" stroke="#0e1111" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138" transform="rotate(325.658 50 50)"><animateTransform attributeName="transform" type="rotate" calcMode="linear" values="0 50 50;360 50 50" keyTimes="0;1" dur="1.4s" begin="0s" repeatCount="indefinite"></animateTransform></circle></svg>
    </div>
    @endif
    @else
    @include('partials.page-builder')
  @endif
@endsection