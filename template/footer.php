<div class="grid_12 alpha omega" id="footer">
<?php

?>
						     <div class="grid_4" id="designer_sanjok">
							      <ul>
								     <li>2013  Copyright</li>
									 <li>Webdesgin and development by Sanjok Gurung</li>
									 <li>07449759919 | sanjok_maiden@hotmail.com</li>
								  </ul>
							 </div>
							 <div class="grid_4" id="address_shop">
							     <ul>
								 <?php
								   $query = "SELECT * FROM `address`";
								    $result = mysql_query($query);
									while($row = mysql_fetch_assoc($result)){
									echo'
								   <li>',$row['street'],'</li>
								   <li>',$row['town'],'</li>
								   <li>',$row['city'],'</li>
								   <li>',$row['postcode'],'</li>';
								  }
								  ?>
								 </li>
							 </div>
							 <div class="grid_4" id="social">
							  <ul>
								<li>Our email: hellow@someone.com</li>
								<li><span id="facebook"><a href="">f</a></span><span id="twitter"><a href="">t</a></span><span id="pinterest"><a href="">&</a></span></li>
							  </ul>
							 </div>
						 </div>
			  </div>
		  
		  </div>
</html>