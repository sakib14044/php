
<?php
// Data Types Start
// $av=15.5;
// var_dump($av);


// String Start 

// $av="php is nice";
 // echo strlen($av).'<br/>';
//  echo str_word_count($av)."<br/>";
 // echo strrev($av).'<br/>';
 // echo strpos($av, "nice").'<br/>';
//  echo str_replace("php", "Java", $av);


// Constants Start(Define Variable)

 // define("VALUE", "I am learning php");
 //  function learnphp(){
 //  	return VALUE;
 //  }
 //  echo learnphp();



// Arithmatic Operator 
// $x=15;
// $y=2;
// // echo $x+$y."<br/>";
// echo $x%$y;


// assignment Operator 
// $x=30;
// $x+=2;
// $x=$x+20;
// echo $x;
// // $x=31;
// // $x%=2;
// // echo $x;


// // Comparison Operator Start
// $x=30;
// $y=30;
// // var_dump($x==$y);
// var_dump($x!=$y);


// increment/Decrement Start
// $x=5;
// // echo ++$x;

// echo --$x;




// Logical Operator (&&, ||, xor) Start

// $a=30;
// $b=40;
// if ($a==30 xor $b==40) {
//     // code...
//     echo "Right";
// }else{
//     echo "wrong";
// }
// if ($a==30 || $b==20) {
//     // code...
//     echo "Right";
// }else{
//     echo "wrong";
// }



// String Operator Start
// $x="Training With";
// $y="Live Project";
// $x.= $y;
// echo $x;


// array operator Start
// $x = array(
//     "a" => "Dhaka", 
//     "b" => "Barishal;" 
// );
// $y = array(
//     "c" => "Sylhet", 
//     "D" => "Rajshahi" 
// );
// var_dump($x==$y);


// Conditional Statements (if, if else & elseif)


// Switch Statements Start

// $coding="java";
// switch ($coding) {
//     case 'Html':
//         // code...
//         echo "i love php";
//         break;
//         case 'php':
//         // code...
//         echo "i love html";
//         break;
//         case 'CSS':
//         // code...
//         echo "i love css";
//         break;
//         case 'java':
//         // code...
//         echo "i love java";
//         break;
    
//     default:
//         // code...
//         echo "default";
//         break;
// }




// While & Do While loop Start
// $x=10;
// while ($x<=10) {
//     // code...
//     echo $x. "<br/>";
//     $x++;

// }
// $x=1;
// do{
//     echo $x."<br/>";
//     $x++;
// }while ($x<=10);


// For Loop Start

// for ($i=1; $i <=10 ; $i++) { 
//     // code...
//     echo $i."<br/>";
// }


// Foreach loop Start

// $colors =array("Blue","Red","White"); 
// foreach ($colors as $color) {
//     // code...
//     echo $color;
// }


// functions Start


// function school($name, $year){
//     echo "$name Nice schoo $year <br/>";
// }
// school("MA School is a", "1999");
// school("BA School is a", "1999");
// school("CA School is a", "1999");

// function sum($x, $y){
//     // code...
//     $z=$x+$y;
//     return $z;
// }
// echo "5+10=". sum(5,10);

// Array Start

// $x=array(3,4,5,10,15);
  // echo$x[0];
// echo count($x);
//  $length=count($x);
// for ($i=0; $i <$length ; $i++) { 
//     // code...
//     echo $x[$i]."<br/>";
// }

// $ages = array('mamun' =>10 , 'sofiq ' => 20, 'soikot' =>30 );
// echo $ages['mamun']='10';
// $ages['sofiq']='20';
// $ages['soikot']='30';

// foreach ($ages as $x => $value) {
//     // code...
//     echo $x."Age=" .$value."<br/>";
// }

// $bangla = array(

//     array("bo", 5, "Nice"),
//     array("co", 6, 22),
//     array("po", 7, 30),
//     array("do", 8, 40)

// );
//  // echo $bangla[0][2];

// for ($row=0; $row <4 ; $row++) { 
//     // code...
//     // echo "<p> row Number $row <p/>";
//     echo "<ul>";
//     for ($col=0; $col <3 ; $col++) { 
//         // code...
//         echo "<li>".$bangla[$row][$col]."</li>";
//     }
//     echo "</ul>";
// }


