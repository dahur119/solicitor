$(document).ready(function () {
    $("#send_message").click(function (e) {
        e.preventDefault(); // Prevent form submission

        var hasError = false;
        var email = $("#email").val();
        var password = $("#password").val();
        var passwordConfirmation = $("#password_confirmation").val(); // Get confirmation password value

        // Clear previous error styles
        $("#email, #password, #password_confirmation").removeClass(
            "error_input"
        );
        $("#mail_success, #mail_fail").hide();

        // Validate email
        if (
            email.length === 0 ||
            !email.includes("@") ||
            !email.includes(".")
        ) {
            hasError = true;
            $("#email").addClass("error_input");
        }

        // Validate password
        if (password.length < 6) {
            hasError = true;
            $("#password").addClass("error_input");
        }

        // Validate password confirmation
        if (password !== passwordConfirmation) {
            hasError = true;
            $("#password_confirmation").addClass("error_input"); // Highlight the confirmation field
            <div>
                <p>Password confirmation does not match the password!</p>
            </div>; // Show an alert for mismatch
        }

        // If no errors, proceed with form submission
        if (!hasError) {
            $("#send_message").attr({
                disabled: "true",
                value: "Logging in...",
            });

            // Proceed with AJAX request to submit the form
            $.ajax({
                url: $("#login_form").attr("action"), // Get the form's action URL (POST URL)
                type: "POST",
                data: $("#login_form").serialize(), // Serialize the form data
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                success: function (response) {
                    if (response.status === "success") {
                        $("#login_form")[0].reset(); // Reset form
                        $("#mail_success").fadeIn(500);

                        // Ensure element exists before trying to scroll
                        if ($("#mail_success").length) {
                            $("html, body").animate(
                                {
                                    scrollTop:
                                        $("#mail_success").offset().top - 100,
                                },
                                1000
                            );
                        }
                    }
                    $("#send_message")
                        .removeAttr("disabled")
                        .attr("value", "Login");
                },
                error: function (xhr, status, error) {
                    $("#mail_fail").fadeIn(500);

                    // Ensure element exists before trying to scroll
                    if ($("#mail_fail").length) {
                        $("html, body").animate(
                            {
                                scrollTop: $("#mail_fail").offset().top - 100,
                            },
                            1000
                        );
                    }

                    $("#send_message")
                        .removeAttr("disabled")
                        .attr("value", "Login");

                    // Handle validation errors from backend
                    if (xhr.responseJSON && xhr.responseJSON.errors) {
                        $.each(
                            xhr.responseJSON.errors,
                            function (field, errors) {
                                $("#" + field).addClass("error_input"); // Add error class
                            }
                        );
                    }
                },
            });
        }
    });
});
