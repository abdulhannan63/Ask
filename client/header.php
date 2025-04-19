<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <img src="./public/logo.png" width=70 alt="">
    <a class="navbar-brand" href="#">Ques!</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/test/Questions">Home</a>
        </li>

        <!-- checking whether the session is set or not for sack of displaying the( signup login ) or logout -->
        <?php if(!isset($_SESSION['user']['username'])){ ?>
            <li class="nav-item">
              <a class="nav-link" href="?login=true">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?signup=true">Signup</a>
            </li>
        <?php }else{ ?>
            <li class="nav-item text-danger">
              <a class="nav-link" class="text-danger" href="./server/requests.php?logout=true">Logout</a>
            </li>
            <li class="nav-item text-danger">
              <a class="nav-link" class="text-danger " href="?ask=true">Ask</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?u-id=<?php echo $_SESSION['user']['userid']?>">My Questions</a>
            </li>
        <?php } ?>


        <li class="nav-item">
          <a class="nav-link" href="#">Category</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?latest=true">Latest Question</a>
        </li>
      </ul>
      <!-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </div>
  </div>
</nav>