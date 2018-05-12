# Python INTRO for TD Users
# Kike Ramirez
# May, 2018

# Accessing Internet Data

# Accessing Internet data example
import urllib.request

# open a connection to a URL using urllib
webUrl  = urlopen('https://www.youtube.com/user/vjspain')

#get the result code and print it
print ("result code: " + str(webUrl.getcode()))

# read the data from the URL and print it
data = webUrl.read()
print (data)