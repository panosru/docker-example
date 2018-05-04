ARGS = $(filter-out $@,$(MAKECMDGOALS))
MAKEFLAGS += --silent

list:
	ls

#############################
# Docker machine states
#############################

up:
	docker-compose up -d

start:
	docker-compose start

stop:
	docker-compose stop

state:
	docker-compose ps

rebuild:
	docker-compose stop
	docker-compose pull
	docker-compose rm --force nginx-proxy
	docker-compose build --no-cache --pull
	docker-compose up -d --force-recreate

#############################
# General
#############################

bash: shell

shell:
	docker-compose exec --user root nginx-proxy /bin/bash

create-network:
	docker network create nginx-proxy

#############################
# Argument fix workaround
#############################
%:
	@:
