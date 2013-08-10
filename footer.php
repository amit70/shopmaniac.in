<table border="0" style="position:absolute; left:0%; top:%;  width:100%; text-align:left;" cellpadding="3">
<tr style="font-family:'Comic Sans MS', cursive; font-size:18px; color:#434343; text-align:left;"><th>Shopmaniac</th><th>My Account</th><th>Help</th><th>Polices</th><th>Product</th></tr>
<tr style="text-align:left; font-size:14px;"> 
<?php
if($_SESSION['uname']=="")
{
echo "<td><a href=\"index.php\" style=\"text-decoration:none; color:#979797; font-family:'Comic Sans MS', cursive;\" onMouseOver=\"this.style.color = '#DF7000'\" onmouseout=\"this.style.color = '#979797'\">Home</a></td>";
echo "<td><a href=\"#\" onclick=\"logtr()\" style=\"text-decoration:none; color:#979797; font-family:'Comic Sans MS', cursive;\" onMouseOver=\"this.style.color = '#DF7000'\" onmouseout=\"this.style.color = '#979797'\">My Account</a></td>";
}
else
{
	echo "<td><a href=\"home.php\" style=\"text-decoration:none; color:#979797; font-family:'Comic Sans MS', cursive;\" onMouseOver=\"this.style.color = '#DF7000'\" onmouseout=\"this.style.color = '#979797'\">Home</a></td>";
	echo "<td><a href=\"myaccount.php\" style=\"text-decoration:none; color:#979797; font-family:'Comic Sans MS', cursive;\" onMouseOver=\"this.style.color = '#DF7000'\" onmouseout=\"this.style.color = '#979797'\">My Account</a></td>";
}
?>
<td><a href="placeorder.php" style="text-decoration:none; color:#979797; font-family:'Comic Sans MS', cursive;" onMouseOver="this.style.color = '#DF7000'" onmouseout="this.style.color = '#979797'">Place Order</a></td><td><a href="returnpolicy.php" style="text-decoration:none; color:#979797; font-family:'Comic Sans MS', cursive;" onMouseOver="this.style.color = '#DF7000'" onmouseout="this.style.color = '#979797'">Return Policy</a></td><td><a href="mobiles.php" style="text-decoration:none; color:#979797; font-family:'Comic Sans MS', cursive;" onMouseOver="this.style.color = '#DF7000'" onmouseout="this.style.color = '#979797'" >Mobiles</a></td></tr>

<tr style="text-align:left; font-size:14px;"><td><a href="aboutus.php" style="text-decoration:none; color:#979797; font-family:'Comic Sans MS', cursive;" onMouseOver="this.style.color = '#DF7000'" onmouseout="this.style.color = '#979797'">About Us</a></td><td><a href="mytrolley2.php" style="text-decoration:none; color:#979797; font-family:'Comic Sans MS', cursive;" onMouseOver="this.style.color = '#DF7000'" onmouseout="this.style.color = '#979797'">My Trolley</a></td><td><a href="trackorder.php" style="text-decoration:none; color:#979797; font-family:'Comic Sans MS', cursive;" onMouseOver="this.style.color = '#DF7000'" onmouseout="this.style.color = '#979797'" >Track Order</a></td><td><a href="privacypolicy.php" style="text-decoration:none; color:#979797; font-family:'Comic Sans MS', cursive;" onMouseOver="this.style.color = '#DF7000'" onmouseout="this.style.color = '#979797'">Privacy Policy</a></td><td><a href="tablets.php" style="text-decoration:none; color:#979797; font-family:'Comic Sans MS', cursive;" onMouseOver="this.style.color = '#DF7000'" onmouseout="this.style.color = '#979797'">Tablets</a></td></tr>

<tr style="text-align:left; font-size:14px;"><td><a href="contactus.php" style="text-decoration:none; color:#979797; font-family:'Comic Sans MS', cursive;" onMouseOver="this.style.color = '#DF7000'" onmouseout="this.style.color = '#979797'">Contact Us</a></td><td><a href="mypoints.php" style="text-decoration:none; color:#979797; font-family:'Comic Sans MS', cursive;" onMouseOver="this.style.color = '#DF7000'" onmouseout="this.style.color = '#979797'">My Points</a></td><td><a href="returnproduct.php" style="text-decoration:none; color:#979797; font-family:'Comic Sans MS', cursive;" onMouseOver="this.style.color = '#DF7000'" onmouseout="this.style.color = '#979797'" >Return Product</a></td><td><a href="shippingpolicy.php" style="text-decoration:none; color:#979797; font-family:'Comic Sans MS', cursive;" onMouseOver="this.style.color = '#DF7000'" onmouseout="this.style.color = '#979797'">Shipping Policy</a></td><!--<td><a href="homeware.php" style="text-decoration:none; color:#979797; font-family:'Comic Sans MS', cursive;" onMouseOver="this.style.color = '#DF7000'" onmouseout="this.style.color = '#979797'">Homeware</a></td>--></tr>

