<div class="container">
    <div class="w-full flex flex-wrap justify-center md:justify-around gap-4">
        @foreach ($items as $item)
            @include('livewire.components.product-card')
        @endforeach
    </div>
</div>