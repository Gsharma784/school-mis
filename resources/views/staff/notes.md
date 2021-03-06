# Notes for the Marks Section

Every teacher should have an account on the system so that they can fill in marks
on the platform.
When done, they can save their marks and the class master will have them ready.
Here are some ideas on how the teacher should fill in marks.

Class master should be able to register all the subjects that each teacher teaches for his/her class.
This makes it easy for the system to...

1. Admin will have to create sequence and set the lastest date for marks to be filled
2. Admin will then 'open' these sequence under a particular term

A class teacher can then fill in the marks as follows

1. The teacher should be able to select the subject he teaches
2. And the class that he teaches this subject in.
3. He then select the right sequence and
4. Enters the marks as per the student name that appears
5. He will include the test and exam marks, each of which are optional
6. Once submitted, he can then view them in the reports area.

## Report cards

Report cards will consist of the following information

1. The student personal and class information
2. The class master's information
3. His scores per subject in school (test, exam, total, and grade)
4. His overall ranking in class in order of merit
5. Disciplinary report or sanctions if he/she had any
6. Results to know if the student has been promoted to the next class or not.

# Relationships for the whole system

## Teacher

---

-   Teacher has many reminders
-   Teahcer can teach many subjects and classes
-   Teacher fills in marks for each of his/her subjects

## Student

-   Student belongs to only one class/level
-   Student has only one parent or guardian
-   Student has only one receipt

## Class

-   Class has many students
-   Class has many subjects
-   Has one class master/mistress

## Subject

-   Has many teachers
-   Belongs to many classes
