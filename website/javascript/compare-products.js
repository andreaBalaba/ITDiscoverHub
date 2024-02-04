const urlParams = new URLSearchParams(window.location.search);
const category = urlParams.get("category");

// SELECT ELEMENT FOR CATEGORY

const selectCategory = document.querySelector(".select-category");

let selectCategoryOptions = selectCategory.querySelectorAll(
  ".select-category option"
);
// sets the selected in select element for category to be the current page category
for (let i = 0; i < selectCategoryOptions.length; i++) {
  if (selectCategoryOptions[i].value === category) {
    selectCategoryOptions[i].selected = true;
    break;
  }
}

// EVENT LISTENER WHEN USER SELECTS IN THE SELECT ELEMENT FOR CATEGORY
// redirects user to the compare-products.php with category as the selected option
selectCategory.addEventListener("change", function () {
  window.location.href =
    "compare-products.php?category=" + selectCategory.value;
});

// EVENT LISTENER FOR SEARCH CONTAINERS IN THE TABLE

const searchContainers = document.getElementsByClassName("search-container");

// whenever user types a letter in the search input, it will generate search suggestions
for (let i = 0; i < searchContainers.length; i++) {
  let searchContainer = searchContainers[i];
  let searchInput = searchContainers[i].querySelector(".search-input");

  searchInput.addEventListener("input", function () {
    getSearchSuggestions(searchContainer, searchInput);
  });
}

// this gets and displays the search suggestions
// it fetches data from the PHP server
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
        // if clicked, the clicked item's data will be fetched from the PHP server, then displayed in the compare table
        searchSuggestionsItem.addEventListener("click", function () {
          getProduct(
            searchSuggestionsItem,
            searchInput,
            searchSuggestionsContainer,
            searchSuggestions
          );
        });
      }

      if (data.length <= 0) {
        searchSuggestions.innerHTML = "<p>No results found.</p>";
        searchSuggestions.style.padding = "10px";
      }
    })
    .catch((error) => console.error("Error fetching suggestions:", error));
}

// this gets the clicked item of the user from the search suggestions, and displays in the compare table
function getProduct(
  searchSuggestionsItem,
  searchInput,
  searchSuggestionsContainer,
  searchSuggestions
) {
  let model = searchSuggestionsItem.innerText;
  let column = null;

  // to determine which column should the data be displayed
  if (searchSuggestionsItem.parentElement.classList.contains("col-1")) {
    column = 1;
  } else if (searchSuggestionsItem.parentElement.classList.contains("col-2")) {
    column = 2;
  }

  // fetches the data, then updates the compare table
  fetch(
    "../php_servers/catalog_products_server.php?category=" +
      category +
      "&model=" +
      model
  )
    .then((response) => response.json())
    .then((data) => {
      document.getElementById("brand-col-" + column).innerText = data["brand"];
      document.getElementById("model-col-" + column).innerText = data["model"];
      document.getElementById("os-col-" + column).innerText = data["os"];
      if (category === "smartphones" || category === "tablets") {
        document.getElementById("screen-col-" + column).innerText =
          data["screen"];
      }
      if (category === "laptops" || category === "tablets") {
        document.getElementById("processor-col-" + column).innerText =
          data["processor"];
      }
      if (category === "smartphones") {
        document.getElementById("chipset-col-" + column).innerText =
          data["chipset"];
        document.getElementById("GPU-col-" + column).innerText = data["GPU"];
      }
      document.getElementById("RAM-col-" + column).innerText = data["RAM"];
      document.getElementById("storage-col-" + column).innerText =
        data["storage"];
      if (category === "tablets") {
        document.getElementById("battery-life-col-" + column).innerText =
          data["batteryLife"];
      }
      document.getElementById("price-col-" + column).innerText =
        "$" + data["price"];

      // clear search suggestions once data is fetched and displayed
      searchInput.value = "";
      searchSuggestionsContainer.style.display = "none";
      searchSuggestions.innerHTML = "";
    })
    .catch((error) => console.error("Error fetching product:", error));
}

// this is so that when the user clicks outside the search input, the search suggestions will stop being displayed
document.addEventListener("click", function (e) {
  let searchSuggestionsContainers = document.querySelectorAll(
    ".search-suggestions-container"
  );

  if (!e.target.classList.contains("search-input")) {
    for (let i = 0; i < searchSuggestionsContainers.length; i++) {
      searchSuggestionsContainers[i].style.display = "none";
    }
  }
});
