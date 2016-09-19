/* Этот простой скрипт позволяет поделиться вашей веб-страницей через социаьную сеть VKontakte */

var LOC = location.href;
var URL = "http://vk.com/share.php?url="+LOC;
document.write("<p><a href="+URL+" target='_blank'><img src='vk.png' alt='Поделиться!'></a></p>");

