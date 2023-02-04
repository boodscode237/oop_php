<?php
 class User {
    public string $username;
    private string $email;
    public string $role = 'member';
    public function addFriend() : string {
        return "$this->username added a new friend";
    }

    public function message() : string {
        return "$this->email added a new friend";
    }

    public function __construct($username, $email){
        $this->username = $username;
        $this->email = $email;
    }

    // getters
     public function getEmail(): string
     {
        return $this->email;
     }


    // setters

     /**
      * @param string $email
      */
     public function setEmail(string $email): void
     {
         if (strpos($email, '@') > -1){
             $this->email = $email;
         }
     }
 }


 class AdminUser extends User {
    public int $level;
    public string $role = 'admin';
    public function __construct($username, $email, $level)
    {
        $this->level = $level;
        parent::__construct($username, $email);
    }
 }

 $userOne = new User('joe', 'joe@yandex.ru');
 $userTwo = new User('viva', 'viva@june.ru');
 $userThree = new AdminUser('admin1', 'admin1@text.ru', 5);

 echo $userThree->username . '<br>';
 echo $userThree->getEmail() . '<br>';
 echo $userThree->level . '<br>';
 echo $userOne->role . '<br>';
 echo $userOne->message() . '<br>';

// print_r(get_class_vars('User'));
// print_r(get_class_methods('User'))

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP OOP</title>
</head>
<body>

</body>
</html>
