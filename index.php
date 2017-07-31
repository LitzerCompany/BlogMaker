<?php


			############################################################
			# The following CMS was created by Litzer Tools Creator.   #
			# The following CMS may have software defects and security #
			# flaws. We therefore invite those who are experienced in  #
			# web site programming to help us by creating upgrade      #
			# patches. For more information visit: Coming Soon         #
			############################################################
			
			#If file 'config.php' exists run website else start installer
			if (file_exists('config.php')){
				
			}else{
				header('location: installer/index.php');
			}

?>
