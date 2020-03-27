FROM milken/php-dev:latest

COPY . /var/www
COPY .env /var/www

STOPSIGNAL SIGQUIT

WORKDIR /var/www

EXPOSE 9000
ENTRYPOINT [ "/docker-entrypoint.sh"]
CMD [ "/usr/bin/supervisord" ]