<!DOCTYPE html>
<html lang="en">
	<head>
	<title>articles reg</title>
	<meta charset="utf-8">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
	<meta name="description" content="Your description">
	<meta name="keywords" content="Your keywords">
	<meta name="author" content="Your name">
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/kwicks-slider.css" type="text/css" media="screen">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/superfish.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="js/jquery.kwicks-1.5.1.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>	  
	<script type="text/javascript" src="js/touchTouch.jquery.js"></script>
	<script type="text/javascript">if($(window).width()>1024){document.write("<"+"script src='js/jquery.preloader.js'></"+"script>");}	</script>

	<script>		
		 jQuery(window).load(function() {	
		 $x = $(window).width();		
	if($x > 1024)
	{			
	jQuery("#content .row").preloader();    }	
		 
     jQuery('.magnifier').touchTouch();			
    jQuery('.spinner').animate({'opacity':0},2000,'easeOutCubic',function (){jQuery(this).css('display','none')});	
  		  }); 
				
	</script>
	<!--[if lt IE 8]>
  		<div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>  
 	<![endif]-->
	<!--[if (gt IE 9)|!(IE)]><!-->
	<!--<![endif]-->
	<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>    
    <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
  <![endif]-->
	</head>

	<body>
<div class="spinner"></div>
<!--============================== header =================================-->
<header>
      <div class="container clearfix">
    <div class="row">
          <div class="span12">
        <div class="navbar navbar_">
              <div class="container">
<h1 class="brand brand_"><a href="#"><img src="img/logo.gif" alt="liberta" title="Radio Liberta" onClick="popup()"></a></h1>            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse_">Menu <span class="icon-bar"></span> </a>
            <div class="nav-collapse nav-collapse_  collapse">
                   <ul class="nav sf-menu">
                <li ><a href="index.php">Acceuil الاستقبال</a></li>
                <li class="sub-menu"><a href="#">Radio    الراديو</a>
                      <ul>
                    <li><a href="programme.php">Programme  </a></li>
                    <li><a href="emission.php">emission</a></li>
                    <li><a href="equipe.php">equipe</a></li>
                  </ul>
                    </li>
                    <li class="active"><a href="#">Actualite المستجدات</a>
                      <ul>
                    <li><a href="regionale.php">Regionale </a></li>
                    <li><a href="nationale.php">Nationale</a></li>
                    <li><a href="international.php">International</a></li>
                    <li><a href="sport.php">Sport</a></li>
                    <li><a href="culture.php">Culture</a></li>
                   
                  </ul>
                    </li>
                <li><a href="gallerie.php">Photos صور</a></li>
                <li><a href="videos.php">Videos فيديو</a></li>
                <li><a href="forum.php">Forum المنتدى</a></li>
               <li class="sub-menu"><a href="#">Loisir  الترفيه</a>
                      <ul>
                    <li><a href="quiz.php">Quiz </a></li></ul>
                    
                 <li><a href="contacte.php">Contact اتصل بنا</a></li>
              </ul
                ></div>
          </div>
            </div>
      </div>
        </div>
  </div>
    </header>
