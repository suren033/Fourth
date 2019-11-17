<?php
	function conf() {
		include('conf/connectDb.php');
		$query = $db->query(" SELECT * FROM `conf`");
		$query = mysqli_fetch_assoc($query); 
		echo $query['title'] . $query['num'] . $query['description'] . $query['icon'];
	}
?>
<?php
	function what() {
		include('conf/connectDb.php');
		$query = $db->query(" SELECT * FROM `skills`");
		$query = mysqli_fetch_assoc($query); 
		echo $query['title'] . $query['description'] . $query['img'];
	}
?>
<?php
	function skills() {
		include('conf/connectDb.php');
		$query = $db->query(" SELECT * FROM `skills`");
		$query = mysqli_fetch_assoc($query); 
		echo $query['javascript'] . $query['scriptnum'] . $query['java'] . $query['javanum'] 
			. $query['python'] . $query['pythonnum'] . $query['php'] . $query['phpnum'] 
			. $query['ruby'] . $query['rubynum'] . $query['c'] . $query['cnum'];
	}
?>
<?php
	function pricing() {
		include('conf/connectDb.php');
		$query = $db->query(" SELECT * FROM `pricing`");
		$query = mysqli_fetch_assoc($query); 
		echo $query['title'] . $query['img'] . $query['description'] . $query['num'] 
			. $query['development'] . $query['advetising'] . $query['game'] . $query['music'] 
			. $query['hire'];
	}
?>
<?php
	function experiences() {
		include('conf/connectDb.php');
		$query = $db->query(" SELECT * FROM `experiences");
		$query = mysqli_fetch_assoc($query); 
		echo $query['art'] . $query['oxford'] . $query['num'] . $query['fact'] 
			. $query['uxui'] . $query['iron'] .  $query['responsibility'] . $query['validate'] 
			.  $query['project'];
	}
