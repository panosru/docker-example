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
	docker-compose rm --force blackfire
	docker-compose build --no-cache --pull
	docker-compose up -d --force-recreate

#############################
# General
#############################

bash: shell

shell:
	docker-compose exec --user root blackfire /bin/bash

#############################
# Argument fix workaround
#############################
%:
	@:
