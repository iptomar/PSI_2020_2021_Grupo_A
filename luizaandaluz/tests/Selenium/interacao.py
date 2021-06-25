# Script para testar o funcionamento normal do website
# neste script testa-se a adição de uma nova experiência clicando no botão
# para além disso acrescenta-se também um conjunto de "keys" para testar a submissão do formulario

# Início de uma abordagem diferente com "try" e "except"


import time
from selenium import webdriver

PATH = "C:\Program Files (x86)\chromedriver.exe"
driver = webdriver.Chrome(PATH)

driver.get("http://luizaandaluz/")
driver.maximize_window()

# no site da Luiza Andaluz clica-se no botão "Mapa" para aceder ao mapa
start = driver.find_element_by_xpath("/html/body/div[1]/a")
start.click()

# no site da Luiza Andaluz clica-se no botão "Mapa" para aceder ao mapa
mapa = driver.find_element_by_xpath("/html/body/div[1]/div/div[1]")
mapa.click()


criar = driver.find_element_by_xpath("/html/body/div[1]/div/div[2]/div/div/div[2]/div[1]/ul/li[2]/a/i")
criar.click()






time.sleep(5)
driver.quit()