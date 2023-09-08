# IT client communication
Generate (no need to display) a 20 x 52 table where each value is drawn from a standard uniform distribution.
The 20 rows represent 20 individuals and the 52 columns represent 52 weeks (one year)
For each individual, compute the cumulative sums across columns from inception until the given week
Create and show in a google sheet the respective chart with 20 increasing lines, label the axes “Week” and “Cumulative sum”.

This PHP project generates random data, computes cumulative sums, exports the data to Google Sheets, and creates a line chart using the Google Sheets API. It's designed to help you get started with integrating Google Sheets into your PHP applications.

## Prerequisites

Before you can run this project, you'll need the following:

1. PHP installed on your system.
2. Composer installed to manage project dependencies.
3. A Google Cloud project with the Google Sheets API enabled.
4. Service account credentials JSON file for authentication (refer to the [Google Cloud Console](https://console.cloud.google.com/) to set this up).

## Installation

1. Clone this repository to your local machine:

   ```bash
   git clone https://github.com/majidfeiz/mytest.git
   cd IT client communication
   ```

2. Install project dependencies using Composer:   

```bash 
 composer install
```

3. Set up your Google Cloud service account credentials:
- Download your service account credentials JSON file
- Set the GOOGLE_APPLICATION_CREDENTIALS environment variable in your PHP script to point to the credentials file.

```bash
putenv('GOOGLE_APPLICATION_CREDENTIALS=/path/to/your-credentials-file.json');
```

## Usage

1. Run the PHP script to generate data, compute cumulative sums, export data to Google Sheets, and create a line chart:

```bash
php index.php
```

2. After running the script, you'll find the data exported to your Google Sheets document, and a line chart created.

## Customization
You can customize the data generation, chart settings, and data export by modifying the PHP script (index.php) to suit your specific requirements.