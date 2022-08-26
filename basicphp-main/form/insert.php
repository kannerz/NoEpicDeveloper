<html>
<title>𝓜𝓐𝓥𝓘𝓝 show info</title>
<link rel="icon" type="image/x-icon" href="https://images.uncyc.org/th/thumb/6/63/%E0%B9%80%E0%B8%9E%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%99%E0%B8%A1%E0%B8%B2%E0%B8%A7%E0%B8%B4%E0%B8%99.gif/200px-%E0%B9%80%E0%B8%9E%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%99%E0%B8%A1%E0%B8%B2%E0%B8%A7%E0%B8%B4%E0%B8%99.gif">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<body>
  <?php
  include("config.inc.php");
  ?>
  <?php
  $firstname = $_POST["fname"];
  $name = $_POST["name"];
  $lastname = $_POST["lname"];
  $sex = $_POST["Sex"];
  $birthdate = $_POST["BD"];
  $address = $_POST["ad"];
  $phone = $_POST["PNum"];
  $email = $_POST["Email"];
  ?>

  𝓦𝓮𝓵𝓬𝓸𝓶𝓮 <?php echo $_POST["fname"]; ?>
  <?php echo $_POST["name"]; ?>
  <?php echo $_POST["lname"]; ?><br>
  𝓖𝓮𝓷𝓭𝓮𝓻 <?php echo $_POST["Sex"]; ?><br>
  𝓨𝓸𝓾𝓻 𝓑𝓲𝓻𝓽𝓱𝓭𝓪𝓽𝓮 <?php echo $_POST["BD"]; ?><br>
  𝓨𝓸𝓾𝓻 𝓐𝓭𝓭𝓻𝓮𝓼𝓼 <?php echo $_POST["ad"]; ?><br>
  𝓨𝓸𝓾𝓻 𝓔𝓶𝓪𝓲𝓵 <?php echo $_POST["Email"]; ?><br>
  𝓨𝓸𝓾𝓻 𝓟𝓱𝓸𝓷𝓮 𝓝𝓾𝓶𝓫𝓮𝓻 <?php echo $_POST["PNum"]; ?><br><br>


  <?php
  $sql = "INSERT INTO tbl_member (id, firstname, name, lastname, sex, birthdate, address, phone, email) VALUES ('', '$firstname', '$name', '$lastname', '$sex', '$birthdate', '$address', '$phone', '$email')";

  if (mysqli_query($conn, $sql)) {
    echo "░▒▓█►𝔸𝕕𝕕 𝕕𝕒𝕥𝕒 𝕤𝕦𝕔𝕔𝕖𝕤𝕤𝕗𝕦𝕝𝕝𝕪◄█▓▒░";
  } else {
    echo "░▒▓█►𝔸𝕕𝕕 𝕕𝕒𝕥𝕒 𝕗𝕒𝕚𝕝𝕦𝕣𝕖◄█▓▒░";
  }
  $conn->close();
  ?>

</body>

<style type="text/css">
  body {
    font-family: 'Athiti', sans-serif;
    font-family: 'Itim', cursive;
  }
</style>
<style>
  body {
    background-image: url('https://c.tenor.com/KG8jAWS0srYAAAAd/jackie.gif');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
  }
</style>

</html>