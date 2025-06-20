<?php

if (!isset($_COOKIE['user'])) {
    header("Location: login.php");
    exit();
}
$username = $_COOKIE['user'];
?>


<h1>hello, <?php echo htmlspecialchars($username); ?></h1>



<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" onclick="window.location.href='http://10.1.20.100/logout.php'">
								Exit
							</button>
						</div>
					</div>