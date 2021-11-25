# PHPStan issue #6096

Reproducer for https://github.com/phpstan/phpstan/issues/6096

## How to invoke error

```
git clone git@github.com:Wirone/phpstan-issue-6096-reproducer.git
cd phpstan-issue-6096-reproducer
composer install
vendor/bin/phpstan analyse
```

## More info

If you comment `$array = ['y'];` in `X.php` error disappears.