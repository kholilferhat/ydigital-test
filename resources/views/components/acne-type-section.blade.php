@props(['acneTypes'])

    <section class="acneTypeSection">
        <x-breadcrumb
        :breadcrumbs="[
        ['name' => 'Beranda', 'url' => '/'],
        ['name' => 'Acne Center', 'url' => '#']
        ]"
        />
        <h3>Jenis Jerawat & Bekas Jerawat</h3>
        <div class="carousell-container">
            <div class="carousell-wrapper">
                @foreach($acneTypes as $acneType)
                    <div class="carousell-slide" data-title="{{ $acneType->title }}" data-description="{{ $acneType->description }}">
                        <img src="{{ $acneType->image }}" alt="{{ $acneType->title }}">
                            <div class="carousel-caption">{{ $acneType->title }}</div>
                    </div>
                @endforeach
            </div>
            <div class="carousell-pagination"></div>
        </div>
    
        <div id="acne-type-info">
            <h1 id="acne-title"></h1>
            <p id="acne-description"></p>
        </div>
    </section>
