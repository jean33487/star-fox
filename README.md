
# Laravel Template

### Passo a passo
Clone Repositório criado a partir do template, entre na pasta e execute os comandos abaixo:

Crie o Arquivo .env
```sh
cp .env.example .env
```


Atualize as variáveis de ambiente do arquivo .env
```dosini
APP_NAME=Laravel
APP_URL=http://localhost:8080

DB_PASSWORD=root
```


Suba os containers do projeto
```sh
docker compose up -d
```


Acessar o container
```sh
docker compose exec app bash
```


Instalar as dependências do projeto
```sh
composer install
```


Gerar a key do projeto Laravel
```sh
php artisan key:generate
```

Atualiza as migrations antes de acessar o site
```sh
php artisan migrate: fresh
```


Acesse o projeto
[http://localhost:8080](http://localhost:8080)

Acesse o phpmyadmin
[http://localhost:8081](http://localhost:8081)

## Autores
| [<img src="https://avatars.githubusercontent.com/u/107090798?v=4" width=115><br><sub>MatheusZCAR</sub>](https://github.com/MatheusZCAR) |  [<img src="https://avatars.githubusercontent.com/u/106974254?v=4" width=115><br><sub>GolfBravoSierra</sub>](https://github.com/GolfBravoSierra) |  [<img src="https://avatars.githubusercontent.com/u/111363981?v=4" width=115><br><sub>VRoston</sub>](https://github.com/VRoston) | [<img src="https://avatars.githubusercontent.com/u/55934276?v=4" width=115><br><sub>Jean33487</sub>](https://github.com/jean33487) |  [<img 

| :---: | :---: | :---: | :---: | :---: | :---: | :---: |


