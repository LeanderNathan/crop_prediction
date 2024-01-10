import pandas as pd
import sys
from sklearn.preprocessing import LabelEncoder
from sklearn.tree import DecisionTreeClassifier


data = pd.read_csv("C:/xampp/htdocs/demo/ML/fertilizer_recommendation/fertilizer_recommendation.csv")
le_soil = LabelEncoder()
data['Soil Type'] = le_soil.fit_transform(data['Soil Type'])
le_crop = LabelEncoder()
data['Crop Type'] = le_crop.fit_transform(data['Crop Type'])
X = data.iloc[:, :8]
y = data.iloc[:, -1]

dtc = DecisionTreeClassifier(random_state=0)
dtc.fit(X, y)

jsonn = 37
jsonp = 0
jsonk = 0
jsont = 26
jsonh = 52
jsonsm = 38
jsonsoil = 'Sandy'
jsoncrop = 'Maize'

soil_enc = le_soil.transform([jsonsoil])[0]
crop_enc = le_crop.transform([jsoncrop])[0]

user_input = [[jsont,jsonh,jsonsm,soil_enc,crop_enc,jsonn,jsonk,jsonp]]

fertilizer_name = dtc.predict(user_input)

print(str(fertilizer_name[0]))