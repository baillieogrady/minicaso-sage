@if($page_builder)
    @foreach($page_builder as $block)
        {{-- @if(current_user_can('manage_options'))
            <div class="debug">
                Block {{ $loop->iteration }} / 
                {{ ucwords(str_replace('_', ' ', $block['acf_fc_layout'])) }}
            </div>
        @endif --}}

        {{-- Classes for each block and column are generated in App/Controllers/Partials/PageBuilder.php --}}
        {{-- <pre>{{ $block['class'] }}</pre> --}}

        {{-- block_name === /partials/page-builder/block-name --}} 
        {{-- @if($block['acf_fc_layout'] != 'image_wrap_end') --}}
        {{-- <section 
            class="{{ $block['class'] }}" --}}
            {{-- @if($block['background_image'])
                data-background-image="{{ $block['background_image']['sizes']['banner_xl'] }}" 
            @endif
            
            @if($block['background_color_fill'])
                style="background-color: {{ $block['background_color_fill'] }}"
            @endif --}}
        {{-- > --}}
        {{-- @endif --}}

            {{-- Wrap blocks with background colours but contained --}}
            {{-- @if($block['background_color'] && $block['width'] === 'Full Width')
                <div class="container">
            @endif --}}

            {{-- Add extra top padding for background images --}}
            {{-- @if($block['extra_top_padding'])
                <div style="height: {{ $block['extra_top_padding'] }}px"></div>
            @endif --}}

            @include('partials.page-builder.' . str_replace('_', '-', $block['acf_fc_layout']))

            {{-- Add extra bottom padding for background images --}}
            {{-- @if($block['extra_bottom_padding'])
                <div style="height: {{ $block['extra_bottom_padding'] }}px"></div>
            @endif                 --}}

            {{-- Wrap blocks with background colours but contained --}}
            {{-- @if($block['background_color'] && $block['width'] === 'Full Width')
                </div>
            @endif --}}

        {{-- @if($block['acf_fc_layout'] != 'image_wrap_start') --}}
        {{-- </section> --}}
        {{-- @endif --}}
    @endforeach
@endif