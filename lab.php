<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        span{
            color:red;
        }
    </style>
</head>
<body>
    <h1>Applecation name:AAST_BIS class regestration</h1>
    <form action="<?php $_php_self ?>" method="GET">
<table>
<tr>
    <td><label for="name">Name</label></td>
    <td><input type="text" name="name">
<?php
if(empty($_GET["name"]) ){
   $nameerr=print"<span>*Name is required</span>";
       }
    ?></td>
</tr>
<tr>
    <td><label for="email">Email</label></td>
    <td><input type="text"name="email"><?php 
$email= " ";
if(empty($_GET["email"])){
    $emailerr=print"<span>*Email is required</span>";
} ?></td>
    

</tr>
<tr>
    <td><label for="group">Group #</label></td>
    <td><input type="text"name="group">
    <?php
    if(empty($_GET["group"])){
        $grouperr=print"<span>*Group is required</span>";
        ;
    }
    
    ?>
</td>
    
</tr>
<tr>
    <td><label for="classde">Class Details</label></td>
    <td><textarea name="classde" id="" cols="10" rows="10"></textarea>
    <?php if(empty($_GET["classde"])){
        $classdeerr=print"<span>*Class details is required</span>";
    }?></td>
   
</tr>

<tr>
    <td><label for="gender">gender</label></td>
    <td><input type="radio" name='gender' value="male">male
    <input type="radio" name='gender'value="female">female</td>
</tr>

<tr>
    <td><label for="course">Select Courses</label></td>
    <td>Select courses: <select name="lang[]" multiple class="form-control">
                    <option value=""disabled selected>Choose option</option>
                    <option value="PHP">PHP</option>
                    <option value="Java Script">Java Script</option>
                    <option value="MySQL">MySQL</option>
                    <option value="HTML">HTML</option>
                    

</select></td>
</tr>
<tr>
    <td><label for="agree">Agree</label></td>
    <td><input type="checkbox"></td>
</tr>

</table>
<input type="submit">

    </form>

    
</body>
</html>









<?php
$email= " ";
 $name= "";
 $gender = "";
 $courses ="";
 $classde ="";
  $lang = " ";
 if(!empty($_GET["email"])){
    echo"Email:" .$_GET['email']. "<br>";
} 

 if(!empty($_GET["group"])){
    echo"Group:" .$_GET['group']. "<br>";
    
} 
if(!empty($_GET["classde"])){
    echo"Class details:" .$_GET['classde']. "<br>";
}

if(!empty($_GET["courses"])){
    echo"courses selected:" .$_GET['courses']. "<br>";
}
 if(!empty($_GET["name"]) ){
echo"Name:" .$_GET['name']. "<br>";
}

if (!empty($_GET['lang'])) {
            echo "Selected course :" ;
            foreach ($_GET['lang'] as $selected) {
                echo  $selected." ";
            }
        } 
         








?>









