<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <?php include('bootstrap_styles.php'); ?>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../styles/search_collab.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.12/css/bootstrap-select.min.css"
      integrity="sha256-l3FykDBm9+58ZcJJtzcFvWjBZNJO40HmvebhpHXEhC0="
      crossorigin="anonymous"
    />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.12/js/bootstrap-select.min.js"
      integrity="sha256-+o/X+QCcfTkES5MroTdNL5zrLNGb3i4dYdWPWuq6whY="
      crossorigin="anonymous"
    ></script>
    <title>Document</title>
  </head>
  <body>
    <!--HEADER/NAVBAR-->
    <?php include('header.php'); ?>
    <!--FILTER CONTAINER-->

    <div class="container-fluid filterContainer">
      <div class="filterHeader filterChild">FILTER:</div>
      <div class="dropdown filterChild">
        <button
          class="btn btn-secondary dropdown-toggle"
          type="button"
          data-toggle="dropdown"
          aria-haspopup="true"
          aria-expanded="false"
        >
          SKILLS
        </button>
        <div class="dropdown-menu ">
          <a href="#" class="dropdown-item">JavaScript</a>
          <a href="#" class="dropdown-item">PHP</a>
          <a href="#" class="dropdown-item">React</a>
          <a href="#" class="dropdown-item">SQL</a>
          <a href="#" class="dropdown-item">Node.js</a>
        </div>
      </div>

      <button class="btn btn-primary filterChild">SEARCH</button>
    </div>

    <div class="container">
      <div class="row text-center">
        <!-- TEAM ITEM -->
        <div class="col-xl-3 col-sm-6 mb-5">
          <div class="bg-white rounded shadow-sm py-5 px-4">
            <img
              src="https://d19m59y37dris4.cloudfront.net/university/1-1-1/img/teacher-4.jpg"
              width="100"
              class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm"
              alt=""
            />
            <h5 class="mb-0">Nathalie Pillen</h5>
            <span class="small text-uppercase text-muted">CEO - Founder</span>
            <ul class="social mb-0 list-inline mt-3">
              <li class="list-inline-item">
                <a href="#" class="social-link"
                  ><i class="fa fa-facebook-f"></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="social-link"
                  ><i class="fa fa-twitter"></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="social-link"
                  ><i class="fa fa-instagram"></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="social-link"
                  ><i class="fa fa-linkedin"></i
                ></a>
              </li>
            </ul>
          </div>
        </div>
        <!--end of team item-->

        <!-- TEAM ITEM -->
        <div class="col-xl-3 col-sm-6 mb-5">
          <div class="bg-white rounded shadow-sm py-5 px-4">
            <img
              src="https://d19m59y37dris4.cloudfront.net/university/1-1-1/img/teacher-1.jpg"
              width="100"
              class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm"
              alt=""
            />
            <h5 class="mb-0">Kasra Tabrizi</h5>
            <span class="small text-uppercase text-muted">CEO - Founder</span>
            <ul class="social mb-0 list-inline mt-3">
              <li class="list-inline-item">
                <a href="#" class="social-link"
                  ><i class="fa fa-facebook-f"></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="social-link"
                  ><i class="fa fa-twitter"></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="social-link"
                  ><i class="fa fa-instagram"></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="social-link"
                  ><i class="fa fa-linkedin"></i
                ></a>
              </li>
            </ul>
          </div>
        </div>
        <!--end of team item-->

        <!-- TEAM ITEM -->
        <div class="col-xl-3 col-sm-6 mb-5">
          <div class="bg-white rounded shadow-sm py-5 px-4">
            <img
              src="https://d19m59y37dris4.cloudfront.net/university/1-1-1/img/teacher-2.jpg"
              width="100"
              class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm"
              alt=""
            />
            <h5 class="mb-0">John Doe</h5>
            <span class="small text-uppercase text-muted">CEO - Founder</span>
            <ul class="social mb-0 list-inline mt-3">
              <li class="list-inline-item">
                <a href="#" class="social-link"
                  ><i class="fa fa-facebook-f"></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="social-link"
                  ><i class="fa fa-twitter"></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="social-link"
                  ><i class="fa fa-instagram"></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="social-link"
                  ><i class="fa fa-linkedin"></i
                ></a>
              </li>
            </ul>
          </div>
        </div>
        <!--end of team item-->

        <!-- TEAM ITEM -->
        <div class="col-xl-3 col-sm-6 mb-5">
          <div class="bg-white rounded shadow-sm py-5 px-4">
            <img
              src="https://d19m59y37dris4.cloudfront.net/university/1-1-1/img/teacher-7.jpg"
              width="100"
              class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm"
              alt=""
            />
            <h5 class="mb-0">Denzel Washington</h5>
            <span class="small text-uppercase text-muted">CEO - Founder</span>
            <ul class="social mb-0 list-inline mt-3">
              <li class="list-inline-item">
                <a href="#" class="social-link"
                  ><i class="fa fa-facebook-f"></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="social-link"
                  ><i class="fa fa-twitter"></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="social-link"
                  ><i class="fa fa-instagram"></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="social-link"
                  ><i class="fa fa-linkedin"></i
                ></a>
              </li>
            </ul>
          </div>
        </div>
        <!--end of team item-->
        <!-- TEAM ITEM -->
        <div class="col-xl-3 col-sm-6 mb-5">
          <div class="bg-white rounded shadow-sm py-5 px-4">
            <img
              src="https://d19m59y37dris4.cloudfront.net/university/1-1-1/img/teacher-4.jpg"
              width="100"
              class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm"
              alt=""
            />
            <h5 class="mb-0">Nathalie Pillen</h5>
            <span class="small text-uppercase text-muted">CEO - Founder</span>
            <ul class="social mb-0 list-inline mt-3">
              <li class="list-inline-item">
                <a href="#" class="social-link"
                  ><i class="fa fa-facebook-f"></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="social-link"
                  ><i class="fa fa-twitter"></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="social-link"
                  ><i class="fa fa-instagram"></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="social-link"
                  ><i class="fa fa-linkedin"></i
                ></a>
              </li>
            </ul>
          </div>
        </div>
        <!--end of team item-->

        <!-- TEAM ITEM -->
        <div class="col-xl-3 col-sm-6 mb-5">
          <div class="bg-white rounded shadow-sm py-5 px-4">
            <img
              src="https://d19m59y37dris4.cloudfront.net/university/1-1-1/img/teacher-1.jpg"
              width="100"
              class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm"
              alt=""
            />
            <h5 class="mb-0">Kasra Tabrizi</h5>
            <span class="small text-uppercase text-muted">CEO - Founder</span>
            <ul class="social mb-0 list-inline mt-3">
              <li class="list-inline-item">
                <a href="#" class="social-link"
                  ><i class="fa fa-facebook-f"></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="social-link"
                  ><i class="fa fa-twitter"></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="social-link"
                  ><i class="fa fa-instagram"></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="social-link"
                  ><i class="fa fa-linkedin"></i
                ></a>
              </li>
            </ul>
          </div>
        </div>
        <!--end of team item-->

        <!-- TEAM ITEM -->
        <div class="col-xl-3 col-sm-6 mb-5">
          <div class="bg-white rounded shadow-sm py-5 px-4">
            <img
              src="https://d19m59y37dris4.cloudfront.net/university/1-1-1/img/teacher-2.jpg"
              width="100"
              class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm"
              alt=""
            />
            <h5 class="mb-0">John Doe</h5>
            <span class="small text-uppercase text-muted">CEO - Founder</span>
            <ul class="social mb-0 list-inline mt-3">
              <li class="list-inline-item">
                <a href="#" class="social-link"
                  ><i class="fa fa-facebook-f"></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="social-link"
                  ><i class="fa fa-twitter"></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="social-link"
                  ><i class="fa fa-instagram"></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="social-link"
                  ><i class="fa fa-linkedin"></i
                ></a>
              </li>
            </ul>
          </div>
        </div>
        <!--end of team item-->

        <!-- TEAM ITEM -->
        <div class="col-xl-3 col-sm-6 mb-5">
          <div class="bg-white rounded shadow-sm py-5 px-4">
            <img
              src="https://d19m59y37dris4.cloudfront.net/university/1-1-1/img/teacher-7.jpg"
              width="100"
              class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm"
              alt=""
            />
            <h5 class="mb-0">Denzel Washington</h5>
            <span class="small text-uppercase text-muted">CEO - Founder</span>
            <ul class="social mb-0 list-inline mt-3">
              <li class="list-inline-item">
                <a href="#" class="social-link"
                  ><i class="fa fa-facebook-f"></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="social-link"
                  ><i class="fa fa-twitter"></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="social-link"
                  ><i class="fa fa-instagram"></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="social-link"
                  ><i class="fa fa-linkedin"></i
                ></a>
              </li>
            </ul>
          </div>
        </div>
        <!--end of team item-->
      </div>
      <!--end row text-center-->
    </div>
    <!--end container-->

    <?php include('footer.php'); ?>
    <?php include('bootstrap_scripts.php'); ?>
    <script src="../dropdown.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.4.1.js"
      integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
      crossorigin="anonymous"
    ></script>
  </body>
</html>
