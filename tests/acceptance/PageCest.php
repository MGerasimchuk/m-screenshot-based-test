<?php

class PageCest
{
    // TODO надо еще в гитлаб CI достукиваться до кубика продовского и выводить все вресии и все логи в случае ошибки
    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/metronic/preview/?page=inner&demo=demo9');
        $I->resizeWindow(1900, 1100);
        usleep(9000000);
        $I->amOnUrl("https://google.com");

        usleep(9000000);
        $I->amOnUrl("https://yandex.ru");
        usleep(9000000);
        $I->dontSeeVisualChanges('page');
    }
}
