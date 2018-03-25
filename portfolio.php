<!-- head goes here -->
<?php include 'includes/head.php'; ?>

<!-- header goes here -->
<body id="body">

  <div id="preloader">
    <img src="img/preloader.gif" alt="Preloader">
  </div>

  <header id="navigation" class="navbar-fixed-top navbar">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <i class="fa fa-bars fa-2x"></i>
        </button>

        <a class="navbar-brand" href="#body">
          <!-- <h1 id="logo">
						<img src="img/logo.png" alt="Photography">
					</h1> -->
        </a>
      </div>

      <nav class="collapse navbar-collapse navbar-right" role="navigation">
        <ul id="nav" class="nav navbar-nav">
          <li class="current">
            <a href="./#body">Home</a>
          </li>
          <li>
            <a href="./#features">About</a>
          </li>
          <li>
            <a href="./#works">Gallery</a>
          </li>
          <li>
            <a href="./#team">Video</a>
          </li>
          <li>
            <a href="./#contact">Contact</a>
          </li>
        </ul>
      </nav>

    </div>
  </header>

<!-- slider goes here -->
<?php include 'includes/slider.php'; ?>

<!-- pictures goes here -->
<?php include 'includes/pics.php'; ?>

<!-- footer section goes here -->
<?php include 'includes/footer.php'; ?>