// Shorting array start
// $shorting=array("sakib","rakib","sumon", "barkot");
// $shorting=array(25, 30,40,80);

// rsort($shorting);
// $length=count($shorting);
// for ($i=0; $i <$length ; $i++) { 
//     // code...
//     echo $shorting[$i]."<br/>";
// }

 // Variable scope(Localvariable & global Variable difference)
// $x=100;
//  function test1(){
//     global $x;
//     $a=30;
//     echo $a."<br/>";
//     echo $x."<br/>";
//  }
//  function test2(){
//     $b=50;
//     echo $b;

//  }
//  test1();
//  test2();

// Super global Variable
// $x=10;
// $y=20;
// function sum(){
//     $GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];
   
// }
// sum();
//  echo $z;


// SERVAR
// echo $_SERVER['PHP_SELF'];
// echo "<br>";
// echo $_SERVER['SERVER_NAME'];
// echo "<br>";
// echo $_SERVER['HTTP_HOST'];
// echo "<br>";
// echo $_SERVER['SERVER_ADDR'];
// echo "<br>";
// echo $_SERVER['HTTP_USER_AGENT'];
// echo "<br>";
// echo $_SERVER['SCRIPT_NAME'];


// Request & Post 
// if ($_SERVER['REQUEST_METHOD'] =="POST") {
//     // code...
//     $name=$_REQUEST['name'];
//     if (empty($name)) {
//         // code...
//         echo "No";
//     }else{
//         echo "Yes";
//     }
// }


?>
<!-- <form action="" method="post">
    Username:<input type="text" name="name">
            <input type="submit" name="" value="submit">
</form> -->

<!-- Form Validation , Form required, Email Validation  --> 
<?php 
 // $errname=$erremail=$errweb=$errgender="";
 // $name=$email=$website=$comment=$gender="";
    // if ($_SERVER['REQUEST_METHOD']=="POST") {
    //     // code...
    //     if (empty($_POST['name'])) {
    //         // code...
    //         $errname="<span style='color: red;'>Name Is Required.</span>";

    //     }else{
    //         $name =validate($_POST['name']);
    //     }

        // if (empty($_POST['email'])) {
        //     // code...
        //     $erremail="<span style='color: red;'>Email Is Required.</span>";
        // }elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        //     // code...
        //     $erremail="<span style='color: red;'>Email Is Not validate.</span>";
        // }
        // else{
        //     $email  =validate($_POST['email']);
        // }


        // if (empty($_POST['website'])) {
        //     // code...
        //     $errweb="<span style='color: red;'>website Is Required.</span>";
        // }elseif (!filter_var($_POST['website'], FILTER_VALIDATE_URL)) {
        //     // code...
        //     $errweb="<span style='color: red;'>website Is Not validate.</span>";
        // }
        // else{
        //     $website=validate($_POST['website']);

        // }
        
        
        // $comment=($_POST['comment']);
        // if (empty($_POST['gender'])) {
        //     // code...
        //     $errgender="<span style='color: red;'>Gender Is Required.</span>";
        // }else{
        //     $gender =validate($_POST['gender']);
        // }
        

        // echo "Name:".$name."</br>";
        // echo "email:".$email."</br>";
        // echo "website:".$website."</br>";
        // echo "comment:".$comment."</br>";
        // echo "gender:".$gender."</br>";
    // }
    // function validate($data){
    //     $data=trim($data);
    //     $data=stripcslashes($data);
    //     $data=htmlspecialchars($data);
    //     return $data;

    // }
 ?>
<!-- <div class="container"> -->
    <!-- <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <table>
            <p style="color: red;">* Mark Are Required</p>
            <tr> -->
                <!-- <td>Name</td>
                <td>
                    <input type="text" name="name">* <?php echo $errname;?>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="email" name="email">*<?php echo $erremail;?>
                </td>
            </tr> -->
            <!-- <tr>
                <td>Website</td>
                <td>
                    <input type="text" name="website">*<?php echo $errweb;?>
                </td>
            </tr>
            <tr>
                <td>Comments</td>
                <td>
                    <textarea rows="5" cols="20" name="comment"></textarea>
                </td>
            </tr> -->
            <!-- <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="gender" value="male">male
                    <input type="radio" name="gender" value="female">female*<?php echo $errgender;?>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submite" value="submite">
                </td>
            </tr>

        </table> -->
