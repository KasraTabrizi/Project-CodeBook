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
    <link rel="stylesheet" href="../styles/search_collab.css" />
    <title>SEARCH FOR COLLABORATORS</title>
  </head>
  <body>

    <!--HEADER/NAVBAR-->

    <?php include('header.php'); ?>
<!--FILTER SEARCH BAR CONTAINER-->

    <nav class="navbar navbar-expand-sm navbar-light bg-light container-fluid">
      <!--brand logo-->
      <a class="navbar-brand">Filter by: </a>
      <!--HAMBURGER-->
      <button
        class="navbar-toggler ml-auto"
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
      
      <form action="" method="POST" class="collapse navbar-collapse" id="navbarCollapse">
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
          <!-- SEARCH BUTTON -->
          <li class="nav-item dropdown">
            <button class="nav-link" type="submit" role="button">
              Search
            </button>
          </li>
        </ul><!--end of navbar mr-auto-->
      </form>
      
    </nav>

    <!--TEAM ITEMS CONTAINER-->

    <div class="container">
      <div class="row text-center">
        <!-- TEAM ITEM 1 -->
        <div class="col-xl-3 col-sm-6 mb-5">
          
          <div class="bg-white rounded shadow-sm py-5 px-4">
            <!-- <div class="row ml-auto mr-0"><a href="#" class="badge badge-info">Add Friend</a></div> -->
            <img
              src="https://d19m59y37dris4.cloudfront.net/university/1-1-1/img/teacher-4.jpg"
              width="100"
              class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm"
              alt=""
            />
            <h5 class="mb-0">Nathalie Pillen</h5>
            <span class="small text-uppercase text-muted">CEO - Founder </span>
            <div class="">
                
                  <a href="#" class="badge badge-info m-auto">Add Friend</a>
                
</div>
            <!-- SOCIAL MEDIA LINKS -->
            <ul class="social mb-0 list-inline mt-3 mb-0 list-group-flush">
              <!-- <h6 class="border-bottom">SOCIAL</h6> -->
              <li class="list-inline-item">
                <a href="#" class="social-link"
                  ><i class="fa fa-facebook-f"></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="social-link"><i class="fa fa-github"></i></a>
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

            <!-- SKILLS BADGES -->

            <ul class="social mb-0 list-inline mt-2">
              <h6 class="border-bottom">SKILLS</h6>
              <li class="list-inline-item">
                <a href="#"
                  ><img src="https://svg2raster.fileformat.info/vlz.jsp?svg=%2Flogos%2Fdjangoproject%2Fdjangoproject-icon.svg&width=48&height=48"
                /></a>
              </li>
              <li class="list-inline-item">
                <a href="#"
                  ><img src="https://img.icons8.com/dusk/48/000000/html-5.png"
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
        <!--end of team item 1 -->

        <!-- TEAM ITEM 2 -->
        <div class="col-xl-3 col-sm-6 mb-5">
          <div class="bg-white rounded shadow-sm py-5 px-4">
            <img
              src="https://d19m59y37dris4.cloudfront.net/university/1-1-1/img/teacher-2.jpg"
              width="100"
              class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm"
              alt=""
            />
            <h5 class="mb-0">Denzel Washington</h5>
            <span class="small text-uppercase text-muted">CEO - Founder</span>
            <div class="">
                
                  <a href="#" class="badge badge-info m-auto">Add Friend</a>
                
