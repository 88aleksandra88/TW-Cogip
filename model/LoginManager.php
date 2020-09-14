<?php
require_once('./model/Connection.php');
// require_once('./model/errors.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class LoginManager extends Connection {
      public $er = "TEST";
      public function getError(){
            return $this->er;
      }

      function register(){
            $db = $this->dbConnect();
            session_start();
            $errors = array();
            $displayError = "";

            $username = "";
            $email    = "";
            $errors = array(); 
            $password = "";
            //$emailSanitized = "";

            $db = mysqli_connect('mysqldb', 'root', 'root', 'cogip');

            // REGISTER USER
            if (isset($_POST['reg_user'])) {
                  // receive all input values from the form
                  $username = mysqli_real_escape_string($db, $_POST['username']);
                  $email = mysqli_real_escape_string($db, $_POST['email']);
                  //$emailSanitized = filter_var($email, FILTER_SANITIZE_EMAIL);
                  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
                  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
                  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                  // form validation: ensure that the form is correctly filled ...
                  // by adding (array_push()) corresponding error unto $errors array
                  if (empty($username)) { array_push($errors, "Username is required"); }
                  if (empty($email)) { array_push($errors, "Email is required"); }
                  if (empty($password_1)) { array_push($errors, "Password is required"); }
                  if ($password_1 != $password_2) {
                        array_push($errors, "The two passwords do not match");
                  }

                  // first check the database to make sure 
                  // a user does not already exist with the same username and/or email
                  $user_check_query = "SELECT * FROM registration WHERE username='$username' OR email='$email' LIMIT 1";
                  $result = mysqli_query($db, $user_check_query);
                  $user = mysqli_fetch_assoc($result);
                  
                  if ($user) { // if user exists
                        if ($user['username'] === $username) {
                              array_push($errors, "Username already exists");
                        }

                        if ($user['email'] === $email) {
                              array_push($errors, "email already exists");
                        }
                  }

                  // Finally, register user if there are no errors in the form
                  if (count($errors) == 0) {
                        echo "On met tout dans la DB ! ";  // Test d'erreurs affichage
                        $password = ($hashed_password);

                        $query = "INSERT INTO registration (username, email, password) 
                                    VALUES('$username', '$email', '$password')";
                        mysqli_query($db, $query);
                        $_SESSION['username'] = $username;
                        $_SESSION['success'] = "You are now logged in";
                        header('location: ?action=login');
                  } else {
                        foreach($errors as $error){
                              $displayError .= '- ' . $error . '<br />';
                        }
                        return $displayError;
                  }
            }
      }
           
// LOGIN  PART
       function login(){
            $errors = array();
            $displayError = "";
            $db = mysqli_connect('mysqldb', 'root', 'root', 'cogip');

            if (isset($_POST['login_user'])) {
                  $username = mysqli_real_escape_string($db, $_POST['username']);
                  $password = mysqli_real_escape_string($db, $_POST['password']);
            
                  if (empty($username)) {
                         array_push($errors, "Username is required");

                        // $errors = "Empty Username";
                  }
                  if (empty($password)) {
                    array_push($errors, "Password is required");
                        // $pwdError = "Empty Password";
                  }
                  
                  if (count($errors) == 0) {
                        $password = password_hash($password, PASSWORD_DEFAULT);
                        $query = "SELECT * FROM registration WHERE username='$username' AND password='$password' ";
                        $results = mysqli_query($db, $query);
                        if (mysqli_num_rows($results) == 1) {
                              session_start();
                              echo "Vous êtes connecté ! ";
                              $_SESSION['username'] = $username;
                              $_SESSION['password'] = password_hash($password, PASSWORD_DEFAULT);
                              $_SESSION['success'] = "You are no connected !";
                              header('location:   ./index.php');
                        }else {
                               array_push($errors, "Wrong username/password combination");
                              // return  "Wrong information or account inexistant";
                              foreach($errors as $error){
                                    $displayError .=  '- ' . $error;
                              }
                              return $displayError;
                        }
                  } else {
                        foreach($errors as $error){
                              $displayError .= '- ' . $error . '<br />';
                        }
                        return $displayError;
                  }
            }
      }
}