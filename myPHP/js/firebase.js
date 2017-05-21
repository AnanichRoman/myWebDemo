<script src="https://www.gstatic.com/firebasejs/4.0.0/firebase.js"></script>
<script>
  // Initialize Firebase
  // TODO: Replace with your project's customized code snippet
  var config = {
    apiKey: "<API_KEY>",
    authDomain: "<PROJECT_ID>.firebaseapp.com",
    databaseURL: "https://<DATABASE_NAME>.firebaseio.com",
    storageBucket: "<BUCKET>.appspot.com",
    messagingSenderId: "<SENDER_ID>",
  };
  firebase.initializeApp(config);
</script>

var database = firebase.database();

function writeUserData(Question, option1, option2, option3,option3,answer) {
  firebase.database().ref('Questions/' + Question).set({
    Answer1: option1,
    Answer2: option2,
    Answer3: option3,
    Correct: answer
  });
}

