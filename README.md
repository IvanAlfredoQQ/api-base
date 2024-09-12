### Levantando proyecto en PHP + Laravel + PostgreSQL, todo Dockerizado
1. Configurar las credenciales en docker-compose.yml para la base de datos o ajustar puertos
2. copy .env.example -> .env
3. Configuro las variables de entorno dependiendo de las credenciales seteadas en docker-compose.yml
4. Entro a la estancia app, y corro migraciones para saber si está conectado "php artisan migrate"

El proyecto ya tiene un endpoint conectado que devuelve un message para verificar si front puede hacer peticiones
- http://localhost/test
