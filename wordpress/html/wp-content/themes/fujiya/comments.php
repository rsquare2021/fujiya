<?php get_header(); ?>
<?php $search_title = ""; ?>
    <section id="mainimg_lower_page">
		<div class="lower_header">
			<div class="lower_title">
				<div>商品一覧</div>
			</div>
		</div>
	</section>

	<section id="content">
		<div class="inner">
			<div class="bread">
				<p><a href="/" class="blue">トップ</a>　＞　<span class="bread_child">商品一覧</span></p>
			</div>
			<div class="main cf">
				<div class="side">
					<form action="/" method="get" id="search-form">
						<input type="hidden" value="products" name="post_type" id="post_type">
						<div class="ulbox">
							<div class="title visible-pc">キーワード検索</div>
							<div class="search">
								<input class="box" type="text" name="s" value="" placeholder="キーワードを入力">
								<input class="search_ico side_search_btn" type="submit" value="">
							</div>
							<div class="other">
								<div class="title">商品カテゴリ</div>
								<ul>
									<?php
									$search_title = $_GET['s'];
									$terms = get_terms('products_cat', array('hide_empty' => 0, 'parent' => 0 ));
									$count = 1;
									$cats_array = array();
									$cats_array = $_GET['cats'];
									$exclusion_cats_array = array();
									$cats_title_array = array();
									foreach ( $terms as $term ) {
										//      echo '<li><a href="'.get_term_link($term).'">'.$term->name.'</a></li>';
										echo '<li>';
										$children = get_term_children($term->term_id, 'products_cat');
										if(!empty($children)) {
											echo '<div class="checkBox arrow"><label for="checkbox' . $count . '">';
										} else {
											echo '<div class="checkBox"><label for="checkbox' . $count . '">';
										}

										if( in_array($term->term_id, (array)$cats_array) ) {
											//    $search_title = $search_title . $term->name . ",";
											$cats_title_array[$term->term_id] = $term->name;
											echo '<input type="checkbox" id="checkbox' . $count . '" name="cats[]" value="' . $term->term_id . '" checked>';
											echo '<span class="on">' . $term->name . '</span>';
										} else {
											echo '<input type="checkbox" id="checkbox' . $count . '" name="cats[]" value="' . $term->term_id . '">';
											echo '<span>' . $term->name . '</span>';
										}

										echo '</label></div>';
										echo '<ul class="cf">';

										$child_terms = get_terms('products_cat', array('hide_empty' => 0, 'parent' => $term->term_id ));
										$child_count = 1;
										foreach ( $child_terms as $child_term ) {
											if( in_array($child_term->term_id, (array)$cats_array) ) {
												echo '<li class="check">';
											} else {
												echo '<li>';
											}

											echo '<div class="checkBox"><label for="checkbox' . $count . '_' . $child_count . '">';
											if( in_array($child_term->term_id, (array)$cats_array) ) {
												//      $search_title = $search_title . $child_term->name . ",";
												$cats_title_array[$child_term->term_id] = $child_term->name;
												echo '<input type="checkbox" id="checkbox' . $count . '_' . $child_count . '" name="cats[]" value="' . $child_term->term_id . '" checked>';
												echo '<span class="on">' . $child_term->name . '</span>';
												
												$exclusion_cats_array[] = $term->term_id;
												
											} else {
												echo '<input type="checkbox" id="checkbox' . $count . '_' . $child_count . '" name="cats[]" value="' . $child_term->term_id . '">';
												echo '<span>' . $child_term->name . '</span>';
											}

											echo '</label></div>';
											echo '</li>';
											$child_count++;
										}
										echo '</ul>';
										echo '</li>';
										$count++;
									}
									?>
								</ul>
								<div class="title">仕様・ロット・納期から探す</div>
								<ul class="ul02">
									<?php
										$terms = get_terms('products_tag', array('hide_empty' => 0 ));
										$count = 1;
										$tags_array = array();
										$tags_array = $_GET['tags'];
										foreach ( $terms as $term ) {
											//      echo '<li><a href="'.get_term_link($term).'">'.$term->name.'</a></li>';
											echo '<li>';
											echo '<div class="checkBox"><label for="checkboxT' . $count . '">';
											if( in_array($term->term_id, (array)$tags_array) ) {
												$search_title = $search_title . $term->name . ",";
												echo '<input type="checkbox" id="checkboxT' . $count . '" name="tags[]" value="' . $term->term_id . '" checked>';
												echo '<span class="on">' . $term->name . '</span>';
											} else {
												echo '<input type="checkbox" id="checkboxT' . $count . '" name="tags[]" value="' . $term->term_id . '">';
												echo '<span>' . $term->name . '</span>';
											}
											echo '</label></div>';
											echo '</li>';
											$count++;
										}
									?>
								</ul>
								<div class="flex-center-center btnbox btn">
									<a href="#" class="selectbtn checkReset">選択解除</a>
									<input type="submit" class="searchbtn" name="send" value="絞り込み検索">
								</div>
								<div class="close visible-ts">
									<a href="javascript:void(0)">【絞り込み検索メニュー】</a>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="content">
					<div class="search visible-ts">
						<form action="/" method="get">
							<input type="hidden" value="products" name="post_type" id="post_type">
							<input class="box" type="text" name="s" value="" placeholder="キーワードを入力">
							<input class="search_ico" type="button">
						</form>
					</div>
					<?php
						global $wpdb;
						$paged = get_query_var('paged') ? get_query_var('paged') : 1;
						// 検索ワード表示用
						$search_text = "";
						// 検索項目数カウント用
						$count = 0;
						// キーワード取得
						$keyword = get_search_query();
						$keyword = like_escape( $keyword ); // Thanks Manny Fleurmond
						if($keyword != "") $count++;
						if( $keyword != "" ) {
						$search_text .= str_replace(' ',',',$keyword);
						$search_text = str_replace('　',',',$search_text) . ", ";
						// 複数キーワード検索用
						$search_text2 .= str_replace(' ',',',$keyword);
						$search_text2 = str_replace('　',',',$search_text2);
						$search_text_array = explode(",", $search_text2);
						}
						// カテゴリ取得
						$cat = sanitizeHtml($_GET['cats']);
						$cat_search = "";
						if( isset($_GET['cats']) ) {
						//  $cat_search = implode(",", $cat);
						$cat_search = $cat;
						}
						// 特定のカテゴリ削除
						foreach($exclusion_cats_array as $exclusion_key => $exclusion_value){
						foreach($cat_search as $key => $value){
						if($value == $exclusion_value){
							unset($cat_search[$key]);
							unset($cats_title_array[$value]);
						}
						}
						}
						$search_title = $search_title . implode(',',$cats_title_array);
						// タグ取得
						$tag = sanitizeHtml($_GET['tags']);
						$tag_search = "";
						if( isset($_GET['tags']) ) {
						//  $tag_search = implode(",", $tag);
						$tag_search = $tag;
						}
						// キーワード用SQL形成
						if( !empty($search_text_array) ) {
						$sql01 = "";
						foreach( $search_text_array as $val ) {
						$sql01 .= "AND (post_title REGEXP '" . $val . "' OR post_content REGEXP '" . $val . "') ";
						}
						$sql01 = ltrim($sql01, 'AND ');
						}
						$post_ids = array();
						if( $keyword != "%%" ) {
						$post_ids = $wpdb->get_col( $wpdb->prepare( "
						SELECT DISTINCT ID FROM {$wpdb->posts}
						WHERE " . $sql01, $keyword ) );
						}
						$query;
						$args;
						if( isset($_GET['cats']) && isset($_GET['tags']) ) {
						$args = array(
							'post_type'   => 'products',
							'post_status' => 'publish',
							'paged' => $paged,
							'post__in'    => $post_ids,
							'tax_query' => array(
								'relation' => 'AND',
								array(
								'taxonomy' => 'products_cat',
								'field'    => 'term_id',
								'terms'    => $cat_search
								),
								array(
								'taxonomy' => 'products_tag',
								'field'    => 'term_id',
								'terms'    => $tag_search
								)
							)
						);

						} else if( isset($_GET['cats']) ) {
						$args = array(
							'post_type'   => 'products',
							'post_status' => 'publish',
							'paged' => $paged,
							'post__in'    => $post_ids,
							'tax_query' => array(
								'relation' => 'AND',
								array(
								'taxonomy' => 'products_cat',
								'field'    => 'term_id',
								'terms'    => $cat_search
								)
							)
						);
						} else if( isset($_GET['tags']) ) {    
						$args = array(
							'post_type'   => 'products',
							'post_status' => 'publish',
							'paged' => $paged,
							'post__in'    => $post_ids,
							'tax_query' => array(
								'relation' => 'AND',
								array(
								'taxonomy' => 'products_tag',
								'field'    => 'term_id',
								'terms'    => $tag_search
								)    
							)
						);

						} else  {
						$args = array(
							'post_type'   => 'products',
							'post_status' => 'publish',
							'paged' => $paged,
							'post__in'    => $post_ids
						);	  
						}

						$query = new WP_Query( $args );
					?>
					<div class="title"><?php echo rtrim($search_title, ','); ?></div>
						<?php if($query->have_posts()): ?>
						<ul class="cf">
							<?php while($query->have_posts()): $query->the_post(); ?>
							<li>
								<div class="box">
									<?php if ( has_post_thumbnail() ) {
										$image_id = get_post_thumbnail_id ();
										$image_url = wp_get_attachment_image_src ($image_id, true);
									?>
										<div class="imgbox"><a href="<?php the_permalink(); ?>" style="background-image: url('<?php echo $image_url[0]; ?>');"></a></div>
									<?php } ?>
									<div class="contentbox">
										<div class="tit"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
										<?php if(post_custom('_excerpt')): ?>
											<div class="txt"><?php echo mb_substr(htmlspecialchars(strip_tags(post_custom('_excerpt'))),0,50); ?>・・・</div>
										<?php endif; ?>
										<div class="tab tab-items">
											<?php echo get_the_term_list( $post->ID, 'products_tag2', '<p>', '</p><p>', '</p>' ); ?>
										</div>
									</div>
								</div>
							</li>
							<?php endwhile; ?>
						</ul>
						<div class="page btn flex-center-center">							
						<?php
						// ページ数
						$max_pages = ceil( $query->found_posts / 9 );
						$search_url = '/' . mb_strstr($_SERVER['REQUEST_URI'],'?');

						if( $max_pages >= 2 ) {
						if( (int)$paged == 1 ) { ?>
						<a href="<?php echo '/page/1'.$search_url; ?>" class="on">1</a>
						<a href="<?php echo '/page/2'.$search_url; ?>">2</a>
						<?php } else if( (int)$paged == 2 ) { ?>
						<a href="<?php echo '/page/1'.$search_url; ?>">1</a>
						<a href="<?php echo '/page/2'.$search_url; ?>" class="on">2</a>
						<?php } else { ?>
						<a href="<?php echo '/page/' . (int)$paged-1 .$search_url; ?>"><?php echo $paged-1; ?></a>
						<a href="<?php echo '/page/' . $paged .$search_url; ?>" class="on"><?php echo $paged; ?></a>
						<a href="<?php echo '/page/' . (int)$paged+1 .$search_url; ?>"><?php echo $paged+1; ?></a>
						<?php
						}
						}
						?>
						<?php if( $max_pages >= 5 && $max_pages != $paged ) { ?>
						<span>…</span>
						<a href="<?php echo '/page/' . $max_pages .$search_url; ?>"><?php echo $max_pages; ?></a>
						<?php } ?>			
					</div>
					<?php endif; ?>
				</div>
			</div>

		</div>
		<div class="more visible-ts">
			<a href="javascript:void(0)">【絞り込み検索メニュー】</a>
		</div>

		<?php get_template_part('banner'); ?>
	</section>
	<!-- end content -->
<?php get_footer(); ?>