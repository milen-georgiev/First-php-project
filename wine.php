<?php
include_once 'inc/header.php';
include_once 'inc/filter.php';
include_once('classes/View.php');
$return = new View();
$sql = $return->returnView("wine");
?>
<div class="container mt-5">
  <div class="card text-white bg-secondary mb-3">
    <h5 class="card-header">За да добавите ново вино, моля, първо влезте в профила си!</h5>
    <div class="card-body border-2">
      <div class="float-left"><a class="btn btn-primary" href="add.php" role="button">Добави вино!</a></div>
      <div class="float-right">Филтър
        <select id="fetchval" name="fetchby">
          <?php
          // с цикъл вкарваме масива по ключ и стоинос в дропдаун
          foreach ($sortWine as $key => $sort) {
            echo '<option value="' . $key . '">' . $sort . '</option>';
          } ?>
        </select>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<?php if (!empty($sql) && is_array($sql)) { ?>
  <div class="container table-container" id="table-container">
  <!-- с цикъл и масив изваждаме всички вина и ги визоализираме -->
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
  <?php 
  endforeach;
  }
  
  include_once 'inc/footer.php';
