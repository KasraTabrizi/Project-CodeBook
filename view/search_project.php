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
        <div class="dropdown-menu filterChild">
          <a href="#" class="dropdown-item">JavaScript</a>
          <a href="#" class="dropdown-item">PHP</a>
          <a href="#" class="dropdown-item">React</a>
          <a href="#" class="dropdown-item">SQL</a>
          <a href="#" class="dropdown-item">Node.js</a>
        </div>
      </div>
      <div class="dropdown filterChild">
        <button
          class="btn btn-secondary dropdown-toggle"
          type="button"
          data-toggle="dropdown"
          aria-haspopup="true"
          aria-expanded="false"
        >
          COLLABORATORS
        </button>
        <div class="dropdown-menu">
          <a href="#" class="dropdown-item">1-5 collaborators</a>
          <a href="#" class="dropdown-item">5-10 collaborators</a>
          <a href="#" class="dropdown-item">10-20 collaborators</a>
          <a href="#" class="dropdown-item">20-50 collaborators</a>
          <a href="#" class="dropdown-item">>50 collaborators</a>
        </div>
      </div>

      <button class="btn btn-primary filterChild">SEARCH</button>
    </div>

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
    <script
      src="https://code.jquery.com/jquery-3.4.1.js"
      integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
      crossorigin="anonymous"
    ></script>
  </body>
</html>
