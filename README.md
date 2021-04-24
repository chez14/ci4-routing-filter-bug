## CI 4 Bug Report #4572

Context: https://github.com/codeigniter4/CodeIgniter4/issues/4572

### How to Start this Project:
- Go to `main-app/` and run `composer install` to install required dependencies
- Then copy `env` to `.env` and fill set them accordingly. <br/>
  This project doesnt require a database, you can skip the database part.
- Start the project by executing `php spark serve` on `main-app/`


### Project Description:
Routing from `extendables` have filters `pnd_auth` where it's registered on
[`Filters.php` on `extendables`](./extendables/app/Config/Filters.php), and used
on [`Routes.php` on `extendables`](./extendables/app/Config/Routes.php).

The `extendables` project are accessible on `/admin` routing group as mentioned
on [`extendables`' Routes.php](extendables/app/Config/Routes.php) file. So by
that we're expecting that routes that have filters will work as expected because
we have register them on the `Filters.php` file on the `extendables`. That being
said, the CI4 returns filter not found exceptions.

By exploration, i figure out that the `Filters.php` file from `extendables`
didn't get loaded when its needed, while accessing `/admin` route.

