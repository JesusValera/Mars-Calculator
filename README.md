# MSD & MTC calculator

A microservice that receives the time on Earth in UTC as an input
and return two values: the Mars Sol Date (MSD), and the Martian Coordinated Time (MTC).

### Usage

In order to run the application, you need to run the PHP file from `example/cli.php`.
If you don't provide any argument, the datetime will be from "now", else, you MUST specify it in [Atomic system](https://www.php.net/manual/en/class.datetimeinterface.php#datetime.constants.atom): (`Y-m-d\TH:i:sP`).

### Examples

```php
php example/cli.php
> {"mars_sol_date":52413.096631128385,"martian_coordinated_time":2.319147081230767}

php example/cli.php 2005-08-15T15:52:01+00:00
> {"mars_sol_date":46789.69107901298,"martian_coordinated_time":16.58589631144423}
```
