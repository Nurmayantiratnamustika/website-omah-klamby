<html>
<head>
<title>Edit Pengguna</title>
<style>
* {
  box-sizing: border-box;
}
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #184153;
  border: none;
  color:#FFFFFF;
  text-align: center;
  font-size: 15px;
  padding: 10px;
  width: 250px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
  color: white;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}



input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>
<?php
include "koneksi.php";
session_start();
$sesi=$_SESSION["akun_id"];
$query = "SELECT * FROM user WHERE id='$sesi'";
$sql   = mysqli_query($connect, $query); 
$data = mysqli_fetch_array($sql);
?>

<div class="container">
  <form action="" method="post">
  <div class="row">
    <div class="col-25">
      <label for="fname">Username</label>
    </div>
    <div class="col-75">
      <input type="text" id="name" name="username" placeholder="Your name.." value="<?php echo $data['username'];?>">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Password</label>
    </div>
    <div class="col-75">
    <input type="password" id="password" placeholder="Enter Password" name="psw" value="<?php echo $data['password']; ?>">
    </div>
  </div>
  <div class="row">
    <input type="submit" name="edit" value="Submit">
  </div>
  <div class="row">
  <input type="reset" value="Batal">
  </div>
  <br><br>
  <button class="button"><a href="history.php?id=<?php echo $sesi?>"><span>History User</span></a></button>
  <button class="button"><a href="index.php"><span>Home</span></button>
  </form>
</div>

<?php
if(@$_POST['edit']){
  $nama=$_POST['username'];
  $pass=$_POST['psw'];

$query = "UPDATE user SET username='".$nama."', password='".$pass."', level=2 WHERE id='".$sesi."'";
$sql   = mysqli_query($connect, $query); 

header("location: ?page=profil");
}


?>


</body>
</html>
