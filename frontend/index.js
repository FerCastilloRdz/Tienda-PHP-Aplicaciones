const apiUrl = "http://localhost/tienda-php/src/routes/routes.php"

const productForm = document.getElementById
("productForm")
const alertContainer = document.getElementById
("alertContainer")
const productTableBody = document.getElementById
("productTableBody")

document.addEventListener("DOMContentLoaded", ()=> 
    {
    loadProductos()
})

const loadProductos = async () => {
    const res = await fetch(apiUrl)
    const productos = await res.json()
    console.log("@@ productos => ", productos)
}