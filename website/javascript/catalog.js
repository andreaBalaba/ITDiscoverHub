//EVENT LISTENER FOR SEARCH
// whenever user types a letter in the search input, it will generate search suggestions

const searchContainer = document.querySelector(".search-container");
const searchInput = searchContainer.querySelector(".search-input");

searchInput.addEventListener("input", function () {
  getSearchSuggestions(searchContainer, searchInput);
});

// this gets and displays the search suggestions
// it fetches data from the PHP server every time a user inputs a letter in the search input
function getSearchSuggestions(searchContainer, searchInput) {
  const searchSuggestionsContainer = searchContainer.querySelector(
    ".search-suggestions-container"
  );
  const searchSuggestions = searchContainer.querySelector(
    ".search-suggestions"
  );

  if (searchInput.value.trim() === "") {
    searchSuggestionsContainer.style.display = "none";
    searchSuggestions.innerHTML = "";
    return;
  }

  // fetches the search suggestions data
  fetch(
    "../php_servers/search_suggestions_server.php?category=" +
      category +
      "&model=" +
      searchInput.value
  )
    .then((response) => response.json())
    .then((data) => {
      searchSuggestionsContainer.style.display = "block";
      searchSuggestions.innerHTML = "";

      for (let i = 0; i < data.length; i++) {
        // creates the list element for each fetched data, which is appended to the search suggestions
        let searchSuggestionsItem = document.createElement("li");
        searchSuggestionsItem.innerText = data[i];
        searchSuggestionsItem.classList.add("search-suggestions-item");
        searchSuggestions.appendChild(searchSuggestionsItem);

        // adds 'click' event listeners to each search suggestions item
        // if clicked, the user will be redirected to product-page.php
        searchSuggestionsItem.addEventListener("click", function () {
          window.location.href =
            "product-page.php?category=" +
            category +
            "&model=" +
            searchSuggestionsItem.innerText;
        });
      }

      if (data.length <= 0) {
        searchSuggestions.innerHTML = "<p>No results found.</p>";
        searchSuggestions.style.padding = "10px";
      }
    })
    .catch((error) => console.error("Error fetching suggestions:", error));
}

// EVENT LISTENER FOR ADVANCED FILTER BUTTON, A TOGGLES THAT HIDES OR DISPLAYS THE ADVANCED FILTER FORM

const advancedFilterBtn = document.getElementById("advanced-filter-btn");
const dropdownsContainer = document.getElementById("dropdowns-container");

advancedFilterBtn.addEventListener("click", function () {
  dropdownsContainer.classList.toggle("hide");
});

// DOCUMENT EVENT LISTENER
// this is so that when the user clicks outside the advanced filter container or search container,
// they will stop from being displayed
document.addEventListener("click", function (e) {
  let searchSuggestionsContainers = document.querySelectorAll(
    ".search-suggestions-container"
  );

  if (!e.target.classList.contains("search-input")) {
    for (let i = 0; i < searchSuggestionsContainers.length; i++) {
      searchSuggestionsContainers[i].style.display = "none";
    }
  }

  const advancedFilterContainer = document.querySelector(
    ".advanced-filter-container"
  );

  if (!advancedFilterContainer.contains(e.target)) {
    dropdownsContainer.classList.add("hide");
  }
});
