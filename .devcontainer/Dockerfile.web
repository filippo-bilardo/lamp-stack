FROM php:8.2-apache

# Abilita mod_rewrite di Apache
RUN a2enmod rewrite

# Installa estensioni PHP necessarie per MySQL e altri tool
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Installa strumenti utili per lo sviluppo
RUN apt-get update && apt-get install -y \
    git \
    curl \
    vim \
    unzip \
    && rm -rf /var/lib/apt/lists/*

# Copia la configurazione personalizzata di Apache (opzionale)
COPY apache-config.conf /etc/apache2/sites-available/000-default.conf

# Imposta la directory di lavoro
WORKDIR /var/www/html

# Espone la porta 80
EXPOSE 80
