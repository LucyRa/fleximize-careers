<section class="media-detail media-detail--feature">
    <div class="container">
        <div class="title">
            <h2 class="box-heading display">
                {{ $title }}
            </h2>

            <span>{{ $subtitle }}</span>
        </div>

        <article class="content">
            <div class="detail">
                <h3 class="h2">
                    {{ $heading }}
                </h3>

                <p>
                    {{ $blurb }}
                </p>

                <x-btns.action-btn cta="Current Openings"
                    icon="arrow-full"
                    action="scroll-to"
                    target="job-listings"
                />
            </div>

            <div class="media">
                <img src="{{ $media }}" alt="Fintech Awards, Diversity and Inclusion Winner" />
            </div>
        </article>
    </div>
</section>
