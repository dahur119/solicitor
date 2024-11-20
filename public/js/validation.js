$(document).ready(function () {
    $("#send_message").click(function (a) {
        a.preventDefault();
        var b = !1,
            c = $("#name").val(),
            d = $("#email").val(),
            e = $("#phone").val(), // Changed from phone to phone_number
            f = $("#message").val();

        // Hide any existing alerts
        $("#mail_success, #mail_fail").hide();

        if (
            ($("#name,#email,#phone,#message").click(function () {
                // Updated selector
                $(this).removeClass("error_input");
            }),
            0 == c.length)
        ) {
            var b = !0;
            $("#name").addClass("error_input");
        } else $("#name").removeClass("error_input");

        if (0 == d.length || "-1" == d.indexOf("@")) {
            var b = !0;
            $("#email").addClass("error_input");
        } else $("#email").removeClass("error_input");

        if (0 == e.length) {
            var b = !0;
            $("#phone").addClass("error_input"); // Changed from phone to phone_number
        } else $("#phone").removeClass("error_input"); // Changed from phone to phone_number

        if (0 == f.length) {
            var b = !0;
            $("#message").addClass("error_input");
        } else $("#message").removeClass("error_input");

        if (0 == b) {
            $("#send_message").attr({
                disabled: "true",
                value: "Sending...",
            });

            // Replace $.post with $.ajax for more control
            $.ajax({
                url: "/contact", // Your Laravel route
                type: "POST",
                data: $("#contact_form").serialize(),
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                success: function (response) {
                    if (response.status === "success") {
                        $("#contact_form")[0].reset(); // Reset form
                        $("#mail_success").fadeIn(500);
                        $("html, body").animate(
                            {
                                scrollTop:
                                    $("#mail_success").offset().top - 100,
                            },
                            1000
                        );
                    }
                    $("#send_message")
                        .removeAttr("disabled")
                        .attr("value", "Submit Form");
                },
                error: function (xhr, status, error) {
                    $("#mail_fail").fadeIn(500);
                    $("html, body").animate(
                        {
                            scrollTop: $("#mail_fail").offset().top - 100,
                        },
                        1000
                    );
                    $("#send_message")
                        .removeAttr("disabled")
                        .attr("value", "Submit Form");

                    // If there are validation errors
                    if (xhr.responseJSON && xhr.responseJSON.errors) {
                        $.each(
                            xhr.responseJSON.errors,
                            function (field, errors) {
                                $("#" + field).addClass("error_input");
                            }
                        );
                    }
                },
            });
        }
    });
});

