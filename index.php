<?php include('include/Connection.php');


if(isset($_POST['Formsubmit'])){
   extract($_POST);

$sql = "SELECT * from contact_form where  Name='".$Name."' and Phone_No='".$Phone_No."'  and Message='".$Message."'";
      $info = $db->query($sql);
          if($info->num_rows>0) 
          { 
            
          }else{
            $insert = "insert into contact_form(Name,Phone_No,Message) 
             VALUES('".$Name."','".$Phone_No."','".$Message."')";
              $query1 = $db->query($insert);
           }    
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Inspirasinee</title>

<link rel="icon" href="icon.png"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Immerse a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/owl.carousel.css" rel="stylesheet">
<link rel="stylesheet" href="css/lightbox.css">
 <link type="text/css" rel="stylesheet" href="css/cm-overlay.css" />


<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Sintony:400,700&amp;subset=latin-ext" rel="stylesheet">

</head>
<style type="text/css">
  /* Social Icons */
#social_side_links {
  position: fixed;
  top: 340px;
  left: 0;
  padding: 0;
  list-style: none;
  z-index: 99;
}

#social_side_links li a {display: block; padding: 5px 5px 5px 5px; }

</style>
<body>



<!-- <div class="icon-bar">
  <a href="#" class="facebook" data-toggle="modal" data-target="#myModal1">Order Now<i class="fa fa-order"></i></a> 
</div> -->
<!-- banner -->
<div class="w3l_banner" >

<nav class="navbar navbar-default ">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     <h1><a class="navbar-brand" href="#">Inspirasinee</a></h1>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#index.html" class="page-scroll">HOME</a></li>
        <li><a href="#about" class="page-scroll">ABOUT</a></li>
        <li><a href="#testimonials" class="page-scroll">OUR SERVICES</a></li>
		<li><a href="#gallery" class="page-scroll">GALLERY</a></li>
		<li><a href="Login.php" >LOGIN</a></li>
		<li><a href="Registration.php" >REGISTRATION</a></li>
		           
     
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="w3l_bandwn">
 <h2>Welcome to Inspirasinee</h2>
 <div class="about-p text-center">
<span class="sub-title"></span>
<span class="fa fa-star" aria-hidden="true"></span>
<span class="sub-title"></span>
</div>
<h3>Solusi sepatu kotormu!</h3>
<div class="agile_dwng">
<a href="#" data-toggle="modal" data-target="#myModal">Read More </a>
  <div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
         <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Inspirasinee</h4>
        </div>
        <div class="modal-body">
		<img src="images/modal.jpg"  class="img-responsive" alt="tfg">
          <p>Inspirasinee Shoe Clean adalah jasa Premium Shoes Treatment yang berlokasi di Cengger Ayam, Malang. Layanan di Inspirasinee mementingkan kepuasan dan maksimalitas hasil dari layanan kami.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

</div>
 </div>
