<?php
session_start();
if (isset($_SESSION["username"]) && isset($_SESSION["first_name"]) && isset($_SESSION["last_name"]) && isset($_SESSION["account_type"])) {
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"></script>
  </head>

  <body>
    <nav class="navbar navbar-expand mainBG fixed-top">
      <div class="container">
        <a class="navbar-brand mb-0 h1 rounded-3 shadow p-2 bg-light bg-opacity-25" href="#">
          <img src="411766_1c2bb3d0f20c4b209b5b9b5cba70b462~mv2.webp" style="width: 45px" />
          Stadiums
        </a>

        <div id="navbarNav" class="collapse navbar-collapse">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a href="#" class="nav-link active ml-2 position-relative current">Home</a>
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
      <div data-mdb-animation="fade-in-down" class="row justify-content-center text-center mb-3  ">
        <h1 class="w-25 bg-light shadow rounded-4  p-4">
          <?php
          echo 'Hi ' . $_SESSION["first_name"];
          ?>
        </h1>
      </div>

      <div id="addStadium" class="row d-flex justify-content-end mb-5 rounded-3 d-none">
        <div class="col-2 d-flex">
          <button class="btn btn-primary p-3" data-bs-toggle="modal" data-bs-target="#addingStadium">
            + Add A New Stadium
          </button>
        </div>
      </div>
      <?php
      if ($_SESSION["account_type"] === "admin") {

        echo "
                <script>
                const tmp = document.querySelector('#addStadium');
                if(tmp.classList.contains('d-none')){
                  tmp.classList.remove('d-none');
                }
                console.log('yes');
                </script>
                ";

      } else {
        echo "
                <script>
                const tmp = document.querySelector('#addStadium');
                if(! tmp.classList.contains('d-none')){
                  tmp.classList.add('d-none');
                }
                console.log('no');
                </script>
                ";
      }

      ?>
      <div class="modal fade" id="addingStadium">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content p-4">
            <div class="modal-header h3 text-center">Adding a new Stadium</div>
            <div class="modal-body">
              <form action="" novalidate>
                <div class="input-group mb-3">
                  <div class="form-floating">
                    <input type="text" class="form-control" placeholder="" id="OwnerFirstName" required />
                    <label for="OwnerFirstName">Owner's first name</label>
                  </div>
                  <div class="form-floating">
                    <input type="text" class="form-control" id="OwenrLastName" placeholder="" required />
                    <label for="OwenrLastName">Owner's last name</label>
                  </div>
                </div>
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="StadiumName" placeholder="" required />
                  <label for="StadiumName">Stadium name</label>
                </div>
                <div class="mb-3">
                  <label for="AddImg" class="form-label">Please insert an image of the stadium</label>
                  <input type="file" class="form-control" id="AddImg" required />
                </div>
                <div class="mt-4 d-flex justify-content-center">
                  <input type="submit" class="btn-primary btn" />
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <div class="card">
            <img src="alianz_arena_stadium.avif" class="card-img-top" alt="" />
            <div class="card-body">
              <h2 class="card-title text-center">Alianz Arena Stadium</h2>
              <div class="card-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Architecto velit cum ex nostrum optio nam ullam, saepe
                distinctio ducimus, repellat eius sunt rerum quaerat, vero
                perferendis unde illum aperiam natus?
              </div>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card">
            <img src="camp_nou_stadium.webp" class="card-img-top" alt="" />
            <div class="card-body">
              <h2 class="card-title text-center">Camp Nou Stadium</h2>
              <div class="card-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Architecto velit cum ex nostrum optio nam ullam, saepe
                distinctio ducimus, repellat eius sunt rerum quaerat, vero
                perferendis unde illum aperiam natus?
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-6">
          <div class="card">
            <img src="alianz_arena_stadium.avif" class="card-img-top" alt="" />
            <div class="card-body">
              <h2 class="card-title text-center">Alianz Arena Stadium</h2>
              <div class="card-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Architecto velit cum ex nostrum optio nam ullam, saepe
                distinctio ducimus, repellat eius sunt rerum quaerat, vero
                perferendis unde illum aperiam natus?
              </div>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card">
            <img src="camp_nou_stadium.webp" class="card-img-top" alt="" />
            <div class="card-body">
              <h2 class="card-title text-center">Camp Nou Stadium</h2>
              <div class="card-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Architecto velit cum ex nostrum optio nam ullam, saepe
                distinctio ducimus, repellat eius sunt rerum quaerat, vero
                perferendis unde illum aperiam natus?
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-6">
          <div class="card">
            <img src="alianz_arena_stadium.avif" class="card-img-top" alt="" />
            <div class="card-body">
              <h2 class="card-title text-center">Alianz Arena Stadium</h2>
              <div class="card-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Architecto velit cum ex nostrum optio nam ullam, saepe
                distinctio ducimus, repellat eius sunt rerum quaerat, vero
                perferendis unde illum aperiam natus?
              </div>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card">
            <img src="camp_nou_stadium.webp" class="card-img-top" alt="" />
            <div class="card-body">
              <h2 class="card-title text-center">Camp Nou Stadium</h2>
              <div class="card-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Architecto velit cum ex nostrum optio nam ullam, saepe
                distinctio ducimus, repellat eius sunt rerum quaerat, vero
                perferendis unde illum aperiam natus?
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-5 mb-5">
        <div class="col-6">
          <div class="card">
            <img src="alianz_arena_stadium.avif" class="card-img-top" alt="" />
            <div class="card-body">
              <h2 class="card-title text-center">Alianz Arena Stadium</h2>
              <div class="card-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Architecto velit cum ex nostrum optio nam ullam, saepe
                distinctio ducimus, repellat eius sunt rerum quaerat, vero
                perferendis unde illum aperiam natus?
              </div>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card">
            <img src="camp_nou_stadium.webp" class="card-img-top" alt="" />
            <div class="card-body">
              <h2 class="card-title text-center">Camp Nou Stadium</h2>
              <div class="card-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Architecto velit cum ex nostrum optio nam ullam, saepe
                distinctio ducimus, repellat eius sunt rerum quaerat, vero
                perferendis unde illum aperiam natus?
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
      let form = document.querySelector(`form`);
      form.addEventListener(`submit`, (e) => {
        if (!form.checkValidity()) e.preventDefault();
        form.classList.add(`was-validated`);
      });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"></script>
  </body>

  </html>
  <?php
} else {
  header("location:index.php?error=Please login first!");
  exit();
}
?>