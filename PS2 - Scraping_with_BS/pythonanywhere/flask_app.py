from flask import Flask, render_template, json, request, redirect, session
from flask import Markup
import requests

app = Flask(__name__)
app.config["DEBUG"] = False

@app.route("/")
def index():
    return render_template('index.html')

@app.route("/table")
def table():
    r = requests.get('https://api.airtable.com/v0/appQJcrVlxflyv26z/RedditNews?api_key=keyWe7rvHMqQuDgB0')
    dict = r.json()
    dataset = []
    for i in dict['records']:
         dict = i['fields']
         dataset.append(dict)

    return render_template('table.html', entries=dataset)
