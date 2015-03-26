<?php $currentpage=basename($_SERVER['SCRIPT_FILENAME']);?>
<div id="nav">
				<ul>
					<li><a href="/old-for-students/index.php" <?php if($currentpage=='index.php'){echo 'class="active"';}?> >Home</a></li>
					<li><a href="/old-for-students/products.php" <?php if($currentpage=='products.php'){echo 'class="active"';}?> >Products</a></li>
					<li><a href="/old-for-students/services.php" <?php if($currentpage=='services.php'){echo 'class="active"';}?> >Services</a></li>
					<li><a href="/old-for-students/about.php" <?php if($currentpage=='about.php'){echo 'class="active"';}?> >About</a></li>
					<li><a href="/old-for-students/contact.php" <?php if($currentpage=='contact.php'){echo 'class="active"';}?> >Contact</a></li>
				</ul>
</div>