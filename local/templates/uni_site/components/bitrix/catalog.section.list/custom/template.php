<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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

$arViewModeList = $arResult['VIEW_MODE_LIST'];

$arViewStyles = array(
    'LIST' => array(
        'CONT' => 'bx_sitemap',
        'TITLE' => 'bx_sitemap_title',
        'LIST' => 'bx_sitemap_ul',
    )
);

$arCurView = $arViewStyles[$arParams['VIEW_MODE']];

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));

?>
<?

$intCurrentDepth = 1;
$boolFirst = true;
foreach ($arResult['SECTIONS'] as &$arSection) {
    ?>
    <?
    $id_iblock = $arSection['ID'];
    $id_iblock_section = $arSection['IBLOCK_SECTION_ID'];
    if (1 == $arSection['RELATIVE_DEPTH_LEVEL']) {

        ?>
        <div>
            <?print_r($arSection['ID'])?>
            <a href="<? echo $arSection["SECTION_PAGE_URL"]; ?>" style="color: green;">
                <? echo $arSection["NAME"]; ?>
            </a>
        </div>

        <?
    } elseif (1 < $arSection['RELATIVE_DEPTH_LEVEL']) {
        ?>
        <div>
            <?print_r($arSection['IBLOCK_SECTION_ID'])?>
            <a href="<? echo $arSection["SECTION_PAGE_URL"]; ?>" style="color: red;">
                <? echo $arSection["NAME"]; ?>
            </a>
        </div>
        <?
    }
    ?>
<?

    $intCurrentDepth = $arSection['RELATIVE_DEPTH_LEVEL'];
    $boolFirst = false;
    $id_old_iblock = $arSection['ID'];
}
unset($arSection);
?>
