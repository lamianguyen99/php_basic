# php_basic

# Nginx reverse proxy and ngixn server cache 
#apply new configuration
sudo nginx -t  && service nginx reload && service nginx restart

http {
# ...
# in file /etc/nginx/nginx.conf
proxy_cache_path /var/www/huyfr1.vietnix.xyz/cache  levels=1:2    keys_zone=STATIC:10m;

server {
    # other server config...
    listen 80;
    server_name huyfr1.vietnix.xyz;
    location / {
                proxy_pass http://huyfr1.vietnix.xyz:8080/;

                proxy_cache STATIC;
                add_header X-Cache $upstream_cache_status;
                proxy_cache_valid  200 302  2m;
                proxy_cache_valid  404      1m;

    }
}
}



