<?php
/**
* This class is autogenerated by the Spapi class generator
* Date of generation: 2020-12-22
* Specification: ttps://github.com/amzn/selling-partner-api-models/blob/main/models/catalog-items-api-model/catalogItemsV0.json
* Source MD5 signature: e14175aaa53cb28e8e95450733c0f21b
*
*
* Selling Partner API for Catalog Items
* The Selling Partner API for Catalog Items helps you programmatically retrieve item details for items in the catalog.
*/
namespace DoubleBreak\Spapi\Api;
use DoubleBreak\Spapi\Client;

class CatalogItems extends Client {

  /**
  * Operation listCatalogItems
  *
  * @param array $queryParams
  *    - *marketplaceId* string - A marketplace identifier. Specifies the marketplace for which items are returned.
  *    - *query* string - Keyword(s) to use to search for items in the catalog. Example: 'harry potter books'.
  *    - *queryContextId* string - An identifier for the context within which the given search will be performed. A marketplace might provide mechanisms for constraining a search to a subset of potential items. For example, the retail marketplace allows queries to be constrained to a specific category. The QueryContextId parameter specifies such a subset. If it is omitted, the search will be performed using the default context for the marketplace, which will typically contain the largest set of items.
  *    - *sellerSKU* string - Used to identify an item in the given marketplace. SellerSKU is qualified by the seller's SellerId, which is included with every operation that you submit.
  *    - *uPC* string - A 12-digit bar code used for retail packaging.
  *    - *eAN* string - A European article number that uniquely identifies the catalog item, manufacturer, and its attributes.
  *    - *iSBN* string - The unique commercial book identifier used to identify books internationally.
  *    - *jAN* string - A Japanese article number that uniquely identifies the product, manufacturer, and its attributes.
  *
  */
  public function listCatalogItems($queryParams = [])
  {
    return $this->send("/catalog/v0/items", [
      'method' => 'GET',
      'query' => $queryParams,
    ]);
  }

  /**
  * Operation getCatalogItem
  *
  * @param string $asin The Amazon Standard Identification Number (ASIN) of the item.
  *
  * @param array $queryParams
  *    - *marketplaceId* string - A marketplace identifier. Specifies the marketplace for the item.
  *
  */
  public function getCatalogItem($asin, $queryParams = [])
  {
    return $this->send("/catalog/2020-12-01/items/{$asin}", [
      'method' => 'GET',
      'query' => $queryParams,
    ]);
  }

  /**
  * Operation listCatalogCategories
  *
  * @param array $queryParams
  *    - *marketplaceId* string - A marketplace identifier. Specifies the marketplace for the item.
  *    - *aSIN* string - The Amazon Standard Identification Number (ASIN) of the item.
  *    - *sellerSKU* string - Used to identify items in the given marketplace. SellerSKU is qualified by the seller's SellerId, which is included with every operation that you submit.
  *
  */
  public function listCatalogCategories($queryParams = [])
  {
    return $this->send("/catalog/v0/categories", [
      'method' => 'GET',
      'query' => $queryParams,
    ]);
  }
}
