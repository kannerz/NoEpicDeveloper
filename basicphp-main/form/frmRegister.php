<!DOCTYPE html>
<title>𝓜𝓐𝓥𝓘𝓝 Register form</title>
<link rel="icon" type="image/x-icon" href="https://images.uncyc.org/th/thumb/6/63/%E0%B9%80%E0%B8%9E%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%99%E0%B8%A1%E0%B8%B2%E0%B8%A7%E0%B8%B4%E0%B8%99.gif/200px-%E0%B9%80%E0%B8%9E%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%99%E0%B8%A1%E0%B8%B2%E0%B8%A7%E0%B8%B4%E0%B8%99.gif">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>formregis</title>
</head>

<body>
  <?php
  include("header.php");
  ?>
  <main>
    <div class="container">
      <div class="card">
        <div class="card-header">
          RegisterForm
        </div>
        <div class="card-body">
          <form name="form1" action="insert.php" method="post">
            <div class="row">
              <!--row1-->
              <div class="col-md-2">
                <label class="form-label">Firstname</label>
                <select class="form-select" id="fname" name="fname" aria-label="Default select example">
                  <option value="Mr.">Mr.</option>
                  <option value="Ms.">Ms.</option>
                  <option value="Mrs.">Mrs.</option>
                </select>
              </div>
              <div class="col-md-4">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter your Name">
              </div>
              <div class="col-md-4">
                <label for="lname" class="form-label">Lastname</label>
                <input type="text" class="form-control" id="lname" placeholder="Enter your Lastname" name="lname">
              </div>
            </div>
            <div class="row">
              <!--row2-->
              <div class="col-md-3">
                <label for="Sex" class="form-label">Sex</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Sex" id="Sex" value="Male" checked>
                  <label class="form-check-label" for="">
                    Male
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="Sex" id="Sex" value="Female">
                  <label class="form-check-label" for="">
                    Female
                  </label>
                </div>
              </div>
              <div class="col-md-3">
                <label for="BD" class="form-label">Date of Birth</label>
                <input type="date" class="form-control" id="BD" placeholder="dd/mm/yyyy" name="BD">
              </div>
              <div class="col-md-6">
                <label for="ad" class="form-label">Address</label>
                <input type="text" class="form-control" id="ad" placeholder="Enter your Address" name="ad">
              </div>
              <div class="col-md-3">
                <label for="PNum" class="form-label">Phone Number</label>
                <input type="number" class="form-control" id="PNum" placeholder="Enter your phone number" name="PNum">
              </div>
              <div class="col-md-4">
                <label for="Email" class="form-label">Email</label>
                <input type="email" class="form-control" id="Email" placeholder="Enter your Email" name="Email">
              </div>
            </div>
            <br>
            <input type="submit" href="insert.php" class="btn btn-success btn-primary">
            <input type="reset" href="frmRegister.php" class="btn btn-success btn-danger">
          </form>
        </div>
      </div>
    </div>
    </div>
  </main>
  <?php
  include("footer.php");
  ?>
</body>
<style>
  body {
    background-image: url('https://i.pinimg.com/originals/de/7b/d6/de7bd6a32ee6aba8ab6da671aa4df54b.gif');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
  }
</style>
<style type="text/css">
        body {
            font-family: 'Athiti', sans-serif;
            font-family: 'Itim', cursive;
        }
    </style>

</html>