<script src="https://www.gstatic.com/firebasejs/4.0.0/firebase.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.0.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.0.0/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.0.0/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.0.0/firebase-messaging.js"></script>



<script src="https://www.gstatic.com/firebasejs/4.0.0/firebase.js"></script>

<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyCN2ffF5bseNxPiwE2XHrF5dTEVcT0Qa2M",
    authDomain: "androidtrainingromanananich.firebaseapp.com",
    databaseURL: "https://androidtrainingromanananich.firebaseio.com",
    projectId: "androidtrainingromanananich",
    storageBucket: "androidtrainingromanananich.appspot.com",
    messagingSenderId: "765342740475"
  };
    
    firebase.initializeApp(config);
    var storage = firebase.storage();
    var storageRef = storage.ref();
    var questionsRef = storageRef.child('Questions');
    var database = firebase.database();
    
    
    function writeQuestion(Question, option1, option2, option3,option3,answer) {
    firebase.database().ref('Questions/' + Question).set({
    Answer1: option1,
    Answer2: option2,
    Answer3: option3,
    Correct: answer
        });
    }
    
    firebase.auth().createUserWithEmailAndPassword(email, password).catch(function(error) {
    // Handle Errors here.
        var errorCode = error.code;
        var errorMessage = error.message;
    // ...
    });
    
    firebase.auth().signInWithEmailAndPassword(email, password).catch(function(error) {
        // Handle Errors here.
    var errorCode = error.code;
    var errorMessage = error.message;
        // ...
    });
    
    var user = firebase.auth().currentUser;
    
    firebase.auth().onAuthStateChanged(function(user) {
    if (user) {
    // User is signed in.
    //var displayName = user.displayName;
    var email = user.email;
    var emailVerified = user.emailVerified;
    //var photoURL = user.photoURL;
    //var isAnonymous = user.isAnonymous;
    //var uid = user.uid;
    //var providerData = user.providerData;
    // ...
    } else {
    // User is signed out.
    // ...
    }
    });
</script>





