# Helm 
## Create secret key 
Create secret key in kubernetes to store password 

DB_PASSWORD=6065d86570e1a62e721471eaa28778a9c9c5225cc7819907ac12b3e865fe8a9b


echo -n '6065d86570e1a62e721471eaa28778a9c9c5225cc7819907ac12b3e865fe8a9b' > ./password.txt


kubectl create secret generic laravel-nginx-secret --from-file=./password.txt



