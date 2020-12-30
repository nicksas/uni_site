<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Новости"); ?>
    <section class="page-news">
        <div class="container">
            <? $APPLICATION->IncludeComponent(
                "bitrix:breadcrumb",
                "custom",
                array(
                    "COMPONENT_TEMPLATE" => "universal",
                    "PATH" => "",
                    "SITE_ID" => "s1",
                    "START_FROM" => "0"
                )
            ); ?>
            <h4 class="page-header"><? $APPLICATION->ShowTitle(); ?></h4>
            <div class="row">
                <div class="col-12 col-sm-2">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "menu_pages",
                        array(
                            "ALLOW_MULTI_SELECT" => "N",
                            "CHILD_MENU_TYPE" => "left",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "1",
                            "MENU_CACHE_GET_VARS" => array(""),
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_TYPE" => "N",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "MENU_THEME" => "site",
                            "ROOT_MENU_TYPE" => "sub",
                            "USE_EXT" => "N"
                        )
                    ); ?>
                </div>
                <div class="col-12 col-sm-10">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:news",
                        "custom",
                        array(
                            "ADD_ELEMENT_CHAIN" => "Y",
                            "ADD_SECTIONS_CHAIN" => "N",
                            "AJAX_MODE" => "N",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "AJAX_OPTION_HISTORY" => "N",
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "Y",
                            "BROWSER_TITLE" => "-",
                            "CACHE_FILTER" => "N",
                            "CACHE_GROUPS" => "Y",
                            "CACHE_TIME" => "36000000",
                            "CACHE_TYPE" => "A",
                            "CHECK_DATES" => "Y",
                            "COLOR_NEW" => "3E74E6",
                            "COLOR_OLD" => "C0C0C0",
                            "COMPONENT_TEMPLATE" => "custom",
                            "DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
                            "DETAIL_DISPLAY_BOTTOM_PAGER" => "N",
                            "DETAIL_DISPLAY_TOP_PAGER" => "Y",
                            "DETAIL_FIELD_CODE" => array(
                                0 => "",
                                1 => "",
                            ),
                            "DETAIL_PAGER_SHOW_ALL" => "Y",
                            "DETAIL_PAGER_TEMPLATE" => "",
                            "DETAIL_PAGER_TITLE" => "Страница",
                            "DETAIL_PROPERTY_CODE" => array(
                                0 => "",
                                1 => "",
                            ),
                            "DETAIL_SET_CANONICAL_URL" => "N",
                            "DISPLAY_AS_RATING" => "rating",
                            "DISPLAY_BOTTOM_PAGER" => "Y",
                            "DISPLAY_DATE" => "Y",
                            "DISPLAY_NAME" => "Y",
                            "DISPLAY_PICTURE" => "Y",
                            "DISPLAY_PREVIEW_TEXT" => "Y",
                            "DISPLAY_TOP_PAGER" => "N",
                            "FONT_MAX" => "50",
                            "FONT_MIN" => "10",
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                            "IBLOCK_ID" => "29",
                            "IBLOCK_TYPE" => "content",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                            "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
                            "LIST_FIELD_CODE" => array(
                                0 => "",
                                1 => "",
                            ),
                            "LIST_PROPERTY_CODE" => array(
                                0 => "",
                                1 => "",
                            ),
                            "MEDIA_PROPERTY" => "",
                            "MESSAGE_404" => "",
                            "META_DESCRIPTION" => "-",
                            "META_KEYWORDS" => "-",
                            "NEWS_COUNT" => "20",
                            "PAGER_BASE_LINK_ENABLE" => "N",
                            "PAGER_DESC_NUMBERING" => "N",
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                            "PAGER_SHOW_ALL" => "N",
                            "PAGER_SHOW_ALWAYS" => "N",
                            "PAGER_TEMPLATE" => ".default",
                            "PAGER_TITLE" => "",
                            "PERIOD_NEW_TAGS" => "",
                            "PREVIEW_TRUNCATE_LEN" => "",
                            "SEF_MODE" => "N",
                            "SET_LAST_MODIFIED" => "N",
                            "SET_STATUS_404" => "N",
                            "SET_TITLE" => "Y",
                            "SHOW_404" => "N",
                            "SLIDER_PROPERTY" => "",
                            "SORT_BY1" => "ACTIVE_FROM",
                            "SORT_BY2" => "SORT",
                            "SORT_ORDER1" => "DESC",
                            "SORT_ORDER2" => "ASC",
                            "STRICT_SECTION_CHECK" => "N",
                            "TAGS_CLOUD_ELEMENTS" => "150",
                            "TAGS_CLOUD_WIDTH" => "100%",
                            "TEMPLATE_THEME" => "blue",
                            "USE_CATEGORIES" => "N",
                            "USE_FILTER" => "N",
                            "USE_PERMISSIONS" => "N",
                            "USE_RATING" => "N",
                            "USE_REVIEW" => "N",
                            "USE_RSS" => "N",
                            "USE_SEARCH" => "N",
                            "USE_SHARE" => "N",
                            "VARIABLE_ALIASES" => array(
                                "SECTION_ID" => "SECTION_ID",
                                "ELEMENT_ID" => "ELEMENT_ID",
                            )
                        ),
                        false
                    ); ?>
                </div>
            </div>
        </div>
    </section> <br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>