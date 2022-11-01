<!-- extends('layouts.app')-->
@extends('layouts.appnoti')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <button onclick="startFCM()" class="btn btn-danger btn-flat">Allow notification
            </button>
            <div class="card mt-3">
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form action="{{ route('send.notification') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Message Title</label>
                            <input type="text" class="form-control" name="title">
                        </div>
                        <div class="form-group">
                            <label>Message Body</label>
                            <textarea class="form-control" name="body"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success btn-block">Send Notification</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.3.2/firebase.js"></script>
<script>
    var firebaseConfig = {
        apiKey: "AIzaSyAL1xL3l7WxqAk7WkM5nbBlinVbex7nfao"
        , authDomain: "seguromotors-v2.firebaseapp.com"
        , projectId: "seguromotors-v2"
        , storageBucket: "seguromotors-v2.appspot.com"
        , messagingSenderId: "698977387266"
        , appId: "1:698977387266:web:4816d19bbcdccdb4e3781b"
        , measurementId: "G-68T69KLWPK"
    , };
    firebase.initializeApp(firebaseConfig);
    const messaging = firebase.messaging();
    //const messaging = firebase.messaging.isSupported() ? firebase.messaging() : null;
    function startFCM() {
        messaging
            .requestPermission()
            .then(function() {
                return messaging.getToken()
            })
            .then(function(response) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: '{{ route("save-token") }}'
                    , type: 'POST'
                    , data: {
                        token: response
                    }
                    , dataType: 'JSON'
                    , success: function(response) {
                        alert('Token stored.');
                    }
                    , error: function(error) {
                        alert(error);
                    }
                , });
            }).catch(function(error) {
                alert(error);
            });
    }
    messaging.onMessage(function(payload) {
        const title = payload.notification.title;
        const options = {
            body: payload.notification.body
            , icon: payload.notification.icon
        , };
        new Notification(title, options);
    });

</script>
@endsection
