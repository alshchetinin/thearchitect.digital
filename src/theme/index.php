<?php get_header(); ?>
<!-- container -->
<section class="hero">
	<div class="hero-romb" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/svg/romb.svg')">
	</div>
	<div class="container">

		<div class="hero__headline">
			Диджитал-эксперт в&nbsp;девелопменте

		</div>

	</div>
</section>
<section class="main-project">
	<div class="container">
		<div class="description">
			<p>


			</p>
		</div>
		<h2 class="section-headline">Проекты</h2>
		<div class="project-slider">

			<?php
			$args = array(
				'post_type' => 'project',
				'publish' => true,
				'paged' => get_query_var('paged'),
				'numberposts' => 4,
				'category_name' => 'main-page'
			);
			$my_posts = get_posts($args);
			foreach ($my_posts as $post) :
				setup_postdata($post);
				$image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
				?>

				<div class="project-slider-item">
					<div class="project-slider-item__img parent" style="background-image:url('<?php echo $image_url[0]; ?>');">
						<div class="project-slider-item__tag-wrapper ">
							<?php $posttags = get_the_tags();
								if ($posttags) {
									foreach ($posttags as $tag) {
										echo '<a class="tag">' . $tag->name . '</a>';
									}
								} ?>
						</div>

					</div>

					<a href="<?php the_permalink(); ?>" class="project-slider-item__href"></a>
					<div class="project-slider-item__headline">
						<?php the_title(); ?>
					</div>
					<!-- <?php echo get_the_tag_list(''); ?> -->
				</div>
			<?php endforeach; ?>

			<div class="all_project">
				<a href="/project"> Все <br> проекты</a>
			</div>
		</div>
	</div>
