<section class="scroll-cards">
    <div class="container heading">
        <h2>The Perks</h2>
        <p>(Scroll to see more) <span><x-icons.arrow-full fill="transparent" color="#daf1fa" /></span></p>
    </div>

    <ul class="track">
        @foreach($cards as $card)
        <li class="scroll-card">
            <x-dynamic-component :component="'icons.' . $card['icon']" />

            <h3>{{ $card['title'] }}</h3>

            <p>{{ $card['blurb'] }}</p>
        </li>
        @endforeach
    </ul>
</section>
