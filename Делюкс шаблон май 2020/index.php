<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<?
	//include module
	\Bitrix\Main\Loader::includeModule("dw.deluxe");
	//get template settings
	$arTemplateSettings = DwSettings::getInstance()->getCurrentSettings();
	extract($arTemplateSettings);
?>
<?IncludeTemplateLangFile(__FILE__);?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
	<head>
		<meta charset="<?=SITE_CHARSET?>">
		<META NAME="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" type="image/x-icon" href="<?=SITE_DIR?>favicon.ico" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="theme-color" content="#3498db">
		<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/fonts/roboto/roboto.css");?>
		<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/themes/".$TEMPLATE_BACKGROUND_NAME."/".$TEMPLATE_THEME_NAME."/style.css");?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery-1.11.0.min.js");?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.easing.1.3.js");?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/rangeSlider.js");?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/maskedinput.js");?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/system.js");?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/topMenu.js");?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/topSearch.js");?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/dwCarousel.js");?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/dwSlider.js");?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/dwZoomer.js");?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/dwTimer.js");?>
		<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/colorSwitcher.js");?>
<!-- y line code begin -->
<script>	
	function checkCookies(){
    let cookieDate = localStorage.getItem('cookieDate');
    let cookieNotification = document.getElementById('cookie_notification');
    let cookieBtn = cookieNotification.querySelector('.cookie_accept');

    // Если записи про кукисы нет или она просрочена на 1 год, то показываем информацию про кукисы
    if( !cookieDate || (+cookieDate + 31536000000) < Date.now() ){
        cookieNotification.classList.add('show');
    }

    // При клике на кнопку, в локальное хранилище записывается текущая дата в системе UNIX
    cookieBtn.addEventListener('click', function(){
        localStorage.setItem( 'cookieDate', Date.now() );
        cookieNotification.classList.remove('show');
    })
}
checkCookies();
</script> 	
<!-- y line code end -->
		<?CJSCore::Init(array("fx", "ajax", "window", "popup", "date"));?>
		<?if(DwSettings::isPagen()):?><?$APPLICATION->AddHeadString('<link rel="canonical" href="'.DwSettings::getPagenCanonical().'" />');//pagen canonical?><?endif;?>
		<?if(!DwSettings::isBot() && !empty($arTemplateSettings["TEMPLATE_METRICA_CODE"])):?><?$APPLICATION->AddHeadString($arTemplateSettings["TEMPLATE_METRICA_CODE"]);//metrica counter code?><?endif;?>
		<?$APPLICATION->ShowHead();?>
	<!-- y line begin -->	
		<style>
#cookie_notification{
  display: none;
  justify-content: space-between;
  position: relative;
  top: 0px;
  left: 50%;
  width: 100%;
  transform: translateX(-50%);
  background-color: yellow;
}

#cookie_notification p{
  margin: 0;
  font-size: 0.9rem;
    padding: 25px;
  font-weight: 600;
  font-face: Arial;
  text-align: center;
  color: #0000FF;
}

@media (min-width: 276px){
  #cookie_notification.show{
    display: table;
  }
  .cookie_accept{
   position: fixed;
        top: 15px;
        left: 95%;
		font-face: arial;
		font-size: 24px;
		font-weight: bold
   
  }
}

</style>
	<!-- y line end -->	
		<title><?$APPLICATION->ShowTitle();?></title>
