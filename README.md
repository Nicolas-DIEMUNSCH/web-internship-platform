# StageFinder 🚀

**The internship platform built by students, for students.**

Finding an internship is already stressful enough — StageFinder makes the search part
a little easier. Browse offers, apply in a few clicks, and track everything in one place.

> School project — CESI Web Development module (2024-2025)  
> Built by a team of 4 using Scrum methodology.

---

## What does it do?

StageFinder connects three types of users on a single platform:

- 🎓 **Students** — Search offers by skills, wishlist the best ones, and apply directly with their CV and cover letter
- 👨‍🏫 **Supervisors** — Keep an eye on their students' applications and company ratings
- 🔐 **Admins** — Full control over users, companies, and offers

---

## Features at a glance

| Area | What's included |
|------|----------------|
| 🔑 Auth | Login/logout, role-based access (Admin / Supervisor / Student) |
| 🏢 Companies | Browse, create, edit, delete & rate companies |
| 📋 Offers | Search by skills or company, full CRUD, stats carousel |
| 📬 Applications | Apply with CV + cover letter, track your history |
| ❤️ Wish-list | Save interesting offers for later |
| 📱 Responsive | Mobile-first, burger menu, works on any screen |

---

## Tech Stack

Frontend → HTML5 / CSS3 / JavaScript
Backend → PHP (OOP, MVC architecture)
Database → MySQL
Server → Apache
Tests → PHPUnit

---

## Project Structure

/
├── controllers/ # Business logic
├── models/ # Database layer
├── views/ # HTML templates
├── public/ # CSS, JS, images
├── config/ # Local config (not committed — see config.example.php)
└── tests/ # PHPUnit test files

---

## Getting started locally

```bash
# Clone the repo
git clone https://github.com/YOUR_USERNAME/stagefinder.git

# Set up your local config
cp config/config.example.php config/config.php
# → Fill in your database credentials

# Import the database
mysql -u root -p < database/schema.sql

# Fire up Apache (XAMPP, WAMP, Laragon...) and you're good to go 🎉
```

---

## Screenshots

*(Coming soon)*

---

## Team

| Name | Role |
|------|------|
|DIEMUNSCH Nicolas (myself)|Developer|
|BECHE Romain|Product Owner|
|LAMBERT Pierre|Scrum Master|
|GULLY Charles|Developer|

---

## License

Educational project — CESI 2024-2025. Not for commercial use.