</div>
            <!-- SOCIAL MEDIA LINKS -->
            <ul class="social mb-0 list-inline mt-3 mb-0 list-group-flush">
              <!-- <h6 class="border-bottom shadow-sm">SOCIAL</h6> -->
              <li class="list-inline-item">
                <a href="#" class="social-link"
                  ><i class="fa fa-facebook-f"></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="social-link"><i class="fa fa-github"></i></a>
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

            <!-- SKILLS BADGES -->

            <ul class="social mb-0 list-inline mt-2 list-group-flush">
              <h6 class="border-bottom">SKILLS</h6>
              <li class="list-inline-item">
                <a href="#"
                  ><img src="https://img.icons8.com/color/48/000000/mongodb.png"
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
        <!--end of team item 2-->

        <!-- TEAM ITEM 3 -->
        <div class="col-xl-3 col-sm-6 mb-5">
          <div class="bg-white rounded shadow-sm py-5 px-4">
            <img
              src="https://d19m59y37dris4.cloudfront.net/university/1-1-1/img/teacher-6.jpg"
              width="100"
              class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm"
              alt=""
            />
            <h5 class="mb-0">Michael Spielberg</h5>
            <span class="small text-uppercase text-muted">CEO - Founder</span>
            <div class="">
                
                  <a href="#" class="badge badge-info m-auto">Add Friend</a>
                
</div>
            <!-- SOCIAL MEDIA LINKS -->
            <ul class="social mb-0 list-inline mt-3 mb-0 list-group-flush">
              
              <!-- <h6 class="border-bottom shadow-sm">SOCIAL</h6> -->
              <li class="list-inline-item">
                <a href="#" class="social-link"
                  ><i class="fa fa-facebook-f"></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="social-link"><i class="fa fa-github"></i></a>
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

            <!-- SKILLS BADGES -->

            <ul class="social mb-0 list-inline mt-2 list-group-flush">
              <h6 class="border-bottom">SKILLS</h6>
              <li class="list-inline-item">
                <a href="#"
                  ><img src="https://img.icons8.com/ios-filled/48/000000/mysql-logo.png"
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
        <!--end of team item 3-->

        <!-- TEAM ITEM 3 -->
        <div class="col-xl-3 col-sm-6 mb-5">
          <div class="bg-white rounded shadow-sm py-5 px-4">
            <img
              src="https://d19m59y37dris4.cloudfront.net/university/1-1-1/img/teacher-7.jpg"
              width="100"
              class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm"
              alt=""
            />
            <h5 class="mb-0">Brandon Something</h5>
            <span class="small text-uppercase text-muted">CEO - Founder</span>
            <div class="">
                
                  <a href="#" class="badge badge-info m-auto">Add Friend</a>
                
</div>
            <!-- SOCIAL MEDIA LINKS -->
            <ul class="social mb-0 list-inline mt-3 mb-0 list-group-flush">
              <!-- <h6 class="border-bottom shadow-sm">SOCIAL</h6> -->
              <li class="list-inline-item">
                <a href="#" class="social-link"
                  ><i class="fa fa-facebook-f"></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="social-link"><i class="fa fa-github"></i></a>
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

            <!-- SKILLS BADGES -->

            <ul class="social mb-0 list-inline mt-2 list-group-flush">
              <h6 class="border-bottom">SKILLS</h6>
              
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
                  ><img src="https://img.icons8.com/wired/48/000000/webpack.png"
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
        <!--end of team item 3-->

        <!-- TEAM ITEM 3 -->
        <div class="col-xl-3 col-sm-6 mb-5">
          <div class="bg-white rounded shadow-sm py-5 px-4">
            <img
              src="https://d19m59y37dris4.cloudfront.net/university/1-1-1/img/teacher-2.jpg"
              width="100"
              class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm"
              alt=""
            />
            <h5 class="mb-0">Idris Elba</h5>
            <span class="small text-uppercase text-muted">CEO - Founder</span>
            <div class="">
                
                  <a href="#" class="badge badge-info m-auto">Add Friend</a>
                
