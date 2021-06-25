import os
from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
from selenium.webdriver.common.action_chains import ActionChains

PATH = "C:\Program Files (x86)\chromedriver.exe"
driver = webdriver.Chrome(PATH)

driver.get("http://luizaandaluz/")
driver.maximize_window()

# no site da Luiza Andaluz clica-se no botão "Mapa" para aceder ao mapa
start = driver.find_element_by_xpath("/html/body/div[1]/a")
start.click()

mapa = driver.find_element_by_xpath("/html/body/div[1]/div/div[1]")
mapa.click()

try:
    # na página do mapa, clica-se no botão "Adicione a sua experiência"
    

    criar = WebDriverWait(driver, 10).until(
        EC.presence_of_element_located((By.XPATH, "/html/body/div[1]/div/div[2]/div/div/div[2]/div[1]/ul/li[2]/a"))
    )
    criar.click()

    nome = WebDriverWait(driver, 10).until(
        EC.presence_of_element_located((By.XPATH, "/html/body/div[1]/div/div[2]/div/div/div[2]/div[2]/div/div[2]/form/div[1]/fieldset[1]/div/div[1]/input"))
    )
    nome.click()
    nome.send_keys("Teste")

    email = WebDriverWait(driver, 10).until(
        EC.presence_of_element_located((By.XPATH, "/html/body/div[1]/div/div[2]/div/div/div[2]/div[2]/div/div[2]/form/div[1]/fieldset[1]/div/div[2]/input"))
    )
    email.click()
    email.send_keys("teste@gmail.com")

    titulo = WebDriverWait(driver, 10).until(
        EC.presence_of_element_located((By.XPATH, "/html/body/div[1]/div/div[2]/div/div/div[2]/div[2]/div/div[2]/form/div[1]/fieldset[2]/div/div[1]/input"))
    )
    titulo.click()
    titulo.send_keys("Processo de teste Selenium")

    descricao = WebDriverWait(driver, 10).until(
        EC.presence_of_element_located((By.XPATH, "/html/body/div[1]/div/div[2]/div/div/div[2]/div[2]/div/div[2]/form/div[1]/fieldset[2]/div/div[2]/textarea"))
    )
    descricao.click()
    descricao.send_keys("A testar o projeto...")

    

    

    enviar = WebDriverWait(driver, 10).until(
        EC.presence_of_element_located((By.XPATH, "/html/body/div[1]/div/div[2]/div/div/div[2]/div[2]/div/div[2]/form/div[2]/button"))
    )
    enviar.click()

except Exception as e:
    driver.quit()


