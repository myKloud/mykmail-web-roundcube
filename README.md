# Kmail

[MyKloud.net](https://mykloud.io/)

## INTRODUCTION

Secure Email service powered by Web3 technologies where messages and attachments are encrypted end-to-end and stored on the myKloud decentralized network
Integrates quickly and seamlessly with any mail client you’re currently using including Outlook and Apple Mail
And for extra security, you can use our native client on Android & Web .

## INSTALLATION

For detailed instructions on how to install Kmail on your host machine , There are two ways to install Kmail :

- Using Xampp(Apache and Mysql) :

  1- Make sure to intsall **Xampp** with **(Apache & Mysql)** build-in , Check here [Xampp](https://www.apachefriends.org/index.html)

  2- clone the repository and copy it inside htdocs folder inside /xampp dir .

  3- Open **Xampp.app** and run the Apache server with Mysql server .

  4- Open your browser and track **localhost/{repository folder name}/installer**

  5- Open your code editor and search for **$config['enable_installer']** and set it as true .

  6- Refresh the browser page , Now you can re-config your kmail , make sure that you have **kmail** database set at your mysql workbench.

  7- Go to Create config , Under **Database setup** re-set :

       - **Database Server** : localhost
       - **Database name** : kmail
       - **Database user name** : root
       - **Database password** :

  8- Make sure to re-fill usermail and password Under **SMTP Settings** as khaled.kmail.io , something.

  9- **Update Config** then Press **Continue** Then **Initialize database** .

  10- Here we Go , now Open the Browser At **localhost/repository folder name** .

  11- Have fun Using Kmail :) .

## BROWSER SUPPORT

Roundcube uses jQuery 3.x (and other libs) for its client and therefore
inherits the browser support from there. This currently includes:

- Chrome: (Current - 1) and Current
- Edge: (Current - 1) and Current
- Firefox: (Current - 1) and Current, ESR
- Internet Explorer: 11+
- Safari: (Current - 1) and Current
- Opera: Current

## LICENSE

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License (**with exceptions
for skins & plugins**) as published by the Free Software Foundation,
either version 3 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see [www.gnu.org/licenses/][gpl].

This file forms part of the Roundcube Webmail Software for which the
following exception is added: Plugins and Skins which merely make
function calls to the Roundcube Webmail Software, and for that purpose
include it by reference shall not be considered modifications of
the software.

If you wish to use this file in another project or create a modified
version that will not be part of the Roundcube Webmail Software, you
may remove the exception above and use this source code under the
original version of the license.

For more details about licensing and the exceptions for skins and plugins
see [roundcube.net/license][license]

## CONTRIBUTION

Want to help make Roundcube the best webmail solution ever?
Roundcube is open source software. Our developers and contributors all
are volunteers and we're always looking for new additions and resources.
For more information visit [roundcube.net/contribute][contrib]

## CONTACT

For bug reports or feature requests please refer to the tracking system
at [Github][githubissues] or subscribe to our mailing list.
See [roundcube.net/support][support] for details.

You're always welcome to send a message to the project admin:
hello(at)roundcube(dot)net

[iloha]: https://sourceforge.net/projects/ilohamail/
[gpl]: https://www.gnu.org/licenses/
[license]: https://roundcube.net/license
[contrib]: https://roundcube.net/contribute
[support]: https://roundcube.net/support
[githubissues]: https://github.com/roundcube/roundcubemail/issues
