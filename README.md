# Installation:

composer install

# Run:

## Optimized:

./vendor/bin/phpunit --filter=CyclesTest::test_optimized_returns_correct_values

## Non-optimized:

./vendor/bin/phpunit --filter=CyclesTest::test_non_optimized_returns_correct_values
