<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;
$product_title = $product->get_title();

$short_description = $product->get_short_description();
$attr = $product->get_attributes();

// обращаемся по ключу к каждому атрибуту
$product_class = $product->get_attribute('pa_class'); 
$product_compound = $product->get_attribute('pa_compound');
$product_viscosity = $product->get_attribute('pa_viscosity');
$product_volume = $product->get_attribute('pa_volume');
$product_sku = $product->get_sku();

$product_price = $product->get_price_html();
$product_id = $product->get_id();



// echo '<pre>';
// print_r($array);
// echo '</pre>';

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action('woocommerce_before_single_product');

if (post_password_required()) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class('', $product); ?>>
	<h1 class="title">
		<div class="container">
			<?php echo $product_title ?>
		</div>
	</h1>
	<div class="single-product__wrapper container">
		<?php
		/**
		 * Hook: woocommerce_before_single_product_summary.
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		do_action('woocommerce_before_single_product_summary');
		?>

		<div class="single-product__description">
			<div class="mb-7">

				<?php if (isset($array['pa_bez-glyutena'])) {
					$bezglyutena = $array['pa_bez-glyutena']->name;
					echo '<span class="text-xs text-white font-medium py-2 px-5 rounded-3xl bg-yellow">';
					echo $bezglyutena;
					echo '</span>';
				}
				?>

				<?php if (isset($array['pa_vegan'])) {
					$vegan = $array['pa_vegan']->name;
					echo '<span class="text-xs text-white font-medium py-2 px-5 rounded-3xl bg-light-green">';
					echo $vegan;
					echo '</span>';
				}
				?>
			</div>

			

			<ul class="single-product__list">
				
				<li>
					<p class="font-medium">Код товара</p>
					<p>
						<?php echo $product_sku; ?>
					</p>
				</li> 
				<li>
					<p class="font-medium">Состав</p>
					<p>
						<?php echo $product_compound; ?>
					</p>
				</li> 
				<li>
					<p class="font-medium">Объём</p>
					<p>
						<?php echo $product_volume; ?>
					</p>
				</li>
				<li>
					<p class="font-medium">Вязкость SAE</p>
					<p>
						<?php echo $product_viscosity; ?>
					</p>
				</li>

				<li>
					<p class="font-medium">Класс по API</p>
					<p>
						<?php echo $product_class; ?>
					</p>
				</li>
			</ul>
			<p class="text-black text-end font-bold pt-5"> <?php echo $product_price; ?> <p>
			<!-- <?php
				echo '<div style="padding-top: 10px;" class="flex gap-[10px] flex-col">';
				echo '	<button href="?add-to-cart='.$product_id.'" data-quantity="1" class="product_type_simple add_to_cart_button ajax_add_to_cart h-max w-[172px] p-[10px] text-center border border-dark-green bg-white text-dark-green" data-product_id="'.$product_id.'" data-product_sku="'.$product_sku.'" aria-label="Добавить &quot;'.$product_name.'&quot; в корзину" rel="nofollow">В розницу</button>';
				echo '	<button href="?add-to-cart='.$product_id.'" data-quantity="1" class="product_type_simple add_to_cart_button ajax_add_to_cart h-max w-[172px] p-[10px] text-center bg-green text-white" data-product_id="'.$product_id.'" data-product_sku="'.$product_sku.'" aria-label="Добавить &quot;'.$product_name.'&quot; в корзину" rel="nofollow">Оптом</button>';
				echo '</div>';
				
			?> -->

			<div class="summary entry-summary">
				<div class="entry-summary-wrapper">
					<?php
					/**
					 * Hook: woocommerce_single_product_summary.
					 *
					 * @hooked woocommerce_template_single_title - 5
					 * @hooked woocommerce_template_single_rating - 10
					 * @hooked woocommerce_template_single_price - 10
					 * @hooked woocommerce_template_single_excerpt - 20
					 * @hooked woocommerce_template_single_add_to_cart - 30
					 * @hooked woocommerce_template_single_meta - 40
					 * @hooked woocommerce_template_single_sharing - 50
					 * @hooked WC_Structured_Data::generate_product_data() - 60
					 */
					do_action('woocommerce_single_product_summary');
					?>
				</div>
			</div>
		</div>

	</div>

	<?php
		/**
		 * Hook: woocommerce_after_single_product_summary.
		 *
		 * @hooked woocommerce_output_product_data_tabs - 10
		 * @hooked woocommerce_upsell_display - 15
		 * @hooked woocommerce_output_related_products - 20
		 */
		do_action('woocommerce_after_single_product_summary');
	?> 

</div>

<?php do_action('woocommerce_after_single_product'); ?>