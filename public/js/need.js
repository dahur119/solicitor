$(document).ready(function () {
    $("#send_message").click(function (a) {
        a.preventDefault();
        var hasError = false; // Change b to hasError for better readability
        var name = $("#name").val();
        var description = $("#description").val();
        var email = $("#email").val(); // Assign to email variable
        var category = $("#category").val(); // Category field
        var message = $("#message").val(); // Message field

        // Hide any existing alerts
        $("#mail_success, #mail_fail").hide();

        // Validation for name field
        if (name.length === 0) {
            hasError = true;
            $("#name").addClass("error_input");
        } else {
            $("#name").removeClass("error_input");
        }

        // Validation for description field
        if (description.length === 0) {
            hasError = true;
            $("#description").addClass("error_input");
        } else {
            $("#description").removeClass("error_input");
        }

        // Validation for category field (select dropdown)
        if (category.length === 0) {
            hasError = true;
            $("#category").addClass("error_input");
        } else {
            $("#category").removeClass("error_input");
        }

        // Validation for message field
        if (message.length === 0) {
            hasError = true;
            $("#message").addClass("error_input");
        } else {
            $("#message").removeClass("error_input");
        }

        // Validate email
        if (
            email.length === 0 ||
            !email.includes("@") ||
            !email.includes(".")
        ) {
            hasError = true;
            $("#email").addClass("error_input");
        } else {
            $("#email").removeClass("error_input");
        }

        // If there are no errors, submit the form
        if (!hasError) {
            $("#send_message").attr({
                disabled: "true",
                value: "Sending...",
            });

            // Use AJAX to send the form data to the controller
            $.ajax({
                url: "/legal-needs", // Make sure this URL is correct
                type: "POST",
                data: $("#contact_form").serialize(),
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                success: function (response) {
                    $("#mail_success").fadeIn(500);
                    $("html, body").animate(
                        {
                            scrollTop: $("#mail_success").offset().top - 100,
                        },
                        1000
                    );
                },
                error: function (xhr, status, error) {
                    console.log(xhr.responseJSON); // Check what errors are returned from the backend
                    $("#mail_fail").fadeIn(500);
                    $("html, body").animate(
                        {
                            scrollTop: $("#mail_fail").offset().top - 100,
                        },
                        1000
                    );
                },
            });
        }
    });
});