<tr style="text-align:left; font-size:14px;"><td></td><td><a href="mycredits.php" style="text-decoration:none; color:#979797; font-family:'Comic Sans MS', cursive;" onMouseOver="this.style.color = '#DF7000'" onmouseout="this.style.color = '#979797'">My Credits</a></td><td><a href="t&c.php" style="text-decoration:none; color:#979797; font-family:'Comic Sans MS', cursive;" onMouseOver="this.style.color = '#DF7000'" onmouseout="this.style.color = '#979797'" >Terms & Conditions</a></td><td></td><td><!--<a href=".php" style="text-decoration:none; color:#979797; font-family:'Comic Sans MS', cursive;" onMouseOver="this.style.color = '#DF7000'" onmouseout="this.style.color = '#979797'">Computer</a>--></td></tr>

<tr style="text-align:left; font-size:14px;"><td></td><td></td><td><a href="faq.php" style="text-decoration:none; color:#979797; font-family:'Comic Sans MS', cursive;" onMouseOver="this.style.color = '#DF7000'" onmouseout="this.style.color = '#979797'" >FAQ's</a></td><td></td><td></td></tr>

<tr style="text-align:left; font-size:14px;"><td></td><td></td><td><a href="cancelorder.php" style="text-decoration:none; color:#979797; font-family:'Comic Sans MS', cursive;" onMouseOver="this.style.color = '#DF7000'" onmouseout="this.style.color = '#979797'" >Cancel Order</a></td><td></td><td></td></tr>

</table>

<hr style="position:absolute; left:2%; top:50%; border-style:dotted; width:96%; border-color:#575757;"/>

<table border="0" style="position:absolute; left:2%; top:53%;" cellpadding="4">
<tr align="center"><th>Payment Methods</th></tr>
<tr><td><img src="prodimg/pm_visa.jpg" width="60" height="40"/> &nbsp; <img src="prodimg/pm_mc.jpg" width="60" height="40"/> &nbsp;  <img src="prodimg/pm_ae.jpg" width="60" height="40"/> &nbsp;  <img src="prodimg/pm_a.jpg" width="60" height="40"/> &nbsp;  <img src="prodimg/cod.jpg" width="60" height="40"/> &nbsp;  <img src="prodimg/nb.gif" width="60" height="40"/></td></tr>
</table>

<table border="0" style="position:absolute; left:64%; top:53%;" cellpadding="4">
<tr align="center"><th>Secured By</th></tr>
<tr><td><img src="prodimg/cc_avenue.jpg" width="60" height="40"/> &nbsp; <img src="prodimg/verisignsecured.jpg" width="60" height="40"/> &nbsp;  <img src="prodimg/ssl.jpg" width="60" height="40"/> </td></tr>
</table>

<hr style="position:absolute; left:2%; top:76%; border-style:dotted; width:96%; border-color:#575757;"/>

<table border="0" style="position:absolute; left:35%; top:78%;" cellpadding="4">
<tr align="center"><th>Follow Us</th></tr>
<tr><td><a href="http://www.facebook.com/shopmaniac.in" target="_blank"><img src="prodimg/FB_Logo.png.jpg" width="60" height="45"/></a> &nbsp; <a href="http://www.facebook.com/shopmaniac.in" target="_blank"><img src="prodimg/Tweeter_Logo.jpg" width="60" height="45"/></a> &nbsp;  <a href="http://www.facebook.com/shopmaniac.in" target="_blank"><img src="prodimg/G_Plus Logo.jpg" width="60" height="45"/></a> </td></tr>
</table>


<div id="copyright" style="position:absolute; left:0%; top:100%; width:100%; height:8%;border-top-style:solid;
	border-top-width:medium;
	border-color:#C1C1C1;">
<p style="position:absolute; left:35%; top:-25%; font-family:'Comic Sans MS', cursive; font-size:80%; color:#555;"> Copyright <img src="prodimg/copy.jpg" width="5%" style="position:absolute; left:20%; top:8%;"/>&nbsp;&nbsp;&nbsp; Prodigy Infotech. All Rights Reserved</center>
</div>


