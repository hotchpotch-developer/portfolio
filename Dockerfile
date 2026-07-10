# Use official PHP image with necessary extensions
FROM php:8.3-fpm

# Set working directory
WORKDIR /var/www/html

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \
    curl \
    libpq-dev \
    libonig-dev \
    procps \
    openssl \
    libzip-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd mbstring pdo pdo_pgsql zip

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy application files
COPY . .

# Set proper permissions for the storage and cache directories
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Install PHP dependencies
RUN composer install --ignore-platform-reqs

# Copy default environment file
COPY .env.example .env

# Generate application key
RUN php artisan key:generate

# Ensure the storage directory is linked correctly
RUN php artisan storage:link

# Run database migrations and seeders
RUN php artisan migrate:fresh

# Expose PHP-FPM port (9000)
EXPOSE 9000

# Set user to www-data for security
USER www-data

# Start PHP-FPM
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=10000"]
