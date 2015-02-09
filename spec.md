Features:
---------
• Show Prizes
• Take Money
• User identification
• Choose specific prizes

Databases:
---------

ORGANIZERS:
- organizer_id (primary_key)
- user_id 

USERS:
- user_id (primary_key)
- created_timestamp
- email_address 
- first_name
- last_name
- token_or_password
- phone_number_key

PHONES:
- number_id (primary_key)
- country_code
- area_code
- digits
- extension

ADDRESSES:
- address_id (primary_key)
- street_number
- street_name
- apartment_or_suite
- city
- state
- ZIP

TICKET_PACKAGES:
- package_id (primary_key)
- package_name
- package_price_in_dollars

PRIZES:
- prize_id (primary_key) 
- prize_name
- sponsor_id
- package_id

SPONSOR:
- sponsor_id (primary_key)
- sponsor_name
- website_url
- phone_number_id

ORDER: 
- order_id (primary_key)
- created_at

#  Associates users with orders
USER_ORDERS:
- user_order_id (primary_key)
- user_id 
- order_id

#  Associates packages with orders
PACKAGES_IN_ORDER:
- package_to_order_association_id (primary_key)
- package_id
- order_id
- quantity


