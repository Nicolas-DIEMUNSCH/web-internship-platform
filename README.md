# 🎓 StageFinder — Internship Management Platform

> School project completed as part of the Web Development module — CESI (2024-2025)

---

## 📌 Description

StageFinder is a web application designed to help students find internship offers,
allow promotion supervisors to monitor their students' applications, and give
administrators full control over the platform.

---

## 🎯 Context & Goals

This project was built in a team of 4 students, following a **Scrum methodology**
throughout the school module.

**Fictional client:** CESI  
**Fictional contractor:** Web4All  
**Duration:** Full module block

---

## ✨ Key Features

### 👤 Access Management
- Secure authentication (email / hashed password)
- 3 user roles: Administrator, Promotion Supervisor, Student
- Role-based permission system

### 🏢 Company Management
- Search, create, edit, and delete company profiles
- Students can rate companies

### 📋 Internship Offer Management
- Multi-criteria search (skills, company, salary...)
- Create / edit / delete offers
- Statistics dashboard: key indicators carousel

### 📬 Applications
- Apply to an offer with a CV and cover letter
- Students and supervisors can track application statuses

### ❤️ Wish-list
- Add / remove offers from a personal favorites list

### ⚙️ General
- Pagination on all lists
- Responsive design (mobile-first, burger menu)
- Legal notices compliant with French regulations

---

## 🛠️ Tech Stack

| Layer | Technology |
|-------|------------|
| Frontend | HTML5 / CSS3 / JavaScript |
| Backend | PHP (OOP, MVC architecture) |
| Database | MySQL |
| Server | Apache |
| Template Engine | *(to be filled)* |
| Unit Tests | PHPUnit |

---

## 🏗️ Project Architecture (MVC)

/
├── controllers/ # Business logic
├── models/ # Database access layer
├── views/ # HTML templates
├── public/ # Static files (CSS, JS, images)
├── config/ # Configuration files (not committed)
└── tests/ # PHPUnit test files

---

## 🚀 Local Setup

```bash
# 1. Clone the repository
git clone https://github.com/YOUR_USERNAME/stagefinder.git

# 2. Set up the database config
cp config/config.example.php config/config.php
# → Edit config.php with your local credentials

# 3. Import the database schema
mysql -u root -p < database/schema.sql

# 4. Start via a local Apache server (XAMPP, WAMP, Laragon...)
```

---

## 📸 Screenshots

*(To be added)*

---

## 👥 Team

| Name | Scrum Role |
|------|------------|
| *(to be filled)* | *(to be filled)* |

---

## 📄 License

Educational project — CESI 2024-2025. Not intended for commercial use.
