# WordPress Dev Env

This repo uses `docker-compose` to set up a local WordPress development environmant. It contains a few plugins that are useful during WordPress plugin development, such as QueryMonitor and wp-crontrol. Furthermore it contains the boilerplate plugin [https://github.com/DevinVinson/wppb-demo-plugin](https://github.com/DevinVinson/wppb-demo-plugin).

## Installation

`docker-compose up -d` creates a docker stack containing the following:

- Database from `mariadb:latest`, published on `localhost:7001`
- Adminer from `adminer:latest`, published on `localhost:7002`
- WordPress from `wordpress:latest`, published on `localhost:7000` using the database on `localhost:7001`
- wp-cli instance to setup the WordPress instance

The wp-cli setup script contains a slight delay (`sleep 10`) before it starts setting up WordPress, because the database does not respond instantly during setup. After the setup has finished, you can log into the WordPress stack on `localhost:7000/wp-admin` using user: `admin` and password: `admin`.

The two folders `wordpress_plugins` and `wordpress_themes` are linked into the container stack and are therefore accessible for WordPress. You can do your plugin and theme development direct in these folders.

## Removal

To remove the stack simply use `docker-compose down -v`. This cleans up the docker stack and removes the named volumes and networks.
