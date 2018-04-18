
<!DOCTYPE html>
<html lang="en">
<head>
<title>Contacts</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="css/zerogrid.css" type="text/css" media="all">
<link rel="stylesheet" href="css/responsive.css" type="text/css" media="all"> 
<link rel="stylesheet" href="css/contactform.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.6.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>  
<script type="text/javascript" src="js/Forum_400.font.js"></script>
<script type="text/javascript" src="js/atooltip.jquery.js"></script> 
<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<!--[if lt IE 9]>
	<script type="text/javascript" src="js/html5.js"></script>
	<style type="text/css">
		.slider_bg {behavior:url(js/PIE.htc)}
	</style>
<![endif]-->
<!--[if lt IE 7]>
	<div style='clear:both;text-align:center;position:relative'>
		<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" alt="" /></a>
	</div>
<![endif]-->
</head>
<body id="page5">
<div class="body6">
	<div class="body1">
		<div class="main zerogrid">
<!-- header -->
			<header>
					<h1><a href="index.html" id="logo"><img src="images/logo.png"/></a></h1>
					<div class="toplink">
					    <span>Order Now: 1-800 123 4567</span></li>			
					</div>
					<nav>
						<ul id="menu">
							<li class="active"><a href="index.html">Home</a></li>
							<li><a href="#pizzalist">Pizzas</a></li>
							<li><a href="Contacts.html">Contacts</a></li>
						</ul>
					</nav>
				</header>
<!-- / header -->
<article id="content">
    <div class="wrap">
         <div class="box">
			<div>				
		    <div id="contact_form">	
			<?php
            $str = file_get_contents('http://localhost/Pizza/data.json');
            $json = json_decode($str, true); // decode the JSON into an associative array
            ?>
			<form id="pizza" name="pizza" method="post">
				<div class="row">
					<p>
						<label>Your Name*</label>
						<input id="name" type="text" name="name" class="text_field" required/>
					</p>
					<p>
						<label>Your Email</label>
						<input id="email" type="text" name="email" class="text_field" />
					</p>
				</div>
				<div class="row">
					<p>
						<label>Your Phone Number*</label>
						<input id="phone" type="text" name="phone" class="text_field" required/>
					</p>
					<p>
						<label>Your Address*</label>
						<input id="address" type="text" name="address" class="text_field" required />
					</p>
				</div>
				<label>Size of Pizza</label>
				<SELECT NAME="size" id="size">
				<?php
				 foreach($json['pizza']['sizes'] as $size){
					 ?>
					 <OPTION value="<?php echo $size; ?>"> <?php echo $size?> </OPTION>
					 <?php
				 }
				?>
				</SELECT>
				 <label>Size Type Pizza</label> 
				<SELECT NAME="type" id="type">
				<?php
				 foreach($json['pizza']['type'] as $type){
					 ?>
					 <OPTION value="<?php echo $type; ?>"> <?php echo $type?> </OPTION>
					 <?php
				 }
				?>
				</SELECT>
				 
			   
				<div class="toppings">
				<b>Create your Own Toppings</b><br>
				<ul class="checkbox">
				<?php
				$i = 1;
				 foreach($json['pizza']['toppings'] as $toppings){
					 ?>
					 <li><input id="top_<?php echo $i; ?>" TYPE="checkbox" NAME="<?php echo $toppings ?>" VALUE="<?php echo $toppings ?>"/><?php echo $toppings ?>
					 </li>					 
					 <?php
					 $i++;
				 }
				?>
				</ul>
				</div>           
				<input name="submit" type="submit" class="sendButton" value="Place Order" />
			</form>
            </div>
         </div>
      </div>
    </div>
</article>
</div>
</div>
</div>
<div class="body3">
		<div class="main zerogrid">
<!-- footer -->
			<footer>
				<div class="wrapper">
					<section class="col-2-3"><div class="wrap-col">
						<h3>Toll Free: <span>1-800 123 45 67</span></h3>
						Designed by Njadhav
					</div></section>
					<section class="col-1-3"><div class="wrap-col">
						<h3>Follow Us </h3>
						<ul id="icons">
							<li><a href="#" class="normaltip" title="Facebook"><img src="images/icon1.gif" alt=""></a></li>
							<li><a href="#" class="normaltip" title="Linkedin"><img src="images/icon2.gif" alt=""></a></li>
							<li><a href="#" class="normaltip" title="Twitter"><img src="images/icon3.gif" alt=""></a></li>
						</ul>
					</div></section>
				</div>
				<!-- {%FOOTER_LINK} -->
			</footer>
<!-- / footer -->
		</div>

</div>
<script type="text/javascript"> Cufon.now(); </script>
<script>
 $("form#pizza").submit(function(event) {	
        event.preventDefault();
        var name = $("#name").val();
        var email = $("#email").val();
        var phone = $("#phone").val();
        var address = $("#address").val();
        var size = $("#size").val();
        var type = $("#type").val();
        var top_1 = $("#top_1").val();
        var top_2 = $("#top_2").val();
        var top_3 = $("#top_3").val();

        $.ajax({
            type: "POST",
            url: "formsent.php",
            data: "name=" + name + "&email=" + email+ "&phone=" + phone+ "&address=" + address+ "&size=" + size+ "&type=" + type+ "&top_1=" + top_1+ "&top_2=" + top_2+ "&top_3=" + top_3+"&submit=1",
            success: function(){				
				alert('Your order will be delivered in 30 minutes');
			}
        });
 });
</script>
</body>
</html>
