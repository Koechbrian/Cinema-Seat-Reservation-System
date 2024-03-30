# Use PHP as base image
FROM php:7.4-apache

# Set working directory
WORKDIR /var/www/html

# Copy PHP, CSS, and JS files to working directory
COPY . .

# Expose port 80
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]
