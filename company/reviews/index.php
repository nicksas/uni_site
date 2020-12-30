<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle(""); ?><? $APPLICATION->SetTitle("Отзывы"); ?>
    <section class="page__reviews">
    <div class="container">
        <? $APPLICATION->IncludeComponent(
	"bitrix:breadcrumb", 
	"custom",
	array(
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0",
		"COMPONENT_TEMPLATE" => "universal"
	),
	false
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
            <br>
            <div class="col-12 col-sm-10">
                <div class="row">
                    <?

                    use Bitrix\Highloadblock\HighloadBlockTable as HLBT;

                    CModule::IncludeModule('highloadblock');
                    $highblock_id = 6;
                    $hl_block = HLBT::getById($highblock_id)->fetch();

                    $entity = HLBT::compileEntity($hl_block);
                    $entity_data_class = $entity->getDataClass();

                    $rs_data = $entity_data_class::getList(array(
                        'select' => array('*')
                    ));
                    while ($el = $rs_data->fetch()) {
                        ?>
                        <div class="coll-12 item">
                            <img src="<? echo \CFile::GetPath($el['UF_PHOTO']) ?>" alt="" class="item__img">
                            <div class="item__container-descr">
                                <div class="item__name">
                                    <? echo $el['UF_NAME']; ?>
                                </div>
                                <div class="item__hr">
                                </div>
                                <div class="item__review">
                                    <? echo $el['UF_REVIEWS']; ?>
                                </div>
                            </div>
                        </div>
                        <?
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    </section><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>