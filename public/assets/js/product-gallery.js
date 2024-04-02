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
        document.querySelector('#products').innerHTML += productComponent(products[i].id, brand.name, products[i].name, products[i].description)+"\r\n";
    };
}

function productComponent(id, brand, name, description) {
    return `<a href="${SITE_URL}/product/${id}" class="border-solid border-2 border-blue-600 hover:border-3 hover:border-dotted hover:border-blue-800 hover:cursor-pointer m-4 p-4 bg-slate-50 rounded-lg">
    <img src="${SITE_URL+"/assets/img/product-default.png"}" class="w-1/2 mx-auto">
    <h3 class="product-brand text-lg font-bold">${brand}</h3>
    <h4 class="product-name text-base font-semibold">${name}</h4>
    <p class="product-description text-sm">${description}</p>
</a>`;
}
