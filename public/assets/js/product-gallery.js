let products = [];
console.log('hola');
showProductGallery();
async function showProductGallery() {
    // products = await fetch(API_URL+"/products/search", {
    //     'method': 'POST',
    //     'body': ''
    // }).then((response) => response.json());
    products = await fetch(API_URL+"/products/")
    .then((response) => response.json());

    await initializeBrands();
    // console.log(brands);

    for(let i = 0; i < products.length; i++) {
        let brand = brands.find(brand => brand.id === products[i].brand_id);
        document.querySelector('#products').innerHTML += productComponent(brand.name, products[i].name, products[i].description)+"\r\n";
    };
}

function productComponent(brand, name, description) {
    return `<div>
    <h3 class="product-brand">${brand}</h3>
    <h4 class="product-name">${name}</h4>
    <p class="product-description">${description}</p>
</div>`;
}
