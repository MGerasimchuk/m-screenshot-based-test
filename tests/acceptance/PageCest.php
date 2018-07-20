<?php

class PageCest
{
    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/metronic/preview/?page=inner&demo=demo9');
        $I->resizeWindow(400, 700);
        $I->dontSeeVisualChanges('page');
    }
}
