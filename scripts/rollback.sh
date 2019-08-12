#!/bin/bash

docker exec -t laraschool_workspace_1 php artisan down
docker exec -t laraschool_workspace_1 yarn
docker exec -t laraschool_workspace_1 yarn run dev
sh $(dirname "$0")/production/rollback.sh
