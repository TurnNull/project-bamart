<div class="px-2">
    <a href="{{ route('items.cart') }}" class="">
        <small>{{ ($cartTotal) ? $cartTotal : '' }}</small><x-icon name="shopping-cart" />
    </a>
</div>
