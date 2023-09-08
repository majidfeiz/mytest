<?php
// Include the Google API PHP client library
require __DIR__ . '/vendor/autoload.php'; // Adjust the path as needed

// Set up Google Sheets API credentials (download from Google Cloud Console)
putenv('GOOGLE_APPLICATION_CREDENTIALS=your-credentials-file.json');

// Initialize the Google Sheets client
$client = new Google_Client();
$client->useApplicationDefaultCredentials();
$client->setScopes(Google_Service_Sheets::SPREADSHEETS);

// Specify the Google Sheets spreadsheet ID (replace with your own)
$spreadsheetId = 'your-spreadsheet-id';

// Create a new Google Sheets service
$service = new Google_Service_Sheets($client);

// Step 1: Generate a 20 x 52 table with random values from a standard uniform distribution
$rows = 20;
$columns = 52;
$table = [];

for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j < $columns; $j++) {
        $table[$i][$j] = rand(0, 100) / 100; // Random values from standard uniform distribution
    }
}

// Step 2: Compute cumulative sums for each individual
$cumulativeSums = [];

for ($i = 0; $i < $rows; $i++) {
    $cumulativeSum = 0;
    for ($j = 0; $j < $columns; $j++) {
        $cumulativeSum += $table[$i][$j];
        $cumulativeSums[$i][] = $cumulativeSum;
    }
}

// Step 3: Export data to Google Sheets
$data = $cumulativeSums; // Use cumulative sums as data

// Define the range to write data to ('Sheet1!A1')
$range = 'Sheet1!A1';

// Prepare the request to write data
$requestBody = new Google_Service_Sheets_ValueRange([
    'values' => $data
]);

// Execute the request to write data
$response = $service->spreadsheets_values->update($spreadsheetId, $range, $requestBody, [
    'valueInputOption' => 'RAW'
]);


// Display success message
echo "Data exported to Google Sheets, and chart created successfully.";
?>
