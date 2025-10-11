
@pushOnce('styles')
<style>
.hero--media-detail {

}
</style>
@endPushOnce

<section class="hero--media-detail">
    <div class="container">
        <article>
            <h1 class="display">{!! $title !!}</h1>

            <p>
                {{ $blurb }}
            </p>
        </article>

        <!-- If using a CMS, would hope that ALTs are set on upload -->
        <img src="{{ $media }}" alt="We're hiring" />
    </div>
</section>
