Here is your **`README.md`** file with everything included in code format:

```md
# Eid Salami Request System

A simple PHP-based system for submitting and managing Eid Salami requests.

## 🚀 Features
- Users can submit **name, bKash number, and amount**.
- Data is stored securely in a **MySQL database**.
- Displays requests in a **responsive table**.
- Uses **prepared statements** to prevent SQL injection.

## 🛠️ Technologies Used
- **Frontend:** HTML, CSS  
- **Backend:** PHP (MySQLi)  
- **Database:** MySQL  

## 📌 Installation

### 1️⃣ Clone the Repository  
```bash
git clone https://github.com/your-username/eid-salami-system.git
cd eid-salami-system
```

### 2️⃣ Create the Database  
Run this SQL command to create the required table:

```sql
CREATE DATABASE eid_salami;
USE eid_salami;

CREATE TABLE salami_requests (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    bkash VARCHAR(20) NOT NULL,
    amount DECIMAL(10,2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

### 3️⃣ Configure Database Connection (`db.php`)  
Edit `db.php` with your database credentials:

```php
<?php
$host = "localhost";
$user = "your_database_user";
$pass = "your_database_password";
$db = "eid_salami";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
?>
```

### 4️⃣ Run the Project  
If using **XAMPP**, move the project to the `htdocs` folder.  

Start Apache & MySQL, then visit:  

```bash
http://localhost/eid-salami-system/
```

## 📂 Project Structure  
```bash
/eid-salami-system
│── db.php         # Database connection
│── index.php      # Submission form
│── submit.php     # Handles form submission
│── admit_info.php # Displays submitted requests
│── README.md      # Documentation
```

## 📝 Usage  
### 1️⃣ Submit Request:
- Open `index.php` in a browser.
- Enter **name, bKash number, and amount**.
- Click **Submit**.

### 2️⃣ View Requests:
- Open `admit_info.php` to see all submitted requests.

## 🔒 Security Best Practices  
✅ Uses **prepared statements** to prevent SQL injection.  
✅ Applies **htmlspecialchars()** to escape user input.  
✅ **Error reporting disabled** in production for security.  

## 📞 Contact  
For support, open an issue or reach out:  
**Email:** your-email@example.com  
**GitHub:** [your-username](https://github.com/your-username/)  
```

This **README.md** file is properly formatted with code blocks, making it **easy to read and use**. 🚀 Let me know if you need any changes! 😊