# cloudify-php

    docker build -t sample-php-laravel-nginx:1 .
    
    docker exec -it <image-name> /bin/ash
    
## Helm
    
    kubectl create configmap laravel-nginx-configmap --from-file .env
    
## ibmcloud

ibmcloud cr build -t  de.icr.io/php-demo/laravel-nginx:0.2 .