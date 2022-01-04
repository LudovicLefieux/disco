<?php get_header(); ?>

	<main class="main">
		<div class="hero section">
			<div class="hero__container container">
				<div class="hero__content-wrapper">
					<h1 class="hero__title">The shopping extension that <span>gives you discounts<span></h1>
					<p class="hero__content">Disco is the browser extension that guarantees discounts on your favourite brands</p>
					<button class="button button--black">
						<a href="https://chrome.google.com/webstore/detail/disco-%E2%80%93-instant-discount/mllianhhiambfndgboiddpflhnmpephj?hl=en" target="_blank" rel="nofollow">Get Disco Extension</a>
					</button>
					<p class="hero__small-text">Install it from the Chrome Store</p>
				</div>
			</div>
		</div>
		<div class="grade section">
			<div class="grade__container container">
				<img src="http://disco.local/wp-content/uploads/2021/12/trustpilot_grade.svg" alt="trustpilot grade">
			</div>
		</div>
		<div class="partners section">
			<div class="partners__container container">
				<div class="partners__grid">
					<a href="https://www.newlook.com/uk" target="_blank" rel="external nofollow">
						<img src="http://disco.local/wp-content/uploads/2021/12/newlook_logo.svg" alt="Newlook logo">
					</a>
					<a href="https://www.boots.com/" target="_blank" rel="external nofollow">
						<img src="http://disco.local/wp-content/uploads/2021/12/boots_logo.svg" alt="Boots logo">
					</a>
					<a href="https://www.diy.com/" target="_blank" rel="external nofollow">
						<img src="http://disco.local/wp-content/uploads/2021/12/b-and-q_logo.svg" alt="B and Q logo">
					</a>
					<a href="https://www.joules.com/" target="_blank" rel="external nofollow">
						<img src="http://disco.local/wp-content/uploads/2021/12/joules_logo.svg" alt="Joules logo">
					</a>
					<a href="https://www.currys.co.uk/gbuk/index.html" target="_blank" rel="external nofollow">
						<img src="http://disco.local/wp-content/uploads/2021/12/currys_logo.svg" alt="Currys logo">
					</a>
					<a href="https://www.emp.co.uk/" target="_blank" rel="external nofollow">
						<img src="http://disco.local/wp-content/uploads/2021/12/empo_logo.svg" alt="Empo logo">
					</a>
					<a href="https://www.furniturevillage.co.uk/" target="_blank" rel="external nofollow">
						<img src="http://disco.local/wp-content/uploads/2021/12/furniture-village_logo.svg" alt="Furniture Village logo">
					</a>
					<a href="https://www.aliexpress.com/" target="_blank" rel="external nofollow">
						<img src="http://disco.local/wp-content/uploads/2021/12/aliexpress_logo.svg" alt="Aliexpress logo">
					</a>
					<a href="https://www.ebuyer.com/" target="_blank" rel="external nofollow">
						<img src="http://disco.local/wp-content/uploads/2021/12/ebuyer_logo.svg" alt="Ebuyer logo">
					</a>
					<a href="https://www.converse.com/uk" target="_blank" rel="external nofollow">
						<img src="http://disco.local/wp-content/uploads/2021/12/converse_logo.svg" alt="Converse logo">
					</a>
				</div>
			</div>
		</div>
		<div id="howItWorks" class="how-it-works section">
			<div class="how-it-works__container container">
				<h2 class="how-it-works__title">How <span>#DiscoMagic</span> works</h2>
				<div class="how-it-works__step">
					<div class="how-it-works__step__img-container">
						<lottie-player src="https://assets-global.website-files.com/60d19fc94c0c1a79fa5363dc/610960c192d8089b2fa9d2d7_store.json" background="transparent"  speed="1" loop autoplay></lottie-player>
					</div>
					<div class="how-it-works__step__content">
						<h3 class="how-it-works__step__heading">Install browser extension</h3>
						<p class="how-it-works__step__text">
							Visit the Chrome Webstore, add the Disco extension to your browser and start seeing discounts in search results or on featured online shops
						</p>
						<div class="browsers-list">
							<div class="browsers-list__item">
								<img src="http://disco.local/wp-content/uploads/2021/12/google-chrome-logo.png" alt="google chrome logo">
								<span class="availability">available</span>
							</div>
							<div class="browsers-list__item">
								<img src="http://disco.local/wp-content/uploads/2021/12/firefox-logo.png" alt="firefox logo black and white">
								<span class="availability">soon</span>
							</div>
						</div>
					</div>
				</div>
				<div class="how-it-works__step how-it-works__step--right">
					<div class="how-it-works__step__content">
						<h3 class="how-it-works__step__heading">Discover unique discounts</h3>
						<p class="how-it-works__step__text">
							The discounts you see are unique. You will never find them anywhere else. How? Pure magic. Almost. Who cares how it works if it works, huh?
						</p>
					</div>
					<div class="how-it-works__step__img-container">
						<lottie-player src="https://assets-global.website-files.com/60d19fc94c0c1a79fa5363dc/6109616d0cfe00bb9816d2cb_cards.json" background="transparent"  speed="1" loop autoplay></lottie-player>
					</div>
				</div>
				<div class="how-it-works__step">
					<div class="how-it-works__step__img-container">
						<lottie-player src="https://assets-global.website-files.com/60d19fc94c0c1a79fa5363dc/6109616d5ed79430ed837914_disco%20button%20animation.json" background="transparent"  speed="1" loop autoplay></lottie-player>
					</div>
					<div class="how-it-works__step__content">
						<h3 class="how-it-works__step__heading">Buy with a discount</h3>
						<p class="how-it-works__step__text">
							Once registered, push the green button at the checkout to buy at a discounted price. Easy!
						</p>
						<button id="videoBtn" class="button button--green">
							<div>
								See tutorial video <i class="fas fa-caret-right"></i>
							</div>
						</button>
					</div>
				</div>
			</div>
		</div>

		<div id="videoModal" class="video-modal section">
			<div class="video-modal__container container">
				<span id="closeVideo" class="close-video" href="#"><i class="fas fa-times"></i></span>
				<div class="video-wrapper">
					<iframe src="https://www.youtube.com/embed/2o1ofO17iRo" title="YouTube video player" frameborder="0" allow="autoplay" allowfullscreen></iframe>
				</div>
			</div>
		</div>

		<div class="guaranteed-discounts section">
			<div class="guaranteed-discounts__container container">
				<div class="guaranteed-discounts__content">
					<p class="guaranteed-discounts__content__large">
						Discover guaranteed <span>discounts</span> with the Disco extension and forget about time-wasters like cashback websites, coupons and the rest
					</p>
					<div class="guaranteed-discounts__content__small">
						<p>Ready to buy with a discount? Complete registration to let the magic happen</p>
						<button class="button button--orange">
							<a href="/sign-up/">Sign Up</a>
						</button>
					</div>
				</div>
				<div class="guaranteed-discounts__img-container"></div>
			</div>
		</div>
		<div class="invite-friend section">
			<div class="invite-friend__container container">
				<div id="inviteFriendTab" class="invite-friend__tab tab">
					<div class="tab__heading">
						<p>Invite a friend to save together</p>
						<p class="tag tag--orange">Get an extra £10</p>
					</div>
					<i class="fas fa-chevron-down"></i>
				</div>
				<div id="inviteFriend" class="invite-friend__content">
					<div class="invite-friend__img-container">
						<img src="http://disco.local/wp-content/uploads/2021/12/invite-friend.svg" alt="Invite a friend and earn 10€">
					</div>
					<div class="invite-friend__text">
						<p>Don’t forget to invite a friend to share the magic: you’ll both get an extra £10. Friends are your greatest asset — that and the time you’ll save for living your best young life (ask grandma, she knows what we mean).</p>
						<a href="#">Referral Program</a>
					</div>
				</div>
			</div>
		</div>
		<div class="why section">
			<div class="why__container container">
				<div class="why__content">
					<h2 class="why__title">Why should you Get Disco?</h2>
					<p class="why__text">You’re a savvy shopper tired of exorbitant prices, endless searches for discount codes and the unbearable flaws of cashback providers. Shop with Disco, the only extension that guarantees discounts</p>
				</div>
				<div class="why__grid">
					<div class="why__grid__item">
						<img src="http://disco.local/wp-content/uploads/2021/12/savings.svg" alt="savings icon">
						<p>Save on every purchase</p>
					</div>
					<div class="why__grid__item">
						<img src="http://disco.local/wp-content/uploads/2021/12/offers.svg" alt="offers icon">
						<p>Personalized offers</p>
					</div>
					<div class="why__grid__item">
						<img src="http://disco.local/wp-content/uploads/2021/12/buy.svg" alt="buy icon">
						<p>Breathtaking deals & sales</p>
					</div>
					<div class="why__grid__item">
						<img src="http://disco.local/wp-content/uploads/2021/12/list-of-orders.svg" alt="list of orders icon">
						<p>See saving history</p>
					</div>
					<div class="why__grid__item">
						<img src="http://disco.local/wp-content/uploads/2021/12/security.svg" alt="security icon">
						<p>Top-notch security</p>
					</div>
				</div>
			</div>
		</div>

		<?php /*if( have_posts() ) : while( have_posts() ) : the_post(); ?>
		
			<h1><?php the_title(); ?></h1>
		
			<?php the_content(); ?>

		<?php endwhile; endif; */?>
	</main>

<?php get_footer(); ?>