FROM php:8.2-apache

# Installa estensioni PHP necessarie
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Abilita mod_rewrite di Apache
RUN a2enmod rewrite

# Installa Git e Docker
RUN apt-get update && apt-get install -y \
    git \
    curl \
    nano \
    vim \
    && rm -rf /var/lib/apt/lists/*

# Configura permessi
RUN chown -R www-data:www-data /var/www/html

# Esponi porta 80
EXPOSE 80

# Avvia Apache
CMD ["apache2-foreground"]
