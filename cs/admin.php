<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>File Upload</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 20px;
    }

    #fileUploadContainer {
        text-align: center;
        margin-bottom: 20px;
    }

    input[type="file"] {
        display: none;
    }

    label {
        padding: 10px 20px;
        border: 2px solid #4CAF50;
        cursor: pointer;
        transition: border-color 0.3s ease;
    }

    label:hover {
        border-color: #45a049;
    }

    button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button:hover {
        background-color: #45a049;
    }

    #uploadStatus {
        text-align: center;
        margin-bottom: 20px;
    }

    .error {
        color: red;
        font-weight: bold;
    }
    .sign-out {
        position: absolute;
        top: 20px;
        right: 20px;
        background-color: #dc3545;
        color: white;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .sign-out:hover {
        background-color: #c82333;
    }
</style>
</head>
<body>

<div class="container">
    <div id="fileUploadContainer">
        <input type="file" id="csvFileInput1" accept=".csv" onchange="displayFileName('selectedFileName1')">
        <label for="csvFileInput1">Choose CSV File 1</label>
        <input type="file" id="csvFileInput2" accept=".csv" onchange="displayFileName('selectedFileName2')">
        <label for="csvFileInput2">Choose CSV File 2</label>
    </div>
    <p id="selectedFileName1"></p>
    <p id="selectedFileName2"></p>
    <button onclick="uploadCSVFiles()">Upload</button>
    <div id="uploadStatus"></div>
</div>
<button class="sign-out" onclick="location.href='index.php'">Sign out</button>

<script>
function displayFileName(elementId) {
    const fileInput = document.getElementById(elementId.replace('selectedFileName', 'csvFileInput'));
    const selectedFile = fileInput.files[0];
    const fileNameDisplay = document.getElementById(elementId);
    if (selectedFile) {
        if (selectedFile.type === 'text/csv') {
            fileNameDisplay.textContent = 'Selected File: ' + selectedFile.name;
        } else {
            fileNameDisplay.textContent = 'Only upload CSV files.';
        }
    } else {
        fileNameDisplay.textContent = '';
    }
}

function uploadCSVFiles() {
    const fileInput1 = document.getElementById('csvFileInput1');
    const fileInput2 = document.getElementById('csvFileInput2');
    const file1 = fileInput1.files[0];
    const file2 = fileInput2.files[0];

    if (file1 && file2) {
        document.getElementById('uploadStatus').innerText = 'Files uploaded successfully!';
    } else {
        document.getElementById('uploadStatus').innerText = 'Please select both files to upload.';
    }
}
</script>

</body>
</html>