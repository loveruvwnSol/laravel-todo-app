FROM nginx:1.21.1-alpine

COPY ./app/nginx/default.conf /etc/nginx/conf.d/default.conf