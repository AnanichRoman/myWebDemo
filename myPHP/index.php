<?php
  include("common.php");
?>


<script src="https://www.gstatic.com/firebasejs/4.0.0/firebase.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.0.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.0.0/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.0.0/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.0.0/firebase-messaging.js"></script>





<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="viewport" content="width=device-width, initial-scale=1">

 

<title>AnanichRV blah blah</title>
<META NAME="description" CONTENT="Something">
<META NAME="keywords" CONTENT="Dsc.">
<?php
headersection();
topnavigator();
?>
<div id="contentWrapper">
    <div id="leftColumn1">
      <div id="leftColumnContent">
<?php
					echo '<div id="login" >';
					echo "<fieldset>\n";
					echo "<h4>LOGIN FORM</h4>";					
					echo "<div id=\"login\" >\n"; 
					echo "<form id=\"form1\" method=\"post\" action=\"index.php\" enctype=\"multipart/form-data\">\n"; 
					echo "<label for=\"inputtext1\">YOUR EMAIL</label>\n"; 
					echo "<input onfocus=\"this.value=''\" value=\"Email\" id=\"Email\" type=\"text\" name=\"Email\" value=\"\" />\n"; 
					echo "<label for=\"inputtext2\">PASSWORD</label>\n"; 
					echo "<input onfocus=\"this.value=''\" value=\"Password\" id=\"Password\" type=\"password\" name=\"Password\" value=\"\" />\n"; 
					echo "<input type=\"hidden\" name=\"redirect\" value=\"#\" />\n"; 
					echo "<h3><input id=\"autologin\" type=\"checkbox\" name=\"autologin\" value=\"autologin\" />Log me on automatically</h3>\n"; 
					echo "<input id=\"inputsubmit1\" type=\"submit\" name=\"login\" value=\"LOGIN\" onclick=\"create('Lithiem28@gmail.com','123123')\"/>\n"; 
					echo "</form>"; 
					echo "<div class=\"forgot\">\n"; 
					echo "<ul>"; 
					echo "<li><a href=\"#\">I forgot my password</a></li>\n"; 
					echo "<li><a href=\"#\">Create an account</a></li>\n"; 
					echo "</ul>"; 
					echo "</div>";
					echo "</div>";
					echo "</fieldset>\n";
					echo "</div>"; 					
					leftmenuitem();
					?>	
      </div>
    </div>
    
    
    
    <div id="rightColumn1">
	
<h5>Latest Posts</h5>
<div class="box">
				<div class="content">
					<ul>
					<?php
					latestpost();
					?>
					</ul>
				</div>
			</div>
<h5>Latest Members</h5>
		<div class="box">
				<div class="content">
					<ul>
					<?php
					latestuser();
					?>
					</ul>
				</div>
			</div>
	
		</div>
   
    <div id="content">
	<h2>This form will be used to add Questions to Firebase db</h2>
	<div class="info">WorkInProgress : may 2017</div>
     
	<p>If you'll ever wounder why you have to add only a single question at a time and not the full test, it's because it's much easier to track bad questions and rip them off from table by using some script which will also rib them from tests. -___-</p>
	
	<p><form data-bind="submit: addQuestionToFirebase">
        <p>Question: </p><input type="text" data-bind="value: question.question">
        <p>Answer 1: </p><input type="text" data-bind="value: question.option1">
        <p>Answer 2: </p><input type="text" data-bind="value: question.option2">
        <p>Answer 3: </p><input type="text" data-bind="value: question.option3">
        <p>Correct answer: </p><input type="text" data-bind="value: question.correctAnswerNum">
        <button type="submit">Add to FireBase</button>
    </form></p>
	

	<h2>This Form will be used to create Tests from the questions(look above). </h2>
      <p>The idia so far is to create a test from a list of questions(WorkInProgress it'll be here next time i'll post this).</p>
      <p><form data-bind="submit: addTestToFirebase">
        <p>Name: </p><input type="text" data-bind="value: test.name">
        <p>Just input the names of Questions from list(DO THE LIST): </p><input type="text" data-bind="value: test.questions">
        <button type="submit">Add to FireBase</button>
    </form></p>
   
</div>

<?php
footernavigator();
    
    
if ( isset( $_POST['login'] ) ) { 
    $firstname = $_POST['Email']; 
    $lastname = $_POST['Password'];
}

?>
<script>
  // Initialize Firebase
  var config = {
    //NOT ON GIT
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
    };
     
     function create(email,password){
    firebase.auth().createUserWithEmailAndPassword(email, password).catch(function(error) {
    // Handle Errors SADASDASDASDASDASDhere.
        var errorCode = error.code;
        var errorMessage = error.message;
    // ...
    });
     }
     
    function logIN(email,password){
    firebase.auth().signInWithEmailAndPassword(email, password).catch(function(error) {
        // Handle ErrASDASDASDASDASDASors here.
    var errorCode = error.code;
    var errorMessage = error.message;
        // ...
    });
    }
   
    
    
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
    };
    });
</script>
</html>