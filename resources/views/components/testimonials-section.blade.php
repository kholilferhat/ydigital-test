@props(['testimonials'])


<section class="testimonials-section">
    <div class="container">
        <h3 class="section-title">Testimoni dari Acne Warrior</h3>
        <div class="testimonials">
            @forEach($testimonials as $testimony)
            <div class="testimonial">
                <img src="{{ $testimony['image'] }}" alt="{{ $testimony['name'] }}" class="testimonial-image">
                <h3 class="testimonial-name">{{ $testimony['name'] }}, {{ $testimony['job'] }}</h3>
                <p class="testimonial-text">{{ $testimony['testimony'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