</section>
<?php get_template_part('inc/whatwedo'); ?>
<section class="team">
	<div class="container">
		<div class="right">
			<div class="right-stiky">
				<h2 class="section-headline">Как мы делаем</h2>
				<div>
					<h3>Анализируем и выбираем <br>лучшее решение</h3>
					<p>
						Наш аудит по 360 позициям дает полное понимание об эффективности интернет-маркетинга. Мы вместе с вами поставим цель и достигнем её самым эффективным способом
					</p>
				</div>
				<div>
					<h3>Управляем качеством и сроками</h3>
					<p>
						Разработанная нами система управления проектами, брифы, чек-листы и формы внутренней отчетности позволяют добиваться желаемых результатов в поставленные сроки

					</p>
				</div>
				<div>
					<h3>Проявляем гибкость</h3>
					<p>
						Если меняются вводные, мы быстро адаптируемся, корректируем стратегию и инструменты достижения цели
					</p>
				</div>
			</div>
		</div>
		<div class="left">
			<div class="rhombusTeam">
				<svg width="720" height="1470" viewBox="0 0 720 1470" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
					<g id="SVG">
						<g id="rhombusTeamHover">
							<path id="&#208;&#144;&#209;&#128;&#209;&#130;&#208;&#181;&#208;&#188;" d="M480 244.974L360 0L240 244.974L360 490L480 244.974Z" fill="#FF403C" />
							<text id="&#208;&#178;&#208;&#181;&#208;&#177;-&#208;&#180;&#208;&#184;&#208;&#183;&#208;&#176;&#208;&#185;&#208;&#189;&#208;&#181;&#209;&#128;" fill="#00284B" xml:space="preserve" style="white-space: pre" font-family="Avenir Next" font-size="12" letter-spacing="0em">
								<tspan x="321.184" y="258.804">&#x432;&#x435;&#x431;-&#x434;&#x438;&#x437;&#x430;&#x439;&#x43d;&#x435;&#x440;</tspan>
							</text>
							<text id="&#208;&#144;&#208;&#187;&#208;&#181;&#208;&#186;&#209;&#129;&#208;&#176;&#208;&#189;&#208;&#180;&#209;&#128; &#208;&#169;&#208;&#181;&#209;&#130;&#208;&#184;&#208;&#189;&#208;&#184;&#208;&#189;" fill="#00284B" xml:space="preserve" style="white-space: pre" font-family="Avenir Next" font-size="16" font-weight="600" letter-spacing="0em">
								<tspan x="279.375" y="241.072">&#x410;&#x43b;&#x435;&#x43a;&#x441;&#x430;&#x43d;&#x434;&#x440; &#x429;&#x435;&#x442;&#x438;&#x43d;&#x438;&#x43d;</tspan>
							</text>
						</g>
						<g id="rhombusTeamHover">
							<path id="&#208;&#155;&#208;&#184;&#208;&#183;&#208;&#176;" d="M360 489.974L240 245L120 489.974L240 735L360 489.974Z" fill="#FDB515" />
							<text id="Digital-&#208;&#188;&#208;&#176;&#209;&#129;&#209;&#130;&#208;&#181;&#209;&#128;" fill="#00284B" xml:space="preserve" style="white-space: pre" font-family="Avenir Next" font-size="12" letter-spacing="0em">
								<tspan x="203" y="520.804">Digital-&#x43c;&#x430;&#x441;&#x442;&#x435;&#x440;</tspan>
							</text>
							<text id="&#208;&#149;&#208;&#187;&#208;&#184;&#208;&#183;&#208;&#176;&#208;&#178;&#208;&#181;&#209;&#130;&#208;&#176; &#208;&#149;&#208;&#179;&#208;&#190;&#209;&#128;&#208;&#190;&#208;&#178;&#208;&#176;" fill="#00284B" xml:space="preserve" style="white-space: pre" font-family="Avenir Next" font-size="16" font-weight="600" letter-spacing="0em">
								<tspan x="174" y="503.072">&#x415;&#x43b;&#x438;&#x437;&#x430;&#x432;&#x435;&#x442;&#x430; &#x415;&#x433;&#x43e;&#x440;&#x43e;&#x432;&#x430; </tspan>
							</text>
						</g>
						<g id="rhombusTeamHover">
							<path id="&#208;&#154;&#209;&#129;&#209;&#142;&#209;&#133;&#208;&#176;" d="M600 489.974L480 245L360 489.974L480 735L600 489.974Z" fill="url(#pattern0)" />
							<path id="&#208;&#154;&#209;&#129;&#209;&#142;&#209;&#133;&#208;&#176;_2" d="M600 489.974L480 245L360 489.974L480 735L600 489.974Z" fill="#FDB515" />
							<text id="&#208;&#180;&#208;&#184;&#208;&#183;&#208;&#176;&#208;&#185;&#208;&#189;&#208;&#181;&#209;&#128;" fill="#00284B" xml:space="preserve" style="white-space: pre" font-family="Avenir Next" font-size="12" letter-spacing="0em">
								<tspan x="449" y="520.804">&#x434;&#x438;&#x437;&#x430;&#x439;&#x43d;&#x435;&#x440;</tspan>
							</text>
							<text id="&#208;&#154;&#209;&#129;&#208;&#181;&#208;&#189;&#208;&#184;&#209;&#143; &#208;&#154;&#208;&#190;&#208;&#186;&#208;&#190;&#208;&#178;&#208;&#184;&#208;&#189;&#208;&#176;" fill="#00284B" xml:space="preserve" style="white-space: pre" font-family="Avenir Next" font-size="16" font-weight="600" letter-spacing="0em">
								<tspan x="417" y="503.072">&#x41a;&#x441;&#x435;&#x43d;&#x438;&#x44f; &#x41a;&#x43e;&#x43a;&#x43e;&#x432;&#x438;&#x43d;&#x430;</tspan>
							</text>
						</g>
						<g id="rhombusTeamHover">
							<path id="&#208;&#161;&#208;&#176;&#208;&#189;&#208;&#181;&#208;&#186;" d="M480 734.974L360 490L240 734.974L360 980L480 734.974Z" fill="#333333" />
							<text id="&#208;&#161;&#208;&#190;&#208;&#190;&#209;&#129;&#208;&#189;&#208;&#190;&#208;&#178;&#208;&#176;&#209;&#130;&#208;&#181;&#208;&#187;&#209;&#140;" fill="white" xml:space="preserve" style="white-space: pre" font-family="Avenir Next" font-size="12" letter-spacing="0em">
								<tspan x="320.217" y="748.804">&#x421;&#x43e;&#x43e;&#x441;&#x43d;&#x43e;&#x432;&#x430;&#x442;&#x435;&#x43b;&#x44c;</tspan>
							</text>
							<text id="&#208;&#144;&#208;&#187;&#208;&#181;&#208;&#186;&#209;&#129;&#208;&#176;&#208;&#189;&#208;&#180;&#209;&#128; &#208;&#161;&#209;&#131;&#209;&#135;&#208;&#186;&#208;&#190;&#208;&#178;" fill="white" xml:space="preserve" style="white-space: pre" font-family="Avenir Next" font-size="16" font-weight="600" letter-spacing="0em">
								<tspan x="287.461" y="731.072">&#x410;&#x43b;&#x435;&#x43a;&#x441;&#x430;&#x43d;&#x434;&#x440; &#x421;&#x443;&#x447;&#x43a;&#x43e;&#x432;</tspan>
							</text>
						</g>
						<g id="rhombusTeamHover">
							<path id="&#208;&#156;&#208;&#176;&#209;&#128;&#209;&#129;&#208;&#181;&#208;&#187;&#209;&#140;" d="M720 734.974L600 490L480 734.974L600 980L720 734.974Z" fill="#333333" />
							<text id="&#208;&#161;&#208;&#190;&#208;&#190;&#209;&#129;&#208;&#189;&#208;&#190;&#208;&#178;&#208;&#176;&#209;&#130;&#208;&#181;&#208;&#187;&#209;&#140;_2" fill="white" xml:space="preserve" style="white-space: pre" font-family="Avenir Next" font-size="12" letter-spacing="0em">
								<tspan x="559.217" y="748.804">&#x421;&#x43e;&#x43e;&#x441;&#x43d;&#x43e;&#x432;&#x430;&#x442;&#x435;&#x43b;&#x44c;</tspan>
							</text>
							<text id="&#208;&#156;&#208;&#176;&#209;&#128;&#209;&#129;&#208;&#181;&#208;&#187;&#209;&#140; &#208;&#147;&#208;&#176;&#208;&#177;&#208;&#180;&#209;&#131;&#208;&#187;&#209;&#140;&#208;&#188;&#208;&#176;&#208;&#189;&#208;&#190;&#208;&#178;" fill="white" xml:space="preserve" style="white-space: pre" font-family="Avenir Next" font-size="16" font-weight="600" letter-spacing="0em">
								<tspan x="508.289" y="731.072">&#x41c;&#x430;&#x440;&#x441;&#x435;&#x43b;&#x44c; &#x413;&#x430;&#x431;&#x434;&#x443;&#x43b;&#x44c;&#x43c;&#x430;&#x43d;&#x43e;&#x432;</tspan>
							</text>
						</g>
						<g id="rhombusTeamHover">
							<path id="&#208;&#161;&#208;&#181;&#208;&#188;&#208;&#181;&#208;&#189;" d="M240 734.974L120 490L0 734.974L120 980L240 734.974Z" fill="#333333" />
							<text id="&#208;&#186;&#208;&#190;&#208;&#189;&#209;&#130;&#208;&#181;&#208;&#189;&#209;&#130;-&#208;&#186;&#209;&#128;&#208;&#181;&#208;&#176;&#209;&#130;&#208;&#190;&#209;&#128;" fill="white" xml:space="preserve" style="white-space: pre" font-family="Avenir Next" font-size="12" letter-spacing="0em">
								<tspan x="66.3828" y="748.804">&#x43a;&#x43e;&#x43d;&#x442;&#x435;&#x43d;&#x442;-&#x43a;&#x440;&#x435;&#x430;&#x442;&#x43e;&#x440;</tspan>
							</text>
							<text id="&#208;&#161;&#208;&#181;&#208;&#188;&#208;&#181;&#208;&#189; &#208;&#145;&#208;&#181;&#208;&#187;&#208;&#190;&#208;&#178;" fill="white" xml:space="preserve" style="white-space: pre" font-family="Avenir Next" font-size="16" font-weight="600" letter-spacing="0em">
								<tspan x="68.2188" y="731.072">&#x421;&#x435;&#x43c;&#x435;&#x43d; &#x411;&#x435;&#x43b;&#x43e;&#x432;</tspan>
							</text>
						</g>
						<g id="rhombusTeamHover">
							<path id="&#208;&#144;&#208;&#189;&#208;&#180;&#209;&#128;&#208;&#181;&#208;&#185;" d="M360 979.974L240 735L120 979.974L240 1225L360 979.974Z" fill="#FF403C" />
							<text id="&#208;&#191;&#209;&#128;&#208;&#190;&#208;&#181;&#208;&#186;&#209;&#130;-&#208;&#188;&#208;&#181;&#208;&#189;&#208;&#181;&#208;&#180;&#208;&#182;&#208;&#181;&#209;&#128;" fill="#00284B" xml:space="preserve" style="white-space: pre" font-family="Avenir Next" font-size="12" letter-spacing="0em">
								<tspan x="187.027" y="993.804">&#x43f;&#x440;&#x43e;&#x435;&#x43a;&#x442;-&#x43c;&#x435;&#x43d;&#x435;&#x434;&#x436;&#x435;&#x440;</tspan>
							</text>
							<text id="&#208;&#162;&#208;&#176;&#209;&#130;&#209;&#140;&#209;&#143;&#208;&#189;&#208;&#176; &#208;&#148;&#208;&#176;&#208;&#189;&#208;&#184;&#208;&#187;&#208;&#190;&#208;&#178;&#208;&#176;" fill="#00284B" xml:space="preserve" style="white-space: pre" font-family="Avenir Next" font-size="16" font-weight="600" letter-spacing="0em">
								<tspan x="169.141" y="976.072">&#x422;&#x430;&#x442;&#x44c;&#x44f;&#x43d;&#x430; &#x414;&#x430;&#x43d;&#x438;&#x43b;&#x43e;&#x432;&#x430;</tspan>
							</text>
						</g>
						<g id="rhombusTeamHover">
							<path id="&#208;&#161;&#208;&#176;&#208;&#189;&#208;&#181;&#208;&#186;1" d="M600 979.974L480 735L360 979.974L480 1225L600 979.974Z" fill="#FF403C" />
							<text id="&#208;&#184;&#209;&#129;&#208;&#191;&#208;&#190;&#208;&#187;&#208;&#189;&#208;&#184;&#209;&#130;&#208;&#181;&#208;&#187;&#209;&#140;&#208;&#189;&#209;&#139;&#208;&#185; &#208;&#180;&#208;&#184;&#209;&#128;&#208;&#181;&#208;&#186;&#209;&#130;&#208;&#190;&#209;&#128;" fill="#00284B" xml:space="preserve" style="white-space: pre" font-family="Avenir Next" font-size="12" letter-spacing="0em">
								<tspan x="405.373" y="993.804">&#x438;&#x441;&#x43f;&#x43e;&#x43b;&#x43d;&#x438;&#x442;&#x435;&#x43b;&#x44c;&#x43d;&#x44b;&#x439; &#x434;&#x438;&#x440;&#x435;&#x43a;&#x442;&#x43e;&#x440;</tspan>
							</text>
							<text id="&#208;&#159;&#208;&#176;&#208;&#178;&#208;&#181;&#208;&#187; &#208;&#162;&#208;&#190;&#208;&#177;&#208;&#190;&#208;&#187;&#208;&#186;&#208;&#184;&#208;&#189;" fill="#00284B" xml:space="preserve" style="white-space: pre" font-family="Avenir Next" font-size="16" font-weight="600" letter-spacing="0em">
								<tspan x="416.367" y="976.072">&#x41f;&#x430;&#x432;&#x435;&#x43b; &#x422;&#x43e;&#x431;&#x43e;&#x43b;&#x43a;&#x438;&#x43d;</tspan>
							</text>
						</g>
						<g id="rhombusTeamHover">
							<path id="&#208;&#157;&#208;&#184;&#208;&#189;&#208;&#176;" d="M480 1224.97L360 980L240 1224.97L360 1470L480 1224.97Z" fill="#FDB515" />
							<text id="Digital-&#209;&#129;&#209;&#130;&#209;&#128;&#208;&#176;&#209;&#130;&#208;&#181;&#208;&#179;" fill="#00284B" xml:space="preserve" style="white-space: pre" font-family="Avenir Next" font-size="12" letter-spacing="0em">
								<tspan x="312.184" y="1239.8">Digital-&#x441;&#x442;&#x440;&#x430;&#x442;&#x435;&#x433;</tspan>
							</text>
							<text id="&#208;&#157;&#208;&#184;&#208;&#189;&#208;&#176; &#208;&#168;&#208;&#178;&#208;&#181;&#209;&#134;&#208;&#190;&#208;&#178;&#208;&#176;" fill="#00284B" xml:space="preserve" style="white-space: pre" font-family="Avenir Next" font-size="16" font-weight="600" letter-spacing="0em">
								<tspan x="302.297" y="1222.07">&#x41d;&#x438;&#x43d;&#x430; &#x428;&#x432;&#x435;&#x446;&#x43e;&#x432;&#x430;</tspan>
							</text>
						</g>
					</g>
				</svg>


				<img class="img-responsive lazy example-img" src="data:image/gif;base64,R0lGODlhBwACAIAAAP///wAAACH5BAEAAAEALAAAAAAHAAIAAAIDjI9YADs=" data-src="<?php echo get_template_directory_uri() ?>/img/@1x/rhombus_team.png" data-srcset="<?php echo get_template_directory_uri() ?>/img/@1x/rhombus_team.png 1x, <?php echo get_template_directory_uri() ?>/img/@2x/rhombus_team.png 2x" alt="Команда The Architect" />
			</div>
		</div>
	</div>
