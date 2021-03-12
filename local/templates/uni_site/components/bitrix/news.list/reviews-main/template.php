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


        <div class="row">
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
            <div class="col-12 col-md-6 item">
                <img
                        class="item__img"
                        src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
                        alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"
                        title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>"
                />
                <div class="item__container-descr">
                    <div class="item__name">
                        <?echo $arItem["NAME"]?>
                    </div>
                    <div class="item__hr">
                    </div>
                    <div class="item__review">
                        <?echo $arItem["PREVIEW_TEXT"];?>
                    </div>
                </div>
            </div>
            <?endforeach;?>
        </div>

