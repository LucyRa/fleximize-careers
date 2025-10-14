<section class="media-detail media-detail--accordions p-b">
    <div class="container">
        <div class="intro">
            <h2 class="box-heading box-heading--navy">{{ $title }}</h2>

            <p>{{ $blurb }}</p>
        </div>

        <article class="content">
            <div class="detail">
                <h3 class="underline">{{ $heading }}</h3>

                <ul>
                    @foreach($accordions as $accordion)
                    <li>
                        <details class="accordion accordion--{{ $accordion['icon'] }}">
                            <summary>{{ $accordion['summary'] }}</summary>
                            {{ $accordion['details'] }}
                        </details>
                    </li>
                    @endforeach
                </ul>
            </div>

            <div class="media media--bento-{{ count($mediaset) }}">
                @foreach($mediaset as $media)
                <img src="{{ $media }}" alt="Placeholder alt..." />
                @endforeach
            </div>

            @if(!empty($featureDetail))
            <div class="card card--lg">
                
            </div>
            @endif
        </article>
    </div>
</section>
