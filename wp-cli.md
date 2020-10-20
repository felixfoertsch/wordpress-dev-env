Run WP CLI via docker (command executed in the example is "user list"):

```
docker run -it --rm \
      --volumes-from docker-wordpress-stack_wordpress_1 \
      --network docker-wordpress-stack_mietdeckel \
      wordpress:cli user list
```