<!--     </form>
</div> -->

<!-- Date Time  -->

<?php 
// <!-- Date Time  -->
   // echo date("d/m/Y")."<br>";  
   // echo date("l")."<br>";  
   // // Defalt
   // echo date("h:i:sa")."<br>"; 

   // date_default_timezone_set("asia/dhaka");
   // echo date("h:i:sa")."<br>";
    
    // File Handleing or read
  // echo readfile("text.txt");



// File Open/ Read/ Close 

// $myfile =fopen("text.txt","r") or die("File Not Found");
 // echo fread($myfile, filesize("text.txt"));
// echo fgets($myfile);
// echo fgetc($myfile);
// while (!feof($myfile)) {
    // code...
    // echo fgets($myfile). "<br>";
//     echo fgetc($myfile). "<br>";
// }
//  fclose($myfile);



// $createfile =fopen("new.txt", "w") or die("File Not Found");
// $one="Sakibdsgsdfb";
// fwrite($createfile, $one);
// fclose($createfile);
?>
<!-- File/ Image Upload  -->
<?php 
    // if (isset($_FILES['image'])) {
        // code...
        // $image   = $_FILES['image']["name"];
        // $tmp_name= $_FILES['image']["tmp_name"];
        // move_uploaded_file($tmp_name, "image/".$image);
        // echo "successful";
    // }
?>
<!-- <form method="post" action="" enctype="multipart/form-data">
    <input type="file" name="image">
    <input type="submit" name="submit">
</form> -->

<!-- cookie  -->
<?php 
    
    
    // if (!isset($_COOKIE['Visiter'])) {
    //     // code...
    //     setcookie("Visiter", "1", time()+86400, "/") or die("Not Found");
    //     echo "Success";
    // }else{
    //     echo "string";
    // }

?>

<!-- advance Filter  -->
<!-- <table>
    <tr>
        <td>Filter NAme</td>
        <td>Filter id</td>
    </tr> -->
    <?php 

        // foreach (filter_list() as $id => $filter) {
            // code...
            // echo $filter.filter_id($filter)."<br>";
        // }
    ?>
<!-- </table> -->
<?php 
    // $string="<h1>I AM Learning English</h1>";
    // $sanitize=filter_var($string, FILTER_SANITIZE_STRING);
    // echo $sanitize;

//     $int=50.5;
//     if ($filter_var($int, FILTER_VALIDATE_INT)) {
//         // code...
//         echo "Validate";
//     }else{
//         echo " Not VAlidate";
//     }

        // $int = 50.6;
        // if (filter_var($int, FILTER_VALIDATE_INT)) {
        //     echo("Variable is an integer");
        // } else {
        //     echo("Variable is not an integer");
        // }


            // advance filter 

        // $intnum =300;
        // $maxnum =1;
        // $minnum =200;
        // if (filter_var($intnum, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$minnum, "max_range"=>$maxnum))) === false) {
        //       echo("Variable value is not within the legal range");
        //     } else {
        //       echo("Variable value is within the legal range");
        //     }
        // function divide($dividend, $divisor) {
        //   if($divisor == 0) {
        //     throw new Exception("Division by zero");
        //   }
        //   return $dividend / $divisor;
        // }

        // try {
        //   echo divide(5, 0);
        // } catch(Exception $e) {
        //   echo "Unable to divide.";
        // }
 ?>
<!-- Explode & Implode Function -->
<!-- Explode & Implode Function Making array & marge Arry  -->

 <?php
   // $mystring ="I Am Learning PHP";
   //     $check=explode(" ", $mystring);
   //     echo $check["3"];

       // $mystring =array("I", "Am", "Learning", "PHP");
       // echo implode(" ", $mystring);
 

?>

<!-- Cace Change  -->
<!-- Cace Change: Can change Input Value Uppeer/lower -->









