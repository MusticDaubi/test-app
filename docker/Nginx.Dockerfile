FROM nginx

ADD docker/conf/host.conf /etc/nginx/conf.d/default.conf

WORKDIR /var/www/laravel-docker
