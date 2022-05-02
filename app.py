from flask import Flask, render_template, request, url_for, redirect, jsonify
from flask_sqlalchemy import SQLAlchemy
from flask_marshmallow import Marshmallow

from datetime import datetime

app = Flask(__name__)
app.config['SQLALCHEMY_DATABASE_URI'] = 'mysql+pymysql://b4246863b9ebfa:dbed7aa3@us-cdbr-east-05.cleardb.net/heroku_cab447469f02115'
app.config['SQLALCHEMY_TRACK_MODIFICATIONS'] = False
db = SQLAlchemy(app)
ma = Marshmallow(app)


####MODELS
class Character(db.Model):
	id = db.Column(db.Integer, primary_key=True)
	name = db.Column(db.String(65), nullable=False)
	age = db.Column(db.Integer, nullable=False)
	nationality = db.Column(db.String(5), nullable=False)
	history = db.Column(db.Text, nullable=False)
	feats = db.Column(db.String(10), nullable=False)
	skills = db.Column(db.String(100), nullable=False)
	skills_lvl = db.Column(db.String(100), nullable=False)
	base_energy = db.Column(db.Integer, nullable=False)
	sp = db.Column(db.Integer, nullable=False)
	money = db.Column(db.Integer, nullable=False)
	items = db.Column(db.Text, nullable=False)

	date_created = db.Column(db.DateTime, default=datetime.utcnow)

	def __repr__(self):
		return '<character %r>' % self.id

class Skill(db.Model):
	id = db.Column(db.Integer, primary_key=True)
	title = db.Column(db.String(65))
	category = db.Column(db.String(150))
	level_1 = db.Column(db.Text)
	level_2 = db.Column(db.Text)
	level_3 = db.Column(db.Text)
	description = db.Column(db.Text)

	def __repr__(self):
		return '<skill %r>' % self.id

class Nation(db.Model):
	id = db.Column(db.Integer, primary_key=True)
	title = db.Column(db.String(65))
	flavor = db.Column(db.Text)
	flag = db.Column(db.String(5))
	category = db.Column(db.String(150))
	first_names = db.Column(db.Text)
	last_names = db.Column(db.Text)

	def __repr__(self):
		return '<nation %r>' % self.id

class NationSchema(ma.SQLAlchemyAutoSchema):
	class Meta:
		model = Nation

nations_schema = NationSchema(many=True)


class Feats(db.Model):
	id = db.Column(db.Integer, primary_key=True)
	title = db.Column(db.String(65))
	flavor = db.Column(db.Text)

	def __repr__(self):
		return '<feat %r>' % self.id


class Ethnicity(db.Model):
	id = db.Column(db.Integer, primary_key=True)
	title = db.Column(db.String(65))
	flavor = db.Column(db.Text)

	def __repr__(self):
		return '<ethnicity %r>' % self.id

###ROUTES
@app.route('/')
def index():
	## enviar como JSON .. n lembro pq -_- :
	nations = nations_schema.dump(Nation.query.all())
	nations_cat = Nation.query.group_by(Nation.category).all()
	##nations = Nation.query.all()

	skills_cat = Skill.query.group_by(Skill.category).all()
	skills = Skill.query.all()

	feats = Feats.query.all()
	ethnicities = Ethnicity.query.all()
	return render_template("create_char.html", nations=nations, nations_cat=nations_cat, skills=skills, skills_cat=skills_cat, feats=feats, ethnicities=ethnicities)

@app.route('/characters')
def characters():
	characters = Character.query.order_by(Character.id)
	return render_template("characters.html", characters=characters)

@app.route('/delete_char/<int:id>')
def dalete_char(id):
	delete_char = Character.query.get_or_404(id)
	try:
		db.session.delete(delete_char)
		db.session.commit()
		return "delete"
	except:
		return "error"

@app.route('/update_char/<int:id>', methods=["POST"])
def update_char(id):
	if request.method == "POST":
		update_char = Character.query.get_or_404(id)
		request_data = request.json

		if request_data:
			if 'name' in request_data:
				update_char.name = request_data['name']

			if 'age' in request_data:
				update_char.age = request_data['age']
				
			if 'nationality' in request_data:
				update_char.nationality = request_data['nationality']

				
			if 'feats' in request_data:
				update_char.feats = request_data['feats']
				
			if 'skills' in request_data:
				update_char.skills = request_data['skills']
				
			if 'skills_lvl' in request_data:
				update_char.skills_lvl = request_data['skills_lvl']
				
				
			if 'base_energy' in request_data:
				update_char.base_energy = request_data['base_energy']
				
			if 'sp' in request_data:
				update_char.sp = request_data['sp']
				
			if 'money' in request_data:
				update_char.money = request_data['money']
				

			if 'items' in request_data:
				update_char.items = request_data['items']

		try:
			db.session.commit()
			return "ok"
		except:
			return "error"

@app.route('/create_char', methods=["POST"])
def create_char():
	if request.method == "POST":
		request_data = request.json

		char_name = request_data['name']
		char_age = request_data['age']
		char_nat = request_data['nationality']

		char_feats = request_data['feats']
		char_skills = request_data['skills']
		char_skills_lvl = request_data['skills_lvl']

		char_base_energy = request_data['base_energy']
		char_sp = request_data['sp']
		char_money = request_data['money']

		char_history = request_data['history']
		char_items = request_data['items']

		new_char = Character(name=char_name, 
			age=char_age, nationality=char_nat, feats=char_feats, 
			skills=char_skills, skills_lvl=char_skills_lvl, 
			base_energy=char_base_energy, sp=char_sp, money=char_money,
			items=char_items, history=char_history)

		try:
			db.session.add(new_char)
			db.session.commit()
			return char_name
		except:
			return "error"