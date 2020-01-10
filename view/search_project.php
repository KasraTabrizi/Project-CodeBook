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
    <link rel="stylesheet" href="../styles/search_project.css" />
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
    <!-- <?php include('header.php'); ?> -->
    <!--FILTER CONTAINER-->

    <!--FILTER SEARCH BAR CONTAINER-->

<nav class="navbar navbar-expand-sm navbar-light bg-light">

  <!--brand logo-->
  <a class="navbar-brand" href="#">Filter by: </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!--navigation-->
  <!--SKILLS-->
  <div class="collapse navbar-collapse" id="navbarCollapse">
    
    <ul class="navbar-nav mr-auto">
      

  <!--dropdown SKILLS 1-->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Skills
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">
            <span>JavaScript</span>
          </a>
          <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span>PHP</span>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span>React</span>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span>HTML5</span>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span>CSS3</span>
            </a>
        </div>
      </li>
      <!--dropdown SKILLS 2-->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Collaborators
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">
            <span>1-5</span>
          </a>
          <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span>5-10</span>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span>10-25</span>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span>25-50</span>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span>> 50</span>
            </a>
        </div>
      </li>
      <!-- SEARCH BUTTON -->
      <li class="nav-item dropdown">
        <a class="nav-link" type="button" role="button"> 
        Search
        </a>
      </li> 
      </ul>
      </div>
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
          <div class="row">COLLABORATORS</div>
          <div class="row">SKILLS</div>
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
          <div class="row">COLLABORATORS</div>
          <div class="row">SKILLS</div>
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
          <div class="row">COLLABORATORS</div>
          <div class="row">SKILLS</div>
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
          <div class="row">COLLABORATORS</div>
          <div class="row">SKILLS</div>
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
          <div class="row">COLLABORATORS</div>
          <div class="row">SKILLS</div>
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
