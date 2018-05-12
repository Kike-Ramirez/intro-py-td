# Python INTRO for TD Users
# Kike Ramirez
# May, 2018

# Understanding OOP

# Example Classes Constructor
class User:
    name = ""

    def __init__(self, name):
        self.name = name

    def sayHello(self):
        print("Welcome to Guru99, " + self.name)

User1 = User("Alex")
User1.sayHello()