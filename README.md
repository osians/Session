# Session
A Simple PHP Session Manager

This is a simple session management class in PHP. It implements some security features and magical methods to make it easier to use.

## Getting started

Feel free to download and test it. Use the `test.php` or this readme file as reference. 

### Getting and initializing Session Manager 
To access and use Session from any PHP file, just include and make a instance of it by using the following code:

```php
require_once __DIR__ . '/SessionInterface.php';
require_once __DIR__ . '/Session.php';

$session = new Session(600);
```
The parameeter 600 means 10 minutes in seconds (10 * 60). This is the amount of time that a session can be without activity before it is automatically destroyed by the system.

### Setting session data
You can use both the magic method or the set() method to store a new value in the session.

```php
$session->set('email', 'wsantana@mt4.com');
$session->name = 'Wanderlei Santana';

```

### Getting session data
As the method above, you can use the PHP magic method or the get method to retrieve data from the session.

```php
echo $session->get('email');
echo "<hr>";
echo $session->name;

```

### Destroying Session
You can destroy all data stored in a session by using the code bellow.
```php
$session->destroy();
```
