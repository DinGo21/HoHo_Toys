# 🎀 HoHo Toys :teddy_bear:

## :bulb:Project proposal

**Santa Claus** asks us to create a web that helps him to manage his toy manufacturing and gift list for each child.

### Requirements:

- Min **70%** of **test coverage**.
- Well-configured **project** and **user stories**.
- **Elf routes** must contain the word *elves*.
- **Santa routes** must contain *Santa*.
- Creating a **Welcome page** to the toy factory.
  
***
### :gift: Toy's table

This is the table for Santa's **Elves**. It should:

- Display all **manufactured toys** *(Blade and Json)*.
- Allow to **Insert, modify or delete a toy** *(Endpoints)*.
- Let them watch the **show** of a toy *(Endpoints and Blade)*.

***
### 👶Children's table

This is the table for **Santa Claus**. It should:

- Display all **children** *(Blade and Json)*.
- Allow to **insert, modify or delete a child** *(Endpoints)*.
- Let him watch the **show** of children *(Endpoints and Blade)*.
  
***
### 👼PIVOT table (Santa's list) 

- **Naughty** children will only recieve **1 gift (Coal)**. There are three different types of coal.
- Good children will receive **2 random gifts** from the list of toys **(age appropriate)** and those gifts can **NOT** be **repeated** to the same child.
- **+18** gifts only could be recieved by **teens**. They will recieve a random **travel** to these places: **DisneyLand, Warner or Isla Mágica**

***
## :eye_speech_bubble: Project overview

### 🎀 Welcome view

![image](https://github.com/user-attachments/assets/25bade8e-a564-4b17-be0b-5c3bd0c1bbe6)


### :gift: Toy's view

![image](https://github.com/user-attachments/assets/80e208df-8ea8-4d79-902c-337caba4838c)


### 👶Children's view

![image](https://github.com/user-attachments/assets/b9eb33b9-490b-4d5d-8012-552031739bd8)


### 👼PIVOT table (Santa's list) 

![image](https://github.com/user-attachments/assets/04d6006c-0ef9-41b8-aa47-833e48036405)


***
### Project Diagrams (BBDD)

![BBDD Diagram](https://github.com/user-attachments/assets/38f857bb-2a0f-4ad9-a1a5-e4b7021d8096)

***
## :scroll: Installation

1.) **Clone** this repository:
```
https://github.com/DinGo21/HoHo_Toys
```

***
2.) Install **Composer** and **NPM**
```
composer install
```
```
npm install
```

***
3.) **Create** a *.env* file copying everything inside the existing file *.env.example* and **modify** the following **lines**:
* DB_CONNECTION=mysql
* DB_DATABASE=jobSearch

***
4.) Create a **database** in **MySQL**

***
5.) Now go to the **VSC terminal** and put the following command:
```
php artisan migrate:fresh --seed
```
This command will **generate** all the **tables**.

***
6.) Open another terminal in **VSC** and put the following command
```
npm run dev
```

***
7.) Open **another terminal** and **run** the **server** with this command:
```
php artisan serve
```
You'll see an **url** that is going to take you to a website.

>[!IMPORTANT]
>Be sure that your running npm and the server in **DIFFERENT** terminals, **DON'T** close these two terminals and **DON'T** use other commands in these two terminals.

***
### :floppy_disk: Installation requirements
Before you start to read how to install the project you'll need these requirements:
>[!NOTE]
>If you can't install xampp, look for any other local server that supports **MySQL** and **PHP**
***

:black_circle: **XAMPP**

:black_circle: Install **Composer**

:black_circle: Install **NPM** in **Node.js**

:black_circle: **Xdebug** (for the tests coverage)

:black_circle: **Postman**

***
## :mag_right:Documentation

### Endpoints
***
#### :gift:Toy's table
✏️ Create (POST)
`http://127.0.0.1:8000/api/elf/store`

📖 Read (GET)
`http://127.0.0.1:8000/api/elf`

💱 Update (PUT)
`http://127.0.0.1:8000/api/elf/update/{id}`

