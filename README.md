# 12press

![12Press](http://tonybaldwin.me/images/12press.20150704.png)

Free/Open Source meeting and event schedule website with php/mysql for 12 step organizations, etc.

<<<<<<< HEAD
This is now the GNHANA Branch, with customizations for the local area of NA, the master will shortly be made generic with such customizations removed.

Use the master branch to clone for YOUR organization or local area.

Live sample: [Greater New Haven Area - Narcotics Anonymous](http://gnhana.info)
=======
**What's in this repo at this moment is a complete copy of the platform/software as created for my local NA area,**
however, I will be shortly removing all local customizations and make this master branch generic for public consumption;

I just started building this a week ago...getting up to speed.
>>>>>>> 302085b27f32b6794a1d6d7717ebac8f4772c242

*Still, YOU can clone it now, and completely alter the design and data for YOUR area, fellowship, organization, etc.* 

_The backend admin stuff needs a lot of work, yet, but if you can manage a DB via CLI, no worries, the rest (i.e. the pubilc front-end) of the platform works fine._

You will need a server running a [LAMP](https://en.wikipedia.org/wiki/LAMP_(software_bundle)) stack (Linux Apache Mysql PHP) to use this software.

Yes, yes, you can likely run Percona and I know [MariaDB](http://mariadb.org) works, because that's what I'm using.

Live sample: [Greater New Haven Area - Narcotics Anonymous](http://gnhana.info)


## TODO  

*This stuff needs done:*

1. ~~meetings by day for each day of the week~~ DONE!
2. ~~meetings by town~~ DONE!
3. ~~language row in DB for multilingual areas~~ DONE!
4. ~~add NA readings~~ DONE!
5 get my area customizations out of origin/master
6. make default timezone use configurable, as well as site and page titles (like instead of "12press- something", "GNHANA - something".
7. DEBUG EDIT/ADD MEETINGS/EVENTS IN ADMIN (admin stuff needs lotso work, I entered all our area meetings/events by hand in the cli here.)
8. write some proper documentation.
9. write a proper installation script that will secure /admin/ with .htpass, or
10. implement user auth/security by other means for /admin/ (in the DB?)
11. make a branch for my local area (ignore admin/config.php this time. do NOT publish DB credentials - DOH!).



Released according to the terms of the [GNU/Affero Public License](http://www.gnu.org/licenses/agpl-3.0.en.html).