<!-- Yandex.Metrika counter new-->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(17355061, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true,
        ecommerce:"dataLayer"
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/17355061" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!-- Jivosite-->
<script src="//code.jivosite.com/widget/PGOLIdMXjS" async></script>
<!-- Jivosite-->
	</head>
	<div id="cookie_notification">

        <p>Уважаемые водномоторники!<br> Наш интернет-магазин работает для вас. Мы ежедневно принимаем заказы и осуществляем безопасную доставку лодок, моторов и снаряжения. Подробности <a href="https://lodki-piter.ru/news/covid_19/" class="podr">здесь</a>. Ваши "Лодки-Питер".</p>
    
<a class="cookie_accept">X</a>	 
</div>	
	<body class="loading <?if(defined("INDEX_PAGE") && INDEX_PAGE == "Y"):?>index<?endif;?><?if(!empty($TEMPLATE_PANELS_COLOR) && $TEMPLATE_PANELS_COLOR != "default"):?> panels_<?=$TEMPLATE_PANELS_COLOR?><?endif;?>">
		<div id="panel">
			<?$APPLICATION->ShowPanel();?>
		</div>
		<div id="foundation">
			<?require_once($_SERVER["DOCUMENT_ROOT"]."/".SITE_TEMPLATE_PATH."/headers/".$TEMPLATE_HEADER."/template.php");?>
			<div id="main"<?if($TEMPLATE_BACKGROUND_NAME != ""):?> class="color_<?=$TEMPLATE_BACKGROUND_NAME?>"<?endif;?>>
				<div class="limiter">
					<div class="compliter">
						<?if(!defined("ERROR_404")):?>
							<?$APPLICATION->IncludeComponent(
								"bitrix:main.include", 
								".default", 
								array(
									"AREA_FILE_SHOW" => "sect",
									"AREA_FILE_SUFFIX" => "leftBlock",
									"AREA_FILE_RECURSIVE" => "Y",
									"EDIT_TEMPLATE" => ""
								),
								false
							);?>
						<?endif;?>
						<div id="right">
							<?if(!defined("INDEX_PAGE") && !defined("ERROR_404")):?>
								<?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb", 
	".default", 
	array(
		"START_FROM" => "0",
		"PATH" => "",
		"SITE_ID" => "lp",
		"COMPONENT_TEMPLATE" => ".default",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
);?>
							<?endif;?>
							<?$APPLICATION->ShowViewContent("after_breadcrumb_container");?>
							<?$APPLICATION->ShowViewContent("landing_page_banner_container");?>
							<?$APPLICATION->ShowViewContent("landing_page_top_text_container");?>#WORK_AREA#<?IncludeTemplateLangFile(__FILE__);?>						<?$APPLICATION->ShowViewContent("landing_page_bottom_text_container");?>
					</div>

				</div>
			</div>
		</div>
		<?$APPLICATION->ShowViewContent("no_main_container");?>
		<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
	"AREA_FILE_SHOW" => "sect",
		"AREA_FILE_SUFFIX" => "footerTabs",
		"AREA_FILE_RECURSIVE" => "Y",
		"EDIT_TEMPLATE" => ""
	),
	false,
	array(
	"ACTIVE_COMPONENT" => "Y"
	)
);?>
		<?$APPLICATION->IncludeComponent(
			"bitrix:main.include",
			".default",
			array(
				"AREA_FILE_SHOW" => "sect",
				"AREA_FILE_SUFFIX" => "bigData",
				"AREA_FILE_RECURSIVE" => "Y",
				"EDIT_TEMPLATE" => ""
			),
			false
		);?>
		<div id="footer"<?if(!empty($TEMPLATE_FOOTER_VARIANT) && $TEMPLATE_FOOTER_VARIANT != "default"):?> class="variant_<?=$TEMPLATE_FOOTER_VARIANT?>"<?endif;?>>
			<div id="rowFooter">
				<div id="leftFooter">
					<div class="footerRow">
						<div class="column">
							<span class="heading"><?$APPLICATION->IncludeFile(SITE_DIR."sect_footer_menu_heading.php", Array(), Array("MODE" => "text", "NAME" => GetMessage("SECT_FOOTER_MENU_HEADING"), "TEMPLATE" => "sect_footer_menu_heading.php"));?></span>
							<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"footerCatalog", 
	array(
		"ROOT_MENU_TYPE" => "left",
		"MENU_CACHE_TYPE" => "Y",
		"MENU_CACHE_TIME" => "36000000",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "1",
		"CHILD_MENU_TYPE" => "top",
		"USE_EXT" => "Y",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N",
		"COMPONENT_TEMPLATE" => "footerCatalog",
		"CACHE_SELECTED_ITEMS" => "N"
	),
	false
);?>
						</div>

