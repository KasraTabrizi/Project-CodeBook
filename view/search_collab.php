<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    <?php include('bootstrap_styles.php'); ?>
    <link rel="stylesheet" href="../styles/search_collab.css" />
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

    <!--RESULTS CONTAINER-->
    <div class="container-fluid">
      <div class="card-deck my-5">
        <!--START OF CARD DECK-->
        <div class="card border-dark">
          <img
            class="card-img-top"
            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1234&q=80"
            alt=""
          />
          <div class="card-body">
            <h5 class="card-title">Nathalie Pillen</h5>
            <p class="card-text">Backend Developer at SilverFin</p>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <img width="50px" src="../resources/icons/github-icon.png" /> Link to Github
                Account
              </li>
              <li class="list-group-item">
                <img width="50px" src="../resources/icons/linkedin-icon.png" alt="" /> Linkedin
              </li>
            </ul>
          </div>
          <div class="card-footer">
            <small class="text-muted"></small>
          </div>
        </div>
        <div class="card border-dark">
          <img
            class="card-img-top"
            src="https://images.unsplash.com/photo-1521572267360-ee0c2909d518?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60"
            alt=""
          />
          <div class="card-body">
            <h5 class="card-title">Kasra Tabrizi</h5>
            <p class="card-text">Fullstack developer at Showpad</p>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <img width="50px" src="../resources/icons/github-icon.png" /> Link to Github
                Account
              </li>
              <li class="list-group-item">
                <img width="50px" src="../resources/icons/linkedin-icon.png" alt="" /> Linkedin
              </li>
            </ul>
          </div>
          <div class="card-footer">
            <small class="text-muted"></small>
          </div>
        </div>
        <div class="card border-dark">
          <img
            class="card-img-top"
            src="https://images.unsplash.com/photo-1525879000488-bff3b1c387cf?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60"
            alt=""
          />
          <div class="card-body">
            <h5 class="card-title">Erin Joosen</h5>
            <p class="card-text">React Developer at Sumocoders</p>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <img width="50px" src="../resources/icons/github-icon.png" /> Link to Github
                Account
              </li>
              <li class="list-group-item">
                <img width="50px" src="../resources/icons/linkedin-icon.png" alt="" /> Linkedin
              </li>
            </ul>
          </div>
          <div class="card-footer">
            <small class="text-muted"></small>
          </div>
        </div>
      </div>
      <!--END OF CARD DECK 1-->

      <div class="card-deck my-5">
        <!--START OF CARD DECK 2-->
        <div class="card border-dark">
          <img
            class="card-img-top"
            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1234&q=80"
            alt=""
          />
          <div class="card-body">
            <h5 class="card-title">Nathalie Pillen</h5>
            <p class="card-text">Backend Developer at SilverFin</p>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <img width="50px" src="../resources/icons/github-icon.png" /> Link to Github
                Account
              </li>
              <li class="list-group-item">
                <img width="50px" src="../resources/icons/linkedin-icon.png" alt="" /> Linkedin
              </li>
            </ul>
          </div>
          <div class="card-footer">
            <small class="text-muted"></small>
          </div>
        </div>
        <div class="card border-dark">
          <img
            class="card-img-top"
            src="https://images.unsplash.com/photo-1521572267360-ee0c2909d518?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60"
            alt=""
          />
          <div class="card-body">
            <h5 class="card-title">Kasra Tabrizi</h5>
            <p class="card-text">Fullstack developer at Showpad</p>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <img width="50px" src="../resources/icons/github-icon.png" /> Link to Github
                Account
              </li>
              <li class="list-group-item">
                <img width="50px" src="../resources/icons/linkedin-icon.png" alt="" /> Linkedin
              </li>
            </ul>
          </div>
          <div class="card-footer">
            <small class="text-muted"></small>
          </div>
        </div>
        <div class="card border-dark">
          <img
            class="card-img-top"
            src="https://images.unsplash.com/photo-1525879000488-bff3b1c387cf?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60"
            alt=""
          />
          <div class="card-body">
            <h5 class="card-title">Erin Joosen</h5>
            <p class="card-text">React Developer at Sumocoders</p>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <img width="50px" src="../resources/icons/github-icon.png" /> Link to Github
                Account
              </li>
              <li class="list-group-item">
                <img width="50px" src="../resources/icons/linkedin-icon.png" alt="" /> Linkedin
              </li>
            </ul>
          </div>
          <div class="card-footer">
            <small class="text-muted"></small>
          </div>
        </div>
      </div>
      <!--END OF CARD DECK 2-->
      <div class="card-deck my-5">
        <!--START OF CARD DECK 3-->
        <div class="card border-dark">
          <img
            class="card-img-top"
            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1234&q=80"
            alt=""
          />
          <div class="card-body">
            <h5 class="card-title">Nathalie Pillen</h5>
            <p class="card-text">Backend Developer at SilverFin</p>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <img width="50px" src="../resources/icons/github-icon.png" /> Link to Github
                Account
              </li>
              <li class="list-group-item">
                <img width="50px" src="../resources/icons/linkedin-icon.png" alt="" /> Linkedin
              </li>
            </ul>
          </div>
          <div class="card-footer">
            <small class="text-muted"></small>
          </div>
        </div>
        <div class="card border-dark">
          <img
            class="card-img-top"
            src="https://images.unsplash.com/photo-1521572267360-ee0c2909d518?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60"
            alt=""
          />
          <div class="card-body">
            <h5 class="card-title">Kasra Tabrizi</h5>
            <p class="card-text">Fullstack developer at Showpad</p>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <img width="50px" src="../resources/icons/github-icon.png" /> Link to Github
                Account
              </li>
              <li class="list-group-item">
                <img width="50px" src="../resources/icons/linkedin-icon.png" alt="" /> Linkedin
              </li>
            </ul>
          </div>
          <div class="card-footer">
            <small class="text-muted"></small>
          </div>
        </div>
        <div class="card border-dark">
          <img
            class="card-img-top"
            src="https://images.unsplash.com/photo-1525879000488-bff3b1c387cf?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=400&q=60"
            alt=""
          />
          <div class="card-body">
            <h5 class="card-title">Erin Joosen</h5>
            <p class="card-text">React Developer at Sumocoders</p>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <img width="50px" src="../resources/icons/github-icon.png" /> Link to Github
                Account
              </li>
              <li class="list-group-item">
                <img width="50px" src="../resources/icons/linkedin-icon.png" alt="" /> Linkedin
              </li>
            </ul>
          </div>
          <div class="card-footer">
            <small class="text-muted"></small>
          </div>
        </div>
      </div>
      <!--END OF CARD DECK 3-->
    </div>

    <?php include('footer.php'); ?>
    <?php include('bootstrap_scripts.php'); ?>
  </body>
</html>

