<?php define("BASE_URL", "http://127.0.0.1/json-placeholder/");  # Replace this to url website url ?>
<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Bootstrap.min.css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <!-- Style.css -->
    <link rel="stylesheet" href="css/style.css">
    <title>JSON Placeholder — Free Fake REST API</title>
</head>
<body class="d-flex flex-column h-100">
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
      <div class="container">
        <a class="navbar-brand" href="index">JSONPlaceholder</a>
        <div class="nav-links">
          <ul>
            <li>
              <a href="index" class="active">Home</a>
            </li>
            <li>
              <a href="json">JSON</a>
            </li>
            <li class="d-sm-inline-block d-none">
              <a href="#code" class="my-btn my-btn-sm d-flex">Get Started
                <span class="material-icons material-icons-outlined ms-1 d-flex align-items-center" style="font-size: 1rem;">play_circle_filled</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="hero-section bg-light">
      <div class="container">
        <div class="content">
          <h1 class="title"><span class="highlight">{JSON}</span> Placeholder Online</h1>
          <p class="desc">In this site your can generate fake json apis. Free fake API for testing and prototyping.</p>
          <div class="header-buttons mt-4">
            <a href="#code" class="my-btn d-flex">Get Started
              <span class="material-icons material-icons-outlined ms-1">play_circle_filled</span>
            </a>
          </div>
        </div>
      </div>
    </div>

    <section class="section json-code" id="code">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto">
            <h2 class="section-head">Try it</h2>
            <p class="section-desc">Run this code here, in a console or from any site:</p>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-md-8 mx-auto">
            <div class="code">
              <pre><span class="function">fetch</span>(<span class="string">'<?php echo BASE_URL . "json/1"; ?>'</span>)
  .<span class="function">then</span>(response <span class="operators">=></span> response.<span class="function">json</span>())
  .<span class="function">then</span>(json <span class="operators">=></span> console.<span class="function">log</span>(json))</pre>
            </div>
            <button class="my-btn my-btn-sm my-4" id="runScript">Run Script</button>
            <div class="code" id="JSONOutput" style="display:none;">
              <pre>{
  <span class="string">"id":</span> <span class="function">1</span>,
  <span class="string">"title":</span> <span class="string">"Lorem ipsum lumifem dehures fypujisy bu ce mo quhacicu."</span>,
  <span class="string">"body":</span> <span class="string">"Lorem ipsum cufud ma fyqos bisujoci papibalo lobidu pygesum."</span>
}</pre>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer bg-light border-top py-4 mt-auto">
      <div class="container">
        <p class="mb-0 footer-text text-center">Coded and maintained with ❤️ by <a href="https://www.youtube.com/PureCoding/" target="_blank">Pure Coding</a> © 2021</p>
      </div>
    </footer>

    <button onclick="topFunction()" class="backToTop shadow-sm border" id="topBtn" title="Return to Top">
      <span class="material-icons material-icons-outlined">
        arrow_upward
      </span>
    </button>

    <!-- jQuery-3.6.0.min.js -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap.bundle.min.js  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Script.js -->
    <script src="js/script.js"></script>
</body>
</html>