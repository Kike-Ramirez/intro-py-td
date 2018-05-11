# Python INTRO for TD Users
# Kike Ramirez
# May, 2018

# Understanding Functions: Parameters & Return Values

# define a function with return values & Parameters
def calculateArea(a, b):
	return a*b


# define main function
def main():
	x = input("Enter width in meters:")
	y = input("Enter height in meters:")
	
	area = calculateArea(x, y)
	print("Area in m2: " + str(area))



# set main
if __name__== "__main__":
	main()
