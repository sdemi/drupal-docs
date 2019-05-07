#!/bin/bash

cd ..

echo "--- CUSTOM MODULES ---"
scripts/drupal-check.phar modules/custom

echo "--- CUSTOM THEMES ---"
scripts/drupal-check.phar themes/custom