import sys
import requests
import pymysql
from bs4 import BeautifulSoup
from urllib.request import Request, urlopen
a=sys.argv[1]
req = Request(a, headers={'User-Agent': 'Mozilla/5.0'})
webpage = urlopen(req).read()
soup=BeautifulSoup(webpage, "lxml")
data1=soup.find_all("div",attrs={"class":"col-md-7 col-lg-7"}) 
data2=data1[0].find_all("p") 

tt =data2[0].text
ab =''.join([i if ord(i) < 128 else ' ' for i in tt])
print(ab)

#fdata=data[0]
#data1=fdata.findAll('div',attrs={'class': 'c'})

"""
st=" "
l=len(data1)
for i in range(0,l):
  st=st+"<h2 style='font-family:Markazi Text, serif;font-size:23px;'><li>"+data1[i].text+"</li>"+"<br>"


print(str(st))
"""
