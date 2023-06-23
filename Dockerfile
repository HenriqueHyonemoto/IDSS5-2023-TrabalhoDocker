FROM wyveo/nginx-php-fpm:php81

COPY app/* /usr/share/nginx/html

EXPOSE 80

CMD ["/start.sh"]
