# 📝 Registration Form

> A simple user registration form built with HTML, CSS, and PHP that collects user details and stores them in a MySQL database.

![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)

---

## 📖 About

A clean and minimal user registration form that collects basic account information and saves it to a MySQL database. Built as a beginner-friendly full-stack project using HTML for structure, CSS for styling, and PHP for backend form handling.

---

## ✨ Features

- 📋 **Registration Form** — Collects First Name, Last Name, Email, Password, and Confirm Password
- ✅ **Terms Checkbox** — Requires acceptance of Terms of Use & Privacy Policy before submitting
- 💾 **Database Storage** — Form data is saved to a MySQL database via PHP
- 🎨 **Styled UI** — Clean, centered form layout with custom CSS

---

## 🛠️ Tech Stack

| Layer | Technology |
|-------|------------|
| Frontend | HTML5, CSS3 |
| Backend | PHP |
| Database | MySQL |
| Local Server | XAMPP (Apache + MySQL) |

---

## 🗄️ Database Setup

**Database name:** `imasha_registration`

Create the database and table using the following SQL:

```sql
CREATE DATABASE imasha_registration;

USE imasha_registration;

CREATE TABLE table_info (
    first_name VARCHAR(100),
    last_name  VARCHAR(100),
    email      VARCHAR(100),
    password   VARCHAR(100),
    confirm_password VARCHAR(100)
);
```

---

## 📁 Project Structure

```
Registration-Form/
│
├── index.html          # Registration form (frontend)
├── style.css           # Form styling
└── registration.php    # Form handling & MySQL insert (backend)
```

---

## 🚀 Getting Started

### Prerequisites

- [XAMPP](https://www.apachefriends.org/) (Apache + MySQL)
- A web browser

### Installation Steps

1. **Clone or download the repository**
   ```bash
   git clone https://github.com/ImashaSamodee/Registration-Form.git
   ```

2. **Move the project to XAMPP's htdocs folder**
   ```
   C:/xampp/htdocs/Registration-Form
   ```

3. **Set up the database**
   - Start XAMPP and turn on **Apache** and **MySQL**
   - Open [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
   - Create the database and table using the SQL above

4. **Run the project**

   Open your browser and go to:
   ```
   http://localhost/Registration-Form/index.html
   ```

---

## 👩‍💻 Author

**J.B.A. Imasha Samodee**
- GitHub: [@ImashaSamodee](https://github.com/ImashaSamodee)

---

## 📄 License

Copyright © 2025 Imasha Samodee. All Rights Reserved.
