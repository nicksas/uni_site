<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
IncludeTemplateLangFile($_SERVER["DOCUMENT_ROOT"] . "/bitrix/templates/" . SITE_TEMPLATE_ID . "/header.php");
CJSCore::Init(array("fx"));

\Bitrix\Main\UI\Extension::load("ui.bootstrap4");

if (isset($_GET["theme"]) && in_array($_GET["theme"], array("blue", "green", "yellow", "red"))) {
    COption::SetOptionString("main", "wizard_eshop_bootstrap_theme_id", $_GET["theme"], false, SITE_ID);
}
$theme = COption::GetOptionString("main", "wizard_eshop_bootstrap_theme_id", "green", SITE_ID);

$curPage = $APPLICATION->GetCurPage(true);

?><!DOCTYPE html>
<html xml:lang="<?= LANGUAGE_ID ?>" lang="<?= LANGUAGE_ID ?>">
<head>
    <title><? $APPLICATION->ShowTitle() ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
    <link rel="shortcut icon" type="image/x-icon" href="<?= SITE_DIR ?>favicon.ico"/>
    <? $APPLICATION->ShowHead(); ?>
    <?
    use Bitrix\Main\Page\Asset;

    Asset::getInstance()->addCss("https://unpkg.com/swiper/swiper-bundle.css");
    Asset::getInstance()->addCss("https://unpkg.com/swiper/swiper-bundle.min.css");
    Asset::getInstance()->addJs("https://unpkg.com/swiper/swiper-bundle.js");
    Asset::getInstance()->addJs("https://unpkg.com/swiper/swiper-bundle.min.js");
    ?>
</head>
<body class="bx-background-image bx-theme-<?= $theme ?>" <? $APPLICATION->ShowProperty("backgroundImage"); ?>>

<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>
<? $APPLICATION->IncludeComponent(
    "bitrix:eshop.banner",
    "",
    array()
); ?>
<div class="bx-wrapper" id="bx_eshop_wrap">
    <header class="bx-header header">
        <div class="bx-header-section container">
            <div class="row pt-0 pt-md-3 mb-3 align-items-center header__row" style="position: relative;">
                <? $rsSites = CSite::GetByID(SITE_ID);
                $arSite = $rsSites->Fetch(); ?>
                <div class="col-12 col-md-auto header__menu">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "top_menu",
                        array(
                            "ROOT_MENU_TYPE" => "top",
                            "MENU_CACHE_TYPE" => "A",
                            "MENU_CACHE_TIME" => "36000000",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "MENU_CACHE_GET_VARS" => array(),
                            "CACHE_SELECTED_ITEMS" => "N",
                            "MAX_LEVEL" => "1",
                            "USE_EXT" => "Y",
                            "DELAY" => "N",
                            "ALLOW_MULTI_SELECT" => "N"
                        ),
                        false
                    ); ?>
                </div>
                <div class="col-12 col-md-auto info">
                    <div class="info__item cities">
                        <button type="button" class="info__btn" data-toggle="modal" data-target="#citiesModal"> Город
                        </button>
                    </div>
                    <div class="modal fade" id="citiesModal" tabindex="-1" role="dialog"
                         aria-labelledby="citiesModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                Города
                            </div>
                        </div>
                    </div>

                    <div class="info__item email">
                        <a href="mailto:<? echo $arSite['EMAIL']; ?>">
                            <? echo $arSite['EMAIL']; ?>
                        </a>
                    </div>

                    <div class="info__item search">
                        <button type="button" class="info__btn" data-toggle="modal" data-target="#searchModal"> Поиск
                        </button>
                    </div>
                    <div class="modal fade fade-search" id="searchModal" tabindex="-1" role="dialog"
                         aria-labelledby="searchModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-search" role="document">
                            <div class="modal-content">
                                <div class="container">
                                    <div class="row header__search-row">
                                        <div class="col-12 col-md-8 header__search-wrap">
                                            <? $APPLICATION->IncludeComponent(
	"bitrix:search.form", 
	"header_search", 
	array(
		"USE_SUGGEST" => "Y",
		"COMPONENT_TEMPLATE" => "header_search",
		"PAGE" => "#SITE_DIR#search/index.php"
	),
	false
); ?>
                                        </div>
                                        <div class="col-12 col-md-auto">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="info__item personal">
                        <button type="button" class="info__btn" data-toggle="modal" data-target="#signInModal"> Войти
                        </button>
                    </div>

                    <div class="modal fade" id="signInModal" tabindex="-1" role="dialog"
                         aria-labelledby="signInModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="container">
                                    <button type="button" class="close close__auth" data-dismiss="modal"
                                            aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <? $APPLICATION->IncludeComponent(
                                        "bitrix:system.auth.form",
                                        "custom",
                                        array(
                                            "COMPONENT_TEMPLATE" => "custom",
                                            "REGISTER_URL" => "",
                                            "FORGOT_PASSWORD_URL" => "",
                                            "PROFILE_URL" => "",
                                            "SHOW_ERRORS" => "Y"
                                        ),
                                        false
                                    ); ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row pt-0 pt-md-3 mb-3 align-items-center header__row-cat">
                <div class="col-12 col-md-auto header__logo">
                    <a class="bx-logo-block" href="<?= SITE_DIR ?>">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_DIR . "include/company_logo.php"),
                            false
                        ); ?>
                    </a>
                </div>
                <div class="col-12 col-md-auto">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "catalog_menu",
                        array(
                            "ROOT_MENU_TYPE" => "catalog",
                            "MENU_CACHE_TYPE" => "A",
                            "MENU_CACHE_TIME" => "36000000",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "MENU_CACHE_GET_VARS" => array(),
                            "CACHE_SELECTED_ITEMS" => "N",
                            "MAX_LEVEL" => "3",
                            "USE_EXT" => "Y",
                            "DELAY" => "N",
                            "ALLOW_MULTI_SELECT" => "N",
                            "COMPONENT_TEMPLATE" => "tree",
                            "CHILD_MENU_TYPE" => "sub"
                        ),
                        false
                    ); ?>
                </div>
                <div class="col-12 col-md-auto header__call">
                    <div class="header__call-tel">
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_DIR . "include/company_tel.php"),
                            false
                        ); ?>
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => SITE_DIR . "include/get_call.php"),
                            false
                        ); ?>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>
<div class="workarea">