function searchProducts(event) {
  event.preventDefault();
  const searchTerm = document.getElementById("search-bar").value;
  const searchResults = document.getElementById("search-results");
  searchResults.innerHTML = "";

  // send search query to server-side script and get results
  // here, we're just using a dummy array of products for demonstration purposes
  const products = [
    { id: 1, name: "product1", price: 10 },
    { id: 2, name: "product2", price: 10 },
    { id: 3, name: "product3", price: 10 },
    { id: 4, name: "product4", price: 10 },
    { id: 5, name: "product5", price: 10 },
    { id: 6, name: "product6", price: 10 },
    { id: 7, name: "product7", price: 10 },
    { id: 8, name: "product8", price: 10 },



  ];
  const filteredProducts = products.filter((product) =>
    product.name.toLowerCase().includes(searchTerm.toLowerCase())
  );

  // display search results on the page
  if (filteredProducts.length > 0) {
    filteredProducts.forEach((product) => {
      const li = document.createElement("li");
      li.textContent = `${product.name} - $${product.price}`;
      searchResults.appendChild(li);
    });
  } else {
    const li = document.createElement("li");
    li.textContent = "No results found";
    searchResults.appendChild(li);
  }
}