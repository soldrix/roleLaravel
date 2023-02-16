Command pour window : 
```
composer i
copy .env.example .env
```
modifier l'env pour la db puis continuer les commandes suivante :
```
php artisan migrate:fresh --seed --seeder=DatabaseSeeder
php artisan serve
```
Les utilisateurs :
```
role : admin
email: test@example.com
password : 1234567890
```
```
role : user
email: toto@example.com
password : 1234567890
```