<div class="bg-content">       
  <!--============================== content =================================-->      
   <div id="content"><div class="ic">More Website Templates @ TemplateMonster.com. November19, 2012!</div>
    <div class="container">
          <div class="row">
        <article class="span8">
         <div class="inner-1">  
         <h3>Articles regionaux...</h3>
         
         <?php
			include('config.php');
			$req="SELECT * FROM `articles blog` where  type='regionale';";
			
			$resultat=mysql_query($req);
			
			while($ligne=(mysql_fetch_row($resultat)))
			{
			?><ul class="thumbnails thumbnails-1 list-services">
              <li class="span4">
            <div class="thumbnail thumbnail-1" style="
    width: 693px;
    height: 953px;
    padding-bottom: 0px;
    padding-top: 0px;
    margin-bottom: _;
    padding-left: 10px;
    border-left-width: 12px;
    margin-left: 1-;
    margin-left: -20;
    margin-top: 8px;"
> 
                 
                
				     <table>
				      <tr>
				        <td><font color="#000000"><?php echo $ligne[3] ?></font></td>
			          </tr>
				      </table>
				  
				   
	
	
		    <table width="100%" border="0" style="border-spacing:0px;

	-moz-border-radius:10px;
	-webkit-border-radius:10px;
	border-radius:10px;
	padding:0px;
	width:95%;
	margin:5px auto 5px auto;">
  <tr>
    <td width="77%" rowspan="2"><!-- ben brahim foued : affichage des articles de blogs-->Titre : <?php echo $ligne[2] ?><br><br>
   <strong> <?php echo $ligne[1] ?> </strong>
    
   
    <section align="center"><em> auteur : <?php echo $ligne[3] ?></em>,  date : <?php echo $ligne[4] ?> </section> <a name="fb_share" type="button" expr:share_url='data:post.url' href="http://www.facebook.com/sharer.php">Partager</a><script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script></td>
    <td width="23%" height="71"><img src="img/actualites_hope_and_care.jpg"  alt=""/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  
  </tr>
   <?php
			}
			?>
</table>
</div>
          </li>
         </ul>
      
           
        </article>
        <article class="span4">
          <h3 class="extra">Recherche</h3>
          <form id="search" action="search.php" method="GET" accept-charset="utf-8" >
            <div class="clearfix">
              <input type="text" name="s" onBlur="if(this.value=='') this.value=''" onFocus="if(this.value =='' ) this.value=''" ><a href="#" onClick="document.getElementById('search').submit()" class="btn btn-1">search</a> </div>
          </form>
          
          <div class="flexslider">
              <ul class="slides">
             
            <li> <img src="img/pub_1.jpg" alt="" > </li>
            <li> <img src="img/pub_2.jpg" alt="" > </li>
            <li> <img src="img/pub_3.jpg" alt="" ></li>
            </ul>
          </div>
        </article>
      </div>
     </div>
  </div>
 </div>


<!--============================== footer =================================-->
<footer>
<div> <div class="container clearfix">
    <ul class="list-social pull-right">
    
          <li><a class="icon-1" href="https://www.facebook.com/groups/220644174813120/" target="_blank"></a></li>
          <li><a class="icon-3" href="https://twitter.com/Radioliberta1" target="_blank"></a></li>
        <li><a class="icon-4" href="https://plus.google.com/u/0/b/107383158813870576446/107383158813870576446/posts" target="_blank"></a></li>
        <li><a class="icon-5" href="http://www.youtube.com/channel/UCHRNLo4IOkQWQXsbjKUAQDg" target="_blank"></a></li><BR><BR>
          <li><p> Copyright © 2014 - Radio LIBERTA </p></li><div >
							<ul id="latest_tweets">
							<?php include("config.php"); 
							$req='select * from visiteur where ip="'.$_SERVER['REMOTE_ADDR'].'"';
							mysql_query($req);
							$resultat = mysql_query($req);
							$nb =mysql_num_rows($resultat);
							if ($nb==0)
							{$dt = new DateTime();
							$req='insert into visiteur values("'.$_SERVER['REMOTE_ADDR'].'","'.$dt->format('Y-m-d H:i:s').'")';
							$resultat = mysql_query($req);}
							$req="select * from visiteur";
							$resultat = mysql_query($req);
							$nb =mysql_num_rows($resultat);
							;?>
							<li> Nombre de visiteurs : <?php echo $nb?> </li>
							</ul>
					</div>
      </ul>
        <address class="address-1">
    <strong>Menzel horr<br>
        8015 centre ville
        ,<BR>Radio LIBERTA.</strong><br>
          <div class="overflow"><span>E-mail:</span> <a href=" mailto:Radio.liberta1@gmail.com" class="mail-1">Radio.liberta1@gmail.com</a><br>
    <span>Skype:</span> <a href="skype:<?php echo('Radio.liberta')?> " class="mail-1">Radio.liberta</a></div>
      </address>
    
  </div>
</div>
     
    </footer>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>

