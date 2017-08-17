#!/usr/bin/env python

import sqlite3

conn=sqlite3.connect('templogtest.db')
curs=conn.cursor()
admin = rows->querySingle("SELECT time, date FROM temps")
var_dump(admin)
print row
conn.close()


