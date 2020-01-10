<header>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">

      <!--brand logo-->
      <a class="navbar-brand" href="index.php">CodeBook</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!--navigation-->
      <!--Home-->
      <div class="collapse navbar-collapse" id="navbarCollapse">
        
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
          </li>

      <!--dropdown Projects-->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Projects
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="create_project.php">
                <span>Create Project</span>
              </a>
              <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="search_project.php">
                  <span>Search Project</span>
                </a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Collaborators
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="search_collab2.php">
                  <span>Search Collaborator</span>
                </a>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Log out</a>
          </li>
              
          </ul>

            
          </div>
        </nav>
        </ul>


    </nav>
  </div>
</header>