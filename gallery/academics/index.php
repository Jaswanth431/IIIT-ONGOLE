<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Gallery</title>
    <link rel="shortcut icon" href="img/rguktlogo.jpg" type="image/x-icon" />
    <link rel="shortcut icon" href="../../img/rguktlogo.jpg" type="image/x-icon" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../../css/navigation.css" />
    <link rel="stylesheet" href="../css/gallerystyles.css" />
    <link rel="stylesheet" href="../../css/footer.css" />
  </head>
  <body>
    <?php  include_once '../navigation.php';  ?>
    <main>
      <div class="location">
        <p>
          <a href="../../index.php">Home</a> // <a href="../../instituteinfo.php?data=gallery">Gallery</a> //
          <a href="index.php">Academic pholos 1</a>
        </p>
      </div>
      <div class="row-width content-box">
        <div class="main-content">
          <div class="hr-line mt-3"></div>
          <h1 class="heading-primary text-center">This is title of the gallery</h1>
          <div class="hr-line mb-3"></div>

          <div class="row">
            <div class="col-lg-6 col-xl-6 wid">
              <div class="img-box">
                <img src="img/0.jpg" alt="" />
              </div>
            </div>

            <div class="col-lg-6 col-xl-6">
              <div class="img-box">
                <img src="img/1.jpg" alt="" />
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6 col-xl-6">
              <div class="img-box">
                <img src="img/2.jpg" alt="" />
              </div>
            </div>

            <div class="col-lg-6 col-xl-6">
              <div class="img-box">
                <img src="img/3.jpg" alt="" />
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6 col-xl-6">
              <div class="img-box">
                <img src="img/4.jpg" alt="" />
              </div>
            </div>

            <div class="col-lg-6 col-xl-6">
              <div class="img-box">
                <img src="img/3.jpg" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <?php  include_once '../../footer.php';  ?>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="../../js/script.js"></script>
  </body>
</html>
