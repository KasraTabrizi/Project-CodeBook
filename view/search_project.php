<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <?php include('bootstrap_styles.php'); ?>
    <!--MY CSS-->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.12/css/bootstrap-select.min.css"
      integrity="sha256-l3FykDBm9+58ZcJJtzcFvWjBZNJO40HmvebhpHXEhC0="
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../styles/search_project.css" />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.12/js/bootstrap-select.min.js"
      integrity="sha256-+o/X+QCcfTkES5MroTdNL5zrLNGb3i4dYdWPWuq6whY="
      crossorigin="anonymous"
    ></script>
    <title>Document</title>
  </head>
  <body>
    <!--HEADER/NAVBAR-->
    <!-- <?php include('header.php'); ?> -->

    <!--FILTER SEARCH BAR CONTAINER-->

    <nav class="navbar navbar-expand-sm navbar-light bg-light">
      <!--brand logo-->
      <a class="navbar-brand">Filter by: </a>
      <!--HAMBURGER-->
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarCollapse"
        aria-controls="navbarCollapse"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <!--SKILLS SEARCH DROPDOWN-->
      <form action="" method="POST">
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <!--dropdown SKILLS 1-->
          <li class="nav-item dropdown">
            <!--NAV ITEM DROPDOWN 1-->
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdown"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Skills
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                <label for="JavaScript">
                  <input
                    type="text"
                    class="dropdown-item"
                    name="JavaScript"
                    value="JavaScript"
                  />
                </label>
              </li>
              <div class="dropdown-divider"></div>
              <li>
                <label for="PHP">
                  <input
                    type="text"
                    class="dropdown-item"
                    name="PHP"
                    value="PHP"
                  />
                </label>
              </li>
              <div class="dropdown-divider"></div>
              <li>
                <label for="React">
                  <input
                    type="text"
                    class="dropdown-item"
                    name="React"
                    value="React"
                  />
                </label>
              </li>

              <div class="dropdown-divider"></div>
              <li>
                <label for="html">
                  <input
                    type="text"
                    class="dropdown-item"
                    name="html"
                    value="HTML"
                  />
                </label>
              </li>

              <div class="dropdown-divider"></div>
              <li>
                <label for="css">
                  <input
                    type="text"
                    class="dropdown-item"
                    name="css"
                    value="CSS"
                  />
                </label>
              </li>
            </ul>
          </li>
          <!--END OF NAV ITEM DROPDOWN 1-->

          <!--dropdown AMOUNT COLLABORATORS-->
          <li class="nav-item dropdown">
            <!--NAV ITEM DROPDOWN 2-->
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdown"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Collaborators
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                <label for="1-5">
                  <input
                    type="text"
                    class="dropdown-item"
                    name="1-5"
                    value="1-5"
                  />
                </label>
              </li>

              <div class="dropdown-divider"></div>
              <li>
                <label for="5-10">
                  <input
                    type="text"
                    class="dropdown-item"
                    name="5-10"
                    value="5-10"
                  />
                </label>
              </li>

              <div class="dropdown-divider"></div>
              <li>
                <label for="10-25">
                  <input
                    type="text"
                    class="dropdown-item"
                    name="10-25"
                    value="10-25"
                  />
                </label>
              </li>

              <div class="dropdown-divider"></div>
              <li>
                <label for="25-50">
                  <input
                    type="text"
                    class="dropdown-item"
                    name="25-50"
                    value="25-50"
                  />
                </label>
              </li>

              <div class="dropdown-divider"></div>
              <li>
                <label for="> 50">
                  <input
                    type="text"
                    class="dropdown-item"
                    name="> 50"
                    value="> 50"
                  />
                </label>
              </li>
            </ul>
          </li>
          <!--END OF NAV ITEM DROPDOWN 2-->
          <!-- SEARCH BUTTON -->
          <li class="nav-item dropdown">
            <button class="nav-link" type="submit" role="button">
              Search
            </button>
          </li>
        </ul><!--end of navbar mr-auto-->
      </div>
      </form>
    </nav>

    <!--SEARCH RESULTS CONTAINER-->

    <div class="container-fluid resultsContainer">
      <div class="row resultsChild">
        <div class="col col-8">
          <div class="row">TITLE PROJECT</div>
          <div class="row">
            <div>
              <header>DESCRIPTION</header>
            </div>
            <div>
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Maiores, itaque.
              </p>
            </div>
          </div>
          <div class="row text-white">COLLABORATORS</div>
          <div class="list-inline-item mr-auto rounded">
            <img
              src="https://d19m59y37dris4.cloudfront.net/university/1-1-1/img/teacher-4.jpg"
              width="50"
              class="img-fluid rounded-circle mb-1 img-thumbnail shadow-sm"
              alt=""
            />
            <h6 class="mb-0">Nathalie P.</h6>
          </div>
          <div class="list-inline-item mr-auto rounded">
            <img
              src="https://d19m59y37dris4.cloudfront.net/university/1-1-1/img/teacher-7.jpg"
              width="50"
              class="img-fluid rounded-circle mb-1 img-thumbnail shadow-sm"
              alt=""
            />
            <h6 class="mb-0">Kasra T.</h6>
          </div>
          <div class="list-inline-item mr-auto rounded">
            <img
              src="https://d19m59y37dris4.cloudfront.net/university/1-1-1/img/teacher-1.jpg"
              width="50"
              class="img-fluid rounded-circle mb-1 img-thumbnail shadow-sm"
              alt=""
            />
            <h6 class="mb-0">Aline L.</h6>
          </div>

          <div class="row text-white">SKILLS</div>
          <ul class="social mb-1 list-inline mt-2">
            <!-- <h6 class="border-bottom">SKILLS</h6> -->
            <li class="list-inline-item">
              <a href="#"
                ><img src="https://img.icons8.com/wired/48/000000/python.png"
              /></a>
            </li>
            <li class="list-inline-item">
              <a href="#"
                ><img src="https://img.icons8.com/dusk/48/000000/html-5.png"
              /></a>
            </li>
            <li class="list-inline-item">
              <a href="#"
                ><img src="https://img.icons8.com/color/48/000000/css3.png"
              /></a>
            </li>
            <li class="list-inline-item">
              <a href="#"
                ><img src="https://img.icons8.com/windows/48/000000/sass.png"
              /></a>
            </li>
            <li class="list-inline-item">
              <a href="#"
                ><img src="https://img.icons8.com/color/48/000000/angularjs.png"
              /></a>
            </li>
          </ul>
        </div>
        <div class="col col-4">
          <button class="btn btn-primary btnGithub">GITHUB</button>

          <button class="btn btn-primary btnApply">APPLY</button>
        </div>
      </div>

      <div class="row resultsChild">
        <div class="col col-8">
          <div class="row">TITLE PROJECT</div>
          <div class="row">
            <header>DESCRIPTION</header>
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores,
              itaque.
            </p>
          </div>
          <div class="row text-white">COLLABORATORS</div>
          <div class="list-inline-item mr-auto rounded">
            <img
              src="https://d19m59y37dris4.cloudfront.net/university/1-1-1/img/teacher-4.jpg"
              width="50"
              class="img-fluid rounded-circle mb-1 img-thumbnail shadow-sm"
              alt=""
            />
            <h6 class="mb-0">Nathalie P.</h6>
          </div>
          <div class="list-inline-item mr-auto rounded">
            <img
              src="https://d19m59y37dris4.cloudfront.net/university/1-1-1/img/teacher-7.jpg"
              width="50"
              class="img-fluid rounded-circle mb-1 img-thumbnail shadow-sm"
              alt=""
            />
            <h6 class="mb-0">Kasra T.</h6>
          </div>
          <div class="list-inline-item mr-auto rounded">
            <img
              src="https://d19m59y37dris4.cloudfront.net/university/1-1-1/img/teacher-1.jpg"
              width="50"
              class="img-fluid rounded-circle mb-1 img-thumbnail shadow-sm"
              alt=""
            />
            <h6 class="mb-0">Aline L.</h6>
          </div>

          <div class="row text-white">SKILLS</div>
          <ul class="social mb-1 list-inline mt-2">
            <!-- <h6 class="border-bottom">SKILLS</h6> -->
            <li class="list-inline-item">
              <a href="#"
                ><img src="https://img.icons8.com/wired/48/000000/python.png"
              /></a>
            </li>
            <li class="list-inline-item">
              <a href="#"
                ><img src="https://img.icons8.com/dusk/48/000000/html-5.png"
              /></a>
            </li>
            <li class="list-inline-item">
              <a href="#"
                ><img src="https://img.icons8.com/color/48/000000/css3.png"
              /></a>
            </li>
            <li class="list-inline-item">
              <a href="#"
                ><img src="https://img.icons8.com/windows/48/000000/sass.png"
              /></a>
            </li>
            <li class="list-inline-item">
              <a href="#"
                ><img src="https://img.icons8.com/color/48/000000/angularjs.png"
              /></a>
            </li>
          </ul>
        </div>
        <div class="col col-4">
          <button class="btn btn-primary btnGithub">GITHUB</button>

          <button class="btn btn-primary btnApply">APPLY</button>
        </div>
      </div>
      <!--NEW VERSION OF PROJECT ITEM-->
      <div class="container resultsChild">
        <div class="row">
          <div class="col col-12">
            <h6 class="mt-2">TITLE PROJECT:</h6>
            <div class="">
              <h6>DESCRIPTION:</h6>
              <p class="desc">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Maiores, itaque.
              </p>
            </div>
          </div>
        </div>
        <!--end of row-->

        <div class="row">
          <div class="col col-sm-12 col-md-6 col-xl-6">
            <div class="text-center">COLLABORATORS</div>
            <div class="list-inline-item mr-auto rounded">
              <img
                src="https://d19m59y37dris4.cloudfront.net/university/1-1-1/img/teacher-4.jpg"
                width="50"
                class="img-fluid rounded-circle mb-1 img-thumbnail shadow-sm"
                alt=""
              />
              <h6 class="mb-0">Nathalie P.</h6>
            </div>
            <div class="list-inline-item mr-auto rounded">
              <img
                src="https://d19m59y37dris4.cloudfront.net/university/1-1-1/img/teacher-7.jpg"
                width="50"
                class="img-fluid rounded-circle mb-1 img-thumbnail shadow-sm"
                alt=""
              />
              <h6 class="mb-0">Kasra T.</h6>
            </div>
            <div class="list-inline-item mr-auto rounded">
              <img
                src="https://d19m59y37dris4.cloudfront.net/university/1-1-1/img/teacher-1.jpg"
                width="50"
                class="img-fluid rounded-circle mb-1 img-thumbnail shadow-sm"
                alt=""
              />
              <h6 class="mb-0">Aline L.</h6>
            </div>
          </div>
          <!--end of col-6-->
          <div class="col col-sm-12 col-md-6 col-xl-6">
            <div class="text-center">SKILLS</div>
            <ul class="social mb-1 list-inline mt-2">
              <!-- <h6 class="border-bottom">SKILLS</h6> -->
              <li class="list-inline-item">
                <a href="#"
                  ><img src="https://img.icons8.com/wired/48/000000/python.png"
                /></a>
              </li>
              <li class="list-inline-item">
                <a href="#"
                  ><img src="https://img.icons8.com/dusk/48/000000/html-5.png"
                /></a>
              </li>
              <li class="list-inline-item">
                <a href="#"
                  ><img src="https://img.icons8.com/color/48/000000/css3.png"
                /></a>
              </li>
              <li class="list-inline-item">
                <a href="#"
                  ><img src="https://img.icons8.com/windows/48/000000/sass.png"
                /></a>
              </li>
              <li class="list-inline-item">
                <a href="#"
                  ><img
                    src="https://img.icons8.com/color/48/000000/angularjs.png"
                /></a>
              </li>
            </ul>
          </div>
        </div>
        <!--end of second row-->

        <!--THIRD ROW WITH 2 BUTTONS-->
        <div class="row">
          <div class="col col-6">
            <button class="btn btn-primary mt-2 btnGithub">GITHUB</button>
          </div>
          <div class="col col-6">
            <button class="btn btn-primary mt-2 btnApply">APPLY</button>
          </div>
        </div>
        <!--END OF THIRD ROW-->
      </div>
      <!--end of container-->

      <div class="row resultsChild">
        <div class="col col-8">
          <div class="row">TITLE PROJECT</div>
          <div class="row">
            <header>DESCRIPTION</header>
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores,
              itaque.
            </p>
          </div>
          <div class="row text-white">COLLABORATORS</div>
          <div class="list-inline-item mr-auto rounded">
            <img
              src="https://d19m59y37dris4.cloudfront.net/university/1-1-1/img/teacher-4.jpg"
              width="50"
              class="img-fluid rounded-circle mb-1 img-thumbnail shadow-sm"
              alt=""
            />
            <h6 class="mb-0">Nathalie P.</h6>
          </div>
          <div class="list-inline-item mr-auto rounded">
            <img
              src="https://d19m59y37dris4.cloudfront.net/university/1-1-1/img/teacher-7.jpg"
              width="50"
              class="img-fluid rounded-circle mb-1 img-thumbnail shadow-sm"
              alt=""
            />
            <h6 class="mb-0">Kasra T.</h6>
          </div>
          <div class="list-inline-item mr-auto rounded">
            <img
              src="https://d19m59y37dris4.cloudfront.net/university/1-1-1/img/teacher-1.jpg"
              width="50"
              class="img-fluid rounded-circle mb-1 img-thumbnail shadow-sm"
              alt=""
            />
            <h6 class="mb-0">Aline L.</h6>
          </div>

          <div class="row text-white">SKILLS</div>
          <ul class="social mb-1 list-inline mt-2">
            <!-- <h6 class="border-bottom">SKILLS</h6> -->
            <li class="list-inline-item">
              <a href="#"
                ><img src="https://img.icons8.com/wired/48/000000/python.png"
              /></a>
            </li>
            <li class="list-inline-item">
              <a href="#"
                ><img src="https://img.icons8.com/dusk/48/000000/html-5.png"
              /></a>
            </li>
            <li class="list-inline-item">
              <a href="#"
                ><img src="https://img.icons8.com/color/48/000000/css3.png"
              /></a>
            </li>
            <li class="list-inline-item">
              <a href="#"
                ><img src="https://img.icons8.com/windows/48/000000/sass.png"
              /></a>
            </li>
            <li class="list-inline-item">
              <a href="#"
                ><img src="https://img.icons8.com/color/48/000000/angularjs.png"
              /></a>
            </li>
          </ul>
        </div>
        <div class="col col-4">
          <button class="btn btn-primary btnGithub">GITHUB</button>

          <button class="btn btn-primary btnApply">APPLY</button>
        </div>
      </div>
      <div class="row resultsChild">
        <div class="col col-8">
          <div class="row">TITLE PROJECT</div>
          <div class="row">
            <header>DESCRIPTION</header>
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores,
              itaque.
            </p>
          </div>
          <div class="row text-white">COLLABORATORS</div>
          <div class="list-inline-item mr-auto rounded">
            <img
              src="https://d19m59y37dris4.cloudfront.net/university/1-1-1/img/teacher-4.jpg"
              width="50"
              class="img-fluid rounded-circle mb-1 img-thumbnail shadow-sm"
              alt=""
            />
            <h6 class="mb-0">Nathalie P.</h6>
          </div>
          <div class="list-inline-item mr-auto rounded">
            <img
              src="https://d19m59y37dris4.cloudfront.net/university/1-1-1/img/teacher-7.jpg"
              width="50"
              class="img-fluid rounded-circle mb-1 img-thumbnail shadow-sm"
              alt=""
            />
            <h6 class="mb-0">Kasra T.</h6>
          </div>
          <div class="list-inline-item mr-auto rounded">
            <img
              src="https://d19m59y37dris4.cloudfront.net/university/1-1-1/img/teacher-1.jpg"
              width="50"
              class="img-fluid rounded-circle mb-1 img-thumbnail shadow-sm"
              alt=""
            />
            <h6 class="mb-0">Aline L.</h6>
          </div>

          <div class="row text-white">SKILLS</div>
          <ul class="social mb-1 list-inline mt-2">
            <!-- <h6 class="border-bottom">SKILLS</h6> -->
            <li class="list-inline-item">
              <a href="#"
                ><img src="https://img.icons8.com/wired/48/000000/python.png"
              /></a>
            </li>
            <li class="list-inline-item">
              <a href="#"
                ><img src="https://img.icons8.com/dusk/48/000000/html-5.png"
              /></a>
            </li>
            <li class="list-inline-item">
              <a href="#"
                ><img src="https://img.icons8.com/color/48/000000/css3.png"
              /></a>
            </li>
            <li class="list-inline-item">
              <a href="#"
                ><img src="https://img.icons8.com/windows/48/000000/sass.png"
              /></a>
            </li>
            <li class="list-inline-item">
              <a href="#"
                ><img src="https://img.icons8.com/color/48/000000/angularjs.png"
              /></a>
            </li>
          </ul>
        </div>
        <div class="col col-4">
          <button class="btn btn-primary btnGithub">GITHUB</button>

          <button class="btn btn-primary btnApply">APPLY</button>
        </div>
      </div>
    </div>

    <!--FOOTER-->

    <?php include('footer.php'); ?>

    <?php include('bootstrap_scripts.php'); ?>
    <script src="../dropdown.js"></script>
    <!-- <script
      src="https://code.jquery.com/jquery-3.4.1.js"
      integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
      crossorigin="anonymous"
    ></script> -->
  </body>
</html>
