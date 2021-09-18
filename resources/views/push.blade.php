<!doctype html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Push Notification</title>
</head>
<body>
  Firebase Notification (Real Time - RT)


  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <center>
          <button id="btn-nft-enable" onclick="initFirebaseMessagingRegistration()" class="btn btn-danger btn-xs btn-flat">Allow for Notification</button>
        </center>
        <div class="card">
          <div class="card-header">{{ __('Dashboard') }}</div>

          <div class="card-body">
            @if (session('status'))
              <div class="alert alert-success" role="alert">
                {{ session('status') }}
              </div>
            @endif

            <form action="{{ route('send.notification') }}" method="POST">
              @csrf
              <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title">
              </div>
              <div class="form-group">
                <label>Body</label>
                <textarea class="form-control" name="body"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Send Notification</button>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</body>

<script src="https://www.gstatic.com/firebasejs/7.23.0/firebase.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
  var firebaseConfig = {
    apiKey: "AIzaSyBRy7bC7OEL57IZd46J8HQ9Kada7DxIkBw",
    authDomain: "laravelpush-9a9a0.firebaseapp.com",
    projectId: "laravelpush-9a9a0",
    storageBucket: "laravelpush-9a9a0.appspot.com",
    messagingSenderId: "1008982298294",
    appId: "1:1008982298294:web:06a1493718408f917da017"
  };
  firebase.initializeApp(firebaseConfig);
  const messaging = firebase.messaging();
  function initFirebaseMessagingRegistration() {
    messaging
      .requestPermission()
      .then(function () {
        return messaging.getToken()
      })
      .then(function(token) {
        console.log(token);
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
        $.ajax({
          url: '{{ route("save-token") }}',
          type: 'POST',
          data: {
            token: token
          },
          dataType: 'JSON',
          success: function (response) {
            alert('Token saved successfully.');
          },
          error: function (err) {
            console.log('User Chat Token Error'+ err);
          },
        });
      }).catch(function (err) {
      console.log('User Chat Token Error'+ err);
    });
  }
  messaging.onMessage(function(payload) {
    const noteTitle = payload.notification.title;
    const noteOptions = {
      body: payload.notification.body,
      icon: payload.notification.icon,
    };
    new Notification(noteTitle, noteOptions);
  });
</script>
</html>