</div>
<!-- /features -->
<div class="about" id="about">
	<div class="features" id="features">
		<div class="container">
	<h3>About Us</h3>
			<div class="tittle_head_w3layouts">
				<h4>Fitur yang Lengkap</h4>

					<P>Layanan kami tidak hanya cepat, bersih, efisien, tetapi juga sangat andal. Kami secara khusus memastikan untuk memberikan pelayanan terbaik dan memastikan pengiriman tepat waktu.</p>
			</div>
			<div class="inner_sec_info_agileits_w3">
				<!-- <div class="border1"> -->
				<div class="w3_banup">
					<div class="col-md-4 w3_ret">
					<div class="col-md-10 w3_txt">
							<h4>Tepat </h4>
							<p>Kami memastikan bahwa layanan yang kami berikan tepat dan sesuai apa yang dibutuhkan oleh pelanggan. </p>
							</div>
							<div class="col-md-2 w3ls_ic">
								<i class="fa fa-crosshairs" aria-hidden="true"></i>

							</div>

						<div class="clearfix"></div>

					<div class="col-md-10 w3_txt">

							<h4>Sesuai</h4>
							<p>Kami memastikan bahwa layanan yang kami berikan sesuai dengan claim dari kami dan akan memuaskan pelanggan. </p>
							</div>
							<div class="col-md-2 w3ls_ic">
							<i class="fa fa-assistive-listening-systems" aria-hidden="true"></i>
							</div>
						<div class="clearfix"></div>

					<div class="col-md-10 w3_txt">

							<h4>Kering</h4>
							<p>Kami memastikan bahwa layanan yang kami berikan tidak akan meninggalkan jejak belum kering atau meninggalkan bau lembab pada sepatu pelanggan.</p>
							</div>
							<div class="col-md-2 w3ls_ic">
								<i class="fa fa-tint" aria-hidden="true"></i>
							</div>
						<div class="clearfix"></div>

					</div>
					<div class="col-md-4 w3l_mid">
					<div class="bulb">
						<img src="images/pic.jpg" alt="" />
					</div>
					</div>
					<div class="col-md-4 wthree_r">
					<div class="col-md-2 w3ls_ic">
							<i class="fa fa-street-view" aria-hidden="true"></i>
							</div>
							<div class="col-md-10 w3_txt">
							<h4>Antar</h4>
							<p class="move">Kami memastikan bahwa layanan yang kami berikan meliputi antar dan jemput sepatu pelanggan hingga sepatu sampai di tangan dengan keadaan baik. </p>
						</div>
						<div class="clearfix"></div>

					 <div class="col-md-2 w3ls_icr">
							<i class="fa fa-fast-forward" aria-hidden="true"></i>
							</div>
							<div class="col-md-10 w3_txt">
							<h4>Cepat</h4>
							<p class="move">Kami memastikan bahwa layanan yang kami berikan cepat namun memberikan hasil yang maksimal. </p>
						</div>
						<div class="clearfix"></div>

					<div class="col-md-2 w3ls_icr">
						<i class="fa fa-bolt" aria-hidden="true"></i>
						</div>
						<div class="col-md-10 w3_txt">
							<h4>Efisien</h4>
							<p class="move">Kami memastikan bahwa layanan yang kami berikan akan responsif terhadap pesanan sehingga tidak ada idle time yang dirasakan pelanggan. </p>
						</div>
						<div class="clearfix"></div>
					</div>

				<div class="clearfix"></div>
			</div>
		</div>
				<!-- </div> -->
	</div>
		</div>
	</div>
	<!-- //features -->
</div>
</div>



<!-- Testimonials-->

              

<div class="testimonials" id ="testimonials">
<div class="container">
 <div class="tittle-agileinfo">
			<h3>Kami Memiliki Harga yang Terjangkau </h3>
			</div>
						<div class="sreen-gallery-cursual">
            
            <?php
            $a=10;
   $sel="SELECT * from services_type";
  $info=$db->query($sel);
  while ($row=$info->fetch_object()) {
    $a++;
                   ?>

              <div class="agile_dwng">
                <a href="#" data-toggle="modal" data-target="#myModa<?php echo $a?>"><?php echo $row->Services_Name?></a>
                  <div class="modal video-modal fade" id="myModa<?php echo $a?>" tabindex="-1" role="dialog" aria-labelledby="myModa<?php echo $a?>">
                    <div class="modal-dialog" role="document">
                         <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">×</button>
                          <h4 class="modal-title"><?php echo $row->Services_Name?></h4>
                        </div>
                        <div class="modal-body">
                          <table class="table" style="color: black">
                            <thead>
                              <tr align="text-center">
                                <th ><center><?php echo $row->Services_Name?></center></th>
                                <th ><center>Laundry Price</center></th>
                                <th ><center>With Deodorant</center></th>
                              </tr>               
                            </thead>
                            <tbody>
                          <?php
                              $sql="SELECT * from services_uploade where Services_Type='".$row->Services_Name."' ";
                            $info_sql=$db->query($sql);
                            while ($Fetch=$info_sql->fetch_object()) {
                                             ?>

                                          <tr>
                                            <td><?php echo $Fetch->Services_Name ?></td>
                                            <td><?php echo $Fetch->Dry_Price=='0'?'-':$Fetch->Dry_Price ?></td>
                                            <td><?php
                                            echo $Fetch->Laundry_Price=='0'?'-':$Fetch->Laundry_Price
                                              ?></td>
                                          </tr>
                          <?php }?>               
                              
                            </tbody>
                          </table>
                          
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                      
                    </div>
                  </div>

                </div>
                <br><br>
<?php };?>
							</div>
							</div>
							</div>

	
	<br>
