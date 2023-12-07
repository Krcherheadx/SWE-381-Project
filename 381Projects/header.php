
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Stadiums</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
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
                        <a href="mymsg.php" class="nav-link position-relative">Help</a>
                    </li>
                    <li class="nav-item active">
                        <a href="communication.php" class="nav-link position-relative">Chat</a>
                    </li>
                    <li class="nav-item active">
                        <a href="#" class="nav-link position-relative"></a>
                    </li>
                </ul>
                <form action="" method="POST" class="search-bar" id="searchform">
                    <input id="searchtxt" name="search" pattern=".*\S.*" placeholder="Search.." required>
                    <button class="search-btn" name="submit-search" type="submit">
                        <span class="material-symbols-outlined"> search </span>
                    </button>
                </form>
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
</body>

</html>
