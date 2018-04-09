<?php
$index = "myButtons";
$registration = "myButtons";
$requests = "myButtons";
$viewrequest = "myButtons";
$camps = "myButtons";
$search = "myButtons";
$contact = "myButtons";
$login = "myButtons";

$menu = basename($_SERVER['PHP_SELF'],".php");
if($menu == "index"){
	$index='myActiveButtons';
}
else if($menu == "registration"){
	$registration='myActiveButtons';
}
else if($menu == "requests"){
	$requests='myActiveButtons';
}
else if($menu == "viewrequest"){
	$viewrequest='myActiveButtons';
}
else if($menu == "camps"){
	$camps='myActiveButtons';
}
else if($menu == "search"){
	$search='myActiveButtons';
}
else if($menu == "contact"){
	$contact='myActiveButtons';
}
else if($menu == "login"){
	$login='myActiveButtons';
}
?>


<ul class="nav">
			<li><a class="<?php echo $index;?>"; href="index.php">Home</a></li>
			<li><a class="<?php echo $registration;?>"; href="registration.php">Donor Registration</a></li>            
			<li><a class="<?php echo $requests;?>"; href="requests.php">send Request</a></li>
            <li><a class="<?php echo $viewrequest;?>"; href="viewrequest.php">View Request</a></li>
            <li><a class="<?php echo $camps;?>"; href="camps.php">Camps</a></li>
            <li><a class="<?php echo $search;?>"; href="search.php">Search</a></li>
            <li><a class="<?php echo $contact;?>"; href="contact.php">Contact Us</a></li>
            <li><a class="<?php echo $login;?>"; href="login.php">log In</a></li>
            </ul>