import pandas as pd
from sqlalchemy import create_engine


df = pd.read_excel('modeloAutos.xlsx')
#df= pd.read_csv("archivos/ciduad.csv")
engine = create_engine('mariadb://root:root@localhost/bdleasingcode')
df.to_sql('modelo_autos', con=engine, if_exists='replace', index=False)
print("Registros insertados correctamente")
