document.addEventListener("DOMContentLoaded", function () {
    // Display General Details by default
        const generalDetailsSection = document.querySelector(".general-details");
        generalDetailsSection.style.display = "block";

        const links = document.querySelectorAll('.aside-nav a');
        const contentSections = document.querySelectorAll('.main-content > div');

        links.forEach((link, index) => {
            link.addEventListener('click', () => {
                links.forEach(otherLink => otherLink.classList.remove('current'));
                link.classList.add('current');

                // Hide all sections
                contentSections.forEach(section => section.style.display = 'none');

                // Display the corresponding section
                contentSections[index].style.display = 'block';
            });
        });

        const passwordInput = document.getElementById("password");
        const showPasswordButton = document.querySelector(".show-password-button");

        showPasswordButton.addEventListener("click", () => {
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                showPasswordButton.classList.remove("fa-eye-slash");
                showPasswordButton.classList.add("fa-eye");
            } else {
                passwordInput.type = "password";
                showPasswordButton.classList.remove("fa-eye");
                showPasswordButton.classList.add("fa-eye-slash");
            }
        });

        const form = document.getElementById("updateUserForm");
        const initialFormValues = {
            firstName: "<?php echo htmlspecialchars($currentUser->getFirstName()); ?>",
            lastName: "<?php echo htmlspecialchars($currentUser->getLastName()); ?>",
            email: "<?php echo htmlspecialchars($currentUser->getEmail()); ?>",
            password: "<?php echo htmlspecialchars($currentUser->getPassword()); ?>"
        };

        const cancelButton = document.querySelector('button[type="reset"]');
        cancelButton.addEventListener('click', function () {
            if (isFormChanged()) {
                const confirmDiscard = confirm("You have unsaved changes. Are you sure you want to discard them?");
                if (confirmDiscard) {
                    alert("Changes discarded!");
                    window.location.reload();
                }
            } else {
                // No changes, proceed with reload
                window.location.reload();
            }
        });

        const saveButton = document.querySelector('button[type="submit"]');
        saveButton.addEventListener('click', function () {
              if (isFormChanged()) {
                  alert("Changes saved!");
              } else {
                  alert("No changes made. Please update the form before saving.");
              }
        });

        
        function isFormChanged() {
            return (
                form.elements.firstName.value !== initialFormValues.firstName ||
                form.elements.lastName.value !== initialFormValues.lastName ||
                form.elements.email.value !== initialFormValues.email ||
                form.elements.password.value !== initialFormValues.password
            );
        }

});

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