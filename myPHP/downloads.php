<?php
include("common.php");
include("wrini.php");
?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Download Section</title>
<meta name="Keywords" content="" />
<meta name="Description" content="" />

<?php
headersection();
topnavigator();
?>
<div id="contentWrapper">
    <div id="leftColumn1">
      <div id="leftColumnContent">
<CENTER>
	  <br /><script type="text/javascript"><!--
google_ad_client = "pub-7526690253327491";
google_ad_slot = "6539975244";
google_ad_width = 200;
google_ad_height = 200;

</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</CENTER>	  
<?php			
leftmenuitem();
?>	
      </div>
    </div>
	<div id="rightColumn1">
      <div align="center">
       <script type="text/javascript"><!--
google_ad_client = "pub-7526690253327491";
google_ad_slot = "2084401685";
google_ad_width = 160;
google_ad_height = 600;

</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
 </div></div>
    <div id="content">
	<p><img src="images/1.jpg" alt="1 pic" class="fltrt" /><h3>Something to download</h3></p>
    <p>Version : 2.0.0</p>
    <p>Size : 4.99 MB</p>
	<p>Price : FREE</p>
	<h3>Total Downloads : <?php echo readini ("downloadcount.ini","downloads","Something to download"); ?></h3>
	<p><a href="#">Download</a></p>

	
</div>
    <?php
footernavigator();
?>
</html>