#Validator


This lib can validate string, int, array, boolean, and DateTime.

##Documentation

###IntegerValidator
The IntegerValidator class provide some method for check integer in different case.

* equal : Return true if two Integers are equals.
* superior : Return true if the first integer in superior than the second.
* inferior : Return true if the first integer in inferior than the second.
* between : Return true if the variable is between two integers.
* positive : Return true if the Integer is superior than 0.
* negative : Return true if the Integer is inferior than 0.

####Exemple
```php
<?php

require __DIR__.'/vendor/autoload.php';
echo OKLM\Validator\ArrayValidator::equal(1, 2);

```

###StringValidator
The StringValidator class provide some method for check string in different case.

* lengthEqual : Check if a string are equal to a length
* lengthSuperior : Check if an string is higher than an length.
* lengthInferior : Check if an string is lower than an length.
* lengthBetween : Check if an string is between two integer (length).
* hasWhiteSpaceBeforeEnd : Check if a string starts or ends with whitespaces.
* hasWhiteSpace : Check if a string contain whitespaces.

####Exemple
```php
<?php

require __DIR__.'/vendor/autoload.php';
echo OKLM\Validator\StringValidator::lengthEqual($string, 10);

```

###BooleanValidator
The BooleanValidator class provide some method for check boolean in different case.

* isTrue : Check if a boolean is true
* isFalse : Check if an strbooleaning is false;

####Exemple
```php
<?php

require __DIR__.'/vendor/autoload.php';
echo OKLM\Validator\BooleanValidator::isTrue($boolean);

```

###ArrayValidator
The ArrayValidator class provide some method for check array in different case.

* isEmpty : Return true if the array is empty.
* comparator : Compare the array length (<,>,<=,>=,=).
* elementsBetween : Return true if the array lenght is between two integers.
* keyExists : Return true if the searched key is in the array.
* valueExists : Return true if the searched value is in the array.

####Exemple
```php
<?php

require __DIR__.'/vendor/autoload.php';
// Test if the array length is equal to 3
echo OKLM\Validator\ArrayValidator::compare($array, OKLM\Validator\ArrayValidator::LENGTH_EQUAL, 7);

```

###DateValidator
The DateValidator class provide some method for check array in different case.

* isMajor : Return true if the date in parameter has over 18 years old.
* isPassed : Return true if the date in parameter is passed of the current date time.
* isFuture : Return true if the date in parameter is not passed yet.
* isYear : Return true if the date in parameter is in the year in second parameter.
* isMonth : Return true if the date in parameter is in the month in second parameter.
* isDay : Return true if the date in parameter is in the day in second parameter.

####Exemple
```php
<?php

require __DIR__.'/vendor/autoload.php';
echoOKLM\Validator\DateValidator::isMajor($date);

```