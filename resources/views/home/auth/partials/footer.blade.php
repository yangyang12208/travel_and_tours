
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<script>
$(document).ready(function() {
    $('#register-form').on('submit', function(e) {
        e.preventDefault(); // Prevent the form from submitting the default way

        $.ajax({
            url: $(this).attr('action'), // The form's action attribute
            method: 'POST',
            data: $(this).serialize(), // Serialize the form data
            success: function(response) {
                // Success response (user successfully registered)
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: response.message, // Display success message
                }).then(() => {
                    window.location.href = response.redirect; // Redirect after success
                });
            },
            error: function(xhr) {
                // Error handling (e.g., validation errors)
                let errorMessage = 'All fields are required'; // Default error message

                if (xhr.responseJSON && xhr.responseJSON.message) {
                    errorMessage = xhr.responseJSON.message; // Custom message for the specific error
                }

                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: errorMessage, // Display the error message
                });
            }
        });
    });
});



</script>

</body>
</html>