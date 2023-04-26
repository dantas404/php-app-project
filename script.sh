#!/bin/bash

echo 'Working...'

docker build -t dantas404/phpbackend backend/.
docker build -t dantas404/mysqldatabase database/.

echo 'Pushing...'

docker push dantas404/phpbackend
docker push dantas404/mysqldatabase

echo 'Creating Services...'

kubectl apply -f ./services.yml

echo 'Deployments...'

kubectl apply -f ./deployment.yml
