@props(['products'])

<section class="product-carousel">
    <div class="container">
        <div class="title-container">
            <div class="title-section-container">
                <h3 class="section-title">Produk Acne Center</h3>
                <div class="underline"></div>
            </div>
            <a href="#" class="cta-button">
                <span>LIHAT SEMUA PRODUK</span>
            </a>
        </div>
        <div class="product-carousel-controls">
            <div class="product-carousel-inner">
                @foreach($products as $product)
                    <div class="product-card">
                        <img src="{{ $product['image'] }}" alt="{{ $product['title'] }}" class="product-image">
                        <div class="product-info">
                            <h3 class="product-name">{{ $product['title'] }}</h3>
                            <div class="product-rating" data-rating="{{ $product['rating'] }}"></div>
                            <div class="product-price">{{ $product['price'] }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <a href="#" class="cta-button-mobile">
            <span>LIHAT SEMUA PRODUK</span>
        </a>
    </div>
</section>



