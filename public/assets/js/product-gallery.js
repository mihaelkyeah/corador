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
    console.log(brands);

    products.forEach((product) => {
        let brand = brands.find(brand => brand.id === product.brand_id);
        let component = productComponent(brand.name, product.name, product.description);
        // console.log(component);
        document.querySelector('#products').innerHTML += component+"\r\n";
    });
}
