Routes:
-------

USERS:
------
user/new 			// Show new sign up form
user/edit/{user_id}	// Allow users to edit their profile. 
					// Non-orgranizers are redirected to 
					// their own profiles.
user/log-in			// Log user in
user/log-out		// Log user out.

---
**These routes may require admin (organizer) privileges.**
---

CATALOG:
--------
catalog/all
catalog/package/{package_id}

PACKAGES:
---------
package/ticket/new					//	Add a new ticket package
package/ticket/edit/{package_id}	//	Edit a given package's 
package/ticket/remove/{package_id}	//	Remove the package
package/ticket/all 					//	View a list of all ticket packages

package/prize/new					//	Add a new prize package
package/prize/edit/{package_id}		//	Edit a given prize package
package/prize/delete/{package_id}	//	Delete the given prize package
package/prize/all 					//	Show a list of all of the prizes packages.

PRIZES:
-------
prize/new					//	Create a new prize
prize/edit/{prize_id}		//	Edit the prize with the given ID
prize/delete/{prize_id}		//	Delete the prize with the given ID
prize/all 					//	Show a list of all prizes.

ORDERS:
-------
order/new					/	Start the order workflow
orders/view/all				//	Shows all of my orders if logged in. 
							//	Organizers see all orders.
orders/view/{order_id}		//	Show orders for order ID.