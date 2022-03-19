# Agenda personală

Pagina principală:

![image](https://user-images.githubusercontent.com/51412651/159134130-026d63a6-58ae-43ea-9700-94085fc9b13b.png)

Înregistrarea:

![image](https://user-images.githubusercontent.com/51412651/159134205-ec9b3125-7d5a-4cfd-a1bf-f8c8b141e13c.png)

Pagina user-ului:

![image](https://user-images.githubusercontent.com/51412651/159134241-1db956df-134d-4dce-bb95-15d17fef8ece.png)

Delogarea din pagină:

![image](https://user-images.githubusercontent.com/51412651/159134285-6c79c2e9-6ecc-4ecb-9363-77f431a895f3.png)

Adăugarea unui eveniment în agendă:

![image](https://user-images.githubusercontent.com/51412651/159134312-26d74c52-d538-4f7e-9f2c-aa6c16b09cc7.png)

Lista de evenimente:

![image](https://user-images.githubusercontent.com/51412651/159134416-74f51ea3-3267-4019-a71f-ab6537f3c5b1.png)

Editarea evenimentului:

![image](https://user-images.githubusercontent.com/51412651/159134476-506b266b-eca5-47f5-ad2f-870345b8ebf2.png)

Ștergerea evenimentului:

![image](https://user-images.githubusercontent.com/51412651/159134489-074cd391-25fe-4936-a5a4-d2990aa8ebdc.png)

Pagina principală când suntem logați:

![image](https://user-images.githubusercontent.com/51412651/159134509-ee1b09ea-5646-4f56-b51e-5b14588929f3.png)

Logarea:

![image](https://user-images.githubusercontent.com/51412651/159134600-38b44955-467f-42a6-af4e-fa6d323788fc.png)


## laravel-6-crud
Agendă CRUD(Create, Read, Update and Delete) cu autentificare.

## Clonarea proiectului
1. Clonarea
```
git clone https://github.com/ckpanchal/laravel-crud.git
```

2.
```
composer install
```

3. Copierea .env.example peste .env file.
```
cp .env.example .env
```

4. Configurarea bazei de date:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=lara-crud
DB_USERNAME=root
DB_PASSWORD=
```

5.
```
php artisan migrate
```

6.
```
php artisan serve
```

7.
```
php artisan key:generate
```

8. http://127.0.0.1:8000
