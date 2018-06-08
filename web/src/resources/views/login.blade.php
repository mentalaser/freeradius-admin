<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0">

  <!-- UIkit CSS -->
  <link rel="stylesheet" href="{{ asset('css/uikit.min.css') }}" />
  <!-- UIkit JS -->
  <script src="{{ asset('js/uikit.min.js') }}"></script>
  <script src="{{ asset('js/uikit-icons.min.js') }}"></script>

  <link href="https://fonts.googleapis.com/css?family=Exo:400,900i," rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
  <title>FreeRADIUS Admin</title>
</head>
<body>
  <div class="uk-container-small">
    <div class="uk-position-center">
      <div id="title">
        <h2 class="uk-text-center"><span id='title1'>FREERADIUS</span><span id='title2'>Admin</span></h2>
      </div><br />
      @if (session('error'))
      <div class="uk-alert-warning" uk-alert>
        <a class="uk-alert-close" uk-close></a>
        <p>{{ session('error') }}</p>
      </div>
      @endif
      <form method="post" action="/">
        {{ csrf_field() }}
        <fieldset class="uk-fieldset">
          <div class="uk-margin">
            <!-- <label>Username</label> -->
            <input class="uk-input" type="text" placeholder="Username" name="username" required />
          </div>
          <div class="uk-margin">
            <!-- <label>Password</label> -->
            <input class='uk-input' type="password" placeholder="Password" name="password" required />
          </div>
          <div class="uk-margin">
            <button id='login-button' class="uk-button uk-button-primary uk-width-1-1">Login</button>
          </div>
        </fieldset>
      </form>
      <div id="footer">
        <br /><br />
        <p>
          <span uk-icon="icon: file-edit"></span> by Junel Solis on Gitlab<br />
          FreeRADIUS Admin is <a href="https://gitlab.com/junelsolis/freeradius-admin" target='_blank'>open source</a>.
        </p>
      </div>
    </div>
  </div>
</body>
</html>
