<section class="media-detail media-detail--accordions p-b">
    <div class="container">
        <div class="intro">
            <h2 class="box-heading box-heading--navy">{{ $title }}</h2>

            <p>{{ $blurb }}</p>
        </div>

        <article class="content">
            <div class="detail">
                <h3 class="underline">{{ $heading }}</h3>

                <ul class="accordions">
                    @foreach($accordions as $accordion)
                    <li class="accordion">
                        <details class="accordion accordion--{{ $accordion['icon'] }}">
                            <summary>
                                @if($accordion['icon'])
                                <x-dynamic-component :component="'icons.' . $accordion['icon']" color="currentColor" />
                                @endif

                                <h4>{{ $accordion['summary'] }}</h4>
                            </summary>

                            <div>
                                {{ $accordion['details'] }}
                            </div>
                        </details>
                    </li>
                    @endforeach
                </ul>
            </div>

            <div class="media media--bento-{{ count($mediaset) }}">
                @foreach($mediaset as $media)
                <div>
                    <img src="{{ $media }}" alt="Placeholder alt..." />
                </div>
                @endforeach
            </div>

            @if(!empty($featureDetail))
            <div class="card card--feature">
                <div class="icon-heading">
                    @if($featureDetail['icon'])
                    <x-dynamic-component :component="'icons.' . $featureDetail['icon']" color="currentColor" />
                    @endif

                    <h3>{{ $featureDetail['title'] }}</h3>
                </div>

                <p>
                    {{ $featureDetail['body'] }}
                </p>
            </div>
            @endif
        </article>
    </div>
</section>
