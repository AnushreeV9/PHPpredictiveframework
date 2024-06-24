#from flask import Flask, request, jsonify
import pandas as pd
import emp  # Import your machine learning model

#app = Flask(__name__)

# Endpoint to handle file upload and prediction
#@app.route('/predict', methods=['POST'])
def predict():
    # Check if a file is uploaded
    if 'file' not in request.files:
        return jsonify({'error': 'No file part'})

    file = request.files['file']

    # Check if the file is empty
    if file.filename == '':
        return jsonify({'error': 'No selected file'})

    # Save the file to a temporary location
    file_path = '/tmp/uploaded_file.csv'
    file.save(file_path)

    # Load the dataset from the CSV file
    dataset = pd.read_csv(file_path)

    # Assuming your model expects a certain format of input data
    # Replace 'preprocess_data_function' with your preprocessing function
    processed_data = preprocess_data_function(dataset)

    # Make prediction using your ML model
    prediction = emp.predict(processed_data)

    # Return prediction as JSON response
    return jsonify({'prediction': prediction})

# Sample function to preprocess data
def preprocess_data_function(data):
    # Sample preprocessing steps
    # You should replace this with your actual preprocessing steps
    processed_data = data.dropna()  # Dropping missing values
    processed_data = processed_data.select_dtypes(include='number')  # Selecting numerical columns
    return processed_data

if __name__ == '__main__':
    app.run(debug=True)
