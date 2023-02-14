<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" type="text/css" href="home-mobile.css" media="only screen and (max-width: 768px)" />
    <link rel="stylesheet" href="style.css">
    <title>Infinite Imaji | Photography Website</title>
    <link rel="icon" href="https://drive.google.com/file/d/1ivo66e7yL5ydVXMqVfQmVzo6s8-t72lG/view?usp=sharing">
</head>

<div class="navbar">
    <a href="home.html" class="logo">Infinite Imaji</a>
    <ul class="nav">
        <li>
            <div class="active"><a href="#">Home</a></div>
        </li>
        <li><a href="order.php">Order</a></li>
        <li><a href="package.html">Packages</a></li>
        <li><a href="login.html">Login</a></li>
    </ul>
</div>

<div class="main" style="padding-top: 50px;">
    <div class="column">
        <h1 style="font-family: Playfair Display; font-weight: bold; margin-bottom: 50px; color: #B49C5E">Order</h1>
        <div class="form">
            <form action="proses_order.php" method="post">
                <label for="fname">Full Name</label><br>
                <input type="text" name="fname"><br>
                <label for="telepon">Phone Number</label><br>
                <input type="text" name="hp"><br>
                <label for="alamat">Address</label><br>
                <input type="text" name="alamat"><br>
                <label for="package">Package</label><br>
                <input type="hidden" name="id_pengguna" value="<?php echo $_SESSION['id_pengguna'];?>">
                <select id="package" name="package">
					<option value="basic">Basic</option>
					<option value="advance">Advance</option>
					<option value="ultimate">Ultimate</option>
				</select><br>
                <label for="additional">Additional</label><br>
                <select id="additional" name="additional">
					<option value="">Basic</option>
					<option value="">Advance</option>
					<option value="">Ultimate</option>
				</select><br> Estimated Price <br>
                <b>IDR </b><br>
                <button type="submit">Pay Order</button>
            </form>
        </div>


        <p>Follow us</p><a href="https://www.instagram.com/infinite.imaji" target="_blank" style="font-family: playfair display; text-transform: uppercase;
		letter-spacing: 1px; font-weight: bold;	font-size: 20px; text-decoration: none; margin: 0px;
		color: #B49C5E">Infinite Imaji</a>
    </div>
</div>

</html>


<!--
			<form action="">
				<label for="fname">Full Name</label><br>
				<input type="text" id="fname" name="fname"><br>
				<label for="telepon">Phone Number</label><br>
				<input type="text" id="telepon" name="telepon"><br>
				<label for="alamat">Address</label><br>
				<input type="text" id="alamat" name="alamat"><br>
				<label for="package">Package</label><br>
				<select id="package" name="package">
					<option value="basic">Basic</option>
					<option value="advance">Advance</option>
					<option value="ultimate">Ultimate</option>
				</select><br>
				<label for="additional">Additional</label><br>
				<select id="additional" name="additional">
					<option value="">Basic</option>
					<option value="">Advance</option>
					<option value="">Ultimate</option>
				</select><br>
				Estimated Price <br>
				<b>IDR </b><br>
				<input type="submit" value="Go to payment">
			</form>
-->