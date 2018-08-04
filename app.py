# -*- coding: utf-8 -*-
"""
Created on Mon Jul 23 12:30:46 2018

@author: Rajesh
"""
from flask import Flask, flash, redirect, render_template, request, session, abort
import os
cwd = os.getcwd()


app = Flask(__name__)
 
@app.route("/")
def index():
    return render_template(
        'test.html')
 
@app.route("/hello")
def hello():
    return render_template(
        'cards.html')
 
if __name__ == "__main__":
    app.run()