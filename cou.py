import sys
import requests
import pymysql
from bs4 import BeautifulSoup
a=sys.argv[1]
src_code=requests.get(a)
plain_text=src_code.text
soup=BeautifulSoup(plain_text, "lxml")
data=soup.findAll('ul',attrs={'class': 'cp-crs-ul'})
fdata=data[0]
data1=fdata.findAll('li',attrs={'class': 'cp-clg-p'})
st=" "
l=len(data1)
for i in range(0,l):
  st=st+"<h2 style='font-family:Markazi Text, serif;font-size:23px;'><li>"+data1[i].text+"</li>"+"<br>"


print(str(st))
