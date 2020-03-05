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
							<h3 class="announcement__subtitle">Askew House, Raleigh’s new vegetarian restaurant will feature Fiction Kitchen Chef Caroline Morrison and Bittersweet’s Kim Hammer...<br><br>
							...but don’t freak out—Fiction Kitchen and Bittersweet aren’t going anywhere</h3>
							<div id="announcement-line-top" class="announcement__line-top">
								<img src="<?php echo get_template_directory_uri(); ?>/img/announcement-line-top.svg" alt="Decoration">
							</div>
							<div class="announcement__columns">
								<figure class="announcement__figure">
									<img src="<?php echo get_template_directory_uri(); ?>/img/kim-hammer-caroline-morrison-askew-house.png" alt="Kim Hammer and Caroline Morrison pictured in Askew House building" class="announcement__image">
									<figcaption class="visuallyhidden">Kim Hammer and Caroline Morrison</figcaption>
								</figure>
									<p><strong>What’s going on?</strong></p>
									<p> Caroline Morrison of Fiction Kitchen and Kim Hammer of Bittersweet are joining forces to introduce a gourmet, plant-based dining experience. <strong>Askew House</strong> will be their first joint venture.</p>
									<br>					
									<p>Kim Hammer will be acting as Askew House’s dessert consultant and creative director. Hammer will continue to operate Bittersweet while also working as Creative Director of <strong>One Raleigh</strong>, the downtown hospitality group responsible for Johnson Street Yacht Club and now, Askew House. Additional creative projects will be coming soon to downtown Raleigh.</p>
									<br>
									<p><strong>Okay, so what is it?</strong></p>
									<p>Diners can expect a memorable experience with two floors of elegant and comfortable seating, refined and colorful plating, exceptional and rare local produce, house-made non-dairy cheeses, a vegan cocktail menu, carefully selected natural and biodynamic wines, and mouthwatering desserts.</p>
									<br>
									<p><strong>Askew House</strong> will allow Chef Caroline to further explore the realm of vegetarian and vegan fine dining, while she continues to cultivate Fiction Kitchen’s plant-based menu. She has most recently drawn the attention of the James Beard Foundation, having been named a 2019 fellow in its Women’s Entrepreneurial Leadership program. She will also be a featured chef at the James Beard House in New York City for <strong>New Voices: A Southern Supper</strong> progressive dinner on March 10, 2020.</p> 
									<br>
									<p><strong>Vegan or Vegetarian?</strong></p>
									<p>This will be a 100% vegetarian kitchen with considerable vegan offerings, including house-made vegan cheeses and several vegan desserts.</p> 
									<br>
									<blockquote class="blockquote"><p>“Kim and I have been talking for some time about wanting to work with more small, local growers to bring their produce to downtown Raleigh. Askew House will give us a platform to get more local dollars to farmers using environmentally sound and sustainable farming practices.”</p><footer class="blockquote__footer"><p>—Caroline Morrision<p></footer></blockquote> 
									<br>
									<blockquote class="blockquote"><p>“I have long admired Caroline’s talent and exquisite palate. Askew House is an opportunity to give guests fresher, just-off-the-farm fruits and vegetables at a level of quality and variety not common to the area. Guests should also expect more of the fresh produce-based cocktails found already at Bittersweet and Fiction Kitchen, as well as time intensive dishes like fresh house-made pasta and slow simmered soups.”</p><footer class="blockquote__footer"><p>—Kim Hammer</p></footer></blockquote> 
									<br>
									<p><strong>So where and when?</strong></p>
									<p><strong>Askew House</strong> is located at 110 Glenwood Ave., a house formerly best known to N.C. State Design School students and art lovers as Askew-Taylor Paints. It was founded by John Askew in 1946 and operated as a paint, wallpaper and art supply shop until it closed in 2016. We’d like to think there will still be serious art of coming out of this house, only this time it will be edible.</p>
									<br>
									<p>Askew House is slated to open summer 2020 and will provide two floors of dining with a variety of spaces available for rental—from small parties (under 20) to larger needs such as wedding receptions and private celebrations.</p>
									<br>
									<p>Hiring is under way for front and back of house teams, including management, pastry chefs and front of house with experience in fine dining and wine. Please send resumes to: <a href="mailto:apply@oneraleigh.co">apply@oneraleigh.co</a>

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