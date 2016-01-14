# **_Developer page_** #


# Technologies #


This project has been designed by using the CSS templates. This is help to design our interfaces and also help Adobe Dreamweaver CS5.5 and HTML 5.  PHP have been used to develop the coding in our system. SQL server is used to create database as the back end for this system.



# Tables #

Our database contains eleven tables for our system.

### Users : ###

This table consists of some attributes such as user id, first name, last name, email, username, password and user level. These details help to create an account and login the system.

**users**
| **user\_id** | **firstname** | **lastname** | **email** | **username** | **password** | **ulevel** |
|:-------------|:--------------|:-------------|:----------|:-------------|:-------------|:-----------|
| 1            |	Maheswaran    | Nitharsan    | mnitharsan@yahoo.com | admin        | 21232f297a57a5a743894a0e4a801fc3 |	1          |
| 2            |	Mahes         |Nithar        | mnitharsan25@gmail.com | user         | ee11cbb19052e40b07aac0ca060c23ee | 2          |



### Lab equipments (le), Office equipments (oe), Furniture (fu) : ###

This table consists of some attributes such as Articles, Identification number, folio number, name of supplier, date, unit price, officer in charge and remarks. le table uses to lab equipments details,  oe table uses to office equipments details and  fu table uses to furniture details.

**Lab equipments (le)**
| **articles** |	**idno**|	**fno**	| **date** |	**supna**|	**up**|	**ofinch**|	**remarks**|
|:-------------|:--------|:--------|:---------|:---------|:------|:----------|:-----------|
|Computers & Tabulaters|	UJ/COMPSC/425/LE/04/005|	04      |	31/01/2012|	tharsan  |	35000 |	nitharsan |	computer   |
|Computers & Tabulaters|	UJ/COMPSC/425/LE/04/004|	04      |	31/01/2012|	tharsan  |	35000 |	nitharsan |	computer   |
|Computers & Tabulaters|	UJ/COMPSC/425/LE/04/001|	04      |	31/01/2012|	tharsan  |	35000 |	nitharsan |	computer   |
|Computers & Tabulaters|	UJ/COMPSC/425/LE/04/002|	04      |	31/01/2012|	tharsan  |	35000 |	nitharsan |	computer   |
|Computers & Tabulaters|	UJ/COMPSC/425/LE/04/003|	04      |	31/01/2012|	tharsan  |	35000 |	nitharsan |	computer   |
|Air Conditioner|	UJ/COMPSC/402/LE/02/002|	02      |	31/01/2012|	Nitharsan|	5000  |	tharsan   |	cooling    |
|Air Conditioner|	UJ/COMPSC/402/LE/02/001|	02      |	31/01/2012|	Nitharsan|	5000  |	tharsan   |	cooling    |
|Air Conditioner|	UJ/COMPSC/402/LE/02/003|	02      |	02/03/2012|	nitha    |	50000 |	tharsan   |	cooling    |
|Air Conditioner|	UJ/COMPSC/402/LE/02/004|	02      |	02/03/2012|	nitha    |	50000 |	tharsan   |	cooling    |

**Office equipments (oe)**
| **articles** |	**idno**|	**fno**	| **date** |	**supna**|	**up**|	**ofinch**|	**remarks**|
|:-------------|:--------|:--------|:---------|:---------|:------|:----------|:-----------|
|Chair(Dining)	|UJ/COMPSC/419/OE/04/003	|04	      |31/01/2012	|tharsan	  |1000	  |nitharsan	 |chair       |
|Chair(Dining)	|UJ/COMPSC/419/OE/04/001	|04	      |31/01/2012	|tharsan	  |1000	  |nitharsan	 |chair       |
|Chair(Dining)	|UJ/COMPSC/419/OE/04/002	|04	      |31/01/2012	|tharsan	  |1000	  |nitharsan	 |chair       |

**Furniture (fu)**
| **articles** |	**idno**|	**fno**	| **date** |	**supna**|	**up**|	**ofinch**|	**remarks**|
|:-------------|:--------|:--------|:---------|:---------|:------|:----------|:-----------|
|Chair(Arm)	   |UJ/COMPSC/418/F/04/001	|04	      |01/02/2012	|Nitharsan	|1000	  |tharsan	   |chair       |
|Chair(Arm)	   |UJ/COMPSC/418/F/04/002	|04	      |01/02/2012	|Nitharsan	|1000	  |tharsan	   |chair       |


### Consumable (cons), Stationary (sta), Maintenance (mai) : ###

This table consists of some attributes such as id, item, number, action, date and balance. Cons table uses to consumable details, sta table uses to stationary details and mai table uses to maintenance details.

