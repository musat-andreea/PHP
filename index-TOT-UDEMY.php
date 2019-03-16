+<html>
<head>
  <title>
  </title>
</head>
<body>
  HELLO WORLD
  <?php
    echo "Hello World!";
  ?>
  <?php
  #ytfulvivo
  //ngxyjtxu
  /*gcjyc
  ouo8
  uyviiyv*/
  ?>
  <div style='<?php echo "border: 1px solid red"; ?>'>Red border!</div>
  <?="My text here";?>
  <br>
  <?php
    $welcome = "Hello, guest!";
    echo $welcome;
   ?>
   <br>
   <?php
      $integer = 1;
      $float = 1.6;
      $string = "letters";
      echo $float;
    ?>
    <br>
    <?php
      $Name = "Kalob";
      echo "My name is " . $Name;
    ?>
    <br>
    <?php
      $constr = "My name is ";
      $and = "i like pink";
      $space = " ";
      $nam = "Amy";
      echo $constr . $nam . $space . $and;
     ?>
     <br>
     <?php
      $string = "The Complete Web Developer";
      $replace = str_replace("The", "I am a", $string);
      echo $replace;
      ?>
      <br>
      <?php
        $string = "My name is Kalob";
        echo "Your instructor is " . substr($string, 11, 5);
       ?>
       <br>
       <?php
          $string = "first letter capital";
          echo ucwords($string);
        ?>
        <br>
        <?php
          echo strtoupper("big letters"); //same lower
          echo "<br />";
          $string = "all little letters";
          echo strtoupper($string);
         ?>
         <br>
         <?php
          $element = htmlentities("<font>");
          echo "Element is &rarr; " . $element;
          echo "<br />";
          echo "!@#$%^&*()-_+=|{}?<,";
          ?>
          <br>
          <?php
            $arr = array("Bob", "Tom", "Tim");
            echo $arr[0] . ", " . $arr[1] ." and " . $arr[2] . " are friends.";
           ?>
           <?php
            $cars = array("Kalob" => "Audi", "Richman" => "Bently");
            echo "Kalob likes " . $cars['Kalob'] . ".";
              echo "<br />";
            echo "I like " . $cars['Richman'];
            ?>
            <br>
            <?php
              $multiArray = array (
                                  "names" => array(
                                                  "Bob", "Tom", "Tim"
                                  ),
                                  "ages" => array(
                                                  29, 21, 46
                                  )
                                );
              echo $multiArray['names'][0] . " is " . $multiArray['ages'][2] . " years old";
              echo "<br />";
              $personA['names'][0] = "Bob";
              $personA['ages'][0] = "46";
              echo $personA['names'][0] . " is " . $personA['ages'][0] . " years old";
             ?>
             <br>
             <?php
                $Kalob = array(
                  "Siblings" => array(
                                      "Nathan", "Echo", "Talena"
                  ),
                  "Posts" => array(
                                  123456789, 123456788, 123456787
                  ),
                  "Last_Active" => "2 hours ago"
                );
                echo $Kalob['Siblings'][0] . " " . $Kalob['Siblings'][1] . " " . $Kalob['Siblings'][2] . " are the brother and sisters of Kalob";
              ?>
              <br>
              <?php
                  $str = "The quick brown fox jumps over the lazy dog.";
                $exploded = explode(" ", $str, 4);
                  foreach($exploded as $e) {
                    echo $e . "<br />";
                  }
               ?>
               <?php
                  $str = "My name is Medeea.";
                  $exploded = explode(" ", $str);
                  foreach($exploded as $e) {
                    echo $e . "&rarr;";
                  }
                ?>
                <br>
                <?php
                  $names = array("Bob", "Tim", "Tom");
                  $newNames = implode(", ", $names);
                  echo "Three names are " . $newNames;
                 ?>
                 <br>
                 <br>
                 <?php
                    $UserA = "Bob|39|3|Yes|Benz";
                    $Part = explode("|", $UserA);
                    echo $Part[0] . " is " . $Part[1] . " years old. <br />";
                    echo $Part[0] . " has " . $Part[2] . " kids. <br />";
                    if($Part[3]=="yes") {
                      echo "Married.";
                    } else {
                      echo "Not Married.";
                    }
                    echo "<br /> And drives a " . $Part[4] . ".";
                  ?>
                  <br>
                  <?php
                    $Number = 99;
                    if($Number==100) {
                        echo "Your number is one hundred!";
                    } else {
                        echo "Your number is <u>not</u> 100. It is: " . $Number;
                    }
                    ?>
                    <br>
                    <?php
                      $Number = 10;
                      if($Number>15) {
                        echo "Our number is larger than 15";
                      } elseif($Number>=10) {
                        echo "Our number is 10+";
                      } else {
                        echo "Our number is less than 10";
                      }
                     ?>
                     <br>
                     <?php
                        $food = "Star Fruit";
                        switch($food){
                          case "Banana":
                            echo "I have a banana!";
                            break;
                          case "Apple":
                            echo "Apples are healthy for you";
                            break;
                          case "Star Fruit":
                            echo "Taste the stars, with a star fruit";
                            break;
                          default:
                            echo "There are no matches";
                            break;
                        }
                      ?>
                      <br>
                      <?php
                        for($i = 1; $i <= 5; $i++) {
                          echo $i . " is the number <br />";
                        }
                       ?>
                       <br>
                       <?php
                          $arr = array("Apple", "Banana", "Plum", "Pear");
                          foreach($arr as $value) {
                            echo $value . " <br />";
                          }
                        ?>
                        <?php
                        $arr = array("Apple", "Banana", "Plum", "Pear");
                        foreach($arr as $key => $value) {
                          echo "Key: " . $key . " &rarr; " . $value . " <br />";
                        }
                        ?>
                        <br>
                        <?php
                          $num = 1;
                          while($num <= 5) {
                            echo $num . " &rarr; ";
                            $num++;
                          }
                         ?>
                         <br>
                         <?php
                            $num = 1;
                            do {
                                echo $num . " <br />";
                                $num++;
                            } while($num < 2);
                          ?>
                          <br>
                          <?php
                            $names = array("Nathan", "Bob", "Kalob", "Tim", "Tom");
                            foreach($names as $person) {
                              if($person=="Kalob") {
                                echo "You are: " . $person;
                                break;
                              }
                            }
                           ?>
                           <br>
                           <?php
                              $People = array("Joe", "Jon", "Jake", "Family" => array(
                                                                                      "Bob",
                                                                                      "Bill",
                                                                                      "Todd")
                              );
                              foreach($People as $name) {
                                if(is_array($name)) {
                                  continue;
                                }
                                echo $name . " ";
                              }
                           ?>
                           <br>
                           <?php
                              $array = array(1, 3, 5, 7, 11);
                              $string = "I am  a string";
                              if(is_array($array)) {
                                echo '$array is an array';
                              }
                              if(is_array($string)) {
                                echo '$string is an array';
                              }
                            ?>
                            <br>
                            <br>
                        <!--  //  #require -> opreste tot/kill/die.. -->
                            <?php
                              echo "I am taking $Course <br />";
                              include "Include_Me.php";
                              echo "I am taking $Course";
                              ?>
                              <br>
                              <?php
                                function favCar() {
                                  #echo "Audi";
                                  return "Audi";
                                }
                               ?>
                               <?php
                                echo "I really like ";
                                favCar();
                                ?>
                                <br>
                                <?php
                                echo "I really like " . favCar();
                                ?>
                                <br>
                                <?php
                                  function favFruit($name) {
                                    echo "My favorite fruit is " . $name;
                                  }
                                 ?>
                                 <?php
                                    favFruit("Banana");
                                 ?>
                                 <br>
                                 <?php
                                    $color = "blue";
                                    function favColor($name) {
                                      echo "My favorite color is " . $name;
                                    }
                                    favColor($color);
                                  ?>
                                  <br>
                                  <?php
                                  function add($a, $b) {
                                    $answer = $a + $b;
                                    return $answer;
                                  }
                                  echo "10 + 5 = " . add(10, 5);
                                  ?>
                                  <br>
                                  <?php
                                    function overTen($a, $b) {
                                      $total = $a + $b;
                                      if($total>=10) {
                                        return true;
                                      } else {
                                        return false;
                                      }
                                    }

                                    if(overTen(5, 5)==true) {
                                      echo "Our addition function said our result is equal to or greater than 10";

                                    } else {
                                      echo "Our function's result was below 10";
                                    }
                                   ?>
                                   <br>
                                   <?php
                                    function returnExample() {
                                      return "Example string here";
                                      echo "Another string here";
                                    }
                                    returnExample();
                                    echo returnExample();
                                    ?>
                                    <br>
                                    <?php
                                      define("__NAME__", "Kalob Taulien");
                                      const Favorite_Car = "Audi";

                                      echo __NAME__;
                                        echo "<br />";
                                      echo "I like " . Favorite_Car;
                                    ?>
                                    <br>
                                    <?php
                                        define("__PERSON__", "Rick Grimes");
                                        echo "This person is " . __PERSON__;
                                        echo"<br />";
                                        const __PERSON__ = "Carl Grimes";
                                        define("__PERSON__", "lori Grimes");
                                        echo "The name of person NOW is: " . __PERSON__;
                                     ?>
                                     <br>
                                     <?php
                                        $planet = "Earth";
                                        $animal = NULL;

                                        if(isset($planet)) {
                                          echo '$planet is set!';
                                        } else {
                                          echo '$planet is <u>not</u> set';
                                        }
                                        echo "<br />";

                                        if(isset($animal)) {
                                          echo '$animal is set!';
                                        } else {
                                          echo '$animal is <u>not</u> set';
                                        }
                                        echo "<br />";

                                        if(isset($coLor)) {
                                          echo '$coLor is set!';
                                        } else {
                                          echo '$coLor is <u>not</u> set!';
                                        }
                                      ?>
                                      <br>
                                      <?php
                                        $juice = "Apple";
                                        unset($juice);

                                        if(isset($juice)) {
                                          echo $juice . " is my favorite";
                                        } else {
                                          echo "Variable was destroyed";
                                        }
                                      ?>
                                      <br>
                                      <?php
                                        const __COLOR__ = "blue";
                                        if(defined("__COLOR__")) {
                                          echo "Color is set!";
                                        }
                                        if(defined("__NOT_SET__")) {
                                          echo "Not set yet!";
                                        }
                                       ?>
                                       <br>
                                      <?php
                                        function test() {

                                        }
                                        if (function_exists("test")) {
                                          echo "test() exists! This returns true!";
                                        }
                                        if(function_exists("test2")) {
                                          echo "test()2 does not exist -> false!";
                                        }
                                       ?>
                                       <br>
                                       <?php
                                       if(!isset($randomVariable)) {
                                         echo '$randomVariable does <u>not</u> exist!';
                                       }
                                       ?>
                                       <br>
                                       <form method="get" action="index.html">
                                         <input type='text' /><br />
                                         <button>Some button</button>
                                       </form>
                                       <br>
                                       <form method='get' action='index.php'>
                                         Firstname: <input type='text' name='firstname' /> <br />
                                         <input type='submit' value='submit firstname' />
                                       </form>
                                       <br>
                                       <form method='post' action='index.php'>
                                         Firstname: <input type='text' name='firstname' /> <br />
                                         <input type='submit' value='submit firstname' />
                                       </form>
                                       <br>
                                       <?php
                                        echo $_GET['string'];
                                        ?>
                                        <br>
                                        <?php
                                          $_GET['q'] = "The Complete Web Developer";
                                          $_GET['hl'] = "en";
                                          $_GET['tab'] = "wi";
                                         ?>
                                         <br>
                                         <?php
                                          $var = "A!bunch@of*characters$%^&";
                                          $encoded = urlencode($var);
                                          echo $encoded;
                                          echo "<br />";
                                          echo urldecode($encoded);
                                          ?>
                                          <br>
                                          <form method='post' action='index.php'>
                                            Name: <input type='text' name='firstname' />
                                            <input type='submit' name='submitButton' />
                                          </form>
                                          <br>
                                          <?php
                                            if(isset($_POST['submitButton'])) {
                                              echo "Your name is: " . $_POST['firstname'];
                                            }
                                          ?>
                                          <br>
                                          <?php
                                            $str = "The Complete\n Web Developer";
                                            echo $str;
                                            echo "<br />";
                                            echo nl2br($str);
                                           ?>
                                           <br>
                                        <form method='post' action='index.php'>
                                             <textarea name='message' placeholder='Write a message in here!'></textarea>
                                               <br />
                                               <button type='submit'>Submit message</button>
                                            </form>
                                            <br>
                                            <?php
                                            echo "<br />";
                                               echo "Normal message: <br />";
                                              echo $_POST['message'];
                                                 echo "<hr />";
                                              echo "nl2br message: <br />";
                                             echo nl2br($_POST['message']);
                                             ?>
                                             <br>
                                             <br>
                                             <?php
                                                $now = time();
                                                echo date("F j, Y, g:i a", $now);
                                              ?>
                                              <br>
                                              <?php
                                                echo mktime(14, 52, 3, 9, 8, 1989);
                                               ?>
                                               <br>
                                               <?php
                                                $newDate = mktime(0,0,0,1,1,2000);
                                                echo date("M d Y", $newDate);
                                                ?>
                                                <br>
                                                <?php
                                                echo time();
                                                 ?>
                                                 <br>
                                                 <?php
                                                    $number = 10;
                                                    $number2 = ($number==10 ? "Number is ten" : "Number is NOT ten");
                                                    echo $number2;
                                                  ?>
                                                  <br>
                                                  <?php
                                                      $name = "Kalb";
                                                      $msg = "Hello " . ($name=="Kalob" ? $name : "Other person");
                                                      echo $msg;
                                                   ?>
                                                   <br>
                                                   <?php
                                                    $theDay = date("M");
                                                    echo $theDay;
                                                    echo "It is " . ($theDay=="Sat" || $theDay=="Sun" ? "the weekend" : "a business day");
                                                    ?>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <?php

