<section class="domino">
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-5 {{ $block['switch'] == '1' ? 'order-lg-1' : ''}}">
        @include('partials.page-builder.partials.heading')
        <a data-aos="fade-up" href="{{ $block['link'] }}" class="btn">{{ $block['link_text'] }}</a>
      </div>
      <div class="col-lg-6">
        <a href="{{ $block['image_link'] }}">
          <img data-aos="fade-left" data-aos-delay="500" class="domino__image lazy" data-src="{{ $block['image']['url'] }}" alt="{{ $block['image']['alt'] }}">
        </a>
      </div>
    </div>
  </div>
</section>
