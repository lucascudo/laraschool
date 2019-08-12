#!/bin/bash

docker exec -t laraschool_workspace_1 php artisan key:generate
docker exec -t laraschool_workspace_1 php artisan storage:link
docker exec -t laraschool_workspace_1 php artisan migrate:fresh --seed --force
docker exec -t laraschool_workspace_1 php artisan cache:clear
docker exec -t laraschool_workspace_1 php artisan view:clear
docker exec -t laraschool_workspace_1 php artisan config:cache
docker exec -t laraschool_workspace_1 php artisan up
echo Installation completed
