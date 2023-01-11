1. Clonare repo
2. Creare Brench
3. Eseguire l'install di vendor e pacchetti JS
    - composer i --ignore-platform-reqs
    - npm i
4. Creare DB in PHPMyAdmin
5. Duplicare file ".env.example" e modificarlo con i dati del DB
6. Generare Key in ".env" ( php artisan key:generate )
7. Eseguire migrazione ( php artisan migrate:refresh )
8. Eseguire seed ( php artisan db:seed --class=<nome-del-seeder>TableSeeder )
9. Buid applicazione con
    - php artisan serve
    - npm run dev
10. Eseguire commit
11. Andare su GitHub, scheda "Pull request"
12. Cliccare su "Compare e pull"
13. Confermare e attendere l'approvazione
