<div class="breadcrumb">
    @foreach ($breadcrumbs as $breadcrumb)
        <span class="breadcrumb-item">
            @if (!$loop->last)
                <a href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['name'] }}</a>
                <span class="breadcrumb-separator"> / </span>
            @else
            <p class="breadcrumb-last">
                {{ $breadcrumb['name'] }}
            </p>
            @endif
        </span>
    @endforeach
</div>