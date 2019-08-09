#!/bin/bash

echo Clearing cache directory
docker exec -t ebmspps_workspace_1 rm -rf bootstrap/cache/*.php
docker exec -t ebmspps_workspace_1 php artisan cache:clear
docker exec -t ebmspps_workspace_1 php artisan view:clear
docker exec -t ebmspps_workspace_1 php artisan config:cache
docker exec -t ebmspps_workspace_1 php artisan migrate:rollback --force
docker exec -t ebmspps_workspace_1 php artisan up
echo Rollback completed
