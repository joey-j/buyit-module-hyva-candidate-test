<?php
/**
 * Buyitdirect Group
 *
 * @category    BuyIt
 * @package     HyvaCandidateTest
 * @copyright   Copyright (c) 2025-current Buyitdirect Group (https://www.buyitdirectgroup.co.uk/)
 */
declare(strict_types=1);

namespace BuyIt\HyvaCandidateTest\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magento\Framework\View\Asset\Repository as AssetRepository;

class CarouselProducts implements ArgumentInterface
{
	/**
	 * @var AssetRepository
	 */
	private $assetRepo;

	/**
	 * Initialize dependencies.
	 *
	 * @param \Magento\Catalog\Model\CategoryFactory AssetRepository
	 */
	public function __construct(
		AssetRepository $assetRepo
	) {
		$this->assetRepo = $assetRepo;
	}

	/**
	 * Return test product data.
	 */
	public function getTestProducts(): array
	{
		return [
			[
				'id' 					=> 	1,
				'name' 					=>	'Haier 939 iPro Series 1 9kg Washing Machine',
				'short_description' 	=>	'This is the short description for the product Haier 939 iPro Series 1 9kg Washing Machine',
				'img_url'				=>	$this->getPlaceHolderImg(),
				'img_alt'				=>	'Haier 939 iPro',
				'special_price' 		=>	124.97,
				'price' 				=>	179.97,
				'product_label'			=>	'SAVE £30'
			],
			[
				'id' 					=> 	2,
				'name' 					=>	'Haier 939 iPro Series 2 9kg Washing Machine',
				'short_description' 	=>	'This is the short description for the product Haier 939 iPro Series 2 9kg Washing Machine',
				'img_url'				=>	$this->getPlaceHolderImg(),
				'img_alt'				=>	'Haier 939 iPro',
				'special_price' 		=>	124.97,
				'price' 				=>	179.97,
				'product_label'			=>	'SAVE £30'
			],
			[
				'id' 					=> 	3,
				'name' 					=>	'Haier 939 iPro Series 3 9kg Washing Machine',
				'short_description' 	=>	'This is the short description for the product Haier 939 iPro Series 3 9kg Washing Machine',
				'img_url'				=>	$this->getPlaceHolderImg(),
				'img_alt'				=>	'Haier 939 iPro',
				'special_price' 		=>	124.97,
				'price' 				=>	179.97,
				'product_label'			=>	'SAVE £30'
			],
			[
				'id' 					=> 	4,
				'name' 					=>	'Haier 939 iPro Series 4 9kg Washing Machine',
				'short_description' 	=>	'This is the short description for the product Haier 939 iPro Series 4 9kg Washing Machine',
				'img_url'				=>	$this->getPlaceHolderImg(),
				'img_alt'				=>	'Haier 939 iPro',
				'special_price' 		=>	124.97,
				'price' 				=>	179.97,
				'product_label'			=>	'SAVE £30'
			],
			[
				'id' 					=> 	5,
				'name' 					=>	'Haier 939 iPro Series 5 9kg Washing Machine',
				'short_description' 	=>	'This is the short description for the product Haier 939 iPro Series 5 9kg Washing Machine',
				'img_url'				=>	$this->getPlaceHolderImg(),
				'img_alt'				=>	'Haier 939 iPro',
				'special_price' 		=>	124.97,
				'price' 				=>	179.97,
				'product_label'			=>	'SAVE £30'
			],
			[
				'id' 					=> 	5,
				'name' 					=>	'Haier 939 iPro Series 5 9kg Washing Machine',
				'short_description' 	=>	'This is the short description for the product Haier 939 iPro Series 5 9kg Washing Machine',
				'img_url'				=>	$this->getPlaceHolderImg(),
				'img_alt'				=>	'Haier 939 iPro',
				'special_price' 		=>	124.97,
				'price' 				=>	179.97,
				'product_label'			=>	'SAVE £30'
			],
			[
				'id' 					=> 	5,
				'name' 					=>	'Haier 939 iPro Series 5 9kg Washing Machine',
				'short_description' 	=>	'This is the short description for the product Haier 939 iPro Series 5 9kg Washing Machine',
				'img_url'				=>	$this->getPlaceHolderImg(),
				'img_alt'				=>	'Haier 939 iPro',
				'special_price' 		=>	124.97,
				'price' 				=>	179.97,
				'product_label'			=>	'SAVE £30'
			],
			[
				'id' 					=> 	5,
				'name' 					=>	'Haier 939 iPro Series 5 9kg Washing Machine',
				'short_description' 	=>	'This is the short description for the product Haier 939 iPro Series 5 9kg Washing Machine',
				'img_url'				=>	$this->getPlaceHolderImg(),
				'img_alt'				=>	'Haier 939 iPro',
				'special_price' 		=>	124.97,
				'price' 				=>	179.97,
				'product_label'			=>	'SAVE £30'
			],
			[
				'id' 					=> 	5,
				'name' 					=>	'Haier 939 iPro Series 5 9kg Washing Machine',
				'short_description' 	=>	'This is the short description for the product Haier 939 iPro Series 5 9kg Washing Machine',
				'img_url'				=>	$this->getPlaceHolderImg(),
				'img_alt'				=>	'Haier 939 iPro',
				'special_price' 		=>	124.97,
				'price' 				=>	179.97,
				'product_label'			=>	'SAVE £30'
			],
			[
				'id' 					=> 	5,
				'name' 					=>	'Haier 939 iPro Series 5 9kg Washing Machine',
				'short_description' 	=>	'This is the short description for the product Haier 939 iPro Series 5 9kg Washing Machine',
				'img_url'				=>	$this->getPlaceHolderImg(),
				'img_alt'				=>	'Haier 939 iPro',
				'special_price' 		=>	124.97,
				'price' 				=>	179.97,
				'product_label'			=>	'SAVE £30'
			],
		];
	}

	/**
	 * Return placeholder image url.
	 */
	public function getPlaceHolderImg(): string
	{
		return $this->assetRepo->getUrl(
			"BuyIt_HyvaCandidateTest::images/placeholder.png"
		);
	}
}
