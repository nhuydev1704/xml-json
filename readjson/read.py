import json
file = open('data.json','r')
data = json.load(file)

for p in data['people']:
    print("ID: %d" %(p['id']))
    print("Tên: " + p['name'])
    print("Địa chỉ: " + p['dia chi'])
    print("Tuổi: %d" %(p['age']))
    print("Email: " + p['mail'])
    print("")