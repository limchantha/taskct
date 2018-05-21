<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $heading!=''?$heading:ucfirst($this->config->item('site_name'));?></title>
	<link rel="alternate" href="<?php echo base_url();?>">
    <meta content='<?php echo $this->config->item('site_name');?>' name='author'>
	<meta content='<?php echo $this->config->item('meta_description');?>' name='description'>
	<meta content='<?php echo $this->config->item('meta_keywords');?>' name='keywords'>
	<meta property="fb:app_id" content="<?php echo $this->config->item('fb_app_id');?>">
	<meta property="og:site_name" content="<?php echo ucfirst($this->config->item('site_name'));?>">
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?php echo base_url();?>">
	<meta property="og:title" content="<?php echo $this->config->item('meta_title');?>">
	<meta property="og:description" content="<?php echo $this->config->item('meta_description');?>">
	<meta property="og:image" content="<?php echo base_url();?>images/site/logo/<?php echo $this->config->item('site_logo')!=''?$this->config->item('site_logo'):'logo.png';?>">
	<meta property="og:locale" content="en_US">
    <meta name="twitter:widgets:csp" content="on">
	<meta name="twitter:url" content="<?php echo base_url();?>">
	<meta name="twitter:description" content="<?php echo $this->config->item('meta_description');?>">
	<meta name="twitter:card" content="summary">
	<meta name="twitter:title" content="<?php echo $this->config->item('meta_title');?>">
	<meta name="twitter:site" content="<?php echo $this->config->item('twitter_name');?>">
	<meta name="twitter:app:id" content="<?php echo $this->config->item('twitter_app_id');?>">
	<meta name="twitter:app:name:iphone" content="<?php echo ucfirst($this->config->item('site_name'));?>">
	<meta name="twitter:app:name:ipad" content="<?php echo ucfirst($this->config->item('site_name'));?>">
	<meta name="twitter:app:name:googleplay" content="<?php echo ucfirst($this->config->item('site_name'));?>">
	<meta name="twitter:app:id:googleplay" content="<?php echo base_url();?>">
	<meta name="twitter:app:url:iphone" content="<?php echo base_url();?>">
	<meta name="twitter:app:url:ipad" content="<?php echo base_url();?>">
	<meta name="twitter:app:url:googleplay" content="<?php echo base_url();?>">
	<link rel="shortcut icon" sizes="76x76" type="image/x-icon" href="<?php echo base_url();?>images/site/logo/<?php echo $this->config->item('site_favicon')!=''?$this->config->item('site_favicon'):'favicon.ico';?>" />
	<script>
		var baseurl="<?php echo base_url();?>"; 
	</script>	
</head>
<link href="<?php echo base_url();?>css/site/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>css/site/style.css" rel="stylesheet">
<link href="<?php echo base_url();?>css/site/developer.css" rel="stylesheet">
<link href="<?php echo base_url();?>css/site/sweetalert.css" rel="stylesheet">
<body class="signin_base">
<section>
            <div class="col-md-12 col-sm-12 col-xs-12 nopadd">
                    <div class="container">
                            <div class="col-md-12 col-sm-12 col-xs-12 text-center nopadd">
                                    <div class="col-md-5 col-sm-8 col-xs-12 sign_in_custom sign_start nopadd">
                                    <div class="sign_in_logo_base ">
                                    <div class="sign_in_logo">
                                    			<a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>images/site/logo/<?php echo $this->config->item('site_logo')!=''?$this->config->item('site_logo'):'logo.png';?>"></a>
                                    	</div>
                                     <div class="sign_base sign_in sing_up_user ">
                                        <form action="" method="post" id="register-form" novalidate="novalidate">  
										    <input type="text" name="first_name" id="sfirst_name" placeholder="First Name" class="form-control">
                                            <input type="text" name="last_name" id="slast_name" placeholder="Last Name" class="form-control">
                                            <input type="email" name="email" placeholder="Email Address" class="form-control">
                                            <input type="password" name="password" placeholder="Password" class="form-control">
                                            <input type="text" name="zipcode" id="address_zip" placeholder="Zipcode" class="form-control">
                                            <input type="text" name="phone" id="phone" placeholder="Mobile" class="form-control">
                                            <input type="submit" value="Create Account" class="submit_btn">
                                            <p class="agree_terms">By signing up you agree to our <a href="<?php echo base_url();?>page/terms-and-conditons"> Terms of Use </a> and <a href="<?php echo base_url();?>page/privacy-policy"> Privacy Policy </a></p>
                                        </form>    
                                         <span class="under_line sign_line">&nbsp;</span>
                                           <h4>Already have an account? <a href="<?php echo base_url();?>user_login">Login</a> </h4>
                                      </div>
                                      </div>
                                 
                            </div>
                    </div>
            </div>
            </div>
</section>
<script src="<?php echo base_url();?>js/site/jquery-3.1.1.min.js"></script>
<script src="<?php echo base_url();?>js/site/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>js/site/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/site/validate.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/site/sweetalert.min.js"></script>
<script>
        var sign_pos= $('.sign_inner').offset();
        var sign_top= $('.sign_base').offset();
	    var window_width= $(window).width();
$(document).ready(function(){
				$('.sign_whtspace').offset({left:sign_pos.left + 6});
                $('.sign_whtspace').offset({top:sign_top.top});
   
});
$('#address_zip').keypress(function(event){
            console.log(event.which);
        if(event.which != 8 && isNaN(String.fromCharCode(event.which))){
            event.preventDefault();
        }});

</script>
</body>

</html>