**Consumable (cons)**
| **id** | **item** | **date** | **no** | **action** | **balance** |
|:-------|:---------|:---------|:-------|:-----------|:------------|
|1	      |Pen	      |28/01/2012	|5	      |received	   |5            |
|2	      |Pen	      |28/01/2012	|2	      |issued	     |3            |
|3	      |Note book	|29/01/2012	|4	      |received	   |4            |
|4	      |Note book	|29/01/2012	|2	      |issued	     |2            |
|5	      |Pen	      |29/01/2012	|4	      |received	   |7            |
|6	      |Pen	      |29/01/2012	|4	      |received	   |11           |
|7	      |Pen	      |29/01/2012	|2	      |received	   |13           |
|8	      |Pencil	   |29/01/2012	|4	      |received	   |4            |
|9	      |Pencil	   |29/01/2012	|2	      |received	   |6            |
|10	     |Pencil	   |17/02/2012	|5	      |received	   |11           |

**Stationary (sta)**
| **id** | **item** | **date** | **no** | **action** | **balance** |
|:-------|:---------|:---------|:-------|:-----------|:------------|
|1	      |Pen	      |01/02/2012	|4	      |received	   |4            |
|2	      |Pen	      |02/02/2012	|5	      |received	   |9            |
|3	      |Pencil	   |02/03/2012	|5	      |received	   |5            |

**Maintenance (mai)**
| **id** | **item** | **date** | **no** | **action** | **balance** |
|:-------|:---------|:---------|:-------|:-----------|:------------|
|1	      |Bulb	     |02/02/2012	|5	      |received	   |5            |
|3	      |Bulb	     |02/02/2012	|5	      |received	   |10           |


### Loan issue : ###

This table consists of some attributes such as loan id, article, id, issued date, issued by, received by, received department, status, return date and remarks. This table helps to add, edit and show the issued items.

**loanissue**
| **loan\_id** | **article** | **id** | **issued\_date** | **issued\_by** | **received\_by** | **received\_dept** | **status** | **return\_date** | **remarks** |
|:-------------|:------------|:-------|:-----------------|:---------------|:-----------------|:-------------------|:-----------|:-----------------|:------------|
|3	            |Air Conditioner	|UJ/COMPSC/402/LE/02/002	|05/02/2012	       |Ravi	           |Raja	             |Phy dept	           |0	          | 	                |             |
|4	            |Computers & Tabulaters	|UJ/COMPSC/425/LE/04/003	|10/02/2012	       |Mala	           |Kala	             |Che dept	           |1	          |21/2/2012	        |Computer     |


### Loan taken : ###

This table consists of some attributes such as loan id, article, id, issued department, received date, received by, status, return date and remarks. This table helps to add, edit and show the taken items.

**loantaken**
| **loan\_id** | **article** | **id** | **issued\_dept** | **received\_date** | **received\_by** | **status** | **return\_date** | **remarks** |
|:-------------|:------------|:-------|:-----------------|:-------------------|:-----------------|:-----------|:-----------------|:------------|
|6	            |Chair(Arm)	  |UJ/PHY/418/F/04/001	|Phy dept	         |10/02/2012	         |Ravi	             |0	          |                  |	            |
|7	            |Chair(Dining)	|UJ/MATHS/419/OE/04/001	|Maths dept	       |08/01/2012	         |Raja	             |1	          |21/02/2012	       |Chair        |


### Remove : ###

This table consists of some attributes such as id number, article, reason, date and authorized by. These details help to remove, view and show the individual articles.

**remove**
| **idno** | **article** | **reason** | **date** | **authorized\_by** |
|:---------|:------------|:-----------|:---------|:-------------------|
|UJ/COMPSC/419/OE/04/002	|Chair(Dining)	|broken	     |02.05.2012	|raja                |
|UJ/COMPSC/418/F/04/002	|Chair(Arm)	  |broken	     |02.05.2012	|mala                |
|UJ/COMPSC/402/LE/02/001	|Air Conditioner	|broken	     |02.05.2012	|nithar              |


### Current Status : ###

This table consists of some attributes such as id number, status( in, issued, removed ) and location. These details help to track the current status and location of the equipments.

**currentstatus**
| **idno** |**status** | **location** |
|:---------|:----------|:-------------|
|UJ/COMPSC/419/OE/04/001|	in	       |CSC dept      |
|UJ/COMPSC/419/OE/04/002|	removed	  |null          |
|UJ/COMPSC/419/OE/04/003|	in	       |CSC dept      |
|UJ/COMPSC/402/LE/02/002|	Issued	   |Phy dept      |
|UJ/COMPSC/425/LE/04/001|	in	       |CSC dept      |
|UJ/COMPSC/425/LE/04/002|	in	       |CSC dept      |
|UJ/COMPSC/425/LE/04/003|	in	       |CSC dept      |
|UJ/COMPSC/425/LE/04/004|	in	       |CSC dept      |
|UJ/COMPSC/425/LE/04/005|	in	       |CSC dept      |
|UJ/COMPSC/402/LE/02/001|	removed	  |null          |
|UJ/COMPSC/402/LE/02/003|	in	       |CSC dept      |
|UJ/COMPSC/402/LE/02/004|	in	       |CSC dept      |
|UJ/COMPSC/418/F/04/001|	in	       |CSC dept      |
|UJ/COMPSC/418/F/04/002|	removed	  |null          |