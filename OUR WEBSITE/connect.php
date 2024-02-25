<?php
$name=$_POST["name"];
$Gender=$_POST["Gender"];
$age=$_POST["age"];
$Address1=$_POST["Address1"];
$Address2=$_POST["Address2"];
$Country=$_POST["Country"];
$pin=$_POST["pin"];
$Place=$_POST["Place"];
$Phone=$_POST["Phone"];
$Email=$_POST["Email"];
$Title=$_POST["Title"];
$complaint_section=$_POST["complaint_section"];
//Database Connection
$conn =new mysqli('localhost','root','','registration');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt_>$conn->prepare("insert into registration(name,Gender,age,Address1,Address2,Country,pin,Place,Phone,Email,Title,complaint_section)
    values(?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssssisisss",$name,$Gender,$age,$Address1,$Address2,$Country,$pin,$Place,$Phone,$Email,$Title,$complaint_section);
    $stmt->execute();
    echo"Registration Successful........";
    $stmt->close();
    $conn->close();
}

?>