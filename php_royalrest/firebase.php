<!DOCTYPE html>
<html>
<head>
  <title>Student Support Portal</title>
</head>
<body>

<h2>Student Support Portal</h2>

<button onclick="googleLogin()">Login with Google</button>
<button onclick="logout()">Logout</button>

<p id="user"></p>

<!-- Firebase SDK -->
<script src="https://www.gstatic.com/firebasejs/10.7.0/firebase-app-compat.js"></script>
<script src="https://www.gstatic.com/firebasejs/10.7.0/firebase-auth-compat.js"></script>

<script>
  // 
 // Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "8686b7s",
  authDomain: ".firebaseapp.com",
  projectId: "-46a24",
  storageBucket: ".firebasestorage.app",
  messagingSenderId: "51",
  appId: "1:web:e9fc70a760882b6094c5fa",
  measurementId: "GTK"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);

  firebase.initializeApp(firebaseConfig);

  function googleLogin() {
    const provider = new firebase.auth.GoogleAuthProvider();

    firebase.auth().signInWithPopup(provider)
      .then(result => {
        document.getElementById("user").innerText =
          "Welcome " + result.user.displayName;
      })
      .catch(err => alert(err.message));
  }

  function logout() {
    firebase.auth().signOut();
    document.getElementById("user").innerText = "";
  }
</script>

</body>

</html>
