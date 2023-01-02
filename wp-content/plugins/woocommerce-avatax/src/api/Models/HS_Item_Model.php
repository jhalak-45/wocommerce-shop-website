<?php
/**
 * WooCommerce AvaTax
 *
 * This source file is subject to the GNU General Public License v3.0
 * that is bundled with this package in the file license.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.html
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@skyverge.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade WooCommerce AvaTax to newer
 * versions in the future. If you wish to customize WooCommerce AvaTax for your
 * needs please refer to http://docs.woocommerce.com/document/woocommerce-avatax/
 *
 * @author    SkyVerge
 * @copyright Copyright (c) 2016-2022, SkyVerge, Inc.
 * @license   http://www.gnu.org/licenses/gpl-3.0.html GNU General Public License v3.0
 */

namespace SkyVerge\WooCommerce\AvaTax\API\Models;

use DateTime;
use SkyVerge\WooCommerce\AvaTax\Traits\Resolves_Product_Item_Code;
use WC_Product;

defined( 'ABSPATH' ) or exit;

/**
 * The representation of an item model to be used by the Avalara API.
 *
 * @since 1.13.0
 */
class HS_Item_Model {

	use Resolves_Product_Item_Code;

	/** @var int the UID generated by Avalara */
	protected $id;

	/** @var string the company ID */
	protected $company_id;

	/** @var string the WooCommerce product ID */
	protected $item_code;

	/** @var string the WooCommerce product parent ID (only used for variations) */
	protected $parent_code;

	/** @var string the WooCommerce product title */
	protected $description;

	/** @var string the WooCommerce product description */
	protected $summary;

	/** @var string the WooCommerce product category breadcrumbs */
	protected $item_group;

	/** @var DateTime the datetime when record was created */
	protected $created_date;

	/** @var array classification parameters for the product */
	protected $classification_parameters = [];


	/**
	 * The item model constructor.
	 *
	 * @since 1.13.0
	 *
	 * @param WC_Product|null $product a product to set the item model data (optional)
	 */
	public function __construct( $product = null ) {

		$this->set_company_id( wc_avatax()->get_company_id() );

		if ($product instanceof WC_Product) {
			$this->set_data( $product );
		}
	}


	/**
	 * Gets the ID.
	 *
	 * @since 1.13.0
	 *
	 * @return int
	 */
	public function get_id() : int {

		return $this->id;
	}


	/**
	 * Sets the ID.
	 *
	 * @since 1.13.0
	 *
	 * @param int $value
	 * @return self
	 */
	public function set_id( int $value ) : HS_Item_Model {

		$this->id = $value;

		return $this;
	}


	/**
	 * Gets the company ID.
	 *
	 * @since 1.13.0
	 *
	 * @return string
	 */
	public function get_company_id() : string {

		return $this->company_id;
	}


	/**
	 * Sets the company ID.
	 *
	 * @since 1.13.0
	 *
	 * @param string $value
	 * @return self
	 */
	public function set_company_id( string $value ) : HS_Item_Model {

		$this->company_id = $value;

		return $this;
	}


	/**
	 * Gets the item code.
	 *
	 * @since 1.13.0
	 *
	 * @return string
	 */
	public function get_item_code() : string {

		return $this->item_code;
	}


	/**
	 * Sets the item code.
	 *
	 * @since 1.13.0
	 *
	 * @param string $value
	 * @return self
	 */
	public function set_item_code( string $value ) : HS_Item_Model {

		$this->item_code = $value;

		return $this;
	}


	/**
	 * Gets the parent item code. Optional - may be null.
	 *
	 * @since 1.16.0
	 *
	 * @return string|null
	 */
	public function get_parent_code() {

		return $this->parent_code;
	}


	/**
	 * Sets the parent item code.
	 *
	 * @since 1.16.0
	 *
	 * @param string|null $value
	 * @return self
	 */
	public function set_parent_code( string $value = null ) : HS_Item_Model {

		$this->parent_code = $value;

		return $this;
	}


	/**
	 * Gets the description.
	 *
	 * @since 1.13.0
	 *
	 * @return string
	 */
	public function get_description() : string {

		return $this->description;
	}


