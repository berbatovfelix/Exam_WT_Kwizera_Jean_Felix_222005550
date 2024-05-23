
DATABASE CONNECTION CREDENTIALS:
DB_SERVER        'localhost'
DB_USERNAME     Kwizera
DB_PASSWORD     Kwizera@123
DB_NAME         onlinelifecoachingservice

Explain onlinelifecoachingservice : The Online Life Coaching Service is a platform designed to facilitate the interaction between professional life coaches and individuals seeking personal development and guidance

Project Structure


•	The database name is onlinelifecoachingservice.
•	Admin have ability to log in and controlling database using password and email 

•	User can login but enter data in tables but may not delete because not have right

•	It consists of several tables:
•	admin: Stores information about administrators.
•	appointment: Manages appointments between coaches and clients.
•	clients: Contains data about clients, including their goals and progress.
•	coaches: Stores details about coaches, including their specialization and availability.
•	contact_submissions: Stores submissions made via the contact form on the platform.
•	feedback: Manages feedback submitted by clients after sessions.
•	goals: Tracks goals set by clients and their progress.
•	notification: Stores notifications for users.
•	payment: Manages payment information for clients.
•	resource: Contains resources provided by coaches.
•	sessions: Tracks sessions between coaches and clients.
•	users: Stores user credentials and roles.
Functionality:
•	The system facilitates online life coaching services.
•	Coaches can:
•	Manage their availability and specialization.
•	Schedule sessions with clients.
•	Provide resources.
•	Clients can:
•	Set goals and track their progress.
•	Schedule appointments with coaches.
•	Provide feedback after sessions.
•	Administrators can:
•	Manage user accounts.
•	View contact form submissions.
•	Send notifications to users.
•	Monitor payments.
2. Functionality
Coaches:
•	Coaches can log in using their credentials (coaches table).
•	They can view their schedule and availability (sessions table).
•	Coaches can schedule appointments with clients (appointment table).
•	They can upload resources for clients (resource table).
Clients:
•	Clients can log in using their credentials (clients table).
•	They can set goals and track their progress (goals table).
•	Clients can schedule appointments with coaches (appointment table).
•	After sessions, clients can provide feedback (feedback table).
Administrators:
•	Admins can log in using their credentials (admin table).
•	They can manage user accounts (users table).
•	Admins can view contact form submissions (contact_submissions table).
•	They can send notifications to users (notification table).
•	Admins can monitor payments made by clients (payment table).
3. Usage
Accessing the System:
•	Users (coaches, clients, and admins) can access the system via a web interface or a mobile app.
•	They need to log in using the admin or user
•	Admin may log in and add something in data base and delete
•	User can make registration only and payment but not delete
Using the Features:.
•	Clients can set goals, schedule sessions, and provide feedback.
•	Administrators can manage user accounts, view submissions, send notifications, and monitor payments.
Best Practices:
•	Users should keep their credentials secure.
•	Coaches and clients should communicate effectively during sessions.
•	Administrators should ensure the smooth functioning of the platform and address any issues promptly
