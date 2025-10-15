<section class="hero--media-detail">
    <div class="container">
        <article>
            <h1 class="display">{{ $title }}<br/><span class="keyword">{{ $keyword }}</span></h1>

            <p>
                {{ $blurb }}
            </p>

            <x-btns.action-btn cta="Current Openings"
                icon="arrow-full"
                action="scroll-to"
                target="job-listings"
            />
        </article>

        <!-- If using a CMS, would hope that ALTs are set on upload -->
        <!--
            Would also replace with source media to render different sizes based on screen size:
                <picture><source srcset="{{ $media }}" media="(min-width: 20rem), 27.5rem, 46.5rem, 80rem, 108rem" type="image/webp" /><img src="{{ $media }}" alt="We're hiring" /></picture>
        -->
        <div class="media">
            <img src="{{ $media }}" alt="We're hiring" />
        </div>
    </div>
</section>
