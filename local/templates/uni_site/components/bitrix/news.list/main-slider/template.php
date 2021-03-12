<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

$themeClass = isset($arParams['TEMPLATE_THEME']) ? ' bx-'.$arParams['TEMPLATE_THEME'] : '';
?>


<section class="section-slider">
<div class="swiper-container slider-main">
    <div class="swiper-wrapper">
        <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction(
            $arItem['ID'],
            $arItem['EDIT_LINK'],
            CIBlock::GetArrayByID(
                $arItem["IBLOCK_ID"],
                "ELEMENT_EDIT"
            )
        );
        $this->AddDeleteAction(
            $arItem['ID'],
            $arItem['DELETE_LINK'],
            CIBlock::GetArrayByID(
                $arItem["IBLOCK_ID"],
                "ELEMENT_DELETE"),
            array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM'))
        );
        ?>
        <div class="swiper-slide">
            <img
                    class="slider-img"
                    src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
                    alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"
                    title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>"
            />
            <div class="slider-descr">
                <div class="title">
                    <?echo $arItem["NAME"]?>
                </div>
                <div class="text">
                    <p>
                        <?echo $arItem["PREVIEW_TEXT"];?>
                    </p>
                </div>
                <a class="link" href="<?echo $arItem["DISPLAY_PROPERTIES"]['link']['VALUE']?>">Подробнее</a>
            </div>
        </div>
        <?endforeach;?>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination swiper-pagination-white">
    </div>
    <!-- Add Navigation -->
    <div class="swiper-button-prev swiper-button-white">
    </div>
    <div class="swiper-button-next swiper-button-white">
    </div>
</div>
</section>
