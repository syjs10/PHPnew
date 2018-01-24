# _*_ coding:utf-8 _*_
import urllib
import http.cookiejar
import pytesseract
from PIL import Image
print('test')

url = "http://202.199.96.30/ACTIONVALIDATERANDOMPICTURE.APPPROCESS"
loginUrl = "http://202.199.96.30/ACTIONLOGON.APPPROCESS?mode=4&"
img = urllib.request.urlopen(url)
cat_img = img.read()
print('test')
with open('cat_500_600.jpg','wb') as f:
    f.write(cat_img)

image = Image.open('cat_500_600.jpg')
vcode = pytesseract.image_to_string(image)
print(vcode)
print('test')
postdata =urllib.parse.urlencode({
    "mode":4,
    "WebUserNO":"150402305",
    "Password":"21103X",
    "Agnomen":vcode,

}).encode(encoding='GB2312')
print('test')
header = {
    "Accept":"text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8",
    "Accept-Encoding":"gzip, deflate",
    "Accept-Language":"zh-CN,zh;q=0.9",
    "Connection":"keep-alive",
    "Host":"202.199.96.30",
    "Referer":"http://202.199.96.30/index.jsp",
    "User-Agent":"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.62 Safari/537.36"
}

req = urllib.request.Request(loginUrl,postdata,header)
print('test')

print(urllib.request.urlopen(req).read().decode('GB2312'))

#自动记住cookie
# cj = http.cookiejar.CookieJar()
# opener = urllib.request.build_opener(urllib.request.HTTPCookieProcessor(cj))
# urllib.request.install_opener(opener)# 安装opener到全局
# r = opener.open(req)
# print(r.read().decode('GB2312'))