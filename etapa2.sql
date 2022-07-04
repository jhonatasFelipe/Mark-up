select 
T1.first_name ||' '|| T1.last_name as full_name,
 T3.dept_name,
(T2.to_date - T2.from_date) as days
from employees as T1
inner join dept_emp as T2 on T1.emp_no = T2.emp_no
inner join departments as T3 on T2.dept_no = T3.dept_no
order by days desc
limit 10;