<? $this->load->view('header'); ?>

<!-- Start Midbody -->
		<form action="<?=base_url();?>index.php/signin" method="post">
<!-- sidebar and content div -->
<div align="center" >

<?php echo validation_errors(); ?>

<table width="95%" border="0" align="center" class="colorwhite">

<tr>
<td>&nbsp;</td>

<td>
          <tr ><td>&nbsp;</td>
          <td align="left" class="heading font24">User Log <span>In</span></td>
          </tr>
          
          <tr >
            <td align="right">Username (email):</td>
   <td  align="left"><input name="username" type="text" id="username" class="txtfield" value="<?php echo set_value('username'); ?>" />	</td>
          </tr>
          <tr>
            <td align="right">Password:</td>
 <td  align="left"><input name="password" type="password" id="password" class="txtfield" value="<?php echo set_value('password'); ?>"/></td>
          </tr>
          
          
          <tr>
            <td >&nbsp;</td>
            <td align="left"><table width="0" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><input name="btnSubmit" type="submit" value="Submit" class="btn" /></td>
                    <td ><input name="btnCancel" type="button" value="Cancel" class="btn" /></td>
                  </tr>
                  
                       <tr>
                    <td></td>
                    <td ><a href="<?=base_url();?>index.php/signup"> Sign Up Here</a></td>
                  </tr>
                </table></td>
          </tr>

</td>
</tr> 

</table>
</div>


<!-- sidebar,content ends  -->

    </form>
<!-- End Midbody -->
<? $this->load->view('footer'); ?>