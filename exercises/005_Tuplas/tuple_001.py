# Python INTRO for TD Users
# Kike Ramírez
# May, 2018

# Understanding Tuples

# Creating a tuple with person information -> (name, surname, birth year, favorite movie and year, profession, birthplace)
tup1 = ('Lionel', 'Messi','1983','Terminator 1995', 'Football Player','Rosario');
print(tup1)
print(tup1[0])

# Creating a tuple with numbers
tup2 = (1,2,3,4,5,6,7);
print(tup2[1:4])

## Packing & Unpacking
NameSurnameBirth = tup1[0:3]    # tuple packing
(name, surname, birth) = NameSurnameBirth    # tuple unpacking

print(name)
print(surname)
print(birth)