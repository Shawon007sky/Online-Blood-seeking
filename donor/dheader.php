 <?php
$index= "myButton";
$chngpwd = "myButton";
$updateprofile = "myButton";
$blooddonated = "myButton";
$viewrequest = "myButton";
$viewdonations = "myButton";

$menu = basename($_SERVER['PHP_SELF'],".php");
if($menu == "index"){
    $index='myActiveButton';
}
if($menu == "chngpwd"){
    $chngpwd='myActiveButton';
}
else if($menu == "updateprofile"){
    $updateprofile='myActiveButton';
}
else if($menu == "blooddonated"){
    $blooddonated='myActiveButton';
}
else if($menu == "viewdonations"){
    $viewdonations='myActiveButton';
}
else if($menu == "viewrequest"){
    $viewrequest='myActiveButton';
}
?>
		<ul class="nav">
			<li><a class="<?php echo $chngpwd;?>" href="chngpwd.php">Change Password</a></li>	
			<li><a class="<?php echo $updateprofile;?>" href="updateprofile.php">Update Profile</a></li>            
			<li><a class="<?php echo $blooddonated;?>" href="blooddonated.php">Blood Donated</a></li>
            <li><a class="<?php echo $viewdonations;?>" href="viewdonations.php">View Donations</a></li>
            <li><a class="<?php echo $viewrequest;?>" href="viewrequest.php">View Requestes</a></li>
            <li><a class="<?php echo $logout;?>" href="logout.php">log Out</a></li>
           
            </ul>