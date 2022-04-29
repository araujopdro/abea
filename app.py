import logging
from flask import Flask, render_template, request, redirect
from flask_sqlalchemy import SQLAlchemy
from datetime import datetime

app = Flask(__name__)
app.config['SQLALCHEMY_DATABASE_URI'] = 'sqlite:///characters.db'
db = SQLAlchemy(app)

class Characters(db.Model):
	id = db.Column(db.Integer, primary_key=True)
	name = db.Column(db.String(65), nullable=False)
	date_created = db.Column(db.DateTime, default=datetime.utcnow)

	def __pepr__(self):
		return '<character %r>' % self.id

@app.route('/')
def index():

	return render_template("index.html")

@app.route('/characters')
def characters():
	characters = Characters.query.order_by(Characters.id)
	return render_template("characters.html", characters=characters)

@app.route('/create_char', methods=["POST"])
def create_char():
	if request.method == "POST":
		char_name = request.form['name']
		logging.info(char_name)
		new_char = Characters(name=char_name)


		try:
			db.session.add(new_char)
			db.session.commit()
			return char_name
		except:
			return "error"