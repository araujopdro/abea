from flask import Flask
from flask_restx import Api, Resource

from src.server.instance import server

app, api = server.app, server.api

chars_db = [
	{'id': 1, 'name': 'Pedro'},
	{'id': 2, 'name': 'Camila'},
	{'id': 3, 'name': 'Heitor'},
	{'id': 4, 'name': 'Renan'},
]


@api.route('/characters')
class AllCharacters(Resource):
	def get(self, ):
		return

	def post(self, ):
		response = api.payload
		chars_db.append(response)
		return response, 200