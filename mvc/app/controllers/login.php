<?php
class login extends Controller
{
    function index()
    {
        $message = '';
        if (isset($_POST["btnSubmit"])) {
            $connection = DBConnection::getInstance()->getConnection();
            $stmt       = $connection->prepare("SELECT password FROM users WHERE username=?");
            $stmt->execute(array(
              $_POST["username"]
            ));
            if ($row = $stmt->fetch())
              if(password_verify($row["password"], $_POST["password"])) header('location: /home/index');
            else
                $message = 'Invalid username or password!';
        }
        $this->view('/login/index', ["message" => $message]);
    }
}
?>