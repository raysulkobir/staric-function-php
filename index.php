<?php include "inc/header.php";?>
    
    <div class="para">
      <?php
        class UserData{
            public $user;
            public $userid;
            const NAME = "Md.Kamal Islam";
            public static $age = 30;
            
            function __construct($userName, $userId){
                $this->user = $userName;
                $this->userid =$userId;
                echo "User Name {$this->user} and user Id:{$this->userid}";
             }
             
            public static function display(){
                 echo "Ful name is: ".UserData::NAME."<br>";
                 echo "Age is :".self::$age;
             }
            function __destruct(){
                unset($this->user);
                unset($this->userid);
           }
         }
         
         $name = "Md.Rauysul kobir";
         $id = 12345;
         $ur = new UserData($name, $id);
         echo "<br>";
         UserData:: display()
      ?>
    </div>
<?php include "inc/footer.php"; ?>