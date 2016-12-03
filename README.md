# CakePHP Bookmarker Sample Application

This is a sample application that is the result of following
the [bookmarker tutorial](http://book.cakephp.org/3.0/en/quickstart.html).

# Installation & Setup

1. Download [Composer](http://getcomposer.org/doc/00-intro.md) or update `composer self-update`.
2. Download this repository - `git clone git@github.com:cakephp/bookmarker-tutorial`
3. Install dependencies with composer - `composer install`.
4. Add the schema to a new database.
5. Configure your database credentials in ``app.php``. Make sure to use the same database name as in step 4.
6. Start the server `bin/cake server -p 8765`.
7. Go to http://localhost:8765 in your browser.

# Using Vagrant

If you don't have a local development environment setup, you can use Vagrant to
create one. After installing Vagrant run:

```
vagrant up
```

This will download a new vagrant image, and run ansible to provision the
bookmarking application. Once ansible is complete, you should have a working
application available at http://192.168.33.99 .

### Logging In

You can login to the application at http://192.168.33.99/users/login. The
username is `user@example.com` and the password is `password`.

## Before you run Ansible a second time

After the initial provisioning run if you want to re-run ansible, make sure to
remove `mysql.dump` in `ansible/vars/all.yml` or ansible will reset your
database state to whats in the SQL dump file.

