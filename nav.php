<!-- Container for Menu Bar -->
		 <!-- Menu Bar -->
		 <ul class="menu">
					<li id="businessName"> <a href="index.php"> N&H Wholesale Florist Co., Inc. </a> </li>

					<li> <a id=cart href="cart.php"><img src="image_folder/cart.png" alt="" width="30px" height="30px"/></a></li>
					<?php
						include("includes/session.php");
						if(!isset($_SESSION["user"]) || empty($_SESSION["user"])){
						?>
						<li> <a id="menuLogin" href="login.php"> Login </a></li>
						<?php
						} else {
							?>
							<li> <a id="logout" href="logout.php?logout"> Logout </a></li>
							<?php
						}
					?>
				 	<li> <a id="menuContact" href="contact.php"> Contact Us </a></li>
					<li> <a id="menuAbout" href="about.php"> About Us </a></li>
					<li> <a id="menuSearch" href="search.php"> Inventory </a></li>
					<li> <a id="menuhome" href="index.php"> Home </a></li>
					<!-- <li> <a id="menuFlowers" href="#flowers"> Flowers </a> </li> -->
		 </ul>
