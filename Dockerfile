# Use PHP 8.2 with Apache
FROM php:8.2-apache

# Set working directory
WORKDIR /var/www/html

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    nodejs \
    npm

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy existing application directory contents
COPY . /var/www/html

# Copy existing application directory permissions
COPY --chown=www-data:www-data . /var/www/html

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Install Node.js dependencies and build assets
RUN npm install && npm run build

# Create storage directory and set permissions
RUN mkdir -p /var/www/html/storage/logs \
    && mkdir -p /var/www/html/storage/framework/cache \
    && mkdir -p /var/www/html/storage/framework/sessions \
    && mkdir -p /var/www/html/storage/framework/views \
    && chown -R www-data:www-data /var/www/html/storage \
    && chmod -R 775 /var/www/html/storage

# Create basic .env file if .env.example doesn't exist
RUN if [ ! -f .env.example ]; then \
    echo "APP_NAME=Laravel" > .env.example && \
    echo "APP_ENV=production" >> .env.example && \
    echo "APP_KEY=" >> .env.example && \
    echo "APP_DEBUG=false" >> .env.example && \
    echo "APP_URL=http://localhost" >> .env.example && \
    echo "DB_CONNECTION=sqlite" >> .env.example && \
    echo "DB_DATABASE=/var/www/html/database/database.sqlite" >> .env.example && \
    echo "CACHE_DRIVER=file" >> .env.example && \
    echo "SESSION_DRIVER=file" >> .env.example && \
    echo "QUEUE_DRIVER=sync" >> .env.example; \
    fi

# Copy environment file and convert line endings
RUN cp .env.example .env && \
    sed -i 's/\r$//' .env

# Generate application key
RUN php artisan key:generate --force

# Optimize Laravel
RUN php artisan config:cache \
    && php artisan route:cache \
    && php artisan view:cache

# Configure Apache
RUN a2enmod rewrite
COPY docker/apache.conf /etc/apache2/sites-available/000-default.conf

# Expose port 80
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"] 