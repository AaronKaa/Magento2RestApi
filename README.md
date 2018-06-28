# Getting started

## How to Build

The generated code has dependencies over external libraries like UniRest. These dependencies are defined in the ```composer.json``` file that comes with the SDK. 
To resolve these dependencies, we use the Composer package manager which requires PHP greater than 5.3.2 installed in your system. 
Visit [https://getcomposer.org/download/](https://getcomposer.org/download/) to download the installer file for Composer and run it in your system. 
Open command prompt and type ```composer --version```. This should display the current version of the Composer installed if the installation was successful.

* Using command line, navigate to the directory containing the generated files (including ```composer.json```) for the SDK. 
* Run the command ```composer install```. This should install all the required dependencies and create the ```vendor``` directory in your project directory.

![Building SDK - Step 1](https://apidocs.io/illustration/php?step=installDependencies&workspaceFolder=Magento%20Community-PHP)

### [For Windows Users Only] Configuring CURL Certificate Path in php.ini

CURL used to include a list of accepted CAs, but no longer bundles ANY CA certs. So by default it will reject all SSL certificates as unverifiable. You will have to get your CA's cert and point curl at it. The steps are as follows:

1. Download the certificate bundle (.pem file) from [https://curl.haxx.se/docs/caextract.html](https://curl.haxx.se/docs/caextract.html) on to your system.
2. Add curl.cainfo = "PATH_TO/cacert.pem" to your php.ini file located in your php installation. “PATH_TO” must be an absolute path containing the .pem file.

```ini
[curl]
; A default value for the CURLOPT_CAINFO option. This is required to be an
; absolute path.
;curl.cainfo =
```

## How to Use

The following section explains how to use the MagentoCommunity library in a new project.

### 1. Open Project in an IDE

Open an IDE for PHP like PhpStorm. The basic workflow presented here is also applicable if you prefer using a different editor or IDE.

![Open project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=openIDE&workspaceFolder=Magento%20Community-PHP)

Click on ```Open``` in PhpStorm to browse to your generated SDK directory and then click ```OK```.

![Open project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=openProject0&workspaceFolder=Magento%20Community-PHP)     

### 2. Add a new Test Project

Create a new directory by right clicking on the solution name as shown below:

![Add a new project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=createDirectory&workspaceFolder=Magento%20Community-PHP)

Name the directory as "test"

![Add a new project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=nameDirectory&workspaceFolder=Magento%20Community-PHP)
   
Add a PHP file to this project

![Add a new project in PHPStorm - Step 3](https://apidocs.io/illustration/php?step=createFile&workspaceFolder=Magento%20Community-PHP)

Name it "testSDK"

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=nameFile&workspaceFolder=Magento%20Community-PHP)

Depending on your project setup, you might need to include composer's autoloader in your PHP code to enable auto loading of classes.

```PHP
require_once "../vendor/autoload.php";
```

It is important that the path inside require_once correctly points to the file ```autoload.php``` inside the vendor directory created during dependency installations.

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=projectFiles&workspaceFolder=Magento%20Community-PHP)

After this you can add code to initialize the client library and acquire the instance of a Controller class. Sample code to initialize the client library and using controller methods is given in the subsequent sections.

### 3. Run the Test Project

To run your project you must set the Interpreter for your project. Interpreter is the PHP engine installed on your computer.

Open ```Settings``` from ```File``` menu.

![Run Test Project - Step 1](https://apidocs.io/illustration/php?step=openSettings&workspaceFolder=Magento%20Community-PHP)

Select ```PHP``` from within ```Languages & Frameworks```

![Run Test Project - Step 2](https://apidocs.io/illustration/php?step=setInterpreter0&workspaceFolder=Magento%20Community-PHP)

Browse for Interpreters near the ```Interpreter``` option and choose your interpreter.

![Run Test Project - Step 3](https://apidocs.io/illustration/php?step=setInterpreter1&workspaceFolder=Magento%20Community-PHP)

Once the interpreter is selected, click ```OK```

![Run Test Project - Step 4](https://apidocs.io/illustration/php?step=setInterpreter2&workspaceFolder=Magento%20Community-PHP)

To run your project, right click on your PHP file inside your Test project and click on ```Run```

![Run Test Project - Step 5](https://apidocs.io/illustration/php?step=runProject&workspaceFolder=Magento%20Community-PHP)

## How to Test

Unit tests in this SDK can be run using PHPUnit. 

1. First install the dependencies using composer including the `require-dev` dependencies.
2. Run `vendor\bin\phpunit --verbose` from commandline to execute tests. If you have 
   installed PHPUnit globally, run tests using `phpunit --verbose` instead.

You can change the PHPUnit test configuration in the `phpunit.xml` file.

## Initialization

### 

API client can be initialized as following.

```php

$client = new MagentoCommunityLib\MagentoCommunityClient();
```


# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [StoreStoreRepositoryV1Controller](#store_store_repository_v1_controller)
* [StoreGroupRepositoryV1Controller](#store_group_repository_v1_controller)
* [StoreWebsiteRepositoryV1Controller](#store_website_repository_v1_controller)
* [StoreStoreConfigManagerV1Controller](#store_store_config_manager_v1_controller)
* [DirectoryCurrencyInformationAcquirerV1Controller](#directory_currency_information_acquirer_v1_controller)
* [DirectoryCountryInformationAcquirerV1Controller](#directory_country_information_acquirer_v1_controller)
* [EavAttributeSetRepositoryV1Controller](#eav_attribute_set_repository_v1_controller)
* [EavAttributeSetManagementV1Controller](#eav_attribute_set_management_v1_controller)
* [CustomerGroupRepositoryV1Controller](#customer_group_repository_v1_controller)
* [CustomerGroupManagementV1Controller](#customer_group_management_v1_controller)
* [CustomerCustomerGroupConfigV1Controller](#customer_customer_group_config_v1_controller)
* [CustomerCustomerMetadataV1Controller](#customer_customer_metadata_v1_controller)
* [CustomerAddressMetadataV1Controller](#customer_address_metadata_v1_controller)
* [CustomerCustomerRepositoryV1Controller](#customer_customer_repository_v1_controller)
* [CustomerAccountManagementV1Controller](#customer_account_management_v1_controller)
* [CustomerAddressRepositoryV1Controller](#customer_address_repository_v1_controller)
* [CmsPageRepositoryV1Controller](#cms_page_repository_v1_controller)
* [CmsBlockRepositoryV1Controller](#cms_block_repository_v1_controller)
* [CatalogProductRepositoryV1Controller](#catalog_product_repository_v1_controller)
* [CatalogProductAttributeTypesListV1Controller](#catalog_product_attribute_types_list_v1_controller)
* [CatalogProductAttributeRepositoryV1Controller](#catalog_product_attribute_repository_v1_controller)
* [CatalogCategoryAttributeRepositoryV1Controller](#catalog_category_attribute_repository_v1_controller)
* [CatalogCategoryAttributeOptionManagementV1Controller](#catalog_category_attribute_option_management_v1_controller)
* [CatalogProductTypeListV1Controller](#catalog_product_type_list_v1_controller)
* [CatalogAttributeSetRepositoryV1Controller](#catalog_attribute_set_repository_v1_controller)
* [CatalogAttributeSetManagementV1Controller](#catalog_attribute_set_management_v1_controller)
* [CatalogProductAttributeManagementV1Controller](#catalog_product_attribute_management_v1_controller)
* [CatalogProductAttributeGroupRepositoryV1Controller](#catalog_product_attribute_group_repository_v1_controller)
* [CatalogProductAttributeOptionManagementV1Controller](#catalog_product_attribute_option_management_v1_controller)
* [CatalogProductMediaAttributeManagementV1Controller](#catalog_product_media_attribute_management_v1_controller)
* [CatalogProductAttributeMediaGalleryManagementV1Controller](#catalog_product_attribute_media_gallery_management_v1_controller)
* [CatalogProductTierPriceManagementV1Controller](#catalog_product_tier_price_management_v1_controller)
* [CatalogTierPriceStorageV1Controller](#catalog_tier_price_storage_v1_controller)
* [CatalogBasePriceStorageV1Controller](#catalog_base_price_storage_v1_controller)
* [CatalogCostStorageV1Controller](#catalog_cost_storage_v1_controller)
* [CatalogSpecialPriceStorageV1Controller](#catalog_special_price_storage_v1_controller)
* [CatalogCategoryRepositoryV1Controller](#catalog_category_repository_v1_controller)
* [CatalogCategoryManagementV1Controller](#catalog_category_management_v1_controller)
* [CatalogCategoryListV1Controller](#catalog_category_list_v1_controller)
* [CatalogProductCustomOptionTypeListV1Controller](#catalog_product_custom_option_type_list_v1_controller)
* [CatalogProductCustomOptionRepositoryV1Controller](#catalog_product_custom_option_repository_v1_controller)
* [CatalogProductLinkTypeListV1Controller](#catalog_product_link_type_list_v1_controller)
* [CatalogProductLinkManagementV1Controller](#catalog_product_link_management_v1_controller)
* [CatalogProductLinkRepositoryV1Controller](#catalog_product_link_repository_v1_controller)
* [CatalogCategoryLinkManagementV1Controller](#catalog_category_link_management_v1_controller)
* [CatalogCategoryLinkRepositoryV1Controller](#catalog_category_link_repository_v1_controller)
* [CatalogProductWebsiteLinkRepositoryV1Controller](#catalog_product_website_link_repository_v1_controller)
* [CatalogProductRenderListV1Controller](#catalog_product_render_list_v1_controller)
* [CatalogInventoryStockRegistryV1Controller](#catalog_inventory_stock_registry_v1_controller)
* [BackendModuleServiceV1Controller](#backend_module_service_v1_controller)
* [QuoteCartRepositoryV1Controller](#quote_cart_repository_v1_controller)
* [QuoteCartManagementV1Controller](#quote_cart_management_v1_controller)
* [QuoteGuestCartRepositoryV1Controller](#quote_guest_cart_repository_v1_controller)
* [QuoteGuestCartManagementV1Controller](#quote_guest_cart_management_v1_controller)
* [QuoteShippingMethodManagementV1Controller](#quote_shipping_method_management_v1_controller)
* [QuoteShipmentEstimationV1Controller](#quote_shipment_estimation_v1_controller)
* [TemandoShippingQuoteShippingMethodManagementV1Controller](#temando_shipping_quote_shipping_method_management_v1_controller)
* [QuoteGuestShippingMethodManagementV1Controller](#quote_guest_shipping_method_management_v1_controller)
* [QuoteGuestShipmentEstimationV1Controller](#quote_guest_shipment_estimation_v1_controller)
* [QuoteCartItemRepositoryV1Controller](#quote_cart_item_repository_v1_controller)
* [QuoteGuestCartItemRepositoryV1Controller](#quote_guest_cart_item_repository_v1_controller)
* [QuotePaymentMethodManagementV1Controller](#quote_payment_method_management_v1_controller)
* [QuoteGuestPaymentMethodManagementV1Controller](#quote_guest_payment_method_management_v1_controller)
* [QuoteBillingAddressManagementV1Controller](#quote_billing_address_management_v1_controller)
* [QuoteGuestBillingAddressManagementV1Controller](#quote_guest_billing_address_management_v1_controller)
* [QuoteCouponManagementV1Controller](#quote_coupon_management_v1_controller)
* [QuoteGuestCouponManagementV1Controller](#quote_guest_coupon_management_v1_controller)
* [QuoteCartTotalRepositoryV1Controller](#quote_cart_total_repository_v1_controller)
* [QuoteGuestCartTotalManagementV1Controller](#quote_guest_cart_total_management_v1_controller)
* [QuoteGuestCartTotalRepositoryV1Controller](#quote_guest_cart_total_repository_v1_controller)
* [QuoteCartTotalManagementV1Controller](#quote_cart_total_management_v1_controller)
* [SearchV1Controller](#search_v1_controller)
* [SalesOrderRepositoryV1Controller](#sales_order_repository_v1_controller)
* [SalesOrderManagementV1Controller](#sales_order_management_v1_controller)
* [SalesOrderAddressRepositoryV1Controller](#sales_order_address_repository_v1_controller)
* [SalesOrderItemRepositoryV1Controller](#sales_order_item_repository_v1_controller)
* [SalesInvoiceRepositoryV1Controller](#sales_invoice_repository_v1_controller)
* [SalesInvoiceManagementV1Controller](#sales_invoice_management_v1_controller)
* [SalesInvoiceCommentRepositoryV1Controller](#sales_invoice_comment_repository_v1_controller)
* [SalesRefundInvoiceV1Controller](#sales_refund_invoice_v1_controller)
* [SalesCreditmemoManagementV1Controller](#sales_creditmemo_management_v1_controller)
* [SalesCreditmemoRepositoryV1Controller](#sales_creditmemo_repository_v1_controller)
* [SalesCreditmemoCommentRepositoryV1Controller](#sales_creditmemo_comment_repository_v1_controller)
* [SalesRefundOrderV1Controller](#sales_refund_order_v1_controller)
* [SalesShipmentRepositoryV1Controller](#sales_shipment_repository_v1_controller)
* [SalesShipmentManagementV1Controller](#sales_shipment_management_v1_controller)
* [SalesShipmentCommentRepositoryV1Controller](#sales_shipment_comment_repository_v1_controller)
* [SalesShipmentTrackRepositoryV1Controller](#sales_shipment_track_repository_v1_controller)
* [SalesShipOrderV1Controller](#sales_ship_order_v1_controller)
* [SalesTransactionRepositoryV1Controller](#sales_transaction_repository_v1_controller)
* [SalesInvoiceOrderV1Controller](#sales_invoice_order_v1_controller)
* [CheckoutGuestShippingInformationManagementV1Controller](#checkout_guest_shipping_information_management_v1_controller)
* [CheckoutShippingInformationManagementV1Controller](#checkout_shipping_information_management_v1_controller)
* [CheckoutTotalsInformationManagementV1Controller](#checkout_totals_information_management_v1_controller)
* [CheckoutGuestTotalsInformationManagementV1Controller](#checkout_guest_totals_information_management_v1_controller)
* [CheckoutGuestPaymentInformationManagementV1Controller](#checkout_guest_payment_information_management_v1_controller)
* [CheckoutPaymentInformationManagementV1Controller](#checkout_payment_information_management_v1_controller)
* [BundleProductLinkManagementV1Controller](#bundle_product_link_management_v1_controller)
* [BundleProductOptionRepositoryV1Controller](#bundle_product_option_repository_v1_controller)
* [BundleProductOptionTypeListV1Controller](#bundle_product_option_type_list_v1_controller)
* [BundleProductOptionManagementV1Controller](#bundle_product_option_management_v1_controller)
* [CheckoutAgreementsCheckoutAgreementsRepositoryV1Controller](#checkout_agreements_checkout_agreements_repository_v1_controller)
* [ConfigurableProductLinkManagementV1Controller](#configurable_product_link_management_v1_controller)
* [ConfigurableProductConfigurableProductManagementV1Controller](#configurable_product_configurable_product_management_v1_controller)
* [ConfigurableProductOptionRepositoryV1Controller](#configurable_product_option_repository_v1_controller)
* [EbizmartsSagePaySuiteServerManagementV1Controller](#ebizmarts_sage_pay_suite_server_management_v1_controller)
* [EbizmartsSagePaySuiteGuestServerManagementV1Controller](#ebizmarts_sage_pay_suite_guest_server_management_v1_controller)
* [EbizmartsSagePaySuiteFormManagementV1Controller](#ebizmarts_sage_pay_suite_form_management_v1_controller)
* [EbizmartsSagePaySuiteGuestFormManagementV1Controller](#ebizmarts_sage_pay_suite_guest_form_management_v1_controller)
* [EbizmartsSagePaySuitePayPalManagementV1Controller](#ebizmarts_sage_pay_suite_pay_pal_management_v1_controller)
* [EbizmartsSagePaySuiteGuestPayPalManagementV1Controller](#ebizmarts_sage_pay_suite_guest_pay_pal_management_v1_controller)
* [EbizmartsSagePaySuitePiMerchantV1Controller](#ebizmarts_sage_pay_suite_pi_merchant_v1_controller)
* [EbizmartsSagePaySuitePiManagementV1Controller](#ebizmarts_sage_pay_suite_pi_management_v1_controller)
* [EbizmartsSagePaySuiteGuestPiManagementV1Controller](#ebizmarts_sage_pay_suite_guest_pi_management_v1_controller)
* [IntegrationAdminTokenServiceV1Controller](#integration_admin_token_service_v1_controller)
* [IntegrationCustomerTokenServiceV1Controller](#integration_customer_token_service_v1_controller)
* [DownloadableLinkRepositoryV1Controller](#downloadable_link_repository_v1_controller)
* [DownloadableSampleRepositoryV1Controller](#downloadable_sample_repository_v1_controller)
* [GiftMessageCartRepositoryV1Controller](#gift_message_cart_repository_v1_controller)
* [GiftMessageItemRepositoryV1Controller](#gift_message_item_repository_v1_controller)
* [GiftMessageGuestCartRepositoryV1Controller](#gift_message_guest_cart_repository_v1_controller)
* [GiftMessageGuestItemRepositoryV1Controller](#gift_message_guest_item_repository_v1_controller)
* [AnalyticsLinkProviderV1Controller](#analytics_link_provider_v1_controller)
* [SalesRuleRuleRepositoryV1Controller](#sales_rule_rule_repository_v1_controller)
* [SalesRuleCouponRepositoryV1Controller](#sales_rule_coupon_repository_v1_controller)
* [SalesRuleCouponManagementV1Controller](#sales_rule_coupon_management_v1_controller)
* [AmazonPaymentAddressManagementV1Controller](#amazon_payment_address_management_v1_controller)
* [AmazonPaymentOrderInformationManagementV1Controller](#amazon_payment_order_information_management_v1_controller)
* [TaxTaxRateRepositoryV1Controller](#tax_tax_rate_repository_v1_controller)
* [TaxTaxRuleRepositoryV1Controller](#tax_tax_rule_repository_v1_controller)
* [TaxTaxClassRepositoryV1Controller](#tax_tax_class_repository_v1_controller)
* [StawHiveProductV1Controller](#staw_hive_product_v1_controller)
* [StawHiveCartV1Controller](#staw_hive_cart_v1_controller)
* [StawHiveOrderV1Controller](#staw_hive_order_v1_controller)
* [StawHiveInvoiceV1Controller](#staw_hive_invoice_v1_controller)
* [TemandoShippingRmaRmaShipmentManagementV1Controller](#temando_shipping_rma_rma_shipment_management_v1_controller)

## <a name="store_store_repository_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".StoreStoreRepositoryV1Controller") StoreStoreRepositoryV1Controller

### Get singleton instance

The singleton instance of the ``` StoreStoreRepositoryV1Controller ``` class can be accessed from the API Client.

```php
$storeStoreRepositoryV1 = $client->getStoreStoreRepositoryV1();
```

### <a name="get_store_store_repository_v1_get_list_get"></a>![Method: ](https://apidocs.io/img/method.png ".StoreStoreRepositoryV1Controller.getStoreStoreRepositoryV1GetListGet") getStoreStoreRepositoryV1GetListGet

> *Tags:*  ``` Skips Authentication ``` 

> Retrieve list of all stores


```php
function getStoreStoreRepositoryV1GetListGet()
```

#### Example Usage

```php

$result = $storeStoreRepositoryV1->getStoreStoreRepositoryV1GetListGet();

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="store_group_repository_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".StoreGroupRepositoryV1Controller") StoreGroupRepositoryV1Controller

### Get singleton instance

The singleton instance of the ``` StoreGroupRepositoryV1Controller ``` class can be accessed from the API Client.

```php
$storeGroupRepositoryV1 = $client->getStoreGroupRepositoryV1();
```

### <a name="get_store_group_repository_v1_get_list_get"></a>![Method: ](https://apidocs.io/img/method.png ".StoreGroupRepositoryV1Controller.getStoreGroupRepositoryV1GetListGet") getStoreGroupRepositoryV1GetListGet

> *Tags:*  ``` Skips Authentication ``` 

> Retrieve list of all groups


```php
function getStoreGroupRepositoryV1GetListGet()
```

#### Example Usage

```php

$result = $storeGroupRepositoryV1->getStoreGroupRepositoryV1GetListGet();

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="store_website_repository_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".StoreWebsiteRepositoryV1Controller") StoreWebsiteRepositoryV1Controller

### Get singleton instance

The singleton instance of the ``` StoreWebsiteRepositoryV1Controller ``` class can be accessed from the API Client.

```php
$storeWebsiteRepositoryV1 = $client->getStoreWebsiteRepositoryV1();
```

### <a name="get_store_website_repository_v1_get_list_get"></a>![Method: ](https://apidocs.io/img/method.png ".StoreWebsiteRepositoryV1Controller.getStoreWebsiteRepositoryV1GetListGet") getStoreWebsiteRepositoryV1GetListGet

> *Tags:*  ``` Skips Authentication ``` 

> Retrieve list of all websites


```php
function getStoreWebsiteRepositoryV1GetListGet()
```

#### Example Usage

```php

$result = $storeWebsiteRepositoryV1->getStoreWebsiteRepositoryV1GetListGet();

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="store_store_config_manager_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".StoreStoreConfigManagerV1Controller") StoreStoreConfigManagerV1Controller

### Get singleton instance

The singleton instance of the ``` StoreStoreConfigManagerV1Controller ``` class can be accessed from the API Client.

```php
$storeStoreConfigManagerV1 = $client->getStoreStoreConfigManagerV1();
```

### <a name="get_store_store_config_manager_v1_get_store_configs_get"></a>![Method: ](https://apidocs.io/img/method.png ".StoreStoreConfigManagerV1Controller.getStoreStoreConfigManagerV1GetStoreConfigsGet") getStoreStoreConfigManagerV1GetStoreConfigsGet

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function getStoreStoreConfigManagerV1GetStoreConfigsGet($storeCodes = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| storeCodes |  ``` Optional ```  ``` Collection ```  | TODO: Add a parameter description |



#### Example Usage

```php
$storeCodes = array('storeCodes');

$result = $storeStoreConfigManagerV1->getStoreStoreConfigManagerV1GetStoreConfigsGet($storeCodes);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="directory_currency_information_acquirer_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".DirectoryCurrencyInformationAcquirerV1Controller") DirectoryCurrencyInformationAcquirerV1Controller

### Get singleton instance

The singleton instance of the ``` DirectoryCurrencyInformationAcquirerV1Controller ``` class can be accessed from the API Client.

```php
$directoryCurrencyInformationAcquirerV1 = $client->getDirectoryCurrencyInformationAcquirerV1();
```

### <a name="get_directory_currency_information_acquirer_v1_get_currency_info_get"></a>![Method: ](https://apidocs.io/img/method.png ".DirectoryCurrencyInformationAcquirerV1Controller.getDirectoryCurrencyInformationAcquirerV1GetCurrencyInfoGet") getDirectoryCurrencyInformationAcquirerV1GetCurrencyInfoGet

> *Tags:*  ``` Skips Authentication ``` 

> Get currency information for the store.


```php
function getDirectoryCurrencyInformationAcquirerV1GetCurrencyInfoGet()
```

#### Example Usage

```php

$result = $directoryCurrencyInformationAcquirerV1->getDirectoryCurrencyInformationAcquirerV1GetCurrencyInfoGet();

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="directory_country_information_acquirer_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".DirectoryCountryInformationAcquirerV1Controller") DirectoryCountryInformationAcquirerV1Controller

### Get singleton instance

The singleton instance of the ``` DirectoryCountryInformationAcquirerV1Controller ``` class can be accessed from the API Client.

```php
$directoryCountryInformationAcquirerV1 = $client->getDirectoryCountryInformationAcquirerV1();
```

### <a name="get_directory_country_information_acquirer_v1_get_countries_info_get"></a>![Method: ](https://apidocs.io/img/method.png ".DirectoryCountryInformationAcquirerV1Controller.getDirectoryCountryInformationAcquirerV1GetCountriesInfoGet") getDirectoryCountryInformationAcquirerV1GetCountriesInfoGet

> *Tags:*  ``` Skips Authentication ``` 

> Get all countries and regions information for the store.


```php
function getDirectoryCountryInformationAcquirerV1GetCountriesInfoGet()
```

#### Example Usage

```php

$result = $directoryCountryInformationAcquirerV1->getDirectoryCountryInformationAcquirerV1GetCountriesInfoGet();

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 0 | Unexpected error |



### <a name="get_directory_country_information_acquirer_v1_get_country_info_get"></a>![Method: ](https://apidocs.io/img/method.png ".DirectoryCountryInformationAcquirerV1Controller.getDirectoryCountryInformationAcquirerV1GetCountryInfoGet") getDirectoryCountryInformationAcquirerV1GetCountryInfoGet

> *Tags:*  ``` Skips Authentication ``` 

> Get country and region information for the store.


```php
function getDirectoryCountryInformationAcquirerV1GetCountryInfoGet($countryId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| countryId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$countryId = 'countryId';

$result = $directoryCountryInformationAcquirerV1->getDirectoryCountryInformationAcquirerV1GetCountryInfoGet($countryId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="eav_attribute_set_repository_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".EavAttributeSetRepositoryV1Controller") EavAttributeSetRepositoryV1Controller

### Get singleton instance

The singleton instance of the ``` EavAttributeSetRepositoryV1Controller ``` class can be accessed from the API Client.

```php
$eavAttributeSetRepositoryV1 = $client->getEavAttributeSetRepositoryV1();
```

### <a name="get_eav_attribute_set_repository_v1_get_list_get"></a>![Method: ](https://apidocs.io/img/method.png ".EavAttributeSetRepositoryV1Controller.getEavAttributeSetRepositoryV1GetListGet") getEavAttributeSetRepositoryV1GetListGet

> *Tags:*  ``` Skips Authentication ``` 

> Retrieve list of Attribute Sets This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#AttributeSetRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.


```php
function getEavAttributeSetRepositoryV1GetListGet(
        $searchCriteriaFilterGroupsFiltersField = null,
        $searchCriteriaFilterGroupsFiltersValue = null,
        $searchCriteriaFilterGroupsFiltersConditionType = null,
        $searchCriteriaSortOrdersField = null,
        $searchCriteriaSortOrdersDirection = null,
        $searchCriteriaPageSize = null,
        $searchCriteriaCurrentPage = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| searchCriteriaFilterGroupsFiltersField |  ``` Optional ```  | Field |
| searchCriteriaFilterGroupsFiltersValue |  ``` Optional ```  | Value |
| searchCriteriaFilterGroupsFiltersConditionType |  ``` Optional ```  | Condition type |
| searchCriteriaSortOrdersField |  ``` Optional ```  | Sorting field. |
| searchCriteriaSortOrdersDirection |  ``` Optional ```  | Sorting direction. |
| searchCriteriaPageSize |  ``` Optional ```  | Page size. |
| searchCriteriaCurrentPage |  ``` Optional ```  | Current page. |



#### Example Usage

```php
$searchCriteriaFilterGroupsFiltersField = 'searchCriteria[filterGroups][][filters][][field]';
$searchCriteriaFilterGroupsFiltersValue = 'searchCriteria[filterGroups][][filters][][value]';
$searchCriteriaFilterGroupsFiltersConditionType = 'searchCriteria[filterGroups][][filters][][conditionType]';
$searchCriteriaSortOrdersField = 'searchCriteria[sortOrders][][field]';
$searchCriteriaSortOrdersDirection = 'searchCriteria[sortOrders][][direction]';
$searchCriteriaPageSize = 86;
$searchCriteriaCurrentPage = 86;

$result = $eavAttributeSetRepositoryV1->getEavAttributeSetRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="get_eav_attribute_set_repository_v1_get_get"></a>![Method: ](https://apidocs.io/img/method.png ".EavAttributeSetRepositoryV1Controller.getEavAttributeSetRepositoryV1GetGet") getEavAttributeSetRepositoryV1GetGet

> *Tags:*  ``` Skips Authentication ``` 

> Retrieve attribute set information based on given ID


```php
function getEavAttributeSetRepositoryV1GetGet($attributeSetId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| attributeSetId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$attributeSetId = 86;

$result = $eavAttributeSetRepositoryV1->getEavAttributeSetRepositoryV1GetGet($attributeSetId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="update_eav_attribute_set_repository_v1_save_put"></a>![Method: ](https://apidocs.io/img/method.png ".EavAttributeSetRepositoryV1Controller.updateEavAttributeSetRepositoryV1SavePut") updateEavAttributeSetRepositoryV1SavePut

> *Tags:*  ``` Skips Authentication ``` 

> Save attribute set data


```php
function updateEavAttributeSetRepositoryV1SavePut(
        $attributeSetId,
        $eavAttributeSetRepositoryV1SavePutBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| attributeSetId |  ``` Required ```  | TODO: Add a parameter description |
| eavAttributeSetRepositoryV1SavePutBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$attributeSetId = 'attributeSetId';
$eavAttributeSetRepositoryV1SavePutBody = new EavAttributeSetRepositoryV1SavePutBody();

$result = $eavAttributeSetRepositoryV1->updateEavAttributeSetRepositoryV1SavePut($attributeSetId, $eavAttributeSetRepositoryV1SavePutBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="delete_eav_attribute_set_repository_v1_delete_by_id_delete"></a>![Method: ](https://apidocs.io/img/method.png ".EavAttributeSetRepositoryV1Controller.deleteEavAttributeSetRepositoryV1DeleteByIdDelete") deleteEavAttributeSetRepositoryV1DeleteByIdDelete

> *Tags:*  ``` Skips Authentication ``` 

> Remove attribute set by given ID


```php
function deleteEavAttributeSetRepositoryV1DeleteByIdDelete($attributeSetId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| attributeSetId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$attributeSetId = 86;

$result = $eavAttributeSetRepositoryV1->deleteEavAttributeSetRepositoryV1DeleteByIdDelete($attributeSetId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="eav_attribute_set_management_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".EavAttributeSetManagementV1Controller") EavAttributeSetManagementV1Controller

### Get singleton instance

The singleton instance of the ``` EavAttributeSetManagementV1Controller ``` class can be accessed from the API Client.

```php
$eavAttributeSetManagementV1 = $client->getEavAttributeSetManagementV1();
```

### <a name="create_eav_attribute_set_management_v1_create_post"></a>![Method: ](https://apidocs.io/img/method.png ".EavAttributeSetManagementV1Controller.createEavAttributeSetManagementV1CreatePost") createEavAttributeSetManagementV1CreatePost

> *Tags:*  ``` Skips Authentication ``` 

> Create attribute set from data


```php
function createEavAttributeSetManagementV1CreatePost($eavAttributeSetManagementV1CreatePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| eavAttributeSetManagementV1CreatePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$eavAttributeSetManagementV1CreatePostBody = new EavAttributeSetManagementV1CreatePostBody();

$result = $eavAttributeSetManagementV1->createEavAttributeSetManagementV1CreatePost($eavAttributeSetManagementV1CreatePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="customer_group_repository_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CustomerGroupRepositoryV1Controller") CustomerGroupRepositoryV1Controller

### Get singleton instance

The singleton instance of the ``` CustomerGroupRepositoryV1Controller ``` class can be accessed from the API Client.

```php
$customerGroupRepositoryV1 = $client->getCustomerGroupRepositoryV1();
```

### <a name="get_customer_group_repository_v1_get_by_id_get"></a>![Method: ](https://apidocs.io/img/method.png ".CustomerGroupRepositoryV1Controller.getCustomerGroupRepositoryV1GetByIdGet") getCustomerGroupRepositoryV1GetByIdGet

> *Tags:*  ``` Skips Authentication ``` 

> Get customer group by group ID.


```php
function getCustomerGroupRepositoryV1GetByIdGet($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = 86;

$result = $customerGroupRepositoryV1->getCustomerGroupRepositoryV1GetByIdGet($id);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="update_customer_group_repository_v1_save_put"></a>![Method: ](https://apidocs.io/img/method.png ".CustomerGroupRepositoryV1Controller.updateCustomerGroupRepositoryV1SavePut") updateCustomerGroupRepositoryV1SavePut

> *Tags:*  ``` Skips Authentication ``` 

> Save customer group.


```php
function updateCustomerGroupRepositoryV1SavePut(
        $id,
        $customerGroupRepositoryV1SavePutBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | TODO: Add a parameter description |
| customerGroupRepositoryV1SavePutBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = 'id';
$customerGroupRepositoryV1SavePutBody = new CustomerGroupRepositoryV1SavePutBody();

$result = $customerGroupRepositoryV1->updateCustomerGroupRepositoryV1SavePut($id, $customerGroupRepositoryV1SavePutBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="delete_customer_group_repository_v1_delete_by_id_delete"></a>![Method: ](https://apidocs.io/img/method.png ".CustomerGroupRepositoryV1Controller.deleteCustomerGroupRepositoryV1DeleteByIdDelete") deleteCustomerGroupRepositoryV1DeleteByIdDelete

> *Tags:*  ``` Skips Authentication ``` 

> Delete customer group by ID.


```php
function deleteCustomerGroupRepositoryV1DeleteByIdDelete($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = 86;

$result = $customerGroupRepositoryV1->deleteCustomerGroupRepositoryV1DeleteByIdDelete($id);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="get_customer_group_repository_v1_get_list_get"></a>![Method: ](https://apidocs.io/img/method.png ".CustomerGroupRepositoryV1Controller.getCustomerGroupRepositoryV1GetListGet") getCustomerGroupRepositoryV1GetListGet

> *Tags:*  ``` Skips Authentication ``` 

> Retrieve customer groups. The list of groups can be filtered to exclude the NOT_LOGGED_IN group using the first parameter and/or it can be filtered by tax class. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#GroupRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.


```php
function getCustomerGroupRepositoryV1GetListGet(
        $searchCriteriaFilterGroupsFiltersField = null,
        $searchCriteriaFilterGroupsFiltersValue = null,
        $searchCriteriaFilterGroupsFiltersConditionType = null,
        $searchCriteriaSortOrdersField = null,
        $searchCriteriaSortOrdersDirection = null,
        $searchCriteriaPageSize = null,
        $searchCriteriaCurrentPage = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| searchCriteriaFilterGroupsFiltersField |  ``` Optional ```  | Field |
| searchCriteriaFilterGroupsFiltersValue |  ``` Optional ```  | Value |
| searchCriteriaFilterGroupsFiltersConditionType |  ``` Optional ```  | Condition type |
| searchCriteriaSortOrdersField |  ``` Optional ```  | Sorting field. |
| searchCriteriaSortOrdersDirection |  ``` Optional ```  | Sorting direction. |
| searchCriteriaPageSize |  ``` Optional ```  | Page size. |
| searchCriteriaCurrentPage |  ``` Optional ```  | Current page. |



#### Example Usage

```php
$searchCriteriaFilterGroupsFiltersField = 'searchCriteria[filterGroups][][filters][][field]';
$searchCriteriaFilterGroupsFiltersValue = 'searchCriteria[filterGroups][][filters][][value]';
$searchCriteriaFilterGroupsFiltersConditionType = 'searchCriteria[filterGroups][][filters][][conditionType]';
$searchCriteriaSortOrdersField = 'searchCriteria[sortOrders][][field]';
$searchCriteriaSortOrdersDirection = 'searchCriteria[sortOrders][][direction]';
$searchCriteriaPageSize = 86;
$searchCriteriaCurrentPage = 86;

$result = $customerGroupRepositoryV1->getCustomerGroupRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="create_customer_group_repository_v1_save_post"></a>![Method: ](https://apidocs.io/img/method.png ".CustomerGroupRepositoryV1Controller.createCustomerGroupRepositoryV1SavePost") createCustomerGroupRepositoryV1SavePost

> *Tags:*  ``` Skips Authentication ``` 

> Save customer group.


```php
function createCustomerGroupRepositoryV1SavePost($customerGroupRepositoryV1SavePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| customerGroupRepositoryV1SavePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$customerGroupRepositoryV1SavePostBody = new CustomerGroupRepositoryV1SavePutBody();

$result = $customerGroupRepositoryV1->createCustomerGroupRepositoryV1SavePost($customerGroupRepositoryV1SavePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="customer_group_management_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CustomerGroupManagementV1Controller") CustomerGroupManagementV1Controller

### Get singleton instance

The singleton instance of the ``` CustomerGroupManagementV1Controller ``` class can be accessed from the API Client.

```php
$customerGroupManagementV1 = $client->getCustomerGroupManagementV1();
```

### <a name="get_customer_group_management_v1_get_default_group_get"></a>![Method: ](https://apidocs.io/img/method.png ".CustomerGroupManagementV1Controller.getCustomerGroupManagementV1GetDefaultGroupGet") getCustomerGroupManagementV1GetDefaultGroupGet

> *Tags:*  ``` Skips Authentication ``` 

> Get default customer group.


```php
function getCustomerGroupManagementV1GetDefaultGroupGet($storeId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| storeId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$storeId = 86;

$result = $customerGroupManagementV1->getCustomerGroupManagementV1GetDefaultGroupGet($storeId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="get_customer_group_management_v1_get_default_group_get1"></a>![Method: ](https://apidocs.io/img/method.png ".CustomerGroupManagementV1Controller.getCustomerGroupManagementV1GetDefaultGroupGet1") getCustomerGroupManagementV1GetDefaultGroupGet1

> *Tags:*  ``` Skips Authentication ``` 

> Get default customer group.


```php
function getCustomerGroupManagementV1GetDefaultGroupGet1($storeId = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| storeId |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$storeId = 249;

$result = $customerGroupManagementV1->getCustomerGroupManagementV1GetDefaultGroupGet1($storeId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="get_customer_group_management_v1_is_readonly_get"></a>![Method: ](https://apidocs.io/img/method.png ".CustomerGroupManagementV1Controller.getCustomerGroupManagementV1IsReadonlyGet") getCustomerGroupManagementV1IsReadonlyGet

> *Tags:*  ``` Skips Authentication ``` 

> Check if customer group can be deleted.


```php
function getCustomerGroupManagementV1IsReadonlyGet($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = 249;

$result = $customerGroupManagementV1->getCustomerGroupManagementV1IsReadonlyGet($id);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="customer_customer_group_config_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CustomerCustomerGroupConfigV1Controller") CustomerCustomerGroupConfigV1Controller

### Get singleton instance

The singleton instance of the ``` CustomerCustomerGroupConfigV1Controller ``` class can be accessed from the API Client.

```php
$customerCustomerGroupConfigV1 = $client->getCustomerCustomerGroupConfigV1();
```

### <a name="update_customer_customer_group_config_v1_set_default_customer_group_put"></a>![Method: ](https://apidocs.io/img/method.png ".CustomerCustomerGroupConfigV1Controller.updateCustomerCustomerGroupConfigV1SetDefaultCustomerGroupPut") updateCustomerCustomerGroupConfigV1SetDefaultCustomerGroupPut

> *Tags:*  ``` Skips Authentication ``` 

> Set system default customer group.


```php
function updateCustomerCustomerGroupConfigV1SetDefaultCustomerGroupPut($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = 249;

$result = $customerCustomerGroupConfigV1->updateCustomerCustomerGroupConfigV1SetDefaultCustomerGroupPut($id);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="customer_customer_metadata_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CustomerCustomerMetadataV1Controller") CustomerCustomerMetadataV1Controller

### Get singleton instance

The singleton instance of the ``` CustomerCustomerMetadataV1Controller ``` class can be accessed from the API Client.

```php
$customerCustomerMetadataV1 = $client->getCustomerCustomerMetadataV1();
```

### <a name="get_customer_customer_metadata_v1_get_attribute_metadata_get"></a>![Method: ](https://apidocs.io/img/method.png ".CustomerCustomerMetadataV1Controller.getCustomerCustomerMetadataV1GetAttributeMetadataGet") getCustomerCustomerMetadataV1GetAttributeMetadataGet

> *Tags:*  ``` Skips Authentication ``` 

> Retrieve attribute metadata.


```php
function getCustomerCustomerMetadataV1GetAttributeMetadataGet($attributeCode)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| attributeCode |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$attributeCode = 'attributeCode';

$result = $customerCustomerMetadataV1->getCustomerCustomerMetadataV1GetAttributeMetadataGet($attributeCode);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="get_customer_customer_metadata_v1_get_attributes_get"></a>![Method: ](https://apidocs.io/img/method.png ".CustomerCustomerMetadataV1Controller.getCustomerCustomerMetadataV1GetAttributesGet") getCustomerCustomerMetadataV1GetAttributesGet

> *Tags:*  ``` Skips Authentication ``` 

> Retrieve all attributes filtered by form code


```php
function getCustomerCustomerMetadataV1GetAttributesGet($formCode)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| formCode |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$formCode = 'formCode';

$result = $customerCustomerMetadataV1->getCustomerCustomerMetadataV1GetAttributesGet($formCode);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="get_customer_customer_metadata_v1_get_all_attributes_metadata_get"></a>![Method: ](https://apidocs.io/img/method.png ".CustomerCustomerMetadataV1Controller.getCustomerCustomerMetadataV1GetAllAttributesMetadataGet") getCustomerCustomerMetadataV1GetAllAttributesMetadataGet

> *Tags:*  ``` Skips Authentication ``` 

> Get all attribute metadata.


```php
function getCustomerCustomerMetadataV1GetAllAttributesMetadataGet()
```

#### Example Usage

```php

$result = $customerCustomerMetadataV1->getCustomerCustomerMetadataV1GetAllAttributesMetadataGet();

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="get_customer_customer_metadata_v1_get_custom_attributes_metadata_get"></a>![Method: ](https://apidocs.io/img/method.png ".CustomerCustomerMetadataV1Controller.getCustomerCustomerMetadataV1GetCustomAttributesMetadataGet") getCustomerCustomerMetadataV1GetCustomAttributesMetadataGet

> *Tags:*  ``` Skips Authentication ``` 

> Get custom attributes metadata for the given data interface.


```php
function getCustomerCustomerMetadataV1GetCustomAttributesMetadataGet($dataInterfaceName = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dataInterfaceName |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$dataInterfaceName = 'dataInterfaceName';

$result = $customerCustomerMetadataV1->getCustomerCustomerMetadataV1GetCustomAttributesMetadataGet($dataInterfaceName);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="customer_address_metadata_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CustomerAddressMetadataV1Controller") CustomerAddressMetadataV1Controller

### Get singleton instance

The singleton instance of the ``` CustomerAddressMetadataV1Controller ``` class can be accessed from the API Client.

```php
$customerAddressMetadataV1 = $client->getCustomerAddressMetadataV1();
```

### <a name="get_customer_address_metadata_v1_get_attribute_metadata_get"></a>![Method: ](https://apidocs.io/img/method.png ".CustomerAddressMetadataV1Controller.getCustomerAddressMetadataV1GetAttributeMetadataGet") getCustomerAddressMetadataV1GetAttributeMetadataGet

> *Tags:*  ``` Skips Authentication ``` 

> Retrieve attribute metadata.


```php
function getCustomerAddressMetadataV1GetAttributeMetadataGet($attributeCode)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| attributeCode |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$attributeCode = 'attributeCode';

$result = $customerAddressMetadataV1->getCustomerAddressMetadataV1GetAttributeMetadataGet($attributeCode);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="get_customer_address_metadata_v1_get_attributes_get"></a>![Method: ](https://apidocs.io/img/method.png ".CustomerAddressMetadataV1Controller.getCustomerAddressMetadataV1GetAttributesGet") getCustomerAddressMetadataV1GetAttributesGet

> *Tags:*  ``` Skips Authentication ``` 

> Retrieve all attributes filtered by form code


```php
function getCustomerAddressMetadataV1GetAttributesGet($formCode)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| formCode |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$formCode = 'formCode';

$result = $customerAddressMetadataV1->getCustomerAddressMetadataV1GetAttributesGet($formCode);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="get_customer_address_metadata_v1_get_all_attributes_metadata_get"></a>![Method: ](https://apidocs.io/img/method.png ".CustomerAddressMetadataV1Controller.getCustomerAddressMetadataV1GetAllAttributesMetadataGet") getCustomerAddressMetadataV1GetAllAttributesMetadataGet

> *Tags:*  ``` Skips Authentication ``` 

> Get all attribute metadata.


```php
function getCustomerAddressMetadataV1GetAllAttributesMetadataGet()
```

#### Example Usage

```php

$result = $customerAddressMetadataV1->getCustomerAddressMetadataV1GetAllAttributesMetadataGet();

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="get_customer_address_metadata_v1_get_custom_attributes_metadata_get"></a>![Method: ](https://apidocs.io/img/method.png ".CustomerAddressMetadataV1Controller.getCustomerAddressMetadataV1GetCustomAttributesMetadataGet") getCustomerAddressMetadataV1GetCustomAttributesMetadataGet

> *Tags:*  ``` Skips Authentication ``` 

> Get custom attributes metadata for the given data interface.


```php
function getCustomerAddressMetadataV1GetCustomAttributesMetadataGet($dataInterfaceName = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| dataInterfaceName |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$dataInterfaceName = 'dataInterfaceName';

$result = $customerAddressMetadataV1->getCustomerAddressMetadataV1GetCustomAttributesMetadataGet($dataInterfaceName);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="customer_customer_repository_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CustomerCustomerRepositoryV1Controller") CustomerCustomerRepositoryV1Controller

### Get singleton instance

The singleton instance of the ``` CustomerCustomerRepositoryV1Controller ``` class can be accessed from the API Client.

```php
$customerCustomerRepositoryV1 = $client->getCustomerCustomerRepositoryV1();
```

### <a name="get_customer_customer_repository_v1_get_by_id_get"></a>![Method: ](https://apidocs.io/img/method.png ".CustomerCustomerRepositoryV1Controller.getCustomerCustomerRepositoryV1GetByIdGet") getCustomerCustomerRepositoryV1GetByIdGet

> *Tags:*  ``` Skips Authentication ``` 

> Get customer by Customer ID.


```php
function getCustomerCustomerRepositoryV1GetByIdGet($customerId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| customerId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$customerId = 249;

$result = $customerCustomerRepositoryV1->getCustomerCustomerRepositoryV1GetByIdGet($customerId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="update_customer_customer_repository_v1_save_put"></a>![Method: ](https://apidocs.io/img/method.png ".CustomerCustomerRepositoryV1Controller.updateCustomerCustomerRepositoryV1SavePut") updateCustomerCustomerRepositoryV1SavePut

> *Tags:*  ``` Skips Authentication ``` 

> Create or update a customer.


```php
function updateCustomerCustomerRepositoryV1SavePut(
        $customerId,
        $customerCustomerRepositoryV1SavePutBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| customerId |  ``` Required ```  | TODO: Add a parameter description |
| customerCustomerRepositoryV1SavePutBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$customerId = 'customerId';
$customerCustomerRepositoryV1SavePutBody = new CustomerCustomerRepositoryV1SavePutBody();

$result = $customerCustomerRepositoryV1->updateCustomerCustomerRepositoryV1SavePut($customerId, $customerCustomerRepositoryV1SavePutBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="delete_customer_customer_repository_v1_delete_by_id_delete"></a>![Method: ](https://apidocs.io/img/method.png ".CustomerCustomerRepositoryV1Controller.deleteCustomerCustomerRepositoryV1DeleteByIdDelete") deleteCustomerCustomerRepositoryV1DeleteByIdDelete

> *Tags:*  ``` Skips Authentication ``` 

> Delete customer by Customer ID.


```php
function deleteCustomerCustomerRepositoryV1DeleteByIdDelete($customerId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| customerId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$customerId = 249;

$result = $customerCustomerRepositoryV1->deleteCustomerCustomerRepositoryV1DeleteByIdDelete($customerId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="get_customer_customer_repository_v1_get_by_id_get1"></a>![Method: ](https://apidocs.io/img/method.png ".CustomerCustomerRepositoryV1Controller.getCustomerCustomerRepositoryV1GetByIdGet1") getCustomerCustomerRepositoryV1GetByIdGet1

> *Tags:*  ``` Skips Authentication ``` 

> Get customer by Customer ID.


```php
function getCustomerCustomerRepositoryV1GetByIdGet1()
```

#### Example Usage

```php

$result = $customerCustomerRepositoryV1->getCustomerCustomerRepositoryV1GetByIdGet1();

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="update_customer_customer_repository_v1_save_put1"></a>![Method: ](https://apidocs.io/img/method.png ".CustomerCustomerRepositoryV1Controller.updateCustomerCustomerRepositoryV1SavePut1") updateCustomerCustomerRepositoryV1SavePut1

> *Tags:*  ``` Skips Authentication ``` 

> Create or update a customer.


```php
function updateCustomerCustomerRepositoryV1SavePut1($customerCustomerRepositoryV1SavePutBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| customerCustomerRepositoryV1SavePutBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$customerCustomerRepositoryV1SavePutBody = new CustomerCustomerRepositoryV1SavePutBody();

$result = $customerCustomerRepositoryV1->updateCustomerCustomerRepositoryV1SavePut1($customerCustomerRepositoryV1SavePutBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="get_customer_customer_repository_v1_get_list_get"></a>![Method: ](https://apidocs.io/img/method.png ".CustomerCustomerRepositoryV1Controller.getCustomerCustomerRepositoryV1GetListGet") getCustomerCustomerRepositoryV1GetListGet

> *Tags:*  ``` Skips Authentication ``` 

> Retrieve customers which match a specified criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#CustomerRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.


```php
function getCustomerCustomerRepositoryV1GetListGet(
        $searchCriteriaFilterGroupsFiltersField = null,
        $searchCriteriaFilterGroupsFiltersValue = null,
        $searchCriteriaFilterGroupsFiltersConditionType = null,
        $searchCriteriaSortOrdersField = null,
        $searchCriteriaSortOrdersDirection = null,
        $searchCriteriaPageSize = null,
        $searchCriteriaCurrentPage = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| searchCriteriaFilterGroupsFiltersField |  ``` Optional ```  | Field |
| searchCriteriaFilterGroupsFiltersValue |  ``` Optional ```  | Value |
| searchCriteriaFilterGroupsFiltersConditionType |  ``` Optional ```  | Condition type |
| searchCriteriaSortOrdersField |  ``` Optional ```  | Sorting field. |
| searchCriteriaSortOrdersDirection |  ``` Optional ```  | Sorting direction. |
| searchCriteriaPageSize |  ``` Optional ```  | Page size. |
| searchCriteriaCurrentPage |  ``` Optional ```  | Current page. |



#### Example Usage

```php
$searchCriteriaFilterGroupsFiltersField = 'searchCriteria[filterGroups][][filters][][field]';
$searchCriteriaFilterGroupsFiltersValue = 'searchCriteria[filterGroups][][filters][][value]';
$searchCriteriaFilterGroupsFiltersConditionType = 'searchCriteria[filterGroups][][filters][][conditionType]';
$searchCriteriaSortOrdersField = 'searchCriteria[sortOrders][][field]';
$searchCriteriaSortOrdersDirection = 'searchCriteria[sortOrders][][direction]';
$searchCriteriaPageSize = 249;
$searchCriteriaCurrentPage = 249;

$result = $customerCustomerRepositoryV1->getCustomerCustomerRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="customer_account_management_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CustomerAccountManagementV1Controller") CustomerAccountManagementV1Controller

### Get singleton instance

The singleton instance of the ``` CustomerAccountManagementV1Controller ``` class can be accessed from the API Client.

```php
$customerAccountManagementV1 = $client->getCustomerAccountManagementV1();
```

### <a name="create_customer_account_management_v1_create_account_post"></a>![Method: ](https://apidocs.io/img/method.png ".CustomerAccountManagementV1Controller.createCustomerAccountManagementV1CreateAccountPost") createCustomerAccountManagementV1CreateAccountPost

> *Tags:*  ``` Skips Authentication ``` 

> Create customer account. Perform necessary business operations like sending email.


```php
function createCustomerAccountManagementV1CreateAccountPost($customerAccountManagementV1CreateAccountPostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| customerAccountManagementV1CreateAccountPostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$customerAccountManagementV1CreateAccountPostBody = new CustomerAccountManagementV1CreateAccountPostBody();

$result = $customerAccountManagementV1->createCustomerAccountManagementV1CreateAccountPost($customerAccountManagementV1CreateAccountPostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="update_customer_account_management_v1_activate_by_id_put"></a>![Method: ](https://apidocs.io/img/method.png ".CustomerAccountManagementV1Controller.updateCustomerAccountManagementV1ActivateByIdPut") updateCustomerAccountManagementV1ActivateByIdPut

> *Tags:*  ``` Skips Authentication ``` 

> Activate a customer account using a key that was sent in a confirmation email.


```php
function updateCustomerAccountManagementV1ActivateByIdPut($customerAccountManagementV1ActivateByIdPutBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| customerAccountManagementV1ActivateByIdPutBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$customerAccountManagementV1ActivateByIdPutBody = new CustomerAccountManagementV1ActivateByIdPutBody();

$result = $customerAccountManagementV1->updateCustomerAccountManagementV1ActivateByIdPut($customerAccountManagementV1ActivateByIdPutBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="update_customer_account_management_v1_activate_put"></a>![Method: ](https://apidocs.io/img/method.png ".CustomerAccountManagementV1Controller.updateCustomerAccountManagementV1ActivatePut") updateCustomerAccountManagementV1ActivatePut

> *Tags:*  ``` Skips Authentication ``` 

> Activate a customer account using a key that was sent in a confirmation email.


```php
function updateCustomerAccountManagementV1ActivatePut(
        $email,
        $customerAccountManagementV1ActivatePutBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| email |  ``` Required ```  | TODO: Add a parameter description |
| customerAccountManagementV1ActivatePutBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$email = 'email';
$customerAccountManagementV1ActivatePutBody = new CustomerAccountManagementV1ActivateByIdPutBody();

$result = $customerAccountManagementV1->updateCustomerAccountManagementV1ActivatePut($email, $customerAccountManagementV1ActivatePutBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="update_customer_account_management_v1_change_password_by_id_put"></a>![Method: ](https://apidocs.io/img/method.png ".CustomerAccountManagementV1Controller.updateCustomerAccountManagementV1ChangePasswordByIdPut") updateCustomerAccountManagementV1ChangePasswordByIdPut

> *Tags:*  ``` Skips Authentication ``` 

> Change customer password.


```php
function updateCustomerAccountManagementV1ChangePasswordByIdPut($customerAccountManagementV1ChangePasswordByIdPutBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| customerAccountManagementV1ChangePasswordByIdPutBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$customerAccountManagementV1ChangePasswordByIdPutBody = new CustomerAccountManagementV1ChangePasswordByIdPutBody();

$result = $customerAccountManagementV1->updateCustomerAccountManagementV1ChangePasswordByIdPut($customerAccountManagementV1ChangePasswordByIdPutBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="get_customer_account_management_v1_validate_reset_password_link_token_get"></a>![Method: ](https://apidocs.io/img/method.png ".CustomerAccountManagementV1Controller.getCustomerAccountManagementV1ValidateResetPasswordLinkTokenGet") getCustomerAccountManagementV1ValidateResetPasswordLinkTokenGet

> *Tags:*  ``` Skips Authentication ``` 

> Check if password reset token is valid.


```php
function getCustomerAccountManagementV1ValidateResetPasswordLinkTokenGet(
        $customerId,
        $resetPasswordLinkToken)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| customerId |  ``` Required ```  | TODO: Add a parameter description |
| resetPasswordLinkToken |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$customerId = 249;
$resetPasswordLinkToken = 'resetPasswordLinkToken';

$result = $customerAccountManagementV1->getCustomerAccountManagementV1ValidateResetPasswordLinkTokenGet($customerId, $resetPasswordLinkToken);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="update_customer_account_management_v1_initiate_password_reset_put"></a>![Method: ](https://apidocs.io/img/method.png ".CustomerAccountManagementV1Controller.updateCustomerAccountManagementV1InitiatePasswordResetPut") updateCustomerAccountManagementV1InitiatePasswordResetPut

> *Tags:*  ``` Skips Authentication ``` 

> Send an email to the customer with a password reset link.


```php
function updateCustomerAccountManagementV1InitiatePasswordResetPut($customerAccountManagementV1InitiatePasswordResetPutBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| customerAccountManagementV1InitiatePasswordResetPutBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$customerAccountManagementV1InitiatePasswordResetPutBody = new CustomerAccountManagementV1InitiatePasswordResetPutBody();

$result = $customerAccountManagementV1->updateCustomerAccountManagementV1InitiatePasswordResetPut($customerAccountManagementV1InitiatePasswordResetPutBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="create_customer_account_management_v1_reset_password_post"></a>![Method: ](https://apidocs.io/img/method.png ".CustomerAccountManagementV1Controller.createCustomerAccountManagementV1ResetPasswordPost") createCustomerAccountManagementV1ResetPasswordPost

> *Tags:*  ``` Skips Authentication ``` 

> Reset customer password.


```php
function createCustomerAccountManagementV1ResetPasswordPost($customerAccountManagementV1ResetPasswordPostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| customerAccountManagementV1ResetPasswordPostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$customerAccountManagementV1ResetPasswordPostBody = new CustomerAccountManagementV1ResetPasswordPostBody();

$result = $customerAccountManagementV1->createCustomerAccountManagementV1ResetPasswordPost($customerAccountManagementV1ResetPasswordPostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="get_customer_account_management_v1_get_confirmation_status_get"></a>![Method: ](https://apidocs.io/img/method.png ".CustomerAccountManagementV1Controller.getCustomerAccountManagementV1GetConfirmationStatusGet") getCustomerAccountManagementV1GetConfirmationStatusGet

> *Tags:*  ``` Skips Authentication ``` 

> Gets the account confirmation status.


```php
function getCustomerAccountManagementV1GetConfirmationStatusGet($customerId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| customerId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$customerId = 249;

$result = $customerAccountManagementV1->getCustomerAccountManagementV1GetConfirmationStatusGet($customerId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="create_customer_account_management_v1_resend_confirmation_post"></a>![Method: ](https://apidocs.io/img/method.png ".CustomerAccountManagementV1Controller.createCustomerAccountManagementV1ResendConfirmationPost") createCustomerAccountManagementV1ResendConfirmationPost

> *Tags:*  ``` Skips Authentication ``` 

> Resend confirmation email.


```php
function createCustomerAccountManagementV1ResendConfirmationPost($customerAccountManagementV1ResendConfirmationPostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| customerAccountManagementV1ResendConfirmationPostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$customerAccountManagementV1ResendConfirmationPostBody = new CustomerAccountManagementV1ResendConfirmationPostBody();

$result = $customerAccountManagementV1->createCustomerAccountManagementV1ResendConfirmationPost($customerAccountManagementV1ResendConfirmationPostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="update_customer_account_management_v1_validate_put"></a>![Method: ](https://apidocs.io/img/method.png ".CustomerAccountManagementV1Controller.updateCustomerAccountManagementV1ValidatePut") updateCustomerAccountManagementV1ValidatePut

> *Tags:*  ``` Skips Authentication ``` 

> Validate customer data.


```php
function updateCustomerAccountManagementV1ValidatePut($customerAccountManagementV1ValidatePutBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| customerAccountManagementV1ValidatePutBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$customerAccountManagementV1ValidatePutBody = new CustomerAccountManagementV1ValidatePutBody();

$result = $customerAccountManagementV1->updateCustomerAccountManagementV1ValidatePut($customerAccountManagementV1ValidatePutBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="get_customer_account_management_v1_is_readonly_get"></a>![Method: ](https://apidocs.io/img/method.png ".CustomerAccountManagementV1Controller.getCustomerAccountManagementV1IsReadonlyGet") getCustomerAccountManagementV1IsReadonlyGet

> *Tags:*  ``` Skips Authentication ``` 

> Check if customer can be deleted.


```php
function getCustomerAccountManagementV1IsReadonlyGet($customerId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| customerId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$customerId = 249;

$result = $customerAccountManagementV1->getCustomerAccountManagementV1IsReadonlyGet($customerId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="create_customer_account_management_v1_is_email_available_post"></a>![Method: ](https://apidocs.io/img/method.png ".CustomerAccountManagementV1Controller.createCustomerAccountManagementV1IsEmailAvailablePost") createCustomerAccountManagementV1IsEmailAvailablePost

> *Tags:*  ``` Skips Authentication ``` 

> Check if given email is associated with a customer account in given website.


```php
function createCustomerAccountManagementV1IsEmailAvailablePost($customerAccountManagementV1IsEmailAvailablePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| customerAccountManagementV1IsEmailAvailablePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$customerAccountManagementV1IsEmailAvailablePostBody = new CustomerAccountManagementV1IsEmailAvailablePostBody();

$result = $customerAccountManagementV1->createCustomerAccountManagementV1IsEmailAvailablePost($customerAccountManagementV1IsEmailAvailablePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="get_customer_account_management_v1_get_default_billing_address_get"></a>![Method: ](https://apidocs.io/img/method.png ".CustomerAccountManagementV1Controller.getCustomerAccountManagementV1GetDefaultBillingAddressGet") getCustomerAccountManagementV1GetDefaultBillingAddressGet

> *Tags:*  ``` Skips Authentication ``` 

> Retrieve default billing address for the given customerId.


```php
function getCustomerAccountManagementV1GetDefaultBillingAddressGet()
```

#### Example Usage

```php

$result = $customerAccountManagementV1->getCustomerAccountManagementV1GetDefaultBillingAddressGet();

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="get_customer_account_management_v1_get_default_billing_address_get1"></a>![Method: ](https://apidocs.io/img/method.png ".CustomerAccountManagementV1Controller.getCustomerAccountManagementV1GetDefaultBillingAddressGet1") getCustomerAccountManagementV1GetDefaultBillingAddressGet1

> *Tags:*  ``` Skips Authentication ``` 

> Retrieve default billing address for the given customerId.


```php
function getCustomerAccountManagementV1GetDefaultBillingAddressGet1($customerId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| customerId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$customerId = 249;

$result = $customerAccountManagementV1->getCustomerAccountManagementV1GetDefaultBillingAddressGet1($customerId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="get_customer_account_management_v1_get_default_shipping_address_get"></a>![Method: ](https://apidocs.io/img/method.png ".CustomerAccountManagementV1Controller.getCustomerAccountManagementV1GetDefaultShippingAddressGet") getCustomerAccountManagementV1GetDefaultShippingAddressGet

> *Tags:*  ``` Skips Authentication ``` 

> Retrieve default shipping address for the given customerId.


```php
function getCustomerAccountManagementV1GetDefaultShippingAddressGet()
```

#### Example Usage

```php

$result = $customerAccountManagementV1->getCustomerAccountManagementV1GetDefaultShippingAddressGet();

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="get_customer_account_management_v1_get_default_shipping_address_get1"></a>![Method: ](https://apidocs.io/img/method.png ".CustomerAccountManagementV1Controller.getCustomerAccountManagementV1GetDefaultShippingAddressGet1") getCustomerAccountManagementV1GetDefaultShippingAddressGet1

> *Tags:*  ``` Skips Authentication ``` 

> Retrieve default shipping address for the given customerId.


```php
function getCustomerAccountManagementV1GetDefaultShippingAddressGet1($customerId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| customerId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$customerId = 249;

$result = $customerAccountManagementV1->getCustomerAccountManagementV1GetDefaultShippingAddressGet1($customerId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="customer_address_repository_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CustomerAddressRepositoryV1Controller") CustomerAddressRepositoryV1Controller

### Get singleton instance

The singleton instance of the ``` CustomerAddressRepositoryV1Controller ``` class can be accessed from the API Client.

```php
$customerAddressRepositoryV1 = $client->getCustomerAddressRepositoryV1();
```

### <a name="get_customer_address_repository_v1_get_by_id_get"></a>![Method: ](https://apidocs.io/img/method.png ".CustomerAddressRepositoryV1Controller.getCustomerAddressRepositoryV1GetByIdGet") getCustomerAddressRepositoryV1GetByIdGet

> *Tags:*  ``` Skips Authentication ``` 

> Retrieve customer address.


```php
function getCustomerAddressRepositoryV1GetByIdGet($addressId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| addressId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$addressId = 36;

$result = $customerAddressRepositoryV1->getCustomerAddressRepositoryV1GetByIdGet($addressId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="delete_customer_address_repository_v1_delete_by_id_delete"></a>![Method: ](https://apidocs.io/img/method.png ".CustomerAddressRepositoryV1Controller.deleteCustomerAddressRepositoryV1DeleteByIdDelete") deleteCustomerAddressRepositoryV1DeleteByIdDelete

> *Tags:*  ``` Skips Authentication ``` 

> Delete customer address by ID.


```php
function deleteCustomerAddressRepositoryV1DeleteByIdDelete($addressId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| addressId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$addressId = 36;

$result = $customerAddressRepositoryV1->deleteCustomerAddressRepositoryV1DeleteByIdDelete($addressId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="cms_page_repository_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CmsPageRepositoryV1Controller") CmsPageRepositoryV1Controller

### Get singleton instance

The singleton instance of the ``` CmsPageRepositoryV1Controller ``` class can be accessed from the API Client.

```php
$cmsPageRepositoryV1 = $client->getCmsPageRepositoryV1();
```

### <a name="get_cms_page_repository_v1_get_by_id_get"></a>![Method: ](https://apidocs.io/img/method.png ".CmsPageRepositoryV1Controller.getCmsPageRepositoryV1GetByIdGet") getCmsPageRepositoryV1GetByIdGet

> *Tags:*  ``` Skips Authentication ``` 

> Retrieve page.


```php
function getCmsPageRepositoryV1GetByIdGet($pageId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| pageId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$pageId = 36;

$result = $cmsPageRepositoryV1->getCmsPageRepositoryV1GetByIdGet($pageId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="delete_cms_page_repository_v1_delete_by_id_delete"></a>![Method: ](https://apidocs.io/img/method.png ".CmsPageRepositoryV1Controller.deleteCmsPageRepositoryV1DeleteByIdDelete") deleteCmsPageRepositoryV1DeleteByIdDelete

> *Tags:*  ``` Skips Authentication ``` 

> Delete page by ID.


```php
function deleteCmsPageRepositoryV1DeleteByIdDelete($pageId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| pageId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$pageId = 36;

$result = $cmsPageRepositoryV1->deleteCmsPageRepositoryV1DeleteByIdDelete($pageId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="get_cms_page_repository_v1_get_list_get"></a>![Method: ](https://apidocs.io/img/method.png ".CmsPageRepositoryV1Controller.getCmsPageRepositoryV1GetListGet") getCmsPageRepositoryV1GetListGet

> *Tags:*  ``` Skips Authentication ``` 

> Retrieve pages matching the specified criteria.


```php
function getCmsPageRepositoryV1GetListGet(
        $searchCriteriaFilterGroupsFiltersField = null,
        $searchCriteriaFilterGroupsFiltersValue = null,
        $searchCriteriaFilterGroupsFiltersConditionType = null,
        $searchCriteriaSortOrdersField = null,
        $searchCriteriaSortOrdersDirection = null,
        $searchCriteriaPageSize = null,
        $searchCriteriaCurrentPage = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| searchCriteriaFilterGroupsFiltersField |  ``` Optional ```  | Field |
| searchCriteriaFilterGroupsFiltersValue |  ``` Optional ```  | Value |
| searchCriteriaFilterGroupsFiltersConditionType |  ``` Optional ```  | Condition type |
| searchCriteriaSortOrdersField |  ``` Optional ```  | Sorting field. |
| searchCriteriaSortOrdersDirection |  ``` Optional ```  | Sorting direction. |
| searchCriteriaPageSize |  ``` Optional ```  | Page size. |
| searchCriteriaCurrentPage |  ``` Optional ```  | Current page. |



#### Example Usage

```php
$searchCriteriaFilterGroupsFiltersField = 'searchCriteria[filterGroups][][filters][][field]';
$searchCriteriaFilterGroupsFiltersValue = 'searchCriteria[filterGroups][][filters][][value]';
$searchCriteriaFilterGroupsFiltersConditionType = 'searchCriteria[filterGroups][][filters][][conditionType]';
$searchCriteriaSortOrdersField = 'searchCriteria[sortOrders][][field]';
$searchCriteriaSortOrdersDirection = 'searchCriteria[sortOrders][][direction]';
$searchCriteriaPageSize = 36;
$searchCriteriaCurrentPage = 36;

$result = $cmsPageRepositoryV1->getCmsPageRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="create_cms_page_repository_v1_save_post"></a>![Method: ](https://apidocs.io/img/method.png ".CmsPageRepositoryV1Controller.createCmsPageRepositoryV1SavePost") createCmsPageRepositoryV1SavePost

> *Tags:*  ``` Skips Authentication ``` 

> Save page.


```php
function createCmsPageRepositoryV1SavePost($cmsPageRepositoryV1SavePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cmsPageRepositoryV1SavePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$cmsPageRepositoryV1SavePostBody = new CmsPageRepositoryV1SavePostBody();

$result = $cmsPageRepositoryV1->createCmsPageRepositoryV1SavePost($cmsPageRepositoryV1SavePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="update_cms_page_repository_v1_save_put"></a>![Method: ](https://apidocs.io/img/method.png ".CmsPageRepositoryV1Controller.updateCmsPageRepositoryV1SavePut") updateCmsPageRepositoryV1SavePut

> *Tags:*  ``` Skips Authentication ``` 

> Save page.


```php
function updateCmsPageRepositoryV1SavePut(
        $id,
        $cmsPageRepositoryV1SavePutBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | TODO: Add a parameter description |
| cmsPageRepositoryV1SavePutBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = 'id';
$cmsPageRepositoryV1SavePutBody = new CmsPageRepositoryV1SavePostBody();

$result = $cmsPageRepositoryV1->updateCmsPageRepositoryV1SavePut($id, $cmsPageRepositoryV1SavePutBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="cms_block_repository_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CmsBlockRepositoryV1Controller") CmsBlockRepositoryV1Controller

### Get singleton instance

The singleton instance of the ``` CmsBlockRepositoryV1Controller ``` class can be accessed from the API Client.

```php
$cmsBlockRepositoryV1 = $client->getCmsBlockRepositoryV1();
```

### <a name="get_cms_block_repository_v1_get_by_id_get"></a>![Method: ](https://apidocs.io/img/method.png ".CmsBlockRepositoryV1Controller.getCmsBlockRepositoryV1GetByIdGet") getCmsBlockRepositoryV1GetByIdGet

> *Tags:*  ``` Skips Authentication ``` 

> Retrieve block.


```php
function getCmsBlockRepositoryV1GetByIdGet($blockId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| blockId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$blockId = 36;

$result = $cmsBlockRepositoryV1->getCmsBlockRepositoryV1GetByIdGet($blockId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="delete_cms_block_repository_v1_delete_by_id_delete"></a>![Method: ](https://apidocs.io/img/method.png ".CmsBlockRepositoryV1Controller.deleteCmsBlockRepositoryV1DeleteByIdDelete") deleteCmsBlockRepositoryV1DeleteByIdDelete

> *Tags:*  ``` Skips Authentication ``` 

> Delete block by ID.


```php
function deleteCmsBlockRepositoryV1DeleteByIdDelete($blockId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| blockId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$blockId = 36;

$result = $cmsBlockRepositoryV1->deleteCmsBlockRepositoryV1DeleteByIdDelete($blockId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="get_cms_block_repository_v1_get_list_get"></a>![Method: ](https://apidocs.io/img/method.png ".CmsBlockRepositoryV1Controller.getCmsBlockRepositoryV1GetListGet") getCmsBlockRepositoryV1GetListGet

> *Tags:*  ``` Skips Authentication ``` 

> Retrieve blocks matching the specified criteria.


```php
function getCmsBlockRepositoryV1GetListGet(
        $searchCriteriaFilterGroupsFiltersField = null,
        $searchCriteriaFilterGroupsFiltersValue = null,
        $searchCriteriaFilterGroupsFiltersConditionType = null,
        $searchCriteriaSortOrdersField = null,
        $searchCriteriaSortOrdersDirection = null,
        $searchCriteriaPageSize = null,
        $searchCriteriaCurrentPage = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| searchCriteriaFilterGroupsFiltersField |  ``` Optional ```  | Field |
| searchCriteriaFilterGroupsFiltersValue |  ``` Optional ```  | Value |
| searchCriteriaFilterGroupsFiltersConditionType |  ``` Optional ```  | Condition type |
| searchCriteriaSortOrdersField |  ``` Optional ```  | Sorting field. |
| searchCriteriaSortOrdersDirection |  ``` Optional ```  | Sorting direction. |
| searchCriteriaPageSize |  ``` Optional ```  | Page size. |
| searchCriteriaCurrentPage |  ``` Optional ```  | Current page. |



#### Example Usage

```php
$searchCriteriaFilterGroupsFiltersField = 'searchCriteria[filterGroups][][filters][][field]';
$searchCriteriaFilterGroupsFiltersValue = 'searchCriteria[filterGroups][][filters][][value]';
$searchCriteriaFilterGroupsFiltersConditionType = 'searchCriteria[filterGroups][][filters][][conditionType]';
$searchCriteriaSortOrdersField = 'searchCriteria[sortOrders][][field]';
$searchCriteriaSortOrdersDirection = 'searchCriteria[sortOrders][][direction]';
$searchCriteriaPageSize = 36;
$searchCriteriaCurrentPage = 36;

$result = $cmsBlockRepositoryV1->getCmsBlockRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="create_cms_block_repository_v1_save_post"></a>![Method: ](https://apidocs.io/img/method.png ".CmsBlockRepositoryV1Controller.createCmsBlockRepositoryV1SavePost") createCmsBlockRepositoryV1SavePost

> *Tags:*  ``` Skips Authentication ``` 

> Save block.


```php
function createCmsBlockRepositoryV1SavePost($cmsBlockRepositoryV1SavePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cmsBlockRepositoryV1SavePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$cmsBlockRepositoryV1SavePostBody = new CmsBlockRepositoryV1SavePostBody();

$result = $cmsBlockRepositoryV1->createCmsBlockRepositoryV1SavePost($cmsBlockRepositoryV1SavePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="update_cms_block_repository_v1_save_put"></a>![Method: ](https://apidocs.io/img/method.png ".CmsBlockRepositoryV1Controller.updateCmsBlockRepositoryV1SavePut") updateCmsBlockRepositoryV1SavePut

> *Tags:*  ``` Skips Authentication ``` 

> Save block.


```php
function updateCmsBlockRepositoryV1SavePut(
        $id,
        $cmsBlockRepositoryV1SavePutBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | TODO: Add a parameter description |
| cmsBlockRepositoryV1SavePutBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = 'id';
$cmsBlockRepositoryV1SavePutBody = new CmsBlockRepositoryV1SavePostBody();

$result = $cmsBlockRepositoryV1->updateCmsBlockRepositoryV1SavePut($id, $cmsBlockRepositoryV1SavePutBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="catalog_product_repository_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CatalogProductRepositoryV1Controller") CatalogProductRepositoryV1Controller

### Get singleton instance

The singleton instance of the ``` CatalogProductRepositoryV1Controller ``` class can be accessed from the API Client.

```php
$catalogProductRepositoryV1 = $client->getCatalogProductRepositoryV1();
```

### <a name="get_catalog_product_repository_v1_get_list_get"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogProductRepositoryV1Controller.getCatalogProductRepositoryV1GetListGet") getCatalogProductRepositoryV1GetListGet

> *Tags:*  ``` Skips Authentication ``` 

> Get product list


```php
function getCatalogProductRepositoryV1GetListGet(
        $searchCriteriaFilterGroupsFiltersField = null,
        $searchCriteriaFilterGroupsFiltersValue = null,
        $searchCriteriaFilterGroupsFiltersConditionType = null,
        $searchCriteriaSortOrdersField = null,
        $searchCriteriaSortOrdersDirection = null,
        $searchCriteriaPageSize = null,
        $searchCriteriaCurrentPage = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| searchCriteriaFilterGroupsFiltersField |  ``` Optional ```  | Field |
| searchCriteriaFilterGroupsFiltersValue |  ``` Optional ```  | Value |
| searchCriteriaFilterGroupsFiltersConditionType |  ``` Optional ```  | Condition type |
| searchCriteriaSortOrdersField |  ``` Optional ```  | Sorting field. |
| searchCriteriaSortOrdersDirection |  ``` Optional ```  | Sorting direction. |
| searchCriteriaPageSize |  ``` Optional ```  | Page size. |
| searchCriteriaCurrentPage |  ``` Optional ```  | Current page. |



#### Example Usage

```php
$searchCriteriaFilterGroupsFiltersField = 'searchCriteria[filterGroups][][filters][][field]';
$searchCriteriaFilterGroupsFiltersValue = 'searchCriteria[filterGroups][][filters][][value]';
$searchCriteriaFilterGroupsFiltersConditionType = 'searchCriteria[filterGroups][][filters][][conditionType]';
$searchCriteriaSortOrdersField = 'searchCriteria[sortOrders][][field]';
$searchCriteriaSortOrdersDirection = 'searchCriteria[sortOrders][][direction]';
$searchCriteriaPageSize = 200;
$searchCriteriaCurrentPage = 200;

$result = $catalogProductRepositoryV1->getCatalogProductRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_catalog_product_repository_v1_save_post"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogProductRepositoryV1Controller.createCatalogProductRepositoryV1SavePost") createCatalogProductRepositoryV1SavePost

> *Tags:*  ``` Skips Authentication ``` 

> Create product


```php
function createCatalogProductRepositoryV1SavePost($catalogProductRepositoryV1SavePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| catalogProductRepositoryV1SavePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$catalogProductRepositoryV1SavePostBody = new CatalogProductRepositoryV1SavePostBody();

$result = $catalogProductRepositoryV1->createCatalogProductRepositoryV1SavePost($catalogProductRepositoryV1SavePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="get_catalog_product_repository_v1_get_get"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogProductRepositoryV1Controller.getCatalogProductRepositoryV1GetGet") getCatalogProductRepositoryV1GetGet

> *Tags:*  ``` Skips Authentication ``` 

> Get info about product by product SKU


```php
function getCatalogProductRepositoryV1GetGet(
        $sku,
        $editMode = null,
        $storeId = null,
        $forceReload = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| sku |  ``` Required ```  | TODO: Add a parameter description |
| editMode |  ``` Optional ```  | TODO: Add a parameter description |
| storeId |  ``` Optional ```  | TODO: Add a parameter description |
| forceReload |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$sku = 'sku';
$editMode = true;
$storeId = 200;
$forceReload = true;

$result = $catalogProductRepositoryV1->getCatalogProductRepositoryV1GetGet($sku, $editMode, $storeId, $forceReload);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="update_catalog_product_repository_v1_save_put"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogProductRepositoryV1Controller.updateCatalogProductRepositoryV1SavePut") updateCatalogProductRepositoryV1SavePut

> *Tags:*  ``` Skips Authentication ``` 

> Create product


```php
function updateCatalogProductRepositoryV1SavePut(
        $sku,
        $catalogProductRepositoryV1SavePutBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| sku |  ``` Required ```  | TODO: Add a parameter description |
| catalogProductRepositoryV1SavePutBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$sku = 'sku';
$catalogProductRepositoryV1SavePutBody = new CatalogProductRepositoryV1SavePostBody();

$result = $catalogProductRepositoryV1->updateCatalogProductRepositoryV1SavePut($sku, $catalogProductRepositoryV1SavePutBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="delete_catalog_product_repository_v1_delete_by_id_delete"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogProductRepositoryV1Controller.deleteCatalogProductRepositoryV1DeleteByIdDelete") deleteCatalogProductRepositoryV1DeleteByIdDelete

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function deleteCatalogProductRepositoryV1DeleteByIdDelete($sku)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| sku |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$sku = 'sku';

$result = $catalogProductRepositoryV1->deleteCatalogProductRepositoryV1DeleteByIdDelete($sku);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="catalog_product_attribute_types_list_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CatalogProductAttributeTypesListV1Controller") CatalogProductAttributeTypesListV1Controller

### Get singleton instance

The singleton instance of the ``` CatalogProductAttributeTypesListV1Controller ``` class can be accessed from the API Client.

```php
$catalogProductAttributeTypesListV1 = $client->getCatalogProductAttributeTypesListV1();
```

### <a name="get_catalog_product_attribute_types_list_v1_get_items_get"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogProductAttributeTypesListV1Controller.getCatalogProductAttributeTypesListV1GetItemsGet") getCatalogProductAttributeTypesListV1GetItemsGet

> *Tags:*  ``` Skips Authentication ``` 

> Retrieve list of product attribute types


```php
function getCatalogProductAttributeTypesListV1GetItemsGet()
```

#### Example Usage

```php

$result = $catalogProductAttributeTypesListV1->getCatalogProductAttributeTypesListV1GetItemsGet();

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="catalog_product_attribute_repository_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CatalogProductAttributeRepositoryV1Controller") CatalogProductAttributeRepositoryV1Controller

### Get singleton instance

The singleton instance of the ``` CatalogProductAttributeRepositoryV1Controller ``` class can be accessed from the API Client.

```php
$catalogProductAttributeRepositoryV1 = $client->getCatalogProductAttributeRepositoryV1();
```

### <a name="get_catalog_product_attribute_repository_v1_get_get"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogProductAttributeRepositoryV1Controller.getCatalogProductAttributeRepositoryV1GetGet") getCatalogProductAttributeRepositoryV1GetGet

> *Tags:*  ``` Skips Authentication ``` 

> Retrieve specific attribute


```php
function getCatalogProductAttributeRepositoryV1GetGet($attributeCode)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| attributeCode |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$attributeCode = 'attributeCode';

$result = $catalogProductAttributeRepositoryV1->getCatalogProductAttributeRepositoryV1GetGet($attributeCode);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="update_catalog_product_attribute_repository_v1_save_put"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogProductAttributeRepositoryV1Controller.updateCatalogProductAttributeRepositoryV1SavePut") updateCatalogProductAttributeRepositoryV1SavePut

> *Tags:*  ``` Skips Authentication ``` 

> Save attribute data


```php
function updateCatalogProductAttributeRepositoryV1SavePut(
        $attributeCode,
        $catalogProductAttributeRepositoryV1SavePutBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| attributeCode |  ``` Required ```  | TODO: Add a parameter description |
| catalogProductAttributeRepositoryV1SavePutBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$attributeCode = 'attributeCode';
$catalogProductAttributeRepositoryV1SavePutBody = new CatalogProductAttributeRepositoryV1SavePutBody();

$result = $catalogProductAttributeRepositoryV1->updateCatalogProductAttributeRepositoryV1SavePut($attributeCode, $catalogProductAttributeRepositoryV1SavePutBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="delete_catalog_product_attribute_repository_v1_delete_by_id_delete"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogProductAttributeRepositoryV1Controller.deleteCatalogProductAttributeRepositoryV1DeleteByIdDelete") deleteCatalogProductAttributeRepositoryV1DeleteByIdDelete

> *Tags:*  ``` Skips Authentication ``` 

> Delete Attribute by id


```php
function deleteCatalogProductAttributeRepositoryV1DeleteByIdDelete($attributeCode)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| attributeCode |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$attributeCode = 'attributeCode';

$result = $catalogProductAttributeRepositoryV1->deleteCatalogProductAttributeRepositoryV1DeleteByIdDelete($attributeCode);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="get_catalog_product_attribute_repository_v1_get_list_get"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogProductAttributeRepositoryV1Controller.getCatalogProductAttributeRepositoryV1GetListGet") getCatalogProductAttributeRepositoryV1GetListGet

> *Tags:*  ``` Skips Authentication ``` 

> Retrieve all attributes for entity type


```php
function getCatalogProductAttributeRepositoryV1GetListGet(
        $searchCriteriaFilterGroupsFiltersField = null,
        $searchCriteriaFilterGroupsFiltersValue = null,
        $searchCriteriaFilterGroupsFiltersConditionType = null,
        $searchCriteriaSortOrdersField = null,
        $searchCriteriaSortOrdersDirection = null,
        $searchCriteriaPageSize = null,
        $searchCriteriaCurrentPage = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| searchCriteriaFilterGroupsFiltersField |  ``` Optional ```  | Field |
| searchCriteriaFilterGroupsFiltersValue |  ``` Optional ```  | Value |
| searchCriteriaFilterGroupsFiltersConditionType |  ``` Optional ```  | Condition type |
| searchCriteriaSortOrdersField |  ``` Optional ```  | Sorting field. |
| searchCriteriaSortOrdersDirection |  ``` Optional ```  | Sorting direction. |
| searchCriteriaPageSize |  ``` Optional ```  | Page size. |
| searchCriteriaCurrentPage |  ``` Optional ```  | Current page. |



#### Example Usage

```php
$searchCriteriaFilterGroupsFiltersField = 'searchCriteria[filterGroups][][filters][][field]';
$searchCriteriaFilterGroupsFiltersValue = 'searchCriteria[filterGroups][][filters][][value]';
$searchCriteriaFilterGroupsFiltersConditionType = 'searchCriteria[filterGroups][][filters][][conditionType]';
$searchCriteriaSortOrdersField = 'searchCriteria[sortOrders][][field]';
$searchCriteriaSortOrdersDirection = 'searchCriteria[sortOrders][][direction]';
$searchCriteriaPageSize = 200;
$searchCriteriaCurrentPage = 200;

$result = $catalogProductAttributeRepositoryV1->getCatalogProductAttributeRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_catalog_product_attribute_repository_v1_save_post"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogProductAttributeRepositoryV1Controller.createCatalogProductAttributeRepositoryV1SavePost") createCatalogProductAttributeRepositoryV1SavePost

> *Tags:*  ``` Skips Authentication ``` 

> Save attribute data


```php
function createCatalogProductAttributeRepositoryV1SavePost($catalogProductAttributeRepositoryV1SavePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| catalogProductAttributeRepositoryV1SavePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$catalogProductAttributeRepositoryV1SavePostBody = new CatalogProductAttributeRepositoryV1SavePutBody();

$result = $catalogProductAttributeRepositoryV1->createCatalogProductAttributeRepositoryV1SavePost($catalogProductAttributeRepositoryV1SavePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="catalog_category_attribute_repository_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CatalogCategoryAttributeRepositoryV1Controller") CatalogCategoryAttributeRepositoryV1Controller

### Get singleton instance

The singleton instance of the ``` CatalogCategoryAttributeRepositoryV1Controller ``` class can be accessed from the API Client.

```php
$catalogCategoryAttributeRepositoryV1 = $client->getCatalogCategoryAttributeRepositoryV1();
```

### <a name="get_catalog_category_attribute_repository_v1_get_get"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogCategoryAttributeRepositoryV1Controller.getCatalogCategoryAttributeRepositoryV1GetGet") getCatalogCategoryAttributeRepositoryV1GetGet

> *Tags:*  ``` Skips Authentication ``` 

> Retrieve specific attribute


```php
function getCatalogCategoryAttributeRepositoryV1GetGet($attributeCode)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| attributeCode |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$attributeCode = 'attributeCode';

$result = $catalogCategoryAttributeRepositoryV1->getCatalogCategoryAttributeRepositoryV1GetGet($attributeCode);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="get_catalog_category_attribute_repository_v1_get_list_get"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogCategoryAttributeRepositoryV1Controller.getCatalogCategoryAttributeRepositoryV1GetListGet") getCatalogCategoryAttributeRepositoryV1GetListGet

> *Tags:*  ``` Skips Authentication ``` 

> Retrieve all attributes for entity type


```php
function getCatalogCategoryAttributeRepositoryV1GetListGet(
        $searchCriteriaFilterGroupsFiltersField = null,
        $searchCriteriaFilterGroupsFiltersValue = null,
        $searchCriteriaFilterGroupsFiltersConditionType = null,
        $searchCriteriaSortOrdersField = null,
        $searchCriteriaSortOrdersDirection = null,
        $searchCriteriaPageSize = null,
        $searchCriteriaCurrentPage = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| searchCriteriaFilterGroupsFiltersField |  ``` Optional ```  | Field |
| searchCriteriaFilterGroupsFiltersValue |  ``` Optional ```  | Value |
| searchCriteriaFilterGroupsFiltersConditionType |  ``` Optional ```  | Condition type |
| searchCriteriaSortOrdersField |  ``` Optional ```  | Sorting field. |
| searchCriteriaSortOrdersDirection |  ``` Optional ```  | Sorting direction. |
| searchCriteriaPageSize |  ``` Optional ```  | Page size. |
| searchCriteriaCurrentPage |  ``` Optional ```  | Current page. |



#### Example Usage

```php
$searchCriteriaFilterGroupsFiltersField = 'searchCriteria[filterGroups][][filters][][field]';
$searchCriteriaFilterGroupsFiltersValue = 'searchCriteria[filterGroups][][filters][][value]';
$searchCriteriaFilterGroupsFiltersConditionType = 'searchCriteria[filterGroups][][filters][][conditionType]';
$searchCriteriaSortOrdersField = 'searchCriteria[sortOrders][][field]';
$searchCriteriaSortOrdersDirection = 'searchCriteria[sortOrders][][direction]';
$searchCriteriaPageSize = 200;
$searchCriteriaCurrentPage = 200;

$result = $catalogCategoryAttributeRepositoryV1->getCatalogCategoryAttributeRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="catalog_category_attribute_option_management_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CatalogCategoryAttributeOptionManagementV1Controller") CatalogCategoryAttributeOptionManagementV1Controller

### Get singleton instance

The singleton instance of the ``` CatalogCategoryAttributeOptionManagementV1Controller ``` class can be accessed from the API Client.

```php
$catalogCategoryAttributeOptionManagementV1 = $client->getCatalogCategoryAttributeOptionManagementV1();
```

### <a name="get_catalog_category_attribute_option_management_v1_get_items_get"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogCategoryAttributeOptionManagementV1Controller.getCatalogCategoryAttributeOptionManagementV1GetItemsGet") getCatalogCategoryAttributeOptionManagementV1GetItemsGet

> *Tags:*  ``` Skips Authentication ``` 

> Retrieve list of attribute options


```php
function getCatalogCategoryAttributeOptionManagementV1GetItemsGet($attributeCode)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| attributeCode |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$attributeCode = 'attributeCode';

$result = $catalogCategoryAttributeOptionManagementV1->getCatalogCategoryAttributeOptionManagementV1GetItemsGet($attributeCode);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="catalog_product_type_list_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CatalogProductTypeListV1Controller") CatalogProductTypeListV1Controller

### Get singleton instance

The singleton instance of the ``` CatalogProductTypeListV1Controller ``` class can be accessed from the API Client.

```php
$catalogProductTypeListV1 = $client->getCatalogProductTypeListV1();
```

### <a name="get_catalog_product_type_list_v1_get_product_types_get"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogProductTypeListV1Controller.getCatalogProductTypeListV1GetProductTypesGet") getCatalogProductTypeListV1GetProductTypesGet

> *Tags:*  ``` Skips Authentication ``` 

> Retrieve available product types


```php
function getCatalogProductTypeListV1GetProductTypesGet()
```

#### Example Usage

```php

$result = $catalogProductTypeListV1->getCatalogProductTypeListV1GetProductTypesGet();

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="catalog_attribute_set_repository_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CatalogAttributeSetRepositoryV1Controller") CatalogAttributeSetRepositoryV1Controller

### Get singleton instance

The singleton instance of the ``` CatalogAttributeSetRepositoryV1Controller ``` class can be accessed from the API Client.

```php
$catalogAttributeSetRepositoryV1 = $client->getCatalogAttributeSetRepositoryV1();
```

### <a name="get_catalog_attribute_set_repository_v1_get_list_get"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogAttributeSetRepositoryV1Controller.getCatalogAttributeSetRepositoryV1GetListGet") getCatalogAttributeSetRepositoryV1GetListGet

> *Tags:*  ``` Skips Authentication ``` 

> Retrieve list of Attribute Sets


```php
function getCatalogAttributeSetRepositoryV1GetListGet(
        $searchCriteriaFilterGroupsFiltersField = null,
        $searchCriteriaFilterGroupsFiltersValue = null,
        $searchCriteriaFilterGroupsFiltersConditionType = null,
        $searchCriteriaSortOrdersField = null,
        $searchCriteriaSortOrdersDirection = null,
        $searchCriteriaPageSize = null,
        $searchCriteriaCurrentPage = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| searchCriteriaFilterGroupsFiltersField |  ``` Optional ```  | Field |
| searchCriteriaFilterGroupsFiltersValue |  ``` Optional ```  | Value |
| searchCriteriaFilterGroupsFiltersConditionType |  ``` Optional ```  | Condition type |
| searchCriteriaSortOrdersField |  ``` Optional ```  | Sorting field. |
| searchCriteriaSortOrdersDirection |  ``` Optional ```  | Sorting direction. |
| searchCriteriaPageSize |  ``` Optional ```  | Page size. |
| searchCriteriaCurrentPage |  ``` Optional ```  | Current page. |



#### Example Usage

```php
$searchCriteriaFilterGroupsFiltersField = 'searchCriteria[filterGroups][][filters][][field]';
$searchCriteriaFilterGroupsFiltersValue = 'searchCriteria[filterGroups][][filters][][value]';
$searchCriteriaFilterGroupsFiltersConditionType = 'searchCriteria[filterGroups][][filters][][conditionType]';
$searchCriteriaSortOrdersField = 'searchCriteria[sortOrders][][field]';
$searchCriteriaSortOrdersDirection = 'searchCriteria[sortOrders][][direction]';
$searchCriteriaPageSize = 200;
$searchCriteriaCurrentPage = 200;

$result = $catalogAttributeSetRepositoryV1->getCatalogAttributeSetRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="get_catalog_attribute_set_repository_v1_get_get"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogAttributeSetRepositoryV1Controller.getCatalogAttributeSetRepositoryV1GetGet") getCatalogAttributeSetRepositoryV1GetGet

> *Tags:*  ``` Skips Authentication ``` 

> Retrieve attribute set information based on given ID


```php
function getCatalogAttributeSetRepositoryV1GetGet($attributeSetId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| attributeSetId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$attributeSetId = 200;

$result = $catalogAttributeSetRepositoryV1->getCatalogAttributeSetRepositoryV1GetGet($attributeSetId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="update_catalog_attribute_set_repository_v1_save_put"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogAttributeSetRepositoryV1Controller.updateCatalogAttributeSetRepositoryV1SavePut") updateCatalogAttributeSetRepositoryV1SavePut

> *Tags:*  ``` Skips Authentication ``` 

> Save attribute set data


```php
function updateCatalogAttributeSetRepositoryV1SavePut(
        $attributeSetId,
        $catalogAttributeSetRepositoryV1SavePutBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| attributeSetId |  ``` Required ```  | TODO: Add a parameter description |
| catalogAttributeSetRepositoryV1SavePutBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$attributeSetId = 'attributeSetId';
$catalogAttributeSetRepositoryV1SavePutBody = new CatalogAttributeSetRepositoryV1SavePutBody();

$result = $catalogAttributeSetRepositoryV1->updateCatalogAttributeSetRepositoryV1SavePut($attributeSetId, $catalogAttributeSetRepositoryV1SavePutBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="delete_catalog_attribute_set_repository_v1_delete_by_id_delete"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogAttributeSetRepositoryV1Controller.deleteCatalogAttributeSetRepositoryV1DeleteByIdDelete") deleteCatalogAttributeSetRepositoryV1DeleteByIdDelete

> *Tags:*  ``` Skips Authentication ``` 

> Remove attribute set by given ID


```php
function deleteCatalogAttributeSetRepositoryV1DeleteByIdDelete($attributeSetId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| attributeSetId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$attributeSetId = 200;

$result = $catalogAttributeSetRepositoryV1->deleteCatalogAttributeSetRepositoryV1DeleteByIdDelete($attributeSetId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="catalog_attribute_set_management_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CatalogAttributeSetManagementV1Controller") CatalogAttributeSetManagementV1Controller

### Get singleton instance

The singleton instance of the ``` CatalogAttributeSetManagementV1Controller ``` class can be accessed from the API Client.

```php
$catalogAttributeSetManagementV1 = $client->getCatalogAttributeSetManagementV1();
```

### <a name="create_catalog_attribute_set_management_v1_create_post"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogAttributeSetManagementV1Controller.createCatalogAttributeSetManagementV1CreatePost") createCatalogAttributeSetManagementV1CreatePost

> *Tags:*  ``` Skips Authentication ``` 

> Create attribute set from data


```php
function createCatalogAttributeSetManagementV1CreatePost($catalogAttributeSetManagementV1CreatePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| catalogAttributeSetManagementV1CreatePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$catalogAttributeSetManagementV1CreatePostBody = new CatalogAttributeSetManagementV1CreatePostBody();

$result = $catalogAttributeSetManagementV1->createCatalogAttributeSetManagementV1CreatePost($catalogAttributeSetManagementV1CreatePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="catalog_product_attribute_management_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CatalogProductAttributeManagementV1Controller") CatalogProductAttributeManagementV1Controller

### Get singleton instance

The singleton instance of the ``` CatalogProductAttributeManagementV1Controller ``` class can be accessed from the API Client.

```php
$catalogProductAttributeManagementV1 = $client->getCatalogProductAttributeManagementV1();
```

### <a name="get_catalog_product_attribute_management_v1_get_attributes_get"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogProductAttributeManagementV1Controller.getCatalogProductAttributeManagementV1GetAttributesGet") getCatalogProductAttributeManagementV1GetAttributesGet

> *Tags:*  ``` Skips Authentication ``` 

> Retrieve related attributes based on given attribute set ID


```php
function getCatalogProductAttributeManagementV1GetAttributesGet($attributeSetId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| attributeSetId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$attributeSetId = 'attributeSetId';

$result = $catalogProductAttributeManagementV1->getCatalogProductAttributeManagementV1GetAttributesGet($attributeSetId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_catalog_product_attribute_management_v1_assign_post"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogProductAttributeManagementV1Controller.createCatalogProductAttributeManagementV1AssignPost") createCatalogProductAttributeManagementV1AssignPost

> *Tags:*  ``` Skips Authentication ``` 

> Assign attribute to attribute set


```php
function createCatalogProductAttributeManagementV1AssignPost($catalogProductAttributeManagementV1AssignPostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| catalogProductAttributeManagementV1AssignPostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$catalogProductAttributeManagementV1AssignPostBody = new CatalogProductAttributeManagementV1AssignPostBody();

$result = $catalogProductAttributeManagementV1->createCatalogProductAttributeManagementV1AssignPost($catalogProductAttributeManagementV1AssignPostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="delete_catalog_product_attribute_management_v1_unassign_delete"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogProductAttributeManagementV1Controller.deleteCatalogProductAttributeManagementV1UnassignDelete") deleteCatalogProductAttributeManagementV1UnassignDelete

> *Tags:*  ``` Skips Authentication ``` 

> Remove attribute from attribute set


```php
function deleteCatalogProductAttributeManagementV1UnassignDelete(
        $attributeSetId,
        $attributeCode)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| attributeSetId |  ``` Required ```  | TODO: Add a parameter description |
| attributeCode |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$attributeSetId = 'attributeSetId';
$attributeCode = 'attributeCode';

$result = $catalogProductAttributeManagementV1->deleteCatalogProductAttributeManagementV1UnassignDelete($attributeSetId, $attributeCode);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="catalog_product_attribute_group_repository_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CatalogProductAttributeGroupRepositoryV1Controller") CatalogProductAttributeGroupRepositoryV1Controller

### Get singleton instance

The singleton instance of the ``` CatalogProductAttributeGroupRepositoryV1Controller ``` class can be accessed from the API Client.

```php
$catalogProductAttributeGroupRepositoryV1 = $client->getCatalogProductAttributeGroupRepositoryV1();
```

### <a name="get_catalog_product_attribute_group_repository_v1_get_list_get"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogProductAttributeGroupRepositoryV1Controller.getCatalogProductAttributeGroupRepositoryV1GetListGet") getCatalogProductAttributeGroupRepositoryV1GetListGet

> *Tags:*  ``` Skips Authentication ``` 

> Retrieve list of attribute groups


```php
function getCatalogProductAttributeGroupRepositoryV1GetListGet(
        $searchCriteriaFilterGroupsFiltersField = null,
        $searchCriteriaFilterGroupsFiltersValue = null,
        $searchCriteriaFilterGroupsFiltersConditionType = null,
        $searchCriteriaSortOrdersField = null,
        $searchCriteriaSortOrdersDirection = null,
        $searchCriteriaPageSize = null,
        $searchCriteriaCurrentPage = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| searchCriteriaFilterGroupsFiltersField |  ``` Optional ```  | Field |
| searchCriteriaFilterGroupsFiltersValue |  ``` Optional ```  | Value |
| searchCriteriaFilterGroupsFiltersConditionType |  ``` Optional ```  | Condition type |
| searchCriteriaSortOrdersField |  ``` Optional ```  | Sorting field. |
| searchCriteriaSortOrdersDirection |  ``` Optional ```  | Sorting direction. |
| searchCriteriaPageSize |  ``` Optional ```  | Page size. |
| searchCriteriaCurrentPage |  ``` Optional ```  | Current page. |



#### Example Usage

```php
$searchCriteriaFilterGroupsFiltersField = 'searchCriteria[filterGroups][][filters][][field]';
$searchCriteriaFilterGroupsFiltersValue = 'searchCriteria[filterGroups][][filters][][value]';
$searchCriteriaFilterGroupsFiltersConditionType = 'searchCriteria[filterGroups][][filters][][conditionType]';
$searchCriteriaSortOrdersField = 'searchCriteria[sortOrders][][field]';
$searchCriteriaSortOrdersDirection = 'searchCriteria[sortOrders][][direction]';
$searchCriteriaPageSize = 200;
$searchCriteriaCurrentPage = 108;

$result = $catalogProductAttributeGroupRepositoryV1->getCatalogProductAttributeGroupRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_catalog_product_attribute_group_repository_v1_save_post"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogProductAttributeGroupRepositoryV1Controller.createCatalogProductAttributeGroupRepositoryV1SavePost") createCatalogProductAttributeGroupRepositoryV1SavePost

> *Tags:*  ``` Skips Authentication ``` 

> Save attribute group


```php
function createCatalogProductAttributeGroupRepositoryV1SavePost($catalogProductAttributeGroupRepositoryV1SavePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| catalogProductAttributeGroupRepositoryV1SavePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$catalogProductAttributeGroupRepositoryV1SavePostBody = new CatalogProductAttributeGroupRepositoryV1SavePostBody();

$result = $catalogProductAttributeGroupRepositoryV1->createCatalogProductAttributeGroupRepositoryV1SavePost($catalogProductAttributeGroupRepositoryV1SavePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="update_catalog_product_attribute_group_repository_v1_save_put"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogProductAttributeGroupRepositoryV1Controller.updateCatalogProductAttributeGroupRepositoryV1SavePut") updateCatalogProductAttributeGroupRepositoryV1SavePut

> *Tags:*  ``` Skips Authentication ``` 

> Save attribute group


```php
function updateCatalogProductAttributeGroupRepositoryV1SavePut(
        $attributeSetId,
        $catalogProductAttributeGroupRepositoryV1SavePutBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| attributeSetId |  ``` Required ```  | TODO: Add a parameter description |
| catalogProductAttributeGroupRepositoryV1SavePutBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$attributeSetId = 'attributeSetId';
$catalogProductAttributeGroupRepositoryV1SavePutBody = new CatalogProductAttributeGroupRepositoryV1SavePostBody();

$result = $catalogProductAttributeGroupRepositoryV1->updateCatalogProductAttributeGroupRepositoryV1SavePut($attributeSetId, $catalogProductAttributeGroupRepositoryV1SavePutBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="delete_catalog_product_attribute_group_repository_v1_delete_by_id_delete"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogProductAttributeGroupRepositoryV1Controller.deleteCatalogProductAttributeGroupRepositoryV1DeleteByIdDelete") deleteCatalogProductAttributeGroupRepositoryV1DeleteByIdDelete

> *Tags:*  ``` Skips Authentication ``` 

> Remove attribute group by id


```php
function deleteCatalogProductAttributeGroupRepositoryV1DeleteByIdDelete($groupId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| groupId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$groupId = 108;

$result = $catalogProductAttributeGroupRepositoryV1->deleteCatalogProductAttributeGroupRepositoryV1DeleteByIdDelete($groupId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="catalog_product_attribute_option_management_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CatalogProductAttributeOptionManagementV1Controller") CatalogProductAttributeOptionManagementV1Controller

### Get singleton instance

The singleton instance of the ``` CatalogProductAttributeOptionManagementV1Controller ``` class can be accessed from the API Client.

```php
$catalogProductAttributeOptionManagementV1 = $client->getCatalogProductAttributeOptionManagementV1();
```

### <a name="get_catalog_product_attribute_option_management_v1_get_items_get"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogProductAttributeOptionManagementV1Controller.getCatalogProductAttributeOptionManagementV1GetItemsGet") getCatalogProductAttributeOptionManagementV1GetItemsGet

> *Tags:*  ``` Skips Authentication ``` 

> Retrieve list of attribute options


```php
function getCatalogProductAttributeOptionManagementV1GetItemsGet($attributeCode)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| attributeCode |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$attributeCode = 'attributeCode';

$result = $catalogProductAttributeOptionManagementV1->getCatalogProductAttributeOptionManagementV1GetItemsGet($attributeCode);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_catalog_product_attribute_option_management_v1_add_post"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogProductAttributeOptionManagementV1Controller.createCatalogProductAttributeOptionManagementV1AddPost") createCatalogProductAttributeOptionManagementV1AddPost

> *Tags:*  ``` Skips Authentication ``` 

> Add option to attribute


```php
function createCatalogProductAttributeOptionManagementV1AddPost(
        $attributeCode,
        $catalogProductAttributeOptionManagementV1AddPostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| attributeCode |  ``` Required ```  | TODO: Add a parameter description |
| catalogProductAttributeOptionManagementV1AddPostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$attributeCode = 'attributeCode';
$catalogProductAttributeOptionManagementV1AddPostBody = new CatalogProductAttributeOptionManagementV1AddPostBody();

$result = $catalogProductAttributeOptionManagementV1->createCatalogProductAttributeOptionManagementV1AddPost($attributeCode, $catalogProductAttributeOptionManagementV1AddPostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="delete_catalog_product_attribute_option_management_v1_delete_delete"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogProductAttributeOptionManagementV1Controller.deleteCatalogProductAttributeOptionManagementV1DeleteDelete") deleteCatalogProductAttributeOptionManagementV1DeleteDelete

> *Tags:*  ``` Skips Authentication ``` 

> Delete option from attribute


```php
function deleteCatalogProductAttributeOptionManagementV1DeleteDelete(
        $attributeCode,
        $optionId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| attributeCode |  ``` Required ```  | TODO: Add a parameter description |
| optionId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$attributeCode = 'attributeCode';
$optionId = 'optionId';

$result = $catalogProductAttributeOptionManagementV1->deleteCatalogProductAttributeOptionManagementV1DeleteDelete($attributeCode, $optionId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="catalog_product_media_attribute_management_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CatalogProductMediaAttributeManagementV1Controller") CatalogProductMediaAttributeManagementV1Controller

### Get singleton instance

The singleton instance of the ``` CatalogProductMediaAttributeManagementV1Controller ``` class can be accessed from the API Client.

```php
$catalogProductMediaAttributeManagementV1 = $client->getCatalogProductMediaAttributeManagementV1();
```

### <a name="get_catalog_product_media_attribute_management_v1_get_list_get"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogProductMediaAttributeManagementV1Controller.getCatalogProductMediaAttributeManagementV1GetListGet") getCatalogProductMediaAttributeManagementV1GetListGet

> *Tags:*  ``` Skips Authentication ``` 

> Retrieve the list of media attributes (fronted input type is media_image) assigned to the given attribute set.


```php
function getCatalogProductMediaAttributeManagementV1GetListGet($attributeSetName)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| attributeSetName |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$attributeSetName = 'attributeSetName';

$result = $catalogProductMediaAttributeManagementV1->getCatalogProductMediaAttributeManagementV1GetListGet($attributeSetName);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="catalog_product_attribute_media_gallery_management_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CatalogProductAttributeMediaGalleryManagementV1Controller") CatalogProductAttributeMediaGalleryManagementV1Controller

### Get singleton instance

The singleton instance of the ``` CatalogProductAttributeMediaGalleryManagementV1Controller ``` class can be accessed from the API Client.

```php
$catalogProductAttributeMediaGalleryManagementV1 = $client->getCatalogProductAttributeMediaGalleryManagementV1();
```

### <a name="get_catalog_product_attribute_media_gallery_management_v1_get_get"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogProductAttributeMediaGalleryManagementV1Controller.getCatalogProductAttributeMediaGalleryManagementV1GetGet") getCatalogProductAttributeMediaGalleryManagementV1GetGet

> *Tags:*  ``` Skips Authentication ``` 

> Return information about gallery entry


```php
function getCatalogProductAttributeMediaGalleryManagementV1GetGet(
        $sku,
        $entryId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| sku |  ``` Required ```  | TODO: Add a parameter description |
| entryId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$sku = 'sku';
$entryId = 108;

$result = $catalogProductAttributeMediaGalleryManagementV1->getCatalogProductAttributeMediaGalleryManagementV1GetGet($sku, $entryId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="update_catalog_product_attribute_media_gallery_management_v1_update_put"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogProductAttributeMediaGalleryManagementV1Controller.updateCatalogProductAttributeMediaGalleryManagementV1UpdatePut") updateCatalogProductAttributeMediaGalleryManagementV1UpdatePut

> *Tags:*  ``` Skips Authentication ``` 

> Update gallery entry


```php
function updateCatalogProductAttributeMediaGalleryManagementV1UpdatePut(
        $sku,
        $entryId,
        $catalogProductAttributeMediaGalleryManagementV1UpdatePutBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| sku |  ``` Required ```  | TODO: Add a parameter description |
| entryId |  ``` Required ```  | TODO: Add a parameter description |
| catalogProductAttributeMediaGalleryManagementV1UpdatePutBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$sku = 'sku';
$entryId = 'entryId';
$catalogProductAttributeMediaGalleryManagementV1UpdatePutBody = new CatalogProductAttributeMediaGalleryManagementV1UpdatePutBody();

$result = $catalogProductAttributeMediaGalleryManagementV1->updateCatalogProductAttributeMediaGalleryManagementV1UpdatePut($sku, $entryId, $catalogProductAttributeMediaGalleryManagementV1UpdatePutBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="delete_catalog_product_attribute_media_gallery_management_v1_remove_delete"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogProductAttributeMediaGalleryManagementV1Controller.deleteCatalogProductAttributeMediaGalleryManagementV1RemoveDelete") deleteCatalogProductAttributeMediaGalleryManagementV1RemoveDelete

> *Tags:*  ``` Skips Authentication ``` 

> Remove gallery entry


```php
function deleteCatalogProductAttributeMediaGalleryManagementV1RemoveDelete(
        $sku,
        $entryId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| sku |  ``` Required ```  | TODO: Add a parameter description |
| entryId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$sku = 'sku';
$entryId = 108;

$result = $catalogProductAttributeMediaGalleryManagementV1->deleteCatalogProductAttributeMediaGalleryManagementV1RemoveDelete($sku, $entryId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="get_catalog_product_attribute_media_gallery_management_v1_get_list_get"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogProductAttributeMediaGalleryManagementV1Controller.getCatalogProductAttributeMediaGalleryManagementV1GetListGet") getCatalogProductAttributeMediaGalleryManagementV1GetListGet

> *Tags:*  ``` Skips Authentication ``` 

> Retrieve the list of gallery entries associated with given product


```php
function getCatalogProductAttributeMediaGalleryManagementV1GetListGet($sku)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| sku |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$sku = 'sku';

$result = $catalogProductAttributeMediaGalleryManagementV1->getCatalogProductAttributeMediaGalleryManagementV1GetListGet($sku);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_catalog_product_attribute_media_gallery_management_v1_create_post"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogProductAttributeMediaGalleryManagementV1Controller.createCatalogProductAttributeMediaGalleryManagementV1CreatePost") createCatalogProductAttributeMediaGalleryManagementV1CreatePost

> *Tags:*  ``` Skips Authentication ``` 

> Create new gallery entry


```php
function createCatalogProductAttributeMediaGalleryManagementV1CreatePost(
        $sku,
        $catalogProductAttributeMediaGalleryManagementV1CreatePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| sku |  ``` Required ```  | TODO: Add a parameter description |
| catalogProductAttributeMediaGalleryManagementV1CreatePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$sku = 'sku';
$catalogProductAttributeMediaGalleryManagementV1CreatePostBody = new CatalogProductAttributeMediaGalleryManagementV1UpdatePutBody();

$result = $catalogProductAttributeMediaGalleryManagementV1->createCatalogProductAttributeMediaGalleryManagementV1CreatePost($sku, $catalogProductAttributeMediaGalleryManagementV1CreatePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="catalog_product_tier_price_management_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CatalogProductTierPriceManagementV1Controller") CatalogProductTierPriceManagementV1Controller

### Get singleton instance

The singleton instance of the ``` CatalogProductTierPriceManagementV1Controller ``` class can be accessed from the API Client.

```php
$catalogProductTierPriceManagementV1 = $client->getCatalogProductTierPriceManagementV1();
```

### <a name="get_catalog_product_tier_price_management_v1_get_list_get"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogProductTierPriceManagementV1Controller.getCatalogProductTierPriceManagementV1GetListGet") getCatalogProductTierPriceManagementV1GetListGet

> *Tags:*  ``` Skips Authentication ``` 

> Get tier price of product


```php
function getCatalogProductTierPriceManagementV1GetListGet(
        $sku,
        $customerGroupId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| sku |  ``` Required ```  | TODO: Add a parameter description |
| customerGroupId |  ``` Required ```  | 'all' can be used to specify 'ALL GROUPS' |



#### Example Usage

```php
$sku = 'sku';
$customerGroupId = 'customerGroupId';

$result = $catalogProductTierPriceManagementV1->getCatalogProductTierPriceManagementV1GetListGet($sku, $customerGroupId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_catalog_product_tier_price_management_v1_add_post"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogProductTierPriceManagementV1Controller.createCatalogProductTierPriceManagementV1AddPost") createCatalogProductTierPriceManagementV1AddPost

> *Tags:*  ``` Skips Authentication ``` 

> Create tier price for product


```php
function createCatalogProductTierPriceManagementV1AddPost(
        $sku,
        $customerGroupId,
        $price,
        $qty)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| sku |  ``` Required ```  | TODO: Add a parameter description |
| customerGroupId |  ``` Required ```  | 'all' can be used to specify 'ALL GROUPS' |
| price |  ``` Required ```  | TODO: Add a parameter description |
| qty |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$sku = 'sku';
$customerGroupId = 'customerGroupId';
$price = 108.513221267384;
$qty = 108.513221267384;

$result = $catalogProductTierPriceManagementV1->createCatalogProductTierPriceManagementV1AddPost($sku, $customerGroupId, $price, $qty);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="delete_catalog_product_tier_price_management_v1_remove_delete"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogProductTierPriceManagementV1Controller.deleteCatalogProductTierPriceManagementV1RemoveDelete") deleteCatalogProductTierPriceManagementV1RemoveDelete

> *Tags:*  ``` Skips Authentication ``` 

> Remove tier price from product


```php
function deleteCatalogProductTierPriceManagementV1RemoveDelete(
        $sku,
        $customerGroupId,
        $qty)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| sku |  ``` Required ```  | TODO: Add a parameter description |
| customerGroupId |  ``` Required ```  | 'all' can be used to specify 'ALL GROUPS' |
| qty |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$sku = 'sku';
$customerGroupId = 'customerGroupId';
$qty = 108.513221267384;

$result = $catalogProductTierPriceManagementV1->deleteCatalogProductTierPriceManagementV1RemoveDelete($sku, $customerGroupId, $qty);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="catalog_tier_price_storage_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CatalogTierPriceStorageV1Controller") CatalogTierPriceStorageV1Controller

### Get singleton instance

The singleton instance of the ``` CatalogTierPriceStorageV1Controller ``` class can be accessed from the API Client.

```php
$catalogTierPriceStorageV1 = $client->getCatalogTierPriceStorageV1();
```

### <a name="create_catalog_tier_price_storage_v1_get_post"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogTierPriceStorageV1Controller.createCatalogTierPriceStorageV1GetPost") createCatalogTierPriceStorageV1GetPost

> *Tags:*  ``` Skips Authentication ``` 

> Return product prices. In case of at least one of skus is not found exception will be thrown.


```php
function createCatalogTierPriceStorageV1GetPost($catalogTierPriceStorageV1GetPostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| catalogTierPriceStorageV1GetPostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$catalogTierPriceStorageV1GetPostBody = new CatalogTierPriceStorageV1GetPostBody();

$result = $catalogTierPriceStorageV1->createCatalogTierPriceStorageV1GetPost($catalogTierPriceStorageV1GetPostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="update_catalog_tier_price_storage_v1_replace_put"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogTierPriceStorageV1Controller.updateCatalogTierPriceStorageV1ReplacePut") updateCatalogTierPriceStorageV1ReplacePut

> *Tags:*  ``` Skips Authentication ``` 

> Remove existing tier prices and replace them with the new ones. If any items will have invalid price, price type, website id, sku, customer group or quantity, they will be marked as failed and excluded from replace list and \Magento\Catalog\Api\Data\PriceUpdateResultInterface[] with problem description will be returned. If there were no failed items during update empty array will be returned. If error occurred during the update exception will be thrown.


```php
function updateCatalogTierPriceStorageV1ReplacePut($catalogTierPriceStorageV1ReplacePutBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| catalogTierPriceStorageV1ReplacePutBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$catalogTierPriceStorageV1ReplacePutBody = new CatalogTierPriceStorageV1ReplacePutBody();

$result = $catalogTierPriceStorageV1->updateCatalogTierPriceStorageV1ReplacePut($catalogTierPriceStorageV1ReplacePutBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_catalog_tier_price_storage_v1_update_post"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogTierPriceStorageV1Controller.createCatalogTierPriceStorageV1UpdatePost") createCatalogTierPriceStorageV1UpdatePost

> *Tags:*  ``` Skips Authentication ``` 

> Add or update product prices. If any items will have invalid price, price type, website id, sku, customer group or quantity, they will be marked as failed and excluded from update list and \Magento\Catalog\Api\Data\PriceUpdateResultInterface[] with problem description will be returned. If there were no failed items during update empty array will be returned. If error occurred during the update exception will be thrown.


```php
function createCatalogTierPriceStorageV1UpdatePost($catalogTierPriceStorageV1UpdatePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| catalogTierPriceStorageV1UpdatePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$catalogTierPriceStorageV1UpdatePostBody = new CatalogTierPriceStorageV1ReplacePutBody();

$result = $catalogTierPriceStorageV1->createCatalogTierPriceStorageV1UpdatePost($catalogTierPriceStorageV1UpdatePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_catalog_tier_price_storage_v1_delete_post"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogTierPriceStorageV1Controller.createCatalogTierPriceStorageV1DeletePost") createCatalogTierPriceStorageV1DeletePost

> *Tags:*  ``` Skips Authentication ``` 

> Delete product tier prices. If any items will have invalid price, price type, website id, sku, customer group or quantity, they will be marked as failed and excluded from delete list and \Magento\Catalog\Api\Data\PriceUpdateResultInterface[] with problem description will be returned. If there were no failed items during update empty array will be returned. If error occurred during the update exception will be thrown.


```php
function createCatalogTierPriceStorageV1DeletePost($catalogTierPriceStorageV1DeletePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| catalogTierPriceStorageV1DeletePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$catalogTierPriceStorageV1DeletePostBody = new CatalogTierPriceStorageV1ReplacePutBody();

$result = $catalogTierPriceStorageV1->createCatalogTierPriceStorageV1DeletePost($catalogTierPriceStorageV1DeletePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="catalog_base_price_storage_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CatalogBasePriceStorageV1Controller") CatalogBasePriceStorageV1Controller

### Get singleton instance

The singleton instance of the ``` CatalogBasePriceStorageV1Controller ``` class can be accessed from the API Client.

```php
$catalogBasePriceStorageV1 = $client->getCatalogBasePriceStorageV1();
```

### <a name="create_catalog_base_price_storage_v1_get_post"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogBasePriceStorageV1Controller.createCatalogBasePriceStorageV1GetPost") createCatalogBasePriceStorageV1GetPost

> *Tags:*  ``` Skips Authentication ``` 

> Return product prices. In case of at least one of skus is not found exception will be thrown.


```php
function createCatalogBasePriceStorageV1GetPost($catalogBasePriceStorageV1GetPostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| catalogBasePriceStorageV1GetPostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$catalogBasePriceStorageV1GetPostBody = new CatalogBasePriceStorageV1GetPostBody();

$result = $catalogBasePriceStorageV1->createCatalogBasePriceStorageV1GetPost($catalogBasePriceStorageV1GetPostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_catalog_base_price_storage_v1_update_post"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogBasePriceStorageV1Controller.createCatalogBasePriceStorageV1UpdatePost") createCatalogBasePriceStorageV1UpdatePost

> *Tags:*  ``` Skips Authentication ``` 

> Add or update product prices. Input item should correspond \Magento\Catalog\Api\Data\CostInterface. If any items will have invalid price, store id or sku, they will be marked as failed and excluded from update list and \Magento\Catalog\Api\Data\PriceUpdateResultInterface[] with problem description will be returned. If there were no failed items during update empty array will be returned. If error occurred during the update exception will be thrown.


```php
function createCatalogBasePriceStorageV1UpdatePost($catalogBasePriceStorageV1UpdatePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| catalogBasePriceStorageV1UpdatePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$catalogBasePriceStorageV1UpdatePostBody = new CatalogBasePriceStorageV1UpdatePostBody();

$result = $catalogBasePriceStorageV1->createCatalogBasePriceStorageV1UpdatePost($catalogBasePriceStorageV1UpdatePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="catalog_cost_storage_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CatalogCostStorageV1Controller") CatalogCostStorageV1Controller

### Get singleton instance

The singleton instance of the ``` CatalogCostStorageV1Controller ``` class can be accessed from the API Client.

```php
$catalogCostStorageV1 = $client->getCatalogCostStorageV1();
```

### <a name="create_catalog_cost_storage_v1_get_post"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogCostStorageV1Controller.createCatalogCostStorageV1GetPost") createCatalogCostStorageV1GetPost

> *Tags:*  ``` Skips Authentication ``` 

> Return product prices. In case of at least one of skus is not found exception will be thrown.


```php
function createCatalogCostStorageV1GetPost($catalogCostStorageV1GetPostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| catalogCostStorageV1GetPostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$catalogCostStorageV1GetPostBody = new CatalogCostStorageV1GetPostBody();

$result = $catalogCostStorageV1->createCatalogCostStorageV1GetPost($catalogCostStorageV1GetPostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_catalog_cost_storage_v1_update_post"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogCostStorageV1Controller.createCatalogCostStorageV1UpdatePost") createCatalogCostStorageV1UpdatePost

> *Tags:*  ``` Skips Authentication ``` 

> Add or update product cost. Input item should correspond to \Magento\Catalog\Api\Data\CostInterface. If any items will have invalid cost, store id or sku, they will be marked as failed and excluded from update list and \Magento\Catalog\Api\Data\PriceUpdateResultInterface[] with problem description will be returned. If there were no failed items during update empty array will be returned. If error occurred during the update exception will be thrown.


```php
function createCatalogCostStorageV1UpdatePost($catalogCostStorageV1UpdatePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| catalogCostStorageV1UpdatePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$catalogCostStorageV1UpdatePostBody = new CatalogCostStorageV1UpdatePostBody();

$result = $catalogCostStorageV1->createCatalogCostStorageV1UpdatePost($catalogCostStorageV1UpdatePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_catalog_cost_storage_v1_delete_post"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogCostStorageV1Controller.createCatalogCostStorageV1DeletePost") createCatalogCostStorageV1DeletePost

> *Tags:*  ``` Skips Authentication ``` 

> Delete product cost. In case of at least one of skus is not found exception will be thrown. If error occurred during the delete exception will be thrown.


```php
function createCatalogCostStorageV1DeletePost($catalogCostStorageV1DeletePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| catalogCostStorageV1DeletePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$catalogCostStorageV1DeletePostBody = new CatalogCostStorageV1GetPostBody();

$result = $catalogCostStorageV1->createCatalogCostStorageV1DeletePost($catalogCostStorageV1DeletePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="catalog_special_price_storage_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CatalogSpecialPriceStorageV1Controller") CatalogSpecialPriceStorageV1Controller

### Get singleton instance

The singleton instance of the ``` CatalogSpecialPriceStorageV1Controller ``` class can be accessed from the API Client.

```php
$catalogSpecialPriceStorageV1 = $client->getCatalogSpecialPriceStorageV1();
```

### <a name="create_catalog_special_price_storage_v1_get_post"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogSpecialPriceStorageV1Controller.createCatalogSpecialPriceStorageV1GetPost") createCatalogSpecialPriceStorageV1GetPost

> *Tags:*  ``` Skips Authentication ``` 

> Return product's special price. In case of at least one of skus is not found exception will be thrown.


```php
function createCatalogSpecialPriceStorageV1GetPost($catalogSpecialPriceStorageV1GetPostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| catalogSpecialPriceStorageV1GetPostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$catalogSpecialPriceStorageV1GetPostBody = new CatalogSpecialPriceStorageV1GetPostBody();

$result = $catalogSpecialPriceStorageV1->createCatalogSpecialPriceStorageV1GetPost($catalogSpecialPriceStorageV1GetPostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_catalog_special_price_storage_v1_update_post"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogSpecialPriceStorageV1Controller.createCatalogSpecialPriceStorageV1UpdatePost") createCatalogSpecialPriceStorageV1UpdatePost

> *Tags:*  ``` Skips Authentication ``` 

> Add or update product's special price. If any items will have invalid price, store id, sku or dates, they will be marked as failed and excluded from update list and \Magento\Catalog\Api\Data\PriceUpdateResultInterface[] with problem description will be returned. If there were no failed items during update empty array will be returned. If error occurred during the update exception will be thrown.


```php
function createCatalogSpecialPriceStorageV1UpdatePost($catalogSpecialPriceStorageV1UpdatePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| catalogSpecialPriceStorageV1UpdatePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$catalogSpecialPriceStorageV1UpdatePostBody = new CatalogSpecialPriceStorageV1UpdatePostBody();

$result = $catalogSpecialPriceStorageV1->createCatalogSpecialPriceStorageV1UpdatePost($catalogSpecialPriceStorageV1UpdatePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_catalog_special_price_storage_v1_delete_post"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogSpecialPriceStorageV1Controller.createCatalogSpecialPriceStorageV1DeletePost") createCatalogSpecialPriceStorageV1DeletePost

> *Tags:*  ``` Skips Authentication ``` 

> Delete product's special price. If any items will have invalid price, store id, sku or dates, they will be marked as failed and excluded from delete list and \Magento\Catalog\Api\Data\PriceUpdateResultInterface[] with problem description will be returned. If there were no failed items during update empty array will be returned. If error occurred during the delete exception will be thrown.


```php
function createCatalogSpecialPriceStorageV1DeletePost($catalogSpecialPriceStorageV1DeletePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| catalogSpecialPriceStorageV1DeletePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$catalogSpecialPriceStorageV1DeletePostBody = new CatalogSpecialPriceStorageV1UpdatePostBody();

$result = $catalogSpecialPriceStorageV1->createCatalogSpecialPriceStorageV1DeletePost($catalogSpecialPriceStorageV1DeletePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="catalog_category_repository_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CatalogCategoryRepositoryV1Controller") CatalogCategoryRepositoryV1Controller

### Get singleton instance

The singleton instance of the ``` CatalogCategoryRepositoryV1Controller ``` class can be accessed from the API Client.

```php
$catalogCategoryRepositoryV1 = $client->getCatalogCategoryRepositoryV1();
```

### <a name="get_catalog_category_repository_v1_get_get"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogCategoryRepositoryV1Controller.getCatalogCategoryRepositoryV1GetGet") getCatalogCategoryRepositoryV1GetGet

> *Tags:*  ``` Skips Authentication ``` 

> Get info about category by category id


```php
function getCatalogCategoryRepositoryV1GetGet(
        $categoryId,
        $storeId = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| categoryId |  ``` Required ```  | TODO: Add a parameter description |
| storeId |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$categoryId = 150;
$storeId = 150;

$result = $catalogCategoryRepositoryV1->getCatalogCategoryRepositoryV1GetGet($categoryId, $storeId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="delete_catalog_category_repository_v1_delete_by_identifier_delete"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogCategoryRepositoryV1Controller.deleteCatalogCategoryRepositoryV1DeleteByIdentifierDelete") deleteCatalogCategoryRepositoryV1DeleteByIdentifierDelete

> *Tags:*  ``` Skips Authentication ``` 

> Delete category by identifier


```php
function deleteCatalogCategoryRepositoryV1DeleteByIdentifierDelete($categoryId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| categoryId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$categoryId = 150;

$result = $catalogCategoryRepositoryV1->deleteCatalogCategoryRepositoryV1DeleteByIdentifierDelete($categoryId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_catalog_category_repository_v1_save_post"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogCategoryRepositoryV1Controller.createCatalogCategoryRepositoryV1SavePost") createCatalogCategoryRepositoryV1SavePost

> *Tags:*  ``` Skips Authentication ``` 

> Create category service


```php
function createCatalogCategoryRepositoryV1SavePost($catalogCategoryRepositoryV1SavePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| catalogCategoryRepositoryV1SavePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$catalogCategoryRepositoryV1SavePostBody = new CatalogCategoryRepositoryV1SavePostBody();

$result = $catalogCategoryRepositoryV1->createCatalogCategoryRepositoryV1SavePost($catalogCategoryRepositoryV1SavePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="update_catalog_category_repository_v1_save_put"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogCategoryRepositoryV1Controller.updateCatalogCategoryRepositoryV1SavePut") updateCatalogCategoryRepositoryV1SavePut

> *Tags:*  ``` Skips Authentication ``` 

> Create category service


```php
function updateCatalogCategoryRepositoryV1SavePut(
        $id,
        $catalogCategoryRepositoryV1SavePutBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | TODO: Add a parameter description |
| catalogCategoryRepositoryV1SavePutBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = 'id';
$catalogCategoryRepositoryV1SavePutBody = new CatalogCategoryRepositoryV1SavePostBody();

$result = $catalogCategoryRepositoryV1->updateCatalogCategoryRepositoryV1SavePut($id, $catalogCategoryRepositoryV1SavePutBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="catalog_category_management_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CatalogCategoryManagementV1Controller") CatalogCategoryManagementV1Controller

### Get singleton instance

The singleton instance of the ``` CatalogCategoryManagementV1Controller ``` class can be accessed from the API Client.

```php
$catalogCategoryManagementV1 = $client->getCatalogCategoryManagementV1();
```

### <a name="get_catalog_category_management_v1_get_tree_get"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogCategoryManagementV1Controller.getCatalogCategoryManagementV1GetTreeGet") getCatalogCategoryManagementV1GetTreeGet

> *Tags:*  ``` Skips Authentication ``` 

> Retrieve list of categories


```php
function getCatalogCategoryManagementV1GetTreeGet(
        $rootCategoryId = null,
        $depth = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| rootCategoryId |  ``` Optional ```  | TODO: Add a parameter description |
| depth |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$rootCategoryId = 150;
$depth = 150;

$result = $catalogCategoryManagementV1->getCatalogCategoryManagementV1GetTreeGet($rootCategoryId, $depth);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="update_catalog_category_management_v1_move_put"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogCategoryManagementV1Controller.updateCatalogCategoryManagementV1MovePut") updateCatalogCategoryManagementV1MovePut

> *Tags:*  ``` Skips Authentication ``` 

> Move category


```php
function updateCatalogCategoryManagementV1MovePut(
        $categoryId,
        $catalogCategoryManagementV1MovePutBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| categoryId |  ``` Required ```  | TODO: Add a parameter description |
| catalogCategoryManagementV1MovePutBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$categoryId = 150;
$catalogCategoryManagementV1MovePutBody = new CatalogCategoryManagementV1MovePutBody();

$result = $catalogCategoryManagementV1->updateCatalogCategoryManagementV1MovePut($categoryId, $catalogCategoryManagementV1MovePutBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="catalog_category_list_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CatalogCategoryListV1Controller") CatalogCategoryListV1Controller

### Get singleton instance

The singleton instance of the ``` CatalogCategoryListV1Controller ``` class can be accessed from the API Client.

```php
$catalogCategoryListV1 = $client->getCatalogCategoryListV1();
```

### <a name="get_catalog_category_list_v1_get_list_get"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogCategoryListV1Controller.getCatalogCategoryListV1GetListGet") getCatalogCategoryListV1GetListGet

> *Tags:*  ``` Skips Authentication ``` 

> Get category list


```php
function getCatalogCategoryListV1GetListGet(
        $searchCriteriaFilterGroupsFiltersField = null,
        $searchCriteriaFilterGroupsFiltersValue = null,
        $searchCriteriaFilterGroupsFiltersConditionType = null,
        $searchCriteriaSortOrdersField = null,
        $searchCriteriaSortOrdersDirection = null,
        $searchCriteriaPageSize = null,
        $searchCriteriaCurrentPage = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| searchCriteriaFilterGroupsFiltersField |  ``` Optional ```  | Field |
| searchCriteriaFilterGroupsFiltersValue |  ``` Optional ```  | Value |
| searchCriteriaFilterGroupsFiltersConditionType |  ``` Optional ```  | Condition type |
| searchCriteriaSortOrdersField |  ``` Optional ```  | Sorting field. |
| searchCriteriaSortOrdersDirection |  ``` Optional ```  | Sorting direction. |
| searchCriteriaPageSize |  ``` Optional ```  | Page size. |
| searchCriteriaCurrentPage |  ``` Optional ```  | Current page. |



#### Example Usage

```php
$searchCriteriaFilterGroupsFiltersField = 'searchCriteria[filterGroups][][filters][][field]';
$searchCriteriaFilterGroupsFiltersValue = 'searchCriteria[filterGroups][][filters][][value]';
$searchCriteriaFilterGroupsFiltersConditionType = 'searchCriteria[filterGroups][][filters][][conditionType]';
$searchCriteriaSortOrdersField = 'searchCriteria[sortOrders][][field]';
$searchCriteriaSortOrdersDirection = 'searchCriteria[sortOrders][][direction]';
$searchCriteriaPageSize = 150;
$searchCriteriaCurrentPage = 150;

$result = $catalogCategoryListV1->getCatalogCategoryListV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="catalog_product_custom_option_type_list_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CatalogProductCustomOptionTypeListV1Controller") CatalogProductCustomOptionTypeListV1Controller

### Get singleton instance

The singleton instance of the ``` CatalogProductCustomOptionTypeListV1Controller ``` class can be accessed from the API Client.

```php
$catalogProductCustomOptionTypeListV1 = $client->getCatalogProductCustomOptionTypeListV1();
```

### <a name="get_catalog_product_custom_option_type_list_v1_get_items_get"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogProductCustomOptionTypeListV1Controller.getCatalogProductCustomOptionTypeListV1GetItemsGet") getCatalogProductCustomOptionTypeListV1GetItemsGet

> *Tags:*  ``` Skips Authentication ``` 

> Get custom option types


```php
function getCatalogProductCustomOptionTypeListV1GetItemsGet()
```

#### Example Usage

```php

$result = $catalogProductCustomOptionTypeListV1->getCatalogProductCustomOptionTypeListV1GetItemsGet();

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="catalog_product_custom_option_repository_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CatalogProductCustomOptionRepositoryV1Controller") CatalogProductCustomOptionRepositoryV1Controller

### Get singleton instance

The singleton instance of the ``` CatalogProductCustomOptionRepositoryV1Controller ``` class can be accessed from the API Client.

```php
$catalogProductCustomOptionRepositoryV1 = $client->getCatalogProductCustomOptionRepositoryV1();
```

### <a name="get_catalog_product_custom_option_repository_v1_get_list_get"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogProductCustomOptionRepositoryV1Controller.getCatalogProductCustomOptionRepositoryV1GetListGet") getCatalogProductCustomOptionRepositoryV1GetListGet

> *Tags:*  ``` Skips Authentication ``` 

> Get the list of custom options for a specific product


```php
function getCatalogProductCustomOptionRepositoryV1GetListGet($sku)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| sku |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$sku = 'sku';

$result = $catalogProductCustomOptionRepositoryV1->getCatalogProductCustomOptionRepositoryV1GetListGet($sku);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="get_catalog_product_custom_option_repository_v1_get_get"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogProductCustomOptionRepositoryV1Controller.getCatalogProductCustomOptionRepositoryV1GetGet") getCatalogProductCustomOptionRepositoryV1GetGet

> *Tags:*  ``` Skips Authentication ``` 

> Get custom option for a specific product


```php
function getCatalogProductCustomOptionRepositoryV1GetGet(
        $sku,
        $optionId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| sku |  ``` Required ```  | TODO: Add a parameter description |
| optionId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$sku = 'sku';
$optionId = 150;

$result = $catalogProductCustomOptionRepositoryV1->getCatalogProductCustomOptionRepositoryV1GetGet($sku, $optionId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="delete_catalog_product_custom_option_repository_v1_delete_by_identifier_delete"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogProductCustomOptionRepositoryV1Controller.deleteCatalogProductCustomOptionRepositoryV1DeleteByIdentifierDelete") deleteCatalogProductCustomOptionRepositoryV1DeleteByIdentifierDelete

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function deleteCatalogProductCustomOptionRepositoryV1DeleteByIdentifierDelete(
        $sku,
        $optionId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| sku |  ``` Required ```  | TODO: Add a parameter description |
| optionId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$sku = 'sku';
$optionId = 150;

$result = $catalogProductCustomOptionRepositoryV1->deleteCatalogProductCustomOptionRepositoryV1DeleteByIdentifierDelete($sku, $optionId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_catalog_product_custom_option_repository_v1_save_post"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogProductCustomOptionRepositoryV1Controller.createCatalogProductCustomOptionRepositoryV1SavePost") createCatalogProductCustomOptionRepositoryV1SavePost

> *Tags:*  ``` Skips Authentication ``` 

> Save Custom Option


```php
function createCatalogProductCustomOptionRepositoryV1SavePost($catalogProductCustomOptionRepositoryV1SavePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| catalogProductCustomOptionRepositoryV1SavePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$catalogProductCustomOptionRepositoryV1SavePostBody = new CatalogProductCustomOptionRepositoryV1SavePostBody();

$result = $catalogProductCustomOptionRepositoryV1->createCatalogProductCustomOptionRepositoryV1SavePost($catalogProductCustomOptionRepositoryV1SavePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="update_catalog_product_custom_option_repository_v1_save_put"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogProductCustomOptionRepositoryV1Controller.updateCatalogProductCustomOptionRepositoryV1SavePut") updateCatalogProductCustomOptionRepositoryV1SavePut

> *Tags:*  ``` Skips Authentication ``` 

> Save Custom Option


```php
function updateCatalogProductCustomOptionRepositoryV1SavePut(
        $optionId,
        $catalogProductCustomOptionRepositoryV1SavePutBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| optionId |  ``` Required ```  | TODO: Add a parameter description |
| catalogProductCustomOptionRepositoryV1SavePutBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$optionId = 'optionId';
$catalogProductCustomOptionRepositoryV1SavePutBody = new CatalogProductCustomOptionRepositoryV1SavePostBody();

$result = $catalogProductCustomOptionRepositoryV1->updateCatalogProductCustomOptionRepositoryV1SavePut($optionId, $catalogProductCustomOptionRepositoryV1SavePutBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="catalog_product_link_type_list_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CatalogProductLinkTypeListV1Controller") CatalogProductLinkTypeListV1Controller

### Get singleton instance

The singleton instance of the ``` CatalogProductLinkTypeListV1Controller ``` class can be accessed from the API Client.

```php
$catalogProductLinkTypeListV1 = $client->getCatalogProductLinkTypeListV1();
```

### <a name="get_catalog_product_link_type_list_v1_get_items_get"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogProductLinkTypeListV1Controller.getCatalogProductLinkTypeListV1GetItemsGet") getCatalogProductLinkTypeListV1GetItemsGet

> *Tags:*  ``` Skips Authentication ``` 

> Retrieve information about available product link types


```php
function getCatalogProductLinkTypeListV1GetItemsGet()
```

#### Example Usage

```php

$result = $catalogProductLinkTypeListV1->getCatalogProductLinkTypeListV1GetItemsGet();

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="get_catalog_product_link_type_list_v1_get_item_attributes_get"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogProductLinkTypeListV1Controller.getCatalogProductLinkTypeListV1GetItemAttributesGet") getCatalogProductLinkTypeListV1GetItemAttributesGet

> *Tags:*  ``` Skips Authentication ``` 

> Provide a list of the product link type attributes


```php
function getCatalogProductLinkTypeListV1GetItemAttributesGet($type)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| type |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$type = 'type';

$result = $catalogProductLinkTypeListV1->getCatalogProductLinkTypeListV1GetItemAttributesGet($type);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="catalog_product_link_management_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CatalogProductLinkManagementV1Controller") CatalogProductLinkManagementV1Controller

### Get singleton instance

The singleton instance of the ``` CatalogProductLinkManagementV1Controller ``` class can be accessed from the API Client.

```php
$catalogProductLinkManagementV1 = $client->getCatalogProductLinkManagementV1();
```

### <a name="get_catalog_product_link_management_v1_get_linked_items_by_type_get"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogProductLinkManagementV1Controller.getCatalogProductLinkManagementV1GetLinkedItemsByTypeGet") getCatalogProductLinkManagementV1GetLinkedItemsByTypeGet

> *Tags:*  ``` Skips Authentication ``` 

> Provide the list of links for a specific product


```php
function getCatalogProductLinkManagementV1GetLinkedItemsByTypeGet(
        $sku,
        $type)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| sku |  ``` Required ```  | TODO: Add a parameter description |
| type |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$sku = 'sku';
$type = 'type';

$result = $catalogProductLinkManagementV1->getCatalogProductLinkManagementV1GetLinkedItemsByTypeGet($sku, $type);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_catalog_product_link_management_v1_set_product_links_post"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogProductLinkManagementV1Controller.createCatalogProductLinkManagementV1SetProductLinksPost") createCatalogProductLinkManagementV1SetProductLinksPost

> *Tags:*  ``` Skips Authentication ``` 

> Assign a product link to another product


```php
function createCatalogProductLinkManagementV1SetProductLinksPost(
        $sku,
        $catalogProductLinkManagementV1SetProductLinksPostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| sku |  ``` Required ```  | TODO: Add a parameter description |
| catalogProductLinkManagementV1SetProductLinksPostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$sku = 'sku';
$catalogProductLinkManagementV1SetProductLinksPostBody = new CatalogProductLinkManagementV1SetProductLinksPostBody();

$result = $catalogProductLinkManagementV1->createCatalogProductLinkManagementV1SetProductLinksPost($sku, $catalogProductLinkManagementV1SetProductLinksPostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="catalog_product_link_repository_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CatalogProductLinkRepositoryV1Controller") CatalogProductLinkRepositoryV1Controller

### Get singleton instance

The singleton instance of the ``` CatalogProductLinkRepositoryV1Controller ``` class can be accessed from the API Client.

```php
$catalogProductLinkRepositoryV1 = $client->getCatalogProductLinkRepositoryV1();
```

### <a name="update_catalog_product_link_repository_v1_save_put"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogProductLinkRepositoryV1Controller.updateCatalogProductLinkRepositoryV1SavePut") updateCatalogProductLinkRepositoryV1SavePut

> *Tags:*  ``` Skips Authentication ``` 

> Save product link


```php
function updateCatalogProductLinkRepositoryV1SavePut(
        $sku,
        $catalogProductLinkRepositoryV1SavePutBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| sku |  ``` Required ```  | TODO: Add a parameter description |
| catalogProductLinkRepositoryV1SavePutBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$sku = 'sku';
$catalogProductLinkRepositoryV1SavePutBody = new CatalogProductLinkRepositoryV1SavePutBody();

$result = $catalogProductLinkRepositoryV1->updateCatalogProductLinkRepositoryV1SavePut($sku, $catalogProductLinkRepositoryV1SavePutBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="delete_catalog_product_link_repository_v1_delete_by_id_delete"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogProductLinkRepositoryV1Controller.deleteCatalogProductLinkRepositoryV1DeleteByIdDelete") deleteCatalogProductLinkRepositoryV1DeleteByIdDelete

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function deleteCatalogProductLinkRepositoryV1DeleteByIdDelete(
        $sku,
        $type,
        $linkedProductSku)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| sku |  ``` Required ```  | TODO: Add a parameter description |
| type |  ``` Required ```  | TODO: Add a parameter description |
| linkedProductSku |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$sku = 'sku';
$type = 'type';
$linkedProductSku = 'linkedProductSku';

$result = $catalogProductLinkRepositoryV1->deleteCatalogProductLinkRepositoryV1DeleteByIdDelete($sku, $type, $linkedProductSku);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="catalog_category_link_management_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CatalogCategoryLinkManagementV1Controller") CatalogCategoryLinkManagementV1Controller

### Get singleton instance

The singleton instance of the ``` CatalogCategoryLinkManagementV1Controller ``` class can be accessed from the API Client.

```php
$catalogCategoryLinkManagementV1 = $client->getCatalogCategoryLinkManagementV1();
```

### <a name="get_catalog_category_link_management_v1_get_assigned_products_get"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogCategoryLinkManagementV1Controller.getCatalogCategoryLinkManagementV1GetAssignedProductsGet") getCatalogCategoryLinkManagementV1GetAssignedProductsGet

> *Tags:*  ``` Skips Authentication ``` 

> Get products assigned to category


```php
function getCatalogCategoryLinkManagementV1GetAssignedProductsGet($categoryId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| categoryId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$categoryId = 58;

$result = $catalogCategoryLinkManagementV1->getCatalogCategoryLinkManagementV1GetAssignedProductsGet($categoryId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="catalog_category_link_repository_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CatalogCategoryLinkRepositoryV1Controller") CatalogCategoryLinkRepositoryV1Controller

### Get singleton instance

The singleton instance of the ``` CatalogCategoryLinkRepositoryV1Controller ``` class can be accessed from the API Client.

```php
$catalogCategoryLinkRepositoryV1 = $client->getCatalogCategoryLinkRepositoryV1();
```

### <a name="update_catalog_category_link_repository_v1_save_put"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogCategoryLinkRepositoryV1Controller.updateCatalogCategoryLinkRepositoryV1SavePut") updateCatalogCategoryLinkRepositoryV1SavePut

> *Tags:*  ``` Skips Authentication ``` 

> Assign a product to the required category


```php
function updateCatalogCategoryLinkRepositoryV1SavePut(
        $categoryId,
        $catalogCategoryLinkRepositoryV1SavePutBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| categoryId |  ``` Required ```  | TODO: Add a parameter description |
| catalogCategoryLinkRepositoryV1SavePutBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$categoryId = 'categoryId';
$catalogCategoryLinkRepositoryV1SavePutBody = new CatalogCategoryLinkRepositoryV1SavePutBody();

$result = $catalogCategoryLinkRepositoryV1->updateCatalogCategoryLinkRepositoryV1SavePut($categoryId, $catalogCategoryLinkRepositoryV1SavePutBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_catalog_category_link_repository_v1_save_post"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogCategoryLinkRepositoryV1Controller.createCatalogCategoryLinkRepositoryV1SavePost") createCatalogCategoryLinkRepositoryV1SavePost

> *Tags:*  ``` Skips Authentication ``` 

> Assign a product to the required category


```php
function createCatalogCategoryLinkRepositoryV1SavePost(
        $categoryId,
        $catalogCategoryLinkRepositoryV1SavePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| categoryId |  ``` Required ```  | TODO: Add a parameter description |
| catalogCategoryLinkRepositoryV1SavePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$categoryId = 'categoryId';
$catalogCategoryLinkRepositoryV1SavePostBody = new CatalogCategoryLinkRepositoryV1SavePutBody();

$result = $catalogCategoryLinkRepositoryV1->createCatalogCategoryLinkRepositoryV1SavePost($categoryId, $catalogCategoryLinkRepositoryV1SavePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="delete_catalog_category_link_repository_v1_delete_by_ids_delete"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogCategoryLinkRepositoryV1Controller.deleteCatalogCategoryLinkRepositoryV1DeleteByIdsDelete") deleteCatalogCategoryLinkRepositoryV1DeleteByIdsDelete

> *Tags:*  ``` Skips Authentication ``` 

> Remove the product assignment from the category by category id and sku


```php
function deleteCatalogCategoryLinkRepositoryV1DeleteByIdsDelete(
        $categoryId,
        $sku)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| categoryId |  ``` Required ```  | TODO: Add a parameter description |
| sku |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$categoryId = 'categoryId';
$sku = 'sku';

$result = $catalogCategoryLinkRepositoryV1->deleteCatalogCategoryLinkRepositoryV1DeleteByIdsDelete($categoryId, $sku);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="catalog_product_website_link_repository_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CatalogProductWebsiteLinkRepositoryV1Controller") CatalogProductWebsiteLinkRepositoryV1Controller

### Get singleton instance

The singleton instance of the ``` CatalogProductWebsiteLinkRepositoryV1Controller ``` class can be accessed from the API Client.

```php
$catalogProductWebsiteLinkRepositoryV1 = $client->getCatalogProductWebsiteLinkRepositoryV1();
```

### <a name="update_catalog_product_website_link_repository_v1_save_put"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogProductWebsiteLinkRepositoryV1Controller.updateCatalogProductWebsiteLinkRepositoryV1SavePut") updateCatalogProductWebsiteLinkRepositoryV1SavePut

> *Tags:*  ``` Skips Authentication ``` 

> Assign a product to the website


```php
function updateCatalogProductWebsiteLinkRepositoryV1SavePut(
        $sku,
        $catalogProductWebsiteLinkRepositoryV1SavePutBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| sku |  ``` Required ```  | TODO: Add a parameter description |
| catalogProductWebsiteLinkRepositoryV1SavePutBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$sku = 'sku';
$catalogProductWebsiteLinkRepositoryV1SavePutBody = new CatalogProductWebsiteLinkRepositoryV1SavePutBody();

$result = $catalogProductWebsiteLinkRepositoryV1->updateCatalogProductWebsiteLinkRepositoryV1SavePut($sku, $catalogProductWebsiteLinkRepositoryV1SavePutBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_catalog_product_website_link_repository_v1_save_post"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogProductWebsiteLinkRepositoryV1Controller.createCatalogProductWebsiteLinkRepositoryV1SavePost") createCatalogProductWebsiteLinkRepositoryV1SavePost

> *Tags:*  ``` Skips Authentication ``` 

> Assign a product to the website


```php
function createCatalogProductWebsiteLinkRepositoryV1SavePost(
        $sku,
        $catalogProductWebsiteLinkRepositoryV1SavePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| sku |  ``` Required ```  | TODO: Add a parameter description |
| catalogProductWebsiteLinkRepositoryV1SavePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$sku = 'sku';
$catalogProductWebsiteLinkRepositoryV1SavePostBody = new CatalogProductWebsiteLinkRepositoryV1SavePutBody();

$result = $catalogProductWebsiteLinkRepositoryV1->createCatalogProductWebsiteLinkRepositoryV1SavePost($sku, $catalogProductWebsiteLinkRepositoryV1SavePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="delete_catalog_product_website_link_repository_v1_delete_by_id_delete"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogProductWebsiteLinkRepositoryV1Controller.deleteCatalogProductWebsiteLinkRepositoryV1DeleteByIdDelete") deleteCatalogProductWebsiteLinkRepositoryV1DeleteByIdDelete

> *Tags:*  ``` Skips Authentication ``` 

> Remove the website assignment from the product by product sku


```php
function deleteCatalogProductWebsiteLinkRepositoryV1DeleteByIdDelete(
        $sku,
        $websiteId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| sku |  ``` Required ```  | TODO: Add a parameter description |
| websiteId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$sku = 'sku';
$websiteId = 58;

$result = $catalogProductWebsiteLinkRepositoryV1->deleteCatalogProductWebsiteLinkRepositoryV1DeleteByIdDelete($sku, $websiteId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="catalog_product_render_list_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CatalogProductRenderListV1Controller") CatalogProductRenderListV1Controller

### Get singleton instance

The singleton instance of the ``` CatalogProductRenderListV1Controller ``` class can be accessed from the API Client.

```php
$catalogProductRenderListV1 = $client->getCatalogProductRenderListV1();
```

### <a name="get_catalog_product_render_list_v1_get_list_get"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogProductRenderListV1Controller.getCatalogProductRenderListV1GetListGet") getCatalogProductRenderListV1GetListGet

> *Tags:*  ``` Skips Authentication ``` 

> Collect and retrieve the list of product render info This info contains raw prices and formated prices, product name, stock status, store_id, etc


```php
function getCatalogProductRenderListV1GetListGet(
        $storeId,
        $currencyCode,
        $searchCriteriaFilterGroupsFiltersField = null,
        $searchCriteriaFilterGroupsFiltersValue = null,
        $searchCriteriaFilterGroupsFiltersConditionType = null,
        $searchCriteriaSortOrdersField = null,
        $searchCriteriaSortOrdersDirection = null,
        $searchCriteriaPageSize = null,
        $searchCriteriaCurrentPage = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| storeId |  ``` Required ```  | TODO: Add a parameter description |
| currencyCode |  ``` Required ```  | TODO: Add a parameter description |
| searchCriteriaFilterGroupsFiltersField |  ``` Optional ```  | Field |
| searchCriteriaFilterGroupsFiltersValue |  ``` Optional ```  | Value |
| searchCriteriaFilterGroupsFiltersConditionType |  ``` Optional ```  | Condition type |
| searchCriteriaSortOrdersField |  ``` Optional ```  | Sorting field. |
| searchCriteriaSortOrdersDirection |  ``` Optional ```  | Sorting direction. |
| searchCriteriaPageSize |  ``` Optional ```  | Page size. |
| searchCriteriaCurrentPage |  ``` Optional ```  | Current page. |



#### Example Usage

```php
$storeId = 58;
$currencyCode = 'currencyCode';
$searchCriteriaFilterGroupsFiltersField = 'searchCriteria[filterGroups][][filters][][field]';
$searchCriteriaFilterGroupsFiltersValue = 'searchCriteria[filterGroups][][filters][][value]';
$searchCriteriaFilterGroupsFiltersConditionType = 'searchCriteria[filterGroups][][filters][][conditionType]';
$searchCriteriaSortOrdersField = 'searchCriteria[sortOrders][][field]';
$searchCriteriaSortOrdersDirection = 'searchCriteria[sortOrders][][direction]';
$searchCriteriaPageSize = 58;
$searchCriteriaCurrentPage = 58;

$result = $catalogProductRenderListV1->getCatalogProductRenderListV1GetListGet($storeId, $currencyCode, $searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="catalog_inventory_stock_registry_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CatalogInventoryStockRegistryV1Controller") CatalogInventoryStockRegistryV1Controller

### Get singleton instance

The singleton instance of the ``` CatalogInventoryStockRegistryV1Controller ``` class can be accessed from the API Client.

```php
$catalogInventoryStockRegistryV1 = $client->getCatalogInventoryStockRegistryV1();
```

### <a name="get_catalog_inventory_stock_registry_v1_get_stock_item_by_sku_get"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogInventoryStockRegistryV1Controller.getCatalogInventoryStockRegistryV1GetStockItemBySkuGet") getCatalogInventoryStockRegistryV1GetStockItemBySkuGet

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function getCatalogInventoryStockRegistryV1GetStockItemBySkuGet(
        $productSku,
        $scopeId = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| productSku |  ``` Required ```  | TODO: Add a parameter description |
| scopeId |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$productSku = 'productSku';
$scopeId = 58;

$result = $catalogInventoryStockRegistryV1->getCatalogInventoryStockRegistryV1GetStockItemBySkuGet($productSku, $scopeId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="update_catalog_inventory_stock_registry_v1_update_stock_item_by_sku_put"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogInventoryStockRegistryV1Controller.updateCatalogInventoryStockRegistryV1UpdateStockItemBySkuPut") updateCatalogInventoryStockRegistryV1UpdateStockItemBySkuPut

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function updateCatalogInventoryStockRegistryV1UpdateStockItemBySkuPut(
        $productSku,
        $itemId,
        $catalogInventoryStockRegistryV1UpdateStockItemBySkuPutBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| productSku |  ``` Required ```  | TODO: Add a parameter description |
| itemId |  ``` Required ```  | TODO: Add a parameter description |
| catalogInventoryStockRegistryV1UpdateStockItemBySkuPutBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$productSku = 'productSku';
$itemId = 'itemId';
$catalogInventoryStockRegistryV1UpdateStockItemBySkuPutBody = new CatalogInventoryStockRegistryV1UpdateStockItemBySkuPutBody();

$result = $catalogInventoryStockRegistryV1->updateCatalogInventoryStockRegistryV1UpdateStockItemBySkuPut($productSku, $itemId, $catalogInventoryStockRegistryV1UpdateStockItemBySkuPutBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="get_catalog_inventory_stock_registry_v1_get_low_stock_items_get"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogInventoryStockRegistryV1Controller.getCatalogInventoryStockRegistryV1GetLowStockItemsGet") getCatalogInventoryStockRegistryV1GetLowStockItemsGet

> *Tags:*  ``` Skips Authentication ``` 

> Retrieves a list of SKU's with low inventory qty


```php
function getCatalogInventoryStockRegistryV1GetLowStockItemsGet(
        $scopeId,
        $qty,
        $currentPage = null,
        $pageSize = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| scopeId |  ``` Required ```  | TODO: Add a parameter description |
| qty |  ``` Required ```  | TODO: Add a parameter description |
| currentPage |  ``` Optional ```  | TODO: Add a parameter description |
| pageSize |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$scopeId = 222;
$qty = 222.245830710626;
$currentPage = 222;
$pageSize = 222;

$result = $catalogInventoryStockRegistryV1->getCatalogInventoryStockRegistryV1GetLowStockItemsGet($scopeId, $qty, $currentPage, $pageSize);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="get_catalog_inventory_stock_registry_v1_get_stock_status_by_sku_get"></a>![Method: ](https://apidocs.io/img/method.png ".CatalogInventoryStockRegistryV1Controller.getCatalogInventoryStockRegistryV1GetStockStatusBySkuGet") getCatalogInventoryStockRegistryV1GetStockStatusBySkuGet

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function getCatalogInventoryStockRegistryV1GetStockStatusBySkuGet(
        $productSku,
        $scopeId = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| productSku |  ``` Required ```  | TODO: Add a parameter description |
| scopeId |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$productSku = 'productSku';
$scopeId = 222;

$result = $catalogInventoryStockRegistryV1->getCatalogInventoryStockRegistryV1GetStockStatusBySkuGet($productSku, $scopeId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="backend_module_service_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".BackendModuleServiceV1Controller") BackendModuleServiceV1Controller

### Get singleton instance

The singleton instance of the ``` BackendModuleServiceV1Controller ``` class can be accessed from the API Client.

```php
$backendModuleServiceV1 = $client->getBackendModuleServiceV1();
```

### <a name="get_backend_module_service_v1_get_modules_get"></a>![Method: ](https://apidocs.io/img/method.png ".BackendModuleServiceV1Controller.getBackendModuleServiceV1GetModulesGet") getBackendModuleServiceV1GetModulesGet

> *Tags:*  ``` Skips Authentication ``` 

> Returns an array of enabled modules


```php
function getBackendModuleServiceV1GetModulesGet()
```

#### Example Usage

```php

$result = $backendModuleServiceV1->getBackendModuleServiceV1GetModulesGet();

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="quote_cart_repository_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".QuoteCartRepositoryV1Controller") QuoteCartRepositoryV1Controller

### Get singleton instance

The singleton instance of the ``` QuoteCartRepositoryV1Controller ``` class can be accessed from the API Client.

```php
$quoteCartRepositoryV1 = $client->getQuoteCartRepositoryV1();
```

### <a name="get_quote_cart_repository_v1_get_get"></a>![Method: ](https://apidocs.io/img/method.png ".QuoteCartRepositoryV1Controller.getQuoteCartRepositoryV1GetGet") getQuoteCartRepositoryV1GetGet

> *Tags:*  ``` Skips Authentication ``` 

> Enables an administrative user to return information for a specified cart.


```php
function getQuoteCartRepositoryV1GetGet($cartId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$cartId = 222;

$result = $quoteCartRepositoryV1->getQuoteCartRepositoryV1GetGet($cartId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="get_quote_cart_repository_v1_get_list_get"></a>![Method: ](https://apidocs.io/img/method.png ".QuoteCartRepositoryV1Controller.getQuoteCartRepositoryV1GetListGet") getQuoteCartRepositoryV1GetListGet

> *Tags:*  ``` Skips Authentication ``` 

> Enables administrative users to list carts that match specified search criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included.  See http://devdocs.magento.com/codelinks/attributes.html#CartRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.


```php
function getQuoteCartRepositoryV1GetListGet(
        $searchCriteriaFilterGroupsFiltersField = null,
        $searchCriteriaFilterGroupsFiltersValue = null,
        $searchCriteriaFilterGroupsFiltersConditionType = null,
        $searchCriteriaSortOrdersField = null,
        $searchCriteriaSortOrdersDirection = null,
        $searchCriteriaPageSize = null,
        $searchCriteriaCurrentPage = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| searchCriteriaFilterGroupsFiltersField |  ``` Optional ```  | Field |
| searchCriteriaFilterGroupsFiltersValue |  ``` Optional ```  | Value |
| searchCriteriaFilterGroupsFiltersConditionType |  ``` Optional ```  | Condition type |
| searchCriteriaSortOrdersField |  ``` Optional ```  | Sorting field. |
| searchCriteriaSortOrdersDirection |  ``` Optional ```  | Sorting direction. |
| searchCriteriaPageSize |  ``` Optional ```  | Page size. |
| searchCriteriaCurrentPage |  ``` Optional ```  | Current page. |



#### Example Usage

```php
$searchCriteriaFilterGroupsFiltersField = 'searchCriteria[filterGroups][][filters][][field]';
$searchCriteriaFilterGroupsFiltersValue = 'searchCriteria[filterGroups][][filters][][value]';
$searchCriteriaFilterGroupsFiltersConditionType = 'searchCriteria[filterGroups][][filters][][conditionType]';
$searchCriteriaSortOrdersField = 'searchCriteria[sortOrders][][field]';
$searchCriteriaSortOrdersDirection = 'searchCriteria[sortOrders][][direction]';
$searchCriteriaPageSize = 222;
$searchCriteriaCurrentPage = 222;

$result = $quoteCartRepositoryV1->getQuoteCartRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="update_quote_cart_repository_v1_save_put"></a>![Method: ](https://apidocs.io/img/method.png ".QuoteCartRepositoryV1Controller.updateQuoteCartRepositoryV1SavePut") updateQuoteCartRepositoryV1SavePut

> *Tags:*  ``` Skips Authentication ``` 

> Save quote


```php
function updateQuoteCartRepositoryV1SavePut($quoteCartRepositoryV1SavePutBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| quoteCartRepositoryV1SavePutBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$quoteCartRepositoryV1SavePutBody = new QuoteCartRepositoryV1SavePutBody();

$quoteCartRepositoryV1->updateQuoteCartRepositoryV1SavePut($quoteCartRepositoryV1SavePutBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="quote_cart_management_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".QuoteCartManagementV1Controller") QuoteCartManagementV1Controller

### Get singleton instance

The singleton instance of the ``` QuoteCartManagementV1Controller ``` class can be accessed from the API Client.

```php
$quoteCartManagementV1 = $client->getQuoteCartManagementV1();
```

### <a name="update_quote_cart_management_v1_assign_customer_put"></a>![Method: ](https://apidocs.io/img/method.png ".QuoteCartManagementV1Controller.updateQuoteCartManagementV1AssignCustomerPut") updateQuoteCartManagementV1AssignCustomerPut

> *Tags:*  ``` Skips Authentication ``` 

> Assigns a specified customer to a specified shopping cart.


```php
function updateQuoteCartManagementV1AssignCustomerPut(
        $cartId,
        $quoteCartManagementV1AssignCustomerPutBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | The cart ID. |
| quoteCartManagementV1AssignCustomerPutBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$cartId = 222;
$quoteCartManagementV1AssignCustomerPutBody = new QuoteCartManagementV1AssignCustomerPutBody();

$result = $quoteCartManagementV1->updateQuoteCartManagementV1AssignCustomerPut($cartId, $quoteCartManagementV1AssignCustomerPutBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="get_quote_cart_management_v1_get_cart_for_customer_get"></a>![Method: ](https://apidocs.io/img/method.png ".QuoteCartManagementV1Controller.getQuoteCartManagementV1GetCartForCustomerGet") getQuoteCartManagementV1GetCartForCustomerGet

> *Tags:*  ``` Skips Authentication ``` 

> Returns information for the cart for a specified customer.


```php
function getQuoteCartManagementV1GetCartForCustomerGet()
```

#### Example Usage

```php

$result = $quoteCartManagementV1->getQuoteCartManagementV1GetCartForCustomerGet();

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_quote_cart_management_v1_create_empty_cart_for_customer_post"></a>![Method: ](https://apidocs.io/img/method.png ".QuoteCartManagementV1Controller.createQuoteCartManagementV1CreateEmptyCartForCustomerPost") createQuoteCartManagementV1CreateEmptyCartForCustomerPost

> *Tags:*  ``` Skips Authentication ``` 

> Creates an empty cart and quote for a specified customer if customer does not have a cart yet.


```php
function createQuoteCartManagementV1CreateEmptyCartForCustomerPost()
```

#### Example Usage

```php

$result = $quoteCartManagementV1->createQuoteCartManagementV1CreateEmptyCartForCustomerPost();

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_quote_cart_management_v1_create_empty_cart_post"></a>![Method: ](https://apidocs.io/img/method.png ".QuoteCartManagementV1Controller.createQuoteCartManagementV1CreateEmptyCartPost") createQuoteCartManagementV1CreateEmptyCartPost

> *Tags:*  ``` Skips Authentication ``` 

> Creates an empty cart and quote for a guest.


```php
function createQuoteCartManagementV1CreateEmptyCartPost()
```

#### Example Usage

```php

$result = $quoteCartManagementV1->createQuoteCartManagementV1CreateEmptyCartPost();

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_quote_cart_management_v1_create_empty_cart_for_customer_post1"></a>![Method: ](https://apidocs.io/img/method.png ".QuoteCartManagementV1Controller.createQuoteCartManagementV1CreateEmptyCartForCustomerPost1") createQuoteCartManagementV1CreateEmptyCartForCustomerPost1

> *Tags:*  ``` Skips Authentication ``` 

> Creates an empty cart and quote for a specified customer if customer does not have a cart yet.


```php
function createQuoteCartManagementV1CreateEmptyCartForCustomerPost1($customerId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| customerId |  ``` Required ```  | The customer ID. |



#### Example Usage

```php
$customerId = 222;

$result = $quoteCartManagementV1->createQuoteCartManagementV1CreateEmptyCartForCustomerPost1($customerId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="update_quote_cart_management_v1_place_order_put"></a>![Method: ](https://apidocs.io/img/method.png ".QuoteCartManagementV1Controller.updateQuoteCartManagementV1PlaceOrderPut") updateQuoteCartManagementV1PlaceOrderPut

> *Tags:*  ``` Skips Authentication ``` 

> Places an order for a specified cart.


```php
function updateQuoteCartManagementV1PlaceOrderPut($quoteCartManagementV1PlaceOrderPutBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| quoteCartManagementV1PlaceOrderPutBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$quoteCartManagementV1PlaceOrderPutBody = new QuoteCartManagementV1PlaceOrderPutBody();

$result = $quoteCartManagementV1->updateQuoteCartManagementV1PlaceOrderPut($quoteCartManagementV1PlaceOrderPutBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="update_quote_cart_management_v1_place_order_put1"></a>![Method: ](https://apidocs.io/img/method.png ".QuoteCartManagementV1Controller.updateQuoteCartManagementV1PlaceOrderPut1") updateQuoteCartManagementV1PlaceOrderPut1

> *Tags:*  ``` Skips Authentication ``` 

> Places an order for a specified cart.


```php
function updateQuoteCartManagementV1PlaceOrderPut1(
        $cartId,
        $quoteCartManagementV1PlaceOrderPutBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | The cart ID. |
| quoteCartManagementV1PlaceOrderPutBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$cartId = 222;
$quoteCartManagementV1PlaceOrderPutBody = new QuoteCartManagementV1PlaceOrderPutBody();

$result = $quoteCartManagementV1->updateQuoteCartManagementV1PlaceOrderPut1($cartId, $quoteCartManagementV1PlaceOrderPutBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="quote_guest_cart_repository_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".QuoteGuestCartRepositoryV1Controller") QuoteGuestCartRepositoryV1Controller

### Get singleton instance

The singleton instance of the ``` QuoteGuestCartRepositoryV1Controller ``` class can be accessed from the API Client.

```php
$quoteGuestCartRepositoryV1 = $client->getQuoteGuestCartRepositoryV1();
```

### <a name="get_quote_guest_cart_repository_v1_get_get"></a>![Method: ](https://apidocs.io/img/method.png ".QuoteGuestCartRepositoryV1Controller.getQuoteGuestCartRepositoryV1GetGet") getQuoteGuestCartRepositoryV1GetGet

> *Tags:*  ``` Skips Authentication ``` 

> Enable a guest user to return information for a specified cart.


```php
function getQuoteGuestCartRepositoryV1GetGet($cartId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$cartId = 'cartId';

$result = $quoteGuestCartRepositoryV1->getQuoteGuestCartRepositoryV1GetGet($cartId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="quote_guest_cart_management_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".QuoteGuestCartManagementV1Controller") QuoteGuestCartManagementV1Controller

### Get singleton instance

The singleton instance of the ``` QuoteGuestCartManagementV1Controller ``` class can be accessed from the API Client.

```php
$quoteGuestCartManagementV1 = $client->getQuoteGuestCartManagementV1();
```

### <a name="update_quote_guest_cart_management_v1_assign_customer_put"></a>![Method: ](https://apidocs.io/img/method.png ".QuoteGuestCartManagementV1Controller.updateQuoteGuestCartManagementV1AssignCustomerPut") updateQuoteGuestCartManagementV1AssignCustomerPut

> *Tags:*  ``` Skips Authentication ``` 

> Assign a specified customer to a specified shopping cart.


```php
function updateQuoteGuestCartManagementV1AssignCustomerPut(
        $cartId,
        $quoteGuestCartManagementV1AssignCustomerPutBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | The cart ID. |
| quoteGuestCartManagementV1AssignCustomerPutBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$cartId = 'cartId';
$quoteGuestCartManagementV1AssignCustomerPutBody = new QuoteGuestCartManagementV1AssignCustomerPutBody();

$result = $quoteGuestCartManagementV1->updateQuoteGuestCartManagementV1AssignCustomerPut($cartId, $quoteGuestCartManagementV1AssignCustomerPutBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_quote_guest_cart_management_v1_create_empty_cart_post"></a>![Method: ](https://apidocs.io/img/method.png ".QuoteGuestCartManagementV1Controller.createQuoteGuestCartManagementV1CreateEmptyCartPost") createQuoteGuestCartManagementV1CreateEmptyCartPost

> *Tags:*  ``` Skips Authentication ``` 

> Enable an customer or guest user to create an empty cart and quote for an anonymous customer.


```php
function createQuoteGuestCartManagementV1CreateEmptyCartPost()
```

#### Example Usage

```php

$result = $quoteGuestCartManagementV1->createQuoteGuestCartManagementV1CreateEmptyCartPost();

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 0 | Unexpected error |



### <a name="update_quote_guest_cart_management_v1_place_order_put"></a>![Method: ](https://apidocs.io/img/method.png ".QuoteGuestCartManagementV1Controller.updateQuoteGuestCartManagementV1PlaceOrderPut") updateQuoteGuestCartManagementV1PlaceOrderPut

> *Tags:*  ``` Skips Authentication ``` 

> Place an order for a specified cart.


```php
function updateQuoteGuestCartManagementV1PlaceOrderPut(
        $cartId,
        $quoteGuestCartManagementV1PlaceOrderPutBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | The cart ID. |
| quoteGuestCartManagementV1PlaceOrderPutBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$cartId = 'cartId';
$quoteGuestCartManagementV1PlaceOrderPutBody = new QuoteGuestCartManagementV1PlaceOrderPutBody();

$result = $quoteGuestCartManagementV1->updateQuoteGuestCartManagementV1PlaceOrderPut($cartId, $quoteGuestCartManagementV1PlaceOrderPutBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="quote_shipping_method_management_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".QuoteShippingMethodManagementV1Controller") QuoteShippingMethodManagementV1Controller

### Get singleton instance

The singleton instance of the ``` QuoteShippingMethodManagementV1Controller ``` class can be accessed from the API Client.

```php
$quoteShippingMethodManagementV1 = $client->getQuoteShippingMethodManagementV1();
```

### <a name="get_quote_shipping_method_management_v1_get_list_get"></a>![Method: ](https://apidocs.io/img/method.png ".QuoteShippingMethodManagementV1Controller.getQuoteShippingMethodManagementV1GetListGet") getQuoteShippingMethodManagementV1GetListGet

> *Tags:*  ``` Skips Authentication ``` 

> Lists applicable shipping methods for a specified quote.


```php
function getQuoteShippingMethodManagementV1GetListGet($cartId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | The shopping cart ID. |



#### Example Usage

```php
$cartId = 222;

$result = $quoteShippingMethodManagementV1->getQuoteShippingMethodManagementV1GetListGet($cartId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_quote_shipping_method_management_v1_estimate_by_address_id_post"></a>![Method: ](https://apidocs.io/img/method.png ".QuoteShippingMethodManagementV1Controller.createQuoteShippingMethodManagementV1EstimateByAddressIdPost") createQuoteShippingMethodManagementV1EstimateByAddressIdPost

> *Tags:*  ``` Skips Authentication ``` 

> Estimate shipping


```php
function createQuoteShippingMethodManagementV1EstimateByAddressIdPost(
        $cartId,
        $quoteShippingMethodManagementV1EstimateByAddressIdPostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | The shopping cart ID. |
| quoteShippingMethodManagementV1EstimateByAddressIdPostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$cartId = 222;
$quoteShippingMethodManagementV1EstimateByAddressIdPostBody = new QuoteShippingMethodManagementV1EstimateByAddressIdPostBody();

$result = $quoteShippingMethodManagementV1->createQuoteShippingMethodManagementV1EstimateByAddressIdPost($cartId, $quoteShippingMethodManagementV1EstimateByAddressIdPostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="get_quote_shipping_method_management_v1_get_list_get1"></a>![Method: ](https://apidocs.io/img/method.png ".QuoteShippingMethodManagementV1Controller.getQuoteShippingMethodManagementV1GetListGet1") getQuoteShippingMethodManagementV1GetListGet1

> *Tags:*  ``` Skips Authentication ``` 

> Lists applicable shipping methods for a specified quote.


```php
function getQuoteShippingMethodManagementV1GetListGet1()
```

#### Example Usage

```php

$result = $quoteShippingMethodManagementV1->getQuoteShippingMethodManagementV1GetListGet1();

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="quote_shipment_estimation_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".QuoteShipmentEstimationV1Controller") QuoteShipmentEstimationV1Controller

### Get singleton instance

The singleton instance of the ``` QuoteShipmentEstimationV1Controller ``` class can be accessed from the API Client.

```php
$quoteShipmentEstimationV1 = $client->getQuoteShipmentEstimationV1();
```

### <a name="create_quote_shipment_estimation_v1_estimate_by_extended_address_post"></a>![Method: ](https://apidocs.io/img/method.png ".QuoteShipmentEstimationV1Controller.createQuoteShipmentEstimationV1EstimateByExtendedAddressPost") createQuoteShipmentEstimationV1EstimateByExtendedAddressPost

> *Tags:*  ``` Skips Authentication ``` 

> Estimate shipping by address and return list of available shipping methods


```php
function createQuoteShipmentEstimationV1EstimateByExtendedAddressPost(
        $cartId,
        $quoteShipmentEstimationV1EstimateByExtendedAddressPostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | TODO: Add a parameter description |
| quoteShipmentEstimationV1EstimateByExtendedAddressPostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$cartId = 'cartId';
$quoteShipmentEstimationV1EstimateByExtendedAddressPostBody = new QuoteShipmentEstimationV1EstimateByExtendedAddressPostBody();

$result = $quoteShipmentEstimationV1->createQuoteShipmentEstimationV1EstimateByExtendedAddressPost($cartId, $quoteShipmentEstimationV1EstimateByExtendedAddressPostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_quote_shipment_estimation_v1_estimate_by_extended_address_post1"></a>![Method: ](https://apidocs.io/img/method.png ".QuoteShipmentEstimationV1Controller.createQuoteShipmentEstimationV1EstimateByExtendedAddressPost1") createQuoteShipmentEstimationV1EstimateByExtendedAddressPost1

> *Tags:*  ``` Skips Authentication ``` 

> Estimate shipping by address and return list of available shipping methods


```php
function createQuoteShipmentEstimationV1EstimateByExtendedAddressPost1($quoteShipmentEstimationV1EstimateByExtendedAddressPostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| quoteShipmentEstimationV1EstimateByExtendedAddressPostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$quoteShipmentEstimationV1EstimateByExtendedAddressPostBody = new QuoteShipmentEstimationV1EstimateByExtendedAddressPostBody();

$result = $quoteShipmentEstimationV1->createQuoteShipmentEstimationV1EstimateByExtendedAddressPost1($quoteShipmentEstimationV1EstimateByExtendedAddressPostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="temando_shipping_quote_shipping_method_management_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".TemandoShippingQuoteShippingMethodManagementV1Controller") TemandoShippingQuoteShippingMethodManagementV1Controller

### Get singleton instance

The singleton instance of the ``` TemandoShippingQuoteShippingMethodManagementV1Controller ``` class can be accessed from the API Client.

```php
$temandoShippingQuoteShippingMethodManagementV1 = $client->getTemandoShippingQuoteShippingMethodManagementV1();
```

### <a name="create_temando_shipping_quote_shipping_method_management_v1_estimate_by_address_id_post"></a>![Method: ](https://apidocs.io/img/method.png ".TemandoShippingQuoteShippingMethodManagementV1Controller.createTemandoShippingQuoteShippingMethodManagementV1EstimateByAddressIdPost") createTemandoShippingQuoteShippingMethodManagementV1EstimateByAddressIdPost

> *Tags:*  ``` Skips Authentication ``` 

> Estimate shipping with extension attributes


```php
function createTemandoShippingQuoteShippingMethodManagementV1EstimateByAddressIdPost($temandoShippingQuoteShippingMethodManagementV1EstimateByAddressIdPostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| temandoShippingQuoteShippingMethodManagementV1EstimateByAddressIdPostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$temandoShippingQuoteShippingMethodManagementV1EstimateByAddressIdPostBody = new TemandoShippingQuoteShippingMethodManagementV1EstimateByAddressIdPostBody();

$result = $temandoShippingQuoteShippingMethodManagementV1->createTemandoShippingQuoteShippingMethodManagementV1EstimateByAddressIdPost($temandoShippingQuoteShippingMethodManagementV1EstimateByAddressIdPostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="quote_guest_shipping_method_management_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".QuoteGuestShippingMethodManagementV1Controller") QuoteGuestShippingMethodManagementV1Controller

### Get singleton instance

The singleton instance of the ``` QuoteGuestShippingMethodManagementV1Controller ``` class can be accessed from the API Client.

```php
$quoteGuestShippingMethodManagementV1 = $client->getQuoteGuestShippingMethodManagementV1();
```

### <a name="get_quote_guest_shipping_method_management_v1_get_list_get"></a>![Method: ](https://apidocs.io/img/method.png ".QuoteGuestShippingMethodManagementV1Controller.getQuoteGuestShippingMethodManagementV1GetListGet") getQuoteGuestShippingMethodManagementV1GetListGet

> *Tags:*  ``` Skips Authentication ``` 

> List applicable shipping methods for a specified quote.


```php
function getQuoteGuestShippingMethodManagementV1GetListGet($cartId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | The shopping cart ID. |



#### Example Usage

```php
$cartId = 'cartId';

$result = $quoteGuestShippingMethodManagementV1->getQuoteGuestShippingMethodManagementV1GetListGet($cartId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="quote_guest_shipment_estimation_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".QuoteGuestShipmentEstimationV1Controller") QuoteGuestShipmentEstimationV1Controller

### Get singleton instance

The singleton instance of the ``` QuoteGuestShipmentEstimationV1Controller ``` class can be accessed from the API Client.

```php
$quoteGuestShipmentEstimationV1 = $client->getQuoteGuestShipmentEstimationV1();
```

### <a name="create_quote_guest_shipment_estimation_v1_estimate_by_extended_address_post"></a>![Method: ](https://apidocs.io/img/method.png ".QuoteGuestShipmentEstimationV1Controller.createQuoteGuestShipmentEstimationV1EstimateByExtendedAddressPost") createQuoteGuestShipmentEstimationV1EstimateByExtendedAddressPost

> *Tags:*  ``` Skips Authentication ``` 

> Estimate shipping by address and return list of available shipping methods


```php
function createQuoteGuestShipmentEstimationV1EstimateByExtendedAddressPost(
        $cartId,
        $quoteGuestShipmentEstimationV1EstimateByExtendedAddressPostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | TODO: Add a parameter description |
| quoteGuestShipmentEstimationV1EstimateByExtendedAddressPostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$cartId = 'cartId';
$quoteGuestShipmentEstimationV1EstimateByExtendedAddressPostBody = new QuoteGuestShipmentEstimationV1EstimateByExtendedAddressPostBody();

$result = $quoteGuestShipmentEstimationV1->createQuoteGuestShipmentEstimationV1EstimateByExtendedAddressPost($cartId, $quoteGuestShipmentEstimationV1EstimateByExtendedAddressPostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="quote_cart_item_repository_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".QuoteCartItemRepositoryV1Controller") QuoteCartItemRepositoryV1Controller

### Get singleton instance

The singleton instance of the ``` QuoteCartItemRepositoryV1Controller ``` class can be accessed from the API Client.

```php
$quoteCartItemRepositoryV1 = $client->getQuoteCartItemRepositoryV1();
```

### <a name="get_quote_cart_item_repository_v1_get_list_get"></a>![Method: ](https://apidocs.io/img/method.png ".QuoteCartItemRepositoryV1Controller.getQuoteCartItemRepositoryV1GetListGet") getQuoteCartItemRepositoryV1GetListGet

> *Tags:*  ``` Skips Authentication ``` 

> Lists items that are assigned to a specified cart.


```php
function getQuoteCartItemRepositoryV1GetListGet($cartId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | The cart ID. |



#### Example Usage

```php
$cartId = 8;

$result = $quoteCartItemRepositoryV1->getQuoteCartItemRepositoryV1GetListGet($cartId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_quote_cart_item_repository_v1_save_post"></a>![Method: ](https://apidocs.io/img/method.png ".QuoteCartItemRepositoryV1Controller.createQuoteCartItemRepositoryV1SavePost") createQuoteCartItemRepositoryV1SavePost

> *Tags:*  ``` Skips Authentication ``` 

> Add/update the specified cart item.


```php
function createQuoteCartItemRepositoryV1SavePost(
        $quoteId,
        $quoteCartItemRepositoryV1SavePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| quoteId |  ``` Required ```  | TODO: Add a parameter description |
| quoteCartItemRepositoryV1SavePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$quoteId = 'quoteId';
$quoteCartItemRepositoryV1SavePostBody = new QuoteCartItemRepositoryV1SavePostBody();

$result = $quoteCartItemRepositoryV1->createQuoteCartItemRepositoryV1SavePost($quoteId, $quoteCartItemRepositoryV1SavePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="update_quote_cart_item_repository_v1_save_put"></a>![Method: ](https://apidocs.io/img/method.png ".QuoteCartItemRepositoryV1Controller.updateQuoteCartItemRepositoryV1SavePut") updateQuoteCartItemRepositoryV1SavePut

> *Tags:*  ``` Skips Authentication ``` 

> Add/update the specified cart item.


```php
function updateQuoteCartItemRepositoryV1SavePut(
        $cartId,
        $itemId,
        $quoteCartItemRepositoryV1SavePutBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | TODO: Add a parameter description |
| itemId |  ``` Required ```  | TODO: Add a parameter description |
| quoteCartItemRepositoryV1SavePutBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$cartId = 'cartId';
$itemId = 'itemId';
$quoteCartItemRepositoryV1SavePutBody = new QuoteCartItemRepositoryV1SavePostBody();

$result = $quoteCartItemRepositoryV1->updateQuoteCartItemRepositoryV1SavePut($cartId, $itemId, $quoteCartItemRepositoryV1SavePutBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="delete_quote_cart_item_repository_v1_delete_by_id_delete"></a>![Method: ](https://apidocs.io/img/method.png ".QuoteCartItemRepositoryV1Controller.deleteQuoteCartItemRepositoryV1DeleteByIdDelete") deleteQuoteCartItemRepositoryV1DeleteByIdDelete

> *Tags:*  ``` Skips Authentication ``` 

> Removes the specified item from the specified cart.


```php
function deleteQuoteCartItemRepositoryV1DeleteByIdDelete(
        $cartId,
        $itemId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | The cart ID. |
| itemId |  ``` Required ```  | The item ID of the item to be removed. |



#### Example Usage

```php
$cartId = 8;
$itemId = 8;

$result = $quoteCartItemRepositoryV1->deleteQuoteCartItemRepositoryV1DeleteByIdDelete($cartId, $itemId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="get_quote_cart_item_repository_v1_get_list_get1"></a>![Method: ](https://apidocs.io/img/method.png ".QuoteCartItemRepositoryV1Controller.getQuoteCartItemRepositoryV1GetListGet1") getQuoteCartItemRepositoryV1GetListGet1

> *Tags:*  ``` Skips Authentication ``` 

> Lists items that are assigned to a specified cart.


```php
function getQuoteCartItemRepositoryV1GetListGet1()
```

#### Example Usage

```php

$result = $quoteCartItemRepositoryV1->getQuoteCartItemRepositoryV1GetListGet1();

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_quote_cart_item_repository_v1_save_post1"></a>![Method: ](https://apidocs.io/img/method.png ".QuoteCartItemRepositoryV1Controller.createQuoteCartItemRepositoryV1SavePost1") createQuoteCartItemRepositoryV1SavePost1

> *Tags:*  ``` Skips Authentication ``` 

> Add/update the specified cart item.


```php
function createQuoteCartItemRepositoryV1SavePost1($quoteCartItemRepositoryV1SavePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| quoteCartItemRepositoryV1SavePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$quoteCartItemRepositoryV1SavePostBody = new QuoteCartItemRepositoryV1SavePostBody();

$result = $quoteCartItemRepositoryV1->createQuoteCartItemRepositoryV1SavePost1($quoteCartItemRepositoryV1SavePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="update_quote_cart_item_repository_v1_save_put1"></a>![Method: ](https://apidocs.io/img/method.png ".QuoteCartItemRepositoryV1Controller.updateQuoteCartItemRepositoryV1SavePut1") updateQuoteCartItemRepositoryV1SavePut1

> *Tags:*  ``` Skips Authentication ``` 

> Add/update the specified cart item.


```php
function updateQuoteCartItemRepositoryV1SavePut1(
        $itemId,
        $quoteCartItemRepositoryV1SavePutBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| itemId |  ``` Required ```  | TODO: Add a parameter description |
| quoteCartItemRepositoryV1SavePutBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$itemId = 'itemId';
$quoteCartItemRepositoryV1SavePutBody = new QuoteCartItemRepositoryV1SavePostBody();

$result = $quoteCartItemRepositoryV1->updateQuoteCartItemRepositoryV1SavePut1($itemId, $quoteCartItemRepositoryV1SavePutBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="delete_quote_cart_item_repository_v1_delete_by_id_delete1"></a>![Method: ](https://apidocs.io/img/method.png ".QuoteCartItemRepositoryV1Controller.deleteQuoteCartItemRepositoryV1DeleteByIdDelete1") deleteQuoteCartItemRepositoryV1DeleteByIdDelete1

> *Tags:*  ``` Skips Authentication ``` 

> Removes the specified item from the specified cart.


```php
function deleteQuoteCartItemRepositoryV1DeleteByIdDelete1($itemId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| itemId |  ``` Required ```  | The item ID of the item to be removed. |



#### Example Usage

```php
$itemId = 8;

$result = $quoteCartItemRepositoryV1->deleteQuoteCartItemRepositoryV1DeleteByIdDelete1($itemId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="quote_guest_cart_item_repository_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".QuoteGuestCartItemRepositoryV1Controller") QuoteGuestCartItemRepositoryV1Controller

### Get singleton instance

The singleton instance of the ``` QuoteGuestCartItemRepositoryV1Controller ``` class can be accessed from the API Client.

```php
$quoteGuestCartItemRepositoryV1 = $client->getQuoteGuestCartItemRepositoryV1();
```

### <a name="get_quote_guest_cart_item_repository_v1_get_list_get"></a>![Method: ](https://apidocs.io/img/method.png ".QuoteGuestCartItemRepositoryV1Controller.getQuoteGuestCartItemRepositoryV1GetListGet") getQuoteGuestCartItemRepositoryV1GetListGet

> *Tags:*  ``` Skips Authentication ``` 

> List items that are assigned to a specified cart.


```php
function getQuoteGuestCartItemRepositoryV1GetListGet($cartId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | The cart ID. |



#### Example Usage

```php
$cartId = 'cartId';

$result = $quoteGuestCartItemRepositoryV1->getQuoteGuestCartItemRepositoryV1GetListGet($cartId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 0 | Unexpected error |



### <a name="create_quote_guest_cart_item_repository_v1_save_post"></a>![Method: ](https://apidocs.io/img/method.png ".QuoteGuestCartItemRepositoryV1Controller.createQuoteGuestCartItemRepositoryV1SavePost") createQuoteGuestCartItemRepositoryV1SavePost

> *Tags:*  ``` Skips Authentication ``` 

> Add/update the specified cart item.


```php
function createQuoteGuestCartItemRepositoryV1SavePost(
        $cartId,
        $quoteGuestCartItemRepositoryV1SavePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | TODO: Add a parameter description |
| quoteGuestCartItemRepositoryV1SavePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$cartId = 'cartId';
$quoteGuestCartItemRepositoryV1SavePostBody = new QuoteGuestCartItemRepositoryV1SavePostBody();

$result = $quoteGuestCartItemRepositoryV1->createQuoteGuestCartItemRepositoryV1SavePost($cartId, $quoteGuestCartItemRepositoryV1SavePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 0 | Unexpected error |



### <a name="update_quote_guest_cart_item_repository_v1_save_put"></a>![Method: ](https://apidocs.io/img/method.png ".QuoteGuestCartItemRepositoryV1Controller.updateQuoteGuestCartItemRepositoryV1SavePut") updateQuoteGuestCartItemRepositoryV1SavePut

> *Tags:*  ``` Skips Authentication ``` 

> Add/update the specified cart item.


```php
function updateQuoteGuestCartItemRepositoryV1SavePut(
        $cartId,
        $itemId,
        $quoteGuestCartItemRepositoryV1SavePutBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | TODO: Add a parameter description |
| itemId |  ``` Required ```  | TODO: Add a parameter description |
| quoteGuestCartItemRepositoryV1SavePutBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$cartId = 'cartId';
$itemId = 'itemId';
$quoteGuestCartItemRepositoryV1SavePutBody = new QuoteGuestCartItemRepositoryV1SavePostBody();

$result = $quoteGuestCartItemRepositoryV1->updateQuoteGuestCartItemRepositoryV1SavePut($cartId, $itemId, $quoteGuestCartItemRepositoryV1SavePutBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 0 | Unexpected error |



### <a name="delete_quote_guest_cart_item_repository_v1_delete_by_id_delete"></a>![Method: ](https://apidocs.io/img/method.png ".QuoteGuestCartItemRepositoryV1Controller.deleteQuoteGuestCartItemRepositoryV1DeleteByIdDelete") deleteQuoteGuestCartItemRepositoryV1DeleteByIdDelete

> *Tags:*  ``` Skips Authentication ``` 

> Remove the specified item from the specified cart.


```php
function deleteQuoteGuestCartItemRepositoryV1DeleteByIdDelete(
        $cartId,
        $itemId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | The cart ID. |
| itemId |  ``` Required ```  | The item ID of the item to be removed. |



#### Example Usage

```php
$cartId = 'cartId';
$itemId = 8;

$result = $quoteGuestCartItemRepositoryV1->deleteQuoteGuestCartItemRepositoryV1DeleteByIdDelete($cartId, $itemId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="quote_payment_method_management_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".QuotePaymentMethodManagementV1Controller") QuotePaymentMethodManagementV1Controller

### Get singleton instance

The singleton instance of the ``` QuotePaymentMethodManagementV1Controller ``` class can be accessed from the API Client.

```php
$quotePaymentMethodManagementV1 = $client->getQuotePaymentMethodManagementV1();
```

### <a name="get_quote_payment_method_management_v1_get_get"></a>![Method: ](https://apidocs.io/img/method.png ".QuotePaymentMethodManagementV1Controller.getQuotePaymentMethodManagementV1GetGet") getQuotePaymentMethodManagementV1GetGet

> *Tags:*  ``` Skips Authentication ``` 

> Returns the payment method for a specified shopping cart.


```php
function getQuotePaymentMethodManagementV1GetGet($cartId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | The cart ID. |



#### Example Usage

```php
$cartId = 8;

$result = $quotePaymentMethodManagementV1->getQuotePaymentMethodManagementV1GetGet($cartId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="update_quote_payment_method_management_v1_set_put"></a>![Method: ](https://apidocs.io/img/method.png ".QuotePaymentMethodManagementV1Controller.updateQuotePaymentMethodManagementV1SetPut") updateQuotePaymentMethodManagementV1SetPut

> *Tags:*  ``` Skips Authentication ``` 

> Adds a specified payment method to a specified shopping cart.


```php
function updateQuotePaymentMethodManagementV1SetPut(
        $cartId,
        $quotePaymentMethodManagementV1SetPutBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | The cart ID. |
| quotePaymentMethodManagementV1SetPutBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$cartId = 8;
$quotePaymentMethodManagementV1SetPutBody = new QuotePaymentMethodManagementV1SetPutBody();

$result = $quotePaymentMethodManagementV1->updateQuotePaymentMethodManagementV1SetPut($cartId, $quotePaymentMethodManagementV1SetPutBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="get_quote_payment_method_management_v1_get_list_get"></a>![Method: ](https://apidocs.io/img/method.png ".QuotePaymentMethodManagementV1Controller.getQuotePaymentMethodManagementV1GetListGet") getQuotePaymentMethodManagementV1GetListGet

> *Tags:*  ``` Skips Authentication ``` 

> Lists available payment methods for a specified shopping cart. This call returns an array of objects, but detailed information about each object’s attributes might not be included.  See http://devdocs.magento.com/codelinks/attributes.html#PaymentMethodManagementInterface to determine which call to use to get detailed information about all attributes for an object.


```php
function getQuotePaymentMethodManagementV1GetListGet($cartId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | The cart ID. |



#### Example Usage

```php
$cartId = 8;

$result = $quotePaymentMethodManagementV1->getQuotePaymentMethodManagementV1GetListGet($cartId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="get_quote_payment_method_management_v1_get_get1"></a>![Method: ](https://apidocs.io/img/method.png ".QuotePaymentMethodManagementV1Controller.getQuotePaymentMethodManagementV1GetGet1") getQuotePaymentMethodManagementV1GetGet1

> *Tags:*  ``` Skips Authentication ``` 

> Returns the payment method for a specified shopping cart.


```php
function getQuotePaymentMethodManagementV1GetGet1()
```

#### Example Usage

```php

$result = $quotePaymentMethodManagementV1->getQuotePaymentMethodManagementV1GetGet1();

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="update_quote_payment_method_management_v1_set_put1"></a>![Method: ](https://apidocs.io/img/method.png ".QuotePaymentMethodManagementV1Controller.updateQuotePaymentMethodManagementV1SetPut1") updateQuotePaymentMethodManagementV1SetPut1

> *Tags:*  ``` Skips Authentication ``` 

> Adds a specified payment method to a specified shopping cart.


```php
function updateQuotePaymentMethodManagementV1SetPut1($quotePaymentMethodManagementV1SetPutBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| quotePaymentMethodManagementV1SetPutBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$quotePaymentMethodManagementV1SetPutBody = new QuotePaymentMethodManagementV1SetPutBody();

$result = $quotePaymentMethodManagementV1->updateQuotePaymentMethodManagementV1SetPut1($quotePaymentMethodManagementV1SetPutBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="get_quote_payment_method_management_v1_get_list_get1"></a>![Method: ](https://apidocs.io/img/method.png ".QuotePaymentMethodManagementV1Controller.getQuotePaymentMethodManagementV1GetListGet1") getQuotePaymentMethodManagementV1GetListGet1

> *Tags:*  ``` Skips Authentication ``` 

> Lists available payment methods for a specified shopping cart. This call returns an array of objects, but detailed information about each object’s attributes might not be included.  See http://devdocs.magento.com/codelinks/attributes.html#PaymentMethodManagementInterface to determine which call to use to get detailed information about all attributes for an object.


```php
function getQuotePaymentMethodManagementV1GetListGet1()
```

#### Example Usage

```php

$result = $quotePaymentMethodManagementV1->getQuotePaymentMethodManagementV1GetListGet1();

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="quote_guest_payment_method_management_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".QuoteGuestPaymentMethodManagementV1Controller") QuoteGuestPaymentMethodManagementV1Controller

### Get singleton instance

The singleton instance of the ``` QuoteGuestPaymentMethodManagementV1Controller ``` class can be accessed from the API Client.

```php
$quoteGuestPaymentMethodManagementV1 = $client->getQuoteGuestPaymentMethodManagementV1();
```

### <a name="get_quote_guest_payment_method_management_v1_get_get"></a>![Method: ](https://apidocs.io/img/method.png ".QuoteGuestPaymentMethodManagementV1Controller.getQuoteGuestPaymentMethodManagementV1GetGet") getQuoteGuestPaymentMethodManagementV1GetGet

> *Tags:*  ``` Skips Authentication ``` 

> Return the payment method for a specified shopping cart.


```php
function getQuoteGuestPaymentMethodManagementV1GetGet($cartId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | The cart ID. |



#### Example Usage

```php
$cartId = 'cartId';

$result = $quoteGuestPaymentMethodManagementV1->getQuoteGuestPaymentMethodManagementV1GetGet($cartId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 0 | Unexpected error |



### <a name="update_quote_guest_payment_method_management_v1_set_put"></a>![Method: ](https://apidocs.io/img/method.png ".QuoteGuestPaymentMethodManagementV1Controller.updateQuoteGuestPaymentMethodManagementV1SetPut") updateQuoteGuestPaymentMethodManagementV1SetPut

> *Tags:*  ``` Skips Authentication ``` 

> Add a specified payment method to a specified shopping cart.


```php
function updateQuoteGuestPaymentMethodManagementV1SetPut(
        $cartId,
        $quoteGuestPaymentMethodManagementV1SetPutBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | The cart ID. |
| quoteGuestPaymentMethodManagementV1SetPutBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$cartId = 'cartId';
$quoteGuestPaymentMethodManagementV1SetPutBody = new QuoteGuestPaymentMethodManagementV1SetPutBody();

$result = $quoteGuestPaymentMethodManagementV1->updateQuoteGuestPaymentMethodManagementV1SetPut($cartId, $quoteGuestPaymentMethodManagementV1SetPutBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 0 | Unexpected error |



### <a name="get_quote_guest_payment_method_management_v1_get_list_get"></a>![Method: ](https://apidocs.io/img/method.png ".QuoteGuestPaymentMethodManagementV1Controller.getQuoteGuestPaymentMethodManagementV1GetListGet") getQuoteGuestPaymentMethodManagementV1GetListGet

> *Tags:*  ``` Skips Authentication ``` 

> List available payment methods for a specified shopping cart. This call returns an array of objects, but detailed information about each object’s attributes might not be included.  See http://devdocs.magento.com/codelinks/attributes.html#GuestPaymentMethodManagementInterface to determine which call to use to get detailed information about all attributes for an object.


```php
function getQuoteGuestPaymentMethodManagementV1GetListGet($cartId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | The cart ID. |



#### Example Usage

```php
$cartId = 'cartId';

$result = $quoteGuestPaymentMethodManagementV1->getQuoteGuestPaymentMethodManagementV1GetListGet($cartId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="quote_billing_address_management_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".QuoteBillingAddressManagementV1Controller") QuoteBillingAddressManagementV1Controller

### Get singleton instance

The singleton instance of the ``` QuoteBillingAddressManagementV1Controller ``` class can be accessed from the API Client.

```php
$quoteBillingAddressManagementV1 = $client->getQuoteBillingAddressManagementV1();
```

### <a name="get_quote_billing_address_management_v1_get_get"></a>![Method: ](https://apidocs.io/img/method.png ".QuoteBillingAddressManagementV1Controller.getQuoteBillingAddressManagementV1GetGet") getQuoteBillingAddressManagementV1GetGet

> *Tags:*  ``` Skips Authentication ``` 

> Returns the billing address for a specified quote.


```php
function getQuoteBillingAddressManagementV1GetGet($cartId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | The cart ID. |



#### Example Usage

```php
$cartId = 8;

$result = $quoteBillingAddressManagementV1->getQuoteBillingAddressManagementV1GetGet($cartId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_quote_billing_address_management_v1_assign_post"></a>![Method: ](https://apidocs.io/img/method.png ".QuoteBillingAddressManagementV1Controller.createQuoteBillingAddressManagementV1AssignPost") createQuoteBillingAddressManagementV1AssignPost

> *Tags:*  ``` Skips Authentication ``` 

> Assigns a specified billing address to a specified cart.


```php
function createQuoteBillingAddressManagementV1AssignPost(
        $cartId,
        $quoteBillingAddressManagementV1AssignPostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | The cart ID. |
| quoteBillingAddressManagementV1AssignPostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$cartId = 172;
$quoteBillingAddressManagementV1AssignPostBody = new QuoteBillingAddressManagementV1AssignPostBody();

$result = $quoteBillingAddressManagementV1->createQuoteBillingAddressManagementV1AssignPost($cartId, $quoteBillingAddressManagementV1AssignPostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="get_quote_billing_address_management_v1_get_get1"></a>![Method: ](https://apidocs.io/img/method.png ".QuoteBillingAddressManagementV1Controller.getQuoteBillingAddressManagementV1GetGet1") getQuoteBillingAddressManagementV1GetGet1

> *Tags:*  ``` Skips Authentication ``` 

> Returns the billing address for a specified quote.


```php
function getQuoteBillingAddressManagementV1GetGet1()
```

#### Example Usage

```php

$result = $quoteBillingAddressManagementV1->getQuoteBillingAddressManagementV1GetGet1();

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_quote_billing_address_management_v1_assign_post1"></a>![Method: ](https://apidocs.io/img/method.png ".QuoteBillingAddressManagementV1Controller.createQuoteBillingAddressManagementV1AssignPost1") createQuoteBillingAddressManagementV1AssignPost1

> *Tags:*  ``` Skips Authentication ``` 

> Assigns a specified billing address to a specified cart.


```php
function createQuoteBillingAddressManagementV1AssignPost1($quoteBillingAddressManagementV1AssignPostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| quoteBillingAddressManagementV1AssignPostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$quoteBillingAddressManagementV1AssignPostBody = new QuoteBillingAddressManagementV1AssignPostBody();

$result = $quoteBillingAddressManagementV1->createQuoteBillingAddressManagementV1AssignPost1($quoteBillingAddressManagementV1AssignPostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="quote_guest_billing_address_management_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".QuoteGuestBillingAddressManagementV1Controller") QuoteGuestBillingAddressManagementV1Controller

### Get singleton instance

The singleton instance of the ``` QuoteGuestBillingAddressManagementV1Controller ``` class can be accessed from the API Client.

```php
$quoteGuestBillingAddressManagementV1 = $client->getQuoteGuestBillingAddressManagementV1();
```

### <a name="get_quote_guest_billing_address_management_v1_get_get"></a>![Method: ](https://apidocs.io/img/method.png ".QuoteGuestBillingAddressManagementV1Controller.getQuoteGuestBillingAddressManagementV1GetGet") getQuoteGuestBillingAddressManagementV1GetGet

> *Tags:*  ``` Skips Authentication ``` 

> Return the billing address for a specified quote.


```php
function getQuoteGuestBillingAddressManagementV1GetGet($cartId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | The cart ID. |



#### Example Usage

```php
$cartId = 'cartId';

$result = $quoteGuestBillingAddressManagementV1->getQuoteGuestBillingAddressManagementV1GetGet($cartId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 0 | Unexpected error |



### <a name="create_quote_guest_billing_address_management_v1_assign_post"></a>![Method: ](https://apidocs.io/img/method.png ".QuoteGuestBillingAddressManagementV1Controller.createQuoteGuestBillingAddressManagementV1AssignPost") createQuoteGuestBillingAddressManagementV1AssignPost

> *Tags:*  ``` Skips Authentication ``` 

> Assign a specified billing address to a specified cart.


```php
function createQuoteGuestBillingAddressManagementV1AssignPost(
        $cartId,
        $quoteGuestBillingAddressManagementV1AssignPostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | The cart ID. |
| quoteGuestBillingAddressManagementV1AssignPostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$cartId = 'cartId';
$quoteGuestBillingAddressManagementV1AssignPostBody = new QuoteGuestBillingAddressManagementV1AssignPostBody();

$result = $quoteGuestBillingAddressManagementV1->createQuoteGuestBillingAddressManagementV1AssignPost($cartId, $quoteGuestBillingAddressManagementV1AssignPostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="quote_coupon_management_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".QuoteCouponManagementV1Controller") QuoteCouponManagementV1Controller

### Get singleton instance

The singleton instance of the ``` QuoteCouponManagementV1Controller ``` class can be accessed from the API Client.

```php
$quoteCouponManagementV1 = $client->getQuoteCouponManagementV1();
```

### <a name="get_quote_coupon_management_v1_get_get"></a>![Method: ](https://apidocs.io/img/method.png ".QuoteCouponManagementV1Controller.getQuoteCouponManagementV1GetGet") getQuoteCouponManagementV1GetGet

> *Tags:*  ``` Skips Authentication ``` 

> Returns information for a coupon in a specified cart.


```php
function getQuoteCouponManagementV1GetGet($cartId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | The cart ID. |



#### Example Usage

```php
$cartId = 172;

$result = $quoteCouponManagementV1->getQuoteCouponManagementV1GetGet($cartId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="delete_quote_coupon_management_v1_remove_delete"></a>![Method: ](https://apidocs.io/img/method.png ".QuoteCouponManagementV1Controller.deleteQuoteCouponManagementV1RemoveDelete") deleteQuoteCouponManagementV1RemoveDelete

> *Tags:*  ``` Skips Authentication ``` 

> Deletes a coupon from a specified cart.


```php
function deleteQuoteCouponManagementV1RemoveDelete($cartId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | The cart ID. |



#### Example Usage

```php
$cartId = 172;

$result = $quoteCouponManagementV1->deleteQuoteCouponManagementV1RemoveDelete($cartId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="update_quote_coupon_management_v1_set_put"></a>![Method: ](https://apidocs.io/img/method.png ".QuoteCouponManagementV1Controller.updateQuoteCouponManagementV1SetPut") updateQuoteCouponManagementV1SetPut

> *Tags:*  ``` Skips Authentication ``` 

> Adds a coupon by code to a specified cart.


```php
function updateQuoteCouponManagementV1SetPut(
        $cartId,
        $couponCode)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | The cart ID. |
| couponCode |  ``` Required ```  | The coupon code data. |



#### Example Usage

```php
$cartId = 172;
$couponCode = 'couponCode';

$result = $quoteCouponManagementV1->updateQuoteCouponManagementV1SetPut($cartId, $couponCode);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="get_quote_coupon_management_v1_get_get1"></a>![Method: ](https://apidocs.io/img/method.png ".QuoteCouponManagementV1Controller.getQuoteCouponManagementV1GetGet1") getQuoteCouponManagementV1GetGet1

> *Tags:*  ``` Skips Authentication ``` 

> Returns information for a coupon in a specified cart.


```php
function getQuoteCouponManagementV1GetGet1()
```

#### Example Usage

```php

$result = $quoteCouponManagementV1->getQuoteCouponManagementV1GetGet1();

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="delete_quote_coupon_management_v1_remove_delete1"></a>![Method: ](https://apidocs.io/img/method.png ".QuoteCouponManagementV1Controller.deleteQuoteCouponManagementV1RemoveDelete1") deleteQuoteCouponManagementV1RemoveDelete1

> *Tags:*  ``` Skips Authentication ``` 

> Deletes a coupon from a specified cart.


```php
function deleteQuoteCouponManagementV1RemoveDelete1()
```

#### Example Usage

```php

$result = $quoteCouponManagementV1->deleteQuoteCouponManagementV1RemoveDelete1();

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="update_quote_coupon_management_v1_set_put1"></a>![Method: ](https://apidocs.io/img/method.png ".QuoteCouponManagementV1Controller.updateQuoteCouponManagementV1SetPut1") updateQuoteCouponManagementV1SetPut1

> *Tags:*  ``` Skips Authentication ``` 

> Adds a coupon by code to a specified cart.


```php
function updateQuoteCouponManagementV1SetPut1($couponCode)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| couponCode |  ``` Required ```  | The coupon code data. |



#### Example Usage

```php
$couponCode = 'couponCode';

$result = $quoteCouponManagementV1->updateQuoteCouponManagementV1SetPut1($couponCode);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="quote_guest_coupon_management_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".QuoteGuestCouponManagementV1Controller") QuoteGuestCouponManagementV1Controller

### Get singleton instance

The singleton instance of the ``` QuoteGuestCouponManagementV1Controller ``` class can be accessed from the API Client.

```php
$quoteGuestCouponManagementV1 = $client->getQuoteGuestCouponManagementV1();
```

### <a name="get_quote_guest_coupon_management_v1_get_get"></a>![Method: ](https://apidocs.io/img/method.png ".QuoteGuestCouponManagementV1Controller.getQuoteGuestCouponManagementV1GetGet") getQuoteGuestCouponManagementV1GetGet

> *Tags:*  ``` Skips Authentication ``` 

> Return information for a coupon in a specified cart.


```php
function getQuoteGuestCouponManagementV1GetGet($cartId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | The cart ID. |



#### Example Usage

```php
$cartId = 'cartId';

$result = $quoteGuestCouponManagementV1->getQuoteGuestCouponManagementV1GetGet($cartId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 0 | Unexpected error |



### <a name="delete_quote_guest_coupon_management_v1_remove_delete"></a>![Method: ](https://apidocs.io/img/method.png ".QuoteGuestCouponManagementV1Controller.deleteQuoteGuestCouponManagementV1RemoveDelete") deleteQuoteGuestCouponManagementV1RemoveDelete

> *Tags:*  ``` Skips Authentication ``` 

> Delete a coupon from a specified cart.


```php
function deleteQuoteGuestCouponManagementV1RemoveDelete($cartId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | The cart ID. |



#### Example Usage

```php
$cartId = 'cartId';

$result = $quoteGuestCouponManagementV1->deleteQuoteGuestCouponManagementV1RemoveDelete($cartId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 0 | Unexpected error |



### <a name="update_quote_guest_coupon_management_v1_set_put"></a>![Method: ](https://apidocs.io/img/method.png ".QuoteGuestCouponManagementV1Controller.updateQuoteGuestCouponManagementV1SetPut") updateQuoteGuestCouponManagementV1SetPut

> *Tags:*  ``` Skips Authentication ``` 

> Add a coupon by code to a specified cart.


```php
function updateQuoteGuestCouponManagementV1SetPut(
        $cartId,
        $couponCode)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | The cart ID. |
| couponCode |  ``` Required ```  | The coupon code data. |



#### Example Usage

```php
$cartId = 'cartId';
$couponCode = 'couponCode';

$result = $quoteGuestCouponManagementV1->updateQuoteGuestCouponManagementV1SetPut($cartId, $couponCode);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="quote_cart_total_repository_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".QuoteCartTotalRepositoryV1Controller") QuoteCartTotalRepositoryV1Controller

### Get singleton instance

The singleton instance of the ``` QuoteCartTotalRepositoryV1Controller ``` class can be accessed from the API Client.

```php
$quoteCartTotalRepositoryV1 = $client->getQuoteCartTotalRepositoryV1();
```

### <a name="get_quote_cart_total_repository_v1_get_get"></a>![Method: ](https://apidocs.io/img/method.png ".QuoteCartTotalRepositoryV1Controller.getQuoteCartTotalRepositoryV1GetGet") getQuoteCartTotalRepositoryV1GetGet

> *Tags:*  ``` Skips Authentication ``` 

> Returns quote totals data for a specified cart.


```php
function getQuoteCartTotalRepositoryV1GetGet($cartId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | The cart ID. |



#### Example Usage

```php
$cartId = 172;

$result = $quoteCartTotalRepositoryV1->getQuoteCartTotalRepositoryV1GetGet($cartId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="get_quote_cart_total_repository_v1_get_get1"></a>![Method: ](https://apidocs.io/img/method.png ".QuoteCartTotalRepositoryV1Controller.getQuoteCartTotalRepositoryV1GetGet1") getQuoteCartTotalRepositoryV1GetGet1

> *Tags:*  ``` Skips Authentication ``` 

> Returns quote totals data for a specified cart.


```php
function getQuoteCartTotalRepositoryV1GetGet1()
```

#### Example Usage

```php

$result = $quoteCartTotalRepositoryV1->getQuoteCartTotalRepositoryV1GetGet1();

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="quote_guest_cart_total_management_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".QuoteGuestCartTotalManagementV1Controller") QuoteGuestCartTotalManagementV1Controller

### Get singleton instance

The singleton instance of the ``` QuoteGuestCartTotalManagementV1Controller ``` class can be accessed from the API Client.

```php
$quoteGuestCartTotalManagementV1 = $client->getQuoteGuestCartTotalManagementV1();
```

### <a name="update_quote_guest_cart_total_management_v1_collect_totals_put"></a>![Method: ](https://apidocs.io/img/method.png ".QuoteGuestCartTotalManagementV1Controller.updateQuoteGuestCartTotalManagementV1CollectTotalsPut") updateQuoteGuestCartTotalManagementV1CollectTotalsPut

> *Tags:*  ``` Skips Authentication ``` 

> Set shipping/billing methods and additional data for cart and collect totals for guest.


```php
function updateQuoteGuestCartTotalManagementV1CollectTotalsPut(
        $cartId,
        $quoteGuestCartTotalManagementV1CollectTotalsPutBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | The cart ID. |
| quoteGuestCartTotalManagementV1CollectTotalsPutBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$cartId = 'cartId';
$quoteGuestCartTotalManagementV1CollectTotalsPutBody = new QuoteGuestCartTotalManagementV1CollectTotalsPutBody();

$result = $quoteGuestCartTotalManagementV1->updateQuoteGuestCartTotalManagementV1CollectTotalsPut($cartId, $quoteGuestCartTotalManagementV1CollectTotalsPutBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="quote_guest_cart_total_repository_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".QuoteGuestCartTotalRepositoryV1Controller") QuoteGuestCartTotalRepositoryV1Controller

### Get singleton instance

The singleton instance of the ``` QuoteGuestCartTotalRepositoryV1Controller ``` class can be accessed from the API Client.

```php
$quoteGuestCartTotalRepositoryV1 = $client->getQuoteGuestCartTotalRepositoryV1();
```

### <a name="get_quote_guest_cart_total_repository_v1_get_get"></a>![Method: ](https://apidocs.io/img/method.png ".QuoteGuestCartTotalRepositoryV1Controller.getQuoteGuestCartTotalRepositoryV1GetGet") getQuoteGuestCartTotalRepositoryV1GetGet

> *Tags:*  ``` Skips Authentication ``` 

> Return quote totals data for a specified cart.


```php
function getQuoteGuestCartTotalRepositoryV1GetGet($cartId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | The cart ID. |



#### Example Usage

```php
$cartId = 'cartId';

$result = $quoteGuestCartTotalRepositoryV1->getQuoteGuestCartTotalRepositoryV1GetGet($cartId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="quote_cart_total_management_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".QuoteCartTotalManagementV1Controller") QuoteCartTotalManagementV1Controller

### Get singleton instance

The singleton instance of the ``` QuoteCartTotalManagementV1Controller ``` class can be accessed from the API Client.

```php
$quoteCartTotalManagementV1 = $client->getQuoteCartTotalManagementV1();
```

### <a name="update_quote_cart_total_management_v1_collect_totals_put"></a>![Method: ](https://apidocs.io/img/method.png ".QuoteCartTotalManagementV1Controller.updateQuoteCartTotalManagementV1CollectTotalsPut") updateQuoteCartTotalManagementV1CollectTotalsPut

> *Tags:*  ``` Skips Authentication ``` 

> Set shipping/billing methods and additional data for cart and collect totals.


```php
function updateQuoteCartTotalManagementV1CollectTotalsPut($quoteCartTotalManagementV1CollectTotalsPutBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| quoteCartTotalManagementV1CollectTotalsPutBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$quoteCartTotalManagementV1CollectTotalsPutBody = new QuoteCartTotalManagementV1CollectTotalsPutBody();

$result = $quoteCartTotalManagementV1->updateQuoteCartTotalManagementV1CollectTotalsPut($quoteCartTotalManagementV1CollectTotalsPutBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="search_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".SearchV1Controller") SearchV1Controller

### Get singleton instance

The singleton instance of the ``` SearchV1Controller ``` class can be accessed from the API Client.

```php
$searchV1 = $client->getSearchV1();
```

### <a name="search_v1_search_get"></a>![Method: ](https://apidocs.io/img/method.png ".SearchV1Controller.searchV1SearchGet") searchV1SearchGet

> *Tags:*  ``` Skips Authentication ``` 

> Make Full Text Search and return found Documents


```php
function searchV1SearchGet(
        $searchCriteriaRequestName = null,
        $searchCriteriaFilterGroupsFiltersField = null,
        $searchCriteriaFilterGroupsFiltersValue = null,
        $searchCriteriaFilterGroupsFiltersConditionType = null,
        $searchCriteriaSortOrdersField = null,
        $searchCriteriaSortOrdersDirection = null,
        $searchCriteriaPageSize = null,
        $searchCriteriaCurrentPage = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| searchCriteriaRequestName |  ``` Optional ```  | TODO: Add a parameter description |
| searchCriteriaFilterGroupsFiltersField |  ``` Optional ```  | Field |
| searchCriteriaFilterGroupsFiltersValue |  ``` Optional ```  | Value |
| searchCriteriaFilterGroupsFiltersConditionType |  ``` Optional ```  | Condition type |
| searchCriteriaSortOrdersField |  ``` Optional ```  | Sorting field. |
| searchCriteriaSortOrdersDirection |  ``` Optional ```  | Sorting direction. |
| searchCriteriaPageSize |  ``` Optional ```  | Page size. |
| searchCriteriaCurrentPage |  ``` Optional ```  | Current page. |



#### Example Usage

```php
$searchCriteriaRequestName = 'searchCriteria[requestName]';
$searchCriteriaFilterGroupsFiltersField = 'searchCriteria[filterGroups][][filters][][field]';
$searchCriteriaFilterGroupsFiltersValue = 'searchCriteria[filterGroups][][filters][][value]';
$searchCriteriaFilterGroupsFiltersConditionType = 'searchCriteria[filterGroups][][filters][][conditionType]';
$searchCriteriaSortOrdersField = 'searchCriteria[sortOrders][][field]';
$searchCriteriaSortOrdersDirection = 'searchCriteria[sortOrders][][direction]';
$searchCriteriaPageSize = 214;
$searchCriteriaCurrentPage = 214;

$result = $searchV1->searchV1SearchGet($searchCriteriaRequestName, $searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="sales_order_repository_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".SalesOrderRepositoryV1Controller") SalesOrderRepositoryV1Controller

### Get singleton instance

The singleton instance of the ``` SalesOrderRepositoryV1Controller ``` class can be accessed from the API Client.

```php
$salesOrderRepositoryV1 = $client->getSalesOrderRepositoryV1();
```

### <a name="get_sales_order_repository_v1_get_get"></a>![Method: ](https://apidocs.io/img/method.png ".SalesOrderRepositoryV1Controller.getSalesOrderRepositoryV1GetGet") getSalesOrderRepositoryV1GetGet

> *Tags:*  ``` Skips Authentication ``` 

> Loads a specified order.


```php
function getSalesOrderRepositoryV1GetGet($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | The order ID. |



#### Example Usage

```php
$id = 214;

$result = $salesOrderRepositoryV1->getSalesOrderRepositoryV1GetGet($id);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="get_sales_order_repository_v1_get_list_get"></a>![Method: ](https://apidocs.io/img/method.png ".SalesOrderRepositoryV1Controller.getSalesOrderRepositoryV1GetListGet") getSalesOrderRepositoryV1GetListGet

> *Tags:*  ``` Skips Authentication ``` 

> Lists orders that match specified search criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#OrderRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.


```php
function getSalesOrderRepositoryV1GetListGet(
        $searchCriteriaFilterGroupsFiltersField = null,
        $searchCriteriaFilterGroupsFiltersValue = null,
        $searchCriteriaFilterGroupsFiltersConditionType = null,
        $searchCriteriaSortOrdersField = null,
        $searchCriteriaSortOrdersDirection = null,
        $searchCriteriaPageSize = null,
        $searchCriteriaCurrentPage = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| searchCriteriaFilterGroupsFiltersField |  ``` Optional ```  | Field |
| searchCriteriaFilterGroupsFiltersValue |  ``` Optional ```  | Value |
| searchCriteriaFilterGroupsFiltersConditionType |  ``` Optional ```  | Condition type |
| searchCriteriaSortOrdersField |  ``` Optional ```  | Sorting field. |
| searchCriteriaSortOrdersDirection |  ``` Optional ```  | Sorting direction. |
| searchCriteriaPageSize |  ``` Optional ```  | Page size. |
| searchCriteriaCurrentPage |  ``` Optional ```  | Current page. |



#### Example Usage

```php
$searchCriteriaFilterGroupsFiltersField = 'searchCriteria[filterGroups][][filters][][field]';
$searchCriteriaFilterGroupsFiltersValue = 'searchCriteria[filterGroups][][filters][][value]';
$searchCriteriaFilterGroupsFiltersConditionType = 'searchCriteria[filterGroups][][filters][][conditionType]';
$searchCriteriaSortOrdersField = 'searchCriteria[sortOrders][][field]';
$searchCriteriaSortOrdersDirection = 'searchCriteria[sortOrders][][direction]';
$searchCriteriaPageSize = 214;
$searchCriteriaCurrentPage = 214;

$result = $salesOrderRepositoryV1->getSalesOrderRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="update_sales_order_repository_v1_save_put"></a>![Method: ](https://apidocs.io/img/method.png ".SalesOrderRepositoryV1Controller.updateSalesOrderRepositoryV1SavePut") updateSalesOrderRepositoryV1SavePut

> *Tags:*  ``` Skips Authentication ``` 

> Performs persist operations for a specified order.


```php
function updateSalesOrderRepositoryV1SavePut($salesOrderRepositoryV1SavePutBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| salesOrderRepositoryV1SavePutBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$salesOrderRepositoryV1SavePutBody = new SalesOrderRepositoryV1SavePutBody();

$result = $salesOrderRepositoryV1->updateSalesOrderRepositoryV1SavePut($salesOrderRepositoryV1SavePutBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_sales_order_repository_v1_save_post"></a>![Method: ](https://apidocs.io/img/method.png ".SalesOrderRepositoryV1Controller.createSalesOrderRepositoryV1SavePost") createSalesOrderRepositoryV1SavePost

> *Tags:*  ``` Skips Authentication ``` 

> Performs persist operations for a specified order.


```php
function createSalesOrderRepositoryV1SavePost($salesOrderRepositoryV1SavePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| salesOrderRepositoryV1SavePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$salesOrderRepositoryV1SavePostBody = new SalesOrderRepositoryV1SavePutBody();

$result = $salesOrderRepositoryV1->createSalesOrderRepositoryV1SavePost($salesOrderRepositoryV1SavePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="sales_order_management_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".SalesOrderManagementV1Controller") SalesOrderManagementV1Controller

### Get singleton instance

The singleton instance of the ``` SalesOrderManagementV1Controller ``` class can be accessed from the API Client.

```php
$salesOrderManagementV1 = $client->getSalesOrderManagementV1();
```

### <a name="get_sales_order_management_v1_get_status_get"></a>![Method: ](https://apidocs.io/img/method.png ".SalesOrderManagementV1Controller.getSalesOrderManagementV1GetStatusGet") getSalesOrderManagementV1GetStatusGet

> *Tags:*  ``` Skips Authentication ``` 

> Gets the status for a specified order.


```php
function getSalesOrderManagementV1GetStatusGet($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | The order ID. |



#### Example Usage

```php
$id = 214;

$result = $salesOrderManagementV1->getSalesOrderManagementV1GetStatusGet($id);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_sales_order_management_v1_cancel_post"></a>![Method: ](https://apidocs.io/img/method.png ".SalesOrderManagementV1Controller.createSalesOrderManagementV1CancelPost") createSalesOrderManagementV1CancelPost

> *Tags:*  ``` Skips Authentication ``` 

> Cancels a specified order.


```php
function createSalesOrderManagementV1CancelPost($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | The order ID. |



#### Example Usage

```php
$id = 214;

$result = $salesOrderManagementV1->createSalesOrderManagementV1CancelPost($id);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_sales_order_management_v1_notify_post"></a>![Method: ](https://apidocs.io/img/method.png ".SalesOrderManagementV1Controller.createSalesOrderManagementV1NotifyPost") createSalesOrderManagementV1NotifyPost

> *Tags:*  ``` Skips Authentication ``` 

> Emails a user a specified order.


```php
function createSalesOrderManagementV1NotifyPost($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | The order ID. |



#### Example Usage

```php
$id = 214;

$result = $salesOrderManagementV1->createSalesOrderManagementV1NotifyPost($id);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_sales_order_management_v1_hold_post"></a>![Method: ](https://apidocs.io/img/method.png ".SalesOrderManagementV1Controller.createSalesOrderManagementV1HoldPost") createSalesOrderManagementV1HoldPost

> *Tags:*  ``` Skips Authentication ``` 

> Holds a specified order.


```php
function createSalesOrderManagementV1HoldPost($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | The order ID. |



#### Example Usage

```php
$id = 214;

$result = $salesOrderManagementV1->createSalesOrderManagementV1HoldPost($id);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_sales_order_management_v1_un_hold_post"></a>![Method: ](https://apidocs.io/img/method.png ".SalesOrderManagementV1Controller.createSalesOrderManagementV1UnHoldPost") createSalesOrderManagementV1UnHoldPost

> *Tags:*  ``` Skips Authentication ``` 

> Releases a specified order from hold status.


```php
function createSalesOrderManagementV1UnHoldPost($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | The order ID. |



#### Example Usage

```php
$id = 214;

$result = $salesOrderManagementV1->createSalesOrderManagementV1UnHoldPost($id);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="get_sales_order_management_v1_get_comments_list_get"></a>![Method: ](https://apidocs.io/img/method.png ".SalesOrderManagementV1Controller.getSalesOrderManagementV1GetCommentsListGet") getSalesOrderManagementV1GetCommentsListGet

> *Tags:*  ``` Skips Authentication ``` 

> Lists comments for a specified order.


```php
function getSalesOrderManagementV1GetCommentsListGet($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | The order ID. |



#### Example Usage

```php
$id = 214;

$result = $salesOrderManagementV1->getSalesOrderManagementV1GetCommentsListGet($id);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_sales_order_management_v1_add_comment_post"></a>![Method: ](https://apidocs.io/img/method.png ".SalesOrderManagementV1Controller.createSalesOrderManagementV1AddCommentPost") createSalesOrderManagementV1AddCommentPost

> *Tags:*  ``` Skips Authentication ``` 

> Adds a comment to a specified order.


```php
function createSalesOrderManagementV1AddCommentPost(
        $id,
        $salesOrderManagementV1AddCommentPostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | The order ID. |
| salesOrderManagementV1AddCommentPostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = 214;
$salesOrderManagementV1AddCommentPostBody = new SalesOrderManagementV1AddCommentPostBody();

$result = $salesOrderManagementV1->createSalesOrderManagementV1AddCommentPost($id, $salesOrderManagementV1AddCommentPostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="sales_order_address_repository_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".SalesOrderAddressRepositoryV1Controller") SalesOrderAddressRepositoryV1Controller

### Get singleton instance

The singleton instance of the ``` SalesOrderAddressRepositoryV1Controller ``` class can be accessed from the API Client.

```php
$salesOrderAddressRepositoryV1 = $client->getSalesOrderAddressRepositoryV1();
```

### <a name="update_sales_order_address_repository_v1_save_put"></a>![Method: ](https://apidocs.io/img/method.png ".SalesOrderAddressRepositoryV1Controller.updateSalesOrderAddressRepositoryV1SavePut") updateSalesOrderAddressRepositoryV1SavePut

> *Tags:*  ``` Skips Authentication ``` 

> Performs persist operations for a specified order address.


```php
function updateSalesOrderAddressRepositoryV1SavePut(
        $parentId,
        $salesOrderAddressRepositoryV1SavePutBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| parentId |  ``` Required ```  | TODO: Add a parameter description |
| salesOrderAddressRepositoryV1SavePutBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$parentId = 'parent_id';
$salesOrderAddressRepositoryV1SavePutBody = new SalesOrderAddressRepositoryV1SavePutBody();

$result = $salesOrderAddressRepositoryV1->updateSalesOrderAddressRepositoryV1SavePut($parentId, $salesOrderAddressRepositoryV1SavePutBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="sales_order_item_repository_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".SalesOrderItemRepositoryV1Controller") SalesOrderItemRepositoryV1Controller

### Get singleton instance

The singleton instance of the ``` SalesOrderItemRepositoryV1Controller ``` class can be accessed from the API Client.

```php
$salesOrderItemRepositoryV1 = $client->getSalesOrderItemRepositoryV1();
```

### <a name="get_sales_order_item_repository_v1_get_get"></a>![Method: ](https://apidocs.io/img/method.png ".SalesOrderItemRepositoryV1Controller.getSalesOrderItemRepositoryV1GetGet") getSalesOrderItemRepositoryV1GetGet

> *Tags:*  ``` Skips Authentication ``` 

> Loads a specified order item.


```php
function getSalesOrderItemRepositoryV1GetGet($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | The order item ID. |



#### Example Usage

```php
$id = 214;

$result = $salesOrderItemRepositoryV1->getSalesOrderItemRepositoryV1GetGet($id);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="get_sales_order_item_repository_v1_get_list_get"></a>![Method: ](https://apidocs.io/img/method.png ".SalesOrderItemRepositoryV1Controller.getSalesOrderItemRepositoryV1GetListGet") getSalesOrderItemRepositoryV1GetListGet

> *Tags:*  ``` Skips Authentication ``` 

> Lists order items that match specified search criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#OrderItemRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.


```php
function getSalesOrderItemRepositoryV1GetListGet(
        $searchCriteriaFilterGroupsFiltersField = null,
        $searchCriteriaFilterGroupsFiltersValue = null,
        $searchCriteriaFilterGroupsFiltersConditionType = null,
        $searchCriteriaSortOrdersField = null,
        $searchCriteriaSortOrdersDirection = null,
        $searchCriteriaPageSize = null,
        $searchCriteriaCurrentPage = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| searchCriteriaFilterGroupsFiltersField |  ``` Optional ```  | Field |
| searchCriteriaFilterGroupsFiltersValue |  ``` Optional ```  | Value |
| searchCriteriaFilterGroupsFiltersConditionType |  ``` Optional ```  | Condition type |
| searchCriteriaSortOrdersField |  ``` Optional ```  | Sorting field. |
| searchCriteriaSortOrdersDirection |  ``` Optional ```  | Sorting direction. |
| searchCriteriaPageSize |  ``` Optional ```  | Page size. |
| searchCriteriaCurrentPage |  ``` Optional ```  | Current page. |



#### Example Usage

```php
$searchCriteriaFilterGroupsFiltersField = 'searchCriteria[filterGroups][][filters][][field]';
$searchCriteriaFilterGroupsFiltersValue = 'searchCriteria[filterGroups][][filters][][value]';
$searchCriteriaFilterGroupsFiltersConditionType = 'searchCriteria[filterGroups][][filters][][conditionType]';
$searchCriteriaSortOrdersField = 'searchCriteria[sortOrders][][field]';
$searchCriteriaSortOrdersDirection = 'searchCriteria[sortOrders][][direction]';
$searchCriteriaPageSize = 214;
$searchCriteriaCurrentPage = 214;

$result = $salesOrderItemRepositoryV1->getSalesOrderItemRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="sales_invoice_repository_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".SalesInvoiceRepositoryV1Controller") SalesInvoiceRepositoryV1Controller

### Get singleton instance

The singleton instance of the ``` SalesInvoiceRepositoryV1Controller ``` class can be accessed from the API Client.

```php
$salesInvoiceRepositoryV1 = $client->getSalesInvoiceRepositoryV1();
```

### <a name="get_sales_invoice_repository_v1_get_get"></a>![Method: ](https://apidocs.io/img/method.png ".SalesInvoiceRepositoryV1Controller.getSalesInvoiceRepositoryV1GetGet") getSalesInvoiceRepositoryV1GetGet

> *Tags:*  ``` Skips Authentication ``` 

> Loads a specified invoice.


```php
function getSalesInvoiceRepositoryV1GetGet($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | The invoice ID. |



#### Example Usage

```php
$id = 214;

$result = $salesInvoiceRepositoryV1->getSalesInvoiceRepositoryV1GetGet($id);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="get_sales_invoice_repository_v1_get_list_get"></a>![Method: ](https://apidocs.io/img/method.png ".SalesInvoiceRepositoryV1Controller.getSalesInvoiceRepositoryV1GetListGet") getSalesInvoiceRepositoryV1GetListGet

> *Tags:*  ``` Skips Authentication ``` 

> Lists invoices that match specified search criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#InvoiceRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.


```php
function getSalesInvoiceRepositoryV1GetListGet(
        $searchCriteriaFilterGroupsFiltersField = null,
        $searchCriteriaFilterGroupsFiltersValue = null,
        $searchCriteriaFilterGroupsFiltersConditionType = null,
        $searchCriteriaSortOrdersField = null,
        $searchCriteriaSortOrdersDirection = null,
        $searchCriteriaPageSize = null,
        $searchCriteriaCurrentPage = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| searchCriteriaFilterGroupsFiltersField |  ``` Optional ```  | Field |
| searchCriteriaFilterGroupsFiltersValue |  ``` Optional ```  | Value |
| searchCriteriaFilterGroupsFiltersConditionType |  ``` Optional ```  | Condition type |
| searchCriteriaSortOrdersField |  ``` Optional ```  | Sorting field. |
| searchCriteriaSortOrdersDirection |  ``` Optional ```  | Sorting direction. |
| searchCriteriaPageSize |  ``` Optional ```  | Page size. |
| searchCriteriaCurrentPage |  ``` Optional ```  | Current page. |



#### Example Usage

```php
$searchCriteriaFilterGroupsFiltersField = 'searchCriteria[filterGroups][][filters][][field]';
$searchCriteriaFilterGroupsFiltersValue = 'searchCriteria[filterGroups][][filters][][value]';
$searchCriteriaFilterGroupsFiltersConditionType = 'searchCriteria[filterGroups][][filters][][conditionType]';
$searchCriteriaSortOrdersField = 'searchCriteria[sortOrders][][field]';
$searchCriteriaSortOrdersDirection = 'searchCriteria[sortOrders][][direction]';
$searchCriteriaPageSize = 214;
$searchCriteriaCurrentPage = 214;

$result = $salesInvoiceRepositoryV1->getSalesInvoiceRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_sales_invoice_repository_v1_save_post"></a>![Method: ](https://apidocs.io/img/method.png ".SalesInvoiceRepositoryV1Controller.createSalesInvoiceRepositoryV1SavePost") createSalesInvoiceRepositoryV1SavePost

> *Tags:*  ``` Skips Authentication ``` 

> Performs persist operations for a specified invoice.


```php
function createSalesInvoiceRepositoryV1SavePost($salesInvoiceRepositoryV1SavePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| salesInvoiceRepositoryV1SavePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$salesInvoiceRepositoryV1SavePostBody = new SalesInvoiceRepositoryV1SavePostBody();

$result = $salesInvoiceRepositoryV1->createSalesInvoiceRepositoryV1SavePost($salesInvoiceRepositoryV1SavePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="sales_invoice_management_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".SalesInvoiceManagementV1Controller") SalesInvoiceManagementV1Controller

### Get singleton instance

The singleton instance of the ``` SalesInvoiceManagementV1Controller ``` class can be accessed from the API Client.

```php
$salesInvoiceManagementV1 = $client->getSalesInvoiceManagementV1();
```

### <a name="get_sales_invoice_management_v1_get_comments_list_get"></a>![Method: ](https://apidocs.io/img/method.png ".SalesInvoiceManagementV1Controller.getSalesInvoiceManagementV1GetCommentsListGet") getSalesInvoiceManagementV1GetCommentsListGet

> *Tags:*  ``` Skips Authentication ``` 

> Lists comments for a specified invoice.


```php
function getSalesInvoiceManagementV1GetCommentsListGet($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | The invoice ID. |



#### Example Usage

```php
$id = 214;

$result = $salesInvoiceManagementV1->getSalesInvoiceManagementV1GetCommentsListGet($id);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_sales_invoice_management_v1_notify_post"></a>![Method: ](https://apidocs.io/img/method.png ".SalesInvoiceManagementV1Controller.createSalesInvoiceManagementV1NotifyPost") createSalesInvoiceManagementV1NotifyPost

> *Tags:*  ``` Skips Authentication ``` 

> Emails a user a specified invoice.


```php
function createSalesInvoiceManagementV1NotifyPost($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | The invoice ID. |



#### Example Usage

```php
$id = 214;

$result = $salesInvoiceManagementV1->createSalesInvoiceManagementV1NotifyPost($id);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_sales_invoice_management_v1_set_void_post"></a>![Method: ](https://apidocs.io/img/method.png ".SalesInvoiceManagementV1Controller.createSalesInvoiceManagementV1SetVoidPost") createSalesInvoiceManagementV1SetVoidPost

> *Tags:*  ``` Skips Authentication ``` 

> Voids a specified invoice.


```php
function createSalesInvoiceManagementV1SetVoidPost($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | The invoice ID. |



#### Example Usage

```php
$id = 214;

$result = $salesInvoiceManagementV1->createSalesInvoiceManagementV1SetVoidPost($id);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_sales_invoice_management_v1_set_capture_post"></a>![Method: ](https://apidocs.io/img/method.png ".SalesInvoiceManagementV1Controller.createSalesInvoiceManagementV1SetCapturePost") createSalesInvoiceManagementV1SetCapturePost

> *Tags:*  ``` Skips Authentication ``` 

> Sets invoice capture.


```php
function createSalesInvoiceManagementV1SetCapturePost($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = 214;

$result = $salesInvoiceManagementV1->createSalesInvoiceManagementV1SetCapturePost($id);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="sales_invoice_comment_repository_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".SalesInvoiceCommentRepositoryV1Controller") SalesInvoiceCommentRepositoryV1Controller

### Get singleton instance

The singleton instance of the ``` SalesInvoiceCommentRepositoryV1Controller ``` class can be accessed from the API Client.

```php
$salesInvoiceCommentRepositoryV1 = $client->getSalesInvoiceCommentRepositoryV1();
```

### <a name="create_sales_invoice_comment_repository_v1_save_post"></a>![Method: ](https://apidocs.io/img/method.png ".SalesInvoiceCommentRepositoryV1Controller.createSalesInvoiceCommentRepositoryV1SavePost") createSalesInvoiceCommentRepositoryV1SavePost

> *Tags:*  ``` Skips Authentication ``` 

> Performs persist operations for a specified invoice comment.


```php
function createSalesInvoiceCommentRepositoryV1SavePost($salesInvoiceCommentRepositoryV1SavePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| salesInvoiceCommentRepositoryV1SavePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$salesInvoiceCommentRepositoryV1SavePostBody = new SalesInvoiceCommentRepositoryV1SavePostBody();

$result = $salesInvoiceCommentRepositoryV1->createSalesInvoiceCommentRepositoryV1SavePost($salesInvoiceCommentRepositoryV1SavePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="sales_refund_invoice_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".SalesRefundInvoiceV1Controller") SalesRefundInvoiceV1Controller

### Get singleton instance

The singleton instance of the ``` SalesRefundInvoiceV1Controller ``` class can be accessed from the API Client.

```php
$salesRefundInvoiceV1 = $client->getSalesRefundInvoiceV1();
```

### <a name="create_sales_refund_invoice_v1_execute_post"></a>![Method: ](https://apidocs.io/img/method.png ".SalesRefundInvoiceV1Controller.createSalesRefundInvoiceV1ExecutePost") createSalesRefundInvoiceV1ExecutePost

> *Tags:*  ``` Skips Authentication ``` 

> Create refund for invoice


```php
function createSalesRefundInvoiceV1ExecutePost(
        $invoiceId,
        $salesRefundInvoiceV1ExecutePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| invoiceId |  ``` Required ```  | TODO: Add a parameter description |
| salesRefundInvoiceV1ExecutePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$invoiceId = 122;
$salesRefundInvoiceV1ExecutePostBody = new SalesRefundInvoiceV1ExecutePostBody();

$result = $salesRefundInvoiceV1->createSalesRefundInvoiceV1ExecutePost($invoiceId, $salesRefundInvoiceV1ExecutePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="sales_creditmemo_management_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".SalesCreditmemoManagementV1Controller") SalesCreditmemoManagementV1Controller

### Get singleton instance

The singleton instance of the ``` SalesCreditmemoManagementV1Controller ``` class can be accessed from the API Client.

```php
$salesCreditmemoManagementV1 = $client->getSalesCreditmemoManagementV1();
```

### <a name="get_sales_creditmemo_management_v1_get_comments_list_get"></a>![Method: ](https://apidocs.io/img/method.png ".SalesCreditmemoManagementV1Controller.getSalesCreditmemoManagementV1GetCommentsListGet") getSalesCreditmemoManagementV1GetCommentsListGet

> *Tags:*  ``` Skips Authentication ``` 

> Lists comments for a specified credit memo.


```php
function getSalesCreditmemoManagementV1GetCommentsListGet($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | The credit memo ID. |



#### Example Usage

```php
$id = 122;

$result = $salesCreditmemoManagementV1->getSalesCreditmemoManagementV1GetCommentsListGet($id);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="update_sales_creditmemo_management_v1_cancel_put"></a>![Method: ](https://apidocs.io/img/method.png ".SalesCreditmemoManagementV1Controller.updateSalesCreditmemoManagementV1CancelPut") updateSalesCreditmemoManagementV1CancelPut

> *Tags:*  ``` Skips Authentication ``` 

> Cancels a specified credit memo.


```php
function updateSalesCreditmemoManagementV1CancelPut($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | The credit memo ID. |



#### Example Usage

```php
$id = 122;

$result = $salesCreditmemoManagementV1->updateSalesCreditmemoManagementV1CancelPut($id);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="create_sales_creditmemo_management_v1_notify_post"></a>![Method: ](https://apidocs.io/img/method.png ".SalesCreditmemoManagementV1Controller.createSalesCreditmemoManagementV1NotifyPost") createSalesCreditmemoManagementV1NotifyPost

> *Tags:*  ``` Skips Authentication ``` 

> Emails a user a specified credit memo.


```php
function createSalesCreditmemoManagementV1NotifyPost($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | The credit memo ID. |



#### Example Usage

```php
$id = 122;

$result = $salesCreditmemoManagementV1->createSalesCreditmemoManagementV1NotifyPost($id);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_sales_creditmemo_management_v1_refund_post"></a>![Method: ](https://apidocs.io/img/method.png ".SalesCreditmemoManagementV1Controller.createSalesCreditmemoManagementV1RefundPost") createSalesCreditmemoManagementV1RefundPost

> *Tags:*  ``` Skips Authentication ``` 

> Prepare creditmemo to refund and save it.


```php
function createSalesCreditmemoManagementV1RefundPost($salesCreditmemoManagementV1RefundPostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| salesCreditmemoManagementV1RefundPostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$salesCreditmemoManagementV1RefundPostBody = new SalesCreditmemoManagementV1RefundPostBody();

$result = $salesCreditmemoManagementV1->createSalesCreditmemoManagementV1RefundPost($salesCreditmemoManagementV1RefundPostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="sales_creditmemo_repository_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".SalesCreditmemoRepositoryV1Controller") SalesCreditmemoRepositoryV1Controller

### Get singleton instance

The singleton instance of the ``` SalesCreditmemoRepositoryV1Controller ``` class can be accessed from the API Client.

```php
$salesCreditmemoRepositoryV1 = $client->getSalesCreditmemoRepositoryV1();
```

### <a name="get_sales_creditmemo_repository_v1_get_get"></a>![Method: ](https://apidocs.io/img/method.png ".SalesCreditmemoRepositoryV1Controller.getSalesCreditmemoRepositoryV1GetGet") getSalesCreditmemoRepositoryV1GetGet

> *Tags:*  ``` Skips Authentication ``` 

> Loads a specified credit memo.


```php
function getSalesCreditmemoRepositoryV1GetGet($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | The credit memo ID. |



#### Example Usage

```php
$id = 122;

$result = $salesCreditmemoRepositoryV1->getSalesCreditmemoRepositoryV1GetGet($id);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="get_sales_creditmemo_repository_v1_get_list_get"></a>![Method: ](https://apidocs.io/img/method.png ".SalesCreditmemoRepositoryV1Controller.getSalesCreditmemoRepositoryV1GetListGet") getSalesCreditmemoRepositoryV1GetListGet

> *Tags:*  ``` Skips Authentication ``` 

> Lists credit memos that match specified search criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#CreditmemoRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.


```php
function getSalesCreditmemoRepositoryV1GetListGet(
        $searchCriteriaFilterGroupsFiltersField = null,
        $searchCriteriaFilterGroupsFiltersValue = null,
        $searchCriteriaFilterGroupsFiltersConditionType = null,
        $searchCriteriaSortOrdersField = null,
        $searchCriteriaSortOrdersDirection = null,
        $searchCriteriaPageSize = null,
        $searchCriteriaCurrentPage = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| searchCriteriaFilterGroupsFiltersField |  ``` Optional ```  | Field |
| searchCriteriaFilterGroupsFiltersValue |  ``` Optional ```  | Value |
| searchCriteriaFilterGroupsFiltersConditionType |  ``` Optional ```  | Condition type |
| searchCriteriaSortOrdersField |  ``` Optional ```  | Sorting field. |
| searchCriteriaSortOrdersDirection |  ``` Optional ```  | Sorting direction. |
| searchCriteriaPageSize |  ``` Optional ```  | Page size. |
| searchCriteriaCurrentPage |  ``` Optional ```  | Current page. |



#### Example Usage

```php
$searchCriteriaFilterGroupsFiltersField = 'searchCriteria[filterGroups][][filters][][field]';
$searchCriteriaFilterGroupsFiltersValue = 'searchCriteria[filterGroups][][filters][][value]';
$searchCriteriaFilterGroupsFiltersConditionType = 'searchCriteria[filterGroups][][filters][][conditionType]';
$searchCriteriaSortOrdersField = 'searchCriteria[sortOrders][][field]';
$searchCriteriaSortOrdersDirection = 'searchCriteria[sortOrders][][direction]';
$searchCriteriaPageSize = 122;
$searchCriteriaCurrentPage = 122;

$result = $salesCreditmemoRepositoryV1->getSalesCreditmemoRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_sales_creditmemo_repository_v1_save_post"></a>![Method: ](https://apidocs.io/img/method.png ".SalesCreditmemoRepositoryV1Controller.createSalesCreditmemoRepositoryV1SavePost") createSalesCreditmemoRepositoryV1SavePost

> *Tags:*  ``` Skips Authentication ``` 

> Performs persist operations for a specified credit memo.


```php
function createSalesCreditmemoRepositoryV1SavePost($salesCreditmemoRepositoryV1SavePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| salesCreditmemoRepositoryV1SavePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$salesCreditmemoRepositoryV1SavePostBody = new SalesCreditmemoRepositoryV1SavePostBody();

$result = $salesCreditmemoRepositoryV1->createSalesCreditmemoRepositoryV1SavePost($salesCreditmemoRepositoryV1SavePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="sales_creditmemo_comment_repository_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".SalesCreditmemoCommentRepositoryV1Controller") SalesCreditmemoCommentRepositoryV1Controller

### Get singleton instance

The singleton instance of the ``` SalesCreditmemoCommentRepositoryV1Controller ``` class can be accessed from the API Client.

```php
$salesCreditmemoCommentRepositoryV1 = $client->getSalesCreditmemoCommentRepositoryV1();
```

### <a name="create_sales_creditmemo_comment_repository_v1_save_post"></a>![Method: ](https://apidocs.io/img/method.png ".SalesCreditmemoCommentRepositoryV1Controller.createSalesCreditmemoCommentRepositoryV1SavePost") createSalesCreditmemoCommentRepositoryV1SavePost

> *Tags:*  ``` Skips Authentication ``` 

> Performs persist operations for a specified entity.


```php
function createSalesCreditmemoCommentRepositoryV1SavePost(
        $id,
        $salesCreditmemoCommentRepositoryV1SavePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | TODO: Add a parameter description |
| salesCreditmemoCommentRepositoryV1SavePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = 'id';
$salesCreditmemoCommentRepositoryV1SavePostBody = new SalesCreditmemoCommentRepositoryV1SavePostBody();

$result = $salesCreditmemoCommentRepositoryV1->createSalesCreditmemoCommentRepositoryV1SavePost($id, $salesCreditmemoCommentRepositoryV1SavePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="sales_refund_order_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".SalesRefundOrderV1Controller") SalesRefundOrderV1Controller

### Get singleton instance

The singleton instance of the ``` SalesRefundOrderV1Controller ``` class can be accessed from the API Client.

```php
$salesRefundOrderV1 = $client->getSalesRefundOrderV1();
```

### <a name="create_sales_refund_order_v1_execute_post"></a>![Method: ](https://apidocs.io/img/method.png ".SalesRefundOrderV1Controller.createSalesRefundOrderV1ExecutePost") createSalesRefundOrderV1ExecutePost

> *Tags:*  ``` Skips Authentication ``` 

> Create offline refund for order


```php
function createSalesRefundOrderV1ExecutePost(
        $orderId,
        $salesRefundOrderV1ExecutePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| orderId |  ``` Required ```  | TODO: Add a parameter description |
| salesRefundOrderV1ExecutePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$orderId = 122;
$salesRefundOrderV1ExecutePostBody = new SalesRefundOrderV1ExecutePostBody();

$result = $salesRefundOrderV1->createSalesRefundOrderV1ExecutePost($orderId, $salesRefundOrderV1ExecutePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="sales_shipment_repository_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".SalesShipmentRepositoryV1Controller") SalesShipmentRepositoryV1Controller

### Get singleton instance

The singleton instance of the ``` SalesShipmentRepositoryV1Controller ``` class can be accessed from the API Client.

```php
$salesShipmentRepositoryV1 = $client->getSalesShipmentRepositoryV1();
```

### <a name="get_sales_shipment_repository_v1_get_get"></a>![Method: ](https://apidocs.io/img/method.png ".SalesShipmentRepositoryV1Controller.getSalesShipmentRepositoryV1GetGet") getSalesShipmentRepositoryV1GetGet

> *Tags:*  ``` Skips Authentication ``` 

> Loads a specified shipment.


```php
function getSalesShipmentRepositoryV1GetGet($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | The shipment ID. |



#### Example Usage

```php
$id = 122;

$result = $salesShipmentRepositoryV1->getSalesShipmentRepositoryV1GetGet($id);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="get_sales_shipment_repository_v1_get_list_get"></a>![Method: ](https://apidocs.io/img/method.png ".SalesShipmentRepositoryV1Controller.getSalesShipmentRepositoryV1GetListGet") getSalesShipmentRepositoryV1GetListGet

> *Tags:*  ``` Skips Authentication ``` 

> Lists shipments that match specified search criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#ShipmentRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.


```php
function getSalesShipmentRepositoryV1GetListGet(
        $searchCriteriaFilterGroupsFiltersField = null,
        $searchCriteriaFilterGroupsFiltersValue = null,
        $searchCriteriaFilterGroupsFiltersConditionType = null,
        $searchCriteriaSortOrdersField = null,
        $searchCriteriaSortOrdersDirection = null,
        $searchCriteriaPageSize = null,
        $searchCriteriaCurrentPage = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| searchCriteriaFilterGroupsFiltersField |  ``` Optional ```  | Field |
| searchCriteriaFilterGroupsFiltersValue |  ``` Optional ```  | Value |
| searchCriteriaFilterGroupsFiltersConditionType |  ``` Optional ```  | Condition type |
| searchCriteriaSortOrdersField |  ``` Optional ```  | Sorting field. |
| searchCriteriaSortOrdersDirection |  ``` Optional ```  | Sorting direction. |
| searchCriteriaPageSize |  ``` Optional ```  | Page size. |
| searchCriteriaCurrentPage |  ``` Optional ```  | Current page. |



#### Example Usage

```php
$searchCriteriaFilterGroupsFiltersField = 'searchCriteria[filterGroups][][filters][][field]';
$searchCriteriaFilterGroupsFiltersValue = 'searchCriteria[filterGroups][][filters][][value]';
$searchCriteriaFilterGroupsFiltersConditionType = 'searchCriteria[filterGroups][][filters][][conditionType]';
$searchCriteriaSortOrdersField = 'searchCriteria[sortOrders][][field]';
$searchCriteriaSortOrdersDirection = 'searchCriteria[sortOrders][][direction]';
$searchCriteriaPageSize = 122;
$searchCriteriaCurrentPage = 122;

$result = $salesShipmentRepositoryV1->getSalesShipmentRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_sales_shipment_repository_v1_save_post"></a>![Method: ](https://apidocs.io/img/method.png ".SalesShipmentRepositoryV1Controller.createSalesShipmentRepositoryV1SavePost") createSalesShipmentRepositoryV1SavePost

> *Tags:*  ``` Skips Authentication ``` 

> Performs persist operations for a specified shipment.


```php
function createSalesShipmentRepositoryV1SavePost($salesShipmentRepositoryV1SavePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| salesShipmentRepositoryV1SavePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$salesShipmentRepositoryV1SavePostBody = new SalesShipmentRepositoryV1SavePostBody();

$result = $salesShipmentRepositoryV1->createSalesShipmentRepositoryV1SavePost($salesShipmentRepositoryV1SavePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="sales_shipment_management_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".SalesShipmentManagementV1Controller") SalesShipmentManagementV1Controller

### Get singleton instance

The singleton instance of the ``` SalesShipmentManagementV1Controller ``` class can be accessed from the API Client.

```php
$salesShipmentManagementV1 = $client->getSalesShipmentManagementV1();
```

### <a name="get_sales_shipment_management_v1_get_comments_list_get"></a>![Method: ](https://apidocs.io/img/method.png ".SalesShipmentManagementV1Controller.getSalesShipmentManagementV1GetCommentsListGet") getSalesShipmentManagementV1GetCommentsListGet

> *Tags:*  ``` Skips Authentication ``` 

> Lists comments for a specified shipment.


```php
function getSalesShipmentManagementV1GetCommentsListGet($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | The shipment ID. |



#### Example Usage

```php
$id = 122;

$result = $salesShipmentManagementV1->getSalesShipmentManagementV1GetCommentsListGet($id);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_sales_shipment_management_v1_notify_post"></a>![Method: ](https://apidocs.io/img/method.png ".SalesShipmentManagementV1Controller.createSalesShipmentManagementV1NotifyPost") createSalesShipmentManagementV1NotifyPost

> *Tags:*  ``` Skips Authentication ``` 

> Emails user a specified shipment.


```php
function createSalesShipmentManagementV1NotifyPost($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | The shipment ID. |



#### Example Usage

```php
$id = 122;

$result = $salesShipmentManagementV1->createSalesShipmentManagementV1NotifyPost($id);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="get_sales_shipment_management_v1_get_label_get"></a>![Method: ](https://apidocs.io/img/method.png ".SalesShipmentManagementV1Controller.getSalesShipmentManagementV1GetLabelGet") getSalesShipmentManagementV1GetLabelGet

> *Tags:*  ``` Skips Authentication ``` 

> Gets a specified shipment label.


```php
function getSalesShipmentManagementV1GetLabelGet($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | The shipment label ID. |



#### Example Usage

```php
$id = 122;

$result = $salesShipmentManagementV1->getSalesShipmentManagementV1GetLabelGet($id);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="sales_shipment_comment_repository_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".SalesShipmentCommentRepositoryV1Controller") SalesShipmentCommentRepositoryV1Controller

### Get singleton instance

The singleton instance of the ``` SalesShipmentCommentRepositoryV1Controller ``` class can be accessed from the API Client.

```php
$salesShipmentCommentRepositoryV1 = $client->getSalesShipmentCommentRepositoryV1();
```

### <a name="create_sales_shipment_comment_repository_v1_save_post"></a>![Method: ](https://apidocs.io/img/method.png ".SalesShipmentCommentRepositoryV1Controller.createSalesShipmentCommentRepositoryV1SavePost") createSalesShipmentCommentRepositoryV1SavePost

> *Tags:*  ``` Skips Authentication ``` 

> Performs persist operations for a specified shipment comment.


```php
function createSalesShipmentCommentRepositoryV1SavePost(
        $id,
        $salesShipmentCommentRepositoryV1SavePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | TODO: Add a parameter description |
| salesShipmentCommentRepositoryV1SavePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = 'id';
$salesShipmentCommentRepositoryV1SavePostBody = new SalesShipmentCommentRepositoryV1SavePostBody();

$result = $salesShipmentCommentRepositoryV1->createSalesShipmentCommentRepositoryV1SavePost($id, $salesShipmentCommentRepositoryV1SavePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="sales_shipment_track_repository_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".SalesShipmentTrackRepositoryV1Controller") SalesShipmentTrackRepositoryV1Controller

### Get singleton instance

The singleton instance of the ``` SalesShipmentTrackRepositoryV1Controller ``` class can be accessed from the API Client.

```php
$salesShipmentTrackRepositoryV1 = $client->getSalesShipmentTrackRepositoryV1();
```

### <a name="create_sales_shipment_track_repository_v1_save_post"></a>![Method: ](https://apidocs.io/img/method.png ".SalesShipmentTrackRepositoryV1Controller.createSalesShipmentTrackRepositoryV1SavePost") createSalesShipmentTrackRepositoryV1SavePost

> *Tags:*  ``` Skips Authentication ``` 

> Performs persist operations for a specified shipment track.


```php
function createSalesShipmentTrackRepositoryV1SavePost($salesShipmentTrackRepositoryV1SavePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| salesShipmentTrackRepositoryV1SavePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$salesShipmentTrackRepositoryV1SavePostBody = new SalesShipmentTrackRepositoryV1SavePostBody();

$result = $salesShipmentTrackRepositoryV1->createSalesShipmentTrackRepositoryV1SavePost($salesShipmentTrackRepositoryV1SavePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="delete_sales_shipment_track_repository_v1_delete_by_id_delete"></a>![Method: ](https://apidocs.io/img/method.png ".SalesShipmentTrackRepositoryV1Controller.deleteSalesShipmentTrackRepositoryV1DeleteByIdDelete") deleteSalesShipmentTrackRepositoryV1DeleteByIdDelete

> *Tags:*  ``` Skips Authentication ``` 

> Deletes a specified shipment track by ID.


```php
function deleteSalesShipmentTrackRepositoryV1DeleteByIdDelete($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | The shipment track ID. |



#### Example Usage

```php
$id = 31;

$result = $salesShipmentTrackRepositoryV1->deleteSalesShipmentTrackRepositoryV1DeleteByIdDelete($id);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="sales_ship_order_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".SalesShipOrderV1Controller") SalesShipOrderV1Controller

### Get singleton instance

The singleton instance of the ``` SalesShipOrderV1Controller ``` class can be accessed from the API Client.

```php
$salesShipOrderV1 = $client->getSalesShipOrderV1();
```

### <a name="create_sales_ship_order_v1_execute_post"></a>![Method: ](https://apidocs.io/img/method.png ".SalesShipOrderV1Controller.createSalesShipOrderV1ExecutePost") createSalesShipOrderV1ExecutePost

> *Tags:*  ``` Skips Authentication ``` 

> Creates new Shipment for given Order.


```php
function createSalesShipOrderV1ExecutePost(
        $orderId,
        $salesShipOrderV1ExecutePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| orderId |  ``` Required ```  | TODO: Add a parameter description |
| salesShipOrderV1ExecutePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$orderId = 31;
$salesShipOrderV1ExecutePostBody = new SalesShipOrderV1ExecutePostBody();

$result = $salesShipOrderV1->createSalesShipOrderV1ExecutePost($orderId, $salesShipOrderV1ExecutePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="sales_transaction_repository_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".SalesTransactionRepositoryV1Controller") SalesTransactionRepositoryV1Controller

### Get singleton instance

The singleton instance of the ``` SalesTransactionRepositoryV1Controller ``` class can be accessed from the API Client.

```php
$salesTransactionRepositoryV1 = $client->getSalesTransactionRepositoryV1();
```

### <a name="get_sales_transaction_repository_v1_get_get"></a>![Method: ](https://apidocs.io/img/method.png ".SalesTransactionRepositoryV1Controller.getSalesTransactionRepositoryV1GetGet") getSalesTransactionRepositoryV1GetGet

> *Tags:*  ``` Skips Authentication ``` 

> Loads a specified transaction.


```php
function getSalesTransactionRepositoryV1GetGet($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | The transaction ID. |



#### Example Usage

```php
$id = 31;

$result = $salesTransactionRepositoryV1->getSalesTransactionRepositoryV1GetGet($id);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="get_sales_transaction_repository_v1_get_list_get"></a>![Method: ](https://apidocs.io/img/method.png ".SalesTransactionRepositoryV1Controller.getSalesTransactionRepositoryV1GetListGet") getSalesTransactionRepositoryV1GetListGet

> *Tags:*  ``` Skips Authentication ``` 

> Lists transactions that match specified search criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#TransactionRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.


```php
function getSalesTransactionRepositoryV1GetListGet(
        $searchCriteriaFilterGroupsFiltersField = null,
        $searchCriteriaFilterGroupsFiltersValue = null,
        $searchCriteriaFilterGroupsFiltersConditionType = null,
        $searchCriteriaSortOrdersField = null,
        $searchCriteriaSortOrdersDirection = null,
        $searchCriteriaPageSize = null,
        $searchCriteriaCurrentPage = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| searchCriteriaFilterGroupsFiltersField |  ``` Optional ```  | Field |
| searchCriteriaFilterGroupsFiltersValue |  ``` Optional ```  | Value |
| searchCriteriaFilterGroupsFiltersConditionType |  ``` Optional ```  | Condition type |
| searchCriteriaSortOrdersField |  ``` Optional ```  | Sorting field. |
| searchCriteriaSortOrdersDirection |  ``` Optional ```  | Sorting direction. |
| searchCriteriaPageSize |  ``` Optional ```  | Page size. |
| searchCriteriaCurrentPage |  ``` Optional ```  | Current page. |



#### Example Usage

```php
$searchCriteriaFilterGroupsFiltersField = 'searchCriteria[filterGroups][][filters][][field]';
$searchCriteriaFilterGroupsFiltersValue = 'searchCriteria[filterGroups][][filters][][value]';
$searchCriteriaFilterGroupsFiltersConditionType = 'searchCriteria[filterGroups][][filters][][conditionType]';
$searchCriteriaSortOrdersField = 'searchCriteria[sortOrders][][field]';
$searchCriteriaSortOrdersDirection = 'searchCriteria[sortOrders][][direction]';
$searchCriteriaPageSize = 31;
$searchCriteriaCurrentPage = 31;

$result = $salesTransactionRepositoryV1->getSalesTransactionRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="sales_invoice_order_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".SalesInvoiceOrderV1Controller") SalesInvoiceOrderV1Controller

### Get singleton instance

The singleton instance of the ``` SalesInvoiceOrderV1Controller ``` class can be accessed from the API Client.

```php
$salesInvoiceOrderV1 = $client->getSalesInvoiceOrderV1();
```

### <a name="create_sales_invoice_order_v1_execute_post"></a>![Method: ](https://apidocs.io/img/method.png ".SalesInvoiceOrderV1Controller.createSalesInvoiceOrderV1ExecutePost") createSalesInvoiceOrderV1ExecutePost

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createSalesInvoiceOrderV1ExecutePost(
        $orderId,
        $salesInvoiceOrderV1ExecutePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| orderId |  ``` Required ```  | TODO: Add a parameter description |
| salesInvoiceOrderV1ExecutePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$orderId = 31;
$salesInvoiceOrderV1ExecutePostBody = new SalesInvoiceOrderV1ExecutePostBody();

$result = $salesInvoiceOrderV1->createSalesInvoiceOrderV1ExecutePost($orderId, $salesInvoiceOrderV1ExecutePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="checkout_guest_shipping_information_management_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CheckoutGuestShippingInformationManagementV1Controller") CheckoutGuestShippingInformationManagementV1Controller

### Get singleton instance

The singleton instance of the ``` CheckoutGuestShippingInformationManagementV1Controller ``` class can be accessed from the API Client.

```php
$checkoutGuestShippingInformationManagementV1 = $client->getCheckoutGuestShippingInformationManagementV1();
```

### <a name="create_checkout_guest_shipping_information_management_v1_save_address_information_post"></a>![Method: ](https://apidocs.io/img/method.png ".CheckoutGuestShippingInformationManagementV1Controller.createCheckoutGuestShippingInformationManagementV1SaveAddressInformationPost") createCheckoutGuestShippingInformationManagementV1SaveAddressInformationPost

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCheckoutGuestShippingInformationManagementV1SaveAddressInformationPost(
        $cartId,
        $checkoutGuestShippingInformationManagementV1SaveAddressInformationPostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | TODO: Add a parameter description |
| checkoutGuestShippingInformationManagementV1SaveAddressInformationPostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$cartId = 'cartId';
$checkoutGuestShippingInformationManagementV1SaveAddressInformationPostBody = new CheckoutGuestShippingInformationManagementV1SaveAddressInformationPostBody();

$result = $checkoutGuestShippingInformationManagementV1->createCheckoutGuestShippingInformationManagementV1SaveAddressInformationPost($cartId, $checkoutGuestShippingInformationManagementV1SaveAddressInformationPostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="checkout_shipping_information_management_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CheckoutShippingInformationManagementV1Controller") CheckoutShippingInformationManagementV1Controller

### Get singleton instance

The singleton instance of the ``` CheckoutShippingInformationManagementV1Controller ``` class can be accessed from the API Client.

```php
$checkoutShippingInformationManagementV1 = $client->getCheckoutShippingInformationManagementV1();
```

### <a name="create_checkout_shipping_information_management_v1_save_address_information_post"></a>![Method: ](https://apidocs.io/img/method.png ".CheckoutShippingInformationManagementV1Controller.createCheckoutShippingInformationManagementV1SaveAddressInformationPost") createCheckoutShippingInformationManagementV1SaveAddressInformationPost

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCheckoutShippingInformationManagementV1SaveAddressInformationPost($checkoutShippingInformationManagementV1SaveAddressInformationPostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| checkoutShippingInformationManagementV1SaveAddressInformationPostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$checkoutShippingInformationManagementV1SaveAddressInformationPostBody = new CheckoutShippingInformationManagementV1SaveAddressInformationPostBody();

$result = $checkoutShippingInformationManagementV1->createCheckoutShippingInformationManagementV1SaveAddressInformationPost($checkoutShippingInformationManagementV1SaveAddressInformationPostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_checkout_shipping_information_management_v1_save_address_information_post1"></a>![Method: ](https://apidocs.io/img/method.png ".CheckoutShippingInformationManagementV1Controller.createCheckoutShippingInformationManagementV1SaveAddressInformationPost1") createCheckoutShippingInformationManagementV1SaveAddressInformationPost1

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createCheckoutShippingInformationManagementV1SaveAddressInformationPost1(
        $cartId,
        $checkoutShippingInformationManagementV1SaveAddressInformationPostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | TODO: Add a parameter description |
| checkoutShippingInformationManagementV1SaveAddressInformationPostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$cartId = 31;
$checkoutShippingInformationManagementV1SaveAddressInformationPostBody = new CheckoutShippingInformationManagementV1SaveAddressInformationPostBody();

$result = $checkoutShippingInformationManagementV1->createCheckoutShippingInformationManagementV1SaveAddressInformationPost1($cartId, $checkoutShippingInformationManagementV1SaveAddressInformationPostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="checkout_totals_information_management_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CheckoutTotalsInformationManagementV1Controller") CheckoutTotalsInformationManagementV1Controller

### Get singleton instance

The singleton instance of the ``` CheckoutTotalsInformationManagementV1Controller ``` class can be accessed from the API Client.

```php
$checkoutTotalsInformationManagementV1 = $client->getCheckoutTotalsInformationManagementV1();
```

### <a name="create_checkout_totals_information_management_v1_calculate_post"></a>![Method: ](https://apidocs.io/img/method.png ".CheckoutTotalsInformationManagementV1Controller.createCheckoutTotalsInformationManagementV1CalculatePost") createCheckoutTotalsInformationManagementV1CalculatePost

> *Tags:*  ``` Skips Authentication ``` 

> Calculate quote totals based on address and shipping method.


```php
function createCheckoutTotalsInformationManagementV1CalculatePost(
        $cartId,
        $checkoutTotalsInformationManagementV1CalculatePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | TODO: Add a parameter description |
| checkoutTotalsInformationManagementV1CalculatePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$cartId = 31;
$checkoutTotalsInformationManagementV1CalculatePostBody = new CheckoutTotalsInformationManagementV1CalculatePostBody();

$result = $checkoutTotalsInformationManagementV1->createCheckoutTotalsInformationManagementV1CalculatePost($cartId, $checkoutTotalsInformationManagementV1CalculatePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_checkout_totals_information_management_v1_calculate_post1"></a>![Method: ](https://apidocs.io/img/method.png ".CheckoutTotalsInformationManagementV1Controller.createCheckoutTotalsInformationManagementV1CalculatePost1") createCheckoutTotalsInformationManagementV1CalculatePost1

> *Tags:*  ``` Skips Authentication ``` 

> Calculate quote totals based on address and shipping method.


```php
function createCheckoutTotalsInformationManagementV1CalculatePost1($checkoutTotalsInformationManagementV1CalculatePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| checkoutTotalsInformationManagementV1CalculatePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$checkoutTotalsInformationManagementV1CalculatePostBody = new CheckoutTotalsInformationManagementV1CalculatePostBody();

$result = $checkoutTotalsInformationManagementV1->createCheckoutTotalsInformationManagementV1CalculatePost1($checkoutTotalsInformationManagementV1CalculatePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="checkout_guest_totals_information_management_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CheckoutGuestTotalsInformationManagementV1Controller") CheckoutGuestTotalsInformationManagementV1Controller

### Get singleton instance

The singleton instance of the ``` CheckoutGuestTotalsInformationManagementV1Controller ``` class can be accessed from the API Client.

```php
$checkoutGuestTotalsInformationManagementV1 = $client->getCheckoutGuestTotalsInformationManagementV1();
```

### <a name="create_checkout_guest_totals_information_management_v1_calculate_post"></a>![Method: ](https://apidocs.io/img/method.png ".CheckoutGuestTotalsInformationManagementV1Controller.createCheckoutGuestTotalsInformationManagementV1CalculatePost") createCheckoutGuestTotalsInformationManagementV1CalculatePost

> *Tags:*  ``` Skips Authentication ``` 

> Calculate quote totals based on address and shipping method.


```php
function createCheckoutGuestTotalsInformationManagementV1CalculatePost(
        $cartId,
        $checkoutGuestTotalsInformationManagementV1CalculatePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | TODO: Add a parameter description |
| checkoutGuestTotalsInformationManagementV1CalculatePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$cartId = 'cartId';
$checkoutGuestTotalsInformationManagementV1CalculatePostBody = new CheckoutGuestTotalsInformationManagementV1CalculatePostBody();

$result = $checkoutGuestTotalsInformationManagementV1->createCheckoutGuestTotalsInformationManagementV1CalculatePost($cartId, $checkoutGuestTotalsInformationManagementV1CalculatePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="checkout_guest_payment_information_management_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CheckoutGuestPaymentInformationManagementV1Controller") CheckoutGuestPaymentInformationManagementV1Controller

### Get singleton instance

The singleton instance of the ``` CheckoutGuestPaymentInformationManagementV1Controller ``` class can be accessed from the API Client.

```php
$checkoutGuestPaymentInformationManagementV1 = $client->getCheckoutGuestPaymentInformationManagementV1();
```

### <a name="get_checkout_guest_payment_information_management_v1_get_payment_information_get"></a>![Method: ](https://apidocs.io/img/method.png ".CheckoutGuestPaymentInformationManagementV1Controller.getCheckoutGuestPaymentInformationManagementV1GetPaymentInformationGet") getCheckoutGuestPaymentInformationManagementV1GetPaymentInformationGet

> *Tags:*  ``` Skips Authentication ``` 

> Get payment information


```php
function getCheckoutGuestPaymentInformationManagementV1GetPaymentInformationGet($cartId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$cartId = 'cartId';

$result = $checkoutGuestPaymentInformationManagementV1->getCheckoutGuestPaymentInformationManagementV1GetPaymentInformationGet($cartId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 0 | Unexpected error |



### <a name="create_checkout_guest_payment_information_management_v1_save_payment_information_and_place_order_post"></a>![Method: ](https://apidocs.io/img/method.png ".CheckoutGuestPaymentInformationManagementV1Controller.createCheckoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost") createCheckoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost

> *Tags:*  ``` Skips Authentication ``` 

> Set payment information and place order for a specified cart.


```php
function createCheckoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost(
        $cartId,
        $checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | TODO: Add a parameter description |
| checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$cartId = 'cartId';
$checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody = new CheckoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody();

$result = $checkoutGuestPaymentInformationManagementV1->createCheckoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost($cartId, $checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 0 | Unexpected error |



### <a name="create_checkout_guest_payment_information_management_v1_save_payment_information_post"></a>![Method: ](https://apidocs.io/img/method.png ".CheckoutGuestPaymentInformationManagementV1Controller.createCheckoutGuestPaymentInformationManagementV1SavePaymentInformationPost") createCheckoutGuestPaymentInformationManagementV1SavePaymentInformationPost

> *Tags:*  ``` Skips Authentication ``` 

> Set payment information for a specified cart.


```php
function createCheckoutGuestPaymentInformationManagementV1SavePaymentInformationPost(
        $cartId,
        $checkoutGuestPaymentInformationManagementV1SavePaymentInformationPostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | TODO: Add a parameter description |
| checkoutGuestPaymentInformationManagementV1SavePaymentInformationPostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$cartId = 'cartId';
$checkoutGuestPaymentInformationManagementV1SavePaymentInformationPostBody = new CheckoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody();

$result = $checkoutGuestPaymentInformationManagementV1->createCheckoutGuestPaymentInformationManagementV1SavePaymentInformationPost($cartId, $checkoutGuestPaymentInformationManagementV1SavePaymentInformationPostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="checkout_payment_information_management_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CheckoutPaymentInformationManagementV1Controller") CheckoutPaymentInformationManagementV1Controller

### Get singleton instance

The singleton instance of the ``` CheckoutPaymentInformationManagementV1Controller ``` class can be accessed from the API Client.

```php
$checkoutPaymentInformationManagementV1 = $client->getCheckoutPaymentInformationManagementV1();
```

### <a name="get_checkout_payment_information_management_v1_get_payment_information_get"></a>![Method: ](https://apidocs.io/img/method.png ".CheckoutPaymentInformationManagementV1Controller.getCheckoutPaymentInformationManagementV1GetPaymentInformationGet") getCheckoutPaymentInformationManagementV1GetPaymentInformationGet

> *Tags:*  ``` Skips Authentication ``` 

> Get payment information


```php
function getCheckoutPaymentInformationManagementV1GetPaymentInformationGet()
```

#### Example Usage

```php

$result = $checkoutPaymentInformationManagementV1->getCheckoutPaymentInformationManagementV1GetPaymentInformationGet();

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_checkout_payment_information_management_v1_save_payment_information_and_place_order_post"></a>![Method: ](https://apidocs.io/img/method.png ".CheckoutPaymentInformationManagementV1Controller.createCheckoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost") createCheckoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost

> *Tags:*  ``` Skips Authentication ``` 

> Set payment information and place order for a specified cart.


```php
function createCheckoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost($checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody = new CheckoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody();

$result = $checkoutPaymentInformationManagementV1->createCheckoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPost($checkoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_checkout_payment_information_management_v1_save_payment_information_post"></a>![Method: ](https://apidocs.io/img/method.png ".CheckoutPaymentInformationManagementV1Controller.createCheckoutPaymentInformationManagementV1SavePaymentInformationPost") createCheckoutPaymentInformationManagementV1SavePaymentInformationPost

> *Tags:*  ``` Skips Authentication ``` 

> Set payment information for a specified cart.


```php
function createCheckoutPaymentInformationManagementV1SavePaymentInformationPost($checkoutPaymentInformationManagementV1SavePaymentInformationPostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| checkoutPaymentInformationManagementV1SavePaymentInformationPostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$checkoutPaymentInformationManagementV1SavePaymentInformationPostBody = new CheckoutPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody();

$result = $checkoutPaymentInformationManagementV1->createCheckoutPaymentInformationManagementV1SavePaymentInformationPost($checkoutPaymentInformationManagementV1SavePaymentInformationPostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="bundle_product_link_management_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".BundleProductLinkManagementV1Controller") BundleProductLinkManagementV1Controller

### Get singleton instance

The singleton instance of the ``` BundleProductLinkManagementV1Controller ``` class can be accessed from the API Client.

```php
$bundleProductLinkManagementV1 = $client->getBundleProductLinkManagementV1();
```

### <a name="create_bundle_product_link_management_v1_add_child_by_product_sku_post"></a>![Method: ](https://apidocs.io/img/method.png ".BundleProductLinkManagementV1Controller.createBundleProductLinkManagementV1AddChildByProductSkuPost") createBundleProductLinkManagementV1AddChildByProductSkuPost

> *Tags:*  ``` Skips Authentication ``` 

> Add child product to specified Bundle option by product sku


```php
function createBundleProductLinkManagementV1AddChildByProductSkuPost(
        $sku,
        $optionId,
        $bundleProductLinkManagementV1AddChildByProductSkuPostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| sku |  ``` Required ```  | TODO: Add a parameter description |
| optionId |  ``` Required ```  | TODO: Add a parameter description |
| bundleProductLinkManagementV1AddChildByProductSkuPostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$sku = 'sku';
$optionId = 72;
$bundleProductLinkManagementV1AddChildByProductSkuPostBody = new BundleProductLinkManagementV1AddChildByProductSkuPostBody();

$result = $bundleProductLinkManagementV1->createBundleProductLinkManagementV1AddChildByProductSkuPost($sku, $optionId, $bundleProductLinkManagementV1AddChildByProductSkuPostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="update_bundle_product_link_management_v1_save_child_put"></a>![Method: ](https://apidocs.io/img/method.png ".BundleProductLinkManagementV1Controller.updateBundleProductLinkManagementV1SaveChildPut") updateBundleProductLinkManagementV1SaveChildPut

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function updateBundleProductLinkManagementV1SaveChildPut(
        $sku,
        $id,
        $bundleProductLinkManagementV1SaveChildPutBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| sku |  ``` Required ```  | TODO: Add a parameter description |
| id |  ``` Required ```  | TODO: Add a parameter description |
| bundleProductLinkManagementV1SaveChildPutBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$sku = 'sku';
$id = 'id';
$bundleProductLinkManagementV1SaveChildPutBody = new BundleProductLinkManagementV1AddChildByProductSkuPostBody();

$result = $bundleProductLinkManagementV1->updateBundleProductLinkManagementV1SaveChildPut($sku, $id, $bundleProductLinkManagementV1SaveChildPutBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="get_bundle_product_link_management_v1_get_children_get"></a>![Method: ](https://apidocs.io/img/method.png ".BundleProductLinkManagementV1Controller.getBundleProductLinkManagementV1GetChildrenGet") getBundleProductLinkManagementV1GetChildrenGet

> *Tags:*  ``` Skips Authentication ``` 

> Get all children for Bundle product


```php
function getBundleProductLinkManagementV1GetChildrenGet(
        $productSku,
        $optionId = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| productSku |  ``` Required ```  | TODO: Add a parameter description |
| optionId |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$productSku = 'productSku';
$optionId = 72;

$result = $bundleProductLinkManagementV1->getBundleProductLinkManagementV1GetChildrenGet($productSku, $optionId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="delete_bundle_product_link_management_v1_remove_child_delete"></a>![Method: ](https://apidocs.io/img/method.png ".BundleProductLinkManagementV1Controller.deleteBundleProductLinkManagementV1RemoveChildDelete") deleteBundleProductLinkManagementV1RemoveChildDelete

> *Tags:*  ``` Skips Authentication ``` 

> Remove product from Bundle product option


```php
function deleteBundleProductLinkManagementV1RemoveChildDelete(
        $sku,
        $optionId,
        $childSku)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| sku |  ``` Required ```  | TODO: Add a parameter description |
| optionId |  ``` Required ```  | TODO: Add a parameter description |
| childSku |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$sku = 'sku';
$optionId = 72;
$childSku = 'childSku';

$result = $bundleProductLinkManagementV1->deleteBundleProductLinkManagementV1RemoveChildDelete($sku, $optionId, $childSku);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="bundle_product_option_repository_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".BundleProductOptionRepositoryV1Controller") BundleProductOptionRepositoryV1Controller

### Get singleton instance

The singleton instance of the ``` BundleProductOptionRepositoryV1Controller ``` class can be accessed from the API Client.

```php
$bundleProductOptionRepositoryV1 = $client->getBundleProductOptionRepositoryV1();
```

### <a name="get_bundle_product_option_repository_v1_get_list_get"></a>![Method: ](https://apidocs.io/img/method.png ".BundleProductOptionRepositoryV1Controller.getBundleProductOptionRepositoryV1GetListGet") getBundleProductOptionRepositoryV1GetListGet

> *Tags:*  ``` Skips Authentication ``` 

> Get all options for bundle product


```php
function getBundleProductOptionRepositoryV1GetListGet($sku)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| sku |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$sku = 'sku';

$result = $bundleProductOptionRepositoryV1->getBundleProductOptionRepositoryV1GetListGet($sku);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="get_bundle_product_option_repository_v1_get_get"></a>![Method: ](https://apidocs.io/img/method.png ".BundleProductOptionRepositoryV1Controller.getBundleProductOptionRepositoryV1GetGet") getBundleProductOptionRepositoryV1GetGet

> *Tags:*  ``` Skips Authentication ``` 

> Get option for bundle product


```php
function getBundleProductOptionRepositoryV1GetGet(
        $sku,
        $optionId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| sku |  ``` Required ```  | TODO: Add a parameter description |
| optionId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$sku = 'sku';
$optionId = 72;

$result = $bundleProductOptionRepositoryV1->getBundleProductOptionRepositoryV1GetGet($sku, $optionId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="delete_bundle_product_option_repository_v1_delete_by_id_delete"></a>![Method: ](https://apidocs.io/img/method.png ".BundleProductOptionRepositoryV1Controller.deleteBundleProductOptionRepositoryV1DeleteByIdDelete") deleteBundleProductOptionRepositoryV1DeleteByIdDelete

> *Tags:*  ``` Skips Authentication ``` 

> Remove bundle option


```php
function deleteBundleProductOptionRepositoryV1DeleteByIdDelete(
        $sku,
        $optionId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| sku |  ``` Required ```  | TODO: Add a parameter description |
| optionId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$sku = 'sku';
$optionId = 72;

$result = $bundleProductOptionRepositoryV1->deleteBundleProductOptionRepositoryV1DeleteByIdDelete($sku, $optionId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="bundle_product_option_type_list_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".BundleProductOptionTypeListV1Controller") BundleProductOptionTypeListV1Controller

### Get singleton instance

The singleton instance of the ``` BundleProductOptionTypeListV1Controller ``` class can be accessed from the API Client.

```php
$bundleProductOptionTypeListV1 = $client->getBundleProductOptionTypeListV1();
```

### <a name="get_bundle_product_option_type_list_v1_get_items_get"></a>![Method: ](https://apidocs.io/img/method.png ".BundleProductOptionTypeListV1Controller.getBundleProductOptionTypeListV1GetItemsGet") getBundleProductOptionTypeListV1GetItemsGet

> *Tags:*  ``` Skips Authentication ``` 

> Get all types for options for bundle products


```php
function getBundleProductOptionTypeListV1GetItemsGet()
```

#### Example Usage

```php

$result = $bundleProductOptionTypeListV1->getBundleProductOptionTypeListV1GetItemsGet();

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="bundle_product_option_management_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".BundleProductOptionManagementV1Controller") BundleProductOptionManagementV1Controller

### Get singleton instance

The singleton instance of the ``` BundleProductOptionManagementV1Controller ``` class can be accessed from the API Client.

```php
$bundleProductOptionManagementV1 = $client->getBundleProductOptionManagementV1();
```

### <a name="create_bundle_product_option_management_v1_save_post"></a>![Method: ](https://apidocs.io/img/method.png ".BundleProductOptionManagementV1Controller.createBundleProductOptionManagementV1SavePost") createBundleProductOptionManagementV1SavePost

> *Tags:*  ``` Skips Authentication ``` 

> Add new option for bundle product


```php
function createBundleProductOptionManagementV1SavePost($bundleProductOptionManagementV1SavePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| bundleProductOptionManagementV1SavePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$bundleProductOptionManagementV1SavePostBody = new BundleProductOptionManagementV1SavePostBody();

$result = $bundleProductOptionManagementV1->createBundleProductOptionManagementV1SavePost($bundleProductOptionManagementV1SavePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="update_bundle_product_option_management_v1_save_put"></a>![Method: ](https://apidocs.io/img/method.png ".BundleProductOptionManagementV1Controller.updateBundleProductOptionManagementV1SavePut") updateBundleProductOptionManagementV1SavePut

> *Tags:*  ``` Skips Authentication ``` 

> Add new option for bundle product


```php
function updateBundleProductOptionManagementV1SavePut(
        $optionId,
        $bundleProductOptionManagementV1SavePutBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| optionId |  ``` Required ```  | TODO: Add a parameter description |
| bundleProductOptionManagementV1SavePutBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$optionId = 'optionId';
$bundleProductOptionManagementV1SavePutBody = new BundleProductOptionManagementV1SavePostBody();

$result = $bundleProductOptionManagementV1->updateBundleProductOptionManagementV1SavePut($optionId, $bundleProductOptionManagementV1SavePutBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="checkout_agreements_checkout_agreements_repository_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CheckoutAgreementsCheckoutAgreementsRepositoryV1Controller") CheckoutAgreementsCheckoutAgreementsRepositoryV1Controller

### Get singleton instance

The singleton instance of the ``` CheckoutAgreementsCheckoutAgreementsRepositoryV1Controller ``` class can be accessed from the API Client.

```php
$checkoutAgreementsCheckoutAgreementsRepositoryV1 = $client->getCheckoutAgreementsCheckoutAgreementsRepositoryV1();
```

### <a name="get_checkout_agreements_checkout_agreements_repository_v1_get_list_get"></a>![Method: ](https://apidocs.io/img/method.png ".CheckoutAgreementsCheckoutAgreementsRepositoryV1Controller.getCheckoutAgreementsCheckoutAgreementsRepositoryV1GetListGet") getCheckoutAgreementsCheckoutAgreementsRepositoryV1GetListGet

> *Tags:*  ``` Skips Authentication ``` 

> Lists active checkout agreements.


```php
function getCheckoutAgreementsCheckoutAgreementsRepositoryV1GetListGet()
```

#### Example Usage

```php

$result = $checkoutAgreementsCheckoutAgreementsRepositoryV1->getCheckoutAgreementsCheckoutAgreementsRepositoryV1GetListGet();

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="configurable_product_link_management_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".ConfigurableProductLinkManagementV1Controller") ConfigurableProductLinkManagementV1Controller

### Get singleton instance

The singleton instance of the ``` ConfigurableProductLinkManagementV1Controller ``` class can be accessed from the API Client.

```php
$configurableProductLinkManagementV1 = $client->getConfigurableProductLinkManagementV1();
```

### <a name="get_configurable_product_link_management_v1_get_children_get"></a>![Method: ](https://apidocs.io/img/method.png ".ConfigurableProductLinkManagementV1Controller.getConfigurableProductLinkManagementV1GetChildrenGet") getConfigurableProductLinkManagementV1GetChildrenGet

> *Tags:*  ``` Skips Authentication ``` 

> Get all children for Configurable product


```php
function getConfigurableProductLinkManagementV1GetChildrenGet($sku)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| sku |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$sku = 'sku';

$result = $configurableProductLinkManagementV1->getConfigurableProductLinkManagementV1GetChildrenGet($sku);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="delete_configurable_product_link_management_v1_remove_child_delete"></a>![Method: ](https://apidocs.io/img/method.png ".ConfigurableProductLinkManagementV1Controller.deleteConfigurableProductLinkManagementV1RemoveChildDelete") deleteConfigurableProductLinkManagementV1RemoveChildDelete

> *Tags:*  ``` Skips Authentication ``` 

> Remove configurable product option


```php
function deleteConfigurableProductLinkManagementV1RemoveChildDelete(
        $sku,
        $childSku)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| sku |  ``` Required ```  | TODO: Add a parameter description |
| childSku |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$sku = 'sku';
$childSku = 'childSku';

$result = $configurableProductLinkManagementV1->deleteConfigurableProductLinkManagementV1RemoveChildDelete($sku, $childSku);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_configurable_product_link_management_v1_add_child_post"></a>![Method: ](https://apidocs.io/img/method.png ".ConfigurableProductLinkManagementV1Controller.createConfigurableProductLinkManagementV1AddChildPost") createConfigurableProductLinkManagementV1AddChildPost

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function createConfigurableProductLinkManagementV1AddChildPost(
        $sku,
        $configurableProductLinkManagementV1AddChildPostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| sku |  ``` Required ```  | TODO: Add a parameter description |
| configurableProductLinkManagementV1AddChildPostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$sku = 'sku';
$configurableProductLinkManagementV1AddChildPostBody = new ConfigurableProductLinkManagementV1AddChildPostBody();

$result = $configurableProductLinkManagementV1->createConfigurableProductLinkManagementV1AddChildPost($sku, $configurableProductLinkManagementV1AddChildPostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="configurable_product_configurable_product_management_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".ConfigurableProductConfigurableProductManagementV1Controller") ConfigurableProductConfigurableProductManagementV1Controller

### Get singleton instance

The singleton instance of the ``` ConfigurableProductConfigurableProductManagementV1Controller ``` class can be accessed from the API Client.

```php
$configurableProductConfigurableProductManagementV1 = $client->getConfigurableProductConfigurableProductManagementV1();
```

### <a name="update_configurable_product_configurable_product_management_v1_generate_variation_put"></a>![Method: ](https://apidocs.io/img/method.png ".ConfigurableProductConfigurableProductManagementV1Controller.updateConfigurableProductConfigurableProductManagementV1GenerateVariationPut") updateConfigurableProductConfigurableProductManagementV1GenerateVariationPut

> *Tags:*  ``` Skips Authentication ``` 

> Generate variation based on same product


```php
function updateConfigurableProductConfigurableProductManagementV1GenerateVariationPut($configurableProductConfigurableProductManagementV1GenerateVariationPutBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| configurableProductConfigurableProductManagementV1GenerateVariationPutBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$configurableProductConfigurableProductManagementV1GenerateVariationPutBody = new ConfigurableProductConfigurableProductManagementV1GenerateVariationPutBody();

$result = $configurableProductConfigurableProductManagementV1->updateConfigurableProductConfigurableProductManagementV1GenerateVariationPut($configurableProductConfigurableProductManagementV1GenerateVariationPutBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="configurable_product_option_repository_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".ConfigurableProductOptionRepositoryV1Controller") ConfigurableProductOptionRepositoryV1Controller

### Get singleton instance

The singleton instance of the ``` ConfigurableProductOptionRepositoryV1Controller ``` class can be accessed from the API Client.

```php
$configurableProductOptionRepositoryV1 = $client->getConfigurableProductOptionRepositoryV1();
```

### <a name="get_configurable_product_option_repository_v1_get_get"></a>![Method: ](https://apidocs.io/img/method.png ".ConfigurableProductOptionRepositoryV1Controller.getConfigurableProductOptionRepositoryV1GetGet") getConfigurableProductOptionRepositoryV1GetGet

> *Tags:*  ``` Skips Authentication ``` 

> Get option for configurable product


```php
function getConfigurableProductOptionRepositoryV1GetGet(
        $sku,
        $id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| sku |  ``` Required ```  | TODO: Add a parameter description |
| id |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$sku = 'sku';
$id = 72;

$result = $configurableProductOptionRepositoryV1->getConfigurableProductOptionRepositoryV1GetGet($sku, $id);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="update_configurable_product_option_repository_v1_save_put"></a>![Method: ](https://apidocs.io/img/method.png ".ConfigurableProductOptionRepositoryV1Controller.updateConfigurableProductOptionRepositoryV1SavePut") updateConfigurableProductOptionRepositoryV1SavePut

> *Tags:*  ``` Skips Authentication ``` 

> Save option


```php
function updateConfigurableProductOptionRepositoryV1SavePut(
        $sku,
        $id,
        $configurableProductOptionRepositoryV1SavePutBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| sku |  ``` Required ```  | TODO: Add a parameter description |
| id |  ``` Required ```  | TODO: Add a parameter description |
| configurableProductOptionRepositoryV1SavePutBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$sku = 'sku';
$id = 'id';
$configurableProductOptionRepositoryV1SavePutBody = new ConfigurableProductOptionRepositoryV1SavePutBody();

$result = $configurableProductOptionRepositoryV1->updateConfigurableProductOptionRepositoryV1SavePut($sku, $id, $configurableProductOptionRepositoryV1SavePutBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="delete_configurable_product_option_repository_v1_delete_by_id_delete"></a>![Method: ](https://apidocs.io/img/method.png ".ConfigurableProductOptionRepositoryV1Controller.deleteConfigurableProductOptionRepositoryV1DeleteByIdDelete") deleteConfigurableProductOptionRepositoryV1DeleteByIdDelete

> *Tags:*  ``` Skips Authentication ``` 

> Remove option from configurable product


```php
function deleteConfigurableProductOptionRepositoryV1DeleteByIdDelete(
        $sku,
        $id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| sku |  ``` Required ```  | TODO: Add a parameter description |
| id |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$sku = 'sku';
$id = 72;

$result = $configurableProductOptionRepositoryV1->deleteConfigurableProductOptionRepositoryV1DeleteByIdDelete($sku, $id);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="get_configurable_product_option_repository_v1_get_list_get"></a>![Method: ](https://apidocs.io/img/method.png ".ConfigurableProductOptionRepositoryV1Controller.getConfigurableProductOptionRepositoryV1GetListGet") getConfigurableProductOptionRepositoryV1GetListGet

> *Tags:*  ``` Skips Authentication ``` 

> Get all options for configurable product


```php
function getConfigurableProductOptionRepositoryV1GetListGet($sku)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| sku |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$sku = 'sku';

$result = $configurableProductOptionRepositoryV1->getConfigurableProductOptionRepositoryV1GetListGet($sku);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_configurable_product_option_repository_v1_save_post"></a>![Method: ](https://apidocs.io/img/method.png ".ConfigurableProductOptionRepositoryV1Controller.createConfigurableProductOptionRepositoryV1SavePost") createConfigurableProductOptionRepositoryV1SavePost

> *Tags:*  ``` Skips Authentication ``` 

> Save option


```php
function createConfigurableProductOptionRepositoryV1SavePost(
        $sku,
        $configurableProductOptionRepositoryV1SavePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| sku |  ``` Required ```  | TODO: Add a parameter description |
| configurableProductOptionRepositoryV1SavePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$sku = 'sku';
$configurableProductOptionRepositoryV1SavePostBody = new ConfigurableProductOptionRepositoryV1SavePutBody();

$result = $configurableProductOptionRepositoryV1->createConfigurableProductOptionRepositoryV1SavePost($sku, $configurableProductOptionRepositoryV1SavePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="ebizmarts_sage_pay_suite_server_management_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".EbizmartsSagePaySuiteServerManagementV1Controller") EbizmartsSagePaySuiteServerManagementV1Controller

### Get singleton instance

The singleton instance of the ``` EbizmartsSagePaySuiteServerManagementV1Controller ``` class can be accessed from the API Client.

```php
$ebizmartsSagePaySuiteServerManagementV1 = $client->getEbizmartsSagePaySuiteServerManagementV1();
```

### <a name="create_ebizmarts_sage_pay_suite_server_management_v1_save_payment_information_and_place_order_post"></a>![Method: ](https://apidocs.io/img/method.png ".EbizmartsSagePaySuiteServerManagementV1Controller.createEbizmartsSagePaySuiteServerManagementV1SavePaymentInformationAndPlaceOrderPost") createEbizmartsSagePaySuiteServerManagementV1SavePaymentInformationAndPlaceOrderPost

> *Tags:*  ``` Skips Authentication ``` 

> Set payment information and place order for a specified cart.


```php
function createEbizmartsSagePaySuiteServerManagementV1SavePaymentInformationAndPlaceOrderPost($ebizmartsSagePaySuiteServerManagementV1SavePaymentInformationAndPlaceOrderPostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| ebizmartsSagePaySuiteServerManagementV1SavePaymentInformationAndPlaceOrderPostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$ebizmartsSagePaySuiteServerManagementV1SavePaymentInformationAndPlaceOrderPostBody = new EbizmartsSagePaySuiteServerManagementV1SavePaymentInformationAndPlaceOrderPostBody();

$result = $ebizmartsSagePaySuiteServerManagementV1->createEbizmartsSagePaySuiteServerManagementV1SavePaymentInformationAndPlaceOrderPost($ebizmartsSagePaySuiteServerManagementV1SavePaymentInformationAndPlaceOrderPostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="ebizmarts_sage_pay_suite_guest_server_management_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".EbizmartsSagePaySuiteGuestServerManagementV1Controller") EbizmartsSagePaySuiteGuestServerManagementV1Controller

### Get singleton instance

The singleton instance of the ``` EbizmartsSagePaySuiteGuestServerManagementV1Controller ``` class can be accessed from the API Client.

```php
$ebizmartsSagePaySuiteGuestServerManagementV1 = $client->getEbizmartsSagePaySuiteGuestServerManagementV1();
```

### <a name="create_ebizmarts_sage_pay_suite_guest_server_management_v1_save_payment_information_and_place_order_post"></a>![Method: ](https://apidocs.io/img/method.png ".EbizmartsSagePaySuiteGuestServerManagementV1Controller.createEbizmartsSagePaySuiteGuestServerManagementV1SavePaymentInformationAndPlaceOrderPost") createEbizmartsSagePaySuiteGuestServerManagementV1SavePaymentInformationAndPlaceOrderPost

> *Tags:*  ``` Skips Authentication ``` 

> Set payment information and place order for a specified cart.


```php
function createEbizmartsSagePaySuiteGuestServerManagementV1SavePaymentInformationAndPlaceOrderPost($ebizmartsSagePaySuiteGuestServerManagementV1SavePaymentInformationAndPlaceOrderPostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| ebizmartsSagePaySuiteGuestServerManagementV1SavePaymentInformationAndPlaceOrderPostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$ebizmartsSagePaySuiteGuestServerManagementV1SavePaymentInformationAndPlaceOrderPostBody = new EbizmartsSagePaySuiteGuestServerManagementV1SavePaymentInformationAndPlaceOrderPostBody();

$result = $ebizmartsSagePaySuiteGuestServerManagementV1->createEbizmartsSagePaySuiteGuestServerManagementV1SavePaymentInformationAndPlaceOrderPost($ebizmartsSagePaySuiteGuestServerManagementV1SavePaymentInformationAndPlaceOrderPostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="ebizmarts_sage_pay_suite_form_management_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".EbizmartsSagePaySuiteFormManagementV1Controller") EbizmartsSagePaySuiteFormManagementV1Controller

### Get singleton instance

The singleton instance of the ``` EbizmartsSagePaySuiteFormManagementV1Controller ``` class can be accessed from the API Client.

```php
$ebizmartsSagePaySuiteFormManagementV1 = $client->getEbizmartsSagePaySuiteFormManagementV1();
```

### <a name="get_ebizmarts_sage_pay_suite_form_management_v1_get_encrypted_request_get"></a>![Method: ](https://apidocs.io/img/method.png ".EbizmartsSagePaySuiteFormManagementV1Controller.getEbizmartsSagePaySuiteFormManagementV1GetEncryptedRequestGet") getEbizmartsSagePaySuiteFormManagementV1GetEncryptedRequestGet

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function getEbizmartsSagePaySuiteFormManagementV1GetEncryptedRequestGet($cartId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$cartId = 'cartId';

$result = $ebizmartsSagePaySuiteFormManagementV1->getEbizmartsSagePaySuiteFormManagementV1GetEncryptedRequestGet($cartId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="ebizmarts_sage_pay_suite_guest_form_management_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".EbizmartsSagePaySuiteGuestFormManagementV1Controller") EbizmartsSagePaySuiteGuestFormManagementV1Controller

### Get singleton instance

The singleton instance of the ``` EbizmartsSagePaySuiteGuestFormManagementV1Controller ``` class can be accessed from the API Client.

```php
$ebizmartsSagePaySuiteGuestFormManagementV1 = $client->getEbizmartsSagePaySuiteGuestFormManagementV1();
```

### <a name="get_ebizmarts_sage_pay_suite_guest_form_management_v1_get_encrypted_request_get"></a>![Method: ](https://apidocs.io/img/method.png ".EbizmartsSagePaySuiteGuestFormManagementV1Controller.getEbizmartsSagePaySuiteGuestFormManagementV1GetEncryptedRequestGet") getEbizmartsSagePaySuiteGuestFormManagementV1GetEncryptedRequestGet

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function getEbizmartsSagePaySuiteGuestFormManagementV1GetEncryptedRequestGet($cartId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$cartId = 'cartId';

$result = $ebizmartsSagePaySuiteGuestFormManagementV1->getEbizmartsSagePaySuiteGuestFormManagementV1GetEncryptedRequestGet($cartId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="ebizmarts_sage_pay_suite_pay_pal_management_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".EbizmartsSagePaySuitePayPalManagementV1Controller") EbizmartsSagePaySuitePayPalManagementV1Controller

### Get singleton instance

The singleton instance of the ``` EbizmartsSagePaySuitePayPalManagementV1Controller ``` class can be accessed from the API Client.

```php
$ebizmartsSagePaySuitePayPalManagementV1 = $client->getEbizmartsSagePaySuitePayPalManagementV1();
```

### <a name="get_ebizmarts_sage_pay_suite_pay_pal_management_v1_save_payment_information_and_place_order_get"></a>![Method: ](https://apidocs.io/img/method.png ".EbizmartsSagePaySuitePayPalManagementV1Controller.getEbizmartsSagePaySuitePayPalManagementV1SavePaymentInformationAndPlaceOrderGet") getEbizmartsSagePaySuitePayPalManagementV1SavePaymentInformationAndPlaceOrderGet

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function getEbizmartsSagePaySuitePayPalManagementV1SavePaymentInformationAndPlaceOrderGet($cartId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$cartId = 'cartId';

$result = $ebizmartsSagePaySuitePayPalManagementV1->getEbizmartsSagePaySuitePayPalManagementV1SavePaymentInformationAndPlaceOrderGet($cartId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="ebizmarts_sage_pay_suite_guest_pay_pal_management_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".EbizmartsSagePaySuiteGuestPayPalManagementV1Controller") EbizmartsSagePaySuiteGuestPayPalManagementV1Controller

### Get singleton instance

The singleton instance of the ``` EbizmartsSagePaySuiteGuestPayPalManagementV1Controller ``` class can be accessed from the API Client.

```php
$ebizmartsSagePaySuiteGuestPayPalManagementV1 = $client->getEbizmartsSagePaySuiteGuestPayPalManagementV1();
```

### <a name="get_ebizmarts_sage_pay_suite_guest_pay_pal_management_v1_save_payment_information_and_place_order_get"></a>![Method: ](https://apidocs.io/img/method.png ".EbizmartsSagePaySuiteGuestPayPalManagementV1Controller.getEbizmartsSagePaySuiteGuestPayPalManagementV1SavePaymentInformationAndPlaceOrderGet") getEbizmartsSagePaySuiteGuestPayPalManagementV1SavePaymentInformationAndPlaceOrderGet

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function getEbizmartsSagePaySuiteGuestPayPalManagementV1SavePaymentInformationAndPlaceOrderGet($cartId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$cartId = 'cartId';

$result = $ebizmartsSagePaySuiteGuestPayPalManagementV1->getEbizmartsSagePaySuiteGuestPayPalManagementV1SavePaymentInformationAndPlaceOrderGet($cartId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="ebizmarts_sage_pay_suite_pi_merchant_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".EbizmartsSagePaySuitePiMerchantV1Controller") EbizmartsSagePaySuitePiMerchantV1Controller

### Get singleton instance

The singleton instance of the ``` EbizmartsSagePaySuitePiMerchantV1Controller ``` class can be accessed from the API Client.

```php
$ebizmartsSagePaySuitePiMerchantV1 = $client->getEbizmartsSagePaySuitePiMerchantV1();
```

### <a name="get_ebizmarts_sage_pay_suite_pi_merchant_v1_get_session_key_get"></a>![Method: ](https://apidocs.io/img/method.png ".EbizmartsSagePaySuitePiMerchantV1Controller.getEbizmartsSagePaySuitePiMerchantV1GetSessionKeyGet") getEbizmartsSagePaySuitePiMerchantV1GetSessionKeyGet

> *Tags:*  ``` Skips Authentication ``` 

> Creates a merchant session key (MSK).


```php
function getEbizmartsSagePaySuitePiMerchantV1GetSessionKeyGet()
```

#### Example Usage

```php

$result = $ebizmartsSagePaySuitePiMerchantV1->getEbizmartsSagePaySuitePiMerchantV1GetSessionKeyGet();

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="ebizmarts_sage_pay_suite_pi_management_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".EbizmartsSagePaySuitePiManagementV1Controller") EbizmartsSagePaySuitePiManagementV1Controller

### Get singleton instance

The singleton instance of the ``` EbizmartsSagePaySuitePiManagementV1Controller ``` class can be accessed from the API Client.

```php
$ebizmartsSagePaySuitePiManagementV1 = $client->getEbizmartsSagePaySuitePiManagementV1();
```

### <a name="create_ebizmarts_sage_pay_suite_pi_management_v1_save_payment_information_and_place_order_post"></a>![Method: ](https://apidocs.io/img/method.png ".EbizmartsSagePaySuitePiManagementV1Controller.createEbizmartsSagePaySuitePiManagementV1SavePaymentInformationAndPlaceOrderPost") createEbizmartsSagePaySuitePiManagementV1SavePaymentInformationAndPlaceOrderPost

> *Tags:*  ``` Skips Authentication ``` 

> Set payment information and place order for a specified cart.


```php
function createEbizmartsSagePaySuitePiManagementV1SavePaymentInformationAndPlaceOrderPost($ebizmartsSagePaySuitePiManagementV1SavePaymentInformationAndPlaceOrderPostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| ebizmartsSagePaySuitePiManagementV1SavePaymentInformationAndPlaceOrderPostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$ebizmartsSagePaySuitePiManagementV1SavePaymentInformationAndPlaceOrderPostBody = new EbizmartsSagePaySuitePiManagementV1SavePaymentInformationAndPlaceOrderPostBody();

$result = $ebizmartsSagePaySuitePiManagementV1->createEbizmartsSagePaySuitePiManagementV1SavePaymentInformationAndPlaceOrderPost($ebizmartsSagePaySuitePiManagementV1SavePaymentInformationAndPlaceOrderPostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="ebizmarts_sage_pay_suite_guest_pi_management_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".EbizmartsSagePaySuiteGuestPiManagementV1Controller") EbizmartsSagePaySuiteGuestPiManagementV1Controller

### Get singleton instance

The singleton instance of the ``` EbizmartsSagePaySuiteGuestPiManagementV1Controller ``` class can be accessed from the API Client.

```php
$ebizmartsSagePaySuiteGuestPiManagementV1 = $client->getEbizmartsSagePaySuiteGuestPiManagementV1();
```

### <a name="create_ebizmarts_sage_pay_suite_guest_pi_management_v1_save_payment_information_and_place_order_post"></a>![Method: ](https://apidocs.io/img/method.png ".EbizmartsSagePaySuiteGuestPiManagementV1Controller.createEbizmartsSagePaySuiteGuestPiManagementV1SavePaymentInformationAndPlaceOrderPost") createEbizmartsSagePaySuiteGuestPiManagementV1SavePaymentInformationAndPlaceOrderPost

> *Tags:*  ``` Skips Authentication ``` 

> Set payment information and place order for a specified cart.


```php
function createEbizmartsSagePaySuiteGuestPiManagementV1SavePaymentInformationAndPlaceOrderPost($ebizmartsSagePaySuiteGuestPiManagementV1SavePaymentInformationAndPlaceOrderPostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| ebizmartsSagePaySuiteGuestPiManagementV1SavePaymentInformationAndPlaceOrderPostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$ebizmartsSagePaySuiteGuestPiManagementV1SavePaymentInformationAndPlaceOrderPostBody = new EbizmartsSagePaySuiteGuestPiManagementV1SavePaymentInformationAndPlaceOrderPostBody();

$result = $ebizmartsSagePaySuiteGuestPiManagementV1->createEbizmartsSagePaySuiteGuestPiManagementV1SavePaymentInformationAndPlaceOrderPost($ebizmartsSagePaySuiteGuestPiManagementV1SavePaymentInformationAndPlaceOrderPostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="integration_admin_token_service_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".IntegrationAdminTokenServiceV1Controller") IntegrationAdminTokenServiceV1Controller

### Get singleton instance

The singleton instance of the ``` IntegrationAdminTokenServiceV1Controller ``` class can be accessed from the API Client.

```php
$integrationAdminTokenServiceV1 = $client->getIntegrationAdminTokenServiceV1();
```

### <a name="create_integration_admin_token_service_v1_create_admin_access_token_post"></a>![Method: ](https://apidocs.io/img/method.png ".IntegrationAdminTokenServiceV1Controller.createIntegrationAdminTokenServiceV1CreateAdminAccessTokenPost") createIntegrationAdminTokenServiceV1CreateAdminAccessTokenPost

> *Tags:*  ``` Skips Authentication ``` 

> Create access token for admin given the admin credentials.


```php
function createIntegrationAdminTokenServiceV1CreateAdminAccessTokenPost($integrationAdminTokenServiceV1CreateAdminAccessTokenPostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| integrationAdminTokenServiceV1CreateAdminAccessTokenPostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$integrationAdminTokenServiceV1CreateAdminAccessTokenPostBody = new IntegrationAdminTokenServiceV1CreateAdminAccessTokenPostBody();

$result = $integrationAdminTokenServiceV1->createIntegrationAdminTokenServiceV1CreateAdminAccessTokenPost($integrationAdminTokenServiceV1CreateAdminAccessTokenPostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 500 | Internal Server error |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="integration_customer_token_service_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".IntegrationCustomerTokenServiceV1Controller") IntegrationCustomerTokenServiceV1Controller

### Get singleton instance

The singleton instance of the ``` IntegrationCustomerTokenServiceV1Controller ``` class can be accessed from the API Client.

```php
$integrationCustomerTokenServiceV1 = $client->getIntegrationCustomerTokenServiceV1();
```

### <a name="create_integration_customer_token_service_v1_create_customer_access_token_post"></a>![Method: ](https://apidocs.io/img/method.png ".IntegrationCustomerTokenServiceV1Controller.createIntegrationCustomerTokenServiceV1CreateCustomerAccessTokenPost") createIntegrationCustomerTokenServiceV1CreateCustomerAccessTokenPost

> *Tags:*  ``` Skips Authentication ``` 

> Create access token for admin given the customer credentials.


```php
function createIntegrationCustomerTokenServiceV1CreateCustomerAccessTokenPost($integrationCustomerTokenServiceV1CreateCustomerAccessTokenPostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| integrationCustomerTokenServiceV1CreateCustomerAccessTokenPostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$integrationCustomerTokenServiceV1CreateCustomerAccessTokenPostBody = new IntegrationCustomerTokenServiceV1CreateCustomerAccessTokenPostBody();

$result = $integrationCustomerTokenServiceV1->createIntegrationCustomerTokenServiceV1CreateCustomerAccessTokenPost($integrationCustomerTokenServiceV1CreateCustomerAccessTokenPostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="downloadable_link_repository_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".DownloadableLinkRepositoryV1Controller") DownloadableLinkRepositoryV1Controller

### Get singleton instance

The singleton instance of the ``` DownloadableLinkRepositoryV1Controller ``` class can be accessed from the API Client.

```php
$downloadableLinkRepositoryV1 = $client->getDownloadableLinkRepositoryV1();
```

### <a name="get_downloadable_link_repository_v1_get_list_get"></a>![Method: ](https://apidocs.io/img/method.png ".DownloadableLinkRepositoryV1Controller.getDownloadableLinkRepositoryV1GetListGet") getDownloadableLinkRepositoryV1GetListGet

> *Tags:*  ``` Skips Authentication ``` 

> List of links with associated samples


```php
function getDownloadableLinkRepositoryV1GetListGet($sku)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| sku |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$sku = 'sku';

$result = $downloadableLinkRepositoryV1->getDownloadableLinkRepositoryV1GetListGet($sku);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_downloadable_link_repository_v1_save_post"></a>![Method: ](https://apidocs.io/img/method.png ".DownloadableLinkRepositoryV1Controller.createDownloadableLinkRepositoryV1SavePost") createDownloadableLinkRepositoryV1SavePost

> *Tags:*  ``` Skips Authentication ``` 

> Update downloadable link of the given product (link type and its resources cannot be changed)


```php
function createDownloadableLinkRepositoryV1SavePost(
        $sku,
        $downloadableLinkRepositoryV1SavePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| sku |  ``` Required ```  | TODO: Add a parameter description |
| downloadableLinkRepositoryV1SavePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$sku = 'sku';
$downloadableLinkRepositoryV1SavePostBody = new DownloadableLinkRepositoryV1SavePostBody();

$result = $downloadableLinkRepositoryV1->createDownloadableLinkRepositoryV1SavePost($sku, $downloadableLinkRepositoryV1SavePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="update_downloadable_link_repository_v1_save_put"></a>![Method: ](https://apidocs.io/img/method.png ".DownloadableLinkRepositoryV1Controller.updateDownloadableLinkRepositoryV1SavePut") updateDownloadableLinkRepositoryV1SavePut

> *Tags:*  ``` Skips Authentication ``` 

> Update downloadable link of the given product (link type and its resources cannot be changed)


```php
function updateDownloadableLinkRepositoryV1SavePut(
        $sku,
        $id,
        $downloadableLinkRepositoryV1SavePutBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| sku |  ``` Required ```  | TODO: Add a parameter description |
| id |  ``` Required ```  | TODO: Add a parameter description |
| downloadableLinkRepositoryV1SavePutBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$sku = 'sku';
$id = 'id';
$downloadableLinkRepositoryV1SavePutBody = new DownloadableLinkRepositoryV1SavePostBody();

$result = $downloadableLinkRepositoryV1->updateDownloadableLinkRepositoryV1SavePut($sku, $id, $downloadableLinkRepositoryV1SavePutBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="delete_downloadable_link_repository_v1_delete_delete"></a>![Method: ](https://apidocs.io/img/method.png ".DownloadableLinkRepositoryV1Controller.deleteDownloadableLinkRepositoryV1DeleteDelete") deleteDownloadableLinkRepositoryV1DeleteDelete

> *Tags:*  ``` Skips Authentication ``` 

> Delete downloadable link


```php
function deleteDownloadableLinkRepositoryV1DeleteDelete($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = 144;

$result = $downloadableLinkRepositoryV1->deleteDownloadableLinkRepositoryV1DeleteDelete($id);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="downloadable_sample_repository_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".DownloadableSampleRepositoryV1Controller") DownloadableSampleRepositoryV1Controller

### Get singleton instance

The singleton instance of the ``` DownloadableSampleRepositoryV1Controller ``` class can be accessed from the API Client.

```php
$downloadableSampleRepositoryV1 = $client->getDownloadableSampleRepositoryV1();
```

### <a name="get_downloadable_sample_repository_v1_get_list_get"></a>![Method: ](https://apidocs.io/img/method.png ".DownloadableSampleRepositoryV1Controller.getDownloadableSampleRepositoryV1GetListGet") getDownloadableSampleRepositoryV1GetListGet

> *Tags:*  ``` Skips Authentication ``` 

> List of samples for downloadable product


```php
function getDownloadableSampleRepositoryV1GetListGet($sku)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| sku |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$sku = 'sku';

$result = $downloadableSampleRepositoryV1->getDownloadableSampleRepositoryV1GetListGet($sku);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_downloadable_sample_repository_v1_save_post"></a>![Method: ](https://apidocs.io/img/method.png ".DownloadableSampleRepositoryV1Controller.createDownloadableSampleRepositoryV1SavePost") createDownloadableSampleRepositoryV1SavePost

> *Tags:*  ``` Skips Authentication ``` 

> Update downloadable sample of the given product


```php
function createDownloadableSampleRepositoryV1SavePost(
        $sku,
        $downloadableSampleRepositoryV1SavePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| sku |  ``` Required ```  | TODO: Add a parameter description |
| downloadableSampleRepositoryV1SavePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$sku = 'sku';
$downloadableSampleRepositoryV1SavePostBody = new DownloadableSampleRepositoryV1SavePostBody();

$result = $downloadableSampleRepositoryV1->createDownloadableSampleRepositoryV1SavePost($sku, $downloadableSampleRepositoryV1SavePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="update_downloadable_sample_repository_v1_save_put"></a>![Method: ](https://apidocs.io/img/method.png ".DownloadableSampleRepositoryV1Controller.updateDownloadableSampleRepositoryV1SavePut") updateDownloadableSampleRepositoryV1SavePut

> *Tags:*  ``` Skips Authentication ``` 

> Update downloadable sample of the given product


```php
function updateDownloadableSampleRepositoryV1SavePut(
        $sku,
        $id,
        $downloadableSampleRepositoryV1SavePutBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| sku |  ``` Required ```  | TODO: Add a parameter description |
| id |  ``` Required ```  | TODO: Add a parameter description |
| downloadableSampleRepositoryV1SavePutBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$sku = 'sku';
$id = 'id';
$downloadableSampleRepositoryV1SavePutBody = new DownloadableSampleRepositoryV1SavePostBody();

$result = $downloadableSampleRepositoryV1->updateDownloadableSampleRepositoryV1SavePut($sku, $id, $downloadableSampleRepositoryV1SavePutBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="delete_downloadable_sample_repository_v1_delete_delete"></a>![Method: ](https://apidocs.io/img/method.png ".DownloadableSampleRepositoryV1Controller.deleteDownloadableSampleRepositoryV1DeleteDelete") deleteDownloadableSampleRepositoryV1DeleteDelete

> *Tags:*  ``` Skips Authentication ``` 

> Delete downloadable sample


```php
function deleteDownloadableSampleRepositoryV1DeleteDelete($id)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = 144;

$result = $downloadableSampleRepositoryV1->deleteDownloadableSampleRepositoryV1DeleteDelete($id);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="gift_message_cart_repository_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".GiftMessageCartRepositoryV1Controller") GiftMessageCartRepositoryV1Controller

### Get singleton instance

The singleton instance of the ``` GiftMessageCartRepositoryV1Controller ``` class can be accessed from the API Client.

```php
$giftMessageCartRepositoryV1 = $client->getGiftMessageCartRepositoryV1();
```

### <a name="get_gift_message_cart_repository_v1_get_get"></a>![Method: ](https://apidocs.io/img/method.png ".GiftMessageCartRepositoryV1Controller.getGiftMessageCartRepositoryV1GetGet") getGiftMessageCartRepositoryV1GetGet

> *Tags:*  ``` Skips Authentication ``` 

> Return the gift message for a specified order.


```php
function getGiftMessageCartRepositoryV1GetGet($cartId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | The shopping cart ID. |



#### Example Usage

```php
$cartId = 144;

$result = $giftMessageCartRepositoryV1->getGiftMessageCartRepositoryV1GetGet($cartId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_gift_message_cart_repository_v1_save_post"></a>![Method: ](https://apidocs.io/img/method.png ".GiftMessageCartRepositoryV1Controller.createGiftMessageCartRepositoryV1SavePost") createGiftMessageCartRepositoryV1SavePost

> *Tags:*  ``` Skips Authentication ``` 

> Set the gift message for an entire order.


```php
function createGiftMessageCartRepositoryV1SavePost(
        $cartId,
        $giftMessageCartRepositoryV1SavePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | The cart ID. |
| giftMessageCartRepositoryV1SavePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$cartId = 144;
$giftMessageCartRepositoryV1SavePostBody = new GiftMessageCartRepositoryV1SavePostBody();

$result = $giftMessageCartRepositoryV1->createGiftMessageCartRepositoryV1SavePost($cartId, $giftMessageCartRepositoryV1SavePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="get_gift_message_cart_repository_v1_get_get1"></a>![Method: ](https://apidocs.io/img/method.png ".GiftMessageCartRepositoryV1Controller.getGiftMessageCartRepositoryV1GetGet1") getGiftMessageCartRepositoryV1GetGet1

> *Tags:*  ``` Skips Authentication ``` 

> Return the gift message for a specified order.


```php
function getGiftMessageCartRepositoryV1GetGet1()
```

#### Example Usage

```php

$result = $giftMessageCartRepositoryV1->getGiftMessageCartRepositoryV1GetGet1();

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_gift_message_cart_repository_v1_save_post1"></a>![Method: ](https://apidocs.io/img/method.png ".GiftMessageCartRepositoryV1Controller.createGiftMessageCartRepositoryV1SavePost1") createGiftMessageCartRepositoryV1SavePost1

> *Tags:*  ``` Skips Authentication ``` 

> Set the gift message for an entire order.


```php
function createGiftMessageCartRepositoryV1SavePost1($giftMessageCartRepositoryV1SavePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| giftMessageCartRepositoryV1SavePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$giftMessageCartRepositoryV1SavePostBody = new GiftMessageCartRepositoryV1SavePostBody();

$result = $giftMessageCartRepositoryV1->createGiftMessageCartRepositoryV1SavePost1($giftMessageCartRepositoryV1SavePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="gift_message_item_repository_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".GiftMessageItemRepositoryV1Controller") GiftMessageItemRepositoryV1Controller

### Get singleton instance

The singleton instance of the ``` GiftMessageItemRepositoryV1Controller ``` class can be accessed from the API Client.

```php
$giftMessageItemRepositoryV1 = $client->getGiftMessageItemRepositoryV1();
```

### <a name="get_gift_message_item_repository_v1_get_get"></a>![Method: ](https://apidocs.io/img/method.png ".GiftMessageItemRepositoryV1Controller.getGiftMessageItemRepositoryV1GetGet") getGiftMessageItemRepositoryV1GetGet

> *Tags:*  ``` Skips Authentication ``` 

> Return the gift message for a specified item in a specified shopping cart.


```php
function getGiftMessageItemRepositoryV1GetGet(
        $cartId,
        $itemId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | The shopping cart ID. |
| itemId |  ``` Required ```  | The item ID. |



#### Example Usage

```php
$cartId = 144;
$itemId = 144;

$result = $giftMessageItemRepositoryV1->getGiftMessageItemRepositoryV1GetGet($cartId, $itemId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_gift_message_item_repository_v1_save_post"></a>![Method: ](https://apidocs.io/img/method.png ".GiftMessageItemRepositoryV1Controller.createGiftMessageItemRepositoryV1SavePost") createGiftMessageItemRepositoryV1SavePost

> *Tags:*  ``` Skips Authentication ``` 

> Set the gift message for a specified item in a specified shopping cart.


```php
function createGiftMessageItemRepositoryV1SavePost(
        $cartId,
        $itemId,
        $giftMessageItemRepositoryV1SavePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | The cart ID. |
| itemId |  ``` Required ```  | The item ID. |
| giftMessageItemRepositoryV1SavePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$cartId = 144;
$itemId = 144;
$giftMessageItemRepositoryV1SavePostBody = new GiftMessageItemRepositoryV1SavePostBody();

$result = $giftMessageItemRepositoryV1->createGiftMessageItemRepositoryV1SavePost($cartId, $itemId, $giftMessageItemRepositoryV1SavePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="get_gift_message_item_repository_v1_get_get1"></a>![Method: ](https://apidocs.io/img/method.png ".GiftMessageItemRepositoryV1Controller.getGiftMessageItemRepositoryV1GetGet1") getGiftMessageItemRepositoryV1GetGet1

> *Tags:*  ``` Skips Authentication ``` 

> Return the gift message for a specified item in a specified shopping cart.


```php
function getGiftMessageItemRepositoryV1GetGet1($itemId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| itemId |  ``` Required ```  | The item ID. |



#### Example Usage

```php
$itemId = 144;

$result = $giftMessageItemRepositoryV1->getGiftMessageItemRepositoryV1GetGet1($itemId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_gift_message_item_repository_v1_save_post1"></a>![Method: ](https://apidocs.io/img/method.png ".GiftMessageItemRepositoryV1Controller.createGiftMessageItemRepositoryV1SavePost1") createGiftMessageItemRepositoryV1SavePost1

> *Tags:*  ``` Skips Authentication ``` 

> Set the gift message for a specified item in a specified shopping cart.


```php
function createGiftMessageItemRepositoryV1SavePost1(
        $itemId,
        $giftMessageItemRepositoryV1SavePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| itemId |  ``` Required ```  | The item ID. |
| giftMessageItemRepositoryV1SavePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$itemId = 144;
$giftMessageItemRepositoryV1SavePostBody = new GiftMessageItemRepositoryV1SavePostBody();

$result = $giftMessageItemRepositoryV1->createGiftMessageItemRepositoryV1SavePost1($itemId, $giftMessageItemRepositoryV1SavePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="gift_message_guest_cart_repository_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".GiftMessageGuestCartRepositoryV1Controller") GiftMessageGuestCartRepositoryV1Controller

### Get singleton instance

The singleton instance of the ``` GiftMessageGuestCartRepositoryV1Controller ``` class can be accessed from the API Client.

```php
$giftMessageGuestCartRepositoryV1 = $client->getGiftMessageGuestCartRepositoryV1();
```

### <a name="get_gift_message_guest_cart_repository_v1_get_get"></a>![Method: ](https://apidocs.io/img/method.png ".GiftMessageGuestCartRepositoryV1Controller.getGiftMessageGuestCartRepositoryV1GetGet") getGiftMessageGuestCartRepositoryV1GetGet

> *Tags:*  ``` Skips Authentication ``` 

> Return the gift message for a specified order.


```php
function getGiftMessageGuestCartRepositoryV1GetGet($cartId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | The shopping cart ID. |



#### Example Usage

```php
$cartId = 'cartId';

$result = $giftMessageGuestCartRepositoryV1->getGiftMessageGuestCartRepositoryV1GetGet($cartId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 0 | Unexpected error |



### <a name="create_gift_message_guest_cart_repository_v1_save_post"></a>![Method: ](https://apidocs.io/img/method.png ".GiftMessageGuestCartRepositoryV1Controller.createGiftMessageGuestCartRepositoryV1SavePost") createGiftMessageGuestCartRepositoryV1SavePost

> *Tags:*  ``` Skips Authentication ``` 

> Set the gift message for an entire order.


```php
function createGiftMessageGuestCartRepositoryV1SavePost(
        $cartId,
        $giftMessageGuestCartRepositoryV1SavePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | The cart ID. |
| giftMessageGuestCartRepositoryV1SavePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$cartId = 'cartId';
$giftMessageGuestCartRepositoryV1SavePostBody = new GiftMessageGuestCartRepositoryV1SavePostBody();

$result = $giftMessageGuestCartRepositoryV1->createGiftMessageGuestCartRepositoryV1SavePost($cartId, $giftMessageGuestCartRepositoryV1SavePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="gift_message_guest_item_repository_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".GiftMessageGuestItemRepositoryV1Controller") GiftMessageGuestItemRepositoryV1Controller

### Get singleton instance

The singleton instance of the ``` GiftMessageGuestItemRepositoryV1Controller ``` class can be accessed from the API Client.

```php
$giftMessageGuestItemRepositoryV1 = $client->getGiftMessageGuestItemRepositoryV1();
```

### <a name="get_gift_message_guest_item_repository_v1_get_get"></a>![Method: ](https://apidocs.io/img/method.png ".GiftMessageGuestItemRepositoryV1Controller.getGiftMessageGuestItemRepositoryV1GetGet") getGiftMessageGuestItemRepositoryV1GetGet

> *Tags:*  ``` Skips Authentication ``` 

> Return the gift message for a specified item in a specified shopping cart.


```php
function getGiftMessageGuestItemRepositoryV1GetGet(
        $cartId,
        $itemId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | The shopping cart ID. |
| itemId |  ``` Required ```  | The item ID. |



#### Example Usage

```php
$cartId = 'cartId';
$itemId = 144;

$result = $giftMessageGuestItemRepositoryV1->getGiftMessageGuestItemRepositoryV1GetGet($cartId, $itemId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 0 | Unexpected error |



### <a name="create_gift_message_guest_item_repository_v1_save_post"></a>![Method: ](https://apidocs.io/img/method.png ".GiftMessageGuestItemRepositoryV1Controller.createGiftMessageGuestItemRepositoryV1SavePost") createGiftMessageGuestItemRepositoryV1SavePost

> *Tags:*  ``` Skips Authentication ``` 

> Set the gift message for a specified item in a specified shopping cart.


```php
function createGiftMessageGuestItemRepositoryV1SavePost(
        $cartId,
        $itemId,
        $giftMessageGuestItemRepositoryV1SavePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | The cart ID. |
| itemId |  ``` Required ```  | The item ID. |
| giftMessageGuestItemRepositoryV1SavePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$cartId = 'cartId';
$itemId = 144;
$giftMessageGuestItemRepositoryV1SavePostBody = new GiftMessageGuestItemRepositoryV1SavePostBody();

$result = $giftMessageGuestItemRepositoryV1->createGiftMessageGuestItemRepositoryV1SavePost($cartId, $itemId, $giftMessageGuestItemRepositoryV1SavePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="analytics_link_provider_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".AnalyticsLinkProviderV1Controller") AnalyticsLinkProviderV1Controller

### Get singleton instance

The singleton instance of the ``` AnalyticsLinkProviderV1Controller ``` class can be accessed from the API Client.

```php
$analyticsLinkProviderV1 = $client->getAnalyticsLinkProviderV1();
```

### <a name="get_analytics_link_provider_v1_get_get"></a>![Method: ](https://apidocs.io/img/method.png ".AnalyticsLinkProviderV1Controller.getAnalyticsLinkProviderV1GetGet") getAnalyticsLinkProviderV1GetGet

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function getAnalyticsLinkProviderV1GetGet()
```

#### Example Usage

```php

$result = $analyticsLinkProviderV1->getAnalyticsLinkProviderV1GetGet();

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="sales_rule_rule_repository_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".SalesRuleRuleRepositoryV1Controller") SalesRuleRuleRepositoryV1Controller

### Get singleton instance

The singleton instance of the ``` SalesRuleRuleRepositoryV1Controller ``` class can be accessed from the API Client.

```php
$salesRuleRuleRepositoryV1 = $client->getSalesRuleRuleRepositoryV1();
```

### <a name="get_sales_rule_rule_repository_v1_get_by_id_get"></a>![Method: ](https://apidocs.io/img/method.png ".SalesRuleRuleRepositoryV1Controller.getSalesRuleRuleRepositoryV1GetByIdGet") getSalesRuleRuleRepositoryV1GetByIdGet

> *Tags:*  ``` Skips Authentication ``` 

> Get rule by ID.


```php
function getSalesRuleRuleRepositoryV1GetByIdGet($ruleId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| ruleId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$ruleId = 144;

$result = $salesRuleRuleRepositoryV1->getSalesRuleRuleRepositoryV1GetByIdGet($ruleId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="update_sales_rule_rule_repository_v1_save_put"></a>![Method: ](https://apidocs.io/img/method.png ".SalesRuleRuleRepositoryV1Controller.updateSalesRuleRuleRepositoryV1SavePut") updateSalesRuleRuleRepositoryV1SavePut

> *Tags:*  ``` Skips Authentication ``` 

> Save sales rule.


```php
function updateSalesRuleRuleRepositoryV1SavePut(
        $ruleId,
        $salesRuleRuleRepositoryV1SavePutBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| ruleId |  ``` Required ```  | TODO: Add a parameter description |
| salesRuleRuleRepositoryV1SavePutBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$ruleId = 'ruleId';
$salesRuleRuleRepositoryV1SavePutBody = new SalesRuleRuleRepositoryV1SavePutBody();

$result = $salesRuleRuleRepositoryV1->updateSalesRuleRuleRepositoryV1SavePut($ruleId, $salesRuleRuleRepositoryV1SavePutBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="delete_sales_rule_rule_repository_v1_delete_by_id_delete"></a>![Method: ](https://apidocs.io/img/method.png ".SalesRuleRuleRepositoryV1Controller.deleteSalesRuleRuleRepositoryV1DeleteByIdDelete") deleteSalesRuleRuleRepositoryV1DeleteByIdDelete

> *Tags:*  ``` Skips Authentication ``` 

> Delete rule by ID.


```php
function deleteSalesRuleRuleRepositoryV1DeleteByIdDelete($ruleId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| ruleId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$ruleId = 144;

$result = $salesRuleRuleRepositoryV1->deleteSalesRuleRuleRepositoryV1DeleteByIdDelete($ruleId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="get_sales_rule_rule_repository_v1_get_list_get"></a>![Method: ](https://apidocs.io/img/method.png ".SalesRuleRuleRepositoryV1Controller.getSalesRuleRuleRepositoryV1GetListGet") getSalesRuleRuleRepositoryV1GetListGet

> *Tags:*  ``` Skips Authentication ``` 

> Retrieve sales rules that match te specified criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#RuleRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.


```php
function getSalesRuleRuleRepositoryV1GetListGet(
        $searchCriteriaFilterGroupsFiltersField = null,
        $searchCriteriaFilterGroupsFiltersValue = null,
        $searchCriteriaFilterGroupsFiltersConditionType = null,
        $searchCriteriaSortOrdersField = null,
        $searchCriteriaSortOrdersDirection = null,
        $searchCriteriaPageSize = null,
        $searchCriteriaCurrentPage = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| searchCriteriaFilterGroupsFiltersField |  ``` Optional ```  | Field |
| searchCriteriaFilterGroupsFiltersValue |  ``` Optional ```  | Value |
| searchCriteriaFilterGroupsFiltersConditionType |  ``` Optional ```  | Condition type |
| searchCriteriaSortOrdersField |  ``` Optional ```  | Sorting field. |
| searchCriteriaSortOrdersDirection |  ``` Optional ```  | Sorting direction. |
| searchCriteriaPageSize |  ``` Optional ```  | Page size. |
| searchCriteriaCurrentPage |  ``` Optional ```  | Current page. |



#### Example Usage

```php
$searchCriteriaFilterGroupsFiltersField = 'searchCriteria[filterGroups][][filters][][field]';
$searchCriteriaFilterGroupsFiltersValue = 'searchCriteria[filterGroups][][filters][][value]';
$searchCriteriaFilterGroupsFiltersConditionType = 'searchCriteria[filterGroups][][filters][][conditionType]';
$searchCriteriaSortOrdersField = 'searchCriteria[sortOrders][][field]';
$searchCriteriaSortOrdersDirection = 'searchCriteria[sortOrders][][direction]';
$searchCriteriaPageSize = 144;
$searchCriteriaCurrentPage = 144;

$result = $salesRuleRuleRepositoryV1->getSalesRuleRuleRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="create_sales_rule_rule_repository_v1_save_post"></a>![Method: ](https://apidocs.io/img/method.png ".SalesRuleRuleRepositoryV1Controller.createSalesRuleRuleRepositoryV1SavePost") createSalesRuleRuleRepositoryV1SavePost

> *Tags:*  ``` Skips Authentication ``` 

> Save sales rule.


```php
function createSalesRuleRuleRepositoryV1SavePost($salesRuleRuleRepositoryV1SavePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| salesRuleRuleRepositoryV1SavePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$salesRuleRuleRepositoryV1SavePostBody = new SalesRuleRuleRepositoryV1SavePutBody();

$result = $salesRuleRuleRepositoryV1->createSalesRuleRuleRepositoryV1SavePost($salesRuleRuleRepositoryV1SavePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="sales_rule_coupon_repository_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".SalesRuleCouponRepositoryV1Controller") SalesRuleCouponRepositoryV1Controller

### Get singleton instance

The singleton instance of the ``` SalesRuleCouponRepositoryV1Controller ``` class can be accessed from the API Client.

```php
$salesRuleCouponRepositoryV1 = $client->getSalesRuleCouponRepositoryV1();
```

### <a name="get_sales_rule_coupon_repository_v1_get_by_id_get"></a>![Method: ](https://apidocs.io/img/method.png ".SalesRuleCouponRepositoryV1Controller.getSalesRuleCouponRepositoryV1GetByIdGet") getSalesRuleCouponRepositoryV1GetByIdGet

> *Tags:*  ``` Skips Authentication ``` 

> Get coupon by coupon id.


```php
function getSalesRuleCouponRepositoryV1GetByIdGet($couponId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| couponId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$couponId = 186;

$result = $salesRuleCouponRepositoryV1->getSalesRuleCouponRepositoryV1GetByIdGet($couponId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="update_sales_rule_coupon_repository_v1_save_put"></a>![Method: ](https://apidocs.io/img/method.png ".SalesRuleCouponRepositoryV1Controller.updateSalesRuleCouponRepositoryV1SavePut") updateSalesRuleCouponRepositoryV1SavePut

> *Tags:*  ``` Skips Authentication ``` 

> Save a coupon.


```php
function updateSalesRuleCouponRepositoryV1SavePut(
        $couponId,
        $salesRuleCouponRepositoryV1SavePutBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| couponId |  ``` Required ```  | TODO: Add a parameter description |
| salesRuleCouponRepositoryV1SavePutBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$couponId = 'couponId';
$salesRuleCouponRepositoryV1SavePutBody = new SalesRuleCouponRepositoryV1SavePutBody();

$result = $salesRuleCouponRepositoryV1->updateSalesRuleCouponRepositoryV1SavePut($couponId, $salesRuleCouponRepositoryV1SavePutBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="delete_sales_rule_coupon_repository_v1_delete_by_id_delete"></a>![Method: ](https://apidocs.io/img/method.png ".SalesRuleCouponRepositoryV1Controller.deleteSalesRuleCouponRepositoryV1DeleteByIdDelete") deleteSalesRuleCouponRepositoryV1DeleteByIdDelete

> *Tags:*  ``` Skips Authentication ``` 

> Delete coupon by coupon id.


```php
function deleteSalesRuleCouponRepositoryV1DeleteByIdDelete($couponId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| couponId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$couponId = 186;

$result = $salesRuleCouponRepositoryV1->deleteSalesRuleCouponRepositoryV1DeleteByIdDelete($couponId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="get_sales_rule_coupon_repository_v1_get_list_get"></a>![Method: ](https://apidocs.io/img/method.png ".SalesRuleCouponRepositoryV1Controller.getSalesRuleCouponRepositoryV1GetListGet") getSalesRuleCouponRepositoryV1GetListGet

> *Tags:*  ``` Skips Authentication ``` 

> Retrieve a coupon using the specified search criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#CouponRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.


```php
function getSalesRuleCouponRepositoryV1GetListGet(
        $searchCriteriaFilterGroupsFiltersField = null,
        $searchCriteriaFilterGroupsFiltersValue = null,
        $searchCriteriaFilterGroupsFiltersConditionType = null,
        $searchCriteriaSortOrdersField = null,
        $searchCriteriaSortOrdersDirection = null,
        $searchCriteriaPageSize = null,
        $searchCriteriaCurrentPage = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| searchCriteriaFilterGroupsFiltersField |  ``` Optional ```  | Field |
| searchCriteriaFilterGroupsFiltersValue |  ``` Optional ```  | Value |
| searchCriteriaFilterGroupsFiltersConditionType |  ``` Optional ```  | Condition type |
| searchCriteriaSortOrdersField |  ``` Optional ```  | Sorting field. |
| searchCriteriaSortOrdersDirection |  ``` Optional ```  | Sorting direction. |
| searchCriteriaPageSize |  ``` Optional ```  | Page size. |
| searchCriteriaCurrentPage |  ``` Optional ```  | Current page. |



#### Example Usage

```php
$searchCriteriaFilterGroupsFiltersField = 'searchCriteria[filterGroups][][filters][][field]';
$searchCriteriaFilterGroupsFiltersValue = 'searchCriteria[filterGroups][][filters][][value]';
$searchCriteriaFilterGroupsFiltersConditionType = 'searchCriteria[filterGroups][][filters][][conditionType]';
$searchCriteriaSortOrdersField = 'searchCriteria[sortOrders][][field]';
$searchCriteriaSortOrdersDirection = 'searchCriteria[sortOrders][][direction]';
$searchCriteriaPageSize = 186;
$searchCriteriaCurrentPage = 186;

$result = $salesRuleCouponRepositoryV1->getSalesRuleCouponRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="create_sales_rule_coupon_repository_v1_save_post"></a>![Method: ](https://apidocs.io/img/method.png ".SalesRuleCouponRepositoryV1Controller.createSalesRuleCouponRepositoryV1SavePost") createSalesRuleCouponRepositoryV1SavePost

> *Tags:*  ``` Skips Authentication ``` 

> Save a coupon.


```php
function createSalesRuleCouponRepositoryV1SavePost($salesRuleCouponRepositoryV1SavePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| salesRuleCouponRepositoryV1SavePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$salesRuleCouponRepositoryV1SavePostBody = new SalesRuleCouponRepositoryV1SavePutBody();

$result = $salesRuleCouponRepositoryV1->createSalesRuleCouponRepositoryV1SavePost($salesRuleCouponRepositoryV1SavePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="sales_rule_coupon_management_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".SalesRuleCouponManagementV1Controller") SalesRuleCouponManagementV1Controller

### Get singleton instance

The singleton instance of the ``` SalesRuleCouponManagementV1Controller ``` class can be accessed from the API Client.

```php
$salesRuleCouponManagementV1 = $client->getSalesRuleCouponManagementV1();
```

### <a name="create_sales_rule_coupon_management_v1_generate_post"></a>![Method: ](https://apidocs.io/img/method.png ".SalesRuleCouponManagementV1Controller.createSalesRuleCouponManagementV1GeneratePost") createSalesRuleCouponManagementV1GeneratePost

> *Tags:*  ``` Skips Authentication ``` 

> Generate coupon for a rule


```php
function createSalesRuleCouponManagementV1GeneratePost($salesRuleCouponManagementV1GeneratePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| salesRuleCouponManagementV1GeneratePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$salesRuleCouponManagementV1GeneratePostBody = new SalesRuleCouponManagementV1GeneratePostBody();

$result = $salesRuleCouponManagementV1->createSalesRuleCouponManagementV1GeneratePost($salesRuleCouponManagementV1GeneratePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="create_sales_rule_coupon_management_v1_delete_by_ids_post"></a>![Method: ](https://apidocs.io/img/method.png ".SalesRuleCouponManagementV1Controller.createSalesRuleCouponManagementV1DeleteByIdsPost") createSalesRuleCouponManagementV1DeleteByIdsPost

> *Tags:*  ``` Skips Authentication ``` 

> Delete coupon by coupon ids.


```php
function createSalesRuleCouponManagementV1DeleteByIdsPost($salesRuleCouponManagementV1DeleteByIdsPostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| salesRuleCouponManagementV1DeleteByIdsPostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$salesRuleCouponManagementV1DeleteByIdsPostBody = new SalesRuleCouponManagementV1DeleteByIdsPostBody();

$result = $salesRuleCouponManagementV1->createSalesRuleCouponManagementV1DeleteByIdsPost($salesRuleCouponManagementV1DeleteByIdsPostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="create_sales_rule_coupon_management_v1_delete_by_codes_post"></a>![Method: ](https://apidocs.io/img/method.png ".SalesRuleCouponManagementV1Controller.createSalesRuleCouponManagementV1DeleteByCodesPost") createSalesRuleCouponManagementV1DeleteByCodesPost

> *Tags:*  ``` Skips Authentication ``` 

> Delete coupon by coupon codes.


```php
function createSalesRuleCouponManagementV1DeleteByCodesPost($salesRuleCouponManagementV1DeleteByCodesPostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| salesRuleCouponManagementV1DeleteByCodesPostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$salesRuleCouponManagementV1DeleteByCodesPostBody = new SalesRuleCouponManagementV1DeleteByCodesPostBody();

$result = $salesRuleCouponManagementV1->createSalesRuleCouponManagementV1DeleteByCodesPost($salesRuleCouponManagementV1DeleteByCodesPostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="amazon_payment_address_management_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".AmazonPaymentAddressManagementV1Controller") AmazonPaymentAddressManagementV1Controller

### Get singleton instance

The singleton instance of the ``` AmazonPaymentAddressManagementV1Controller ``` class can be accessed from the API Client.

```php
$amazonPaymentAddressManagementV1 = $client->getAmazonPaymentAddressManagementV1();
```

### <a name="update_amazon_payment_address_management_v1_get_shipping_address_put"></a>![Method: ](https://apidocs.io/img/method.png ".AmazonPaymentAddressManagementV1Controller.updateAmazonPaymentAddressManagementV1GetShippingAddressPut") updateAmazonPaymentAddressManagementV1GetShippingAddressPut

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function updateAmazonPaymentAddressManagementV1GetShippingAddressPut(
        $amazonOrderReferenceId,
        $amazonPaymentAddressManagementV1GetShippingAddressPutBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| amazonOrderReferenceId |  ``` Required ```  | TODO: Add a parameter description |
| amazonPaymentAddressManagementV1GetShippingAddressPutBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$amazonOrderReferenceId = 'amazonOrderReferenceId';
$amazonPaymentAddressManagementV1GetShippingAddressPutBody = new AmazonPaymentAddressManagementV1GetShippingAddressPutBody();

$result = $amazonPaymentAddressManagementV1->updateAmazonPaymentAddressManagementV1GetShippingAddressPut($amazonOrderReferenceId, $amazonPaymentAddressManagementV1GetShippingAddressPutBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 0 | Unexpected error |



### <a name="update_amazon_payment_address_management_v1_get_billing_address_put"></a>![Method: ](https://apidocs.io/img/method.png ".AmazonPaymentAddressManagementV1Controller.updateAmazonPaymentAddressManagementV1GetBillingAddressPut") updateAmazonPaymentAddressManagementV1GetBillingAddressPut

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function updateAmazonPaymentAddressManagementV1GetBillingAddressPut(
        $amazonOrderReferenceId,
        $amazonPaymentAddressManagementV1GetBillingAddressPutBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| amazonOrderReferenceId |  ``` Required ```  | TODO: Add a parameter description |
| amazonPaymentAddressManagementV1GetBillingAddressPutBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$amazonOrderReferenceId = 'amazonOrderReferenceId';
$amazonPaymentAddressManagementV1GetBillingAddressPutBody = new AmazonPaymentAddressManagementV1GetShippingAddressPutBody();

$result = $amazonPaymentAddressManagementV1->updateAmazonPaymentAddressManagementV1GetBillingAddressPut($amazonOrderReferenceId, $amazonPaymentAddressManagementV1GetBillingAddressPutBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="amazon_payment_order_information_management_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".AmazonPaymentOrderInformationManagementV1Controller") AmazonPaymentOrderInformationManagementV1Controller

### Get singleton instance

The singleton instance of the ``` AmazonPaymentOrderInformationManagementV1Controller ``` class can be accessed from the API Client.

```php
$amazonPaymentOrderInformationManagementV1 = $client->getAmazonPaymentOrderInformationManagementV1();
```

### <a name="delete_amazon_payment_order_information_management_v1_remove_order_reference_delete"></a>![Method: ](https://apidocs.io/img/method.png ".AmazonPaymentOrderInformationManagementV1Controller.deleteAmazonPaymentOrderInformationManagementV1RemoveOrderReferenceDelete") deleteAmazonPaymentOrderInformationManagementV1RemoveOrderReferenceDelete

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add a method description


```php
function deleteAmazonPaymentOrderInformationManagementV1RemoveOrderReferenceDelete()
```

#### Example Usage

```php

$amazonPaymentOrderInformationManagementV1->deleteAmazonPaymentOrderInformationManagementV1RemoveOrderReferenceDelete();

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="tax_tax_rate_repository_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".TaxTaxRateRepositoryV1Controller") TaxTaxRateRepositoryV1Controller

### Get singleton instance

The singleton instance of the ``` TaxTaxRateRepositoryV1Controller ``` class can be accessed from the API Client.

```php
$taxTaxRateRepositoryV1 = $client->getTaxTaxRateRepositoryV1();
```

### <a name="update_tax_tax_rate_repository_v1_save_put"></a>![Method: ](https://apidocs.io/img/method.png ".TaxTaxRateRepositoryV1Controller.updateTaxTaxRateRepositoryV1SavePut") updateTaxTaxRateRepositoryV1SavePut

> *Tags:*  ``` Skips Authentication ``` 

> Create or update tax rate


```php
function updateTaxTaxRateRepositoryV1SavePut($taxTaxRateRepositoryV1SavePutBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| taxTaxRateRepositoryV1SavePutBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$taxTaxRateRepositoryV1SavePutBody = new TaxTaxRateRepositoryV1SavePutBody();

$result = $taxTaxRateRepositoryV1->updateTaxTaxRateRepositoryV1SavePut($taxTaxRateRepositoryV1SavePutBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="create_tax_tax_rate_repository_v1_save_post"></a>![Method: ](https://apidocs.io/img/method.png ".TaxTaxRateRepositoryV1Controller.createTaxTaxRateRepositoryV1SavePost") createTaxTaxRateRepositoryV1SavePost

> *Tags:*  ``` Skips Authentication ``` 

> Create or update tax rate


```php
function createTaxTaxRateRepositoryV1SavePost($taxTaxRateRepositoryV1SavePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| taxTaxRateRepositoryV1SavePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$taxTaxRateRepositoryV1SavePostBody = new TaxTaxRateRepositoryV1SavePutBody();

$result = $taxTaxRateRepositoryV1->createTaxTaxRateRepositoryV1SavePost($taxTaxRateRepositoryV1SavePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="get_tax_tax_rate_repository_v1_get_get"></a>![Method: ](https://apidocs.io/img/method.png ".TaxTaxRateRepositoryV1Controller.getTaxTaxRateRepositoryV1GetGet") getTaxTaxRateRepositoryV1GetGet

> *Tags:*  ``` Skips Authentication ``` 

> Get tax rate


```php
function getTaxTaxRateRepositoryV1GetGet($rateId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| rateId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$rateId = 186;

$result = $taxTaxRateRepositoryV1->getTaxTaxRateRepositoryV1GetGet($rateId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="delete_tax_tax_rate_repository_v1_delete_by_id_delete"></a>![Method: ](https://apidocs.io/img/method.png ".TaxTaxRateRepositoryV1Controller.deleteTaxTaxRateRepositoryV1DeleteByIdDelete") deleteTaxTaxRateRepositoryV1DeleteByIdDelete

> *Tags:*  ``` Skips Authentication ``` 

> Delete tax rate


```php
function deleteTaxTaxRateRepositoryV1DeleteByIdDelete($rateId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| rateId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$rateId = 186;

$result = $taxTaxRateRepositoryV1->deleteTaxTaxRateRepositoryV1DeleteByIdDelete($rateId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="get_tax_tax_rate_repository_v1_get_list_get"></a>![Method: ](https://apidocs.io/img/method.png ".TaxTaxRateRepositoryV1Controller.getTaxTaxRateRepositoryV1GetListGet") getTaxTaxRateRepositoryV1GetListGet

> *Tags:*  ``` Skips Authentication ``` 

> Search TaxRates This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#TaxRateRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.


```php
function getTaxTaxRateRepositoryV1GetListGet(
        $searchCriteriaFilterGroupsFiltersField = null,
        $searchCriteriaFilterGroupsFiltersValue = null,
        $searchCriteriaFilterGroupsFiltersConditionType = null,
        $searchCriteriaSortOrdersField = null,
        $searchCriteriaSortOrdersDirection = null,
        $searchCriteriaPageSize = null,
        $searchCriteriaCurrentPage = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| searchCriteriaFilterGroupsFiltersField |  ``` Optional ```  | Field |
| searchCriteriaFilterGroupsFiltersValue |  ``` Optional ```  | Value |
| searchCriteriaFilterGroupsFiltersConditionType |  ``` Optional ```  | Condition type |
| searchCriteriaSortOrdersField |  ``` Optional ```  | Sorting field. |
| searchCriteriaSortOrdersDirection |  ``` Optional ```  | Sorting direction. |
| searchCriteriaPageSize |  ``` Optional ```  | Page size. |
| searchCriteriaCurrentPage |  ``` Optional ```  | Current page. |



#### Example Usage

```php
$searchCriteriaFilterGroupsFiltersField = 'searchCriteria[filterGroups][][filters][][field]';
$searchCriteriaFilterGroupsFiltersValue = 'searchCriteria[filterGroups][][filters][][value]';
$searchCriteriaFilterGroupsFiltersConditionType = 'searchCriteria[filterGroups][][filters][][conditionType]';
$searchCriteriaSortOrdersField = 'searchCriteria[sortOrders][][field]';
$searchCriteriaSortOrdersDirection = 'searchCriteria[sortOrders][][direction]';
$searchCriteriaPageSize = 95;
$searchCriteriaCurrentPage = 95;

$result = $taxTaxRateRepositoryV1->getTaxTaxRateRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="tax_tax_rule_repository_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".TaxTaxRuleRepositoryV1Controller") TaxTaxRuleRepositoryV1Controller

### Get singleton instance

The singleton instance of the ``` TaxTaxRuleRepositoryV1Controller ``` class can be accessed from the API Client.

```php
$taxTaxRuleRepositoryV1 = $client->getTaxTaxRuleRepositoryV1();
```

### <a name="update_tax_tax_rule_repository_v1_save_put"></a>![Method: ](https://apidocs.io/img/method.png ".TaxTaxRuleRepositoryV1Controller.updateTaxTaxRuleRepositoryV1SavePut") updateTaxTaxRuleRepositoryV1SavePut

> *Tags:*  ``` Skips Authentication ``` 

> Save TaxRule


```php
function updateTaxTaxRuleRepositoryV1SavePut($taxTaxRuleRepositoryV1SavePutBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| taxTaxRuleRepositoryV1SavePutBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$taxTaxRuleRepositoryV1SavePutBody = new TaxTaxRuleRepositoryV1SavePutBody();

$result = $taxTaxRuleRepositoryV1->updateTaxTaxRuleRepositoryV1SavePut($taxTaxRuleRepositoryV1SavePutBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="create_tax_tax_rule_repository_v1_save_post"></a>![Method: ](https://apidocs.io/img/method.png ".TaxTaxRuleRepositoryV1Controller.createTaxTaxRuleRepositoryV1SavePost") createTaxTaxRuleRepositoryV1SavePost

> *Tags:*  ``` Skips Authentication ``` 

> Save TaxRule


```php
function createTaxTaxRuleRepositoryV1SavePost($taxTaxRuleRepositoryV1SavePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| taxTaxRuleRepositoryV1SavePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$taxTaxRuleRepositoryV1SavePostBody = new TaxTaxRuleRepositoryV1SavePutBody();

$result = $taxTaxRuleRepositoryV1->createTaxTaxRuleRepositoryV1SavePost($taxTaxRuleRepositoryV1SavePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="get_tax_tax_rule_repository_v1_get_get"></a>![Method: ](https://apidocs.io/img/method.png ".TaxTaxRuleRepositoryV1Controller.getTaxTaxRuleRepositoryV1GetGet") getTaxTaxRuleRepositoryV1GetGet

> *Tags:*  ``` Skips Authentication ``` 

> Get TaxRule


```php
function getTaxTaxRuleRepositoryV1GetGet($ruleId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| ruleId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$ruleId = 95;

$result = $taxTaxRuleRepositoryV1->getTaxTaxRuleRepositoryV1GetGet($ruleId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="delete_tax_tax_rule_repository_v1_delete_by_id_delete"></a>![Method: ](https://apidocs.io/img/method.png ".TaxTaxRuleRepositoryV1Controller.deleteTaxTaxRuleRepositoryV1DeleteByIdDelete") deleteTaxTaxRuleRepositoryV1DeleteByIdDelete

> *Tags:*  ``` Skips Authentication ``` 

> Delete TaxRule


```php
function deleteTaxTaxRuleRepositoryV1DeleteByIdDelete($ruleId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| ruleId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$ruleId = 95;

$result = $taxTaxRuleRepositoryV1->deleteTaxTaxRuleRepositoryV1DeleteByIdDelete($ruleId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="get_tax_tax_rule_repository_v1_get_list_get"></a>![Method: ](https://apidocs.io/img/method.png ".TaxTaxRuleRepositoryV1Controller.getTaxTaxRuleRepositoryV1GetListGet") getTaxTaxRuleRepositoryV1GetListGet

> *Tags:*  ``` Skips Authentication ``` 

> Search TaxRules This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#TaxRuleRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.


```php
function getTaxTaxRuleRepositoryV1GetListGet(
        $searchCriteriaFilterGroupsFiltersField = null,
        $searchCriteriaFilterGroupsFiltersValue = null,
        $searchCriteriaFilterGroupsFiltersConditionType = null,
        $searchCriteriaSortOrdersField = null,
        $searchCriteriaSortOrdersDirection = null,
        $searchCriteriaPageSize = null,
        $searchCriteriaCurrentPage = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| searchCriteriaFilterGroupsFiltersField |  ``` Optional ```  | Field |
| searchCriteriaFilterGroupsFiltersValue |  ``` Optional ```  | Value |
| searchCriteriaFilterGroupsFiltersConditionType |  ``` Optional ```  | Condition type |
| searchCriteriaSortOrdersField |  ``` Optional ```  | Sorting field. |
| searchCriteriaSortOrdersDirection |  ``` Optional ```  | Sorting direction. |
| searchCriteriaPageSize |  ``` Optional ```  | Page size. |
| searchCriteriaCurrentPage |  ``` Optional ```  | Current page. |



#### Example Usage

```php
$searchCriteriaFilterGroupsFiltersField = 'searchCriteria[filterGroups][][filters][][field]';
$searchCriteriaFilterGroupsFiltersValue = 'searchCriteria[filterGroups][][filters][][value]';
$searchCriteriaFilterGroupsFiltersConditionType = 'searchCriteria[filterGroups][][filters][][conditionType]';
$searchCriteriaSortOrdersField = 'searchCriteria[sortOrders][][field]';
$searchCriteriaSortOrdersDirection = 'searchCriteria[sortOrders][][direction]';
$searchCriteriaPageSize = 95;
$searchCriteriaCurrentPage = 95;

$result = $taxTaxRuleRepositoryV1->getTaxTaxRuleRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="tax_tax_class_repository_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".TaxTaxClassRepositoryV1Controller") TaxTaxClassRepositoryV1Controller

### Get singleton instance

The singleton instance of the ``` TaxTaxClassRepositoryV1Controller ``` class can be accessed from the API Client.

```php
$taxTaxClassRepositoryV1 = $client->getTaxTaxClassRepositoryV1();
```

### <a name="create_tax_tax_class_repository_v1_save_post"></a>![Method: ](https://apidocs.io/img/method.png ".TaxTaxClassRepositoryV1Controller.createTaxTaxClassRepositoryV1SavePost") createTaxTaxClassRepositoryV1SavePost

> *Tags:*  ``` Skips Authentication ``` 

> Create a Tax Class


```php
function createTaxTaxClassRepositoryV1SavePost($taxTaxClassRepositoryV1SavePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| taxTaxClassRepositoryV1SavePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$taxTaxClassRepositoryV1SavePostBody = new TaxTaxClassRepositoryV1SavePostBody();

$result = $taxTaxClassRepositoryV1->createTaxTaxClassRepositoryV1SavePost($taxTaxClassRepositoryV1SavePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="get_tax_tax_class_repository_v1_get_get"></a>![Method: ](https://apidocs.io/img/method.png ".TaxTaxClassRepositoryV1Controller.getTaxTaxClassRepositoryV1GetGet") getTaxTaxClassRepositoryV1GetGet

> *Tags:*  ``` Skips Authentication ``` 

> Get a tax class with the given tax class id.


```php
function getTaxTaxClassRepositoryV1GetGet($taxClassId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| taxClassId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$taxClassId = 95;

$result = $taxTaxClassRepositoryV1->getTaxTaxClassRepositoryV1GetGet($taxClassId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="delete_tax_tax_class_repository_v1_delete_by_id_delete"></a>![Method: ](https://apidocs.io/img/method.png ".TaxTaxClassRepositoryV1Controller.deleteTaxTaxClassRepositoryV1DeleteByIdDelete") deleteTaxTaxClassRepositoryV1DeleteByIdDelete

> *Tags:*  ``` Skips Authentication ``` 

> Delete a tax class with the given tax class id.


```php
function deleteTaxTaxClassRepositoryV1DeleteByIdDelete($taxClassId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| taxClassId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$taxClassId = 95;

$result = $taxTaxClassRepositoryV1->deleteTaxTaxClassRepositoryV1DeleteByIdDelete($taxClassId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="update_tax_tax_class_repository_v1_save_put"></a>![Method: ](https://apidocs.io/img/method.png ".TaxTaxClassRepositoryV1Controller.updateTaxTaxClassRepositoryV1SavePut") updateTaxTaxClassRepositoryV1SavePut

> *Tags:*  ``` Skips Authentication ``` 

> Create a Tax Class


```php
function updateTaxTaxClassRepositoryV1SavePut(
        $classId,
        $taxTaxClassRepositoryV1SavePutBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| classId |  ``` Required ```  | TODO: Add a parameter description |
| taxTaxClassRepositoryV1SavePutBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$classId = 'classId';
$taxTaxClassRepositoryV1SavePutBody = new TaxTaxClassRepositoryV1SavePostBody();

$result = $taxTaxClassRepositoryV1->updateTaxTaxClassRepositoryV1SavePut($classId, $taxTaxClassRepositoryV1SavePutBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



### <a name="get_tax_tax_class_repository_v1_get_list_get"></a>![Method: ](https://apidocs.io/img/method.png ".TaxTaxClassRepositoryV1Controller.getTaxTaxClassRepositoryV1GetListGet") getTaxTaxClassRepositoryV1GetListGet

> *Tags:*  ``` Skips Authentication ``` 

> Retrieve tax classes which match a specific criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#TaxClassRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.


```php
function getTaxTaxClassRepositoryV1GetListGet(
        $searchCriteriaFilterGroupsFiltersField = null,
        $searchCriteriaFilterGroupsFiltersValue = null,
        $searchCriteriaFilterGroupsFiltersConditionType = null,
        $searchCriteriaSortOrdersField = null,
        $searchCriteriaSortOrdersDirection = null,
        $searchCriteriaPageSize = null,
        $searchCriteriaCurrentPage = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| searchCriteriaFilterGroupsFiltersField |  ``` Optional ```  | Field |
| searchCriteriaFilterGroupsFiltersValue |  ``` Optional ```  | Value |
| searchCriteriaFilterGroupsFiltersConditionType |  ``` Optional ```  | Condition type |
| searchCriteriaSortOrdersField |  ``` Optional ```  | Sorting field. |
| searchCriteriaSortOrdersDirection |  ``` Optional ```  | Sorting direction. |
| searchCriteriaPageSize |  ``` Optional ```  | Page size. |
| searchCriteriaCurrentPage |  ``` Optional ```  | Current page. |



#### Example Usage

```php
$searchCriteriaFilterGroupsFiltersField = 'searchCriteria[filterGroups][][filters][][field]';
$searchCriteriaFilterGroupsFiltersValue = 'searchCriteria[filterGroups][][filters][][value]';
$searchCriteriaFilterGroupsFiltersConditionType = 'searchCriteria[filterGroups][][filters][][conditionType]';
$searchCriteriaSortOrdersField = 'searchCriteria[sortOrders][][field]';
$searchCriteriaSortOrdersDirection = 'searchCriteria[sortOrders][][direction]';
$searchCriteriaPageSize = 95;
$searchCriteriaCurrentPage = 95;

$result = $taxTaxClassRepositoryV1->getTaxTaxClassRepositoryV1GetListGet($searchCriteriaFilterGroupsFiltersField, $searchCriteriaFilterGroupsFiltersValue, $searchCriteriaFilterGroupsFiltersConditionType, $searchCriteriaSortOrdersField, $searchCriteriaSortOrdersDirection, $searchCriteriaPageSize, $searchCriteriaCurrentPage);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | 400 Bad Request |
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="staw_hive_product_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".StawHiveProductV1Controller") StawHiveProductV1Controller

### Get singleton instance

The singleton instance of the ``` StawHiveProductV1Controller ``` class can be accessed from the API Client.

```php
$stawHiveProductV1 = $client->getStawHiveProductV1();
```

### <a name="create_staw_hive_product_v1_create_attribute_set_post"></a>![Method: ](https://apidocs.io/img/method.png ".StawHiveProductV1Controller.createStawHiveProductV1CreateAttributeSetPost") createStawHiveProductV1CreateAttributeSetPost

> *Tags:*  ``` Skips Authentication ``` 

> Creates a new attribute set and adds new attributes to it, the default api doesn't provide this functionality.


```php
function createStawHiveProductV1CreateAttributeSetPost(
        $attributeSetId,
        $stawHiveProductV1CreateAttributeSetPostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| attributeSetId |  ``` Required ```  | New attribute set id. |
| stawHiveProductV1CreateAttributeSetPostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$attributeSetId = 'attributeSetId';
$stawHiveProductV1CreateAttributeSetPostBody = new StawHiveProductV1CreateAttributeSetPostBody();

$result = $stawHiveProductV1->createStawHiveProductV1CreateAttributeSetPost($attributeSetId, $stawHiveProductV1CreateAttributeSetPostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="staw_hive_cart_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".StawHiveCartV1Controller") StawHiveCartV1Controller

### Get singleton instance

The singleton instance of the ``` StawHiveCartV1Controller ``` class can be accessed from the API Client.

```php
$stawHiveCartV1 = $client->getStawHiveCartV1();
```

### <a name="create_staw_hive_cart_v1_setup_post"></a>![Method: ](https://apidocs.io/img/method.png ".StawHiveCartV1Controller.createStawHiveCartV1SetupPost") createStawHiveCartV1SetupPost

> *Tags:*  ``` Skips Authentication ``` 

> Returns greeting message to user


```php
function createStawHiveCartV1SetupPost(
        $cartId,
        $stawHiveCartV1SetupPostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | Cart quote id. |
| stawHiveCartV1SetupPostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$cartId = 'cartId';
$stawHiveCartV1SetupPostBody = new StawHiveCartV1SetupPostBody();

$result = $stawHiveCartV1->createStawHiveCartV1SetupPost($cartId, $stawHiveCartV1SetupPostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_staw_hive_cart_v1_items_post"></a>![Method: ](https://apidocs.io/img/method.png ".StawHiveCartV1Controller.createStawHiveCartV1ItemsPost") createStawHiveCartV1ItemsPost

> *Tags:*  ``` Skips Authentication ``` 

> Returns greeting message to user


```php
function createStawHiveCartV1ItemsPost(
        $cartId,
        $stawHiveCartV1ItemsPostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | Cart quote id. |
| stawHiveCartV1ItemsPostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$cartId = 'cartId';
$stawHiveCartV1ItemsPostBody = new StawHiveCartV1ItemsPostBody();

$result = $stawHiveCartV1->createStawHiveCartV1ItemsPost($cartId, $stawHiveCartV1ItemsPostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_staw_hive_cart_v1_place_order_post"></a>![Method: ](https://apidocs.io/img/method.png ".StawHiveCartV1Controller.createStawHiveCartV1PlaceOrderPost") createStawHiveCartV1PlaceOrderPost

> *Tags:*  ``` Skips Authentication ``` 

> Places an order from a quote with additonal data.


```php
function createStawHiveCartV1PlaceOrderPost(
        $cartId,
        $stawHiveCartV1PlaceOrderPostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| cartId |  ``` Required ```  | Cart quote id. |
| stawHiveCartV1PlaceOrderPostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$cartId = 'cartId';
$stawHiveCartV1PlaceOrderPostBody = new StawHiveCartV1SetupPostBody();

$result = $stawHiveCartV1->createStawHiveCartV1PlaceOrderPost($cartId, $stawHiveCartV1PlaceOrderPostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="staw_hive_order_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".StawHiveOrderV1Controller") StawHiveOrderV1Controller

### Get singleton instance

The singleton instance of the ``` StawHiveOrderV1Controller ``` class can be accessed from the API Client.

```php
$stawHiveOrderV1 = $client->getStawHiveOrderV1();
```

### <a name="create_staw_hive_order_v1_create_post"></a>![Method: ](https://apidocs.io/img/method.png ".StawHiveOrderV1Controller.createStawHiveOrderV1CreatePost") createStawHiveOrderV1CreatePost

> *Tags:*  ``` Skips Authentication ``` 

> Creates a new order.


```php
function createStawHiveOrderV1CreatePost(
        $orderId,
        $stawHiveOrderV1CreatePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| orderId |  ``` Required ```  | Order id. |
| stawHiveOrderV1CreatePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$orderId = 'orderId';
$stawHiveOrderV1CreatePostBody = new StawHiveOrderV1CreatePostBody();

$result = $stawHiveOrderV1->createStawHiveOrderV1CreatePost($orderId, $stawHiveOrderV1CreatePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



### <a name="create_staw_hive_order_v1_setup_post"></a>![Method: ](https://apidocs.io/img/method.png ".StawHiveOrderV1Controller.createStawHiveOrderV1SetupPost") createStawHiveOrderV1SetupPost

> *Tags:*  ``` Skips Authentication ``` 

> Set additional order information such as the ordered from date.


```php
function createStawHiveOrderV1SetupPost(
        $orderId,
        $stawHiveOrderV1SetupPostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| orderId |  ``` Required ```  | Order id. |
| stawHiveOrderV1SetupPostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$orderId = 'orderId';
$stawHiveOrderV1SetupPostBody = new StawHiveOrderV1CreatePostBody();

$result = $stawHiveOrderV1->createStawHiveOrderV1SetupPost($orderId, $stawHiveOrderV1SetupPostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="staw_hive_invoice_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".StawHiveInvoiceV1Controller") StawHiveInvoiceV1Controller

### Get singleton instance

The singleton instance of the ``` StawHiveInvoiceV1Controller ``` class can be accessed from the API Client.

```php
$stawHiveInvoiceV1 = $client->getStawHiveInvoiceV1();
```

### <a name="create_staw_hive_invoice_v1_create_post"></a>![Method: ](https://apidocs.io/img/method.png ".StawHiveInvoiceV1Controller.createStawHiveInvoiceV1CreatePost") createStawHiveInvoiceV1CreatePost

> *Tags:*  ``` Skips Authentication ``` 

> Creates an invoice.


```php
function createStawHiveInvoiceV1CreatePost($stawHiveInvoiceV1CreatePostBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| stawHiveInvoiceV1CreatePostBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$stawHiveInvoiceV1CreatePostBody = new StawHiveInvoiceV1CreatePostBody();

$result = $stawHiveInvoiceV1->createStawHiveInvoiceV1CreatePost($stawHiveInvoiceV1CreatePostBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)

## <a name="temando_shipping_rma_rma_shipment_management_v1_controller"></a>![Class: ](https://apidocs.io/img/class.png ".TemandoShippingRmaRmaShipmentManagementV1Controller") TemandoShippingRmaRmaShipmentManagementV1Controller

### Get singleton instance

The singleton instance of the ``` TemandoShippingRmaRmaShipmentManagementV1Controller ``` class can be accessed from the API Client.

```php
$temandoShippingRmaRmaShipmentManagementV1 = $client->getTemandoShippingRmaRmaShipmentManagementV1();
```

### <a name="update_temando_shipping_rma_rma_shipment_management_v1_assign_shipment_ids_put"></a>![Method: ](https://apidocs.io/img/method.png ".TemandoShippingRmaRmaShipmentManagementV1Controller.updateTemandoShippingRmaRmaShipmentManagementV1AssignShipmentIdsPut") updateTemandoShippingRmaRmaShipmentManagementV1AssignShipmentIdsPut

> *Tags:*  ``` Skips Authentication ``` 

> Assign platform shipment IDs to a core RMA entity.


```php
function updateTemandoShippingRmaRmaShipmentManagementV1AssignShipmentIdsPut(
        $rmaId,
        $temandoShippingRmaRmaShipmentManagementV1AssignShipmentIdsPutBody = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| rmaId |  ``` Required ```  | TODO: Add a parameter description |
| temandoShippingRmaRmaShipmentManagementV1AssignShipmentIdsPutBody |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$rmaId = 136;
$temandoShippingRmaRmaShipmentManagementV1AssignShipmentIdsPutBody = new TemandoShippingRmaRmaShipmentManagementV1AssignShipmentIdsPutBody();

$result = $temandoShippingRmaRmaShipmentManagementV1->updateTemandoShippingRmaRmaShipmentManagementV1AssignShipmentIdsPut($rmaId, $temandoShippingRmaRmaShipmentManagementV1AssignShipmentIdsPutBody);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 401 | 401 Unauthorized |
| 500 | Internal Server error |
| 0 | Unexpected error |



[Back to List of Controllers](#list_of_controllers)



