<div class="rev_slider_wrapper fullwidth-container">
      <div id="slider13" class="rev_slider" data-version="5.4.8">
        <ul>
        <?php foreach ($sliders as $slider): ?>
          <li data-transition="fade" data-thumb="<?php echo base_url('assets/').$slider->image?>"><img src="<?php echo base_url('assets/').$slider->image?>" alt="" />
            <div class="tp-caption font-weight-700 color-white text-center" data-x="center" data-y="middle" data-voffset="['-50','-50','-50','-50']" data-fontsize="['55','55','55','35']" data-lineheight="['65','65','65','45']" data-width="['800','800','680','340']"
              data-textAlign="['center','center','center','center']" data-whitespace="['normal','normal','normal','normal']" data-frames='[{"from":"x:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power2.easeOut"},{"delay":"wait","speed":1500,"to":"opacity:0;","ease":"Power4.easeIn"}]'
              data-responsive="on" data-responsive_offset="on" style="z-index: 9;"><?php echo $slider->text?></div>
          </li>
          <?php endforeach; ?>
        </ul>
        <div class="tp-bannertimer tp-bottom"></div>
      </div>
    </div>