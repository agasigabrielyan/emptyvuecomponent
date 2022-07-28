<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/**
 * @var $temploteFolder
 */
define('VUEJS_DEBUG', true);
\Bitrix\Main\UI\Extension::load("ui.vue");
?>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div id="application"></div>
        </div>
    </div>
</div>
