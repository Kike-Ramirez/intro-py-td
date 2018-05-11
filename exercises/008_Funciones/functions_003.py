# Python INTRO for TD Users
# Kike Ramirez
# May, 2018

# Understanding Functions: Parameters

# define a function with parameters
def sayWelcome(name_):
	print("Bienvenido Mr. " + name_)


# define main function
def main():
	sayWelcome("Marshall")
	sayWelcome("Ramirez")
	sayWelcome("Torre")


# set main
if __name__== "__main__":
	main()