<!--отключил здесь часть футера с "Нашими услугами"-->

						<div class="column">
							<span class="heading"><?$APPLICATION->IncludeFile(SITE_DIR."sect_footer_menu_heading3.php", Array(), Array("MODE" => "text", "NAME" => GetMessage("SECT_FOOTER_MENU_HEADING3"), "TEMPLATE" => "sect_footer_menu_heading3.php"));?></span>
							<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"footerHelp", 
	array(
		"ROOT_MENU_TYPE" => "top",
		"MENU_CACHE_TYPE" => "Y",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "1",
		"CHILD_MENU_TYPE" => "top",
		"USE_EXT" => "N",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N",
		"CACHE_SELECTED_ITEMS" => "N",
		"COMPONENT_TEMPLATE" => "footerHelp"
	),
	false
);?>
						</div>
					</div>
				</div>
				<div id="rightFooter">
					<table class="rightTable">
						<tr class="footerRow">
							<td class="leftColumn">
								<?$APPLICATION->IncludeFile(SITE_DIR."sect_footer_left.php", Array(), Array("MODE" => "text", "NAME" => GetMessage("SECT_FOOTER_LEFT"), "TEMPLATE" => "sect_footer_left.php"));?>
								<?$APPLICATION->IncludeFile(SITE_DIR."sect_footer_left2.php", Array(), Array("MODE" => "text", "NAME" => GetMessage("SECT_FOOTER_LEFT2"), "TEMPLATE" => "sect_footer_left2.php"));?>
								<?$APPLICATION->IncludeFile(SITE_DIR."sect_footer_left3.php", Array(), Array("MODE" => "text", "NAME" => GetMessage("SECT_FOOTER_LEFT3"), "TEMPLATE" => "sect_footer_left3.php"));?>
								<?$APPLICATION->IncludeFile(SITE_DIR."sect_footer_counters.php", Array(), Array("MODE" => "text", "NAME" => GetMessage("SECT_FOOTER_COUNTERS"), "TEMPLATE" => "sect_footer_counters.php"));?>
							</td>
							<td class="rightColumn">
								<div class="wrap">
									<?$APPLICATION->IncludeFile(SITE_DIR."sect_footer_left4.php", Array(), Array("MODE" => "text", "NAME" => GetMessage("SECT_FOOTER_LEFT4"), "TEMPLATE" => "sect_footer_left4.php"));?>
									<?$APPLICATION->IncludeFile(SITE_DIR."sect_footer_counters_right.php", Array(), Array("MODE" => "text", "NAME" => GetMessage("SECT_FOOTER_COUNTERS"), "TEMPLATE" => "sect_footer_counters_right.php"));?>
									<?if(!empty($arTemplateSettings["TEMPLATE_GOOGLE_CODE"])):?>
										<?=trim($arTemplateSettings["TEMPLATE_GOOGLE_CODE"])?>
									<?endif;?>
									<?if(!empty($arTemplateSettings["TEMPLATE_COUNTERS_CODE"])):?>
										<?=trim($arTemplateSettings["TEMPLATE_COUNTERS_CODE"])?>
									<?endif;?>
								</div>
							</td>
						</tr>
					</table>
				</div>
			</div>
			<div id="footerBottom">
				<div class="creator">
					<?if(!empty($TEMPLATE_FOOTER_VARIANT) && $TEMPLATE_FOOTER_VARIANT == "4"):?>
						<a href="http://creative-grupp.ru/services/"><img src="<?=SITE_TEMPLATE_PATH?>/images/dwC.png" alt="Digital Web"></a>
					<?elseif(!empty($TEMPLATE_FOOTER_VARIANT) && ($TEMPLATE_FOOTER_VARIANT == "5" || $TEMPLATE_FOOTER_VARIANT == "6" || $TEMPLATE_FOOTER_VARIANT == "7" || $TEMPLATE_FOOTER_VARIANT == "8")):?>
						<a href="http://creative-grupp.ru/services/"><img src="<?=SITE_TEMPLATE_PATH?>/images/dwW.png" alt="Digital Web"></a>
					<?else:?>
						<a href="http://creative-grupp.ru/services/"><img src="<?=SITE_TEMPLATE_PATH?>/images/dw.png" alt="Digital Web"></a>
					<?endif;?>
				</div>
				<div class="social">
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include",
						".default",
						array(
							"AREA_FILE_SHOW" => "sect",
							"AREA_FILE_SUFFIX" => "sn",
							"AREA_FILE_RECURSIVE" => "Y",
							"EDIT_TEMPLATE" => ""
						),
						false
					);?>
				</div>
			</div>
		</div>
		<div id="footerLine"<?if(!empty($TEMPLATE_FOOTER_LINE_COLOR) && $TEMPLATE_FOOTER_LINE_COLOR != "default"):?> class="color_<?=$TEMPLATE_FOOTER_LINE_COLOR?>"<?endif;?>>
			<div class="wrapper">
				<div class="col">
					<div class="item">
						<a href="<?=SITE_DIR?>obratnaya-svyaz/" class="callback"><span class="icon"></span> <?=GetMessage("FOOTER_CALLBACK_LABEL")?></a>
					</div>
					<div class="item">
						<?$APPLICATION->IncludeFile(SITE_DIR."sect_footer_telephone.php", Array(), Array("MODE" => "text", "NAME" => GetMessage("SECT_FOOTER_TELEPHONE"), "TEMPLATE" => "sect_footer_telephone.php"));?>
					</div>
					<div class="item">
						<?$APPLICATION->IncludeFile(SITE_DIR."sect_footer_email.php", Array(), Array("MODE" => "text", "NAME" => GetMessage("SECT_FOOTER_EMAIL"), "TEMPLATE" => "sect_footer_email.php"));?>
					</div>
				</div>
			    <div class="col">
				    <div id="flushFooterCart">
					    <?$APPLICATION->IncludeComponent(
	"bitrix:sale.basket.basket.line", 
	"bottomCart", 
	array(
		"HIDE_ON_BASKET_PAGES" => "N",
		"PATH_TO_BASKET" => SITE_DIR."personal/cart/",
		"PATH_TO_ORDER" => SITE_DIR."personal/order/make/",
		"PATH_TO_PERSONAL" => SITE_DIR."personal/",
		"PATH_TO_PROFILE" => SITE_DIR."personal/",
		"PATH_TO_REGISTER" => SITE_DIR."login/",
		"POSITION_FIXED" => "N",
		"SHOW_AUTHOR" => "N",
		"SHOW_EMPTY_VALUES" => "Y",
		"SHOW_NUM_PRODUCTS" => "Y",
		"SHOW_PERSONAL_LINK" => "N",
		"SHOW_PRODUCTS" => "Y",
		"SHOW_TOTAL_PRICE" => "Y",
		"COMPONENT_TEMPLATE" => "bottomCart",
		"SHOW_DELAY" => "N",
		"SHOW_NOTAVAIL" => "N",
		"SHOW_SUBSCRIBE" => "N",
		"SHOW_IMAGE" => "Y",
		"SHOW_PRICE" => "Y",
		"SHOW_SUMMARY" => "Y",
		"PATH_TO_AUTHORIZE" => ""
	),
	false
);?>
					</div>
				</div>
			</div>
		</div>
	</div>    
    <div id="overlap"></div>
    
	<?$APPLICATION->IncludeComponent(
		"bitrix:main.include",
		".default",
		array(
			"AREA_FILE_SHOW" => "sect",
			"AREA_FILE_SUFFIX" => "cart",
			"AREA_FILE_RECURSIVE" => "Y",
			"EDIT_TEMPLATE" => ""
		),
		false
	);?>

	<?$APPLICATION->IncludeComponent(
		"bitrix:main.include",
		".default",
		array(
			"AREA_FILE_SHOW" => "sect",
			"AREA_FILE_SUFFIX" => "fastbuy",
			"AREA_FILE_RECURSIVE" => "Y",
			"EDIT_TEMPLATE" => ""
		),
		false
	);?>

    <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        ".default",
        array(
            "AREA_FILE_SHOW" => "sect",
            "AREA_FILE_SUFFIX" => "creditbuy",
            "AREA_FILE_RECURSIVE" => "Y",
            "EDIT_TEMPLATE" => ""
        ),
        false
    );?>

	<?$APPLICATION->IncludeComponent(
		"bitrix:main.include",
		".default",
		array(
			"AREA_FILE_SHOW" => "sect",
			"AREA_FILE_SUFFIX" => "requestPrice",
			"AREA_FILE_RECURSIVE" => "Y",
			"EDIT_TEMPLATE" => ""
		),
		false
	);?>

	<?$APPLICATION->IncludeComponent(
		"dresscode:catalog.product.subscribe.online", 
		".default", 
		array(
			"SITE_ID" => SITE_ID
		),
		false,
		array(
			"HIDE_ICONS" => "Y"
		)
	);?>

	<?$APPLICATION->IncludeComponent(
		"bitrix:main.include",
		".default",
		array(
			"AREA_FILE_SHOW" => "sect",
			"AREA_FILE_SUFFIX" => "landing",
			"AREA_FILE_RECURSIVE" => "Y",
			"EDIT_TEMPLATE" => ""
		),
		false
	);?>
	
	<?$APPLICATION->IncludeComponent(
	"dresscode:settings", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "360000"
	),
	false
);?>

	<div id="upButton">
		<a href="#"></a>
	</div>

    <script type="text/javascript">
      var ajaxPath = "<?=SITE_DIR?>ajax.php";
      var SITE_DIR = "<?=SITE_DIR?>";
      var SITE_ID  = "<?=SITE_ID?>";
      var TEMPLATE_PATH = "<?=SITE_TEMPLATE_PATH?>";
    </script>
    
    <script type="text/javascript">
		var LANG = {
			BASKET_ADDED: "<?=GetMessage("BASKET_ADDED")?>",
			WISHLIST_ADDED: "<?=GetMessage("WISHLIST_ADDED")?>",
			ADD_COMPARE_ADDED: "<?=GetMessage("ADD_COMPARE_ADDED")?>",
			ADD_CART_LOADING: "<?=GetMessage("ADD_CART_LOADING")?>",
			ADD_BASKET_DEFAULT_LABEL: "<?=GetMessage("ADD_BASKET_DEFAULT_LABEL")?>",
			ADDED_CART_SMALL: "<?=GetMessage("ADDED_CART_SMALL")?>",
			CATALOG_AVAILABLE: "<?=GetMessage("CATALOG_AVAILABLE")?>",
			GIFT_PRICE_LABEL: "<?=GetMessage("GIFT_PRICE_LABEL")?>",
			CATALOG_ECONOMY: "<?=GetMessage("CATALOG_ECONOMY")?>",
			CATALOG_ON_ORDER: "<?=GetMessage("CATALOG_ON_ORDER")?>",
			CATALOG_NO_AVAILABLE: "<?=GetMessage("CATALOG_NO_AVAILABLE")?>",
			FAST_VIEW_PRODUCT_LABEL: "<?=GetMessage("FAST_VIEW_PRODUCT_LABEL")?>",
			WISHLIST_SENDED: "<?=GetMessage("WISHLIST_SENDED")?>",
			REQUEST_PRICE_LABEL: "<?=GetMessage("REQUEST_PRICE_LABEL")?>",
			REQUEST_PRICE_BUTTON_LABEL: "<?=GetMessage("REQUEST_PRICE_BUTTON_LABEL")?>",
			ADD_SUBSCRIBE_LABEL: "<?=GetMessage("ADD_SUBSCRIBE_LABEL")?>",
			REMOVE_SUBSCRIBE_LABEL: "<?=GetMessage("REMOVE_SUBSCRIBE_LABEL")?>"
		};
	</script>
	<script type="text/javascript">
		<?if(!empty($arTemplateSettings)):?>
			var globalSettings = {
			<?foreach($arTemplateSettings as $settingsIndex => $nextSettingValue):?>
				<?if(!DwSettings::checkSecretSettingsByIndex($settingsIndex)):?>
					"<?=$settingsIndex?>": '<?=$nextSettingValue?>',
				<?endif;?>
			<?endforeach;?>
			}
		<?endif;?>
	</script>
	

