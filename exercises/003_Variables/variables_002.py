## Python INTRO for TD Users
## Kike Ramírez
## May, 2018

## Understanding string variables concatenation 

## CASE 1
## Declare two string variables
a = "Hola "
b = "Barcelona!"

## Concatenate it using + operator
print(a+b)

## CASE 2
## BUT! Declare to number variables
a = 99
b = 1.326584

## Not concatenation, but sum!!!
print(a+b)

## CASE 3
## BUT! Declare a number and a string variable
a = "Hola "
b = 3

## Convert to string and concatenate it using + operator
print(a+str(b))


## CASE 4
## BUT! Declare a number and a string variable
a = "0.33333333"
b = 3

## Convert to float and sum it using + operator
print(float(a)+b)

## CASE 5
## Convert to int and sum it using + operator
print(int(float(a))+b)

## CASE ERROR
## BUT! Declare a number and a string variable
a = "Hola "
b = 3

## It throws an ERROR in console
print(a+b)

