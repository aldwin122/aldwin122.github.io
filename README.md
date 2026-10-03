# SCS Portal

**Silang Central School Portal** — A Web-Based Smart Grade Portal with Performance Analytics and Early Warning System.

## Tech Stack

- Backend: PHP 8+ / CodeIgniter 4
- Frontend: HTML, CSS, Bootstrap 5, JavaScript
- Database: MySQL / MariaDB
- Charts: Chart.js

## Setup (XAMPP)

1. Place the project in `C:\xampp\htdocs\SCSPortal` (already done if you are here).
2. Start **Apache** and **MySQL** in XAMPP Control Panel.
3. Import the database:

```bash
C:\xampp\mysql\bin\mysql.exe -u root < C:\xampp\htdocs\SCSPortal\database\scs_portal.sql
```

4. Confirm `.env` settings:

```
app.baseURL = 'http://localhost/SCSPortal/public/'
database.default.database = scs_portal
database.default.username = root
database.default.password =
```

5. Open: [http://localhost/SCSPortal/public/](http://localhost/SCSPortal/public/)

## Demo Accounts

| Role     | Username  | Password    |
|----------|-----------|-------------|
| Admin    | `admin`   | `password123` |
| Teacher  | `teacher1`| `password123` |
| Teacher  | `teacher2`| `password123` |
| Parent   | `parent1` | `password123` |
| Parent   | `parent2` | `password123` |

## Modules

1. **Login** – Admin / Teacher / Parent, hashed passwords, forgot password
2. **Dashboard** – Counts, at-risk students, charts, recent activities
3. **Student Management** – CRUD, search, filter, section assignment
4. **Teacher Management** – CRUD, assign subjects & sections
5. **Grade Management** – Encode / update / view / print grades
6. **Performance Analytics** – Averages, ranking, bar/line/pie charts
7. **Early Warning System** – At Risk (&lt;75), Needs Improvement (75–79), Good Standing (≥80)
8. **Parent Portal** – Grades, analytics, warnings, report card download
9. **Reports** – Student / Class / Subject / Performance + Excel (CSV) & PDF (print)

## Early Warning Rules

| Average     | Status              |
|-------------|---------------------|
| Below 75    | AT RISK             |
| 75 – 79     | NEEDS IMPROVEMENT   |
| 80 and above| GOOD STANDING       |

## Project Structure

```
app/
  Controllers/   Login, Dashboard, Student, Teacher, Grade, Analytics, ParentPortal, Reports
  Models/        User, Student, Teacher, Grade, Subject, Parent, Notification, ActivityLog
  Views/         auth, dashboard, students, teachers, grades, analytics, reports, parent
  Filters/       AuthFilter (RBAC)
  Helpers/       scs_helper.php
database/
  scs_portal.sql
public/
  assets/css/app.css
  assets/js/app.js
```
