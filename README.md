Kod jest przykładem z artykułu na blogu: [Optymalizacja z głową](https://programisty-dzien-powszedni.pl/optymalizacja-z-glowa/)

# Installation:

composer install

# Run:

## Optimized:

./vendor/bin/phpunit --filter=CyclesTest::test_optimized_returns_correct_values

## Non-optimized:

./vendor/bin/phpunit --filter=CyclesTest::test_non_optimized_returns_correct_values
