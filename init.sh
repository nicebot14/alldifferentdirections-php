#!/usr/bin/env bash

docker build -t nicebot14/alldifferentdirections:0.0.1 .
docker run --rm -ti -v $(pwd):/app -u www-data:www-data nicebot14/alldifferentdirections:0.0.1 bash -c 'cd /app; composer install; php init.php'