<!-- gallery -->
<div class="gallery" id="gallery">
    <div class="container-fluid">
        <h3>Gallery</h3>

        <div class="about-bottom  w3ls-team-info">
            <div class="col-md-12">
                <div id="Carousel" class="carousel slide">
                    <!-- Carousel items -->
                    <div class="carousel-inner">

                        <div class="item active">
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                    <a href="images/g1.jpg" class="thumbnail cm-overlay">
                                        <img src="images/g1.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                    </a>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                    <a href="images/g2.jpg" class="thumbnail cm-overlay">
                                        <img src="images/g2.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                    </a>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                    <a href="images/g3.jpg" class="thumbnail cm-overlay">
                                        <img src="images/g3.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                    </a>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                    <a href="images/g4.jpg" class="thumbnail cm-overlay">
                                        <img src="images/g4.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                    </a>
                                </div>
                            </div>
                            <!--.row-->
                        </div>
                        <!--.item-->

                        <div class="item">
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                    <a href="images/g5.jpg" class="thumbnail cm-overlay">
                                        <img src="images/g5.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                    </a>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                    <a href="images/g6.jpg" class="thumbnail cm-overlay">
                                        <img src="images/g6.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                    </a>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                    <a href="images/g7.jpg" class="thumbnail cm-overlay">
                                        <img src="images/g7.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                    </a>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                    <a href="images/g1.jpg" class="thumbnail cm-overlay">
                                        <img src="images/g1.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                    </a>
                                </div>
                            </div>
                            <!--.row-->
                        </div>
                        <!--.item-->

                        <div class="item">
                            <div class="row">
                                <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                    <a href="images/g2.jpg" class="thumbnail cm-overlay">
                                        <img src="images/g2.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                    </a>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                    <a href="images/g3.jpg" class="thumbnail cm-overlay">
                                        <img src="images/g3.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                    </a>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                    <a href="images/g4.jpg" class="thumbnail cm-overlay">
                                        <img src="images/g4.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                    </a>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-6 img-gallery-w3l">
                                    <a href="images/g5.jpg" class="thumbnail cm-overlay">
                                        <img src="images/g5.jpg" class="img-responsive" alt="Image" style="max-width:100%;">
                                    </a>
                                </div>
                            </div>
                            <!--.row-->
                        </div>
                        <!--.item-->

                    </div>
                    <!--.carousel-inner-->
                    <a data-slide="prev" href="#Carousel" class="left carousel-control">‹</a>
                    <a data-slide="next" href="#Carousel" class="right carousel-control">›</a>
                </div>
                <!--.Carousel-->

            </div>
        </div>
    </div>

</div>
<!-- //gallery -->

<script src="js/jquery.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/move-top.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/grayscale.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<!-- flexSlider -->
	<script src="js/owl.carousel.js"></script>
							        <script>
							    $(document).ready(function() {
							      $("#owl-demo").owlCarousel({
							        items :2,
									itemsDesktop : [800,2],
									itemsDesktopSmall : [414,1],
							        lazyLoad : true,
							        autoPlay : true,
							        navigation :true,
									
							        navigationText :  false,
							        pagination : true,
									
							      });
								  
							    });
							    </script>

<!-- //flexSlider -->
 <!-- /gallery -->
    <script src="js/jquery.tools.min.js"></script>
    <script src="js/jquery.mobile.custom.min.js"></script>
    <script src="js/jquery.cm-overlay.js"></script>

    <script>
        $(document).ready(function () {
            $('.cm-overlay').cmOverlay();
        });
    </script>
    <!-- //gallery -->

<!-- Move-to-top-->
<script type="text/javascript">
$(document).ready(function() {
var defaults = {
containerID: 'toTop', // fading element id
containerHoverID: 'toTopHover', // fading element hover id
scrollSpeed: 1200,
easingType: 'linear' 
};
$().UItoTop({ easingType: 'easeOutQuart' });
});
</script>
<!--/Move-to-top-->


</body>
</html>