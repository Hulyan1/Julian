<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="store.css">
		<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
		<title>Document</title>
	</head>
	<body>
	<section id="sidebar">
		<a href="#" class="brand">
			<img src="../IMG/logo.png" alt="" style="width:200px; padding-left:50px; padding-top:10px;">
			<!-- <i class='bx bxs-smile'></i>
			<span class="text">AdminHub</span> -->
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="index.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="mystore.php">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">My Store</span>
				</a>
			</li>
			<li>
				<a href="customize.php">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Customize</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="settings.php">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="../control/logout.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>

	<section id="content">
		<!-- NAVBAR -->
		<nav>

			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			
			
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="img/people.png">
			</a>
		</nav>
		<main>
		<div class="head-title">
				<div class="left">
					<h1>My Store</h1>
					
				</div>
				<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Products</h3>
						<!-- <i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i> -->
						<a href="AddProduct.php">
							<button style="border-radius: 10px; background: lightseagreen; padding: 10px; cursor: pointer; color: white; font-weight: 700;">Add +</button>						
						</a>
					</div>	
					<table>
						<thead>
							<tr>
								<th>Product Name</th>
								<th>Product Image</th>
								<th>Size</th>
								<th>Product Price</th>
								<th>Date Added</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>	
							<tr>
								<!-- <td>
									<img src="#">
								</td>
								<td>name</td>
								<td>name</td>
								<td>name</td>
								<td>name</td>
								<td>
									<button class="status completed">Edit</button>
									<button class="status pending">Remove</button>
									
								</td> -->
							</tr>
						</tbody>
					</table>
				</div>			
			</div>
		</main>
	</section>
	</body>
</html>