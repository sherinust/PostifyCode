<? $this->load->view('header'); ?>

<!-- Start Midbody -->

<!-- sidebar and content div -->
<div align="center" >

Welcome <? echo $this->session->userdata('username') ?>
<br />
<p>You Log details are here</p>
<p align="right" style="font-weight:bold"><a href="<?=base_url();?>index.php/logout/"> Login Out</a>         </p>
<table width="95%" border="0" align="left" class="colorwhite">

<tr>
<th align="left"> No </th>
<th align="left"> Date </th>
<th align="left"> Time </th>

<?php echo $strHTML ?>


</table>
</div>


<!-- sidebar,content ends  -->

<!-- End Midbody -->
<? $this->load->view('footer'); ?>