<script>
//buyoneclick
$(document).on('click', 'a[id="fastBuyFormSubmit"]', function() {
    var m = $(this).closest('form[id="fastBuyForm"]');
        var fio = m.find('input[name="name"]').val();
        var phone = m.find('input[name="phone"]').val();
        var comment = m.find('textarea[name="message"]').val();
        var ct_site_id = '31686';
        var sub = 'Купить в 1 клик';
        var ct_data = {           
        fio: fio,
        phoneNumber: phone,
        comment: comment,
        subject: sub,
        sessionId: window.call_value
        };
        if (!!phone && !!fio) {
        ym(17355061, 'reachGoal', 'hl-one-click');
        gtag('event', 'sendemail', {'event_category': 'mail', 'event_action': 'hl-one-click'});
        console.log("hl-one-click");

        $.ajax({
          url: 'https://api-node11.calltouch.ru/calls-service/RestAPI/requests/'+ct_site_id+'/register/',
          dataType: 'json', type: 'POST', data: ct_data, async: false
        });
    }
})

$(document).on('click', '#openPBCredit', function() {
		ym(17355061, 'reachGoal', 'hl-credit');
        gtag('event', 'sendemail', {'event_category': 'mail', 'event_action': 'hl-credit'});
		console.log("hl-credit");
})
$(document).on('click', '.bk_buy_button', function() {
        ym(17355061, 'reachGoal', 'hl-credit');
        gtag('event', 'sendemail', {'event_category': 'mail', 'event_action': 'hl-credit'});
        console.log("hl-credit");
})
$(document).on('click', '.bk_buy_button2', function() {
        ym(17355061, 'reachGoal', 'hl-credit');
        gtag('event', 'sendemail', {'event_category': 'mail', 'event_action': 'hl-credit'});
        console.log("hl-credit");
})


