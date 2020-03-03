<?php
/**
 * Template Name: One Raleigh Site Main
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

get_header(); ?>

<div id="primary" class="content-area">
		<main id="main" class="site-main">
				<header class="intro" id="intro">
					<div class="content-wrapper">	
						<h1 class="screen-reader-text">One Raleigh</h1>
						<div class="intro__logo">
							<img src="<?php echo get_template_directory_uri(); ?>/img/one-raleigh-main.svg" alt="One Raleigh Logo" class="intro__image">
						</div>	
						<div class="intro__content">	
							<?php if( get_field('intro_title') ): ?>
								<h2 class="intro__title "><?php the_field('intro_title'); ?></h2>
							<?php endif; ?>
													
													<?php if( get_field('intro_subtitle') ): ?>
															<p class="intro__subtitle"><?php the_field('intro_subtitle'); ?></p>
							<?php endif; ?>
						</div>
						<div class="intro__more">
							<a data-scroll href="#announcement">
								<div class="intro__more-link">More</div>
								<img src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" alt="More" class="intro__more-arrow">
							</a>
						</div>
						<div id="intro-line" class="intro__line">
							<img src="<?php echo get_template_directory_uri(); ?>/img/intro-line.svg" alt="Decoration">
						</div>
					</div>
				</header>
				<section class="announcement" id="announcement">
					<div class="content-wrapper">
						<div class="announcement__content">
							<h2 class="announcement__title">What's New</h2>
							<h3 class="announcement__subtitle">Don’t Freak Out—Fiction Kitchen Isn’t Closing</h3>
							<div id="announcement-line-top" class="announcement__line-top">
								<img src="<?php echo get_template_directory_uri(); ?>/img/announcement-line-top.svg" alt="Decoration">
							</div>
							<div class="announcement__columns">
								<figure class="announcement__figure">
									<img src="<?php echo get_template_directory_uri(); ?>/img/kim-hammer-caroline-morrison-askew-house.png" alt="Kim Hammer and Caroline Morrison pictured in Askew House building" class="announcement__image">
									<figcaption class="visuallyhidden">Kim Hammer and Caroline Morrison</figcaption>
								</figure>
								<h3 class="announcement__subtitle">What’s going on?</h3>						
								<p>Caroline Morrison (Fiction Kitchen) is taking her delicious talent upscale with Askew House, a new vegetarian fine dining restaurant for downtown Raleigh. Kim Hammer (Bittersweet) is jumping in for dessert consult and creative direction.</p>
								<h3 class="announcement__subtitle">Wait, I know Fiction Kitchen isn’t closing, what about Bittersweet?</h3>
								<p>Nope, Bittersweet stays too. Kim is lending dessert, menu and interior assistance—working as Creative Director of OneRaleigh, the hospitality group opening this new joint.</p>
								<h3 class="announcement__subtitle">Okay, so what is it?</h3>
								<p>Askew House is a celebration of vegetarian cuisine in an historic downtown Raleigh house. Expect fancy plating, exceptional and rare produce, a vegan cocktail menu and LOTS of wine.</p>
								<p>Askew House will be a showcase of Chef Morrison’s talent and the natural growth of her skills and cuisine into the realm of fine dining. She has most recently drawn the attention of the James Beard Foundation and will be a featured chef at the James Beard House for New Voices: A Southern Supper progressive dinner on March 10, 2020.</p>
								<h3 class="announcement__subtitle">Vegan or Vegetarian?</h3>
								<p>This will be a 100% vegetarian kitchen with many vegan offerings including house-made vegan cheese and several vegan desserts.</p>	
								<h3 class="announcement__subtitle">How? Wait? Where did this idea come from? </h3>
								<p>Kim and Caroline have been talking for some time about wanting to work with more small, local growers to bring their produce into downtown Raleigh. Askew House will finally give these two a platform to get more local dollars to farmers using environmentally sound and sustainable farming practices. This influx of more delicious local fruits and veggies will give guests fresher, just-off-the-farm produce—at a level of quality and variety that allows Caroline to show off her talent and exquisite palate. Expect more of the fresh produce-based cocktails found already at Bittersweet and Fiction Kitchen as well as time-intensive dishes like fresh house-made pasta and slow simmered soups.</p>
								
								<h3 class="announcement__subtitle">So where and when?</h3>
								<p>Askew House (pronounced ASS-CUE...heh) is located at 110 Glenwood Ave. in the old Askew Taylor Paint shop. Just ask any NCSU Design School Grad to point it out to you. You can’t buy by paint there anymore, but we’d like to think there will still be some serious art coming out of this house. Askew House is slated to open summer 2020 and will provide two floors of dining with a variety of spaces available for rental—from small parties (under 20) to larger needs such as wedding receptions.</p>

								<h3 class="announcement__subtitle">Want to get involved?</h3>
								<p>Askew House will be looking for front and back of house service employees real soon. We are in need of all types of service industry people—including management, pastry chefs and front of house folks with experience in fine dining and wine. Please send resumes to: <a href="mailto:apply@oneraleigh.co">apply@oneraleigh.co</a></p>

							</div>

							<div class="intro__more intro__more--spaced">
									<a href="#contact">
										<div class="intro__more-link">Want to get in touch?</div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" alt="More" class="intro__more-arrow">
									</a>
								</div>
						</div>
					</div>
					<div id="announcement-line-bottom" class="announcement__line-bottom">
						<img src="<?php echo get_template_directory_uri(); ?>/img/announcement-line-bottom.svg" alt="Decoration">
					</div>
				</section>
				<section class="about" id="about">
				<div class="content-wrapper">
					<div id="about-line" class="about__line">
							<img src="<?php echo get_template_directory_uri(); ?>/img/about-line.svg" alt="Decoration">
					</div>
					<div class="about__breakout">
													<?php if( get_field('about_title') ): ?>
															<h1 class="about__title"><?php the_field('about_title'); ?></h1>
							<?php endif; ?>
						</div>
						
						<div class="about__content">
													<?php if( get_field('about_text') ): ?>
															<h1 class="about__title"><?php the_field('about_text'); ?></h1>
													<?php endif; ?>
						</div>
					</div>
				</section>
				<section class="contact" id="contact">
					<div class="content-wrapper">
						<div class="contact__form">
													<?php if( get_field('contact_title') ): ?>
															<h1 class="contact__title"><?php the_field('contact_title'); ?></h1>
													<?php endif; ?>
							<?php echo do_shortcode('[contact-form-7 id="15" title="Contact form 1"]'); ?>
							<div id="contact-line" class="contact__line">
								<img src="<?php echo get_template_directory_uri(); ?>/img/contact-line.svg" alt="Decoration">
							</div>
						</div>
						<div class="contact__projects">
							<h1 class="contact__title">Projects</h1>
								<ul class="contact__project-list">
									<li><img src="<?php echo get_template_directory_uri(); ?>/img/project-askew-house-logo.png" alt=""></li>
									<li>
										<a href="http://jsyachtclub.com" target="_blank">
											<img src="<?php echo get_template_directory_uri(); ?>/img/project-johnson-street-yacht-club-logo.png" alt="JSYC">
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div id="projects-line" class="projects__line">
							<img src="<?php echo get_template_directory_uri(); ?>/img/projects-line.svg" alt="Decoration">
						</div>			
				</section>
				<footer class="footer" id="end">
					<p class="footer__content">The End.</p>
					<p>jk...</p>
				</footer>
		</main><!-- #main -->
		<div class="easter-egg">
			<div class="easter-egg__link">
                    <?php if( get_field('easter_egg_title') ): ?>
                        <p><?php the_field('easter_egg_title'); ?></p>
                    <?php endif; ?>
                <?php if( get_field('easter_egg_link_url') ): ?>
				<div class="easter-egg__glitch">
					<div class="easter-egg__glitch-link">
						<a href="<?php the_field('easter_egg_link_url'); ?>" target="_blank"><?php the_field('easter_egg_link_text'); ?></a>
						<a href="<?php the_field('easter_egg_link_url'); ?>" target="_blank"><?php the_field('easter_egg_link_text'); ?></a>
						<a href="<?php the_field('easter_egg_link_url'); ?>" target="_blank"><?php the_field('easter_egg_link_text'); ?></a>
					</div>
				</div>
                <?php endif; ?>
			</div>
		</div>
		<div id="cats"></div>
    </div><!-- #primary -->
    
<?php
get_footer();