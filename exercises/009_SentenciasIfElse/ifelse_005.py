# Python INTRO for TD Users
# Kike Ramirez
# May, 2018

# Understanding IF - ELSE

# Switch statement

# define main function
def SwitchExample(argument):
    switcher = {
        0: " This is Case Zero ",
        1: " This is Case One ",
        2: " This is Case Two ",
    }
    return switcher.get(argument, "nothing")


if __name__ == "__main__":
    argument = 1
    print (SwitchExample(argument))