
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>ROL</title>
  <meta name="description" content="Responsive, Bootstrap, BS4" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- for ios 7 style, multi-resolution icon of 152x152 -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
  <link rel="apple-touch-icon" href="/rol/assets/images/logo.svg">
  <meta name="apple-mobile-web-app-title" content="Flatkit">
  <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="shortcut icon" sizes="196x196" href="/rol/assets/images/logo.svg">

  <!-- style -->

  <link rel="stylesheet" href="/rol/libs/font-awesome/css/font-awesome.min.css" type="text/css" />

  <!-- build:css ../assets/css/app.min.css -->
  <link rel="stylesheet" href="/rol/libs/bootstrap/dist/css/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="/rol/assets/css/app.css" type="text/css" />
  <link rel="stylesheet" href="/rol/assets/css/style.css" type="text/css" />
  <!-- endbuild -->
</head>
<body>


<div class="d-flex flex-column flex">
  <div class="navbar light bg pos-rlt box-shadow">
    <div class="mx-auto">
      <!-- brand -->
      <a href="/rol/index.html" class="navbar-brand">
      	<svg viewBox="0 0 24 24" height="28" width="28" xmlns="http://www.w3.org/2000/svg">
      	    <path d="M0 0h24v24H0z" fill="none"/>
      	    <path d="M19.51 3.08L3.08 19.51c.09.34.27.65.51.9.25.24.56.42.9.51L20.93 4.49c-.19-.69-.73-1.23-1.42-1.41zM11.88 3L3 11.88v2.83L14.71 3h-2.83zM5 3c-1.1 0-2 .9-2 2v2l4-4H5zm14 18c.55 0 1.05-.22 1.41-.59.37-.36.59-.86.59-1.41v-2l-4 4h2zm-9.71 0h2.83L21 12.12V9.29L9.29 21z" fill="#fff" class="fill-theme"/>
      	</svg>
      	<img src="/rol/assets/images/logo.png" alt="." class="hide">
      	<span class="hidden-folded d-inline">ROL</span>
      </a>
      <!-- / brand -->
    </div>
  </div>
  <div id="content-body">
    <div class="py-5 text-center w-100">
      <div class="mx-auto w-xxl w-auto-xs">
        <div class="px-3">
          <form action="login.php">
            <div class="text-muted mb-4">Logout complete</div>
            <div class="text-muted mb-4">Thank you.</div>
            <button type="submit" class="btn primary">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- build:js scripts/app.min.js -->
<!-- jQuery -->
  <script src="/rol/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
  <script src="/rol/libs/popper.js/dist/umd/popper.min.js"></script>
  <script src="/rol/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- core -->
  <script src="/rol/libs/pace-progress/pace.min.js"></script>
  <script src="/rol/libs/pjax/pjax.js"></script>

  <script src="/rol/scripts/lazyload.config.js"></script>
  <script src="/rol/scripts/lazyload.js"></script>
  <script src="/rol/scripts/plugin.js"></script>
  <script src="/rol/scripts/nav.js"></script>
  <script src="/rol/scripts/scrollto.js"></script>
  <script src="/rol/scripts/toggleclass.js"></script>
  <script src="/rol/scripts/theme.js"></script>
  <script src="/rol/scripts/ajax.js"></script>
  <script src="/rol/scripts/app.js"></script>
<!-- endbuild -->
</body>
</html>
