# Freshers' Guideline System

## Overview
The **Freshers' Guideline System** is a social web application designed specifically for SUSTians to facilitate better communication and interaction. It provides features such as posting, chatting, reporting users, and an admin-controlled verification system to ensure a safe and productive environment. Users can lodge complaints, and the admin has the authority to manage posts and accounts as per the community guidelines.

## Features
- **User Verification:** Admin verification required for access to ensure authenticity.
- **Post and Chat:** Users can create posts and chat with others in real-time.
- **Report Management:** Users can lodge reports against others; admins can address these reports.
- **Admin Control:** Admins can delete posts, disable accounts, and verify users.

## Technologies Used
### Frontend:
- HTML
- Raw CSS
- Bootstrap
- jQuery
- AJAX
- JavaScript DOM

### Backend:
- PHP

### Database:
- MySQL

## Installation and Setup
To run this project locally, follow these steps:

1. **Install XAMPP:** Ensure XAMPP is installed on your system.
2. **Unzip the Project:**
   - Navigate to the `htdocs` folder in your XAMPP directory.
   - Unzip the attached project file and place it in the `htdocs` folder.
3. **Configure the Project:**
   - Open the `config.php` file.
   - Update the variables (lines 4-8) with your database details like hostname, user name, password, database name and port no.
4. **Set Up the Database:**
   - Open `phpMyAdmin` from the XAMPP control panel.
   - Create a new database and import the `database.sql` file provided.
5. **Run the Application:**
   - Start the Apache and MySQL servers from the XAMPP control panel.
   - Open a browser and navigate to `http://localhost/{your_project_folder}`.

## How It Works

### User Workflow:
1. **Registration:**
   - Users provide details such as name, department, email, registration number, etc.
   - User status is initially set to "unverified" until admin approval.

2. **Authentication:**
   - Users log in with their registration number and password.
   - Verified users gain full access; unverified users must wait for admin approval.

3. **Profile Management:**
   - Users can view and update specific profile fields.

4. **Posts and Interactions:**
   - Users can create, update, and delete posts.
   - Posts allow for interactions, including comments and reactions.

5. **Chat System:**
   - Users can send messages in real-time to other verified users.

6. **Reporting:**
   - Users can report inappropriate behavior or posts.

### Admin Workflow:
- **Verification Management:**
  - Approve or disable user accounts.
- **Post Management:**
  - Delete posts that violate guidelines.
- **Report Handling:**
  - View reports and take appropriate action.

## Testing
### User Cases:
- **Registration:** Ensure users can register successfully, and data is stored in the database.
- **Authentication:** Validate correct credentials and user status checks.
- **Profile Updates:** Verify updates are reflected in the database.
- **Posts and Chats:** Test post creation, interactions, and chat functionality.
- **Reports:** Validate the reporting process and admin actions.

### Admin Cases:
- **User Management:** Verify enabling/disabling user accounts.
- **Post Management:** Validate post deletion functionality.
- **Report Handling:** Ensure reports can be addressed appropriately.

## Contributions
If you'd like to contribute to this project:
1. Fork the repository.
2. Create a new feature branch (`git checkout -b feature/YourFeatureName`).
3. Commit your changes (`git commit -m 'Add some feature'`).
4. Push to the branch (`git push origin feature/YourFeatureName`).
5. Open a Pull Request.

## License
This project is licensed under the MIT License.

## Contact
For further inquiries or issues, contact:
- **Name:** Md. Sazim Mahmudur Rahman
- **Email:** sazim87@student.sust.edu

---
Thank you for using the Freshers' Guideline System. We hope it creates a positive and productive platform for all SUSTians!