	/**
	 * Sets the description.
	 *
	 * @since 1.13.0
	 *
	 * @param string $value
	 * @return self
	 */
	public function set_description( string $value ) : HS_Item_Model {

		$this->description = $value;

		return $this;
	}


	/**
	 * Gets the summary.
	 *
	 * @since 1.13.0
	 *
	 * @return string
	 */
	public function get_summary() : string {

		return $this->summary;
	}


	/**
	 * Sets the summary.
	 *
	 * @since 1.13.0
	 *
	 * @param string $value
	 * @return self
	 */
	public function set_summary( string $value ) : HS_Item_Model {

		$this->summary = $value;

		return $this;
	}


	/**
	 * Gets the item group.
	 *
	 * @since 1.13.0
	 *
	 * @return string
	 */
	public function get_item_group() : string {

		return $this->item_group;
	}


	/**
	 * Sets the item group.
	 *
	 * @since 1.13.0
	 *
	 * @param string $value
	 * @return self
	 */
	public function set_item_group( string $value ) : HS_Item_Model {

		$this->item_group = $value;

		return $this;
	}


	/**
	 * Gets the created date.
	 *
	 * @since 1.13.0
	 *
	 * @return DateTime
	 */
	public function get_created_date() : DateTime {

		return $this->created_date;
	}


	/**
	 * Sets the created date.
	 *
	 * @since 1.13.0
	 *
	 * @param DateTime $value
	 * @return self
	 */
	public function set_created_date( DateTime $value ) : HS_Item_Model {

		$this->created_date = $value;

		return $this;
	}


	/**
	 * Gets the classification parameters.
	 *
	 * @since 1.16.0
	 *
	 * @return array
	 */
	public function get_classification_parameters() : array {

		return $this->classification_parameters;
	}


	/**
	 * Sets the classification parameters.
	 *
	 * @since 1.16.0
	 *
	 * @param array $params
	 * @return $this
	 */
	public function set_classification_parameters( array $params = [] ) : HS_Item_Model {

		$this->classification_parameters = $params;

		return $this;
	}


	/**
	 * Adds a single classification parameter.
	 *
	 * @since 1.16.0
	 *
	 * @param string $name the parameter name
	 * @param mixed $value the parameter value
	 * @return $this
	 */
	public function add_classification_parameter( string $name, $value ) : HS_Item_Model {

		$this->classification_parameters[] = [
			'name'  => $name,
			'value' => $value,
		];

		return $this;
	}


	/**
	 * Builds the item group string representing the categories' breadcrumb.
	 *
	 * @since 1.13.0
	 *
	 * @param int[] $category_ids a list of category IDs
	 * @return string
	 */
	public function build_item_group( array $category_ids ): string {

		if ( empty( $category_ids ) ) {

			$item_group = __( 'Uncategorized', 'woocommerce-avatax' );

		} else {

			$item_group = implode( ';', array_map( static function ( $category_id ) {

				// get category full breadcrumb
				$breadcrumb = get_term_parents_list( $category_id, 'product_cat', [
					'format'    => 'name',
					'separator' => ' > ',
					'link'      => false,
				] );

				// remove trailing separator if found
				return rtrim( $breadcrumb, ' > ' );

			}, $category_ids ) );
		}

		$this->set_item_group( $item_group );

		return $item_group;
	}


	/**
	 * Creates a new HS_Item_Model instance from a WooCommerce object.
	 *
	 * @since 1.13.0
	 *
	 * @param WC_Product $product a WooCommerce product
	 * @return HS_Item_Model
	 */
	private function set_data( WC_Product $product ) : HS_Item_Model {

		$summary = $product->get_description() ?: $product->get_short_description();

		$this->set_item_code( $this->resolve_product_item_code( $product ) )
			 ->set_description( $product->get_title() ?? '' )
		     ->set_summary( $summary ?? '' );

		if ( $product->is_type( 'variation' ) ) {
			if ( $parent_product = wc_get_product( $product->get_parent_id() ) ) {
				$this->build_item_group( (array) $parent_product->get_category_ids() );
				$this->set_parent_code( $parent_product->get_id() ?? 0 );
			} else {
				$this->build_item_group( [] );
			}
		} else {
			$this->build_item_group( (array) $product->get_category_ids() );
		}

		return $this;
	}


}