import pandas as pd
import sys
from sklearn.preprocessing import LabelEncoder
from sklearn.tree import DecisionTreeClassifier

# Load the dataset
data = pd.read_csv("ML/fertilizer_recommendation/fertilizer_recommendation.csv")

# Label encoding for categorical features
le_soil = LabelEncoder()
data['Soil Type'] = le_soil.fit_transform(data['Soil Type'])
le_crop = LabelEncoder()
data['Crop Type'] = le_crop.fit_transform(data['Crop Type'])

# Splitting the data into input and output variables
X = data.iloc[:, :8]
y = data.iloc[:, -1]

# Training the Decision Tree Classifier model
dtc = DecisionTreeClassifier(random_state=0)
dtc.fit(X, y)

# Get the input parameters as command line arguments
jsonn = sys.argv[1]
jsonp = sys.argv[2]
jsonk = sys.argv[3]
jsont = sys.argv[4]
jsonh = sys.argv[5]
jsonsm = sys.argv[6]
jsonsoil = sys.argv[7]
jsoncrop = sys.argv[8]

soil_enc = le_soil.transform([jsonsoil])[0]
crop_enc = le_crop.transform([jsoncrop])[0]

# Get the user inputs and store them in a numpy array - Urea
#user_input = [[26,52,38,'Sandy','Maize',37,0,0]]

user_input = [[jsont,jsonh,jsonsm,soil_enc,crop_enc,jsonn,jsonk,jsonp]]

fertilizer_name = dtc.predict(user_input)

# Return the prediction as a string
print(str(fertilizer_name[0]))