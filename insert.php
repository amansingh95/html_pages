<?php
    include("connection.php");
   $sql="insert into reg (name,rollno,gender) VALUES(

    '".$_REQUEST["name"]."',
    '".$_REQUEST["rollno"]."',
    '".$_REQUEST["gender"]."'
    
)";
mysqli_query($con,$sql);


//view code
$sql="SELECT * FROM reg";
    $res=mysqli_query($con,$sql);
     $result = array();
    while($row=mysqli_fetch_array($res))
    $DATA = array('name' => $row[1],
                'gender'  => $row[2],
                'rollno'  => $row[3]
    );
 
   
   echo json_encode($DATA);



?>