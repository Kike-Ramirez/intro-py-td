# Python INTRO for TD Users
# Kike Ramírez
# May, 2018

# Understanding string functions. 

oldstring = "I love python!"

# Replace substrings
print(oldstring.replace('Love', 'Like'))

# Uppercase
print(oldstring.upper())

# Capitalize
print(oldstring.capitalize())

# Lowercase
print(oldstring.lower())

# Join - add a "-" after every character in the string "Python"
print("-".join("Python"))

# Reverse
print(''.join(reversed(oldstring)))

# Split strings
print(oldstring.split(' '))
print(oldstring.split('o'))

# In Python, Strings are immutable.
oldstring.replace("Love","Hate")
print(oldstring)

newstring = oldstring.replace("Love","Hate")
print(newstring)