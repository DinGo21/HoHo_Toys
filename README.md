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

(Insert screenshoots)

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
## :mag_right:Project documentation

### Endpoints
***