$job = "developer";

function findJob($title) {
return ($title == "developer" ? "dev" : "nondev");
}

echo findJob("NInja");

?>
<br>
<?php
if(!isset($_SESSION)) {
  session_start();
}
#  $_SESSION['Course'] = "The Complete Web Developer";
#echo $_SESSION['Course'];
$pass = urldecode($_GET['p']);
if($pass=="TCWD") {
  $_SESSION['Pass_Correct'] = 1; //true
}
if(isset($_SESSION['Pass_Correct'])) {
  echo "You entered the correct password at least once!";
} else {
  echo "You have not entered the correct password. Try again";
}
?>
<?php
echo "<br />";
echo "<br />";
if(!isset($_SESSION)){
  session_start();
}
  $_SESSION['a'] = "alfred";
  $_SESSION['b'] = "bob";

  foreach($_SESSION as $s => $b) {
    unset($_SESSION['s']);
  }
  unset($_SESSION['a']);
  echo $_SESSION['a'];
  echo $_SESSION['b'];
 ?>
 <br>
<?php
  if(!isset($_SESSION)) {
    session_start();
  }
  if(!isset($_SESSION['Count'])) {
    $_SESSION['Count'] = 0;
  }

  echo "You have refreshed: " . $_SESSION['Count'] . " times";
  $_SESSION['Count']++;
 ?>
</html>
