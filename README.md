#Validator


This lib can validate string, int, array, boolean, and DateTime.

##Documentation

###IntegerValidator
The IntegerValidator class provide some method for check integer in different case.

* equal : Check if two integer are equal
* superior : Check if an integer is higher than an other.
* inferior : Check if an integer is lower than an other.
* between : Check if an integer is between two integer.
* negative : Check if an integer is negative.
* positive : Check if an integer is positive.

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

* isEmpty : Check if a boolean is true
* compare : Compare an array's length in diffirente case (<, >, <=, =>, ==)
* numberElementsBetween : Compare if an array's length is between two integer (lentgh)
* keyExist : Check if an key exists in a specific array
* valueExist : Check if an value exists in a specific array

####Exemple
```php
<?php

require __DIR__.'/vendor/autoload.php';
// Test if the array length is equal to 3
echo OKLM\Validator\ArrayValidator::compare($array, OKLM\Validator\ArrayValidator::LENGTH_EQUAL, 7);

```

###DateValidator
The DateValidator class provide some method for check array in different case.

* isMajor : Check if the date is major (over 18 years)
* isPassed : Check if the date is passed
* isFuture : Check if the date is in the futur
* isYear : Check if the date's year correspond to a specific year
* isMonth : Check if the date's month correspond to a specific month
* isDay : Check if the date's day correspond to a specific day

####Exemple
```php
<?php

require __DIR__.'/vendor/autoload.php';
echoOKLM\Validator\DateValidator::isMajor($date);

```