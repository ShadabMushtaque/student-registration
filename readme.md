# 📝 Student Registration Form

A web-based application to simplify and digitize the student registration process using HTML, CSS, JavaScript, Java, and MySQL.

---

## 📌 Project Summary

Manual student registration is often error-prone, inefficient, and time-consuming. This project aims to provide a structured, fast, and reliable digital form that allows institutions to collect student data with higher accuracy and convenience.

---




## 🧾 Form Fields

- Full Name  
- Age  
- Email  
- Phone Number  
- Date of Birth  
- Father’s Name
- Mother's Name
- Course  
- Address

---

## ⚙️ How It Works

1. User fills out the registration form on the frontend.
2. JavaScript validates the input fields (e.g., email format, phone number length).
3. On submission, data is sent to a Java Servlet via HTTP POST.
4. Java Servlet uses JDBC to connect to MySQL and insert data into the `students` table.
5. User receives a confirmation message.
