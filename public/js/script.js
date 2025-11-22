function toggleMore() {
    let list = document.getElementById('moreList');
    let icon = document.getElementById('iconMore');
    list.classList.toggle('hidden');
    icon.classList.toggle('rotate-180');
}

function updateSlider() {
    const minRange = document.getElementById("minRange");
    const maxRange = document.getElementById("maxRange");
    const track = document.getElementById("activeTrack");
    const label = document.getElementById("priceLabel");

    let minVal = parseInt(minRange.value);
    let maxVal = parseInt(maxRange.value);

    // Prevent handles from crossing
    if (minVal > maxVal - 10000) {
        minRange.value = maxVal - 10000;
        minVal = maxVal - 10000;
    }

    const max = parseInt(minRange.max);

    // Calculate percentages
    const leftPercent = (minVal / max) * 100;
    const rightPercent = (maxVal / max) * 100;

    // Hitung lebar slider sebenarnya (dikurangi 60px untuk button)
    const sliderWidth = minRange.offsetWidth; // sudah otomatis calc(100% - 60px)
    const containerWidth = minRange.parentElement.offsetWidth;
    const widthRatio = sliderWidth / containerWidth * 100;

    // Apply ke active track dengan penyesuaian
    track.style.left = (leftPercent * widthRatio / 100) + "%";
    track.style.width = ((rightPercent - leftPercent) * widthRatio / 100) + "%";

    // Update label
    label.innerText =
        "Rp" + minVal.toLocaleString("id-ID") +
        " – Rp" + maxVal.toLocaleString("id-ID") + "+";
}
updateSlider();

function updateQty(val) {
    qty += val;
    if (qty < 1) qty = 1;

    document.getElementById('qty').innerText = qty;
    document.getElementById('totalHarga').innerText =
        'Rp' + (qty * harga).toLocaleString('id-ID');
}

