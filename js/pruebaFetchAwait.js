async function fetchProductos(url) {
    const response = await fetch(url);
    const productos = await response.json();
    return productos
}

fetchProductos("JavaScriptProductos.php").then(prod => {
    // prod = JSON.parse(prod);
    // console.log(1);
});

fetchProductos("JavaScriptProductos.php").then(prod => {
    // console.log(2);

})