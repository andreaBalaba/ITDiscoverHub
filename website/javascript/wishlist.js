// this js file adds event listeners to the wishlist buttons
// for deleting or adding user wishlist in the database

let wishlistBtns = document.querySelectorAll(".wishlist-btn");
let removeWishlistBtns = document.querySelectorAll(".remove-wishlist-btn");

// event listener for "Add to wishlist" button
for (let i = 0; i < wishlistBtns.length; i++) {
  let wishlistBtn = wishlistBtns[i];
  wishlistBtn.addEventListener("click", function () {
    if (isLoggedIn) {
      model = wishlistBtn.getAttribute("data-model");

      fetch("../php_servers/wishlist_server.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/x-www-form-urlencoded",
        },
        body:
          "email=" +
          encodeURIComponent(email) +
          "&category=" +
          encodeURIComponent(category) +
          "&model=" +
          encodeURIComponent(model),
      })
        .then((response) => response.text())
        .then((data) => {
          if (data == "1") {
            window.location.reload();
          } else {
            alert("An error occured. Please try again later.");
          }
        })
        .catch((error) => {
          console.error("Error:", error);
        });
    } else {
      window.location.href = "login.php";
    }
  });
}

// event listener for "Remove wishlist" button
for (let i = 0; i < removeWishlistBtns.length; i++) {
  let removeWishlistBtn = removeWishlistBtns[i];
  removeWishlistBtn.addEventListener("click", function () {
    model = removeWishlistBtn.getAttribute("data-model");

    fetch(
      "../php_servers/wishlist_server.php?email=" +
        email +
        "&category=" +
        category +
        "&model=" +
        model,
      {
        method: "DELETE",
      }
    )
      .then((response) => response.text())
      .then((data) => {
        if (data == "1") {
          window.location.reload();
        } else {
          alert("An error occured. Please try again later.");
        }
      })
      .catch((error) => {
        console.error("Error:", error);
      });
  });
}
