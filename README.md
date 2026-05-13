PLV SexEd Hub 🎓

**Know. Protect. Respect.

A student-made, judgment-free sexual health education website for Pamantasan ng Lungsod ng Valenzuela (PLV). Built as a PLV Student Health Initiative to provide accurate information on sexual health, consent, and healthy relationships.

## Table of Contents

- [Overview](#overview)
- [Features](#features)
- [Project Structure](#project-structure)
- [How to Run](#how-to-run)
- [Pledge System](#pledge-system)
- [Admin Panel](#admin-panel)
- [Technologies Used](#technologies-used)
- [Planned Features](#planned-features)
- [Disclaimer](#disclaimer)

## Overview

PLV SexEd Hub is a static, front-end-only website designed to give PLV students easy access to reliable sexual health information. It covers STI awareness, consent education, myth-busting, and local health resources — all in a friendly, accessible format.

## Features

- **Hero Section** — Tagline, PLV branding, and quick navigation CTAs
- **Stats Strip** — Key sexual health statistics relevant to Filipino youth
- **Topics** — In-depth cards on STI Awareness & Prevention and Consent & Healthy Relationships
- **Quick Facts** — Bite-sized, shareable health facts for students
- **Consent Section (FRIES)** — Explains the FRIES model of consent
- **Myth Busters** — Expandable accordion debunking common myths
- **Resources** — Links to PLV Health Services, DOH hotline, Love Yourself Foundation, and more
- **Pledge Form** — Students enter their student number and take a 3-point health pledge
- **Admin Panel** — Password-free admin page to view, search, and export pledge submissions

---

## Project Structure

```
plv-sexed-hub/
│
├── index.html          # Main website
├── style.css           # Global styles
├── admin_pledges.html  # Admin panel for pledge submissions
└── assets/
    └── logo.jpg        # PLV logo

## How to Run

No build tools or server required. This is a fully static website.

1. Clone or download the project folder.
2. Make sure `assets/logo.jpg` is present.
3. Open `index.html` in any modern web browser.

```bash
# Optional: serve locally with Python
python -m http.server 8000
# Then visit http://localhost:8000
```

---

## Pledge System

When a student submits the pledge on `index.html`:

- Their **student number**, optional concern, and **timestamp** are saved to `localStorage` under the key `plv_pledges`.
- A thank-you message is displayed in place of the form.
- Data persists in the browser until cleared.

**Pledge commitments:**
1. Seek and share accurate sexual health information responsibly.
2. Always practice and respect consent.
3. Support fellow PLV students without judgment.

---

## Admin Panel

Access the admin panel by opening `admin_pledges.html` in the same browser where pledges were submitted (data is read from `localStorage`).

### Admin Features

| Feature | Description |
|---|---|
| **Stats** | Total pledges, pledges today, date of latest pledge |
| **Search** | Filter by name, student number, or course |
| **Export CSV** | Download all pledge records as a `.csv` file |
| **Clear All** | Permanently delete all pledge records (with confirmation modal) |

>  **Current limitation:** Data is stored in `localStorage`, meaning it is browser-specific and not shared across devices or users. An online database integration is currently in progress — see [Planned Features](#planned-features).

---

## Technologies Used

- **HTML5** — Semantic markup
- **CSS3** — Custom properties (CSS variables), Flexbox, Grid
- **Vanilla JavaScript** — DOM manipulation, localStorage, CSV export
- **Google Fonts** — Nunito typeface
- No frameworks, no build tools, no backend required.

---

## Planned Features

> 🚧 These features are currently under development.

### Online Database Integration (PHP + MySQL)

The pledge system currently relies on the browser's `localStorage`, which means data only exists on the device it was submitted from. We are actively working on migrating to a **PHP + MySQL** backend so that:

- Pledge submissions are stored in a **MySQL database** on a real server and accessible from any device
- The admin panel can display **all submissions** across all students, not just those from the current browser
- Data is no longer lost when a user clears their browser storage
- Future features like analytics, duplicate detection, and email confirmations become possible

**Planned Stack:**

| Layer | Technology |
|---|---|
| Backend / API | PHP |
| Database | MySQL |
| Frontend (no change) | HTML, CSS, Vanilla JS |

**Planned PHP endpoints:**
- `submit_pledge.php` — receives form data and inserts a new pledge record into the database
- `get_pledges.php` — returns all pledge records as JSON for the admin panel

**Status:** 🔄 In progress — PHP and MySQL integration not yet connected.

---

## Disclaimer

This website is for **educational purposes only** and does not replace professional medical advice. Students are encouraged to consult a licensed healthcare provider for personal health concerns.

© 2025 Pamantasan ng Lungsod ng Valenzuela
