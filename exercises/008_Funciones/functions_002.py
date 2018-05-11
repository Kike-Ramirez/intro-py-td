# Python INTRO for TD Users
# Kike Ramirez
# May, 2018

# Understanding Functions: Tabs & Spaces

# define a function
def func1():
	print ("Aprendiendo funciones en Python")
	print ("Aun sigo dentro de func1()")
print("Linea no indentada en func1")

# define main function
def main():
	print("Dentro de main")
	func1()
print("Linea no indentada en main")

# set main order
if __name__== "__main__":
	main()
	print("Fuera de main()")
	print("Ultima linea de codigo del script")
print("Linea no indentada final")
