(function () {
    var uri = {
        questionsUri : 'https://farebaseUpload' //FIX!!!!!!!!
    };

    var connection = {
        reference : function (uri) {
            return new Firebase(uri);
        }
    };

    var viewModel = {
        question : {
            question : ko.observable(),
            option1 : ko.observable(),
            option2 : ko.observable(),
            option3 : ko.observable(),
            correctOption : ko.observable()
        };
    };

    viewModel.addQuestionToDb = function (formElement) {
        var db = connection.reference(uri.questionsUri);

        console.log(viewModel.question.option1());
        
        
        db.push({
            question: viewModel.question.question(),
            option1 : viewModel.question.option1(),
            option2 : viewModel.question.option2(),
            option3 : viewModel.question.option3(),
            correctOption : viewModel.question.correctAnswerNum()
        });
    };

    ko.applyBindings(viewModel);
}());

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
