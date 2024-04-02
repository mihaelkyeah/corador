const SITE_URL = 'http://127.0.0.1:8000';
const API_URL = SITE_URL+'/api';

let brands = undefined;
// initializeBrands();

async function initializeBrands() {
    if(brands === undefined) {
        brands = await fetch(API_URL+"/brands")
        .then((response) => response.json());
    }
}
