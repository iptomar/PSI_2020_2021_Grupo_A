#script teste para iniciar a aplicação, carregando no botão start


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
fundacao = driver.find_element_by_xpath("/html/body/div[1]/nav/div/ul/li[2]/a")
fundacao.click()


time.sleep(5)

driver.quit()


