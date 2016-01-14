# **_Introduction Page_** #

# Introduction #


Inventory Management System was developed for anyone who needs a simple and easy way to keep track of their inventory.

Inventory is basically the total amount of goods and materials held in stock by a factory, store and other business. An inventory system is a process whereby a business keeps track of the goods and material it has available. Today’s competitive environment is forcing companies to optimize the procurement processes and inventory levels while at the same time ensure accuracy of controls and implementation of standard procedures for the flow of materials. However, in the absence of appropriate systems and information infrastructure, companies are finding it difficult to achieve smooth and efficient.

Nowadays each and every organization has a computerized system. These systems must be secure, efficient, and also economical. So, in this project we are trying to make inventory management system which will help employees to keep records in a systematic way, provide easy recovery of errors, have an overall end user high subjective satisfaction, produce report about the inventory and stock currently available in the department in automatic way and help them in decision making.

From this application only the administrative level staff can read, insert, update and delete a record or details of inventory and users. Other staff only view the information about inventory.

Our project is Inventory Management System. Our project was prepared for our Computer science department. This system maintains the details of latest equipments, details of equipment use in lab, discard and repair equipment details and loan details. When new equipment enters our lab, we check that equipment is main (lab, office, furniture) equipments or other (consumable, stationary, maintenance) equipments.

If that equipment is main, when we select that equipment in our system, automatically fill new identification number, new folio number and date. If that equipment is other, when we select that equipment and then select issued, automatically fill the increased balance or we select received, automatically fill the decreased balance in our system.

We can search main and other equipments. If we search main equipment, we can see these (Articles, Identification number, folio number, name of supplier, date, unit price, officer in charge and remarks) details. If search other equipment, we can see these (article, date, quality, balance, action) details. We maintain two kinds of loan details those are loan issue and loan taken. We can add and edit details in both categories. We can see these (articles, identification number, status, return date, department) details in both categories.



# Features #

We can divide the inventory into two main categories.

  * **Main equipment**
There are three categories of property that will be recorded, each with a life expectancy of more than two years which have the unique inventory identification no.
    1. Office equipment.
    1. Lab equipment.
    1. Furniture.
When we adding main equipment system will automatically generates the identification no.

  * **Other equipment**
There are three categories of property that will be recorded, each with a life expectancy of less than two years.
    1. Stationary.
    1. Maintenance.
    1. Consumables.

•	When we adding or issuing the other equipment, system will automatically generates the balance. So it reduces the unexpected shortages of critical items and unnecessary purchases (orders) of items already on hand.


### Managing obtained Loan detail ###
•	The one department can issue an item to another department by a loan, this process is called loan issued.

•	Also one department can received an item from another department, this process is called loan taken.

This system provides easy way to keep track of the inventory loan details. So it reduces the undetected theft or loss.


### Managing the details of Removed Item ###
When a department has property it wants to remove (as either scrap or surplus), the _“Unserviceable Articles”_ form must be completed by the data entry officer and forwarded to the administration branch.

  * Serviceable & should be sold.
  * Unserviceable & should be destroyed.
  * Repairable & should be preserved.

> The data entry officer can remove the item when he received the approval of removal from technical evaluation committee.


This system provides easy way to keep track of the remove inventory details. So it reduces the hazardous working condition to appropriate personnel and easy to identifying surplus or underutilized items and for reporting items that require repair.


### User Authentication ###

The system will provide functionality to allow the user to log in to the system with a username and password. It is implemented as a very secure system to control unauthorized access through encrypted password. Only the Data entry officer can insert, edit and delete inventory and user details. Our system use CAPTCHA to check if the person registering is a real live human being as opposed to a computer program attempting to spam the site.

Our system facilitates the search through different type of queries. So it is easy to identify inventory through id no or type.