</section>
<!-- <section class="education">
	<div class="education-bg"></div>
	<div class="container">
		<div class="education-headline">
			<h2 class="section-headline">education</h2>
			<p>There was an idea to bring together a group of remarkable people, and this is who we are — a collective of
				talented friends who chose to work together.</p>
		</div>
		<div class="education-case">
			<div class="education-case-item" style="background-image: url('img/@2x/education.png');">
				<a href="#" class="education-case-item__href"></a>
				<div class="education-case-item__perk">

					<div class="education-case-item__tag">course</div>
					<div class="education-case-item__date">start 21 Sep</div>
				</div>

				<div class="education-case-item__headline">How to Realtor Make Money on Instagram
					in 2019</div>

			</div>
			<div class="education-case-item" style="background-image: url('img/@2x/education.png');">
				<a href="#" class="education-case-item__href"></a>
				<div class="education-case-item__perk">

					<div class="education-case-item__tag">course</div>
					<div class="education-case-item__date">start 21 Sep</div>
				</div>

				<div class="education-case-item__headline">How to Realtor Make Money on Instagram
					in 2019</div>

			</div>
			<div class="education-case-item" style="background-image: url('img/@2x/education.png');">
				<a href="#" class="education-case-item__href"></a>
				<div class="education-case-item__perk">

					<div class="education-case-item__tag">course</div>
					<div class="education-case-item__date">start 21 Sep</div>
				</div>

				<div class="education-case-item__headline">How to Realtor Make Money on Instagram
					in 2019</div>

			</div>
		</div>
		<a href="#" class="education-showall">SHow all</a>

	</div>
</section> -->
<?php get_footer(); ?>