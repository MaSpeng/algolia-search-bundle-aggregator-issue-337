# alolia/search-bundle aggregator issue 337 sample application

This sample application should demonstrate the issue: [337 from the algolua/search-bundle](https://github.com/algolia/search-bundle/issues/337)

## Technology

* [Docker](https://www.docker.com/) and [Docker Compose](https://github.com/docker/compose)
* [Git](https://git-scm.com/)
* [GNU Make](http://www.gnu.org/software/make)

## Application setup

### Prepare the environment

This project uses dotenv files.

* Adjust the settings in the `.env` file and supply your `API ID` and `API Key`.

## Execution

### Using Make
Run `make` to execute the required operations to install application dependencies, migrate a database, apply fixtures and publish objects

### Using Docker

* Install application dependencies: `docker-compose run --rm composer install`
* Migrate database: `docker-compose run --rm php bin/console doctrine:migrations:migrate --no-interaction`
* Apply fixtures: `docker-compose run --rm php bin/console doctrine:fixtures:load --no-interaction`
* Publish objects: `docker-compose run --rm php bin/console search:import --no-interaction`
