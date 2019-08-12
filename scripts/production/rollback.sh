#!/bin/bash

echo Clearing cache directory
docker exec -t laraschool_workspace_1 rm -rf bootstrap/cache/*.php
docker exec -t laraschool_workspace_1 php artisan cache:clear
docker exec -t laraschool_workspace_1 php artisan view:clear
docker exec -t laraschool_workspace_1 php artisan config:cache
docker exec -t laraschool_workspace_1 php artisan migrate:rollback --force
docker exec -t laraschool_workspace_1 php artisan up
echo Rollback completed
