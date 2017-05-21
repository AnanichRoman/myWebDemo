<?php
function topnavigator() {
echo "  <div id=\"topNavigation\">\n"; 
echo "    <ul class=\"level-0\" id=\"cssmw\">\n"; 
echo "      <li><span><a href=\"index.php\">Home</a></span></li>\n"; 
echo "      <li><span><a href=\"products.php\">Projects</a></span>\n";
echo "	  <ul class=\"level-1\">\n";
echo "          <li><span><a href=\"https://github.com/AnanichRoman\">Organize</a></span></li>\n"; 
echo "          <li><span><a href=\"https://github.com/AnanichRoman\">ArcGis</a></span></li>\n"; 
echo "          <li><span><a href=\"https://github.com/AnanichRoman\">Recognition</a></span>\n"; 
echo "        </ul>\n"; 
echo "	  </li>\n";  
echo "	  <li><span><a href=\"about.php\">About Us</a></span></li>\n"; 
echo "      <li><span><a href=\"contact.php\">Contact Us</a></span></li>\n"; 
echo "    </ul>\n"; 
echo "    <script type=\"text/javascript\">if(window.attachEvent) { window.attachEvent(\"onload\", function() { cssmw.intializeMenu('cssmw'); }); } else if(window.addEventListener) { window.addEventListener(\"load\", function() { cssmw.intializeMenu('cssmw0'); }, true); }</script>\n"; 
echo "</div>\n";
}
?>