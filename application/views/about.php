<?php $this->load->view('base/header') ?>
<body>
<div class="content-wrapper">
    <?php $this->load->view('base/menu') ?>
    <?php if(isset($abouts[0])): ?>
    <?php $this->load->view('about_page/about') ?>
    <?php endif; ?>
  
  </div>

<?php $this->load->view('base/footer') ?>
 