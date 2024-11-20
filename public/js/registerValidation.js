$(document).ready(function () {
    $("#send_message").click(function (e) {
        e.preventDefault(); // Prevent form submission

        var hasError = false;
        var name = $("#name").val(); // Get the name value
        var email = $("#email").val(); // Get the email value
        var password = $("#password").val(); // Get the password value
        var passwordConfirmation = $("#password_confirmation").val(); // Get confirmation password value

        // Clear previous error styles and error messages
        $("#name, #email, #password, #password_confirmation").removeClass(
            "error_input"
        );
        $(".text-danger").remove(); // Remove any previously displayed error messages

        // Validate name (must not be empty)
        if (name.length === 0) {
            hasError = true;
            $("#name").addClass("error_input");
            $("#name").after(
                '<div class="text-danger mt-1">Please enter your name.</div>'
            );
        }

        // Validate email (must be a valid email format)
        if (
            email.length === 0 ||
            !email.includes("@") ||
            !email.includes(".")
        ) {
            hasError = true;
            $("#email").addClass("error_input");
            $("#email").after(
                '<div class="text-danger mt-1">Please enter a valid email address.</div>'
            );
        }

        // Validate password (must be at least 6 characters)
        if (password.length < 6) {
            hasError = true;
            $("#password").addClass("error_input");
            $("#password").after(
                '<div class="text-danger mt-1">Password must be at least 6 characters long.</div>'
            );
        }

        // Validate password confirmation (must match password)
        if (password !== passwordConfirmation) {
            hasError = true;
            $("#password_confirmation").addClass("error_input");
            $("#password_confirmation").after(
                '<div class="text-danger mt-1">Password confirmation does not match the password.</div>'
            );
        }

        // If no errors, submit the form using AJAX
        if (!hasError) {
            // Proceed with AJAX request to submit the form
            $.ajax({
                url: $("#register_form").attr("action"), // Get the form's action URL
                type: "POST",
                data: $("#register_form").serialize(), // Serialize form data
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                success: function (response) {
                    if (response.status === "success") {
                        $("#register_form")[0].reset(); // Reset form
                        $("#mail_success").fadeIn(500); // Show success message
                    }
                },
                error: function (xhr) {
                    // Handle error (e.g., validation errors)
                    if (xhr.responseJSON && xhr.responseJSON.errors) {
                        $.each(
                            xhr.responseJSON.errors,
                            function (field, errors) {
                                $("#" + field).addClass("error_input");
                                $("#" + field).after(
                                    '<div class="text-danger mt-1">' +
                                        errors[0] +
                                        "</div>"
                                );
                            }
                        );
                    }
                },
            });
        }
    });
});
