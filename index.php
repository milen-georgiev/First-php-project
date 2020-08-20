<?php
include_once 'inc/header.php';
include_once 'inc/filter.php';
include_once('classes/View.php');
$return = new View();
$sql = $return->lastAdd("wine");
?>
<div id="carouselExampleIndicators" class="carousel slide mt-3" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/slider/1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/slider/3.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/slider/2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/slider/4.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/slider/5.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Предишен</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Следващ</span>
  </a>
</div>
<div class="jumbotron mt-3">
  <h1 class="display-4">Здравейте, </h1>
  <p class="lead">Тук може да видите последните предложения на вина от потребителите ни.</p>
  <hr class="my-4">
  <p>А може и да споделите виното, което харесвате</p>
  <a class="btn btn-danger btn-lg" href="wine.php" role="button">Към вината !!!</a>
</div>
<div class="container">
  <!-- С отделна заявка изкарваме последните 3 добавени вина и с цикъл ги визоализираме -->
  <?php foreach ($sql   as $resultView) : ?>
    <div class="card mb-3">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img src="img/wine/<?php echo $resultView['wine_image']; ?>" class="card-img" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title"><?php echo $resultView['wine_title']; ?></h5>
            <h6 class="card-title"><?php
                                      $sW = $resultView['sort'];
                                      echo $sortWine[$sW];
                                      ?></h6>
            <p class="card-text"><?php echo $resultView['wine_info']; ?></p>
            <p class="card-text d-flex justify-content-around ">
              <small class="text-muted">Добавено от <b><?php echo $resultView['username']; ?></b> </small>
              <small class="text-muted">Добавено на <?php echo $resultView['wine_added_date']; ?> </small>
            </p>
          </div>
        </div>
      </div>
    </div>
<?php endforeach; ?>
</div>
<?php
include_once 'inc/footer.php';
