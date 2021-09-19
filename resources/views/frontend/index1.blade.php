<h1>Product List</h1>

<ul>
    @foreach ($data as $prod)
        <div class="d-flex flex-row bd-highlight mb-3">
            <img src="{{ $prod->images[0]->src}}" alt="">
            <div>
                <h2>{{ $prod->name }}</h2>
                <p>RM {{ $prod->variations[0]->regular_price }}</p>
            </div>
        </div>
    @endforeach
</ul>
