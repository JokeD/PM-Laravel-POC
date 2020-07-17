#!/bin/sh

composer install
ppm start --bootstrap=laravel --host=0.0.0.0 --port=8080

