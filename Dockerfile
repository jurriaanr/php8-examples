FROM php:8.0.0

USER root
RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd

RUN apt install nano
COPY bin/complete.txt /root/complete.txt
RUN cat /root/complete.txt >> ~/.bashrc
RUN rm /root/complete.txt

RUN curl -SsLo ~/clish.phar https://github.com/adhocore/php-cli-syntax/releases/latest/download/clish.phar
RUN chmod +x ~/clish.phar && ln -s ~/clish.phar /usr/local/bin/clish
CMD tail -f /dev/null
