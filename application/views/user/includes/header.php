<!DOCTYPE html>
<html>
<?php
    $query = $this->db->query("select * from system_settings WHERE status = 1");
    $result = $query->result_array();
    $this->website_name = '';
    $this->website_logo_front ='assets/img/logo.png';
     $fav=base_url().'assets/img/favicon.png';
    if(!empty($result))
    {
    foreach($result as $data){
    if($data['key'] == 'website_name'){
    $this->website_name = $data['value'];
    }
        if($data['key'] == 'favicon'){
             $favicon = $data['value'];
    }
    if($data['key'] == 'logo_front'){
         $this->website_logo_front =  $data['value'];
    }
    }
    }
    if(!empty($favicon))
    {
		$fav = base_url().'uploads/logo/'.$favicon;
    }


    $lang = (!empty($this->session->userdata('lang')))?$this->session->userdata('lang'):'en';
?>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?php echo $this->website_name;?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dreamguy's Technologies">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $fav;?>">
	
	<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/datatables/datatables.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/animate.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/cropper.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/avatar.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/owlcarousel/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/owlcarousel/owl.theme.default.min.css">

	<?php if($module=='home' || $module=='services'){ ?>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/jquery-ui/jquery-ui.min.css">
	<?php } ?>

	<?php if($module=='service'){ ?>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-select.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/tagsinput.css">
	<?php } ?>    

	<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/toaster/toastr.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
	<?php if($this->uri->segment(1)=="book-service"){ ?>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/jquery-ui/jquery-ui.min.css">
		<?php }?>
	
	 <script src="<?php echo $base_url; ?>assets/js/jquery-3.5.0.min.js"></script>
	<script src="https://checkout.stripe.com/checkout.js"></script>
	<script src="https://js.stripe.com/v3/"></script>
</head>



