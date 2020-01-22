<div class="modal fade profile" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div id="exampleAccordion" data-children=".item">

<div class="container">
<?php foreach($modal_portfolio as $key => $index):?>
  <div class="item">
    <a data-toggle="collapse" data-parent="#exampleAccordion" href="<?php if($key == 'FrontEnd'): echo '#exampleAccordion1'; else: echo '#exampleAccordion2'; endif;?>" aria-expanded="true"
      aria-controls="<?php if($key == 'FrontEnd'): echo 'exampleAccordion1'; else: echo 'exampleAccordion2'; endif; ?>">
      <?php switch($key): case 'FrontEnd': $judul="I'Am a FrontEnd WebDev"; break; case 'WebDeveloper': $judul="I'am a WebDeveloper"; break; default; endswitch; echo $judul; ?>
    </a>
    <div id="<?php if($key == 'FrontEnd'): echo 'exampleAccordion1'; else: echo 'exampleAccordion2'; endif; ?>" class="collapse show" role="tabpanel">
      <p class="mb-3">
        <?php if($key == 'FrontEnd'):?>
        <div class="col-md-2 mx-auto d-block">
          <a href="<?=base_url()?>assets/img/puji2.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
            <img src="<?=base_url()?>assets/img/puji2.jpg" alt="Thumbnail Image" class="rounded-circle img-raised img-fluid">
          </a>
        </div>

      <?php elseif($key != 'FrontEnd'):?>

        <div class="row">
          <div class="col-md-2 ml-2 d-block">
            <a href="<?=base_url()?>assets/img/puji3.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
              <img src="<?=base_url()?>assets/img/puji3.jpg" alt="Thumbnail Image" class="rounded-circle img-raised img-fluid">
            </a>
          </div>
          <div class="col-md-2 d-block">
            <a href="<?=base_url()?>assets/img/puji4.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
              <img src="<?=base_url()?>assets/img/puji4.jpg" alt="Thumbnail Image" class="img-raised img-fluid">
            </a>
          </div>
        </div><!-- row image -->

      <?php endif;?>
        <div class="container">
          <span class="font_4">
            <?=$index?>
          </span>
        </div>
      </p>
    </div>
  </div>
<?php endforeach;?>

</div><!-- container item -->

</div>
    </div>
  </div>
</div>