?>
<?php
	function blog() {
		include('conf/connectDb.php');
		$query = $db->query(" SELECT * FROM `blog");
		$query = mysqli_fetch_assoc($query); 
		echo $query['img'] . $query['title'] . $query['num'] . $query['autor'] 
			. $query['description'] . $query['moretext'];
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Maha - Personal CV/Resume Template</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/all.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
	<header class="header" id="home">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<nav class="nav">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#about">About</a></li>
							<li><a href="#skills">Skills</a></li>
							<li><a href="#experiences">Experiences</a></li>
							<li><a href="#portfolio">Portfolio</a></li>
							<li><a href="#pricing">Pricing</a></li>
							<li><a href="#blog">Blog</a></li>
							<li><a href="#contact">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>




	<section class="header__2 py-5">
		<div class="container">
			<div class="row">
				<?php
					$db = @new mysqli("localhost", "root", "", "mydb");
					$query = " SELECT * FROM `conf`";
					$res = mysqli_query($db, $query);
					for ($i = 0; $i <= 2; $i++) {
						$row = mysqli_fetch_assoc($res);

							echo '<div class="col-sm-6">
									<div class="wow">
										<span>'.$row["title"].'</span>
									</div>
									<h2 class="alex">'.$row["title"].'</h2>
									<h5 class="text__product">'.$row["title"].'</h5>
									<div class="mail">
										<i class="'.$row["icon"].'"></i>
										<p>'.$row["title"].'</p>
									</div>
									<div class="phone">
										<i class="'.$row["icon"].'"></i>	
										<p>'.$row["title"].'</p>
									</div>
									<div class="gps">
										<i class="fas fa-map-marker-alt"></i>
										<p>'.$row["title"].'</p>
									</div>
									<div class="icons">
										<a href="https://www.facebook.com/" target="_blank" class="fac"><i class="'.$row[icon].' facebook"></i></a>
										<a href="https://twitter.com/?lang=en" class="tw" target="_blank"><i class="'.$row[icon].' twetter"></i></a>
										<a href="https://github.com/" class="git" target="_blank"><i class="'.$row[icon].' github"></i></a>
									</div>
								</div>
							</div>
					';
				?>
			
				<div class="col-sm-6">
					<div class="hero">
						<div class="hero__border">
							<img src="img/hero.png" alt="Hero" class="hero__img">			
						</div>
				</div>
			</div>
		</div>
	</section>




	<section class="about" id="about">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<img src="img/ab-img.png" alt="ab" class="ab">				
				</div>	

				<div class="col-sm-6">
					<div class="about__left">
						<div class="about-me">
							<p class="about__text">'.$row["title"].'</p>
							<h5 class="patrick">'.$row["description"].'</h5>
						</div>
						<div class="about__menu">
							<ul>
								<li>
									<sapn>php</sapn>
								</li>
								<li>
									<sapn>html</sapn>
								</li>
								<li>
									<sapn>css</sapn>
								</li>
								<li>
									<sapn>php</sapn>
								</li>
								<li>
									<sapn>wordprees</sapn>
								</li>
								<li>
									<sapn>React</sapn>
								</li>
								<li>
									<sapn>Javascript</sapn>
								</li>
							</ul>
						</div>
						<br><br><br><br><button class="download">
							<span>Downlaod CV</span>
							<i class="fas fa-download"></i>
						</button>
					</div>
				</div>
			</div>
		</div>
	</section>



	<section class="what-i-do">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<p class="what">What I do</p>
				</div>
			</div>
			<div class="row">
				<?php
					$db = @new mysqli("localhost", "root", "", "mydb");
					$query = " SELECT * FROM `what`";
					$res = mysqli_query($db, $query);
					for ($i = 0; $i <= 2; $i++) {
						$row = mysqli_fetch_assoc($res);

							echo '<div class="col-lg-4">
							<div class="about__3">
								<div class="design">
									<i class="'.$row["img"].'"></i><br>
									<p class="design__text">'.$row["title"].'</p>
									<h6 class="lorem">'.$row["description"].'</h6><br>
								</div>
							</div>
						</div>';
					}
				?>
			</div>
		</div>
	</section>



	<section class="projects">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p class="title">Featured Projects</p>	
				</div>
			</div>
			<div class="row">
				<div class="col-sm-7">
					<div class="sl">
						<img src="img/img__slider.png" alt="slider" class="sl__img">
					</div>
				</div>
				<div class="col-sm-5">
					<div class="block">
						<p class="web">'.$row["title"].'</p>
						<h5 class="wrap">'.$row["title"].'</h5>
						<h4 class="design__development">'.$row["title"].'</h4>
						<h3 class="stamp">'.$row["description"].'</h3>
                        <button class="view"><span>'.$row["title"].'</span></button>
                        <blockquote>
                        	<q>'.$row["description"].'</q>
                        </blockquote>
                        <p class="shane">'.$row["title"].'</p>
					</div>
				</div>
			</div>
		</div>
	</section>




	<section class="skills" id="skills">
		<div class="container">
			<div class="row">
				<?php
			 		$db = @new mysqli("localhost", "root", "", "mydb");
					$query = " SELECT * FROM `skills`";
					$res = mysqli_query($db, $query);
					for ($i = 0; $i <= 0; $i++) {
						$row = mysqli_fetch_assoc($res);
						echo '<div class="col-lg-6">
						<p class="technical">Technical Skills</p>
						<div class="javascript">
							<p class="script">'.$row["javascript"].'</p>
							<p class="deg">'.$row["scriptnum"].'</p>
						</div>
						<div class="line__1"><div class="line__2"></div></div>
						<div class="javascript">
							<p class="script">'.$row["java"].'</p>
							<p class="deg">'.$row["javanum"].'</p>
						</div>
						<div class="line__1"><div class="line__3"></div></div>
						<div class="javascript">
							<p class="script">'.$row["python"].'</p>
							<p class="deg">'.$row["pythonnum"].'</p>
						</div>
						<div class="line__1"><div class="line__4"></div></div>
						<div class="javascript">
							<p class="script">'.$row["php"].'</p>
							<p class="deg">'.$row["phpnum"].'</p>
						</div>
						<div class="line__1"><div class="line__5"></div></div>
						<div class="javascript">
							<p class="script">'.$row["ruby"].'</p>
							<p class="deg">'.$row["rubynum"].'</p>
						</div>
						<div class="line__1"><div class="line__6"></div></div>
						<div class="javascript">
							<p class="script">'.$row["c"].'</p>
							<p class="deg">'.$row["cnum"].'</p>
						</div>
						<div class="line__1"><div class="line__7"></div></div>
					</div>';
					} 
				?>
				<div class="col-lg-6">
					<p class="professional">Professional Skills</p>
					<div class="cirkle__1">
						<div class="cirkle__2">
							<span>95%</span>
						</div>
						<h5 class="cirkle__text">Communication</h5>
					</div>
				</div>
			</div>
		</div>
	</section>





	<section class="experiences" id="experiences">
		<div class="container">
			<div class="row">
				<?php
					$db = @new mysqli("localhost", "root", "", "mydb");
					$query = " SELECT * FROM `experiences`";
					$res = mysqli_query($db, $query);
					for ($i = 0; $i <= 0; $i++) {
						$row = mysqli_fetch_assoc($res);

							echo '<div class="col-lg-6">
									<p class="education__text">Education</p>
									<div class="oxford">
										<h4 class="art">'.$row["art"].'
											<a href="#" class="oxford__text">'.$row["oxford"].'</a>
										</h4>
										<h4 class="eduyear">'.$row["num"].'</h4>
										<p class="long">'.$row["fact"].'</p>
									</div>
									<div class="oxford">
										<h4 class="art">'.$row["art"].'
											<a href="#" class="oxford__text">'.$row["oxford"].'</a>
										</h4>
										<h4 class="eduyear">'.$row["num"].'</h4>
										<p class="long">'.$row["fact"].'</p>
									</div>
									<div class="oxford">
										<h4 class="art">'.$row["art"].'
											<a href="#" class="oxford__text">'.$row["oxford"].'</a>
										</h4>
										<h4 class="eduyear">'.$row["num"].'</h4>
										<p class="long">'.$row["fact"].'</p>
									</div>
								</div>';
				?>
								<div class="col-lg-6">
									<p class="work">Work Experience</p>
									<div class="oxford">
										<h4 class="ux">'.$row["uxui"].'<a href="#" class="iron">'.$row["iron"].'</a></h4>
										<h4 class="eduyear">'.$row["num"].'</h4>
										<p class="bility">'.$row["responsibility"].'</p>
										<ul class="ul">
											<li><i class="fa fa-circle point"></i>'.$row["validate"].'</li>
											<li><i class="fa fa-circle point"></i>'.$row["project"].'</li>
										</ul>
									</div>
									<div class="oxford">
										<h4 class="ux">'.$row["art"].'
											<a href="#" class="iron">'.$row["oxford"].'</a>
										</h4>
										<h4 class="eduyear">'.$row["num"].'</h4>
										<p class="bility">'.$row["responsibility"].'</p>
										<ul class="ul">
											<li><i class="fa fa-circle point"></i>'.$row["validate"].'</li>
											<li><i class="fa fa-circle point"></i>'.$row["project"].'</li>
										</ul>
									</div>
									<div class="oxford">
										<h4 class="ux">'.$row["art"].'
											<a href="#" class="iron">'.$row["oxford"].'</a>
										</h4>	
										<h4 class="eduyear">'.$row["num"].'</h4>
										<p class="bility">'.$row["responsibility"].'</p>
										<ul class="ul">
											<li><i class="fa fa-circle point"></i>'.$row["validate"].'</li>
											<li><i class="fa fa-circle point"></i>'.$row["project"].'</li>
										</ul>
									</div>
								</div>
			</div>
		</div>
	</section>




	<section class="recent" id="portfolio">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p class="recent__text">Recent Portfolio</p>
					<nav class="menu">
						<ul>
							<li class="menu__categories"><span>All Categories</span></li>
							<li class="menu__categories"><span>Web Design</span></li>
							<li class="menu__categories"><span>Branding</span></li>
							<li class="menu__categories"><span>Mockups</span></li>
							<li class="menu__categories"><span>Photograpy</span></li>
						</ul>
					</nav>
				</div>
			</div>
			<div class="row portfolio__img">
				<div class="col-lg-4">
					<div class="images">
						<img src="img/g1.jpg" alt="g1" class="img">
						<img src="img/g4.png" alt="g4" class="img">
						<img src="img/g7.png" alt="g7" class="img">	
					</div>				
				</div>
				<div class="col-lg-4">
					<div class="images img__top">
						<img src="img/g2.png" alt="g2" class="img">
						<img src="img/g5.png" alt="g5" class="img">
						<img src="img/g8.png" alt="g8" class="img">
					</div>
				</div>
				<div class="col-lg-4">
					<div class="images img__top img__bottom">
						<img src="img/g3.png" alt="g3" class="img">
						<img src="img/g6.png" alt="g6" class="img">
						<img src="img/g9.jpg" alt="g9" class="img">
					</div>
				</div>
			</div>
		</div>
	</section>




	<section class="intersted py-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="intersted__work">
						<p class="towork">Interested to Work?</p>
						<h5 class="mirum">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat. Mirum est notare quam <br> littera othica. quam nunc putamus parum claram,</h5>
						<button class="contact">Contact</button>
					</div>
				</div>
			</div>
		</div>
	</section>




	<section class="table" id="pricing">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p class="table__text">Pricing Table</p>
				</div>
			</div>
			<div class="row">
				<?php
					$db = @new mysqli("localhost", "root", "", "mydb");
					$query = " SELECT * FROM `pricing`";
					$res = mysqli_query($db, $query);
					for ($i = 0; $i <= 2; $i++) {
						$row = mysqli_fetch_assoc($res);
						echo 	'<div class="col-lg-4">
									<div class="full__time">
										<i class="'.$row["img"].'"></i>
										<h4 class="full__text">'.$row["title"].'</h4>
										<p class="available">'.$row["description"].'</p><br>
										<p class="dolar">'.$row["num"].'</p>
										<ul>
											<li>'.$row["development"].'</li>
											<li>'.$row["advetising"].'</li>
											<li>'.$row["game"].'</li>
											<li>'.$row["music"].'</li>
										</ul>
										<button class="hire">'.$row["hire"].'</button>
									</div>
								</div>';
					}
				?>			
		</div>
	</section>


	<section class="featured pb-5" id="blog">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p class="featured__text">Featured Posts</p>
				</div>
			</div>
			<div class="row">
			<?php
				$db = @new mysqli("localhost", "root", "", "mydb");
				$query = " SELECT * FROM `blog`";
				$res = mysqli_query($db, $query);
				for ($i = 0; $i <= 2; $i++) {
					$row = mysqli_fetch_assoc($res);
					echo 	'<div class="col-lg-4">
								<div class="traffic">
									<div class="read">
										'.$row["img"].'
										<p class="traffic__text">'. $row["title"].'</p>
										<p class="post">Post On <span>'.$row["num"].'</span> By <span>'.$row["autor"].'</span></p>
										<p class="fact">'.$row["description"].'</p>
										<p class="read__text">'.$row["moretext"].'</p>
									</div>
								</div>
							</div>';
				}
			?>
	</section>






	<section class="client">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p class="title">Client Reviews</p>
				</div>
			</div>
			<div class="row py-5">
				<div class="col-lg-12">
					<div class="owl-carousel owl-theme">	
					    <div class="item">
					    	<img src="img/c-1.png" alt="c-1" class="girl">
					    	<p>Absolute wonderful ! I am completely
                            blown away.The very best.I was amazed
                            at the quality </p>
                            <h4>John Mike</h4>
           	                <h6>CEO,Author,Inc</h6>
					    </div>
					    <div class="item">
					    	<img src="img/c-1.png" alt="c-1" class="girl">
					    	<p>Absolute wonderful ! I am completely
                            blown away.The very best.I was amazed
                            at the quality </p>
                            <h4>John Mike</h4>
           	                <h6>CEO,Author,Inc</h6>
					    </div>
					    <div class="item">
					    	<img src="img/c-1.png" alt="c-1" class="girl">
					    	<p>Absolute wonderful ! I am completely
                            blown away.The very best.I was amazed
                            at the quality </p>
                            <h4>John Mike</h4>
           	                <h6>CEO,Author,Inc</h6>
					    </div>
					    <div class="item">
					    	<img src="img/c-1.png" alt="c-1" class="girl">
					    	<p>Absolute wonderful ! I am completely
                            blown away.The very best.I was amazed
                            at the quality </p>
                            <h4>John Mike</h4>
           	                <h6>CEO,Author,Inc</h6>
					    </div>
					    <div class="item">
					    	<img src="img/c-1.png" alt="c-1" class="girl">
					    	<p>Absolute wonderful ! I am completely
                            blown away.The very best.I was amazed
                            at the quality </p>
                            <h4>John Mike</h4>
           	                <h6>CEO,Author,Inc</h6>
					    </div>
					    <div class="item">
					    	<img src="img/c-1.png" alt="c-1" class="girl">
					    	<p>Absolute wonderful ! I am completely
                            blown away.The very best.I was amazed
                            at the quality </p>
                            <h4>John Mike</h4>
           	                <h6>CEO,Author,Inc</h6>
					    </div>
					    </div>
					</div>
				</div>
			</div>
		</div>
	</section>	






	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 py-5">
					<p class="title">Contact Me</p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-6">
					<div class="col-sm-12">
						<div class="address">
							<div class="location">
								<i class="fas fa-location-arrow"></i>
							</div>
							<div class="media__body">
								<h4 class="right address__text">Address</h4>
								<p class="right floor">5th Avenue, 34th floor,<br>
								<span class="right">New york</span></p>
							</div>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="address">
							<div class="location">
								<i class="far fa-envelope"></i>
							</div>
							<div class="media__body">
								<h5 class="your-mail">Email</h5>
								<p class="yourmail">yourmail@email.com<br>
								<span>yourmail@email.com</span></p>
							</div>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="address">
							<div class="location">
								<i class="fas fa-phone-alt"></i>
							</div>
							<div class="media__body">
								<h4 class="phone__numbers">Phone</h4>
								<p class="numbers">(880)-8976-987<br>
								<span>(880)-8976-987</span></p>
							</div>
						</div>					
					</div>
				</div>
				<div class="col-sm-12 col-md-6 pt-5">
					<input type="text" placeholder="First Name" class="first"><br>
					<input type="text" placeholder="Last Name" class="last"><br>
					<input type="email" placeholder="Your Email" class="email">
					<textarea name="" cols="30" rows="9" placeholder="Your Messege"></textarea>
					<button class="messege__button"><span>Send Messege</span></button>
				</div>
			</div>
			<div class="row my-5">
				<div class="col-lg-6">
					<p class="all__right">All right reserved Siful Islam @ 2018</p>
				</div>
				<div class="col-lg-6">
					<div class="links">
						<a href="https://www.facebook.com/" target="_blank" class="fac"><i class="fab fa-facebook-f fb"></i></a>
						<a href="https://twitter.com/?lang=en" class="tw" target="_blank"><i class="fab fa-twitter tw"></i></a>
						<a href="https://github.com/" class="git" target="_blank"><i class="fab fa-github gh"></i></a>
					</div>
				</div>
			</div>
		</div>
	</footer>


	<script src="js/owl.carousel.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>