database password
User:admin
Host:admin
pass:hillsdalesucks

Relationships Summary
Users (students & teachers) log in → users
Classes exist → classes
Users are enrolled in classes → class_members (Many-to-Many)
Classes have assignments and tests → assignments
Students receive grades on assignments/tests → grades
Queries & Features
Get all students in a class

sql
Copy
Edit
SELECT u.user_id, u.full_name, u.email 
FROM users u
JOIN class_members cm ON u.user_id = cm.user_id
WHERE cm.class_id = 1 AND cm.role = 'student';
Get all assignments for a class

sql
Copy
Edit
SELECT * FROM assignments WHERE class_id = 1 ORDER BY due_date ASC;
Get all grades for a student in a class

sql
Copy
Edit
SELECT a.title, g.score, a.total_points, (g.score / a.total_points) * 100 AS percentage
FROM grades g
JOIN assignments a ON g.assignment_id = a.assignment_id
WHERE g.student_id = 5;
Calculate a student’s overall grade in a class

sql
Copy
Edit
SELECT student_id, 
       SUM(g.score) / SUM(a.total_points) * 100 AS overall_grade
FROM grades g
JOIN assignments a ON g.assignment_id = a.assignment_id
WHERE a.class_id = 1
GROUP BY student_id;
