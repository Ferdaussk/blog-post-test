
		<div class="bwd_blog_design_1">
            <div class="container">
                <div class="row">
                <?php 
                // $wp_query = new WP_Query(array('post_per_page'=>-1));
                // $sk_query = new WP_Query( array( 'posts_per_page' =>4 ) );
                $sk_query = new \WP_Query( $bwdbp_args );
                    if($sk_query->have_posts()) :
                        while($sk_query->have_posts()) : $sk_query->the_post();
                        ?>
					<div class="col-xxl-4 col-xl-4">
						<div class="bwd_blog_area">
							<div class="bwd_blog_img">
								<?php $this->bwdbp_post_thumbnail_here(); ?>
							</div>
							<div class="bwd_blog-content">
								<div class="bwd_date-home"> 
									<i class="fa-solid fa-calendar-days"></i><?php echo get_the_date(); ?>
								</div>
								<div class="bwd_meta-info mb-15">
									<ul>
										<li><i class="fa fa-user"></i> <span class="bwd_meta_text"><?php echo get_the_author_meta( 'nickname' ); ?></span></li>
										<li><i class="fa fa-comments"></i> <span class="bwd_meta_text"><?php if(!have_comments()){ echo esc_html__('Comment ', 'bwd-blog-post') . get_comments_number(); } ?></span></li>
										<li><?php $this->bwdbp_post_categories(); ?></li>
										<li><?php the_tags(); ?></li>
									</ul>
								</div>
								<div class="bwd_main_title mb-15"><a style="color:black; text-decoration:none !important;" onMouseOver="this.style.color='#ff5e15'" onMouseOut="this.style.color='black'" href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></div>
								<div class="bwd_sub_title speech">
									<p><?php echo wp_trim_words(get_the_content(), 15); ?></p>
								</div>
								<div class="bwd_blog__bttn mt-20">
									<a class="bwd_bwd_blog-btn" href="<?php the_permalink(); ?>"><?php echo esc_html__('Read More', 'bwd-blog-post'); ?></a>
								</div>
							</div>
						</div>
					</div>
                    <?php
						endwhile;
					endif;
                    ?>
				</div>
			</div>
		</div>