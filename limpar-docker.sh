#!/bin/bash
docker stop web db
docker rm web db
sudo rm -rf db
mkdir db
docker rmi cpa_php
