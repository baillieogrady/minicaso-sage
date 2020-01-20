<section class="hero">
    @if($block['video'])
        <a href="https://www.youtube.com/watch?v={{ $block['youtube_id'] }}" class="hero__play" data-fancybox >
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M424.4 214.7L72.4 6.6C43.8-10.3 0 6.1 0 47.9V464c0 37.5 40.7 60.1 72.4 41.3l352-208c31.4-18.5 31.5-64.1 0-82.6z" fill="#fff"/></svg>
        </a>
    @endif
    @if($block['background_image'])
        <div class="hero__bg lazy bg" data-aos="fade-right" data-bg="linear-gradient(rgba(0,0,0, 0.5), rgba(0,0,0, 0.5)), url('{{ $block['background_image']['sizes']['hero'] }}')"></div>
    @endif
    <div class="container">
        <div class="row justify-content-end align-items-center">
            <div class="col-lg-6">
                @include('partials.page-builder.partials.heading')
                @if($block['text'])
                    <div data-aos="fade-up" data-aos-delay="500">
                        {{ $block['text'] }}
                    </div>
                @endif
                @if($block['buttons'])
                    <div class="hero__buttons" data-aos="fade-up" data-aos-delay="1000">
                        @foreach($block['buttons'] as $button)
                            <a href="{{ $button['button_scroll'] === true ? '#' : $button['button_link'] }}" class="btn {{ $button['transparent'] ? 'btn--transparent' : '' }}" @if($button['button_scroll']) id="explore"  @endif>
                                {{ $button['button_text'] }}
                            </a>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>