<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel App</title>
</head>

<body>
    @yield('content')
    <script src="https://www.gstatic.com/firebasejs/9.0.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/9.0.0/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/9.0.0/firebase-firestore.js"></script>

    <script type="module">
        // Import the functions you need from the SDKs you need
        import {
            initializeApp
        } from "https://www.gstatic.com/firebasejs/10.13.1/firebase-app.js";
        import {
            getAnalytics
        } from "https://www.gstatic.com/firebasejs/10.13.1/firebase-analytics.js";
        const firebaseConfig = {
            apiKey: "AIzaSyC1rRAwmoVU-fmGyVQKNEMzG0RO69iUk-k",
            authDomain: "xyz1-41e6b.firebaseapp.com",
            projectId: "xyz1-41e6b",
            storageBucket: "xyz1-41e6b.appspot.com",
            messagingSenderId: "9088866956",
            appId: "1:9088866956:web:d55275de2abd54b9b679a9",
            measurementId: "G-JJQ9EWJY8N"
        };

        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        const analytics = getAnalytics(app);
    </script>
</body>

</html>
