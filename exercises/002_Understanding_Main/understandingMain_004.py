## Python INTRO for TD Users
## Kike Ramírez
## May, 2018

## Understanding python structure & main. 

## This is a comment. Use it, please, if you want to reuse your code!!!!

## This is a module import. 
import time

## This is a variable definition
loopNumber = 0

## This is a function definition.
def setup():
	print("This is setup code. Only executed once.")

## This is a function definition also.
def loop():
	## Using global variable, instead of local ones.
	global loopNumber

	## This is a try/except. Used to catch errors, exceptions, etc.
	try:
		## This is a loop. Executes its code in loop mode.
	    while True:
	    	print("This is loop code, iteration: " + str(loopNumber) + ". Press <CRL+C> to exit.")
	    	loopNumber += 1
	    	time.sleep(0.2)

	# It catches interruptions from keyboard and leaves the function.
	except KeyboardInterrupt:
	    print('Exit! Bye, bye...')

## This is main function. It sets the structure of the script.
def main():
	setup()
	loop()

## This sets the main function of the script. "Entering point".
if __name__== "__main__":
  main()

