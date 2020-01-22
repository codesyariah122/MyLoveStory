<!-- section card -->
<div class="container">
  <div class="card text-center">
      <div class="card-header mt-2 font_3 display-2">
          About
        </div>
            <div class="card-body">
              <h4 class="card-title font_5 display-4">I'am A Front End Web Developer</h4>
                <div class="col-sm-2 mx-auto d-block">
                  <a href="<?=base_url()?>assets/img/puji.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                    <img src="<?=base_url()?>assets/img/puji.jpg" alt="Thumbnail Image" class="rounded-circle img-raised img-fluid">
                  </a>
                </div>
              <p class="card-text">
                <?php foreach($portfolio as $profile => $index):?>
                   <?=$index?>
                <?php endforeach;?>
              </p>
              <a href="" class="btn btn-primary" data-toggle="modal" data-target=".profile">Lihat Story</a>
            </div>
        <div class="card-footer text-muted mb-2">
          2 days ago
      </div>
    </div>
<!-- end card -->
</div><!-- container card -->
