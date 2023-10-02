<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Homepage</title>
</head>
<body>
<nav class="navbar">
    <ul>
        <li><a href="#"><button>huwaa</button></a></li>
        <li><a href="#">Register</a></li>
    </ul>
</nav><br>

<!-- Add the search bar here -->
<div class="search-container">
    <input type="text" id="searchInput" placeholder="Search...">
    <button onclick="search()">Search</button>
</div>

<!-- Add a container to display search results -->
<div id="searchResults"></div>

<script>
    // JavaScript function to handle the search
    function search() {
        // Get the search input value
        var searchInput = document.getElementById("searchInput").value;

        // Perform the search logic (replace this with your actual search implementation)
        // For demonstration, we'll just display the search query.
        var searchResults = "Search Results: " + searchInput;

        // Display the search results in the searchResults container
        document.getElementById("searchResults").innerHTML = searchResults;
    }
</script>
</body>
</html>
