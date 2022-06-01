<?php
namespace BlogFromBWD\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDBPBlog extends Widget_Base {

	public function get_name() {
		return esc_html__( 'NameBlog', 'bwd-blog-post' );
	}

	public function get_title() {
		return esc_html__( 'BWD Blog Post', 'elementor' );
	}

	public function get_icon() {
		return 'bwdbp-blog-icon eicon-post';
	}

	public function get_categories() {
		return [ 'bwd-blog-post-category' ];
	}

	public function get_script_depends() {
		return [ 'bwd-blog-post-category' ];
	}

	protected function register_controls() {
		$this->start_controls_section(
			'bwdbp_blog_content_section',
			[
				'label' => esc_html__( 'Blog Content', 'bwd-blog-post' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdbp_style_selection',
			[
				'label' => esc_html__( 'Blog Styles', 'bwd-blog-post' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1' => esc_html__( 'Style 1', 'bwd-blog-post' ),
					'style2' => esc_html__( 'Style 2', 'bwd-blog-post' ),
					'style3' => esc_html__( 'Style 3', 'bwd-blog-post' ),
					'style4' => esc_html__( 'Style 4', 'bwd-blog-post' ),
					'style5' => esc_html__( 'Style 5', 'bwd-blog-post' ),
					'style6' => esc_html__( 'Style 6', 'bwd-blog-post' ),
					'style7' => esc_html__( 'Style 7', 'bwd-blog-post' ),
					'style8' => esc_html__( 'Style 8', 'bwd-blog-post' ),
					'style9' => esc_html__( 'Style 9', 'bwd-blog-post' ),
					'style10' => esc_html__( 'Style 10', 'bwd-blog-post' ),
					'style11' => esc_html__( 'Style 11', 'bwd-blog-post' ),
					'style12' => esc_html__( 'Style 12', 'bwd-blog-post' ),
					'style13' => esc_html__( 'Style 13', 'bwd-blog-post' ),
					'style14' => esc_html__( 'Style 14', 'bwd-blog-post' ),
					'style15' => esc_html__( 'Style 15', 'bwd-blog-post' ),
					'style16' => esc_html__( 'Style 16', 'bwd-blog-post' ),
					'style17' => esc_html__( 'Style 17', 'bwd-blog-post' ),
					'style18' => esc_html__( 'Style 18', 'bwd-blog-post' ),
					'style19' => esc_html__( 'Style 19', 'bwd-blog-post' ),
					'style20' => esc_html__( 'Style 20', 'bwd-blog-post' ),
					'style21' => esc_html__( 'Style 21', 'bwd-blog-post' ),
					'style22' => esc_html__( 'Style 22', 'bwd-blog-post' ),
					'style23' => esc_html__( 'Style 23', 'bwd-blog-post' ),
					'style24' => esc_html__( 'Style 24', 'bwd-blog-post' ),
					'style25' => esc_html__( 'Style 25', 'bwd-blog-post' ),
					'style26' => esc_html__( 'Style 26', 'bwd-blog-post' ),
					'style27' => esc_html__( 'Style 27', 'bwd-blog-post' ),
					'style28' => esc_html__( 'Style 28', 'bwd-blog-post' ),
					'style29' => esc_html__( 'Style 29', 'bwd-blog-post' ),
					'style30' => esc_html__( 'Style 30', 'bwd-blog-post' ),
					'style31' => esc_html__( 'Style 31', 'bwd-blog-post' ),
				],
			]
		);

		$this->add_control(
			'bwdbp_blog_title01',
			[
				'label' => esc_html__( 'Title', 'bwd-blog-post' ),
				'type' => Controls_Manager::TEXT,
				'condition' => [
					'bwdbp_blog_title01_switcher' => 'yes',
				],
				'default' => esc_html__('Got to our main', 'bwd-blog-post'),
				'label_block' => true,
			]
		);
		$this->add_responsive_control(
			'bwdbp_the_post_per_page',
			[
				'label' => esc_html__( 'Post Per Page', 'bwd-blog-post' ),
				'type' => Controls_Manager::NUMBER,
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbp_blog_style_section',
			[
				'label' => esc_html__( 'Blog Style', 'bwd-blog-post' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
            'bwdbp_blog_the_box_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-blog-post'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp-blog' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();
	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		$bwdbp_post_per_age = $settings['bwdbp_the_post_per_page'];
		$bwdbp_args = array(
			'posts_per_page' => $bwdbp_post_per_age,
		);
		?>
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
		<?php
	}

	public function bwdbp_post_categories() {
        $categories_list = get_the_category_list(esc_html__(', ', 'bwd-blog-post'));
        if ($categories_list) {
            printf(
				'<span class="cat-links">%1$s<span class="screen-reader-text">%2$s</span>%3$s</span>', '', esc_html__('Posted in', 'bwd-blog-post'), $categories_list
            );
        }
    }

	public function bwdbp_post_thumbnail_here(){
		?>
		<a href="<?php the_permalink(); ?>"  style="text-decoration:none;">
		<?php 
		if(has_post_thumbnail()){ 
			the_post_thumbnail('large'); 
			} else{ 
			echo '<h2 class="text-center ">' . esc_html__('No Thumbnail', 'bwd-blog-post') . '</h2>';
			} 
			?>
		</a>
		<?php
	}

}
