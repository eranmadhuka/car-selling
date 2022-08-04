<nav class="navbar navbar-expand-lg navbar-dark p-3 sticky-top" style="background-color : #123652;">
        <div class="container">
          <a class="navbar-brand" href="index.html"><img src="assets/img/logo/logo.png"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll">
              <li class="nav-item">
                <a href="dashboard-post_ad.php" class="btn btn-warning btn-sm" style="color: #123652; font-weight: 600;">Post Your Ad</a>
              </li>

              <div class="dropdown account">
                <a href="#" class="dropdown-toggle btn btn-sm" style="color: #fff; font-weight: 600;" data-bs-toggle="dropdown">
                  <?php echo "".$_SESSION['user']['u_name']; ?>
                </a>
                <img src="uploads/avatar/<?php echo "".$_SESSION['user']['photo']; ?>" alt="avatar" class="rounded-circle img-fluid" style="width: 40px; height: 40px;">

                  <div class="dropdown-menu rounded">
                    <a href="dashboard.php" class="dropdown-item border-bottom p-3"><i class="fa-solid fa-gauge"></i> Dashboard </a>
                    <a href="dashboard-accountsetting.php" class="dropdown-item border-bottom p-3"><i class="fa-solid fa-user"></i> Account Settings </a>
                    <a href="dashboard-post_ad.php" class="dropdown-item border-bottom p-3"><i class="fa-solid fa-rectangle-ad"></i> Post Ad</a>
                    <a href="dashboard-my_ads.php" class="dropdown-item border-bottom p-3"><i class="fa-solid fa-book-bookmark"></i> My Ads</a>
                    <a href="loguot.php" style="color: red;" class="dropdown-item p-3"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout </a>
                  </div>
              </div>
            </ul>
          </div>
        </div>
    </nav>