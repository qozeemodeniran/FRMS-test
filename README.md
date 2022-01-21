# FRMS-test
programming challenge --interview questions
Tasks
SQL
For this section, will are evaluating your basic knowledge of SQL
Write a SQL script to CREATE an employees table with the following fields and datatype:

id (int)(pk)
employee_id (int)
name (string)
address (string)
salary (decimal)

INSERT dummy data into the employee table created above

CREATE a stored procedure that SELECT all records FROM the employees whenever it is executed.

PHP
In this section, your object-oriented and HTTP knowledge is required:

Write a PHP program to execute the stored procedure you created in the previous task and return a JSON response and connect the response to an API endpoint.

HTML, CSS, JAVASCRIPT
You are to consume the API created in the previous task by sending an Ajax request to the endpoint.

Build the response you get dynamically into an HTML table where the JSON response keys are the table head and the values form up the table body.

On the table foot, calculate the total of all employees' salaries.

Format the table as follow: (use can CSS, but jQuery is preferred)
Table head text should be aligned to the centre and displayed in uppercase
The values in the salary column on the table body should be aligned to the right with thousands separating commas while other columns should be aligned to the left.
