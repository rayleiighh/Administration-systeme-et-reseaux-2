FROM ubuntu/bind9

RUN mkdir -p /etc/bind/zone

COPY configFile/named.conf /etc/bind/named.conf

COPY configFile/m1-7.zone /etc/bind/zone/m1-7.zone

RUN apt-get update

RUN chown -R bind:bind /etc/bind /var/cache/bind && \
    chmod -R 770 /etc/bind /var/cache/bind

CMD ["/usr/sbin/named", "-g", "-c", "/etc/bind/named.conf", "-u", "bind"]
