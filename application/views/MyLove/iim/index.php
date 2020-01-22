<!-- modal-->
<div class="modal fade carousel" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- modal content -->
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
          </ol>
  <div class="carousel-inner" role="listbox">

    <?php foreach($img_modal as $key => $index):?>
        <div class="carousel-item <?php if($key == 'img1'): echo 'active'; else: echo ''; endif;?>">

          <div class="container">
          <img class="d-block w-100" src="<?=$index?>">
          <div class="carousel-caption text-center">
            <h5>
              <?php
                  switch($key):
                      case "img2":
                    $text = $MyLove_text;
                      break;
                      case "img3":
                    $text = "<span class='text-info'>My Love Story With iim marlina</span>";
                      break;
                      case "img4":
                    $text = "<span class='text-warning'>I Love you Forever</span>";
                      break;
                      case "img5":
                    $text = "<span class='text-success'>Always Love You</span>";
                      break;
                      case "img6":
                    $text = "<span class='text-white'>you are the most beautiful in my heart</span>";
                      break;
                      case "img1":
                    $text = "<span class='text-danger'><b>I Love You iim marlina</b></span>";
                      break; default;
                  endswitch;
                  echo $text;
              ?>
            </h5>
            </div>
          </div><!-- end container carousel item -->

        </div>
      <?php endforeach;?>
  </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <i class="now-ui-icons arrows-1_minimal-left"></i>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <i class="now-ui-icons arrows-1_minimal-right"></i>
        </a>
      </div>
  </div>
    <!-- end modalccontent -->

  </div>
</div>
<!-- end modal -->
