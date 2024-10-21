import requests
import random
from datetime import datetime
import time

url = 'http://127.0.0.1:8000/api/dados-leitura'

while True:
    data = {
        'corrente': random.uniform(0.0, 60.0),
        'dataLeitura': datetime.now().strftime("%Y-%m-%d"),
        'horaLeitura': datetime.now().strftime("%H:%M:%S"),
        'motor_id': 1,
    }
    
    response = requests.get(url, json=data)
    
    print(response.text)
    
    time.sleep(5)