//callorder
$(document).on('click', 'input[type="submit"]', function() {
    var m = $(this).closest('form[name="DW_CALLBACK_FORM"]');
        var fio = m.find('input[name="form_text_7"]').val();
        var phone = m.find('input[name="form_text_6"]').val();
        var ct_site_id = '31686';
        var sub = 'Заказать звонок';
        var ct_data = {           
        fio: fio,
        phoneNumber: phone,
        subject: sub,
        sessionId: window.call_value
        };
        if (!!phone && !!fio) {
		ym(17355061, 'reachGoal', 'hl-call-back');
        gtag('event', 'sendemail', {'event_category': 'mail', 'event_action': 'hl-call-back'});
		console.log("hl-call-back");
        $.ajax({
          url: 'https://api-node11.calltouch.ru/calls-service/RestAPI/requests/'+ct_site_id+'/register/',
          dataType: 'json', type: 'POST', data: ct_data, async: false
        });
    }
})

//basket
$(document).on('mousedown touchstart', 'a.btn', function() {
  var m = $(this).closest('form');
    var fio = m.find('input[name="ORDER_PROP_58"],input[autocomplete="name"]').val();
    var phone = m.find('input[name="ORDER_PROP_60"],input[autocomplete="tel"]').val();
    var mail = m.find('input[name="ORDER_PROP_59"],input[autocomplete="email"]').val();
    var ct_site_id = '31686';
    var sub = 'Корзина';
    var ct_data = {            
    fio: fio,
    phoneNumber: phone,
    email: mail,
    subject: sub,
    sessionId: window.call_value
    };
    if (!!phone && !!fio && !!mail){
    $.ajax({ 
      url: 'https://api-node11.calltouch.ru/calls-service/RestAPI/requests/'+ct_site_id+'/register/',
      dataType: 'json', type: 'POST', data: ct_data, async: false
    });
  }
});

