<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("");
$APPLICATION->SetTitle($arSite['SITE_NAME']);
?><div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
 <img alt="First slide" src="https://picsum.photos/1900/650" class="d-block w-100">
			<div class="carousel-caption d-none d-md-block">
				<div class="carousel__header">
					 Индивидуальные дизайн-проекты
				</div>
				<p class="carousel__descr">
					 Уже более 20 лет мы создаем уникальные пространства для успешных людей. Специалисты нашей компании знают, как исполнить вашу мечту!
				</p>
 <a href="#" class="carousel__link">Подробнее</a>
			</div>
		</div>
		<div class="carousel-item">
 <img alt="Second slide" src="https://picsum.photos/1900/650" class="d-block w-100">
			<div class="carousel-caption d-none d-md-block">
				<div class="carousel__header">
					 Индивидуальные дизайн-проекты
				</div>
				<p class="carousel__descr">
					 Уже более 20 лет мы создаем уникальные пространства для успешных людей. Специалисты нашей компании знают, как исполнить вашу мечту!
				</p>
 <a href="#" class="carousel__link">Подробнее</a>
			</div>
		</div>
		<div class="carousel-item">
 <img alt="Third slide" src="https://picsum.photos/1900/650" class="d-block w-100">
			<div class="carousel-caption d-none d-md-block">
				<div class="carousel__header">
					 Индивидуальные дизайн-проекты
				</div>
				<p class="carousel__descr">
					 Уже более 20 лет мы создаем уникальные пространства для успешных людей. Специалисты нашей компании знают, как исполнить вашу мечту!
				</p>
 <a href="#" class="carousel__link">Подробнее</a>
			</div>
		</div>
	</div>
 <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
</div>
 <section class="section-advent">
<div class="container">
	<div class="row">
		 <?

                use Bitrix\Highloadblock\HighloadBlockTable as HLBT;

                CModule::IncludeModule('highloadblock');

                $highblock_id_adv = 7;
                $hl_block_adv = HLBT::getById($highblock_id_adv)->fetch();

                // Получение имени класса
                $entity_adv = HLBT::compileEntity($hl_block_adv);
                $entity_data_class_adv = $entity_adv->getDataClass();

                // Вывод элементов Highload-блока
                $rs_data = $entity_data_class_adv::getList(array(
                    'select' => array('*')
                ));
                while ($el = $rs_data->fetch()) {
                    ?>
		<div class="col-12 col-md-3 item">
 <img src="<? echo \CFile::GetPath($el['UF_IMG']) ?>" alt="">
			<div class="item__name">
				 <? echo $el['UF_NAME']; ?>
			</div>
			<div class="item__descr">
				 <? echo $el['UF_DESCR']; ?>
			</div>
		</div>
		 <?
                }
                ?>
	</div>
</div>
 </section> <section class="section-popular">
<div class="container">
	 <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list", 
	"custom", 
	array(
		"ADD_SECTIONS_CHAIN" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "custom",
		"COUNT_ELEMENTS" => "N",
		"COUNT_ELEMENTS_FILTER" => "CNT_ALL",
		"FILTER_NAME" => "sectionsFilter",
		"HIDE_SECTION_NAME" => "N",
		"IBLOCK_ID" => "26",
		"IBLOCK_TYPE" => "catalog",
		"LIST_COLUMNS_COUNT" => "6",
		"SECTION_CODE" => "",
		"SECTION_FIELDS" => array(
			0 => "NAME",
			1 => "PICTURE",
			2 => "",
		),
		"SECTION_ID" => "",
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SHOW_PARENT_NAME" => "Y",
		"TOP_DEPTH" => "4",
		"VIEW_MODE" => "LIST"
	),
	false
);?>
</div>
 </section> <section class="section__our__staff">
<div class="container">
	<h4 class="text-center section-header">Наша команда</h4>
	<div class="row">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"our_team", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "31",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MEDIA_PROPERTY" => "",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "4",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "staff",
			1 => "",
		),
		"SEARCH_PAGE" => "/search/",
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SLIDER_PROPERTY" => "",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"TEMPLATE_THEME" => "blue",
		"USE_RATING" => "N",
		"USE_SHARE" => "N",
		"COMPONENT_TEMPLATE" => "our_team"
	),
	false
);?><br>
	</div>
</div>
 </section> <section class="section__reviews">
<div class="container">
	<h4 class="text-center section-header">Отзывы</h4>
	<div class="row">
		 <?
                CModule::IncludeModule('highloadblock');
                $highblock_id = 6;
                $hl_block = HLBT::getById($highblock_id)->fetch();

                $entity = HLBT::compileEntity($hl_block);
                $entity_data_class = $entity->getDataClass();

                $rs_data = $entity_data_class::getList(array(
                    'select' => array('*')
                ));
                $count = 0;
                while ($el = $rs_data->fetch()) {
                    if ($count <= 1) {
                        ?>
		<div class="col-12 col-md-6 item">
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
                    $count++;
                }
                ?>
	</div>
</div>
 </section> <section class="section-brands">
<div class="container">
	<h4 class="section-header">Бренды</h4>
	<div class="row">
		<div class="col-12">
			 <!-- Slider main container -->
			<div class="swiper-container">
				 <!-- Additional required wrapper -->
				<div class="swiper-wrapper">
					 <?
                            CModule::IncludeModule('highloadblock');
                            $highblock_id_brands = 8;
                            $hl_block_brands = HLBT::getById($highblock_id_brands)->fetch();

                            $entity_brands = HLBT::compileEntity($hl_block_brands);
                            $entity_data_class_brands = $entity_brands->getDataClass();

                            $rs_data = $entity_data_class_brands::getList(array(
                                'select' => array('*')
                            ));
                            while ($el = $rs_data->fetch()) {
                                ?>
					<div class="swiper-slide">
						<div class="img-wrap">
							<div class="img" style="background: url('<span id=" title="Код PHP: &lt;? echo \CFile::GetPath($el['UF_IMG']) ?&gt;">
								 <? echo \CFile::GetPath($el['UF_IMG']) ?><span class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false">Код PHP</span></span>') no-repeat center; background-size: contain"&gt;
							</div>
						</div>
					</div>
					 <?
                            }
                            ?>
				</div>
				 <!-- If we need navigation buttons -->
				<div class="swiper-button-prev">
				</div>
				<div class="swiper-button-next">
				</div>
			</div>
		</div>
	</div>
</div>
 </section>
    <script>
        var mySwiper = new Swiper('.swiper-container', {
            slidesPerView: 6,
            spaceBetween: 0,
            loop: true,

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        })
    </script><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>