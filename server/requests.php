<?php
session_start();
include_once('../common/db.php');

// handling the registration
if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "Email already exists. Please use a different one.";
    } else {     
        $user = $conn->prepare("Insert into `users` (`username`,`email`,`password`) Values ('$username','$email','$password') ");
        $result = $user->execute();
    
        if($result){
            $_SESSION["user"] = ["username"=>$username,"email"=>$email,"userid"=>$user->insert_id];
            header("location:/test/Questions");
        }else{
            echo 'Email not registered!';
        }
    }
}
else if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $username = "";
    $_id = "";
    $query = "select * from users where email='$email' and password='$password'";
    $result = $conn->query($query);
    if ($result->num_rows == 1) {
        foreach($result as $row){
            $username=$row['username'];
            $_id=$row['id'];
        }
        $_SESSION["user"] = ["username"=>$username,"email"=>$email,"userid"=>$_id];
        header("location: /test/Questions");
    } else {
            echo 'Email not registered!';
    }
}else if (isset($_GET['logout'])) {
    session_unset();
    header("Location: /test/Questions");
}else if (isset($_POST['ask'])) {
    // print_r($_POST);
    // print_r($_SESSION);

    $title = $_POST['title'];
    $description = $_POST['description'];
    $category_id = $_POST['category'];
    $u_id = $_SESSION["user"]["userid"];
    $user = $conn->prepare("Insert into `question` (`title`,`description`,`category_id`,`u_id`) Values ('$title','$description','$category_id','$u_id') ");
    $result = $user->execute();

    if($result){ 
        header("location:/test/Questions");
    }else{
        echo 'Question not added';
    }
}
else if (isset($_POST["answer"])) {
    $answer = $_POST['answer'];
    $question_id = $_POST['question_id'];
    $u_id = $_SESSION["user"]["userid"];
    $query = $conn->prepare("Insert into `answers` (`answer`,`question_id`,`u_id`) Values ('$answer','$question_id','$u_id') ");

    $result = $query->execute();

    if($result){ 
        // print_r($result);
        header("location:/test/Questions/?q-id=$question_id");
    }else{
        echo 'Answer not Submitted';
    }
}else if(isset($_GET["delete"]));
   echo $qid = $_GET["delete"];
    $query = $conn->prepare("delete from question where id=$qid");
    $result = $query->execute();
    if($result){ 
        header("location:/test/Questions");
    }else{
        echo 'Question not deleted';
    }
?>