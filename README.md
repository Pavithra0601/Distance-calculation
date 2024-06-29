# Price Calculator Using Distance

A web-based price calculator for various construction materials.

## Table of Contents

- [Description](#description)
- [Installation](#installation)
- [Usage](#usage)
- [Files](#files)
- [Contributing](#contributing)
- [License](#license)
- [Contact](#contact)

## Description

This project is a web application that allows users to calculate the price of various construction materials. The application features a form where users can input buyer details, select a product, and specify the quantity to get the total price.

## Installation

To set up the project locally, follow these steps:

1. Clone the repository:

2. Make sure you have a web server with PHP support (e.g., XAMPP, WAMP, LAMP).

3. Place the project files in the web server's root directory.

4. Open your web browser and navigate to `http://localhost/price-calculator`.

## Usage

1. Open the application in your web browser.
2. Fill in the buyer's name and address.
3. Select a product from the dropdown menu.
4. Enter the desired quantity.
5. Click the "Calculate" button to get the price.

### Example

Here's an example of how the form looks:

```html
<form action="process.php" method="post">
    <!-- form fields here -->
    <input type="submit" name="submit" value="Calculate" class="btn">
</form>
