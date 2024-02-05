function deleteWishlistItem(category, model) {

        var confirmDelete = confirm("Are you sure you want to remove this item from your wishlist?");
        if (confirmDelete) {

          var wl = new XMLHttpRequest();

          wl.onreadystatechange = function () {
              if (wl.readyState === XMLHttpRequest.DONE) {
                if (wl.status === 200) {
                    document.getElementById('wishlistContainer').innerHTML = wl.responseText;
                } else {
                    console.error("Error deleting wishlist item.");
                }
              }
          };

          var url = '../php_servers/profile_server.php?category=' + encodeURIComponent(category) + '&model=' + encodeURIComponent(model);

          // Open and send the request
          wl.open('GET', url, true);
          wl.send();
        }
}
