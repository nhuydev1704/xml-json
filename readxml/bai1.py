import xml.etree.ElementTree as read
tree = read.ElementTree(file = 'bai1.xml')
root = tree.getroot()

# all items data
print('Expertise Data:')
for elem in root:
    # i = 0
    
    # print('********************book********************** \n')
    # print("")

    # for subelem in elem:

    #     print(subelem.text)
    if(elem.tag == 'book'):
        print('Ma sach: ' + elem.get('id'))
        for i in elem:
            print(i.text)
            print('*****************')

        