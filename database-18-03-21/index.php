1. Write a statement that will select the City column from the Customers table.
<!-- SELECT `City` from customers-->
2. Select all the different values from the Country column in the Customers table.
<!--SELECT DISTINCT Country FROM `customers`-->
3. Select all records where the City column has the value “Berlin”.
<!--    SELECT * FROM `customers` WHERE City = "Berlin"-->
4. Use the NOT keyword to select all records where City is NOT “Berlin”.
<!--    SELECT * FROM `customers` WHERE City != "Berlin"-->
5. Select all records where the City column has the value ‘Berlin’ and the PostalCode column has the value 12209.
<!--    SELECT * from `customers` where City = 'Berlin' and PostalCode = 12209-->
6. Select all records from the Customers table, sort the result reversed alphabetically by the column City.
<!--    SELECT * FROM `customers` order by City desc-->
7. Select all records from the Customers table, sort the result alphabetically, first by the column Country, then, by the column City.
<!--    SELECT * FROM `customers` order by City asc-->
<!--    SELECT * FROM `customers` order by Country asc-->
8. Insert a new record in the Customers table.
<!--    INSERT INTO `customers`( `CustomerName`, `ContactName`, `Address`, `City`, `PostalCode`, `Country`) VALUES ( 'Alina', 'Alina', 'Baumana str.', 'Dnipro', '49000', 'Ukraine')-->
9. Select all records from the Customers where the PostalCode column is empty.
<!--    SELECT * FROM `customers` WHERE PostalCode = ''-->
10. Select all records from the Customers where the PostalCode column is NOT empty.
<!--    SELECT * FROM `customers` WHERE PostalCode != ''-->
11. Set the value of the City columns to ‘Oslo’, but only the ones where the Country column has the value “Norway”.
<!--    UPDATE `customers` SET `City`= 'Oslo' WHERE Country = 'Norway'-->
12. Update the City value and the Country value.
<!--    ?-->
13. Delete all the records from the Customers table where the Country value is ‘Norway’.
<!--    DELETE FROM `customers` WHERE Country = 'Norway'-->
14. Delete all the records from the Customers table.
<!--    DELETE FROM `customers`-->
15. Select all records where the value of the City column contains the letter “a”.
<!--    SELECT * FROM `customers` WHERE City LIKE '%a%'-->
16. Select all records where the value of the City column ends with the letter “a”.
<!--    SELECT * FROM `customers` WHERE City LIKE '%a'-->
17. Select all records where the value of the City column starts with letter “a” and ends with the letter “b”.
<!--    SELECT * FROM `customers` WHERE City LIKE 'a%b'-->
18. Select all records where the value of the City column does NOT start with the letter “a”.
<!--    SELECT * FROM `customers` WHERE City not LIKE 'a%'-->
19. Use the IN operator to select all the records where Country is NOT “Norway” and NOT “France”.
<!--    SELECT * FROM `customers` WHERE Country IN (SELECT Country = 'France' and Country = 'Norway')-->
20. Use the IN operator to select all the records where Country is either “Norway” or “France”.
<!--    SELECT * FROM `customers` WHERE Country NOT IN ('France','Norway')-->
21. Use the BETWEEN operator to select all the records where the value of the Price column is NOT between 10 and 20.
<!--    SELECT * FROM `products` WHERE Price NOT BETWEEN 10 and 20-->
22. Use the BETWEEN operator to select all the records where the value of the ProductName column is alphabetically between ‘Geitost’ and ‘Pavlova’.
<!--    SELECT * FROM `products` WHERE ProductName BETWEEN 'Geitost' and 'Pavlova'-->
23. Choose the correct JOIN clause to select all the records from the Customers table plus all the matches in the Orders table.
<!--    SELECT * FROM `customers` left join `orders` on customers.CustomerID = orders.CustomerID-->
24. Choose the correct JOIN Find out the number of orders made for each city (city) from the Customers table.
<!--    SELECT City, COUNT('OrderID') as TotalOrders FROM `customers` left join `orders` on customers.CustomerID = orders.CustomerID group by City order by COUNT('OrderID') DESC-->
25. Choose the correct JOIN Find out the total cost of orders for the user.
<!--    SELECT customers.CustomerID, COUNT('OrderID') as TotalOrders, SUM (Price*Quantity) as TotalCosts FROM `customers` left join orders on customers.CustomerID = orders.CustomerID left join order_details on orders.OrderID = order_details.OrderID left join products on order_details.ProductID = products.ProductID group by CustomerID ORDER BY `TotalCosts` DESC-->
26. Choose the correct JOIN  From the (Product) table, display only those products that have a Supplier: New Orleans Cajun Delights (2) or Tokyo Traders (4) and add the SupplierName to the product output
<!--    SELECT ProductName, SupplierName FROM `products` left join suppliers on products.SupplierID = suppliers.SupplierID where SupplierName = 'New Orleans Cajun Delights' OR SupplierName = 'Tokyo Traders'-->
27. Choose the correct JOIN Display the average amount of all orders for each date (OrderDate) in the (Orders) table, if the average amount of orders on that day was more than 30. Add to each date the person who accepted the order from the Employees table on that day
<!--    SELECT OrderDate, AVG (Price*Quantity)as AverageAmount, employees.EmployeeID FROM `order_details` inner join orders on order_details.OrderID = orders.OrderID inner join products on order_details.ProductID = products.ProductID inner join employees on orders.EmployeeID = employees.EmployeeID GROUP by OrderDate order by AverageAmount DESC-->

28. Use Group By. List the number of customers in each country, ordered by the country with the most customers first.
<!--    SELECT Country, Count('CustomerID') as UsersByCountry from `customers` GROUP by Country order by UsersByCountry DESC-->
29. Use Group By List the number of customers in each country
<!--    SELECT Country, Count('CustomerID') as UsersByCountry from `customers` GROUP by Country -->