❌ Destroy (DELETE)
`http://127.0.0.1:8000/api/elf/destroy/{id}`

👁️ Show (GET)
`http://127.0.0.1:8000/api/elf/show/{id}`
***
#### 👶Children's table
#### Get kids
✏️ Create (POST)
`http://127.0.0.1:8000/api/santa/store`

📖 Read (GET)
`http://127.0.0.1:8000/api/santa`

💱 Update (PUT)
`http://127.0.0.1:8000/api/santa/update/{id}`

❌ Destroy (DELETE)
`http://127.0.0.1:8000/api/santa/destroy/{id}`

👁️ Show (GET)
`http://127.0.0.1:8000/api/santa/show{id}`

***
#### 👼Santa's list
`http://127.0.0.1:8000/api/santa/list`

***
## :white_check_mark: Tests

> [!IMPORTANT]
> It's important to test the project so we can check if it works correctly and to do that use this command in the **VSC** terminal:

```
php artisan test --coverage
```
![JOJO test](https://github.com/user-attachments/assets/d0360887-593a-4941-b1eb-45555340a147)

***
### Coverage

To see the **coverage** you can use this command at the **VSC** terminal:
```
php artisan test --coverage-html=coverage-report
```
> [!IMPORTANT]
> Everytime that you do **new tests** you need to put the command above in the **VSC** terminal, so it can **update** your coverage.
This will add a **folder** called *coverage-report*, go to the folder, go to the *index.html*, and then **open with live server**. After that you should see this page:

![coverage-report](https://github.com/user-attachments/assets/338277fa-b18d-491a-9701-4a703bff4a39)

***

***
## :bust_in_silhouette: Authors 2nd Sprint.
- **Valeria Dobado**: https://github.com/ugotchriscoded
- **Rebeca Bernal**: https://github.com/rebecabernal
- **Talena Barbosa**: https://github.com/talenaa
- **Rodrigo Lastra**: https://github.com/rodrigoo1604
- **Pepe Gavilán**: https://github.com/sr-calcetines
- **Diego Santamaría**: https://github.com/DinGo21

***
## :bust_in_silhouette: Authors 1st Sprint.
- **Alejandro Campos**: https://github.com/Camposx
- **Ariana Martín**: https://github.com/ArianaMartinMartinez
- **Inma Gonzalez**: https://github.com/Inma0711
- **Jaz Walters**: https://github.com/Jaz356
- **Alberto Hernandez**: https://github.com/TOKIO-V2
- **Angie Helen Sánchez**: https://github.com/angiehelensanchez
  
***
## Languages and tools
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='PHP' src='https://img.shields.io/badge/PHP-100000?style=for-the-badge&logo=PHP&logoColor=white&labelColor=896696&color=896696'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='html5' src='https://img.shields.io/badge/html-100000?style=for-the-badge&logo=html5&logoColor=white&labelColor=FF8400&color=FF8400'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='css3' src='https://img.shields.io/badge/css-100000?style=for-the-badge&logo=css3&logoColor=white&labelColor=079FB0&color=079FB0'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='mysql' src='https://img.shields.io/badge/mysql-100000?style=for-the-badge&logo=mysql&logoColor=white&labelColor=1C662F&color=1C662F'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='git' src='https://img.shields.io/badge/git-100000?style=for-the-badge&logo=git&logoColor=white&labelColor=FF0000&color=FF0000'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='github' src='https://img.shields.io/badge/github-100000?style=for-the-badge&logo=github&logoColor=white&labelColor=000000&color=000000'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='canva' src='https://img.shields.io/badge/canva-100000?style=for-the-badge&logo=canva&logoColor=white&labelColor=A700FB&color=A700FB'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='xampp' src='https://img.shields.io/badge/xampp-100000?style=for-the-badge&logo=xampp&logoColor=white&labelColor=FF8800&color=FF8800'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='postman' src='https://img.shields.io/badge/postman-100000?style=for-the-badge&logo=postman&logoColor=white&labelColor=FF0000&color=FF0000'/></a>
***

## Thanks for reading!

**Merry Christmas**. **HO HO HO!** 🎅
***
