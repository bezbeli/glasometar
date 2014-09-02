# -*- coding: utf-8 -*-

import csv
import json

i = 0
questions = []
with open('/Applications/AMPPS/www/zastone.ba/glasometar.ba/2014/backend/source/questions.tsv','r') as f:
  csvreader = csv.reader(f,delimiter="\t")
  for row in csvreader:
    if i == 0:
      nothing = 0
    else:
      if row[0].strip() != '':
        item = {
          'id': row[0].strip(),
          'name': row[1].strip(),
          'question': row[2].strip(),
          'description': row[3].strip(),
          'order': float(row[0].strip())
        }
        questions.append(item);
        
    i = i + 1
 
questions = sorted(questions, key=lambda x:x['order'])
print questions

#save file
with open('/Applications/AMPPS/www/zastone.ba/glasometar.ba/2014/questions.json', 'w') as outfile:
  json.dump(questions, outfile)
outfile.close()
