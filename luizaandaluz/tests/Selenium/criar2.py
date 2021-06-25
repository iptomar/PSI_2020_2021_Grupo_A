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
mapa = driver.find_element_by_xpath("/html/body/div[1]/div/div[2]")
mapa.click()


criar = driver.find_element_by_xpath("/html/body/div[1]/div/div[2]/div/div/div[2]/div[1]/ul/li[2]/a")
criar.click()

nome = driver.find_element_by_xpath("/html/body/div[1]/div/div[2]/div/div/div[2]/div[2]/div/div[2]/form/div[1]/fieldset[1]/div/div[1]/input")
nome.click()
nome.send_keys("Teste")


email = driver.find_element_by_xpath("/html/body/div[1]/div/div[2]/div/div/div[2]/div[2]/div/div[2]/form/div[1]/fieldset[1]/div/div[2]/input")
email.click()
email.send_keys("teste@gmail.com")


titulo = driver.find_element_by_xpath("/html/body/div[1]/div/div[2]/div/div/div[2]/div[2]/div/div[2]/form/div[1]/fieldset[2]/div/div[1]/input")
titulo.click()
titulo.send_keys("Processo de teste Selenium")


descricao = driver.find_element_by_xpath("/html/body/div[1]/div/div[2]/div/div/div[2]/div[2]/div/div[2]/form/div[1]/fieldset[2]/div/div[2]/textarea")
descricao.click()
descricao.send_keys("A testar o projeto...")


enviar = driver.find_element_by_xpath("/html/body/div[1]/div/div[2]/div/div/div[2]/div[2]/div/div[2]/form/div[2]/button")
enviar.click()




time.sleep(5)
driver.quit()