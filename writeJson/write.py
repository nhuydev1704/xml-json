# -*- coding: utf-8 -*-
import json	

thongtin = {
	"Ten": "Nguyênx Như Ý", 
	"Language": ["Vietnames","English"],
	"suc khoe": True,
	"age": 32
}

with open('data.json','w') as json_file:
	json.dump(thongtin, json_file)