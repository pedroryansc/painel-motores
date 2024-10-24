import requests
import random
from datetime import datetime
import time

url = 'http://127.0.0.1:8000/api/dados-leitura'

while True:
    
    for x in range(1, 6):
        if random.randint(1, 6) != x:
            data = {
                'corrente': random.uniform(0.0, 60.0),
                'dataLeitura': datetime.now().strftime("%Y-%m-%d"),
                'horaLeitura': datetime.now().strftime("%H:%M:%S"),
                'motor_id': x,
            }
            response = requests.get(url, json=data)
        
    time.sleep(5)

