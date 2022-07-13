#!/bin/bash

composer install
composer dump-autoload

php public/index.php