
    document.getElementById("searchForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent the form from submitting
        
        // Get the search query
        const query = document.getElementById("searchInput").value.toLowerCase();

        // Array of product names (You can replace this with a dynamic list if needed)
        const products = [
            { name: "Milk", link: "milk.html" },
            { name: "Cheese", link: "cheese.html" },
            { name: "Butter", link: "butter.html" },
            { name: "Yogurt", link: "yogurt.html" },
            { name: "Cream", link: "cream.html" }
        ];

        // Filter products based on the query
        const filteredProducts = products.filter(product => product.name.toLowerCase().includes(query));

        if (filteredProducts.length > 0) {
            // Show matching products (in real implementation, you can redirect or display them)
            let result = "Matching products: \n";
            filteredProducts.forEach(product => {
                result += product.name + " (" + product.link + ")\n";
            });
            alert(result); // Replace with a more user-friendly display in real implementation
        } else {
            alert("No matching products found.");
        }
    });

   
     