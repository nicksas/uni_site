<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

CJSCore::Init();
?>

<div class="bx-system-auth-form">

<?
if ($arResult['SHOW_ERRORS'] == 'Y' && $arResult['ERROR'])
	ShowMessage($arResult['ERROR_MESSAGE']);
?>

<form name="system_auth_form<?=$arResult["RND"]?>" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>">
<?if($arResult["BACKURL"] <> ''):?>
	<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
<?endif?>
<?foreach ($arResult["POST"] as $key => $value):?>
	<input type="hidden" name="<?=$key?>" value="<?=$value?>" />
<?endforeach?>
	<input type="hidden" name="AUTH_FORM" value="Y" />
	<input type="hidden" name="TYPE" value="AUTH" />
    <div class="auth__form row">
        <div class="auth__title"><?=GetMessage("auth_form_comp_auth")?></div>
        <div class="col-12 col-md-6 auth__form-left">
            <div class="auth__form-login auth__inputs">
                <?=GetMessage("AUTH_LOGIN")?>:<br />
                <input type="text" name="USER_LOGIN" maxlength="50" value="" size="17" />
                <script>
                    BX.ready(function() {
                        var loginCookie = BX.getCookie("<?=CUtil::JSEscape($arResult["~LOGIN_COOKIE_NAME"])?>");
                        if (loginCookie)
                        {
                            var form = document.forms["system_auth_form<?=$arResult["RND"]?>"];
                            var loginInput = form.elements["USER_LOGIN"];
                            loginInput.value = loginCookie;
                        }
                    });
                </script>
            </div>
            <div class="auth__form-pass auth__inputs">
                <?=GetMessage("AUTH_PASSWORD")?>:<br />
                <input type="password" name="USER_PASSWORD" maxlength="255" size="17" autocomplete="off" />
                <?if($arResult["SECURE_AUTH"]):?>
                    <span class="bx-auth-secure" id="bx_auth_secure<?=$arResult["RND"]?>" title="<?echo GetMessage("AUTH_SECURE_NOTE")?>" style="display:none">
					<div class="bx-auth-secure-icon"></div>
				</span>
                    <noscript>
				<span class="bx-auth-secure" title="<?echo GetMessage("AUTH_NONSECURE_NOTE")?>">
					<div class="bx-auth-secure-icon bx-auth-secure-unlock"></div>
				</span>
                    </noscript>
                    <script type="text/javascript">
                        document.getElementById('bx_auth_secure<?=$arResult["RND"]?>').style.display = 'inline-block';
                    </script>
                <?endif?>
            </div>
            <div class="auth__form-remember">
                <div class="auth__form-rememberCheck">
                    <?if ($arResult["STORE_PASSWORD"] == "Y"):?>
                        <input type="checkbox" id="USER_REMEMBER_frm" name="USER_REMEMBER" value="Y" />
                        <label for="USER_REMEMBER_frm" title="<?=GetMessage("AUTH_REMEMBER_ME")?>"><?echo GetMessage("AUTH_REMEMBER_SHORT")?></label>
                    <?endif?>
                </div>
                <a href="<?=$arResult["AUTH_FORGOT_PASSWORD_URL"]?>" rel="nofollow"><?=GetMessage("AUTH_FORGOT_PASSWORD_2")?></a>
            </div>
            <div class="auth__form-signIn">
                <input type="submit" name="Login" value="<?=GetMessage("AUTH_LOGIN_BUTTON")?>" />
            </div>
        </div>
        <div class="col-12 col-md-5 offset-md-1 auth__form-right">
            <div class="auth__form-signUp">
                <div class="auth__form-signUp-btn">
                    <?if($arResult["NEW_USER_REGISTRATION"] == "Y"):?>
                        <a href="<?=$arResult["AUTH_REGISTER_URL"]?>" rel="nofollow"><?=GetMessage("AUTH_REGISTER")?></a>
                    <?endif?>
                </div>
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => SITE_DIR . "include/before_reg.php"),
                    false
                ); ?>
            </div>
        </div>
    </div>
</form>

