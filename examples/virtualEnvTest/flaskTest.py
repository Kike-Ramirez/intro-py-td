## Python INTRO for TD Users
## Kike Ramírez
## May, 2018

## Example for testing virtualEnv. 
## Creates a Flask basic server.

from flask import Flask
app = Flask(__name__)

@app.route("/")
def hello():
    return "Hello World!"

if __name__ == "__main__":
	app.run()