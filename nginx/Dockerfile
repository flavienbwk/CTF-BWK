FROM nginx

RUN rm /etc/nginx/conf.d/default.conf

COPY ctfbwk.nginx.conf /etc/nginx/conf.d/ctfbwk.nginx.conf

CMD /usr/local/bin/ep -v /etc/nginx/conf.d/*.conf & nginx -g "daemon off;"