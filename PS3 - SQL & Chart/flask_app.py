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

@app.route("/chart")
def chart():
   headers = {
       "Authorization": "Bearer keyWe7rvHMqQuDgB0",
   }
   params = (
       ('view', 'Grid view'),
   )

   r = requests.get('https://api.airtable.com/v0/appqs7FqLd4pLaeIU/username?api_key=keyWe7rvHMqQuDgB0',headers=headers, params=params)
   dict1 = r.json()
   dict2 = {}
   dataset = []
   name_list = []
   point_list=[]
   for i in dict1['records']:
        dict2 = i['fields']
        dataset.append(dict2)
   for item in dataset:
       name_list.append(item.get('username'))
       point_list.append(item.get('points'))
   return render_template('chart.html', entries = zip(name_list, point_list))
