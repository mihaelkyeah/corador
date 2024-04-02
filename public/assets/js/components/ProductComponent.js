function productComponent(brand, name, description) {
    return `<div class="d-flex flex-column">
    <h3 class="product-brand">${brand}</h3>
    <h4 class="product-name">${name}</h4>
    <p class="product-description">${description}</p>
</div>`;
}
