  # Login and Signup Page using PHP 📝🔑

  ## 📌 Overview

  A **Login** and **Signup** system in **PHP** and **MySQL** allows users to **register securely**, log in, and access protected content. This system ensures **data security, session management, and a user-friendly interface with validation**.

  ## 🚀 Key Features

  #### ✅ User Registration & Login (with form validation)
  #### ✅ Secure Password Storage (hashed using password_hash())
  #### ✅ Session Management (to restrict unauthorized access)
  #### ✅ Error Handling (user-friendly messages)
  #### ✅ Responsive Design (styled with HTML & CSS)


  ## 🛠️ Technology Stack

  #### 🔹 Frontend: HTML, CSS (for form styling)
  #### 🔹 Backend: PHP (handles authentication logic)
  #### 🔹 Database: MySQL (stores user credentials)
  #### 🔹 Security: Password hashing, prepared statements (to prevent SQL injection)


  ## 🔒 Security Measures

  #### ✔️ Password Validation (at least 8 characters, uppercase, lowercase, number, special character)
  #### ✔️ Session Protection (users cannot access dashboard without login)
  #### ✔️ SQL Injection Prevention (using mysqli_prepare())

  ## 🔧 Installation and Setup Steps

  ### 🛠️ Requirements

  #### ✔️ XAMPP / WAMP / LAMP (Local Server)
  #### ✔️ PHP 8+
  #### ✔️ MySQL Database
  #### ✔️ Web Browser (Chrome, Firefox, etc.)

  1. **Clone the Repository**:
    ```bash
    git clone https://github.com/Poorvakumari/login-signup-page-using-php-task-2.git
    cd login-signup-page-using-php-task-2
    ```

  2. **Place the project folder inside `htdocs` (for XAMPP) or `www` (for WAMP).**

  3. **Start the Apache server in XAMPP.**

  4. **Create the Database**
    1. Open phpMyAdmin (http://localhost/phpmyadmin/).
    2. Import the `user_auth.sql` file.

  5. Open your web browser and navigate to `http://localhost/login-signup-page-using-php-task-2/`.

  ## output-images

  1. Register a new account.
  <img src="/login-signup-page-using-php-task-2/output_images/signup-page.png">
  2. Email Validation.
  <img src="/login-signup-page-using-php-task-2/output_images/email-validation.png">
  3. Password Validation.
  <img src="/login-signup-page-using-php-task-2/output_images/Password-validation.png">
  4. After signup, login to the account.
  <img src="/login-signup-page-using-php-task-2/output_images/login.png">
  5. After login, dashboard page will be shown.
  <img src="/login-signup-page-using-php-task-2/output_images/dashboard.png">
  6. You cannot access the dashboard page without logging in; if you try, you will be redirected to the login page.

## Login Credentials

name: Poorva
password: Poorva@123

## View the live site  at

