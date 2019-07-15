FROM mariadb:10.4

USER root

COPY database.sql /docker-entrypoint-initdb.d

EXPOSE 3306
CMD mysqld