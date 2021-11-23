# Kmail

[mykloud.io](https://mykloud.io/)

## INTRODUCTION

Secure Email service powered by Web3 technologies where messages and attachments are encrypted end-to-end and stored on the myKloud decentralized network
Integrates quickly and seamlessly with any mail client you’re currently using including Outlook and Apple Mail
And for extra security, you can use our native client on Android & Web .

## INSTALLATION

For detailed instructions on how to install Kmail on your host machine , There are two ways to install Kmail :

### Using Xampp(Apache and Mysql) :

1- Make sure to intsall **Xampp** with **(Apache & Mysql)** build-in , Check here [Xampp](https://www.apachefriends.org/index.html)

2- Clone the Repository and copy it inside **htdocs** Folder at C:\xampp .

3- Open **Xampp.app** and run the Apache server with Mysql server .

4- Open your browser and track **localhost/{repository folder name}/installer**

5- Open your code editor inside Repository Folder and search for **$config['enable_installer']** and set it as **true** .

6- Refresh the browser page , Now you can re-config your kmail , make sure that you have **kmail** database set at your mysql workbench(host).

7- Go to Create config , Under **Database setup** re-set :

       - **Database Server** : localhost
       - **Database name** : kmail
       - **Database user name** : root
       - **Database password** :

8- Make sure to re-fill usermail and password Under **SMTP Settings** :

    - domain: mail.mykmail.io
    - username: [email]
    - password: [password]
    - SMTP: 465
    - IMAP: 993
    - POP3: 995

9- **Update Config** then Press **Continue** Then **Initialize database** .

10- Here we Go , now Open the Browser At **localhost/"repository folder name"** .

11- Have fun Using Kmail :) .

### Using Docker :

1- Make sure to intsall **Docker** , Check here [Docker](https://docs.docker.com/get-docker/)

2- Clone the Repository .

3- Inside the **Repository** make sure that **Dockfile** and **docker-compose.yml** are there and open bash inside it .

4- Run this **command** :
**docker-compose up -d**

5- When finish , Open your browser at localhost:80 and check if its work .

6- If its Not working , We need to setup the database , Open the Browser at localhost:8080 , it will open Admier login :

       - **Server** : db
       - **Username** : root
       - **password** : example

7- After login , make sure that there is **kmail** database .

8- Open your browser at **localhost/installer**

9- Open your code editor inside Repository Folder and search for **$config['enable_installer']** and set it as **true** .

10- Refresh the browser page , Now you can re-config your kmail .

11- Go to Create config , Under **Database setup** re-set :

       - **Database Server** : db
       - **Database name** : kmail
       - **Database user name** : root
       - **Database password** : example

12- Make sure to re-fill usermail and password Under **SMTP Settings** :

    - domain: mail.mykmail.io
    - username: [email]
    - password: [password]
    - SMTP: 465
    - IMAP: 993
    - POP3: 995

13- **Update Config** then Press **Continue** Then **Initialize database** .

14- Here we Go , now Open the Browser At **localhost/** .

15- Have fun Using Kmail :) .
