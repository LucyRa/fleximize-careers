<section class="scroll-cards">
    <div class="container heading">
        <h2 id="scroll-cards-title">The Perks</h2>
        <p>(Scroll to see more) <span><x-icons.arrow-full fill="transparent" color="#daf1fa" /></span></p>
    </div>

    <div class="scroll-cards__wrapper">
        <ul class="track" role="tablist" aria-labelledby="scroll-cards-title">
            @foreach($cards as $card)
            <li class="scroll-card" role="tabpanel" tabindex="0">
                <x-dynamic-component :component="'icons.' . $card['icon']" />

                <h3>{{ $card['title'] }}</h3>

                <p>{{ $card['blurb'] }}</p>
            </li>
            @endforeach
        </ul>
    </div>
</section>
