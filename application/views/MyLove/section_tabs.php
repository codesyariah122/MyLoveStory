<!-- section tabs -->
<div class="section section-tabs clear-filter" data-parallax="true" style="background-image: url('assets/img/bg7.jpg'); background-size: cover; background-position: top center; min-height: 700px;">
      <div class="container">
        <div class="row">
          <div class="col-md-10 ml-auto col-xl-6 mr-auto">
            <div class="card-header mt-2">
                <h2 class="display-2  font_3">MyLove  Story </h2>
                <p class="category text-white font_4">MyLove Story With iim marlina</p>
              </div>

            <!-- Nav tabs -->
            <div class="card">
              <div class="card-header">
                <ul class="nav nav-tabs justify-content-center" role="tablist">
                  <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#home" role="tab">
                    <i class="now-ui-icons objects_spaceship"></i>
                    Home
                  </a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#MyLoveProfile" role="tab">
                    <i class="now-ui-icons ui-2_favourite-28"></i>
                    MyLove
                  </a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#gallery" role="tab">
                    <i class="now-ui-icons design_image"></i>
                    Gallery
                  </a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#about" role="tab">
                    <i class="now-ui-icons objects_planet"></i>
                    About
                  </a>
                  </li>
                </ul>
              </div>

                  <div class="card-body">
                      <!-- Tab panes -->
                      <!-- Home -->
                      <div class="tab-content text-center">

                        <!-- tabspane -->
                      <?php foreach($tabs as $key => $index):?>
                          <div class="tab-pane <?php if($key === 'home'): echo 'active'; endif;?>" id="<?=$key?>" role="tabpanel">
                            <p><?=$index?></p>
                          </div>
                      <?php endforeach;?>
                        <!-- end tabspane -->

                      </div>
                    </div>

                  </div><!-- card section tabs -->
              </div>

        </div><!-- end row section tabs -->
        </div><!-- container section tabs -->

      </div><!-- End Section Tabs -->
