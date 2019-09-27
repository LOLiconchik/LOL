<?php

require "./php/QueryBuilder/QueryBuilder.php";

$page = $_GET['page'];
if ($page === null || $page == 0 || $page < 0) {
    $page = 1;
}

$queryBuilder = QueryBuilder::getInstance();
$comments = $queryBuilder->getCommentsByPage($page);
$totalPages = $queryBuilder->getPagesCount();

$prevLink = 'http://level1.local/index.php?page=' . ($page - 1) . '#comments';
$nextLink = 'http://level1.local/index.php?page=' . ($page + 1) . '#comments';

$hasPrevLink = true;
$hasNextLink = false;

if ($page === 1) {
    $hasPrevLink = false;
}

if ($page < $totalPages - 1) {
    $hasNextLink = true;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/iconmonstr-iconic-font.css">
	<title>Brand</title>
</head>
<body>
<header class="page-header">
	<div class="header-wrapper">
		<div class="logo">
			<img class="logo-img" src="../img/logo.png"
			     width="49"
			     height="42"
			     alt="logo"
			/>
			<span class="logo-text">Brand</span>
		</div>
		<nav class="main-menu">
			<ul>
				<li>
					<a href="#">Skills</a>
				</li>
				<li>
					<a href="#">Portfolio</a>
				</li>
				<li>
					<a href="#">Contact Me</a>
				</li>
				<li>
					<a href="#">Follow Me</a>
				</li>
			</ul>
		</nav>
	</div>
</header>
<main class="page-main">
	<section class="greeting">
		<div class="greeting-wrapper">
			<div class="greeting-text">
				<p class="greeting-text-bold">
					<span class="important-text">Hello!</span>
					Lorem ipsum dolor sit amet consecterur
					<span class="important-text">adipisicing</span> elit
				</p>
				<p class="greeting-text-small">
					Lorem ipsum dolor sit amet, consecterur
					adipisicing elit, sed <br>
					Lorem ipsum dolor sit amet, consecterur
				</p>
			</div>
			<button class="more" name="more">More</button>
		</div>
	</section>
	<section class="skills">
		<div class="skills-wrapper">
			<div class="skill skill-time">
				<div class="time">
					<img src="/img/time.png"
					     alt="time"
					     class="time-img"
					     width="60"
					     height="60"
					/>
					<h3 class="time-text">Time</h3>
				</div>
				<p>
					Lorem ipsum dolor sit amet,<br>
					consecterur adipisicing elit, sed do <br>
					eiusmod tempor incididunt ut labore <br>
					et dolore magna aliqua. Ut <br>
					ecommodo consequat. Duis aute
				</p>
			</div>
			<div class="skill skill-work">
				<div class="work">
					<img src="/img/case.png"
					     alt="case"
					     class="work-img"
					     width="60"
					     height="55"
					/>
					<h3 class="work-text">Work</h3>
				</div>
				<p>
					Lorem ipsun dolor sit amet, <br>
					consecterur adipisicing elit, sed do <br>
					eiusmod tempor incididunt ut labore <br>
					et dolore magna aliqua. Ut <br>
					ecommodo consequat. Duis aute
				</p>
			</div>
			<div class="skill skill-smart">
				<div class="smart">
					<img src="/img/cape.png" alt="cape" class="smart-img" width="60" height="70">
					<h3 class="smart-text">Smart</h3>
				</div>
				<p>
					Lorem ipsum dolor sit amet,<br>
					consecterur adipisicing elit, sed do <br>
					eiusmod tempor incididunt ut labore <br>
					et dolore magna aliqua. Ut <br>
					ecommodo consequat. Duis aute
				</p>
			</div>
			<div class="skill skill-vision">
				<div class="vision">
					<img src="/img/hand.png" alt="hand" class="vision-img" width="60" height="65">
					<h3 class="vision-text">Vision</h3>
				</div>
				<p>
					Lorem ipsum dolor sit amet, <br>
					consecterur adipisicing elit, sed do <br>
					eiusmod tempor incididunt ut labore <br>
					et dolore magna aliqua. Ut <br>
					ecommodo consequat. Duis aute
				</p>
			</div>
		</div>
	</section>
	<section class="my-works">
		<div class="my-works-header">
			<div class="header-my-works">
				<h3>My Works</h3>
			</div>
			<nav class="menu-works">
				<ul>
					<li>
						<a href="#1">All</a>
					</li>
					<li>
						<a href="#2">Graphic Design</a>
					</li>
					<li>
						<a href="#3">Web Design</a>
					</li>
					<li>
						<a href="#4">Logo Design</a>
					</li>
				</ul>
			</nav>
		</div>
		<div class="works-wrapper-h">
			<div class="main">
				<div class="item">
					<div class="sub-item hoverImg1">
						<div class="sub-item-hover">
							<div class="wrap-sub-item-hover">
								<p><span class="bold">Lorem ipsum dolor sit amet,</span><br>
									Lorem ipsum dolor sit amet, <br>
									consecterur adipisicing elit, sed <br>
									do eiusmod tempor
								</p>
								<i class="im im-magnifier"></i>
							</div>
						</div>
						<img src="/img/house-with-balls.png" alt="house-with-balls">
					</div>
					<div class="sub-item hoverImg2">
						<div class="sub-item-hover">
							<div class="wrap-sub-item-hover">
								<p><span class="bold">Lorem ipsum dolor sit amet,</span><br>
									Lorem ipsum dolor sit amet, <br>
									consecterur adipisicing elit, sed <br>
									do eiusmod tempor
								</p>
								<i class="im im-magnifier"></i>
							</div>
						</div>
						<img src="/img/guy-in-the-cap.png" alt="guy-in-the-cap">
					</div>
					<div class="sub-item hoverImg3">
						<div class="sub-item-hover">
							<div class="wrap-sub-item-hover">
								<p><span class="bold">Lorem ipsum dolor sit amet,</span><br>
									Lorem ipsum dolor sit amet, <br>
									consecterur adipisicing elit, sed <br>
									do eiusmod tempor
								</p>
								<i class="im im-magnifier"></i>
							</div>
						</div>
						<img src="/img/mp3-player.png" alt="mp3-player">
					</div>
				</div>
				<div class="item">
					<div class="sub-item hoverImg4">
						<div class="sub-item-hover">
							<div class="wrap-sub-item-hover">
								<p><span class="bold">Lorem ipsum dolor sit amet,</span><br>
									Lorem ipsum dolor sit amet, <br>
									consecterur adipisicing elit, sed <br>
									do eiusmod tempor
								</p>
								<i class="im im-magnifier"></i>
							</div>
						</div>
						<img src="/img/flower.png" alt="flower">
					</div>
					<div class="sub-item hoverImg5">
						<div class="sub-item-hover">
							<div class="wrap-sub-item-hover">
								<p><span class="bold">Lorem ipsum dolor sit amet,</span><br>
									Lorem ipsum dolor sit amet, <br>
									consecterur adipisicing elit, sed <br>
									do eiusmod tempor
								</p>
								<i class="im im-magnifier"></i>
							</div>
						</div>
						<img src="/img/builder.png" alt="builder">
					</div>
					<div class="sub-item hoverImg6">
						<div class="sub-item-hover">
							<div class="wrap-sub-item-hover">
								<p><span class="bold">Lorem ipsum dolor sit amet,</span><br>
									Lorem ipsum dolor sit amet, <br>
									consecterur adipisicing elit, sed <br>
									do eiusmod tempor
								</p>
								<i class="im im-magnifier"></i>
							</div>
						</div>
						<img src="/img/banan.png" alt="banan">
					</div>
				</div>
				<div class="item">
					<div class="sub-item hoverImg7">
						<div class="sub-item-hover">
							<div class="wrap-sub-item-hover">
								<p><span class="bold">Lorem ipsum dolor sit amet,</span><br>
									Lorem ipsum dolor sit amet, <br>
									consecterur adipisicing elit, sed <br>
									do eiusmod tempor
								</p>
								<i class="im im-magnifier"></i>
							</div>
						</div>
						<img src="/img/world.png" alt="world" class="">
					</div>
					<div class="sub-item hoverImg8">
						<div class="sub-item-hover">
							<div class="wrap-sub-item-hover">
								<p><span class="bold">Lorem ipsum dolor sit amet,</span><br>
									Lorem ipsum dolor sit amet, <br>
									consecterur adipisicing elit, sed <br>
									do eiusmod tempor
								</p>
								<i class="im im-magnifier"></i>
							</div>
						</div>
						<img src="/img/legs-boots.png" alt="legs-boots">
					</div>
				</div>
			</div>
			<div class="more-works">
				<button class="more-works button">More</button>
			</div>
		</div>
	</section>
	<section class="comments" id="comments">
		<div class="comments__wrapper">
			<div class="header__comments">
				<h3>Comments</h3>
			</div>
			<div class="d-table">
				<div class="d-tr">
					<div class="d-td">User</div>
					<div class="d-td">Email</div>
					<div class="d-td">Text</div>
				</div>
          <?php foreach ($comments as $comment) { ?>
						<div class="d-tr">
							<div class="d-td"><?= $comment['username']; ?></div>
							<div class="d-td"><?= $comment['email']; ?></div>
							<div class="d-td"><?= $comment['textcomment']; ?></div>
						</div>
          <?php } ?>
			</div>
		</div>
		<div class="pages">
        <?php if ($hasPrevLink) { ?>
					<a href="<?php echo $prevLink ?>">Back</a>
        <?php } ?>
        <?php if ($hasNextLink) { ?>
					<a href="<?php echo $nextLink ?>">Next</a>
        <?php } ?>
		</div>
	</section>
	<section class="add__comment">
		<div class="add__comment-h">
			<div class="header-add__comment">
				<h3>Add Comment</h3>
			</div>
			<form action="/php/send.php" method="post">
				<input type="text" id="your-name" name="your_name" placeholder="Your Name" value="" required>
				<input type="email" id="email" name="email" placeholder="Your Email" required>
				<textarea name="textcomment" id="Your Message" cols="100" rows="50" placeholder="Your Comment"
				          required></textarea>
				<div class="sent-mail">
					<button class="button" type="submit">Add a comment</button>
				</div>
			</form>
		</div>
	</section>
	<section class="follow-me">
		<div class="follow-me-h">
			<h3>Follow Me</h3>
		</div>
		<div class="social">
			<a href="https://www.facebook.com/" class="facebook icon"><i class="im im-facebook"></i></a>
			<a href="https://twitter.com" class="twitter icon"><i class="im im-twitter"></i></a>
			<a href="https://plus.google.com/" class="google-plus icon"><i class="im im-google-plus"></i></a>
			<a href="https://www.youtube.com/" class="youtube icon"><i class="im im-youtube"></i></a>
			<a href="https://www.linkedin.cn" class="linkedin icon"><i class="im im-linkedin"></i></a>
			<a href="https://www.behance.net/" class="behance icon"><i class="im im-behance"></i></a>
			<a href="https://dribbble.com/" class="dribble icon"><i class="im im-dribbble"></i></a>
			<a href="https://www.whatsapp.com/" class="whatsapp icon"><i class="im im-whatsapp"></i></a>
			<a href="https://www.skype.com/ru/" class="skype icon"><i class="im im-skype"></i></a>
		</div>
	</section>
</main>
<footer class="page-footer">
	<p class="made-by">Made <span class="letter-with">with</span> by Ahmad Ebrahim - Email:elmandywork@gmail.com</p>
</footer>
</body>
</html>