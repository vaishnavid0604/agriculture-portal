import pandas as pd
import numpy as np
import json
import sys

# Get the input parameters as command line arguments
jsonn = sys.argv[1]
jsonp = sys.argv[2]
jsonk = sys.argv[3]
jsont = sys.argv[4]
jsonh = sys.argv[5]
jsonph = sys.argv[6]
jsonr = sys.argv[7]

# Parse the JSON strings into Python objects
n_params = json.loads(jsonn)
p_params = json.loads(jsonp)
k_params = json.loads(jsonk)
t_params = json.loads(jsont)
h_params = json.loads(jsonh)
ph_params = json.loads(jsonph)
r_params = json.loads(jsonr)

#Read the dataset
dataset = pd.read_csv('ML/crop_recommendation/Crop_recommendation.csv')

#Divide the dataset into features and labels
X = dataset.iloc[:, :-1].values
y = dataset.iloc[:, -1].values

#Split the dataset into training and test sets
from sklearn.model_selection import train_test_split
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size = 0.2, random_state = 0)

#Train the model using the Random Forest Classifier algorithm
from sklearn.ensemble import RandomForestClassifier
classifier = RandomForestClassifier(n_estimators = 10, criterion = 'entropy', random_state = 0)
classifier.fit(X_train, y_train)

#Get the user inputs and store them in a numpy array
#user_input = np.array([[90,42,43,21,82,6.5,203]]) - ans is rice.
user_input = np.array([[n_params,p_params,k_params,t_params,h_params,ph_params,r_params]])

#Make predictions using the trained model
predictions = classifier.predict(user_input)

#Print the predicted crop
print(str(predictions[0]))
