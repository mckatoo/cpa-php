#!/bin/bash
docker-compose stop
docker-compose rm
sudo rm -rf db
sudo rm -rf logs
mkdir db logs
touch ./logs/nginx-access.log
touch ./logs/nginx-error.log
