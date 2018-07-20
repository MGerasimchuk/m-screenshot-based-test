1. Run selenium chrome: `docker-compose up -d`
2. Run test, for create first page screenshot: `docker-compose run codecept run`
3. After screenshot is created, repeat run test: `docker-compose run codecept run`
If screenshot(`tests/_data/VisualCeption/PageCest.tryToTest.page.png`) exists,
the [test](tests/acceptance/PageCest.php) will compare the new screenshot with the existing.
4. If the test fails, the difference in the images will be displayed here:
`tests/_output/debug/comparePageCest.tryToTest.page.png`
