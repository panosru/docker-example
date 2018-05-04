A basic example of how to use Docker with PHP/nginx & nginx-proxy.

Any suggestions to improve the example are very welcome!

add `docker-example.local` to your `hosts` file

```bash
sudo vim /etc/hosts
```
and add:

```
127.0.0.1    docker-example.local
::1          docker-example.local
```
then run the following command from the `docker-example` root:

```
make create-network && make up && cd docker-example.local  && make up
```
now visit:

[http://localhost:8000/](http://localhost:8000/)

[http://docker-example.local](http://docker-example.local)

both should be working fine and showing `phpinfo()`
