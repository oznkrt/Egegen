<div class="container inner">
          <h2 class="section-title mb-40 text-center">Haberler</h2>
          <div class="row">
            <div class="col-md-12 ">
              <div class="cube-slider cbp-slider-edge cbp">
              <?php foreach ($news as $new): ?>
                <div class="cbp-item pl-60 pr-60 pb-10">
                  <div class="row d-flex">
                    <div class="col-md-6 pr-35 pr-sm-15">
                      <figure><a href="<?php echo base_url('404')?>"><img src="<?php echo base_url('assets/').$new->image?>" alt="" /></a></figure>
                    </div>
                    <div class="col-md-6 align-self-center">
                      <blockquote class="icon icon-left">
                        <h5 class=" text-left"><?php echo $new->head ?></h5>
                        <p><?php echo $new->text ?></p>
                      </blockquote>
                    </div>
                  </div>
                </div>
                <?php endforeach;?>
              </div>
        
            </div>
          </div>
      </div>