SELECT *
FROM Degrees
JOIN Students
ON Degrees.Id = Students.Degree_Id
WHERE Degrees.Name = 'Corso di Laurea in Economia';




2. Selezionare tutti i Corsi di Laurea Magistrale del Dipartimento di
Neuroscienze
SELECT degrees.*
FROM degrees
JOIN departments ON degrees.department_id= departments.id
WHERE departments.name = 'Dipartimento di Neuroscienze' AND degrees.level='Magistrale';



3. Selezionare tutti i corsi in cui insegna Fulvio Amato (id=44)
SELECT *
FROM teachers
JOIN course_teacher ON teachers.id = course_teacher.teacher_id
WHERE teachers.name = 'Fulvio' AND teachers.surname = 'Amato'





4. Selezionare tutti gli studenti con i dati relativi al corso di laurea a cui
sono iscritti e il relativo dipartimento, in ordine alfabetico per cognome e
nome
SELECT 
    students.*,
    exam_student.student_id AS exam_course_id,
    degrees.department_id AS degree_department_id
FROM students
JOIN exam_student ON students.id = exam_student.student_id
JOIN courses ON exam_student.student_id = courses.id
JOIN degrees ON courses.degree_id = degrees.id
JOIN departments ON degrees.department_id = departments.id
ORDER BY students.name , students.surname 


5. Selezionare tutti i corsi di laurea con i relativi corsi e insegnanti
SELECT degrees.*
FROM degrees
JOIN departments ON degrees.department_id= departments.id
WHERE departments.name = 'Dipartimento di Neuroscienze' AND degrees.level='Magistrale';




6. Selezionare tutti i docenti che insegnano nel Dipartimento di
Matematica 
SELECT DISTINCT * 
FROM teachers 
JOIN course_teacher ON teachers.id = course_teacher.teacher_id 
JOIN courses ON course_teacher.course_id = courses.id 
JOIN degrees on courses.degree_id = degrees.id 
JOIN departments ON departments.id = degrees.department_id
WHERE departments.name = 'Dipartimento di Matematica';
