<div class="glider-contain single-item">
    <div class="items-with-discount">
        @foreach ($products as $item)
            @if ($item["discount"] == 30)
                @include('components.product_card')
            @endif
        @endforeach
    </div>

    <button aria-label="Previous" class="glider-prev">
        <i class="fas fa-chevron-left"></i>
    </button>
    <button aria-label="Next" class="glider-next">
        <i class="fas fa-chevron-right"></i>
    </button>
</div>