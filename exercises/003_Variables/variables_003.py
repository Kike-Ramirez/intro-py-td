## Python INTRO for TD Users
## Kike Ramírez
## May, 2018

## Understanding LOCAL & GLOBAL variables 

# Declare a variable and initialize it
f = 101

# Global vs. local variables in functions
def someFunction():
# global f
    f = 'I am learning Python'
    print(f)

someFunction()
print(f)