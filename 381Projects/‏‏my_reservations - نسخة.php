<?php
session_start();
if (isset($_SESSION["username"]) && isset($_SESSION["first_name"]) && isset($_SESSION["last_name"]) && isset($_SESSION["account_type"])) {
    include("connection.php");
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
        <link href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css'
            rel='stylesheet'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js">
        </script>
        <style>
            .item {
                transition: 0.5s ease-in-out;
            }

            .item:hover {
                filter: brightness(80%);
            }
        </style>
    </head>
    <body>
    <nav class="navbar navbar-expand mainBG fixed-top">
            <div class="container">
                <a class="navbar-brand mb-0 h1 rounded-3 shadow p-2 bg-light bg-opacity-25" href="#">
                    <img src="football.webp" style="width: 45px" />
                    Stadiums
                </a>

                <div id="navbarNav" class="collapse navbar-collapse">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a href="homepage.php" class="nav-link active ml-2 position-relative current">Home</a>
                        </li>
                        <li class="nav-item active">
                        <a href="my_reservations.php" class="nav-link position-relative">My Reservations</a>
                        </li>
                        <li class="nav-item active">
                            <a href="#" class="nav-link position-relative">Help</a>
                        </li>
                        <li class="nav-item active">
                            <a href="#" class="nav-link position-relative"></a>
                        </li>
                        <li class="nav-item active">
                            <a href="#" class="nav-link position-relative"></a>
                        </li>
                    </ul>
                </div>
                <div class="justify-end">
                    <button id="logout-btn" class="btn btn-danger h1 shadow  ">Logout</button>
                    <script>
                        let loggedBtn = document.querySelector('#logout-btn');
                        loggedBtn.addEventListener(`click`, () => {
                            location.href = "logged-out.php"

                        });

                    </script>
                </div>
            </div>
        </nav>

        <div class="container mt-6">
            <div class="row">
                <h2 class="text-center">My Reservations</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Stadium Name</th>
                            <th scope="col">Date</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM temp_table WHERE stadium_renter='$_SESSION[username]'";
                        $result = mysqli_query($conn, $query);

                        foreach ($result as $row) {
                            $tempValue = json_decode($row['tmpVal']);
                            ?>
                            <tr>
                                <td><?php echo $row['stadium_id']; ?></td>
                                <td><?php echo $tempValue[0]; ?></td>
                                <td>
                                    <button class="btn btn-danger">Cancel Reservation</button>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
            <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="confirmationModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmationModalLabel">Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to cancel this reservation?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="confirmCancelBtn">Confirm</button>
            </div>
        </div>
    </div>
</div>
<!-- Add this script at the end of your HTML body -->
<script>
    $(document).ready(function () {
        $('.cancelReservationBtn').on('click', function () {
            // Show the confirmation modal
            $('#confirmationModal').modal('show');

            // Get the reservation ID from the row (adjust this based on your data structure)
            var reservationId = $(this).closest('tr').find('.reservationId').text();

            // Handle confirmation button click
            $('#confirmCancelBtn').on('click', function () {
                // TODO: Perform the cancellation logic here (you may want to use AJAX to communicate with the server)

                // After cancellation, close the modal
                $('#confirmationModal').modal('hide');

                // Optionally, you can remove the row from the table
                $(this).closest('tr').remove();
            });
        });
    });
</script>

    </body>

    </html>
    <?php
} else {
    header("location:index.php?error=Please login first!");
    exit();
}
?>