</div>
            <!-- SOCIAL MEDIA LINKS -->
            <ul class="social mb-0 list-inline mt-3 mb-0 list-group-flush">
              <!-- <h6 class="border-bottom shadow-sm">SOCIAL</h6> -->
              <li class="list-inline-item">
                <a href="#" class="social-link"
                  ><i class="fa fa-facebook-f"></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="social-link"><i class="fa fa-github"></i></a>
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

            <!-- SKILLS BADGES -->

            <ul class="social mb-0 list-inline mt-2 list-group-flush">
              <h6 class="border-bottom">SKILLS</h6>
              <li class="list-inline-item">
                <a href="#"
                  ><img src="https://img.icons8.com/ios-filled/48/000000/laravel.png"
                /></a>
              </li>
              
              <li class="list-inline-item">
                <a href="#"
                  ><img src="https://img.icons8.com/officexs/48/000000/php-logo.png"
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
        <!--end of team item 3-->

        <!-- TEAM ITEM 3 -->
        <div class="col-xl-3 col-sm-6 mb-5">
          <div class="bg-white rounded shadow-sm py-5 px-4">
            <img
              src="https://d19m59y37dris4.cloudfront.net/university/1-1-1/img/teacher-3.jpg"
              width="100"
              class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm"
              alt=""
            />
            <h5 class="mb-0">Erin Joosen</h5>
            <span class="small text-uppercase text-muted">CEO - Founder</span>
            <div class="">
                
                  <a href="#" class="badge badge-info m-auto">Add Friend</a>
                
</div>
            <!-- SOCIAL MEDIA LINKS -->
            <ul class="social mb-0 list-inline mt-3 mb-0 list-group-flush">
              <!-- <h6 class="border-bottom shadow-sm">SOCIAL</h6> -->
              <li class="list-inline-item">
                <a href="#" class="social-link"
                  ><i class="fa fa-facebook-f"></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="social-link"><i class="fa fa-github"></i></a>
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

            <!-- SKILLS BADGES -->

            <ul class="social mb-0 list-inline mt-2 list-group-flush">
              <h6 class="border-bottom">SKILLS</h6>
              <li class="list-inline-item">
                <a href="#"
                  ><img src="https://img.icons8.com/wired/48/000000/python.png"
                /></a>
              </li>
              <li class="list-inline-item">
                <a href="#"
                  ><img src="https://img.icons8.com/color/48/000000/vue-js.png"
                /></a>
              </li>
              <li class="list-inline-item">
                <a href="#"
                  ><img src="https://img.icons8.com/color/48/000000/css3.png"
                /></a>
              </li>
              <li class="list-inline-item">
                <a href="#"
                  ><img src="https://img.icons8.com/windows/48/000000/nodejs.png"
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
        <!--end of team item 3-->

        <!-- TEAM ITEM 3 -->
        <div class="col-xl-3 col-sm-6 mb-5">
          <div class="bg-white rounded shadow-sm py-5 px-4">
            <img
              src="https://d19m59y37dris4.cloudfront.net/university/1-1-1/img/teacher-5.jpg"
              width="100"
              class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm"
              alt=""
            />
            <h5 class="mb-0">Beard Guy</h5>
            <span class="small text-uppercase text-muted">CEO - Founder</span>
            <div class="">
                
                  <a href="#" class="badge badge-info m-auto">Add Friend</a>
                
</div>
            <!-- SOCIAL MEDIA LINKS -->
            <ul class="social mb-0 list-inline mt-3 mb-0 list-group-flush">
              <!-- <h6 class="border-bottom shadow-sm">SOCIAL</h6> -->
              <li class="list-inline-item">
                <a href="#" class="social-link"
                  ><i class="fa fa-facebook-f"></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a href="#" class="social-link"><i class="fa fa-github"></i></a>
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

            <!-- SKILLS BADGES -->

            <ul class="social mb-0 list-inline mt-2 list-group-flush">
              <h6 class="border-bottom">SKILLS</h6>
              <li class="list-inline-item">
                <a href="#"
                  ><img src="https://img.icons8.com/wired/48/000000/javascript.png"
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
        <!--end of team item 3-->
      </div>
      <!--end row text-center-->
    </div>
    <!--end container-->

    <?php include('footer.php'); ?>
    <?php include('bootstrap_scripts.php'); ?>
  </body>
</html>
