import sys
import requests
import pymysql
from bs4 import BeautifulSoup
reload(sys)
sys.setdefaultencoding('utf8')
a=sys.argv[1]
src_code=requests.get(a)
plain_text=src_code.text
soup=BeautifulSoup(plain_text, "lxml")
data=soup.findAll('ul',attrs={'class': 'cp-crs-ul'})
fdata=data[5]
data1=fdata.findAll('li',attrs={'class': 'cp-clg-p'})
st=" "
l=len(data1)
for i in range(0,l):
  st=st+"<li>"+data1[i].text+"</li>"+"<br>"

u=str(st, "utf-8")
print(st)
