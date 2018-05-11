# Python INTRO for TD Users
# Kike Ramírez
# May, 2018

# Understanding Dictioinaries

# Declaring a dictionary
Dict = {'Tim': 18,'Charlie':12,'Tiffany':22,'Robert':25}

# Print a chosen value	
print((Dict['Tiffany']))

# Copy a dictionary
DictCopy = Dict.copy()
print(DictCopy)

# Update a dictionary
Dict.update({"Sarah":9})
print(Dict)

# Delete a key
del Dict ['Charlie']
print(Dict)

# Items to retrive data
print("Students Name: %s" % list(Dict.items()))

# Checking if a key exist
Boys = {'Tim': 18,'Charlie':12,'Robert':25}

for key in list(Boys.keys()):
    if key in list(Dict.keys()):
        print(True)
    else:       
        print(False)