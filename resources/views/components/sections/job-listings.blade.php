<section id="job-listings" class="job-listings">
    <div class="container">
        <div class="intro">
            <h2 class="box-heading box-heading--navy">{{ $heading }}</h2>

            <p>{{ $blurb }}</p>
        </div>

        <ul class="jobs-list">
            @forelse($results['jobs'] as $jobs)
            <li class="card--job">

            </li>
            
            @empty
            <li class="card--lg">

            </li>
            @endforelse
        </ul>
    </div>
</section>
