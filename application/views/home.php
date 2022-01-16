
<?php $this->load->view('base/header') ?>
<body>


  <div class="content-wrapper">
    <?php $this->load->view('base/menu') ?>
    <?php if(isset($sliders[0])): ?>
    <?php $this->load->view('home_page/slider') ?>
    <?php endif; ?>
    <?php if(isset($abouts[0])): ?>
    <?php $this->load->view('home_page/about') ?>
    <?php endif; ?>
    <?php if(isset($news[0])): ?>
    <?php $this->load->view('home_page/news') ?>
    <?php endif;?>
  </div>


<?php $this->load->view('base/footer') ?>
 