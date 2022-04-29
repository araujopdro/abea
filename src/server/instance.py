from flask import Flask
from flask_restx import Api

class Server():
	def __init__(self, ):
		self.app = Flask(__name__)
		self.api = Api(self.app,
			version='0.1',
			title='Simple API',
			description='api simples',
			doc='/docs'
		)

	def run(self, ):
		self.app.run(
			debug=True
		)

server = Server()