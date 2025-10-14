<section id="job-listings" class="job-listings p-b">
    <div class="container">
        <div class="intro">
            <h2 class="box-heading">{{ $heading }}</h2>

            <p>{{ $blurb }}</p>
        </div>

        <ul class="jobs-list">
            @forelse($results['jobs'] as $job)
            <li class="card card--job">
                <article>
                    <h3>
                        {{ $job['title'] }}
                    </h3>

                    <p>
                        {{ $job['body'] }}
                    </p>
                </article>

                <div>
                    @if($job['type'] || $job(['location']))
                    <ul class="details">
                        @if($job['type'])
                        <li class="details__detail">
                            <x-icons.clock-line color="currentColor" />

                            {{ $job['type'] }}
                        </li>
                        @endif

                        @if($job['location'])
                        <li class="details__detail">
                            <x-icons.map-marker-line color="currentColor" />

                            {{ $job['location'] }}
                        </li>
                        @endif
                    </ul>
                    @endif

                    <x-btns.link-btn cta="Apply now"
                        url="$job['link']"
                        icon="arrow-full"
                    />
                </div>
            </li>
            
            @empty
            <li class="card card--full">
                <h3>
                    {{ $results['empty']['title'] }}
                </h3>

                <p>
                    {{ $results['empty']['body'] }}
                </p>
            </li>
            @endforelse
        </ul>
    </div>
</section>
