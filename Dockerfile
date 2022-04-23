FROM php:alpine
WORKDIR /app
CMD ["php","artisan","serve","--host=0.0.0.0","--port=80"]