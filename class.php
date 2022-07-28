<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
use Bitrix\Main\Engine\Contract\Controllerable;
use Bitrix\Main\Engine\ActionFilter;

class Vuelearing extends \CBitrixComponent implements Controllerable
{
    public function configureActions()
    {
        // TODO: Implement configureActions() method.
    }

    public function executeComponent()
    {

        $this->includeComponentTemplate();
    }
}