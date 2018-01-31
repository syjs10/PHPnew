import requests
import pytesseract
from PIL import Image
from bs4 import BeautifulSoup
import json
import sys

# reload(sys)
# sys.setdefaultencoding('utf-8')

session = requests.session()
valcode = requests.get('http://202.199.96.30/ACTIONVALIDATERANDOMPICTURE.APPPROCESS')
f = open('./valcode.png', 'wb')
# 将response的二进制内容写入到文件中
f.write(valcode.content)
# 关闭文件流对象
f.close()
image = Image.open('valcode.png')
vcode = pytesseract.image_to_string(image)
cookie = requests.utils.dict_from_cookiejar(valcode.cookies)
data = {
    "mode":4,
    "WebUserNO":sys.argv[1],
    "Password":sys.argv[2],
    "Agnomen":vcode
}
header = {
    "Accept":"text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8",
    "Accept-Encoding":"gzip, deflate",
    "Accept-Language":"zh-CN,zh;q=0.9",
    "Connection":"keep-alive",
    "Host":"202.199.96.30",
    "Referer":"http://202.199.96.30/index.jsp",
    "User-Agent":"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.62 Safari/537.36"
}
checkUrl = 'http://202.199.96.30/ACTIONLOGON.APPPROCESS'
resp = session.post(checkUrl,  headers = header, cookies = cookie, data=data)
data = {
    "mode":2,
    "YearTermNO":"1"+sys.argv[3]
}
resp = session.post("http://202.199.96.30/ACTIONQUERYSTUDENTSCORE.APPPROCESS", cookies = cookie, data=data)
# print(resp.text)
soup = BeautifulSoup(resp.text, "lxml")
table = soup.find_all('table', class_="tableborder")[0]
tr = table.find_all('tr')
res = {}
for x in tr:
    td = x.find_all('td')
    if td[2].get_text():
        res[td[1].get_text()]=td[2].get_text()+'('+td[5].get_text()+')'+td[11].get_text()
print(json.dumps(res))