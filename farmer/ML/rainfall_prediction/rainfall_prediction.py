import pandas as pd
import sys

# Load the dataset into a dataframe
df = pd.read_csv('ML/rainfall_prediction/rainfall_in_india_1901-2015.csv')

# Define a function to predict rainfall for a given district and month
def predict_rainfall(state, month):
    # Filter the dataframe to only include rows with the given district
    state_data = df[df['SUBDIVISION'] == state]

    # Calculate the average rainfall for the given month across all the years
    avg_rainfall = state_data[month].mean()
    
    # Return the predicted rainfall for the given month
    return avg_rainfall

# Get the input parameters as command line arguments
Jregion = sys.argv[1]
Jmonth = sys.argv[2]

#predicted_rainfall = predict_rainfall('ANDAMAN & NICOBAR ISLANDS', 'JAN')

predicted_rainfall = predict_rainfall(Jregion, Jmonth)
print(predicted_rainfall)