//jivosite

function jivo_onIntroduction() {    
    let jct_site = '31686', jct_node = '11', jct_url = 'https://api-node'+jct_node+'.calltouch.ru/calls-service/RestAPI/'+jct_site+'/requests/orders/register/', jct_data = {}, jc = jivo_api.getContactInfo();
   jct_data.phoneNumber = jc.phone; jct_data.email = jc.email; jct_data.fio = jc.client_name; jct_data.sessionId = window.call_value; jct_data.subject = 'jivo Посетитель ввёл контактные данные';
   jQuery.post(jct_url, jct_data);
}
function jivo_onCallStart() {
   let jct_site = '31686', jct_node = '11', jct_url = 'https://api-node'+jct_node+'.calltouch.ru/calls-service/RestAPI/'+jct_site+'/requests/orders/register/', jct_data = {}, jc = jivo_api.getContactInfo();
   jct_data.phoneNumber = jc.phone; jct_data.sessionId = window.call_value; jct_data.subject = 'jivo Звонок на клиентский номер';
    jQuery.post(jct_url, jct_data);
}

</script>
<!-- /calltouch -->



<script>


	$(document).ready(function(){

		//add to cart event
		$('.addCart').on("click", function(){
			yaCounter17355061.reachGoal('hl-add-to-cart');
			console.log("event hl-add-to-cart");
		});

		//one click buy event
		$('#fastBuyFormSubmit').on("click", function(){
//            console.log("event hl-one-click-buy");


		});

});


</script>
</body>
</html>