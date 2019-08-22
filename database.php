<html>
<head><title>Database</title>
</head>
<body>
<?php
$servername="121.200.55.60:3307";
$username="2019UIT1096";
$password="2019UIT1096";
$dbname="2019UIT1096";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
   die("connection failed:".$conn->connect_error);
}
$sql="SELECT s_no,enrollment_no,student_name,course_name FROM students";
$result=$conn->query($sql);
if($result->num_rows>0)
{   echo "<table border='5'>";
 <tr>
 <th>s_no</th>
 <th>enrollment_no</th>
 <th>Name</th>
 <th>Department</th>
   while($row=$result->fetch_assoc())
{  echo <tr><th>"s_no:".$row["s_no"]</th>.<tr>"-enrollment_no:"</tr>.<th>$row["enrollment_no"]</th>."<tr>Name</tr>".<th>$row["student_name"]</th>."<tr>Department</tr>"$
}echo "</table>";
}else
{
 echo "0 results";
}
$conn->close();
?>
</body>
</html>




