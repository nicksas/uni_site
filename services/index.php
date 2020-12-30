<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");?><? $APPLICATION->SetTitle("Услгуи"); ?> <section class="page-services">
<div class="container">
	 <?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	"custom",
	Array(
		"COMPONENT_TEMPLATE" => "universal",
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0"
	)
);?>
	<h4 class="page-header"><? $APPLICATION->ShowTitle(); ?></h4>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list", 
	"services-page", 
	array(
		"ADD_SECTIONS_CHAIN" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "services-page",
		"COUNT_ELEMENTS" => "N",
		"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
		"FILTER_NAME" => "sectionsFilter",
		"HIDE_SECTION_NAME" => "N",
		"IBLOCK_ID" => "30",
		"IBLOCK_TYPE" => "catalog",
		"LIST_COLUMNS_COUNT" => "6",
		"SECTION_CODE" => "",
		"SECTION_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_URL" => "#CODE#",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SHOW_PARENT_NAME" => "Y",
		"TOP_DEPTH" => "1",
		"VIEW_MODE" => "TILE"
	),
	false
);?><br>
</div>
 </section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>